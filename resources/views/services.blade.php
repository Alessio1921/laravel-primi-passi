<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <title>Laravel Primi Passi</title>
    <style>
      html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
      }

      .full-height {
        height: 100vh;
      }

      .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
      }

      .position-ref {
        position: relative;
      }

      .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
      }

      .content {
        text-align: center;
      }

      .title {
        font-size: 84px;
      }

      .links > a {
        color: red;
        padding: 0 25px;
        font-size: 2rem;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
        cursor: pointer;
      }

      .m-b-md {
          margin-bottom: 30px;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="links flex-center">
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('services')}}">Servizi</a>
        <a href="{{route('contacts')}}">Contatti</a>
    </div>
    </header>
    <div class="content">
      <div class="title m-b-md">
          <h1>Servizi</h1>
      </div>
  </body>
</html>