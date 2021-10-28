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
							<td class="px-4 py-3 text-center">
								{{ $user->approver->name ?? '-' }}
							</td>

							<td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500 text-center">
								{{ ucwords($user->roles[0]->name) }}
							</td>
							<td class="px-4 py-3 whitespace-nowrap text-right text-sm font-medium space-x-2">
								<a href="#" class="text-blue-600 hover:text-blue-900">Edit</a>
								<a href="#" class="text-red-600 hover:text-red-900">Delete</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>