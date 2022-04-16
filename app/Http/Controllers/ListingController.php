<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::latest()->paginate(5);
    
        return redirect('/');
    }

    public function create()
    {
        return view('listing.create');
    }

    public function store(Request $request)
    {   
        $req_name=$request->name;
       
        if (Listing::where('name', $req_name )->exists()) {
            return "Business with this name already applied/approved try a different name";
        }
        $request->validate([
            'name' => 'required',
            'details' => 'required',
            'phone'=>'required',
            'opening'=>'required',
            'closing'=>'required',
            'location'=>'required',
            'category'=>'required',
            'address'=>'required',
        ]);
    
        Listing::create($request->all());
     
        return redirect()->route('listing.index')
                        ->with('success','listing created successfully.');
    }
}
