<x-app-layout>
   <div class="px-2 py-4 w-full max-w-4xl">
		<livewire:user-table />
	</div>
	<div class="fixed z-10 inset-0 overflow-y-auto" role="dialog" aria-modal="true">
		<div class="flex min-h-screen text-center md:block md:px-2 lg:px-4" style="font-size: 0;">
		  <!--
			 Background overlay, show/hide based on modal state.
	 
			 Entering: "ease-out duration-300"
				From: "opacity-0"
				To: "opacity-100"
			 Leaving: "ease-in duration-200"
				From: "opacity-100"
				To: "opacity-0"
		  -->
		  <div class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity md:block" aria-hidden="true"></div>
	 
		  <!-- This element is to trick the browser into centering the modal contents. -->
		  <span class="hidden md:inline-block md:align-middle md:h-screen" aria-hidden="true">&#8203;</span>
	 
		  <!--
			 Modal panel, show/hide based on modal state.
	 
			 Entering: "ease-out duration-300"
				From: "opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
				To: "opacity-100 translate-y-0 md:scale-100"
			 Leaving: "ease-in duration-200"
				From: "opacity-100 translate-y-0 md:scale-100"
				To: "opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
		  -->
		  <div class="flex text-base text-left transform transition w-full md:inline-block md:max-w-2xl md:px-4 md:my-8 md:align-middle lg:max-w-4xl">
			 <div class="w-full relative flex items-center bg-white px-4 pt-14 pb-8 overflow-hidden shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
				<button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 sm:top-8 sm:right-6 md:top-6 md:right-6 lg:top-8 lg:right-8">
				  <span class="sr-only">Close</span>
				  <!-- Heroicon name: outline/x -->
				  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
					 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
				  </svg>
				</button>
	 
				<div class="w-full grid grid-cols-1 gap-y-8 gap-x-6 items-start sm:grid-cols-12 lg:gap-x-8">
				  <div class="sm:col-span-4 lg:col-span-5">
					 <div class="aspect-w-1 aspect-h-1 rounded-lg overflow-hidden">
						<img src="{{ auth()->user()->image }}" alt="" class="object-center object-cover">
						<h2 class="text-md font-medium">
							{{ auth()->user()->name }}
						</h2>
					 </div>
				  </div>
				  <div class="sm:col-span-8 lg:col-span-7">
					 <h2 class="text-2xl font-extrabold text-gray-900 sm:pr-12">Edit User</h2>
	
					 
				  </div>
				</div>
			 </div>
		  </div>
		</div>
	 </div>
</x-app-layout>