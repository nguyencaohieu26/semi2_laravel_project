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
//        dd($request->all());
        $request->validate([
           'title' => 'required',
            'author' => 'required',
            'upload_img' => 'required',
            'content_post' => 'required',
        ]);
        $newImageName = time().'.'.$request->upload_img->extension();
        $request->upload_img->move(public_path('images_store/blogs'),$newImageName);

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->image = $newImageName;
        $blog->content_post = $request->content_post;
        $blog->save();

//        return redirect()->route('admin-blogs')->with('create-blogs','Create category successfully');
        return redirect('blogs_resource');
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
        if (isset($request->upload_img)){
            $validate = $request->validate([
                'title' => 'required',
                'author' => 'required',
                'upload_img' => 'required|image|mimes:jpeg,png,jpg',
                'content_post' => 'required',
            ]);
            $newImageName = time().'.'.$request->upload_img->extension();
            $request->upload_img->move(public_path('images_store/blogs'),$newImageName);

            $blog = new Blog;
            $blog->title = $request->title;
            $blog->author = $request->author;
            $blog->image = $newImageName;
            $blog->content_post = $request->content_post;
            $blog->save();
            return redirect()->route('admin-blogs')->with('edit-blogs','Edit blogs successfully');
        } else{
            $validate = $request->validate([
                'category_code' =>['required', Rule::unique('blogs')->ignore($id)],
                'name' => ['required', Rule::unique('blogs')->ignore($id)],
            ]);
            $blog =  Category::findOrFail($id);
            $blog->title = $request->title;
            $blog->author_name = $request->author_name;
//            $blog->image = $newImageName;
            $blog->content_post = $request->content_post;
            $blog->save();
            return redirect()->route('admin-blogs')->with('edit-blogs','Edit blogs successfully');
        }
    }

    /**
     * Remove the specified resource from storage.s
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
