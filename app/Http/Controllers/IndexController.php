<?php

namespace App\Http\Controllers;

use App\Models\Index;
use App\Models\Instagram;
use App\Models\Blog;
use App\Models\Amar;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        Amarfun();


        $instagram = Instagram::where('id','>=','0')->orderBy('id', 'DESC')->simplePaginate(6);
        $blog = Blog::where('id','>=','0')->orderBy('id', 'DESC')->simplePaginate(8);

        $index = array('instagram' => $instagram,
                        'blog'     => $blog );
        return view('index',compact('index'));
    }

    public function email()
    {

        return view('index',compact('index'));
    }

}
