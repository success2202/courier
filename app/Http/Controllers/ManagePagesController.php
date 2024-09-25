<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ManagePagesController extends Controller
{
    
    public function Index(){

        return view('admin.pages.index', [
            'pages' => Services::get()
        ])
        ->with('bheading', 'Manage pages')
        ->with('breadcrumb', 'Pages Index');
    }


    public function PagesCreate(){
        return view('admin.pages.create', [
            'Pagesmenu' => Services::get()
        ])
        ->with('bheading', 'Manage pages')
        ->with('breadcrumb', 'Create Page');
    }


    public function PagesStore(Request $request){
        $request->validate([
            'title' => 'required',
            'contents' => 'required',
            'image' => 'required',
        ]);
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
            $data['images'] = $fileName;
        }
        
        Services::create($data);
        Session::flash('alert', 'success');
        Session::flash('message','Page added successfully');
        return back();
}

    public function PagesEdit($id){
        return view('admin.pages.edit', [
            'page' => Services::where('id', decrypt($id))->first()
        ])
        ->with('bheading', 'Manage pages')
        ->with('breadcrumb', 'Edit Page');

    }

    public function PagesUpdate(Request $request, $id){
      
        if($request->title){
            $data['title'] = $request->title;
        }
        if($request->contents){
            $data['contents'] = $request->contents;
        }
        if($request->image){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $image->move('images',$fileName);
            $data['images'] = $fileName;
        }
        Services::where('id', decrypt($id))
        ->update($data);
        Session::flash('alert', 'success');
        Session::flash('message','Page updated successfully');
        return back();
        
    }

    public function PagesDelete($id){
        $page = Services::where('id', decrypt($id))->first();
        $page->delete();
        Session::flash('alert', 'error');
        Session::flash('message','Page Deleted successfully');
        return back();
    }
}
