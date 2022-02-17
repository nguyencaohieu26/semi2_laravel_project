<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Blog::paginate(5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validate = $request->validate([
           'title'          => 'bail|required|unique:blogs,title',
           'name'           => 'bail|required',
           'tag'            => 'bail|required',
           'upload_img'     => 'bail|required',
           'content_post'   => 'bail|required',
        ]);

        $newImageName = time().$request->title.'.'.$request->upload_img->extension();

        $request->upload_img->move(public_path('images_store/blogs'),$newImageName);

        $blog = new Blog;
        $blog->title        = $request->title;
        $blog->author       = $request->name;

        $blog->tag          = $request->tag;
        $blog->image        = $newImageName;
        $blog->content_post = $request->content_post;

        $blog->save();

      return redirect()->route('admin-blogs')->with('create-blog','Create blog successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if(isset($request->upload_img)){
            $validate = $request->validate([
                'name'           => 'bail|required',
                'tag'            => 'bail|required',
                'content_post'   => 'bail|required',
                'title'          => ['bail','required', Rule::unique('blogs')->ignore($id)],
                'upload_img'     => 'bail|required|mimes:jpg,png,jpeg',
            ]);

            $newImageName = time().'-'.$request->name.'.'.$request->upload_img->extension();

            $request->upload_img->move(public_path('images_store/blogs'),$newImageName);

            $blog =  Blog::findOrFail($id);
            $blog->title        = $request->title;
            $blog->author       = $request->name;
            $blog->tag          = $request->tag;
            $blog->image        = $newImageName;
            $blog->content_post = $request->content_post;

            $blog->save();
            return redirect()->route('admin-blogs')->with('edit-blog','Edit blog successfully');
        }else{
            $validate = $request->validate([
                'name'           => 'bail|required',
                'tag'            => 'bail|required',
                'content_post'   => 'bail|required',
                'title'          => ['bail','required', Rule::unique('blogs')->ignore($id)],
            ]);
            $blog =  Blog::findOrFail($id);
            $blog->title        = $request->title;
            $blog->author       = $request->name;
            $blog->tag          = $request->tag;
            $blog->content_post = $request->content_post;
            $blog->save();
            return redirect()->route('admin-blogs')->with('edit-blog','Edit blog successfully');
        }
    }

    /**
     * Remove the specified resource from storage.s
     */
    public function destroy($id)
    {
        Blog::findOrFail($id);
        $res = Blog::destroy($id);
        return "Remove blog successfully";
        //
    }
}
