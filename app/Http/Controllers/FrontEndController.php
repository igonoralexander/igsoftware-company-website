<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use App\Models\Product;
use App\Models\Testimonial;
use App\Models\Project;
use App\Models\RegisterUser;

class FrontEndController extends Controller
{

    public function testimonial(Request $request)
    { 
        $request-> validate([
            'client_name' => 'required',   
            'content'     => 'required|max:5000',
            'image'       =>  'required|image|mimes:jpg,png,jpeg',
            ]);

        if (request()->hasFile('image'))
        {
            $extension = $request->file('image')->getClientOriginalExtension();
            $folder = 'testimonial_img';
            
            if( $extension == 'jpeg' || $extension == 'png' || $extension == 'jpg')
            {
            $imageName = time() . "." . $extension;
            $file = $request->file('image')->storeAs($folder, $imageName, 'public');

            $testimonial = new Testimonial ();
        
            $testimonial ->client_name     = $request ->client_name;
            $testimonial ->content         = $request ->content;
            $testimonial->image            = 'storage/' . $file;
            
            $testimonial -> save();

            return back()->with ('status', 'Testimonial added Successfully!');
            }
        }
    }

    public function addProject(Request $request)
    { 
        $request-> validate([
            'project_name'      => 'required',   
            'link'              => 'required',
            'image'             => 'required|image|mimes:jpg,png,PNG,jpeg',
            ]);

        if (request()->hasFile('image'))
        {
            $extension = $request->file('image')->getClientOriginalExtension();
            $folder = 'project_img';
            
            if( $extension == 'jpeg' || $extension == 'png' || $extension == 'PNG' ||  $extension == 'jpg')
            {
            $imageName = time() . "." . $extension;
            $file = $request->file('image')->storeAs($folder, $imageName, 'public');

            $project = new Project ();
        
            $project ->project_name    = $request ->project_name;
            $project->link             = $request ->link;
            $project->image            = 'storage/' . $file;
            
            $project -> save();

            return back()->with ('status', 'Project added Successfully!');
            }
        }
    }

    public function showTestimonials()
    {
       
    }

    public function viewByCategory($slug)
    { 

        if (Category::Where('slug', $slug)->exists())
        {

            $data = array();

            if (session::has('loginId'))
            {
                $data = RegisterUser::where('id', '=', session::get('loginId'))->first();
            }
    
            $category = Category::All();
            $category1 = Category::Where('slug', $slug)->first();
            $products = Product::Where('cate_id', $category1->id)->where('status', '0')->get();

            return view('pages.viewByCategory', compact(['data', 'category1', 'category', 'products']));
        }
        else
        {
            return redirect ('/')->with('status', "Slug Does Not Exists");
        }
       
    }

}