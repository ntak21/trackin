<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kntin as ModelsKntin;

class UploadController extends Controller
{
    public function upload(){
        $kntin = ModelsKntin::get();
        return view('upload', ['kntins' =>$kntin]);
    }

    public function proses_upload(Request $request){
        $this->validate($request, [
            'namaKantin' => 'required',
            'alamat'=> 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'buka' => 'required',
        ]);

        //menyimpan data file yang diupload ke variable $image
        $file = $request->file('file');
        
        $nama_file = time()."_".$file->getClientOriginalName();

            //isi dengan nama folfer tempat kemana file diupload
        $tujuan_upload = 'data_file';
            //upload file
        $file->move($tujuan_upload, $nama_file);

        ModelsKntin::create(
            [
                'namaKantin'=>$request->namaKantin,
                'file' => $nama_file,
                'alamat'=> $request ->alamat,
                'buka' => $request ->buka,
            ]);
        return redirect() ->back();
    }

}
