<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Menu as ModelsMenu;

class MenuController extends Controller
{
   public function show()
   {
    return view('info-menu',[
        "menus" =>ModelsMenu::all()
    ]);
   }
}
