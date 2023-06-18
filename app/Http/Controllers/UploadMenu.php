<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu as ModelsMenu;
use App\Models\Kntin;


class UploadMenu extends Controller
{
    public function upload(){ 
        $kntins = Kntin::all();
        return view('upload-menu', compact('kntins'));
        $menu = ModelsMenu::get();
        return view('upload-menu', ['menus' =>$menu]); 
    }

    public function proses_upload(Request $request){

        $this->validate($request, [
            'kantinID' => 'required',
            'namaMenu' => 'required',
            'harga'=>'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'tag',
        ]);

        //menyimpan data file yang diupload ke variable $image
        $file = $request->file('file');
        
        $nama_file = time()."_".$file->getClientOriginalName();

            //isi dengan nama folfer tempat kemana file diupload
        $tujuan_upload = 'data_file';
            //upload file
        $file->move($tujuan_upload, $nama_file);

        ModelsMenu::create(
            [
                'kantinID' => $request -> kantinID,
                'namaMenu' => $request->namaMenu,
                'file' => $nama_file,
                'harga' => $request->harga,
                'tag' => $request->tag,
            ]);
        return redirect()->back();
    }

}
