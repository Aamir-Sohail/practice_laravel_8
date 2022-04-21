<!doctype html>
<html lang="en">

<head>
    <title>Show Data</title>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div >

        <a href="{{ route('customers.view') }}">
            <button class="btn btn-primary d-inline-block m-2 float-right"> Add</button></a>
    </div>
    <div>
        <a href="{{ url('customer/trash') }}">
            <button class="btn btn-danger d-inline-block m-2 float-right">Go-to-Trash</button></a>
    </div>

    <nav class="navbar navbar-expand-sm navbar-blue bg-light">
        <a class="navbar-brand" href="#">
            @if (session()->has('name'))
                {{ session()->get('name') }}
            @else
                Guest
            @endif
        </a>
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
            <form class="form-inline my-2 my-lg-0" action="" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search"
                    value="{{ $search }}">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                <a href="{{ url('/view') }}">
                    <button class="btn btn-outline-dark" type="button"> Reset</button>
                </a>
            </form>
        </div>
    </nav>
    <div class="container">
        <h3>Show All Data</h3>
        <table class="table">
            {{-- //show all data without table --}}
            {{-- <pre>
            {{print_r($customers)}}
        </pre> --}}
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>D-O-B</th>
                    <th>Status</th>
                    <th> Points </th>
                    <th> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->password }}</td>
                        <td>
                            @if ($customer->gender == 'M')
                                Male
                            @elseif ($customer->gender == 'F')
                                Female
                            @else
                                Other
                            @endif
                        </td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->state }}</td>
                        <td>{{ $customer->country }}</td>
                        <td>{{ $customer->dob }}</td>
                        <td>
                            @if ($customer->status == '1')
                                <a href="">
                                    <span class="badge badge-success">
                                        Active
                                    </span>
                                </a>
                            @else
                                <a href="">
                                    <span class="badge badge-danger">
                                        InActive
                                    </span>
                                </a>
                            @endif
                        </td>
                        <td>{{ $customer->points }}</td>
                        <td>
                            {{-- user for the url function (URL Methode) --}}
                            {{-- <a href="{{url('/customer/delete/')}}/{{$customer->id}}"> --}}
                            {{-- The Route methode --}}
                            <a href="{{ route('customer.delete', ['id' => $customer->id]) }}">
                                <button class="btn btn-danger">
                                    Trash
                                </button>
                            </a>
                            <a href="{{ route('customer.edit', ['id' => $customer->id]) }}">
                                <button class="btn btn-primary">
                                    Edit
                                </button>
                            </a>
                        </td>
                    </tr>

                @endforeach
            </tbody>
            {{-- pagination for the data --}}

        </table>

    </div>
        {{$customers->links()}}
</body>

</html>
