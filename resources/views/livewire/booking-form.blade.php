<form wire:submit.prevent="submit" class="max-w-md md:max-w-md mx-auto" x-data="{
	showLeaveTypeDropdown: false,
	showLeaveDurationDropdown: false,
}">
	<div class="rounded-lg bg-white border border-gray-200 shadow">
		<div class="py-6 px-4 space-y-4 sm:p-6">
			<h3 class="text-lg leading-6 font-medium text-gray-900">
				Book Time Off
			</h3>
	
			<div class="grid grid-cols-6 gap-4">
				<div class="col-span-6">
					<label id="listbox-label" class="block text-sm font-medium text-gray-700">
						Leave Type
					</label>
					<div class="mt-1 relative">
						<button class="relative w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label"
							@click="showLeaveTypeDropdown = !showLeaveTypeDropdown" 
							type="button"
						>
							<div class="flex items-center">
								<span class="ml-1 block truncate">
									{{ $currentLeave->name }}
								</span>
							</div>
							<span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
								<!-- Heroicon name: solid/selector -->
								<svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
									<path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
								</svg>
							</span>
						</button>

						<ul class="dropdown"
							x-show="showLeaveTypeDropdown"
							x-transition:enter="transition ease-in duration-100"
							x-transition:enter-start="opacity-0"
							x-transition:enter-end="opacity-100"
							x-transition:leave="transition ease-in duration-100"
							x-transition:leave-start="opacity-100"
							x-transition:leave-end="opacity-0"
							@click.away="showLeaveTypeDropdown = false"
							x-cloak
						>
							@foreach($leaveTypes as $leave)
							<li wire:click="changeLeaveType('{{ $leave->name }}')" 
								@click="showLeaveTypeDropdown = false"
								class="hover:bg-blue-600 hover:text-white cursor-pointer select-none relative py-2 pl-3 pr-9
									@if($leave->name == $currentLeave->name) text-white bg-blue-600 @else text-gray-900 @endif"
							>
								<div class="flex items-center">
									
									<!-- Selected: "font-semibold", Not Selected: "font-normal" -->
									<span class="ml-3 block truncate
										@if($leave->name == $currentLeave->name) font-semibold @else font-normal @endif"
									>
										{{ $leave->name }}
									</span>
								</div>

								<span class="absolute inset-y-0 right-0 flex items-center pr-4
									@if($leave->name == $currentLeave->name) text-white @else hidden @endif"
								>
									<!-- Heroicon name: solid/check -->
									<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
									</svg>
								</span>
							</li>
							@endforeach

						</ul>
					</div>
				</div>

				<div class="col-span-6">
					<label id="listbox-label" class="block text-sm font-medium text-gray-700">
						Duration
					</label>
					<div class="mt-1 relative">
						<button @click="showLeaveDurationDropdown = !showLeaveDurationDropdown" type="button" class="bg-white relative w-full border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
							<span class="ml-1 block truncate">
								{{ $currentDuration->name }}
							</span>
							<span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
								<!-- Heroicon name: solid/selector -->
								<svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
									<path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
								</svg>
							</span>
						</button>

						<ul class="dropdown"
							x-show="showLeaveDurationDropdown" 
							x-transition:enter="transition ease-in duration-100"
							x-transition:enter-start="opacity-0"
							x-transition:enter-end="opacity-100"
							x-transition:leave="transition ease-in duration-100"
							x-transition:leave-start="opacity-100"
							x-transition:leave-end="opacity-0"
							@click.away="showLeaveDurationDropdown = false"
							x-cloak
						>

							@foreach($durations as $duration)
							<li wire:click="changeDuration('{{ $duration->name }}')" 
								@click="showLeaveDurationDropdown = false" 
								class="hover:bg-blue-600 hover:text-white cursor-pointer select-none relative py-2 pl-3 pr-9
									@if($duration->name == $currentDuration->name) text-white bg-blue-600 @else text-gray-900 @endif"
							>
								<div class="flex items-center">
									<span class="ml-3 block truncate
										@if($duration->name == $currentDuration->name) font-semibold @else font-normal @endif"
									>
										{{ $duration->name }}
									</span>
								</div>

								<span class="absolute inset-y-0 right-0 flex items-center pr-4
									@if($duration->name == $currentDuration->name) text-white @else hidden @endif"
								>
									<!-- Heroicon name: solid/check -->
									<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
									</svg>
								</span>
							</li>
							@endforeach

						</ul>
					</div>
				</div>

				@if($currentDuration->isSingleDayType())
				<div class="col-span-6">
					<label id="listbox-label" class="block text-sm font-medium text-gray-700">
						Date
					</label>
					<div class="mt-1 relative">
						<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
							<svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
						</div>
						<x-form.datepicker 
							wire:model="startDate" 
							placeholder="Select date"
						/>
					</div>
					@error('start_date') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
				</div>
				@elseif($currentDuration->isMultipleDayType())
				<div class="col-span-6">
					<label id="listbox-label" class="block text-sm font-medium text-gray-700">
						Date Range
					</label> 
					<div class="flex items-center">
						<div class="mt-1 relative">
							<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
								<svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
							</div>
							<x-form.datepicker 
								wire:model="startDate" 
								placeholder="Start date" 
							/>
						</div>
						<span class="mx-2 text-gray-500">to</span>
						<div class="relative">
							<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
								<svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
							</div>
							<x-form.datepicker 
								wire:model="endDate" 
								placeholder="End date" 
							/>
						</div>
					</div>
				</div>
				@endif

				@if($currentDuration->checkDayType(App\Enums\DayType::PARTIAL))
				<div class="col-span-6">
					<label id="listbox-label" class="block text-sm font-medium text-gray-700">
						Time Range
					</label> 
					<div class="flex items-center">
						<div class="mt-1 relative">
							<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
									<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
								</svg>
							</div>
							<input 
								class="date-input" 
								type="time" 
								wire:model="startTime"
							/>
						</div>
						<span class="mx-2 text-gray-500">to</span>
						<div class="relative">
							<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
									<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
								</svg>
							</div>
							<input 
								class="date-input" 
								type="time" 
								wire:model="endTime"
							/>
						</div>
					</div>
				</div>
				@endif

			</div>
		</div>
		<div class="px-4 py-3 bg-gray-50 rounded-b-lg sm:px-6">
			<button type="submit" class="w-full bg-blue-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
				<svg wire:loading wire:target="submit" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
					<circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
					<path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
				</svg>
				Book Time Off
			</button>
		</div>
	</div>
</form>

