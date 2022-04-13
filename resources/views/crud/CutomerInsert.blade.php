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
    <form action="{{route('customers')}}" method="post">
        <h1 class="text-center "> Registration Form</h1>
        <div class="container">

            <label for="">Name</label>
            <div class="form-group">
                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId"
                    value="{{ old('name') }}" />
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <label for="">Email</label>
            <div class="form-group">
                <input type="text" email="email" id="" class="form-control" placeholder="" aria-describedby="helpId"
                    value="{{ old('email') }}" />
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <label for="">Name</label>
            <div class="form-group">
                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId"
                    value="{{ old('name') }}" />
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <label for="">Email</label>
            <div class="form-group">
                <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId"
                    value="{{ old('email') }}" />
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <label for="">Password</label>
            <div class="form-group">
                <input type="password" name="password" id="" class="form-control" placeholder=""
                    aria-describedby="helpId" value="{{ old('password') }}" />
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <label for="">Confirm_Password</label>
            <div class="form-group">
                <input type="password" name="password_confirmation" id="" class="form-control" placeholder=""
                    aria-describedby="helpId" value="{{ old('password_confirmation') }}" />
                <span class="text-danger">
                    @error('password_confirmation')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <label for="">Country</label>
            <div class="form-group">
                <input type="text" name="country" id="" class="form-control" placeholder="" aria-describedby="helpId"
                    value="{{ old('country') }}" />
                <span class="text-danger">
                    @error('country')
                        {{ $message }}
                    @enderror
                </span>
            </div>


            <label for="">State</label>
            <div class="form-group">
                <input type="text" name="state" id="" class="form-control" placeholder="" aria-describedby="helpId"
                    value="{{ old('state') }}" />
                <span class="text-danger">
                    @error('state')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <label for="">Address</label>
            <div class="form-group">
                <input type="textfield" name="address" id="" class="form-control" placeholder=""
                    aria-describedby="helpId" value="{{ old('address') }}" />
                <span class="text-danger">
                    @error('address')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <label for="">D-O-B</label>
            <div class="form-group">
                <input type="date" name="dob" id="" class="form-control" placeholder="" aria-describedby="helpId"
                    value="{{ old('dob') }}" />
                <span class="text-danger">
                    @error('dob')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <label for=""> Select Gender </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="male" id="exampleRadios1" value="option1" checked>
                Male
                </label>
            </div>
            <label for=""> Select Gender </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="female" id="exampleRadios1" value="option1" checked>
                FeMale
                </label>
            </div>
            <label for=""> Select Gender </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="other" id="exampleRadios1" value="option1" checked>
                Other
                </label>
            </div>
            
        </div>
    </form>
</body>

</html>
