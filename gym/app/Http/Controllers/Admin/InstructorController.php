<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InstructorController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.instructors.index')->only('index');
        $this->middleware('can:admin.instructors.create')->only('create','store');
        $this->middleware('can:admin.instructors.edit')->only('edit','update');
        $this->middleware('can:admin.instructors.destroy')->only('destroy');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructors = Instructor::all();
        return view('admin.instructors.index', compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.instructors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'name' => 'required',
            'slug' => 'required|unique:categorias',
            'description'=>'required',
            'file'=>'image'
        ]);
        $instructor = Instructor::create($request->all());

        if($request->file('file')){
            $url = Storage::disk('public')->put('posts',$request->file('file'));
            $instructor->image()->create([
                'url'=> $url
            ]);
        }else {
            $instructor->image()->create([
                'url' =>'placeholder'
            ]);
        }
        
        return redirect()->route('admin.instructors.edit', $instructor)->with('info', 'El instructor se ha creado con exito');
    }

    public function edit(Instructor $instructor)
    {
        return view('admin.instructors.edit', compact('instructor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instructor $instructor)
    {
        $request ->validate([
            'name' => 'required',
            'slug' => "required|unique:instructors,slug,$instructor->id",
            'description'=>'required',
            
        ]);
        $instructor->update($request->all());

        if($request->file('file')){
            $url = Storage::disk('public')->put('posts',$request->file('file'));

            if($instructor->image){
                Storage::disk('public')->delete('posts',$instructor->image->url);
                $instructor->image->update([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('admin.instructors.edit', $instructor)->with('info', 'El instructor se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instructor $instructor)
    {
        Storage::disk('public')->delete('posts', $instructor->image->url);
        $instructor->image()->delete();
        $instructor->delete();
        return redirect()->route('admin.instructors.index')->with('info', 'El instructor se eliminó con exito');
    }
}
