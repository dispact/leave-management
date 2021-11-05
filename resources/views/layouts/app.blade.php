<!doctype html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>{{ __(env('APP_NAME', 'Laravel')) }}</title>
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
		<style>
			[x-cloak] { display: none; }
		</style>
		@livewireStyles
		<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
	</head>
	<body class="bg-gray-100">
		<x-navigation.side.bar>
			<main class="flex-1 relative z-0 overflow-y-auto focus:outline-none">
				{{ $slot }}
			</main>
		</x-navigation.side.bar>
		{{-- <x-navigation.nav.bar />
		<main class="flex flex-1 justify-center h-screen relative z-0 overflow-y-auto focus:outline-none">
			{{ $slot }}
		</main> --}}

		<livewire:alert />
		@livewireScripts
		<script src="{{ asset('js/app.js') }}"></script>
	</body>
	{{ $scripts ?? '' }}
</html>