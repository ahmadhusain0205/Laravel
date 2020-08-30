<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Data_buku;
use Symfony\Component\VarDumper\Cloner\Data;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $book = DB::table('data_buku')->get();
        $book = Data_buku::all();
        return view('Book', ['book' => $book]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // cara create ke 1
        $book = new data_buku;
        $book->judul = $request->judul;
        $book->pengarang = $request->pengarang;
        $book->penerbit = $request->penerbit;
        $book->tahun = $request->tahun;

        // membuat validation
        $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required'
        ], [
            'judul.required' => 'Judul harus diisi',
            'pengarang.required' => 'Pengarang harus diisi',
            'penerbit.required' => 'Penerbit harus diisi',
            'tahun.required' => 'Tahun harus diisi'
        ]);

        $book->save();

        // cara create ke 2, lanjutkan stepnya ke model 
        // Data_buku::create([
        //     'judul' => $request->judul,
        //     'pengarang' => $request->pengarang,
        //     'penerbit' => $request->penerbit,
        //     'tahun' => $request->tahun
        // ]);

        // cara create ke 3 jika sudah menentukan fillable di model
        // Data_buku::create($request->all());

        return redirect('/Book')->with('pesan', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
