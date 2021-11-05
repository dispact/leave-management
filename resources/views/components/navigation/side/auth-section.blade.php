@props(['collapsed' => false, 'mobile' => false])
<div class="border-t border-gray-200 w-full p-2">
	<form action="{{ route('logout') }}" method="POST">
		@csrf
		<button type="submit" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex w-full p-2 items-center font-medium rounded-md
			@if($mobile) text-base @else text-sm @endif"
		>
			<!-- Heroicon name: outline/logout -->
			<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-500 mr-3 ml-1 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
			</svg>
			@if(!$collapsed)
				Logout
			@endif
		</button>
	</form>
</div>
<div class="flex-shrink-0 flex border-t border-gray-200 p-4">
	<div class="flex-shrink-0 w-full group block">
		<div class="flex items-center cursor-default">
			<img class="inline-block @if(!$collapsed) h-9 w-9 @else h-8 w-8 @endif rounded-full" src="{{ auth()->user()->image }}" alt="{{ auth()->user()->name }}">
			@if(!$collapsed)
				<div class="ml-3">
					<p class="@if($mobile) text-base @else text-sm @endif font-medium text-gray-700 group-hover:text-gray-900">
						{{ auth()->user()->name }}
					</p>
				</div>
			@endif
		</div>
	</div>
</div>