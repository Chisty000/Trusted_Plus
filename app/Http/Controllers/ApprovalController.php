<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;

use App\Models\Listing;
use App\Models\Approved;

class ApprovalController extends Controller{
    public function transfer($id){
        $data=Listing::find($id);
        $seed=new Approved;
        $seed->name=$data->name;
        $seed->website=$data->website;
        $seed->opening=$data->opening;
        $seed->closing=$data->closing;
        $seed->location=$data->location;
        $seed->details=$data->details;
        $seed->phone=$data->phone;
        $seed->category=$data->category;
        $seed->address=$data->address;
        $seed->save();

        Listing::destroy($id);
        return redirect('/display');
    }

    public function display(){
        $listings = Listing::latest()->paginate(1);
        return view('display',compact('listings'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function disapprove($id){
        Listing::destroy($id);
        return redirect('/display');
    }

}