<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $slider=Slider::all();
        return view('homepage.index', compact('slider'));
    }

    public function addSlider(Request $request){
        $slider=new Slider();
        $slider->sm_title=$request->sm_title;
        $slider->title=$request->title;
        $slider->description=$request->description;
        $slider->link=$request->link;
        $slider->image=$request->image->store('upload/slider');
        // dd($request->all());
        $slider->save();
        return redirect()->route('homepage-setting');
    }

    public function deleteSlider($id){
        Slider::destroy($id);
        return redirect()->route('homepage-setting');
    }


}
