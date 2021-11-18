<?php

namespace App\Http\Controllers;

use App\Models\Newsletters;
use Illuminate\Http\Request;

class NewslettersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $request->validate([
            'email'=>'bail|required|email',
        ]);
        $email = $request['email'];

        $newsletters = newsletters::where('email',$email)->get();
        foreach ($newsletters as $item) {
            $email_check = $item->email;
        }
        if (isset($email_check)) {
            echo "<script type='text/javascript'>window.location.href='/'</script>";
        }else {
            $newsletters = new Newsletters();
            $newsletters -> email="$email";
            $newsletters->save();
            echo "<script type='text/javascript'>window.location.href='/'</script>";
        }


    }
}
