<!doctype html>
  <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  </head>
  <body class="bg-gray-50">
		<x-nav.sidebar>
			<main class="flex-1 relative z-0 overflow-y-auto focus:outline-none">
				{{ $slot }}
			</main>
		</x-nav.sidebar>
  </body>
</html>