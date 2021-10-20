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
					<!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
					<a href="#" class="bg-gray-100 text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
						<!--
						Heroicon name: outline/home

						Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"
						-->
						<svg class="text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
						</svg>
						Dashboard
					</a>

					<a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
						<!-- Heroicon name: outline/users -->
						<svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
						</svg>
						Team
					</a>

					<a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
						<!-- Heroicon name: outline/folder -->
						<svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
						</svg>
						Projects
					</a>

					<a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
						<!-- Heroicon name: outline/calendar -->
						<svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
						</svg>
						Calendar
					</a>

					<a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
						<!-- Heroicon name: outline/inbox -->
						<svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
						</svg>
						Documents
					</a>

					<a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
						<!-- Heroicon name: outline/chart-bar -->
						<svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
						</svg>
						Reports
					</a>
				</nav>
			</div>
			<div class="flex-shrink-0 flex border-t border-gray-200 p-4">
				<a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center text-sm font-medium rounded-md">
					<!-- Heroicon name: outline/logout -->
					<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
					</svg>
					Logout
				</a>
			</div>
			<div class="flex-shrink-0 flex border-t border-gray-200 p-4">
				<a href="#" class="flex-shrink-0 group block">
					<div class="flex items-center">
						<div>
							<img class="inline-block h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
						</div>
						<div class="ml-3">
							<p class="text-base font-medium text-gray-700 group-hover:text-gray-900">
								Tom Cook
							</p>
							<p class="text-sm font-medium text-gray-500 group-hover:text-gray-700">
								View profile
							</p>
						</div>
					</div>
				</a>
			</div>
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
							<!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
							<a href="/" class="bg-gray-100 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
								<!--
									Heroicon name: outline/home

									Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"
								-->
								<svg class="text-gray-500 mr-3 ml-1 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
								</svg>
								Dashboard
							</a>

							<a href="/calendar.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
								<!-- Heroicon name: outline/calendar -->
								<svg class="text-gray-400 group-hover:text-gray-500 mr-3 ml-1 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
								</svg>
								Calendar
							</a>

							<a href="/employees.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
								<!-- Heroicon name: outline/users -->
								<svg class="text-gray-400 group-hover:text-gray-500 mr-3 ml-1 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
								</svg>
								Employees
							</a>

							<a href="/leaves.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
								<!-- Heroicon name: outline/clock -->
								<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-500 mr-3 ml-1 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
								</svg>
								My Leaves
							</a>

							

							<a href="/approve.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
								<!-- Heroicon name: outline/thumb-up -->
								<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-500 mr-3 ml-1 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
								</svg>
								Leaves to Approve
							</a>

							<a href="/reports.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
								<!-- Heroicon name: outline/chart-bar -->
								<svg class="text-gray-400 group-hover:text-gray-500 mr-3 ml-1 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
								</svg>
								Reports
							</a>

							<button @click="showCollapsedDesktopSidebar = !showCollapsedDesktopSidebar" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center justify-center px-2 py-2 text-sm font-medium rounded-md">
								<!-- Heroicon name: outline/chevron-left -->
								<svg class="text-gray-400 group-hover:text-gray-500 mr-3 ml-1 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
								</svg>
								Collapse Sidebar
							</button>
						</nav>
					</div>

					<div class="flex-shrink-0 flex border-t border-gray-200 p-4">
						<a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center text-sm font-medium rounded-md">
							<!-- Heroicon name: outline/logout -->
							<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-500 mr-3 ml-1 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
							</svg>
							Logout
						</a>
					</div>
					<div class="flex-shrink-0 flex border-t border-gray-200 p-4">
						<div class="flex-shrink-0 w-full group block">
							<a href="#" class="flex items-center">
								<div>
									<img class="inline-block h-9 w-9 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
								</div>
								<div class="ml-3">
									<p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">
										Tom Cook
									</p>
									<p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">
										View Profile
									</p>
								</div>
							</a>
						</div>
					</div>
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
							<!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
							<a href="/" class="bg-gray-100 text-gray-900 group flex items-center justify-center px-2 py-2 text-sm font-medium rounded-md">
								<!--
									Heroicon name: outline/home

									Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"
								-->
								<svg class="text-gray-500 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
								</svg>
							</a>

							<a href="/calendar.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center justify-center px-2 py-2 text-sm font-medium rounded-md">
								<!-- Heroicon name: outline/calendar -->
								<svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
								</svg>
							</a>

							<a href="/employees.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center justify-center px-2 py-2 text-sm font-medium rounded-md">
								<!-- Heroicon name: outline/users -->
								<svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
								</svg>
							</a>

							<a href="/leaves.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center justify-center px-2 py-2 text-sm font-medium rounded-md">
								<!-- Heroicon name: outline/clock -->
								<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
								</svg>
							</a>

							<a href="/approve.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center justify-center px-2 py-2 text-sm font-medium rounded-md">
								<!-- Heroicon name: outline/thumb-up -->
								<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
								</svg>
							</a>

							<a href="/reports.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center justify-center px-2 py-2 text-sm font-medium rounded-md">
								<!-- Heroicon name: outline/chart-bar -->
								<svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
								</svg>
							</a>

							<button @click="showCollapsedDesktopSidebar = !showCollapsedDesktopSidebar" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center justify-center px-2 py-2 text-sm font-medium rounded-md">
								<!-- Heroicon name: outline/chevron-right -->
								<svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
								</svg>
							</button>
						</nav>
					</div>

					<div class="flex-shrink-0 justify-center flex border-t border-gray-200 p-4">
						<a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center justify-center text-sm font-medium rounded-md">
							<!-- Heroicon name: outline/logout -->
							<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
							</svg>
						</a>
					</div>
					<div class="flex-shrink-0 flex border-t border-gray-200 p-4">
						<div class="flex-shrink-0 w-full group block">
							<a href="#" class="flex items-center">
								<div>
									<img class="inline-block h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
								</div>
							</a>
						</div>
					</div>
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