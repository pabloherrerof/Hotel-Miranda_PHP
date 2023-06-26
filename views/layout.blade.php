<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
     <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
  />
  <link rel="stylesheet" href="../styles/styles.css" />
</head>
<body>
@include('header')
  @yield('content')
@include('footer')
</body>
@yield('scripts')
</html>