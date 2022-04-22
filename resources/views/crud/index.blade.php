
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <nav class="navbar navbar-expand-sm navbar-blue bg-light">
      <a class="navbar-brand" href="#">Laravel Project</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                  <a class="nav-link" href="{{url('/')}}" style="color:blue">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{url('/')}}/customers" style="color:blue">Customer Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}/customers/view" style="color:blue">Customers</a>
            </li>
              <li class="nav-item dropdown">

          </ul>
          <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
      </div>
  </nav>
  <body>
      {{-- The Whole is used for different lang --}}
<div class="container">
    {{-- to check the lang different type --}}
    <br/>
 <a class="nav-link" href="{{url('/')}}" style="color:blue">English</a>
    <a class="nav-link" href="{{url('/ur')}}" style="color:blue">Urdu</a>
    <a class="nav-link" href="{{url('/ch')}}" style="color:blue">China</a>
    <h2 class="center"> @lang('lang.welcome')</h2>

</div>

  </body>
</html>
