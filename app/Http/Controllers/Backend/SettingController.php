<?php

namespace App\Http\Controllers\Backend;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index(){

        $all = Setting::distinct()->pluck('isType');
        //dd($all);
        return view('backend.settings.index',compact('all'));
    }
}
