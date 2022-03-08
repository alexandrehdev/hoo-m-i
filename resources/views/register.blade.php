<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Hoo-M-I</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/elements.css') }}">
  <link rel="stylesheet" href="{{ asset('css/variables.css') }}">
</head>
<body>

  <div class="form-content">
    <form class="" action="/register" method="POST">
        @csrf
      <div class="field">
        <input type="text" name="username" autocomplete="off" placeholder="Username">
      </div>
      <div class="field">
        <input type="text" name="email" autocomplete="off" placeholder="Email">
      </div>
      <div class="field">
        <input type="text" name="password" autocomplete="off" placeholder="Password">
      </div>
      <div class="field">
        <input type="text" name="cpassword" autocomplete="off" placeholder="Confirm Password">
      </div>
      <div class="field">
        <input type="submit" value="Cadastrar">
      </div>
    </form>
  </div>
</body>
</html>
