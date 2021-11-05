<x-settings.template 
	header="Default Approver" 
	subHeader="This will be the default approver for all new users. The approver MUST be a supervisor."
	label="Approver"
>
	<x-slot name="input">
		<select wire:change="changeApprover($event.target.value)" class="block mt-1 w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            <option hidden>Select a Supervisor</option>
            @foreach($allSupervisors as $supervisor)
                <option value="{{ $supervisor->id }}"
                    @if($approverId == $supervisor->id) selected @endif    
                >
                    {{ $supervisor->name }}
                </option>
            @endforeach
        </select>

		@error('approver') 
			<span class="text-xs text-red-500"> 
				{{ $message }} 
			</span>
		@enderror
	</x-slot>
</x-settings.template>