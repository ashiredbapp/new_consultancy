<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title') </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('web_layout._css')
    @yield('css')
  </head>
  @include('web_layout._nav_bar')
  @yield('social_link')
  @yield('slider')
  <body>
  @yield('content')
  </body>
  @include('web_layout._footer')
  @include('web_layout._js')
  @yield('js')
 </html>
