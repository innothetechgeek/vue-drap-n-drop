<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\Slide;

class SectionsController extends Controller
{
    //

    public function uploadSliderImages(Request $request){

        $files = $request->allFiles();

        foreach ($files as $file) {

            $file_name = $file->getClientOriginalName();

            $slide = new Slide;
            $slide->slider_id = 1;
            $slide->title = 'test';
            $slide->description = 'test';
            $slide->image = $file_name;
            $slide->save();

            $path = $file->storeAs("public/sliders/$slide->slider_id/slides/$slide->id",$file_name);
            // Do something with the path...
        }
       
        return $this->getSectionSlides(4);

    }

    public function getSectionSlides($section_id){

        $slides = Slide::all();

        $images = [];

        foreach($slides as $key => $slide){

            array_push($images,[
                'name' => "$slide->id/$slide->image",
                'id' => $slide->id,
              
            
            ]);

        }

        return $images;

    }

}
