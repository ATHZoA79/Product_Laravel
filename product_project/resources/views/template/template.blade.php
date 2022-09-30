<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Links -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/css/bootstrap.min.css'
    integrity='sha512-siwe/oXMhSjGCwLn+scraPOWrJxHlUgMBMZXdPe2Tnk3I0x3ESCoLz7WZ5NTH6SZrywMY+PB1cjyqJ5jAluCOg=='
    crossorigin='anonymous' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
    integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
    crossorigin='anonymous' />
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,regular,500,700,900" rel="stylesheet" />

  <!-- Styles -->
  @yield('stylesheet')

</head>

<body>

  <nav class="nav nav-pills flex-column flex-sm-row bg-dark">
    <div class="nav-img col-6">
      <a href="#">
        <img src=" {{ asset('img/logo-laravel-icon-512.png') }} " alt="">
      </a>
    </div>
    <div class="d-flex justify-content-end col-6">
      <a class="btn btn-secondary d-flex align-items-center" aria-current="page" href="#">Active</a>
      <a class="btn btn-secondary d-flex align-items-center" href="#">Longer nav link</a>
      <a class="btn btn-secondary d-flex align-items-center" href="#">Link</a>
      <a href="" class="btn btn-secondary d-flex align-items-center">
        <i class="fa-solid fa-circle-user" style="font-size:20px;"></i>
      </a>
    </div>
  </nav>

  <main>
    @yield('card')

    @yield('comment-showcase')
    @yield('comment-board')

    @yield('table')
  </main>

  @yield('scripts')

  <footer class="">
    <span>Copyright by ZoA &copy; 2022</span>
  </footer>
</body>

</html>