<div class="flex flex-col">
	<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
		<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
			@if($leaves->total())
			<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
				<table class="min-w-full divide-y divide-gray-200">
					<thead class="bg-gray-50">
						<tr>
							<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
								Name
							</th>
							<th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
								Type
							</th>
							<th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
								Duration
							</th>
							<th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
								Date
							</th>
							<th scope="col" class="relative px-6 py-3">
								<span class="sr-only">Action</span>
							</th>
						</tr>
					</thead>
					<tbody class="bg-white divide-y divide-gray-200">
						@foreach($leaves as $leave)
						<tr>
							<td class="px-6 py-4 whitespace-nowrap">
								<div class="flex items-center">
									<div class="flex-shrink-0 h-8 w-8">
										<img class="h-8 w-8 rounded-full" 
											src="{{ $leave->user->image }}" alt="{{ $leave->user->name }}"
										>
									</div>
									<div class="ml-2">
										<div class="text-sm font-medium text-gray-900">
											{{ $leave->user->name }}
										</div>
									</div>
								</div>
							</td>
							<td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900">
								{{ $leave->leave_type->name }}
							</td>
							<td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900">
								{{ $leave->duration->name }} 
							</td>
							<td class="px-6 py-4 whitespace-nowrap text-center">
								<div class="text-sm text-gray-900">
									@if($leave->duration->isSingleDayType() && $leave->duration->checkDayType('Single'))
										{{ $leave->getStartDate() }}
									@elseif($leave->duration->isMultipleDayType())
										<div class="block">
											{{ $leave->getStartDate() }} - {{ $leave->getEndDate() }}
										</div>
									@else
									<div class="block">
										{{ $leave->getStartDate() }}
									</div>
									<div class="block">
										{{ $leave->getStartTime() }} - {{ $leave->getEndTime() }}
									</div>
									@endif
								</div>
							</td>
							<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
								@can('approval.write')
								<button class="text-green-600 hover:text-green-900"
									wire:click="approve({{ $leave->id }})" 
								>
									Approve
								</button>
					
								<button class="text-red-600 hover:text-red-900"
									wire:click="deny({{ $leave->id }})"
								>
									Deny
								</button>
								@endcan
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
				You have no leaves to approve. 
			</h2>
			@endif
		</div>
	</div>
</div>
