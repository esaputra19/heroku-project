<?php

namespace App\Http\Controllers;
use App\Models\Learning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MentorModel;

class LearningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $learnings = Learning::all();
        return view ('admin.adminlearning', compact('learnings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'hari' => 'required',
        //     'link' => 'required',
        // ]);

        DB::table('learnings')->insert([
            'hari' => $request->hari,
            'mentor' =>$request->mentor,
            'judul' => $request->judul,
            'materi' => $request->materi,
            'occupation' => $request->occupation,
            'link' => $request->link,
        ]);


        return redirect()->route('learning')->with('success','Data Berhasil dibuat');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $learnings = Learning::all();
        return view('user.learning',compact('learnings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Learning $learnings)
    {

        return view('admin.edit',compact('learnings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Learning $learnings)
    {
        $learnings = Learning::findOrFail($learnings->id);
        $request->validate([
            'hari' => 'required',
            'link' => 'required',
        ]);

        $learnings->update([
             'hari' => $request->hari,
            'mentor' =>$request->mentor,
            'judul' => $request->judul,
            'materi' => $request->materi,
            'occupation' => $request->occupation,
            'link' => $request->link,
        ]);
        //$learnings->update($request->all());

        return redirect()->route('learning')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       $learnings = Learning::findOrFail($id);
       $learnings->delete();
       //DB::table('learnings')->where('id',$id)->delete();

       return redirect()->route('learning')
                       ->with('success','Data Berhasil Dihapus');
    }
}
