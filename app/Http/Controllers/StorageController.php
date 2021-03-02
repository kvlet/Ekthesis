<?php

namespace App\Http\Controllers;


use Dcblogdev\Dropbox\Facades\Dropbox;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    public function connect(){
        return Dropbox::connect();
    }

    public function disconnect(){
        return Dropbox::disconnect('/settings');
    }

    public function index($path=''){
        $results = Dropbox::files()->listContents($path);
        return view('files.index', compact('results'));
    }

}
