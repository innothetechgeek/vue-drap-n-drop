<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageSection;

class PageController extends Controller
{
    //

    public function getPages(){

        return Page::all();
    }

    public function getSections($id){

       return PageSection::where('page_id',$id)->get();

    }
}
