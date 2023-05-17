<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageSection;
use Inertia\Inertia;

class PageController extends Controller
{
    //

    public function pageResolver(Request $request){

        $path = $request->path();

        $page = Page::with('sections')->where('url',$path)->get();

        return Inertia::render('Frontend/Home', [
            'sections' => $page[0]->sections
        ]);

    }

    public function getPages(){

        return Page::all();
    }

    public function getSections($id){

       return PageSection::where('page_id',$id)->get();

    }

    public function addSection(Request $request, $id){

        $section = new PageSection;
        $section->name = $request->name;
        $section->content_type = $request->contentType;
        $section->page_id = $id;
        $section->save();

     //   return redirect()->route('dashboard');

    }

   
}
