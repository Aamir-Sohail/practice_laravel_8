<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomersController extends Controller
{
    public function index()
    {
        $customer = new Customers();
        // dd($customer);
        $url = url('/customers');
        $title = "Customers Registration";
        $data = compact('url', 'title', 'customer');
        return view('crud.CustomerInsert')->with($data);
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required',
                //   'gender' => 'required',
                'address' => 'required',
                'state' => 'required',
                'country' => 'required',
                'dob' => 'required',
                'points' => 'required',

            ]
        );
        //    echo "<pre>";
        //    print_r($request->all());
        //Insert Query in Laravel...
        // p($request->all());
        // die;
        $customers = new Customers;
        $customers->name = $request['name'];
        $customers->email = $request['email'];
        $customers->password = md5($request['password']);
        $customers->gender = $request['gender'];
        $customers->address = $request['address'];
        $customers->state = $request['state'];
        $customers->country = $request['country'];
        $customers->dob = $request['dob'];
        $customers->points = $request['points'];

        $customers->save();
        return redirect('customers');
    }

    public function view(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            //where Close Can put Here...
            $customers = Customers::where('name', 'LIKE', "%$search%")->orWhere('email', 'LIKE', "%$search%")->get();
        } else {
            $customers = Customers::paginate(10);
        }

        //   echo "<pre>";
        //   print_r($customers->toArray());
        //   echo "</pre>";
        //   die;
        $data = compact('customers', 'search');
        return view('crud.Customers-view')->with($data);
    }

    public function Trash()
    {
        $customers = Customers::onlyTrashed()->get();
        $data = compact('customers');
        return view('crud.Customer-trash')->with($data);
    }
    public function Navbar()
    {
        return view('crud.index');
    }

    public function create()
    {
        $url = url('/customers');
        $title = "Customers Registration";
        $data = compact('url', 'title', 'customers');
        return view('crud.CustomerInsert', $data);
    }


    public function delete($id)
    {
        //  echo $id;
        //  die;
        //  $customers = Customers::find($id)->delete(); This is Direct delete Methode
        $customers = Customers::find($id);
        if (!is_null($customers)) {
            $customers->delete();
        }
        //  return redirect()->back();
        return redirect('view');
        //  echo "<pre>";
        //  print_r($customers);// find the record the user....
    }

    public function Forcedelete($id)
    {
        $customers = Customers::withTrashed()->find($id);

        if (!is_null($customers)) {
            $customers->forceDelete();
        }
        return redirect()->back();
    }
    public function Restore($id)
    {
        $customers = Customers::withTrashed()->find($id);
        if (!is_null($customers)) {
            $customers->restore();
            return redirect('view');
        }
    }
    public function edit($id)
    {
        $customer = Customers::find($id);
        if (is_null($customer)) {
            return redirect('view');
        } else {
            $title = "Update Customers";
            $url = url('customers/update') . "/" . $id;
            $data = compact('customer', 'url', 'title');
            return view('crud.CustomerInsert')->with($data);
        }
    }
    public function update($id, Request $request)
    {
        $customer = Customers::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->points = $request['points'];
        $customer->save();
        return redirect()->route('view.data', ['customer' => $customer]);
    }
}
