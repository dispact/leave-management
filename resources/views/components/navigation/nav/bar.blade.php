<nav class="bg-white shadow" x-data="{
	showProfileDropdown: false,
	showMobileMenu: false,
}">
	<div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
		<div class="relative flex justify-between h-12">
			<div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
				<!-- Mobile menu button -->
				<button @click="showMobileMenu = !showMobileMenu" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" aria-controls="mobile-menu" aria-expanded="false">
					<span class="sr-only">Open main menu</span>

					{{-- Icon when menu is closed --}}
					<svg x-show="!showMobileMenu" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
					</svg>

					{{-- Icon when menu is open --}}
					<svg x-show="showMobileMenu" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
					</svg>
				</button>
			</div>
			<div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
				<div class="flex-shrink-0 flex items-center">
					<div class="font-medium text-xl ml-1">
						<span class="text-blue-500">Leave</span>Flow
					</div>
				</div>
				<div class="hidden sm:ml-6 sm:flex sm:space-x-8">
					<x-navigation.nav.link
						routeName="dashboard" 
						label="Book Time Off" 
					/>
				</div>
			</div>
			<div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
				<!-- Profile dropdown -->
				<div class="ml-3 relative">
					<div>
						<button @click="showProfileDropdown = !showProfileDropdown" type="button" class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
							<span class="sr-only">Open user menu</span>
							<img class="h-8 w-8 rounded-full" src="{{ auth()->user()->image }}" alt="{{ auth()->user()->name }}">
						</button>
					</div>
					
					<div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" tabindex="-1"
						x-show="showProfileDropdown" 
						x-transition:enter="transition ease-out duration-200"
						x-transition:enter-start="transform opacity-0 scale-95"
						x-transition:enter-end="transform opacity-100 scale-100"
						x-transition:leave="transition ease-in duration-75"
						x-transition:leave-start="transform opacity-100 scale-100"
						x-transition:leave-end="transform opacity-0 scale-95"
					>
					
						<!-- Active: "bg-gray-100", Not Active: "" -->
						<a href="#" class="block px-4 py-2 text-sm text-gray-700" tabindex="-1">Your Profile</a>
						<a href="#" class="block px-4 py-2 text-sm text-gray-700" tabindex="-1">Settings</a>
						<form action="{{ route('logout') }}" method="POST">
							<button type="submit" class="block px-4 py-2 text-sm text-gray-700 cursor-pointer hover:bg-gray-200" tabindex="-1">
								Sign out
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Mobile menu, show/hide based on menu state. -->
	<div x-show="showMobileMenu" class="sm:hidden">
		<div class="pt-2 pb-4 space-y-1">
			<x-navigation.nav.link
				routeName="dashboard" 
				label="Book Time Off" 
				:mobile="true"
			/>
		</div>
	</div>
</nav>