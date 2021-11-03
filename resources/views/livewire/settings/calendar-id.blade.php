<form wire:submit.prevent="submit">
	<div class="shadow sm:rounded-md sm:overflow-hidden">
		<div class="bg-white py-6 px-4 sm:p-6">
			<div>
				<h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">
					Google Calendar ID
				</h2>
				<p class="mt-1 text-sm text-gray-500">
					You can find your Google Calendar ID in your calendar settings. Your Calendar will also need to be made public.
				</p>
			</div>

			<div class="mt-6 grid grid-cols-4 gap-6">
				<div class="col-span-4">
					<label for="first-name" class="block text-sm font-medium text-gray-700">Calendar ID</label>
					<input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm
						@error('calendarId') border-red-500 @enderror"
							type="text" 
							wire:model.defer="calendarId" 
					>
					@error('calendarId') <span class="text-xs text-red-500"> {{ $message }} </span> @enderror
				</div>
			</div>
		</div>

		<div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
			<button wire:submit class="bg-gray-800 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
				Save
			</button>
		</div>
	</div>
</form>