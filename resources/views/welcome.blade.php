<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">

    </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-12 mt-5">
            @include('components.text-input', ['id' => 'mobile_number', 'type' => 'text', 'name' => 'contact_number', 'label' => 'Your contact number', 'placeholder' => '07564 321 321', 'error_message' => 'This must be a valid phone number (no spaces)!', 'regex' => '((\+44(\s\(0\)\s|\s0\s|\s)?)|0)7\d{3}(\s)?\d{6}'])
          </div>
        </div>
        <div class="row">
          <div class="col-12 mt-5">
            @include('components.text-input', ['id' => 'email_address', 'type' => 'email', 'name' => 'email', 'label' => 'Your email', 'placeholder' => 'johnsmith@hotmail.com', 'error_message' => 'This must be a valid email address!', 'regex' => '^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$'])
          </div>
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script src="/js/main.js"></script>
    </body>
</html>
