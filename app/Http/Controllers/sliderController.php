<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::paginate(5);
        return view('admin.viewSlider')->with('sliders',$sliders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('admin.addSlider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'sliderText'=>'required|unique:sliders',
            'sliderImage'=>'image|nullable|max:1999',
        ]);
          
        if($request->hasFile('sliderImage')){
            $fileNameWithExt = $request->file('sliderImage')->getClientOriginalName();
           //  get file name
           $fileName= pathinfo($fileNameWithExt,PATHINFO_FILENAME);
           $extension = $request->file('sliderImage')->getClientOriginalExtension();
       //   store filename in database
           $fileNameToStore = $fileName.'_'.time().'.'.$extension;
// store image in folder
           $path = $request->file('sliderImage')->storeAs('public/sliderImages',$fileNameToStore);

           }else{
               $fileNameToStore = 'noimage.png';
           }


           $sliders = new Slider();
           $sliders->sliderText = $request->input('sliderText');
           $sliders->sliderImage = $fileNameToStore;
           $sliders->save();

           return redirect('view-sliderForm')->with('status','slider saved successfully');
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
        $sliders = Slider::find($id);
     return view('admin.updateSlider')->with('sliders',$sliders);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'sliderText'=>'required',
            'sliderImage'=>'image|nullable|max:1999'
        ]);

        $sliders = Slider::find($request->input('id'));
        $sliders->sliderText = $request->input('sliderText');
        
        if($request->hasFile('sliderImage')){
            $fileNameWithExt = $request->file('sliderImage')->getClientOriginalName();
           //  get file name
           $fileName= pathinfo($fileNameWithExt,PATHINFO_FILENAME);
           $extension = $request->file('sliderImage')->getClientOriginalExtension();
       //   store filename in database
           $fileNameToStore = $fileName.'_'.time().'.'.$extension;
// store image in folder
           $path = $request->file('sliderImage')->storeAs('public/sliderImages',$fileNameToStore);
           
          // remove image which post has been deleted from the folder
           if($sliders->sliderImage != 'noimage.png'){
             Storage::delete('public/productImages/'.$sliders->sliderImage);
           }
           $sliders->sliderImage =$fileNameToStore;
           }

           $sliders->update();
        return redirect('view-allSlider')->with('status','Slider updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sliders = Slider::find($id);
        $sliders->delete();
        
        return back()->with('status','Slider deleted successfully');
    }
}
