<!-- This example requires Tailwind CSS v2.0+ -->
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
							<td class="px-6 py-4 whitespace-nowrap">
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
							<td class="px-6 py-4 text-center">
								<div>
									<select class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
										<option selected hidden>-</option>
										@foreach($supervisors as $supervisor)
										<option value="{{ $supervisor->id }}">{{ $supervisor->name }}</option>
										@endforeach
									</select>
								 </div>
							</td>

							<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
								{{ ucwords($user->roles[0]->name) }}
							</td>
							<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
								<a href="#" class="text-delete-600 hover:text-delete-900">Delete</a>
							</td>
						</tr>
						@endforeach

						<!-- More people... -->
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>