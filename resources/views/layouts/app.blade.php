<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href=" {{asset('CSS/style.css')}}" />
  </head>
  <body>
    <nav class="navbar navbar-expand bg-black">
      <div class="container-fluid">
        <a href=" #" class="navbar-brand text-light">Laravel CRUD</a>
      </div>
    </nav>

    <div class="container mt-5">
<div class="row">
  @if($message=Session::get('success'))
      
  <div class="alert alert-success alert-dismissible fade show">
    <strong>Success</strong>{{$message}}
    <button type="button" class="btn-close" data-bs-dismiss= "alert" aria-label="Close"></button>
  </div>
  @endif
  @Yield('main')
</div>
    <!--container -end-->
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
