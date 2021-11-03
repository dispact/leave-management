<form wire:submit.prevent="submit">
	<div class="shadow sm:rounded-md sm:overflow-hidden">
		<div class="bg-white py-6 px-4 sm:p-6">
			<div>
				<h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">
					{{ $header }}
				</h2>
				<p class="mt-1 text-sm text-gray-500">
					{{ $subHeader }}
				</p>
			</div>

			<div class="mt-6 grid grid-cols-4 gap-6">
				<div class="col-span-4">
					<label class="block text-sm font-medium text-gray-700">{{ $label }}</label>
					{{ $input }}
				</div>
			</div>
		</div>

		<div class="px-4 py-2 bg-gray-50 text-right sm:px-6">
			<button wire:submit class="bg-gray-800 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
				Save
			</button>
		</div>
	</div>
</form>