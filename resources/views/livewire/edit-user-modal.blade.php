<div class="fixed z-10 inset-0 overflow-y-auto" role="dialog" aria-modal="true" 
	x-data="{
		show: @entangle('show')
	}"
	x-show="show"
	x-cloak
>
	<div class="flex min-h-screen text-center md:block md:px-2 lg:px-4" style="font-size: 0;">

		<div class="block fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"
			x-transition:enter="ease-out duration-300"
			x-transition:enter-start="opacity-0"
			x-transition:enter-end="opacity-100"
			x-transition:leave="ease-in duration-200"
			x-transition:leave-start="opacity-100"
			x-transition:leave-end="opacity-0"
			x-show="show"
		></div>

		<!-- This element is to trick the browser into centering the modal contents. -->
		<span class="hidden md:inline-block md:align-middle md:h-screen" aria-hidden="true">&#8203;</span>
	
		<div class="text-base px-6 my-auto text-left transform transition w-full md:inline-block md:max-w-2xl md:px-4 md:my-8 md:align-middle lg:max-w-4xl"
			x-transition:enter="ease-out duration-300"
			x-transition:enter-start="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
			x-transition:enter-end="opacity-100 translate-y-0 md:scale-100"
			x-transition:leave="ease-in duration-200"
			x-transition:leave-start="opacity-100 translate-y-0 md:scale-100"
			x-transition:leave-end="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
			x-show="show"
		>
			<div class="w-full relative flex items-center bg-white px-8 pt-14 pb-8 overflow-hidden shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
				<button @click="show = !show" type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 sm:top-8 sm:right-6 md:top-6 md:right-6 lg:top-8 lg:right-8">
					<span class="sr-only">Close</span>
					<!-- Heroicon name: outline/x -->
					<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
					</svg>
				</button>

				<form wire:submit.prevent="submit" class="w-full grid grid-cols-12 gap-y-2 gap-x-6 items-start lg:gap-x-8">
					<div class="col-span-12">
						<h2 class="text-2xl font-extrabold text-gray-900 sm:pr-12 text-center">Edit User</h2>
					</div>
					<div class="sm:col-span-4 lg:col-span-3 col-span-3 h-full flex items-center justify-center">
						<div class="space-y-2">
							<img src="{{ $user->image ?? '' }}" 
								alt="{{ $user->name ?? '' }}" 
								class="object-center object-cover mx-auto w-28 h-28 rounded-full"
							>
							<h2 class="text-lg font-medium text-center">
								{{ $user->name ?? '' }}
							</h2>
						</div>
					</div>
					<div class="sm:col-span-8 lg:col-span-9 col-span-9">
						
						<div class="mt-2">
							<label class="block text-sm font-medium text-gray-700">
								Approver
							</label>
							<select wire:model="currentSupervisor" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
								<option hidden>Select a Supervisor</option>
								@foreach($allSupervisors as $supervisor)
								<option value="{{ $supervisor->id }}"
									@if($currentSupervisor == $supervisor->id) selected @endif
								>
									{{ $supervisor->name }}
								</option>
								@endforeach
							</select>
							@error('currentSupervisor')
								<span class="text-xs text-red-500">{{ $message }}</span>
							@enderror
						</div>

						<div class="mt-2">
							<label class="block text-sm font-medium text-gray-700">Role</label>
							<select wire:model="currentRole" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
								<option hidden>Select a Role</option>
								@foreach($allRoles as $role)
								<option value="{{ $role->id }}"
									@if($currentRole == $role->role_id) selected @endif
								>
									{{ ucwords($role->name) }}
								</option>
								@endforeach
							</select>
							@error('currentRole')
								<span class="text-xs text-red-500">{{ $message }}</span>
							@enderror
						</div>
				
					</div>
					<div class="col-span-12 flex justify-end items-end space-x-2">
						<button @click="show = !show" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">
							Cancel
						</button>
						<button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
							Save
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>