<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
        public function list()
    {
        $abouts = About::all();
        return view('pages.about.list',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title1'=>'required|string',
            'title2'=>'required|string',
            'description'=>'required|string',
            'image'=>'required|image',
            
        ]);
        $abouts = new About;
         $abouts->title1 = $request->title1;
         $abouts->title2 = $request->title2;
         $abouts->description = $request->description;
         

        $image_file = $request->file('image');
        Storage::putFile('public/img', $image_file);
        $abouts->image="storage/img/".$image_file->hashName();

        

         $abouts->save();
        return redirect('admin/about/create')->with('success', 'New About created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about = About::find($id);
        return view('pages.about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
       $this->validate($request, [
            'title1'=>'required|string',
            'title2'=>'required|string',
            'description'=>'required|string',
        ]);
        $abouts = About::find($id);
         $abouts->title1 = $request->title1;
         $abouts->title2 = $request->title2;
         $abouts->description = $request->description;
        

         if($request->file('image')){

            $image_file = $request->file('image');
            Storage::putFile('public/img', $image_file);
            $abouts->image="storage/img/".$image_file->hashName();

         }
        


         $abouts->save();
        return redirect('admin/about/list')->with('success', 'About updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $about = About::find($id);
        @unlink(public_path($about->image));
        $about->delete();

        return redirect('admin/about/list')->with('success', 'About deleted successfully');
    }

}
