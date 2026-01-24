<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', 'Organio')</title>
  <!-- <meta name="description" content="Organio - Organic Food Store HTML Templae ">
  <meta name="keywords" content="	farm, food, fresh, fruit, nutrition, organic, organic farm, organic food store, organic shop, organic store, organic theme, store, vegetable, woocommerce">
  <meta name="author" content="Themexriver"> -->

  @include('website.layouts.inc.script-head')
</head>

<body class="organio-wrapper">
  @include('website.layouts.partials.pre-loader')

  @include('website.layouts.inc.header')

 @yield('content')

  @include('website.layouts.inc.footer')

  @include('website.layouts.inc.script-bottom')
</body>

</html>