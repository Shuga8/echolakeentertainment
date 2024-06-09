<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{ config('app.name') . " - $title" }}</title>

	<x-seo />
	@stack('libs')
	@vite(['resources/js/app.js'])
	<script>
		if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
				'(prefers-color-scheme: dark)').matches)) {
			document.documentElement.classList.add('dark');
		} else {
			document.documentElement.classList.remove('dark')

		}
	</script>
</head>

<body class="dark:bg-gray-900">

	@stack('styles')

	{{ $slot }}

	@stack('scripts')

	@include('partials._darkmode')
</body>

</html>
