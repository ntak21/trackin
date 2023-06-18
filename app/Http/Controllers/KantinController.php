<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Kntin;
use App\Models\Kntin as ModelsKntin;

class KantinController extends Controller
{
    
    public function show()
    {
     return view('auth.home',[
         "kntins" =>ModelsKntin::all()
     ]);
    }

   public function review($id){
        $kntins = Kntin::find($id);
        return view('');
   }

   public function showkantin()
   {
    return view('home-administrator',[
        "kntins" =>ModelsKntin::all()
    ]);
   }

   public function filter_sukai()
   {
    return view('filter-anda-sukai',[
        "kntins" =>ModelsKntin::all()
    ]);
   }

   public function filter_rekomendasi()
   {
    return view('filter-rekomendasi',[
        "kntins" =>ModelsKntin::all()
    ]);
   }



}
