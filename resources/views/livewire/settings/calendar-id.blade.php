<x-settings.template 
	header="Google Calendar ID" 
	subHeader="You can find your Google Calendar ID in your calendar settings. Your Calendar will also need to be made public."
	label="Calendar ID"
>
	<x-slot name="input">
		<input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm
			@error('calendarId') border-red-500 @enderror"
			type="text" 
			wire:model.defer="calendarId" 
		>
		
		@error('calendarId') 
			<span class="text-xs text-red-500"> 
				{{ $message }} 
			</span>
		@enderror
	</x-slot>
</x-settings.template>