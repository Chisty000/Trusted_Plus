<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Approved;
use Illuminate\Http\Request;




class WelcomeController extends Controller{
    public function index(Request $request){
        if($request->input('category')==null and $request->input('location')==null ){
            $approved=Approved::latest()->paginate(5);
            return view('welcome',compact('approved'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        else{
            if($request->input('category')!=null){
                $place=$request->input('category');
                $approved=Approved::select("*")->where("category",$place)->paginate(10);
                return view('welcome',compact('approved'))
                ->with('i', (request()->input('page', 1) - 1) * 5);

            }
            if ($request->input('location')!=null){
                $place=$request->input('location');
                $approved=Approved::select("*")->where("location",$place)->paginate(10);
                return view('welcome',compact('approved'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
            }
        }
        
    }

    public function search(Request $request){
        $key=$request->key;
        $data=Approved::query()->where('name', 'LIKE', "%{$key}%")->paginate(5);
        return view('search', compact('data'))             ->with('i',  (request()->input('page', 1) - 1) * 5);
    }

    public function showSingle($id){
        $singlez=Approved::find($id);
        return view('showSingle',compact('singlez'));
    }
}