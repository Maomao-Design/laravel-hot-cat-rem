<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Setting;


class DownController extends Controller
{
    //
    public function index(){

        return view('down.index');
    }

    public function file(){
        $path = Setting::where('key','PDF')->first();
        $pathToFile = 'storage/'.$path->value;
        return response()->download($pathToFile);
    }
}
