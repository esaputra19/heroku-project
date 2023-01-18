<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\This;
use App\Models\User;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginmentor(){
        return view('admin.mentor.loginmentor');
    }

    public function index()
    {
        $mentors = Mentor::all();
        return view ('admin.mentor.mentorindex', compact('mentors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mentor.mentorcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::table('mentors')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'umur' => $request->umur,
            'graduate' => $request->graduate,
            'corporate' => $request->corporate,
            'position' => $request->position,

        ]);
        return redirect()->route('mentorindex')->with('success','Data berhasil diupdate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function show(Mentor $mentor)
    {
        $mentors = Mentor::all();
        return view('user.alumni', compact('mentors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function edit(Mentor $mentors)
    {
        $mentors = Mentor::all();
        return view('admin.mentor.mentoredit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mentor $mentors)
    {
        // $mentors->update($request->all());
        // $mentors = Mentor::all();
    $mentors = Mentor::findOrFail($mentors->id);
       $mentors->validate([
            'nama' => 'required',
            'email' => 'required',
        ]);

        $mentors->update([
        'nama' => $request->nama,
        'email' => $request->email,
        'umur' => $request->umur,
        'graduate' => $request->graduate,
        'corporation' => $request->corporation,
        'position' => $request->position,]);
        // $mentors->update($request->all());
        // $mentors = Mentor::find($id)->update($request->all());

        return redirect()->route('mentorindex')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mentor = Mentor::findOrFail($id);
        //Storage::disk('local')->delete('public/data_file/'.$leaderboards->image);
        $mentor ->delete();
        return redirect()->route('mentorindex')->with('success','Data berhasil diupdate');
    }

    public function inputnilai()
    {
        // return view('inputnilai');
    }
}
