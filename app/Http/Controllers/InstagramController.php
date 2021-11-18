<?php

namespace App\Http\Controllers;

use App\Models\Instagram;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Amarfun();

        $instagram = Instagram::where('id','>=','0')->orderBy('id', 'DESC')->simplePaginate(9);
        return view('instagram-list',compact('instagram'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'caption'=>'bail|required',
            'img1' => 'bail|required| image',
        ]);

        $title=$request['title'];
        $caption=$request['caption'];

        $instagram = new Instagram();
        $instagram -> title="$title";
        $instagram -> text="$caption";
        $instagram->save();





        $img = array(
            $request->file('img1'),
            $request->file('img2'),
            $request->file('img3'),
            $request->file('img4'),
            $request->file('img5'),
            $request->file('img6'),
            $request->file('img7'),
            $request->file('img8'),
            $request->file('img9'),
            $request->file('img10'),
        );


        // uploadd
        $destinationPath = 'instagram_files/img_instagram';
        for ($i=0; $i <= 10; $i++) {
            if (isset($img[$i])) {
            $image_name = $img[$i]->move($destinationPath,date("Ymdhis").$img[$i]->getClientOriginalName());
            $image_name = date("Ymdhis").$img[$i]->getClientOriginalName();
            $image_number = $i + 1;

            $endid = Instagram::latest()->first();
            $endid = $endid->id;
            $instagram = Instagram::where('id',$endid)->update([

                "image".$image_number.""=>"$image_name"
            ]);

            }
        }

        $message = "ارسال پست با موفقیت انجام شد";
        return view('manager.show-alert',compact('message'));




    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instagram  $instagram
     * @return \Illuminate\Http\Response
     */
    public function show(Instagram $instagram)
    {
        Amarfun();


        $id=$_GET['id'];

        $instagram = Instagram::where('id',"$id")->get();
        // ذخیره تعداد ایندکس ها

        foreach ($instagram as $key) {
            $index = $key->indexs;
        }
        $index++;
        $instagram = Instagram::where('id',"$id")->update([
            "indexs"=>"$index",
        ]);

        $instagram = Instagram::where('id',"$id")->get();
        return view('instagram-post',compact('instagram'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instagram  $instagram
     * @return \Illuminate\Http\Response
     */
    public function edit(Instagram $instagram)
    {
        $instagram_list = Instagram::where('id','>=','0')->orderBy('id', 'DESC')->get();

        return view('manager.instagram-manager.edite-instagram',compact('instagram_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instagram  $instagram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instagram $instagram)
    {
        $save = $_GET['save'];
        $id = $_GET['id'];
        if ($save == 0) {
            $instagram = Instagram ::where('id',"$id")->get();
            return view('manager.instagram-manager.update-instagram',compact('instagram'));
        }
        if ($save == 1) {
            $text = $request['text'];
            $instagram = Instagram::where('id',$id)->update([
                "text"=>"$text"
            ]);


            $img = array(
                $request->file('img1'),
                $request->file('img2'),
                $request->file('img3'),
                $request->file('img4'),
                $request->file('img5'),
                $request->file('img6'),
                $request->file('img7'),
                $request->file('img8'),
                $request->file('img9'),
                $request->file('img10'),
            );



            $constimg = count($img);
            $destinationPath = 'instagram_files/img_instagram';
            for ($i=0; $i < $constimg; $i++) {
                if ($img[$i] != "") {
                    $image_name = $img[$i]->move($destinationPath,date("Ymdhis").$img[$i]->getClientOriginalName());
                    $image_name = date("Ymdhis").$img[$i]->getClientOriginalName();
                    $image_number = $i + 1;

                    $endid = Instagram::latest()->first();
                    $instagram = Instagram::where('id',$id)->update([
                        "image".$image_number.""=>"$image_name"
                    ]);
                }
            }



            $message = "ویرایش با موفقیت انجام شد";
            return view('manager.show-alert',compact('message'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instagram  $instagram
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instagram $instagram)
    {
        $save = $_GET['save'];

        if ($save == 1) {
            $id = $_GET['id'];
            Instagram::where('id',$id)->delete();
            $message = "با موفقیت حذف شد";
            return view('manager.show-alert',compact('message'));

        } else {
            $instagram_list = Instagram::where('id','>=','0')->orderBy('id', 'DESC')->get();
            return view('manager.instagram-manager.delete-list-instagram',compact('instagram_list'));
        }
    }




}
