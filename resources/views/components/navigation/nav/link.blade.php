@props(['mobile' => false, 'routeName', 'label'])
@if(!$mobile)
<a href="{{ route($routeName) }}" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 font-medium text-sm
    @if(request()->route()->named($routeName)) 
    border-blue-500 text-gray-900
    @else
    border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700
    @endif"
>
    {{ $label }}
</a>
@else
<a href="{{ route($routeName) }}" class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium
    @if(request()->route()->named($routeName))
    bg-blue-50 border-blue-500 text-blue-700
    @else
    border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700
    @endif"
>
    {{ $label }}
</a>
@endif