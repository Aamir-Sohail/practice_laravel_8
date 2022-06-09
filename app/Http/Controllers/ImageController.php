<?php


namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;
use Hamcrest\InvokedMatcherTest;

class ImageController extends Controller
{
    public function index()
    {
        return view('image');
    }

     public function imagestore(Request $request)
     {
         $image = new Image();

        $image->name = $request['name'];
        $image->address = $request['address'];
        // $image->file = $request['file'];
        if($request->hasFile('file'))
        {
            $file =$request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/blog/', $filename);
            $file->file=$filename;

        $image->save();
        return back('imagestore');

     }
    }
}
