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
    public function index(Request $request)
    {
        $query = Blog::where('deleted_at' ,'=', null);
        if(isset($request->id)){
            $query = $query->getbyid($request->id);
        }
        if(isset($request->name)){
            $query = $query->getbytitle($request->name);
        }
        if(isset($request->status)){
            $query = $query->getbystatus($request->status);
        }
        if(isset($request->date_start)){
            $query = $query->getbydatestart($request->date_start);
        }
        if(isset($request->date_end)){
            $query = $query->getbydateend($request->date_end);
        }
        return $query->paginate(10);
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
    public function show($id)
    {

    }

    public function getDetailBlogPage($id){
        $blog = Blog::findOrFail($id);
        return view('main_public.blog.blog_detail',compact('blog'));
    }

    public function getBlogsList(Request $request){

        $query =Blog::where('deleted_at','=',null)->where('status','=',1);
        if(isset($request->sortType)){
            switch ($request->sortType){
                case 0:
                    $query = $query->orderBy('created_at','DESC');
                    break;
                case 1:
                    $query = $query->orderBy('created_at','ASC');
                    break;
                case 2:
                    $query = $query->orderBy('title','ASC');
                    break;
                case 3:
                    $query = $query->orderBy('title','DESC');
                    break;
                default: echo 'error';
            }
        }
        if(isset($request->title)){
            $query->getbytitle($request->title);
        }
        return $query->paginate(3);
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
