<!doctype html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>{{ __(env('APP_NAME', 'Laravel')) }}</title>
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		@livewireStyles
		<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
	</head>
	<body class="bg-gray-100">
		{{-- <x-navigation.side.bar>
			<main class="flex-1 relative z-0 overflow-y-auto focus:outline-none">
				{{ $slot }}
			</main>
		</x-navigation.side.bar> --}}
		<x-navigation.nav.bar />
		<main class="flex flex-1 justify-center items-center relative z-0 overflow-y-auto focus:outline-none">
			{{ $slot }}
		</main>
	</body>
	@livewireScripts
	{{ $scripts ?? '' }}
</html>