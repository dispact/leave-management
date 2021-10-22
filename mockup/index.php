<html>
	<head>
		<title>Mockup</title>
		<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
		<link href='fullcalendar/main.css' rel='stylesheet' />
		
		<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
		<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
		<script src='fullcalendar/main.js'></script>

		<style>
			[x-cloak] {
					display: none;
			}
		</style>
	</head>
	<body class="h-screen flex overflow-hidden bg-gray-100" x-data="data()">
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

			<div class="flex-shrink-0 w-14">
				<!-- Force sidebar to shrink to fit close icon -->
			</div>
		</div>

		<!-- Static sidebar for desktop -->
		<div class="hidden md:flex md:flex-shrink-0" x-show="showDesktopSidebar">
			<div class="flex flex-col" :class="showCollapsedDesktopSidebar ? 'w-16' : 'w-64'">
				<!-- Sidebar component, swap this element with another sidebar if you like -->
				<template x-if="!showCollapsedDesktopSidebar">
					<div class="flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white">
						<div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
							<div class="flex items-center flex-shrink-0 px-4">
								<div class="font-medium text-xl">
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
									<svg class="text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
									</svg>
									Dashboard
								</a>

								<a href="/calendar.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
									<!-- Heroicon name: outline/calendar -->
									<svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
									</svg>
									Calendar
								</a>

								<a href="/employees.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
									<!-- Heroicon name: outline/users -->
									<svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
									</svg>
									Employees
								</a>

								<a href="/leaves.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
									<!-- Heroicon name: outline/clock -->
									<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
									</svg>
									My Leaves
								</a>

								

								<a href="/approve.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
									<!-- Heroicon name: outline/thumb-up -->
									<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
									</svg>
									Leaves to Approve
								</a>

								<a href="/reports.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
									<!-- Heroicon name: outline/chart-bar -->
									<svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
									</svg>
									Reports
								</a>

								<button @click="showCollapsedDesktopSidebar = !showCollapsedDesktopSidebar" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center justify-center px-2 py-2 text-sm font-medium rounded-md">
									<!-- Heroicon name: outline/chevron-left -->
									<svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
									</svg>
									Collapse Sidebar
								</button>
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
			<main class="flex-1 relative z-0 overflow-y-auto focus:outline-none">
				<div class="py-2">
					<div class="max-w-7xl mx-auto px-4 sm:px-4 md:px-2">
						<div class="md:grid lg:grid-cols-3 gap-x-2 md:grid-cols-2">
							
							<!-- Time Off Form -->
							<form action="#" method="POST" class="max-w-md md:max-w-sm mx-auto md:mx-0">
								<div class="rounded-lg bg-white border border-gray-200">
									<div class="py-6 px-4 space-y-6 sm:p-6">
										<h3 class="text-lg leading-6 font-medium text-gray-900">Book Time Off</h3>
								
										<div class="grid grid-cols-6 gap-6">

											<div class="col-span-6">
												<label id="listbox-label" class="block text-sm font-medium text-gray-700">
													Leave Type
												</label>
												<div class="mt-1 relative">
													<button class="relative w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label"
														@click="showLeaveTypeDropdown = !showLeaveTypeDropdown" 
														type="button"
													>
														<div class="flex items-center">
															<span class="bg-purple-400 flex-shrink-0 inline-block h-2 w-2 rounded-full"></span>
															<span class="ml-3 block truncate">
																Vacation
															</span>
														</div>
														<span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
															<!-- Heroicon name: solid/selector -->
															<svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
															</svg>
														</span>
													</button>

													<ul class="absolute z-10 mt-1 w-full bg-white shadow-lg max-h-60 rounded-md py-1 text-base ring-1 ring-black ring-opacity-10 overflow-auto focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3"
														x-show="showLeaveTypeDropdown"
														x-transition:enter="transition ease-in duration-100"
														x-transition:enter-start="opacity-0"
														x-transition:enter-end="opacity-100"
														x-transition:leave="transition ease-in duration-100"
														x-transition:leave-start="opacity-100"
														x-transition:leave-end="opacity-0"
														@click.away="showLeaveTypeDropdown = false"
													>
														<!--
														Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

														Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
														-->
														<li class="text-gray-900 hover:bg-indigo-600 hover:text-white cursor-pointer select-none relative py-2 pl-3 pr-9" id="listbox-option-0" role="option">
															<div class="flex items-center">
																<!-- Online: "bg-green-400", Not Online: "bg-gray-200" -->
																<span class="bg-purple-400 flex-shrink-0 inline-block h-2 w-2 rounded-full" aria-hidden="true"></span>
																<!-- Selected: "font-semibold", Not Selected: "font-normal" -->
																<span class="font-semibold ml-3 block truncate">
																	Vacation
																</span>
															</div>

															<span class="text-indigo-600 absolute inset-y-0 right-0 flex items-center pr-4">
																<!-- Heroicon name: solid/check -->
																<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																	<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
																</svg>
															</span>
														</li>

														<li class="text-gray-900 hover:bg-indigo-600 hover:text-white cursor-pointer select-none relative py-2 pl-3 pr-9" id="listbox-option-0" role="option">
															<div class="flex items-center">
																<span class="bg-red-400 flex-shrink-0 inline-block h-2 w-2 rounded-full" aria-hidden="true"></span>
																<!-- Selected: "font-semibold", Not Selected: "font-normal" -->
																<span class="font-normal ml-3 block truncate">
																	Sick
																</span>
															</div>

															<span class="hidden absolute inset-y-0 right-0 flex items-center pr-4">
																<!-- Heroicon name: solid/check -->
																<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																	<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
																</svg>
															</span>
														</li>

														<li class="text-gray-900 hover:bg-indigo-600 hover:text-white cursor-pointer select-none relative py-2 pl-3 pr-9" id="listbox-option-0" role="option">
															<div class="flex items-center">
																<span class="bg-green-400 flex-shrink-0 inline-block h-2 w-2 rounded-full" aria-hidden="true"></span>
																<!-- Selected: "font-semibold", Not Selected: "font-normal" -->
																<span class="font-normal ml-3 block truncate">
																	Personal
																</span>
															</div>

															<span class="hidden absolute inset-y-0 right-0 flex items-center pr-4">
																<!-- Heroicon name: solid/check -->
																<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																	<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
																</svg>
															</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="col-span-6">
												<label id="listbox-label" class="block text-sm font-medium text-gray-700">
													Duration
												</label>
												<div class="mt-1 relative">
													<button @click="showLeaveDurationDropdown = !showLeaveDurationDropdown" type="button" class="bg-white relative w-full border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
														<span class="block truncate">
															One full day
														</span>
														<span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
															<!-- Heroicon name: solid/selector -->
															<svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
															</svg>
														</span>
													</button>

													<ul class="absolute z-10 mt-1 w-full bg-white shadow-lg max-h-60 rounded-md py-1 text-base ring-1 ring-black ring-opacity-10 overflow-auto focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3"
														x-show="showLeaveDurationDropdown" 
														x-transition:enter="transition ease-in duration-100"
														x-transition:enter-start="opacity-0"
														x-transition:enter-end="opacity-100"
														x-transition:leave="transition ease-in duration-100"
														x-transition:leave-start="opacity-100"
														x-transition:leave-end="opacity-0"
														@click.away="showLeaveDurationDropdown = false"
													>
														<!--
														Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

														Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
														-->
														<li class="text-gray-900 hover:bg-indigo-600 hover:text-white cursor-pointer select-none relative py-2 pl-3 pr-9" id="listbox-option-0" role="option">
															<!-- Selected: "font-semibold", Not Selected: "font-normal" -->
															<span class="font-semibold block truncate">
																One full day
															</span>

															<!--
																Checkmark, only display for selected option.

																Highlighted: "text-white", Not Highlighted: "text-indigo-600"
															-->
															<span class="text-indigo-600 absolute inset-y-0 right-0 flex items-center pr-4">
																<!-- Heroicon name: solid/check -->
																<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																	<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
																</svg>
															</span>
														</li>

														<li class="text-gray-900 hover:bg-indigo-600 hover:text-white cursor-pointer select-none relative py-2 pl-3 pr-9" id="listbox-option-0" role="option">
															<!-- Selected: "font-semibold", Not Selected: "font-normal" -->
															<span class="font-normal block truncate">
																First half of day
															</span>

															<!--
																Checkmark, only display for selected option.

																Highlighted: "text-white", Not Highlighted: "text-indigo-600"
															-->
															<span class="hidden text-indigo-600 absolute inset-y-0 right-0 flex items-center pr-4">
																<!-- Heroicon name: solid/check -->
																<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																	<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
																</svg>
															</span>
														</li>

														<li class="text-gray-900 hover:bg-indigo-600 hover:text-white cursor-pointer select-none relative py-2 pl-3 pr-9" id="listbox-option-0" role="option">
															<!-- Selected: "font-semibold", Not Selected: "font-normal" -->
															<span class="font-normal block truncate">
																Second half of day
															</span>

															<!--
																Checkmark, only display for selected option.

																Highlighted: "text-white", Not Highlighted: "text-indigo-600"
															-->
															<span class="hidden text-indigo-600 absolute inset-y-0 right-0 flex items-center pr-4">
																<!-- Heroicon name: solid/check -->
																<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																	<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
																</svg>
															</span>
														</li>

														<li class="text-gray-900 hover:bg-indigo-600 hover:text-white cursor-pointer select-none relative py-2 pl-3 pr-9" id="listbox-option-0" role="option">
															<!-- Selected: "font-semibold", Not Selected: "font-normal" -->
															<span class="font-normal block truncate">
																Multiple days
															</span>

															<!--
																Checkmark, only display for selected option.

																Highlighted: "text-white", Not Highlighted: "text-indigo-600"
															-->
															<span class="hidden text-indigo-600 absolute inset-y-0 right-0 flex items-center pr-4">
																<!-- Heroicon name: solid/check -->
																<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																	<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
																</svg>
															</span>
														</li>

														<!-- More items... -->
													</ul>
												</div>
											</div>

											<div class="col-span-6">
												<label id="listbox-label" class="block text-sm font-medium text-gray-700">
													Date
												</label>
												<div class="relative">
													<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
														<svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
													</div>
													<input id="single-date" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Select date">
												</div>
											</div>

											<!-- https://wakirin.github.io/Lightpick/ -->
											<div class="col-span-6">
												<label id="listbox-label" class="block text-sm font-medium text-gray-700">
													Date Range
												</label> 
												<div date-rangepicker class="flex items-center">
													<div class="relative">
															<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
																	<svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
															</div>
															<input id="start-date" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Start date">
														</div>
													<span class="mx-2 text-gray-500">to</span>
													<div class="relative">
														<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
															<svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
														</div>
														<input id="end-date" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="End date">
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="px-4 py-3 bg-gray-50 sm:px-6">
										<button type="submit" class="w-full bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
											Book Time Off
										</button>
									</div>
								</div>
							</form>

							<!-- Balance -->
							<div class="max-w-md md:max-w-sm mx-auto md:mx-0 mb-4">
								<div class="rounded-lg bg-white border border-gray-200">
									<div class="pt-6 px-4 sm:p-6">
										<h3 class="text-lg leading-6 font-medium text-gray-900">
											Balance
										</h3>
										<div class="flex flex-col">
											<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
												<div class="py-2 align-middle inline-block min-w-full sm:px-4 lg:px-4">
													<table class="min-w-full divide-y divide-gray-200">
														<thead class="bg-gray-50">
															<tr>
																<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
																	
																</th>
																<th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
																	Used
																</th>
																<th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
																	Available
																</th>
															</tr>
														</thead>
														<tbody class="bg-white divide-y divide-gray-200">
															<tr>
																<td class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-900">
																	<div class="flex items-center">
																		<span class="bg-purple-400 flex-shrink-0 inline-block h-2 w-2 rounded-full" aria-hidden="true"></span>
																		<span class="font-medium ml-2 block truncate">
																			Vacation
																		</span>
																	</div>
																</td>
																<td class="px-6 py-2 whitespace-nowrap text-center text-sm text-gray-700">
																	2
																</td>
																<td class="px-6 py-2 whitespace-nowrap text-center text-sm text-gray-700">
																	10
																</td>
															</tr>

															<tr>
																<td class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-900">
																	<div class="flex items-center">
																		<span class="bg-red-400 flex-shrink-0 inline-block h-2 w-2 rounded-full" aria-hidden="true"></span>
																		<span class="font-medium ml-2 block truncate">
																			Sick
																		</span>
																	</div>
																</td>
																<td class="px-6 py-2 whitespace-nowrap text-center text-sm text-gray-700">
																	7
																</td>
																<td class="px-6 py-2 whitespace-nowrap text-center text-sm text-gray-700">
																	30
																</td>
															</tr>

															<tr>
																<td class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-900">
																	<div class="flex items-center">
																		<span class="bg-green-400 flex-shrink-0 inline-block h-2 w-2 rounded-full" aria-hidden="true"></span>
																		<span class="font-medium ml-2 block truncate">
																			Personal
																		</span>
																	</div>
																</td>
																<td class="px-6 py-2 whitespace-nowrap text-center text-sm text-gray-700">
																	0
																</td>
																<td class="px-6 py-2 whitespace-nowrap text-center text-sm text-gray-700">
																	3
																</td>
															</tr>

														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Who is off today -->
							<div class="max-w-md md:max-w-sm mx-auto md:mx-0">
								<div class="rounded-lg bg-white border border-gray-200">
									<div class="py-6 px-4 space-y-6 sm:p-6">
										<h3 class="text-lg leading-6 font-medium text-gray-900">
											Off Today
										</h3>
										<ul role="list" class="divide-y divide-gray-200">
											<li class="py-2 flex items-center">
												<img class="h-6 w-6 rounded-full" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
												<div class="ml-3">
													<p class="text-sm font-medium text-gray-900">Calvin Hawkins</p>
												</div>
											</li>

											<li class="py-2 flex items-center">
												<img class="h-6 w-6 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
												<div class="ml-3">
													<p class="text-sm font-medium text-gray-900">Kristen Ramos</p>
												</div>
											</li>

											<li class="py-2 flex items-center">
												<img class="h-6 w-6 rounded-full" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
												<div class="ml-3">
													<p class="text-sm font-medium text-gray-900">Ted Fox</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

						</div>
						<div class="bg-white p-4 rounded-md border border-gray-200">
						    <div id="calendar"></div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
	<script>
	const data = () => {
		return {
			showDesktopSidebar: true,
			showCollapsedDesktopSidebar: false,
			showMobileSidebar: false,
			showLeaveTypeDropdown: false,
			showLeaveDurationDropdown: false,
		}
	};

	// Single date
	const picker = new Litepicker({ 
		element: document.getElementById('single-date'),
		singleMode: true,
		lockDaysFilter: (day) => {
			const d = day.getDay();

			return [6, 0].includes(d);
		},
		
	});

	// Multiple
	const multiPicker = new Litepicker({
		element: document.getElementById('start-date'),
		elementEnd: document.getElementById('end-date'),
		singleMode: false,
		allowRepick: true, 
		lockDaysFilter: (day) => {
			const d = day.getDay();

			return [6, 0].includes(d);
		},
	});

	document.addEventListener('DOMContentLoaded', function() {
		var calendarEl = document.getElementById('calendar');
		var calendar = new FullCalendar.Calendar(calendarEl, {
			initialView: 'dayGridMonth',
			googleCalendarApiKey: 'AIzaSyBtHTLdtoJuWsBRfL2XMvT-AK8nxDJUwL0',
			eventSources: [
				{
					googleCalendarId: 'kaneland.org_7aqst8astmbh6vrva1airvqdss@group.calendar.google.com'
				}
			], 
			dayMaxEventRows: 4,
		});
		calendar.render();
	});

	</script>

</html>