<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CONSTRUCTION</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,600" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="../../css/styles.css">
  @yield('link_css')
</head>
<body>
	@yield('navigation')
	@yield('page_title')
	@yield('breadcrumbs')
	@yield('content')
	@include('layouts.footer')
</body>
</html>