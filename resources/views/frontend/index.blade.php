<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" href="{{optional($setting)->logo}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>{{$setting->site_name}} || {{$setting->site_title}} </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <noscript>
      <strong>We're sorry but pasona doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>

    <div id="app">
        <?php
            header("Location: /dashboard");
            exit();
        ?>
    </div>
    <!-- built files will be auto injected -->

    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
