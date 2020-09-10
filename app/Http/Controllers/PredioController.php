<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Predio;
use App\Category;
use App\User;
use App\Condicion;
use App\File;
use Image; //Intervention Image
use Illuminate\Support\Facades\Storage; 

class PredioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $condicion = Condicion::all();

        $predio = Predio::all();

        $categories = Category::all();

        $users = User::where('id', '=', auth()->id())->get();

        return view('admin.predio.index', compact('predio', 'categories', 'users', 'condicion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $predio = Auth()->user()->predios()->create($request->all());
        

        foreach ($request->url as $file) {

                    //get filename with extension
            $filenamewithextension = $file->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $file->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
            
            Storage::put('public/predio/'. $filenametostore, fopen($file, 'r+'));
           
            Storage::put('public/predio/thumbnail/'. $filenametostore, fopen($file, 'r+'));
           
             //Resize image here
            $thumbnailpath = public_path('storage/predio/thumbnail/'.$filenametostore);
            
            $img = Image::make($thumbnailpath)->resize(700, 600)->save($thumbnailpath);
            
            $img->save($thumbnailpath);


            File::create([
                'predio_id' => $predio->id,
                'url' => $filenametostore
            ]);
        }

        return back();
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
        $predio = Predio::findOrFail($request->predio_id);

        $predio->update($request->all());

        // dd($predio);

        $predio->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        $predio = Predio::findOrFail($request->predio_id);

        $predio->delete();

        return back();
    }
}
