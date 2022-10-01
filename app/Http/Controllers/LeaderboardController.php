<?php

namespace App\Http\Controllers;

use App\Models\Leaderboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class LeaderboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaderboards = Leaderboard::all();
        return view('admin.leaderboard.index', compact('leaderboards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.leaderboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $leaderboards = Leaderboard::findOrFail($leaderboards->id);
        // $this->validate($request, [
        //     'nama' => 'required',
        //     'occupation' =>'required',
        //     'image' =>'required|image|mimes:jpg,png,jpeg',
        //     'email' => 'required',
        //     'pembimbing' => 'required',

        //  ]);
        //  if ($request->hashFile('file')) {
        //     $request->validate([
        //         'image' => 'mimes:jpg,png,jpeg'
        //     ]);
        //     $request->file->store('leaderboards','public');
        //     $leaderboards = new Leaderboard([
        //     'nama' => $request->nama,
        //     'image' => $request->file->hashName(),
        //     'occupation' => $request->occupation,
        //     'email' => $request->email,
        //     'pembimbing' => $request->pembimbing,
        //     ]);
        //     $leaderboards->save();
        //  }

        DB::table('leaderboards')->insert([
            'nama' => $request->nama,
            'occupation' => $request->occupation,
            'email' => $request->email,
            'pembimbing' => $request->pembimbing,
        ]);
        return redirect()->route('leaderboard.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leaderboard  $leaderboard
     * @return \Illuminate\Http\Response
     */
    public function show(Leaderboard $leaderboard)
    {
        $leaderboards = Leaderboard::all();
        return view('leaderboard', compact('leaderboards'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leaderboard  $leaderboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Leaderboard $leaderboards)
    {


        return view('admin.leaderboard.edit',compact('leaderboards'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leaderboard  $leaderboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'occupation' => 'required',
            'email' => 'required',
            'pembimbing' => 'required',
        ]);
        $leaderboards = Leaderboard::find($id)->update($request->all());
        return redirect()->route('leaderboard.index')->with('success','Data berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leaderboard  $leaderboard
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $leaderboards = Leaderboard::findOrFail($id);
        Storage::disk('local')->delete('public/data_file/'.$leaderboards->image);
        $leaderboards ->delete();
        return redirect()->route('leaderboard.index')->with('success','Data berhasil diupdate');
    }
}
