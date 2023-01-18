<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Decision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scores = DB::table('scores')->paginate(5);
        return view('mentor.score.index',['scores' => $scores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('mentor.score.create', ['users' => $users]);
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
        $siswa = $request->input('siswa');
        $harian = $request->input('harian');
        $uts = $request->input('uts');
        $uas = $request->input('uas');
        $kehadiran = $request->input('kehadiran');

        DB::table('scores')->insert([
            'siswa' => $siswa,
            'harian' => $harian,
            'uts' => $uts,
            'uas' => $uas,
            'kehadiran' => $kehadiran,
        ]);
        return redirect()->route('mentor.score.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        $scores = DB::table('scores')->paginate(5);

        $decisions = DB::table('decisions')->paginate(5);
        return view('user.nilai', [ 'decisions' => $decisions, 'scores' => $scores]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Score $score)
    {
        $pegawai = DB::table('scores')->where('id')->get();
        return view('mentor.score.edit', compact('score'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Score $score)
    {

        // $this->validate($request, [
        //     'siswa' => 'required',
        //     'harian' => 'required',
        //     'uts' => 'required',
        //     'uas' => 'required',
        //     'kehadiran' => 'required',
        // ]);

        DB::table('scores')->insert([
            'siswa' => $request->siswa,
            'harian' =>$request->harian,
            'uts' => $request->uts,
            'uas' => $request->uas,
            'kehadiran' => $request->kehadiran,
        ]);
        // $leaderboards = Score::find($id)->update($request->all());
        // return redirect()->route('mentor.score.index')->with('success','Data berhasil diupdate');


        // $score = Score::findOrFail($score->id);
        // $request->validate([
        //     'siswa' => 'required',
        //     'harian' => 'required',
        // ]);

        // $score->update([
        //     'siswa' => $request->siswa,
        //     'harian' =>$request->harian,
        //     'uts' => $request->uts,
        //     'uas' => $request->uas,
        //     'kehadiran' => $request->kehadiran,
        // ]);
        // $score->update($request->all());

        return redirect()->route('mentor.score.index')->with('success','Data berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $score = Score::findOrFail($id);

        $score ->delete();
        return redirect()->route('mentor.score.index')->with('success','Data berhasil diupdate');
    }
}
