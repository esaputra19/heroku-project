<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenentuanController extends Controller
{
    public function penentuan(Request $request){
        $operasi = $request->input('operasi');
        $bil_pertama = $request->input('logic');
        $bil_kedua = $request->input('analyst');
        $bil_ketiga = $request->input('preasure');
        $bil_keempat = $request->input('programming');
        $bil_kelima = $request->input('mathematic');
        $result = 0;

        if ($operasi == 'semut'){
           $technical =  $bil_pertama * $bil_kedua / 5;
           $troubleshoot = $technical + $bil_kelima * 4;
           $critical =  $bil_ketiga + $bil_keempat;
            $result = $technical + $troubleshoot + $critical / 2;

        }else{
            $result=0;
        }
        return redirect('user.penentuan')->with('info', 'Hasilnya adalah' .$result);
    }}
