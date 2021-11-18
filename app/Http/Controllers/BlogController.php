<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Amar;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;

class BlogController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        Amarfun();


        if (isset($_GET['tag'])) {
            $tag = $_GET['tag'];
            $tag = str_replace("-", " ", $tag);
            $blog = Blog::where('tag',"$tag")->orderBy('id', 'DESC')->simplePaginate(9);
            return view('tag',compact('blog'));
        }
        else {
            $blog = Blog::where('id','>=','0')->orderBy('id', 'DESC')->simplePaginate(9);
            return view('blog-list',compact('blog'));
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }


    public function store(Request $request)
    {
        $request->validate([
            'title'=>'bail|required',
            'mytextarea' => 'bail|required|',
            'image' => 'bail|required| image',
            'tag'=> 'bail|required|'
        ]);

        $title=$request['title'];
        $text=$request['mytextarea'];
        $tag=$request['tag'];
        $image = $request->file('image');
        // uploadd
        $destinationPath = 'blog_files/img_blog';
        $image_name = $image->move($destinationPath,date("Ymdhis").$image->getClientOriginalName());


        $image_name = date("Ymdhis").$image->getClientOriginalName();

        // foreach(session('user') as $user){
        //     $user_id = $user->id ;
        // }
        $news = new Blog();
        $news -> title="$title";
        $news ->text ="$text";
        $news ->tag = "$tag";
        $news ->image ="$image_name";
        // $news -> user = $user_id;
        $news->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        Amarfun();


        $id=$_GET['id'];

        $blog = Blog::where('id',"$id")->get();
        // ذخیره تعداد ایندکس ها

        foreach ($blog as $key) {
            $index = $key->indexs;
        }
        $index++;
        $blog = Blog::where('id',$id)->update([
            "indexs"=>"$index",
        ]);

        $blog = Blog::where('id',"$id")->get();
        return view('blog',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $blog_list = Blog::where('id','>=','0')->orderBy('id', 'DESC')->get();

        return view('manager.blog-manager.edite-blog',compact('blog_list'));
    }



    public function update(Request $request, Blog $blog)
    {
        $save = $_GET['save'];
        $id = $_GET['id'];
        if ($save == 0) {
            $blog = Blog ::where('id',"$id")->get();
            return view('manager.blog-manager.update-blog',compact('blog'));
        }
        if ($save == 1) {
            $title = $_POST['title'];
            $text = $_POST['mytextarea'];
            $blog = Blog::where('id',$id)->update([
                "title"=>"$title",
                "text"=>"$text"
            ]);
            $message = "ویرایش با موفقیت انجام شد";
            return view('manager.show-alert',compact('message'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $save = $_GET['save'];

        if ($save == 1) {
            $id = $_GET['id'];
            Blog::where('id',$id)->delete();
            $message = "با موفقیت حذف شد";
            return view('manager.show-alert',compact('message'));

        } else {
            $blog_list = Blog::where('id','>=','0')->orderBy('id', 'DESC')->get();
            return view('manager.blog-manager.delete-list-blog',compact('blog_list'));
        }
    }
}
