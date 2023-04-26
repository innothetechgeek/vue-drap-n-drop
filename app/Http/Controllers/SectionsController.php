<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\Slide;
use App\Models\Course;
Use App\Models\PageSection;
use Inertia\Inertia;

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

    public function addCourse(Request $request,$id){

       $course = new Course;
        
       $course->title = $request->title;
       $course->number_of_students = $request->number_of_students;
       $course->rating = $request->rating;
       $course->price = $request->price;
       $course->level = $request->level;
       $course->section_id = $id;
       $course->save();
       
       $image = $request->image;

       if(!empty($image)){

            $image_name = $image->getClientOriginalName();
            $path = $image->storeAs("public/course_images/course$id/",$image_name);
            $course->image = $image_name;
            $course->save();
       }

      
    }

    public function getCourses($section_id){

        return Course::where('section_id',$section_id)->get();
        
    }

    public function deleteSection($id){

        $section = PageSection::find($id);
        $section->delete();

      //  return redirect()->route('dashboard');

    }

    public function liveEdit(){

        return Inertia::render('Frontend/LiveEditor');

    }


}
