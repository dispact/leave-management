<div x-data="
	{ 
		show: true, 
		type: 'success',
		timer: null,

		beginTimeout() {
			this.show = true;
			this.timer = setTimeout(() => this.show = false, 2000);
		},

		restartTimeout() {
			clearTimeout(this.timer);
			this.beginTimeout();
		}

	}" 
	@alert-timeout.window="restartTimeout();"
	x-cloak
>
	<div class="fixed inset-0 p-4 rounded-md z-50 max-h-14 max-w-xl ml-auto mr-auto mt-1"
		:class="type == 'success' ? 'bg-green-200 dark:bg-green-500' : 'bg-red-200 dark:bg-red-500'"
		x-show="show"
		x-transition:enter="ease-out duration-300"
		x-transition:enter-start="opacity-0 transform -translate-y-24"
		x-transition:enter-end="opacity-100"
		x-transition:leave="ease-in duration-200"
		x-transition:leave-start="opacity-100"
		x-transition:leave-end="opacity-0 transform -translate-y-24"
	>
		<div class="flex">
			<div class="flex-shrink-0">
				<svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
               <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
             </svg>
			</div>
			<div class="ml-3">
				<p 
					class="text-sm font-medium"
					:class="type == 'success' ? 'text-green-800 dark:text-green-100' : 'text-red-800 dark:text-red-100'"
				>
					{{ $message }}
				</p>
			</div>
			<div class="ml-auto pl-3">
				<div class="-mx-1.5 -my-1.5">
					<button @click="show = false"
						type="button" 
						class="inline-flex rounded-md p-1.5"
						:class="type == 'success' ?
							'text-green-500 hover:text-green-700 dark:text-green-200 dark:hover:text-green-700' :
							'text-red-500 hover:text-red-700 dark:text-red-200 dark:hover:text-red-700'"
					>
						<span class="sr-only">Dismiss</span>
						<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                     <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                   </svg>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>