<a href="{{ route($routeName) }}" 
	class="group flex items-center px-2 py-2 @if($mobile) text-base @else text-sm @endif font-medium rounded-md
		@if(request()->route()->named($routeName))
			bg-gray-100 text-gray-900
		@else
			text-gray-600 hover:bg-gray-50 hover:text-gray-900
		@endif"
>
	<svg class="mr-3 ml-1 flex-shrink-0 h-6 w-6
			@if(request()->route()->named($routeName)) 
					text-gray-500 
			@else 
					text-gray-400 group-hover:text-gray-500 
			@endif" 
		xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"
	>
		{{ $icon }}
	</svg>
	@if (!$collapsed)
		{{ $text }}
	@endif
</a>