<!doctype html>
<html lang="en">

<head>
    <title>Insertion</title>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-blue bg-light">
        <a class="navbar-brand" href="#">Laravel Project</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}" style="color:blue">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}/customers" style="color:blue">Customer
                        Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}/view" style="color:blue">Customers</a>
                </li>
                <li class="nav-item dropdown">

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <form action="{{ $url }}" method="post">
        @csrf
        {{-- <pre>
            @php
                print_r($errors->all());
            @endphp
        </pre> --}}
        <h1 class="text-center "> {{ $title }}</h1>
        <div class="container">


            <label for="">Name</label>
            <div class="form-group">
                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId"   value="{{ $customer->name }}"/>
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <label for="">Email</label>
            <div class="form-group">
                <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId"
                    value="{{ $customer->email }}" />
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <label for="">Password</label>
            <div class="form-group">
                <input type="password" name="password" id="" class="form-control" placeholder=""
                    aria-describedby="helpId" />
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <label for="">Confirm_Password</label>
            <div class="form-group">
                <input type="password" name="password_confirmation" id="" class="form-control" placeholder=""
                    aria-describedby="helpId" />
                <span class="text-danger">
                    @error('password_confirmation')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <label for="">Country</label>
            <div class="form-group">
                <input type="text" name="country" id="" class="form-control" placeholder="" aria-describedby="helpId"
                    value="{{ $customer->country }}" />
                <span class="text-danger">
                    @error('country')
                        {{ $message }}
                    @enderror
                </span>
            </div>


            <label for="">State</label>
            <div class="form-group">
                <input type="text" name="state" id="" class="form-control" placeholder="" aria-describedby="helpId"
                    value="{{ $customer->state }}" />
                <span class="text-danger">
                    @error('state')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <label for="">Address</label>
            <div class="form-group">
                <input type="textfield" name="address" id="" class="form-control" placeholder=""
                    aria-describedby="helpId" value="{{ $customer->address }}" />
                <span class="text-danger">
                    @error('address')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <label for="">D-O-B</label>
            <div class="form-group">
                <input type="date" name="dob" id="" class="form-control" placeholder="" aria-describedby="helpId"
                    value="{{ $customer->dob }}" />
                <span class="text-danger">
                    @error('dob')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <label for="">Points</label>
            <div class="form-group">
                <input type="INT" name="points" id="" class="form-control" placeholder="" aria-describedby="helpId"
                    value="{{ $customer->points }}" />
                <span class="text-danger">
                    @error('points')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div>
                <label for=""> Select Gender </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="gender" type="radio" value="M" {{$customer->gender == "M" ? "checked" : ""}}/>

                    <label class="form form-check-label" for="male">
                        Male
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="gender" type="radio" value="F"  {{$customer->gender == "F" ? "checked" : ""}}>

                    <label class="form form-check-label" for="female">
                       Female
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="gender" type="radio" value="O"   {{$customer->gender == "O" ? "checked" : ""}}/>

                    <label class="form form-check-label" for="other">
                   Other
                    </label>
                </div>
                <span class="text-danger">
                    @error('gender')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <input type="submit" value="Submit" class="btn btn-outline-primary" />
        </div>
    </form>
</body>

</html>
