<?php

namespace App\Http\Livewire;

use Cache;
use Carbon\Carbon;
use App\Models\Leave;
use App\Enums\DayType;
use Livewire\Component;
use App\Models\Duration;
use App\Models\LeaveType;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BookingForm extends Component
{
	public $leaveTypes = '';
	public $durations = '';
	public $currentLeave = '';
	public $currentDuration = '';
	public $startDate = '';
	public $endDate = '';
	public $startTime = '07:00';
	public $endTime = '15:00';

	public function mount() {
		// var_dump(session('Authorization'));
		$this->leaveTypes = Cache::remember('leave_types', 3600, function () { 
			return LeaveType::all();
	  	});
		$this->durations = Cache::remember('durations', 3600, function () { 
			return Duration::all();
	  	});
		$this->currentLeave = $this->leaveTypes->first();
		$this->currentDuration = $this->durations->first();
	}

	public function changeLeaveType($leave) {
		$this->currentLeave = Cache::get('leave_types')->where('name', $leave)->first();
	}

	public function changeDuration($duration) {
		$this->currentDuration = Cache::get('durations')->where('name', $duration)->first();
	}

	public function correctTime() {
		switch ($this->currentDuration->day) {
			case(DayType::FIRST_HALF):
				$this->startTime = "07:00";
				$this->endTime = "11:00";
				break;
			case(DayType::SECOND_HALF):
				$this->startTime = "11:00";
				$this->endTime = "15:00";
				break;
			case(DayType::PARTIAL):
				break;
			default:
				$this->startTime = "07:00";
				$this->endTime = "15:00";
		}
	}

	public function singleDay() {
		if($this->currentDuration->isSingleDayType())
			$this->endDate = $this->startDate;
	}

	public function clearDate() {
		$this->startDate = '';
		$this->endDate = '';
	}

	public function submit() {
		$this->singleDay();
		$this->correctTime();

		$validated = Validator::make([
			'leave_type' => $this->currentLeave->id,
			'duration' => $this->currentDuration->id,
			'start_date' => $this->startDate,
			'end_date' => $this->endDate
		], [
			'leave_type' => 'required',
			'duration' => 'required',
			'start_date' => 'required',
			'end_date' => 'required'
		])->validate();

		$startDate = Carbon::parse($validated['start_date'] . ' ' . $this->startTime)->toRfc3339String();
		$endDate = Carbon::parse($validated['end_date'] . ' ' . $this->endTime)->toRfc3339String();


		if (Leave::where('user_id', Auth::id())
				->where('start_date', $startDate)
				->orWhere('end_date', $endDate)
				->exists()
		) {
			return $this->emit('flashError', 'You already have a leave scheduled during this time.');
		}

		try {
			Leave::create([
				'user_id' => Auth::id(),
				'leave_type_id' => $validated['leave_type'],
				'duration_id' => $validated['duration'],
				'start_date' => $startDate,
				'end_date' => $endDate
			]);

			$this->emit('flashSuccess', 'Your time off request has been submitted');
			$this->clearDate();
		} catch (\exception $e) {
			$this->emit('flashError', 'Error creating leave');
			Log::error($e);
		}
	}

	public function render()
	{
		return view('livewire.booking-form');
	}
}
