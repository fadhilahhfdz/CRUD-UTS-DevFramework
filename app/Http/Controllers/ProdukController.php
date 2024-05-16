<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    private function pre($arr = [])
    {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', ['produk' => $produk]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['store'] = 'Input';
        $data['produk'] = new Produk();
        $data['action'] = url('produk');
        return view('produk.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produk = new Produk();
        $produk->nama = $request->input('nama');
        $produk->harga = $request->input('harga');
        $rm = $this->rules_messages();
        $validator = Validator::make($request->all(), $rm['rules'], $messages = $rm['messages']);
        if ($validator->fails()) {
            return redirect('produk/create')
                ->withErrors($validator)
                ->withInput();
        }
        $validated = $validator->validate();
        if ($validated) {
            $produk->save();
        }
        return redirect('/produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        return view('produk.destroy', ['produk' => $produk]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        $data['store'] = 'Ubah';
        $data['produk'] = $produk;
        $data['action'] = url('produk' . '/' . $produk->id);
        return view('produk.form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $produk->nama = $request->input('nama');
        $produk->harga = $request->input('harga');
        $rm = $this->rules_messages();
        $validator = Validator::make($request->all(), $rm['rules'], $messages = $rm['messages']);
        if ($validator->fails()) {
            return redirect('produk/'.$produk->id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }
        $validated = $validator->validate();
        if ($validated) {
            $produk->save();
        }
        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Produk $produk)
    {
        $produk->delete();
        $request->session()->flash('pesan','Data telah berhasil dihapus.');
        return redirect('/produk');
    }

    private function rules_messages(){
        $rules = [
            'nama' => 'required | max:50',
            'harga' => 'required | max:50'
        ];
        $messages = [
            'required' => 'Kolom ini harus diisi.',
            'max' => 'Karakter yang diisi melebihi ketentuan.'
        ];
        $data = [
            'rules' => $rules,
            'messages' => $messages
        ];
        return $data;
    }
}