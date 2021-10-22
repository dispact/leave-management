<div class="h-screen flex overflow-hidden bg-gray-100" x-data="{
	showDesktopSidebar: true,
	showCollapsedDesktopSidebar: false,
	showMobileSidebar: false,
	showLeaveTypeDropdown: false,
	showLeaveDurationDropdown: false,
}">
	<!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
	<div class="fixed inset-0 flex z-40 md:hidden" 
		role="dialog" 
		aria-modal="true" 
		x-show="showMobileSidebar"
		x-transition:enter="transition-opacity ease-linear duration-300"
		x-transition:enter-start="opacity-0"
		x-transition:enter-end="opacity-100"
		x-transition:leave="transition-opacity ease-linear duration-300"
		x-transition:leave-start="opacity-100"
		x-transition:leave-end="opacity-0"
	>
		<!--
			Off-canvas menu overlay, show/hide based on off-canvas menu state.
		-->
		<div class="fixed inset-0 bg-gray-600 bg-opacity-75" 
			aria-hidden="true" 
			x-show="showMobileSidebar"
			x-transition:enter="ease-in-out duration-300"
			x-transition:enter-start="opacity-0"
			x-transition:enter-end="opacity-100"
			x-transition:leave="ease-in-out duration-300"
			x-transition:leave-start="opacity-100"
			x-transition:leave-end="opacity-0"
		></div>

		<!--
			Off-canvas menu, show/hide based on off-canvas menu state.
		-->
		<div class="relative flex-1 flex flex-col max-w-xs w-full bg-white"
			x-show="showMobileSidebar"
			x-transition:enter="transition ease-in-out duration-300 transform"
			x-transition:enter-start="-translate-x-full"
			x-transition:enter-end="translate-x-0"
			x-transition:leave="transition ease-in-out duration-300 transform"
			x-transition:leave-start="translate-x-0"
			x-transition:leave-end="-translate-x-full"
		>
			<!--
			Close button, show/hide based on off-canvas menu state.
			-->
			<div class="absolute top-0 right-0 -mr-12 pt-2"
				x-transition:enter="ease-in-out duration-300"
				x-transition:enter-start="opacity-0"
				x-transition:enter-end="opacity-100"
				x-transition:leave="ease-in-out duration-300"
				x-transition:leave-start="opacity-100"
				x-transition:leave-end="opacity-0"
			>
				<button @click="showMobileSidebar = false" type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
					<span class="sr-only">Close sidebar</span>
					<!-- Heroicon name: outline/x -->
					<svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
					</svg>
				</button>
			</div>

			<div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
				<div class="flex-shrink-0 flex items-center px-4">
					<div class="font-medium text-xl">
						<span class="text-blue-500">Leave</span>Flow
					</div>
				</div>
				<nav class="mt-5 px-2 space-y-1">
					<x-navigation.side.links :mobile="true" />
				</nav>
			</div>
			<x-navigation.side.auth-section :mobile="true" />
		</div>

		<div class="flex-shrink-0 w-14"></div>

	</div>

	<!-- Static sidebar for desktop -->
	<div class="hidden md:flex md:flex-shrink-0" x-show="showDesktopSidebar">
		<div class="flex flex-col" :class="showCollapsedDesktopSidebar ? 'w-16' : 'w-64'">
			<!-- Sidebar component, swap this element with another sidebar if you like -->
			<template x-if="!showCollapsedDesktopSidebar">
				<div class="flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white">
					<div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
						<div class="flex items-center flex-shrink-0 px-4">
							<div class="font-medium text-xl ml-1">
								<span class="text-blue-500">Leave</span>Flow
							</div>
						</div>
						<nav class="mt-5 flex-1 px-2 bg-white space-y-1">
							<x-navigation.side.links />

							<x-navigation.side.button @click="showCollapsedDesktopSidebar = !showCollapsedDesktopSidebar">
								<x-slot name="icon">
									<!-- Heroicon name: outline/chevron-left -->
									<svg class="text-gray-400 group-hover:text-gray-500 mr-3 ml-1 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
									</svg>
								</x-slot>

								<x-slot name="text">
									Collapse Sidebar
								</x-slot>
							</x-navigation.side.button>
						</nav>
					</div>
					<x-navigation.side.auth-section />
				</div>
			</template>

			<template x-if="showCollapsedDesktopSidebar">
				<div class="flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white">
					<div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
						<div class="flex items-center justify-center flex-shrink-0 px-4">
							<div class="font-medium text-xl">
								<span class="text-blue-500">L</span>F
							</div>
						</div>
						<nav class="mt-5 flex-1 justify-center px-2 bg-white space-y-1">
							<x-navigation.side.links collapsed="true" />

							<x-navigation.side.button @click="showCollapsedDesktopSidebar = !showCollapsedDesktopSidebar">
								<x-slot name="icon">	
									<!-- Heroicon name: outline/chevron-right -->
									<svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
									</svg>
								</x-slot>
							</x-navigation.side.button>
						</nav>
					</div>

					<x-navigation.side.auth-section :collapsed="true" />
				</div>
			</template>
		</div>
	</div>

	<!-- Main Content -->
	<div class="flex flex-col w-0 flex-1 overflow-hidden">
		<div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
			<button @click="showMobileSidebar = true" type="button" class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
				<span class="sr-only">Open sidebar</span>
				<!-- Heroicon name: outline/menu -->
				<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
				</svg>
			</button>
		</div>
		
		{{ $slot }}
		
	</div>
</div>