<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>x | @section('title') titulo @show</title>
	@section('extraHead') @show
</head>
<body>
	@section('body')
	@section('navbar') @include('base.navbar') @show
	<!-- Inicio del contenido de la página -->
	@section('container')<main class="container-fluid">
		<br>
		@show
		@section('contenido')
		
		@show
	</main>
	@section('jsFooter') @include('base.jsfooter') @show
	@section('extraJS') @show
	@show
</body>
</html>
