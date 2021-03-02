<?php

namespace App\Http\Controllers;

use Dcblogdev\Dropbox\Facades\Dropbox;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $isConnected = Dropbox::isConnected();

        return view('settings.index', compact('isConnected'));
    }

}
