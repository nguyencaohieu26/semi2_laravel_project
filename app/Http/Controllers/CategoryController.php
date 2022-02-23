<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Category::where('deleted_at' ,'=', null);

        if(isset($request->id)){
            $query = $query->getbyid($request->id);
        }
        if(isset($request->name)){
            $query = $query->getbyname($request->name);
        }
        if(isset($request->status)){
            $query  = $query->getbystatus($request->status);
        }
        if(isset($request->code)){
            $query = $query->getbycategorycode($request->code);
        }
        return $query->paginate(5);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'category_code' =>'bail|required|unique:categories,category_code',
            'name' => 'bail|required|unique:categories,name',
            'upload_img' => 'bail|required|mimes:jpg,png,jpeg',
        ]);

        $newImageName = time().'-'.$request->category_code.'.'.$request->upload_img->extension();

        $request->upload_img->move(public_path('images_store/categories'),$newImageName);

        $category = new Category;
        $category->name = $request->name;
        $category->category_code = $request->category_code;
        $category->image = $newImageName;
        $category->save();

        return redirect()->route('admin-categories')->with('create-category','Create category successfully');
        //
    }
    public function changeStatus(Request $request){
        $category = Category::findOrFail($request->id);
        $category->status = $request->status;
        $category->save();
        return "Change status to ".($request->status == 1 ? "active" : "inactive")." successfully";
    }
    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit',compact('category'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if(isset($request->upload_img)){
            $validate = $request->validate([
                'category_code' =>['bail','required', Rule::unique('categories')->ignore($id)],
                'name' => ['bail','required', Rule::unique('categories')->ignore($id)],
                'upload_img' => 'bail|required|mimes:jpg,png,jpeg',
            ]);

            $newImageName = time().'-'.$request->category_code.'.'.$request->upload_img->extension();

            $request->upload_img->move(public_path('images_store/categories'),$newImageName);

            $category =  Category::findOrFail($id);
            $category->name          = $request->name;
            $category->category_code = $request->category_code;
            $category->image         = $newImageName;
            $category->save();
            return redirect()->route('admin-categories')->with('edit-category','Edit category successfully');
        }else{
            $validate = $request->validate([
                'category_code' =>['bail','required', Rule::unique('categories')->ignore($id)],
                'name' => ['bail','required', Rule::unique('categories')->ignore($id)],
            ]);
            $category =  Category::findOrFail($id);
            $category->name          = $request->name;
            $category->category_code = $request->category_code;
            $category->save();
            return redirect()->route('admin-categories')->with('edit-category','Edit category successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Category::findOrFail($id);
        $res = Category::destroy($id);
        return "Remove Artist Successfully";
    }
}
