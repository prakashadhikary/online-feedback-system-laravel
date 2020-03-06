<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Faculty;
use File;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Faculty::paginate(5);
        return view('dashboard.admin.faculty.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.faculty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image="";
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->move('images', $name);
            $image = 'images/'.$name;
        }
        Faculty::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'designation' => $request->designation,
            'programme' => $request->programme,
            'semester' => $request->semester,
            'phone' => $request->phone,
            'image' => $image
        ]);
        return redirect()->route('admin.faculty');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Faculty::find($id);
        return view('dashboard.admin.faculty.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image = $request->image_url;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->move('images', $name);
            if(File::exists($image)){
                File::delete($image);
            }
            $image = 'images/'.$name;
        }

        Faculty::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'designation' => $request->designation,
            'programme' => $request->programme,
            'semester' => $request->semester,
            'phone' => $request->phone,
            'image' => $image
        ]);
        return redirect()->route('admin.faculty');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Faculty::find($id)->delete();
        return redirect()->route('admin.faculty');
    }
}
