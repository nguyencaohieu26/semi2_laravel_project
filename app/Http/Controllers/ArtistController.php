<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Artist::where('deleted_at' ,'=', null);
        if(isset($request->id)){
            $query = $query->getbyid($request->id);
        }
        if(isset($request->name)){
            $query = $query->getbyname($request->name);
        }
        if(isset($request->status)){
            $query = $query->getbystatus($request->status);
        }
        return $query->paginate(10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return  view('admin.artists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
           "name"           => 'bail|required|max:100',
           "date_of_birth"  => 'required|date',
           "description"    => 'required|'
        ]);
        $artist = new Artist;
        $artist->name = $request->name;
        $artist->date_of_birth = $request->date_of_birth;
        $artist->description = $request->description;
        $artist->save();
        return redirect()->route('admin-artists')->with('create-artist','Create Artist Successfully');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $artist = Artist::findOrFail($id);
        return view('admin.artists.edit',compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            "name"           => 'bail|required|max:100',
            "date_of_birth"  => 'required|date',
            "description"    => 'required|'
        ]);
        $artist = Artist::findOrFail($id);
        $artist->name = $request->name;
        $artist->date_of_birth = $request->date_of_birth;
        $artist->description = $request->description;
        $artist->save();
        return redirect()->route('admin-artists')->with('edit-artist','Update Artist Successfully');
    }

    /**
     * Remove the specified resource from storage.

     */
    public function destroy($id)
    {
        Artist::findOrFail($id);
        $res = Artist::destroy($id);
        return "Remove Artist Successfully";
        //
    }
}
