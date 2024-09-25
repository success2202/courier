<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
     
    public function Index(){
        return view('admin.blogs.index', [
            'blogs' => Blog::latest()->get()
        ])
        ->with('bheading', 'Manage Blogs')
        ->with('breadcrumb', 'Blog Post');
    }

    public function BlogsCreate(){
        return view('admin.blogs.create')
        ->with('bheading', 'Manage Blogs')
        ->with('breadcrumb', 'Post Blogs');
    }

    public function BlogsStore(Request $request){
        $request->validate([
            'title' => 'required',
            'contents' => 'required',
            'image' => 'required',
        ]);

        //dd($request->all());

        $data = [];
       try{ 
        if($request->contents){
            $data['contents'] = $request->contents;
        }
        if($request->title) {
            $data['title'] = $request->title;
        }
        if($request->image){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $image->move('images',$fileName);
            $data['image'] = $fileName;
        }
         Blog::create($data);
        Session::flash('alert', 'success');
        Session::flash('message','Page added successfully');
        return back();
    
   }catch(\Exception $e){
        Session::flash('alert', 'error');
        Session::flash('message','Request Failed, try again');
        return back()->withInput();
    }
    }

    public function BlogsEdit($id){
        return view('admin.blogs.edit', [
            'blog' => Blog::where('id', decrypt($id))->first(),
            'latest' => Blog::latest()->take(5)->get()
        ])
        ->with('bheading', 'Manage Blogs')
        ->with('breadcrumb', 'Edit Blog Post');
    }

    public function BlogsUpdate(Request $request, $id){
        $blog = Blog::whereId(decrypt($id))->first();
        try{ 
        if($request->contents){
            $blog->contents = $request->contents;
        }
        if($request->title) {
            $blog->title = $request->title;
        }
        if($request->image){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $image->move('images',$fileName);
            $blog->image = $fileName;
        }
        $blog->save();
        Session::flash('alert', 'success');
        Session::flash('message','Blog added successfully');
        return back();
    
    }catch(\Exception $e){
        Session::flash('alert', 'error');
        Session::flash('message','Request Failed, try again');
        return back()->withInput();
    }
    }


    public function BlogsDelete($id){
        $blog = Blog::whereId(decrypt($id))->first();
        $blog->delete();
        Session::flash('alert', 'error');
        Session::flash('message','Page Deleted successfully');
        return back();
    }


}
