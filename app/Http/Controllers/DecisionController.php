<?php

namespace App\Http\Controllers;

use App\Models\Decision;
use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DecisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $decisions = DB::table('decisions')->paginate(5);
        $scores = Score::all();
        return view('mentor.decision.decision', ['decisions' => $decisions, 'scores' => $scores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $scores = DB::table('scores')->where('siswa')->first();
        return view('mentor.decision.createdecision', compact('users', 'scores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::pluck('id', 'name');
        Score::all()->first();
        $name = $request->input('name');
        $operasi = $request->input('operasi');
        $bil_pertama = $request->input('logic');
        $bil_kedua = $request->input('analyst');
        $bil_ketiga = $request->input('preasure');
        $bil_keempat = $request->input('programming');
        $bil_kelima = $request->input('mathematic');
        $job = $request->input('job');
        $waktu_selesai = 0;
        $waktu_perexam = 60 * 5; // total jumlah semua waktu exam, degnan maximal per soal 6 menit(kecepatan mengerjakan soal)
        $result = 0;




        if ($operasi == 'semut'){
           $technical =  $bil_pertama + $bil_kedua + $bil_ketiga + $bil_keempat + $bil_kelima;

            $result = $technical / 5;


        }else{
            $result=0;
        }

        if($result >= 80)
        {
            $waktu_selesai = $technical / $waktu_perexam;
            $total_waktu = 6 * 1.5; // total waktu jumlah belajar perhari (jam)
            $jalur = 'B';
        }elseif($result >= 60)
        {
            $waktu_selesai = $technical / $waktu_perexam;
            $total_waktu = 8 * 2; // total waktu jumlah belajar perhari (jam)
            $jalur = 'A';
        }else
        {
            $waktu_selesai = $technical / $waktu_perexam;
            $total_waktu = 10 * 2.5; // total waktu jumlah belajar perhari (jam)
            $jalur = 'C';
        }

        DB::table('decisions')->insert([
            'name' => $name,
            'logic' => $bil_pertama,
            'analyst' => $bil_kedua,
            'preasure' => $bil_ketiga,
            'programming' => $bil_keempat,
            'mathematic' => $bil_kelima,
            'jalur' => $jalur,
            'job' => $job,
            'waktu' => $waktu_selesai,
            'total' => $total_waktu,


        ]);
        return redirect()->route('mentor.decision');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Decision  $decision
     * @return \Illuminate\Http\Response
     */
    public function show(Decision $decision)
    {

        // $decisions = DB::table('decisions')->paginate(5);
        // return view('user.nilai', ['decisions' => $decisions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Decision  $decision
     * @return \Illuminate\Http\Response
     */
    public function edit(Decision $decision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Decision  $decision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Decision $decision)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Decision  $decision
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $decisions = Decision::where('id',$id)->delete();
        //Storage::disk('local')->delete('public/data_file/'.$leaderboards->image);

        return redirect()->route('mentor.decision')->with('success','Data berhasil diupdate');
    }
}
