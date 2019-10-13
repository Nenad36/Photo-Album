<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.3/css/foundation-float.css">
    <title>Photo</title>
</head>
<body>
   @include('inc.topbar')
   <br />
  <div class="row">
      @include('inc.messages')
      <br />
      @yield('content')
  </div>
</body>
</html>

