<?php

namespace App\Http\Controllers;

use App\Models\Shetabit_visit;
use App\Models\Amar;
use App\Models\User;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
use Carbon\Carbon;

class UserController extends Controller
{
    public function dashbord(Request $request)
    {
        $amar = Amar::all();
        $all = $amar;
        $view=0;
        foreach ($amar as $item) {
            $view += $item->view;
            $token = $item->token;
            $zaman = $item->created_zamanfa;
        }


        $amar_date= Amar ::get()->unique('created_zamanfa');
        $j = 0;
        $created_amar_array  = [];
        $token_day=[];
        $token_date=[];
        $view_day_arry=[];
        foreach ($amar_date as $item) {
            $j++;
            $created_amar_array[] = $item->created_zamanfa;
        }
        for ($i=0 ;$i < $j ; $i++) { 
            $x = 0;
            $view_day=0;
            $tekrar=Amar::where('created_zamanfa',$created_amar_array[$i])->get();
            foreach ($tekrar as $item) {
                $view_day += $item->view;
                $x++;
                $date = $item->created_zamanfa;
            }
            $token_date[]=$date;
            $token_day[]=$x;
            $view_day_arry[] = $view_day;
        }





        $amar = array($all,$token,$view,$token_date,$view_day_arry,$token_day);
        return view('manager.manager',compact('amar'));
    }

    public function index()
    {
        //
    }

    public function create(Request $request)
    {

        
        $request->validate([
            'name'=>'required',
            'email' => 'bail|required|email|unique:users,email',
            'pass' => 'required'
        ]);


        $user=new User();
        $user->active=1;
        $user->name="$_POST[name]";
        $user->email="$_POST[email]";
        $user->pass="$_POST[pass]";
        $user->save();
        $done = 1;
        return view('manager.user.log-in',compact('done'));
        
    }

    public function check(Request $request)
    {   

        $request->validate([
            'email' => 'bail|required|email',
            'pass' => 'required'
        ]);

        $user = User::where('email',$request->email)->get();
        foreach ($user as $item) {
            $item->email;

        }
        if (isset($item)) {
            session()->put('user', $user);

            foreach ($user as $item) {

                if ($item->pass == $request->pass) {
                    $active = User::where('active','1')->get();
                    session()->put('active', $active);
                    echo "<script type='text/javascript'>window.location.href='manager'</script>";

                }else{
                    $mass_pass = 'پسورد اشتباه است';
                    
                    return view('manager.user.log-in',compact('mass_pass'));
                }
            }
        }else{
            $mass_em = 'ایمیل وجود ندارد ابتدا ثبت نام کنید';
        
            return view('manager.user.log-in',compact('mass_em'));
        }






        
    }
    public function store()
    {
        
    }

    public function show($id)
    {
        //
    }

    public function edit(Request $request)
    {
        $image = $request->file('image');
        $destinationPath = 'img_admins';
        $image_name = $image->move($destinationPath,date("Ymdhis").$image->getClientOriginalName());

        
        $image_name = date("Ymdhis").$image->getClientOriginalName();

        $user = User ::where('id',$request->id)->first();
        $user->image=$image_name;
        $user->save();

        $user = User::where('id',$request->id)->get();
        session()->put('user', $user);
        return view('manager.profile');
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }

    public function out(){
        session()->put('user',null);
        $mass_em = "با موفقیت از حساب کاربری خود خارج  شدید ";
        return view('manager.user.log-in',compact('mass_em'));
    }
    public function okuser()
    {
        
    }

    public function blockuser()
    {
        //
    }
}


