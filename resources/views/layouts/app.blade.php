<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    <title>Todo List</title>
  </head>
  <body>
  @include('partials.navbar')
  <div class="container">
    @include('partials.messages')
    <div class="row">
      @yield('content')
    </div>
  </div>

  <footer id="footer" class="footer text-center">
    Copyright &copy; 2019
  </footer>
  </body>
</html>
