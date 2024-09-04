<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SacControllers extends Controller
{
    public function sac(){
        return View('intranet.sac');
    }
}
