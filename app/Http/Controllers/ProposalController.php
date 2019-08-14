<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;
use DB;

class ProposalController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Return view proposal, and all of its data
        $proposal = Proposal::orderBy('created_at', 'desc')->paginate(5);
        return view('proposals.index')->with('proposal', $proposal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Return Form View
        return view('proposals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $this->validate($request, [
            'produk' => 'required',
            'keterangan' => 'required',
            'nominal' => 'required'
        ]);

        //Membuat Nilai Default untuk status proposal ketika pertama kali dibuat
        $status = 'PROSES';
        
        //Simpan ke database
        $proposal = new Proposal;
        $proposal->produk = $request->input('produk');
        $proposal->keterangan = $request->input('keterangan');
        $proposal->nominal = $request->input('nominal');
        $proposal->user_mitra_id = auth()->user()->id;
        $proposal->status = $status;
        $proposal->save();
        
        //redirect ke halaman proposal ketika success membuat proposal
        return redirect('/proposal')->with('success', 'Proposal berhasil dibuat, silakan tunggu notifikasi berikutnya!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Display the individual proposal
        $proposal = Proposal::find($id);
        return view('proposals.show')->with('proposal', $proposal);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Return id proposal untuk di edit
        $proposal = Proposal::find($id);

        //check for correct user
        if(auth()->user()->id !== $proposal-> user_mitra_id){
            return redirect('/proposal')->with('error', 'Akses anda tidak diizinkan');
        }

        //return view edit
        return view('proposals.edit')->with('proposal', $proposal);
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
        //validasi
        $this->validate($request, [
            'produk' => 'required',
            'keterangan' => 'required',
            'nominal' => 'required'
        ]);

        //Simpan ke database
        $proposal = Proposal::find($id);
        //check for correct user
        if(auth()->user()->id !== $proposal-> user_mitra_id){
            return redirect('/proposal')->with('error', 'Akses anda tidak diizinkan');
        }

        $proposal->produk = $request->input('produk');
        $proposal->keterangan = $request->input('keterangan');
        $proposal->nominal = $request->input('nominal');
        $proposal->save();
        
        //redirect ke halaman proposal ketika success membuat proposal
        return redirect('/proposal')->with('success', 'Proposal berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Find Proposal ID
        $proposal = Proposal::find($id);
        //check for correct user
        if(auth()->user()->id !== $proposal-> user_mitra_id){
            return redirect('/proposal')->with('error', 'Akses anda tidak diizinkan');
        }
        //Hapus dari db
        $proposal->delete();
        //redirect setelah berhasil menghapus
        return redirect('/proposal')->with('success', 'Proposal telah dihapus');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setujui($id)
    {
        $statusUpdate = 'DISETUJUI';

        //Simpan ke database
        $proposal = Proposal::find($id);
        $proposal->status = $statusUpdate;
        $proposal->save();
        
        //redirect ke halaman proposal ketika success membuat proposal
        return redirect('/proposal')->with('success', 'Proposal Telah disetujui');
    }
}
