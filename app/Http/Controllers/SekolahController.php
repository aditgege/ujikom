<?php

namespace App\Http\Controllers;
use App\sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sekolah.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sekolah.form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$this->validate($request, $this->rules());

        sekolah::create($request->all());

        return redirect('sekolah')->with('success', 'Berhasil menambahkan sekolah');
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(sekolah $sekolah)
    {
        return view('sekolah.detail',compact('sekolah',$sekolah));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(sekolah $sekolah)
    {
        return view('sekolah.form', [
            'sekolah' => $sekolah
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sekolah $sekolah)
    {
        $this->validate($request, $this->rules());
        $sekolah->update($request->all());

        return redirect('sekolah')->with('success', 'Berhasil mengubah sekolah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(sekolah $sekolah)
    {
        if ($sekolah) {
            $sekolah->delete();
            return 1;
        }

        return 0;
    }
    public function rules()
    {
        return [
            // 'nama' => 'required',
            // 'slug' => 'required'
        ];
    }
}


