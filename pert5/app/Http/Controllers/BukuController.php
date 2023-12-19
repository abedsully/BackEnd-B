<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $bukus = Buku::all();
        $bukus = $bukus->reverse();

        return view('dashboard', compact('bukus'));
    }
    
    public function create()
    {
        return view('addBuku');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'stocks' => 'required',
            'date' => 'required',
        ]);

        $filename = NULL;

        if($request->file('image') != NULL) {

            // Misalnya kita punya file image bernama logo.png, bearti disini .png akan disetor sebagai variabel extension
            $extension = $request->file('image')->getClientOriginalExtension();

            // Misalnya kita punya file image bernama logo.png, bearti disini logo akan disetor sebagai variabel originalName
            $originalName = pathinfo($request->file('image')->getClientOriginalName(), PATHINFO_FILENAME);

            // Ini nama file kita jadi logo_png
            $filename = $originalName. '_' . $extension;

            $request->file('image')->storeAs('/public/images/'. $filename);
        }

        Buku::create([
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
            'stocks' => $request->stocks,
            'date' => $request->date,
            'image' => $filename
        ]);

        return redirect('/dashboard')->with('success', 'Book has been created successfully');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBukuRequest $request, Buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        //
    }
}
