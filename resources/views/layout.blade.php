<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title','crud')</title>
    <style>
.isComplete{
  color:blue;
  text-decoration:line-through;
}

    </style>
  </head>
  <body>
    <h1> project crud system</h1>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
