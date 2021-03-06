<div class="flex flex-col">
	<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
		<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
			
			@if($leaves->total())
			<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
				<table class="min-w-full divide-y divide-gray-200">
					<thead class="bg-gray-50">
						<tr>
							<th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
								Date
							</th>
							<th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
								Type
							</th>
							<th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
								Duration
							</th>
							<th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
								Status
							</th>
						</tr>
					</thead>
					<tbody class="bg-white divide-y divide-gray-200">
						@foreach($leaves as $leave)
						<tr>
							<td class="px-6 py-4 whitespace-nowrap text-center">
								<div class="text-sm text-gray-900">
									@if($leave->duration->isMultipleDayType())
										{{ $leave->getStartDate() }} - {{ $leave->getEndDate() }}
									@else
										{{ $leave->getStartDate() }}
									@endif
								</div>
							</td>
							<td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900">
								{{ $leave->leave_type->name }}
							</td>
							<td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900">
								{{ $leave->duration->name }} @if(!$leave->duration->checkDayType('Single') && !$leave->duration->checkDayType('Multiple')) ({{ $leave->getStartTime() }} - {{ $leave->getEndTime() }}) @endif
							</td>
							<td class="px-6 py-4 whitespace-nowrap text-center">
								<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-{{ $leave->status->color() }}-100 text-{{ $leave->status->color() }}-800">
									{{ $leave->status }}
								</span>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="p-2">
				{{ $leaves->links() }}
			</div>
			@else
			<h2 class="text-xl font-medium text-center pt-6">
				You have no leaves. Go take some time off!
			</h2>
			@endif
		</div>
	</div>
</div> 