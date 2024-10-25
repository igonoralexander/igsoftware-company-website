<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use App\Models\Blog;
use App\Models\Admin;
use App\Models\Category;
use App\Models\RegisterUser;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addBlog()
    { 
        $data = array();

        if (session::has('AdmLogId'))
        {
            $data = Admin::where('id', '=', session::get('AdmLogId'))->first();
            return view('admin.addblog', compact('data'));
        }

        else
        {
            return redirect('/admin');
        }

    }


    public function showBlogs()
    { 
        $blog = Blog::all();
        return view('admin.addblog', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([
            // 'cate_id'               => 'required',
            'title'                 => 'required|unique:blogs',
            // 'slug'                  => 'required',
            'content'               => 'required',
            'image'                 => 'required|image',
            ]);

        if (request()->hasFile('image'))
        {
            $extension = $request->file('image')->getClientOriginalExtension();
            $folder = 'blog_img';
            
            if( $extension == 'jpeg' || $extension == 'png' || $extension == 'jpg' || $extension == 'PNG')
            {
            $imageName      = time() . "." . $extension;

            $file = $request->file('image')->storeAs($folder, $imageName, 'public');

            $blog = new Blog ();
        
            // $blog ->cate_id                  = $request ->cate_id;
            $blog ->title             = $request ->title;
            // $blog->slug                      = $request ->slug;
            $blog ->content          = $request ->content;
            $blog->image             = 'storage/' . $file;

            $blog -> save();

            return back()->with ('status', 'Blog added Successfully!');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $blogs = Blog::all();
        return view('pages.allblog', compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function singleBlog($id)
    {
        // $category = Category::all();
        $blog = Blog::find($id);
        return view('pages.singleblog', compact('blog'));
    }

     public function edit(Blog $blogs)
    {
        // $category = Category::all();
        $blogs = Blog::find($blogs->id);
        return view('admin.editblog', compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blogs)
    {
        $blogs = Blog::find($blogs->id);    
        
        if (request()->hasFile('image'))
        {
            $path = 'storage/blog_img/'.$blogs->image;

            if (File::exists($path))
            {
                File::delete($path);
            }

            $extension = $request->file('image')->getClientOriginalExtension();
           
            $folder = 'blog_img';
            $imageName      = time() . "." . $extension;

            $file = $request->file('image')->storeAs($folder, $imageName, 'public');
            $blogs->image            = 'storage/' . $file;
        }
            $blogs ->title           = $request ->title;
            // $blog->slug                      = $request ->slug;
            $blogs ->content         = $request ->content;

            $blogs-> update();
            return back()->with ('status', 'Blog updated Successfully!');
    }
    
    public function manageBlog()
    {
        $data = array();

        if (session::has('AdmLogId'))
        {
            $data = Admin::where('id', '=', session::get('AdmLogId'))->first();
            $blogs = Blog::orderBy('id', 'DESC')->paginate(10);
            return view('admin.manageblog', compact('blogs'));
        }

        else
        {
            return redirect('/admin');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog = Blog::find($blog->id);
        
        $path = 'storage/blog_img/'.$blog->image;

        if (File::exists($path))
        {
            File::delete($path);
        }
        $blog->delete();

        return redirect('/addblog.php')->with('status', 'Blog Deleted!');

    }
}