<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <form action="{{ url('/') }}/register" method="post">
        @csrf
        {{-- this is used for the show valdation to client in array form --}}
        {{-- <pre>
    @php
        print_r($errors->all());
    @endphp
    </pre> --}}


        <div class="container">
            <x-input type="text" name="name" label="Please Enter Name" />
            <span class="text-danger">
                @error('name')
                    {{ $message }}
                @enderror
            </span>
            <x-input type="email" name="email" label="Please Enter Email" />
            <span class="text-danger">
                @error('email')
                    {{ $message }}
                @enderror
            </span>
            <x-input type="password" name="password" label="Please Enter Password" />
            <span class="text-danger">
                @error('password')
                    {{ $message }}
                @enderror
            </span>
            <x-input type="password" name="password_confirmation" label="Confirm Password" />
            <span class="text-danger">
                @error('password_confirmation')
                    {{ $message }}
                @enderror
            </span>
            <div>
                <input type="submit" value="submit" class="btn btn-primary">

            </div>
        </div>

    </form>
</body>

</html>
