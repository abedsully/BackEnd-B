<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    // Menunjukkan page dashboard
    public function show(Buku $buku)
    {
        $bukus = Buku::all();
        $bukus = $bukus->reverse();

        return view('dashboard', compact('bukus'));
    }

    // Menunjukkan page untuk menambah buku
    public function create()
    {
        return view('addBuku');
    }

    // Proses penambahan buku ke dalam database
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'stocks' => 'required|numeric',
            'date' => 'required'
        ]);

        $filename = NULL;

        if($request->file('image') != NULL) {
            // Misalnya user memasukkan image bernama buku.jpeg, variabel extension akan menyimpan value .jpeg
            $extension = $request->file('image')->getClientOriginalExtension();

            // Misalnya user memasukkan image bernama buku.jpeg, variabel originalName akan menyimpan value buku
            $originalName = pathinfo($request->file('image')->getClientOriginalName(), PATHINFO_FILENAME);

            // Filename akan bernama buku_jpeg
            $filename = $originalName. '_'. $extension;

            $request->file('image')->storeAs('/public/images', $filename);
        }

        Buku::create([
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
            'stocks' => $request->stocks,
            'date' => $request->date,
            'image' => $filename
        ]);

        return redirect('/dashboard')->with('success', "Book created successfully!");
    }

    public function showDetail($id){
        $buku = Buku::find($id);

        return view('detailBook', compact('buku'));
    }

    // Untuk return view editBuku
    public function edit($id)
    {
        $buku = Buku::findorFail($id);

        return view('editBuku', compact('buku'));
    }

    // Ini untuk proses update buku
    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'stocks' => 'required|numeric',
            'date' => 'required'
        ]);

        $filename = NULL;

        if($request->file('image') != NULL) {
            // Misalnya user memasukkan image bernama buku.jpeg, variabel extension akan menyimpan value .jpeg
            $extension = $request->file('image')->getClientOriginalExtension();

            // Misalnya user memasukkan image bernama buku.jpeg, variabel originalName akan menyimpan value buku
            $originalName = pathinfo($request->file('image')->getClientOriginalName(), PATHINFO_FILENAME);

            // Filename akan bernama buku_jpeg
            $filename = $originalName. '_'. $extension;

            $request->file('image')->storeAs('/public/images', $filename);
        }


        Buku::findorFail($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
            'stocks' => $request->stocks,
            'date' => $request->date,
            'image' => $filename
        ]);

        return redirect('/dashboard')->with('success', "Book updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Buku::destroy($id);
        return redirect('/dashboard')->with('deleted', "Book deleted successfully!");
    }
}
