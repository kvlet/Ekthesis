<?php

namespace App\Http\Controllers;

use App\Pragmatognomosini;
use Illuminate\Http\Request;
use App\Http\Requests\PragmatognomosiniRequest;

class PragmatognomosinesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('pragmatognomosines.create');
    }

    public function store(PragmatognomosiniRequest $request)
    {
        $pragmatognomosini = new Pragmatognomosini();
        $pragmatognomosini->grafeio = $request->grafeio;
        $pragmatognomosini->save();

        return redirect('pragmatognomosines/'.$pragmatognomosini->id);
    }

    public function edit($id)
    {
        $pragmatognomosini = Pragmatognomosini::find($id);

        return view('pragmatognomosines.edit', compact('pragmatognomosini'));
    }

    public function update(Request $request, $id) {

        $pragmatognomosini = Pragmatognomosini::find($id);

        $pragmatognomosini->grafeio = $request->grafeio;
        $pragmatognomosini->update();

        return redirect('pragmatognomosines/'.$pragmatognomosini->id);
    }
}
