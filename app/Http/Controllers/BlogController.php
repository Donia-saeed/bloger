<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Catagory;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateBlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('Catagory')->get(); //you must  use relationship
        return view('home', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $catagories = Catagory::all();
        return view('create-blogByDonia',['catagories' => $catagories]);   // selection catagories
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

// save in folder
        $path = 'img'; // upload path
        $file_extension = $request->photo->getClientOriginalExtension();
        $file_name = date('YmdHis'). "." . $file_extension;
        $request->photo->move($path, $file_name);
        // storing in database as file name use it in blade by path
        Blog::create(['photo'=>$file_name,
                      'name'=>$request->name,
                      'body'=>$request->body,
                      'catagory_id'=>$request->catagory_id]);

        // Blog::create($request->except('_token'));
        return redirect('home');
    }


    /**
     * Display the specified resource.

     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)  // instead of find(record of no) show one specific blog
    {

        // $blog = Blog::find($blog);
        // dd($blog);
        $catagory = Catagory::find($blog->catagory_id);  //can write id only because we done relation
        return view('blog', ['blog' => $blog,'catagory' => $catagory]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit( $blog)
    {
        //dd($blog)=$blog->id  so i put $blog
        $catagories = Catagory::all();
        $blog = Blog::find($blog);
        // dd($blog);=all content of one blog
        return view('edit-blog', ['catagories' => $catagories],['blog' => $blog]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     *  @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateBlogRequest $request,Blog $blog)
    // {

    // }
    public function update(Request $request, $id)
    // new data
    {    $blog= Blog::findOrFail($id); // to find the record of id =$id  if not found return throw error

        //save in folder
    $path = 'img'; // upload path
    $file_extension = $request->photo->getClientOriginalExtension();
    $file_name = date('YmdHis'). "." . $file_extension;
    $request->photo->move($path, $file_name);

// remove photo
if (file_exists(public_path($name =  $request->photo->getClientOriginalName())))
{
    unlink(public_path($name));
};

    // updating in database as file name use it in blade and use path of folder
    $blog->update(['photo'=>$file_name,
                  'name'=>$request->name,
                  'body'=>$request->body,
                  'catagory_id'=>$request->catagory_id]);

    return redirect('home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy( $blog)
    {
        // dd($blog); send  one $blog was choiced
        Blog::destroy($blog);

        return redirect('home');
    }
}
