<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Mengajar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreMengajarRequest;
use App\Http\Requests\UpdateMengajarRequest;

class MengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mengajar = Classes::all();
        return view('mengajar.index', ['datas' => $mengajar]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function detail($id)
    {
        $class = Classes::findOrFail($id);
        return view('mengajar.detail', ['datas' => $class]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mengajar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'teacher' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|max:2048'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $imagePath = 'images/' . $imageName;
        $request->image->move(public_path('images'), $imageName);

        $create = Classes::create([
            'teacher' => $request->teacher,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'token' => Str::random(5)
        ]);

        $create->save();

        if ($create) {
            return redirect()->route('mengajar.index')->with(['success' => 'Success']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Mengajar $mengajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mengajar $mengajar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMengajarRequest $request, Mengajar $mengajar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mengajar $mengajar)
    {
        //
    }
}
