<!doctype html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>{{ __(env('APP_NAME', 'Laravel')) }}</title>
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	</head>
	<body class="bg-gray-50">
		<main class="flex-1 relative z-0 overflow-y-auto focus:outline-none">
			{{ $slot }}
		</main>
	</body>
</html>