<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use PhpParser\Node\Expr\List_;

class ListingController extends Controller
{
    //show all listings
    public function index(){
           
return view('listings.index',[
        
        'listings' => Listing::latest()->filter(request(['tag','search']))->paginate(6)
          ]);// ..or use ----   simplepaginate for ACK or NEXT button link at bottom
    }

    //showsingle listing
    public function show(Listing $listing){
       return view('listings.show',[
        'listing' => $listing
    ]); 
    }


    //show create form
    public function create(){
        return view('listings.create');
    }


    //store listing data
    public function store(Request $request){


        // dd($request->file('logo'));
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website'=> 'required',
            'email' => ['required','email'],
            'tags'=> 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }
        
            $formFields['user_id'] = auth()->id();

        Listing::create($formFields);
        
        
        return redirect('/')->with('message','LISTING CREATED');

    }

//show edit form
public function edit(Listing $listing){

    return view('listings.edit' , ['listing' => $listing]);
}


  //updatelisting data
    public function update(Request $request, Listing $listing){

            ///make sure loggged in user is owner
if($listing->user_id !=auth()->id()){
    abort(403,'unauthorizd action');
}



        // dd($request->file('logo'));
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required' ],
            'location' => 'required',
            'website'=> 'required',
            'email' => ['required','email'],
            'tags'=> 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }
        
        $listing->update($formFields);
        
        
        return back()->with('message','LISTING UPDATED');
        

    }

//delete listing
public function destroy(Listing $listing){

            ///make sure loggged in user is owner
if($listing->user_id !=auth()->id()){
    abort(403,'unauthorizd action');
}



    $listing->delete();
    return redirect("/")->with('message','listing DELETED');
}

//manage listing
public function manage(){
    return view('/listings.manage',['listings' => auth()->user()->listings()->get()]);
}


}
