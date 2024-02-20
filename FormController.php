<?php
// Terminal: php artisan make:controller FormController
// Location: app > Http > Controllers

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use app\Models\laporan;
use Illuminate\Http\Request;
use Storage;

class FormController extends Controller
{
    public function submitForm(Request $request) {
        
       $validatedData = $request->validate([
            'kategori' => 'required',
            'name' => 'required',
            'alamat' => 'required',
            'aspirasi' => 'required',
            'keterangan' => 'required',
            'gambar_kejadian' => 'image',
            'status' => 'nullable',
        ]);

        $gambarKejadianPath = $request->file('gambar_kejadian')->store('public/gambar_kejadian');
        $gambarKejadianUrl = Storage::url($gambarKejadianPath);

        DB::table('laporan')->insert([
            'kategori' => $validatedData['kategori'],
            'name' => $validatedData['name'],
            'alamat' => $validatedData['alamat'],
            'aspirasi' => $validatedData['aspirasi'],
            'keterangan' => $validatedData['keterangan'],
            'gambar_kejadian' => $gambarKejadianUrl,
            'status' => $validatedData['status'],
        ]);
        return response()->json(['message' => 'Formulir berhasil terkirim']);
    }
}













// $photoPath = $request->file('gambar_kejadian')->store('public/img');
        // $photoFileName = basename($photoPath);

        // $image = $request->file('gambar_kejadian');
        // $imageName = time() . '_' . $request->user()->id . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('gambar_kejadian'), $imageName);



// if ($request->hasFile('gambar_kejadian')) {
        //     $file = $request->file('gambar_kejadian');
        //     $fileName = 'image' . '.' . $file->getClientOriginalExtension();
        //     $file->move(public_path('uploads/laporan'), $fileName);
        //     $laporan->gambar_kejadian = 'uploads/laporan/' . $fileName;
        // }

        // $laporan = new Laporan([
        //     'kategori' => $request->input('kategori'),
        //     'name' => $request->input('name'),
        //     'alamat' => $request->input('alamat'),
        //     'aspirasi' => $request->input('aspirasi'),
        //     'keterangan' => $request->input('keterangan'),
        //     'gambar_kejadian' => $gambarPath,
        // ]);