<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://checkoutshopper-test.adyen.com/checkoutshopper/sdk/3.9.4/adyen.js"
    integrity="sha384-8Q8tz/+hf+UkS01nLrKLJgQLdaR1hRklqJQksCHh903UIfW+xMt275Lms4GZgVUi"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://checkoutshopper-test.adyen.com/checkoutshopper/sdk/3.9.4/adyen.css"
    integrity="sha384-6qrXvoxlnBlrflZQ9g5Yf5oZapUSSXctPxacP9oRcEukbEO7lXisuSyMKG8pDX8V" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Checkout Demo</title>
</head>
<body>
    <header id="header">
    <a href="/">
      <img src="{{ asset('img/mystore-logo.svg') }}" alt="">
    </a>
  </header>
  <div class="container">
      @yield('content')
  </div>
</body>
</html>



