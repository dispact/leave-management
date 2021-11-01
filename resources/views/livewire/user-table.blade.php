<div class="flex flex-col" x-data="{
	showApproverDropdown: false
}">
	<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
		<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
			<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
				<table class="min-w-full divide-y divide-gray-200">
					<thead class="bg-gray-50">
						<tr>
							<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
								Name
							</th>
							<th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
								Approver
							</th>
							<th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
								Role
							</th>
							<th scope="col" class="relative px-6 py-3">
								<span class="sr-only">Edit</span>
							</th>
						</tr>
					</thead>
					<tbody class="bg-white divide-y divide-gray-200">
						@foreach($users as $user)
						<tr>
							<td class="px-4 py-3 whitespace-nowrap">
								<div class="flex items-center">
									<div class="flex-shrink-0 h-10 w-10">
										<img class="h-10 w-10 rounded-full" 
											src="{{ $user->image }}" alt="{{ $user->name }}">
									</div>
									<div class="ml-4">
										<div class="text-sm font-medium text-gray-900">
											{{ $user->name }}
										</div>
										<div class="text-sm text-gray-500">
											{{ $user->email }}
										</div>
									</div>
								</div>
							</td>
							<td class="px-4 py-3 text-center text-sm text-gray-600">
								<select wire:change="changeApprover({{ $user->id }}, $event.target.value)" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
									<option hidden>Select a Supervisor</option>
									@foreach($allSupervisors as $supervisor)
									<option value="{{ $supervisor->id }}"
										@if($user->approver_id == $supervisor->id) selected @endif
									>
										{{ $supervisor->name }}
									</option>
									@endforeach
								</select>
							</td>

							<td class="px-4 py-3 whitespace-nowrap text-sm text-gray-600">
								<select wire:change="changeRole({{ $user->id }}, $event.target.value)" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
									<option hidden>Select a Role</option>
									@foreach($allRoles as $role)
									<option value="{{ $role->id }}"
										@if($user->hasRole($role)) selected @endif
									>
										{{ ucwords($role->name) }}
									</option>
									@endforeach
								</select>
							</td>
							<td class="px-4 py-3 whitespace-nowrap text-center text-sm font-medium space-x-2">
								<button wire:click="deleteUser({{ $user->id }})" class="text-red-600 hover:text-red-900">
									Delete
								</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>