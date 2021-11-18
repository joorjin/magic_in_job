<?php
use App\Models\Amar;
use Hekmatinasser\Verta\Verta;

    function Amarfun()
    {   $zaman = verta();
        $zaman = $zaman->year.".".$zaman->month.".".$zaman->day;
        $cookie_token = "token";
        if(!isset($_COOKIE[$cookie_token])) {
            $endid = Amar::latest() ->first();
            $endtoken = $endid->token;
            $endtoken++;

            setcookie('token', $endtoken, time()+31536000,"/");
            setcookie('view', 1, time()+31536000);

            $amar = new Amar();
            $amar->token=$endtoken;
            $amar->view=1;
            $amar->created_zamanfa=$zaman;
            $amar->save();
        } 
        else {
            $token = $_COOKIE["token"];
            
            $amar_check = Amar ::all();
            
            foreach ($amar_check as $item) {
                $tokens=$item->token;
                if ($tokens == $token) {
                    $token_check = $item->token;
                    break;
                }
            }
            if (isset($token_check)) {
            $view = $_COOKIE["view"];
            $view++;
            setcookie('view', $view, time()+31536000,"/");

            $amar = Amar :: where('token',$token)->first();
            $amar->view=$view;
            $amar->updated_zamanfa=$zaman;
            $amar->save();
            }
            else {
                $endid = Amar::latest() ->first();
                $endtoken = $endid->token;
                $endtoken++;
    
                setcookie('token', $endtoken, time()+31536000,"/");
                setcookie('view', 1, time()+31536000);
    
                $amar = new Amar();
                $amar->token=$endtoken;
                $amar->view=1;
                $amar->created_zamanfa=$zaman;
                $amar->save();
            }




        }
    }