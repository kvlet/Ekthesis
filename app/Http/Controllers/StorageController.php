<?php

namespace App\Http\Controllers;


use App\Foto;
use App\Oxima;
use App\Person;
use App\Pragmatognomosini;
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

    public function index($path=' '){

        $results = Dropbox::files()->listContents($path);
//        dd($results);
        return view('files.index', compact('results'));
    }

    // manage foto ekthesis
    public function create_foto_ekth($id_ekthesis)
    {
        $test =
        $pathontes = Person::where([['Mark_del', 'Όχι'], ['id_person', '>', '1']])->get();
        $oximata_pathon = Oxima::where([['Mark_del', 'Όχι'], ['id_oximata', '>', '1']])->get();
        return view('pragmatognomosines.create_foto_ekth', compact(['pathontes', 'id_ekthesis', 'oximata_pathon']));
    }

    public function edit_foto_ekth($id_ekthesis, $id_foto)
    {

        $fotos = Foto::where([['id_ekthesis', $id_ekthesis], ['id_foto', $id_foto]])->first();
        $pathontes = Person::where([['Mark_del', 'Όχι'], ['id_person', '>', '1']])->get();
        $oximata_pathon = Oxima::where([['Mark_del', 'Όχι'], ['id_oximata', '>', '1']])->get();

        return view('pragmatognomosines.edit_foto_ekth', compact([
            'id_foto',
            'id_ekthesis',
            'fotos',
            'pathontes',
            'oximata_pathon',
        ]));
    }

    public function store_foto_ekth(Request $request)
    {
        $pragmatognomosini = Pragmatognomosini::findOrFail($request->id_ekthesis);
        $oximata_pathon = Oxima::where([['id_oximata', $pragmatognomosini->id_oximatos_pathon]])->first();
//        $fotos = Foto::where([['id_ekthesis',$request->id_ekthesis],['id_foto',$request->id_foto]])->first();
        // calculate file path
        $request->path = $pragmatognomosini->pragm_path();
        // end calculate file path
        if ($request->print_group == null) {
            $request->print_group = 1;
        }


        $fotos = new Foto();
        $fotos->id_ekthesis = $request->id_ekthesis;
        $fotos->id_foto = $request->id_foto;
        $fotos->print_group = $request->print_group;
        $fotos->id_oximata = $request->id_oximata;
        $fotos->id_person = $request->id_person;
//        $fotos->path = $request->path;
//        $fotos->file_name = $request->file_name;
        $fotos->notes = $request->notes;
        $fotos->save();
//        $expen_partner = ExpenEkthPartner::where([['id_ekthesis',$request->id_ekthesis],['id_expenses',$request->id_expenses],['id_users',$request->id_users]])->update($request->except(['_token']));

        return redirect('pragmatognomosines/' . $request->id_ekthesis);
    }

    public function update_foto_ekth(Request $request)
    {
        $fotos = Foto::where([['id_ekthesis', $request->id_ekthesis], ['id_foto', $request->id_foto]])->first();


        $fotos->id_ekthesis = $request->id_ekthesis;
        $fotos->id_foto = $request->id_foto;
        $fotos->print_group = $request->print_group;
        $fotos->id_oximata = $request->id_oximata;
        $fotos->id_person = $request->id_person;
        $fotos->path = $request->path;
        $fotos->file_name = $request->file_name;
        $fotos->notes = $request->notes;
        $fotos->save();
//        $expen_partner = ExpenEkthPartner::where([['id_ekthesis',$request->id_ekthesis],['id_expenses',$request->id_expenses],['id_users',$request->id_users]])->update($request->except(['_token']));

        return redirect('pragmatognomosines/' . $request->id_ekthesis);
    }

    public function delete_foto_ekth($id_ekthesis, $id_foto)
    {

        $fotos = Foto::where([['id_ekthesis', $id_ekthesis], ['id_foto', $id_foto]])->first();
        $pathontes = Person::where([['Mark_del', 'Όχι'], ['id_person', '>', '1']])->get();
        $oximata_pathon = Oxima::where([['Mark_del', 'Όχι'], ['id_oximata', '>', '1']])->get();

        return view('pragmatognomosines.delete_foto_ekth', compact([
            'id_foto',
            'id_ekthesis',
            'fotos',
            'pathontes',
            'oximata_pathon',
        ]));
    }

    public function destroy_foto_ekth(Request $request)
    {

        $fotos = Foto::where([['id_ekthesis', $request->id_ekthesis], ['id_foto', $request->id_foto]])->delete($request->except(['_token']));

        return redirect('pragmatognomosines/' . $request->id_ekthesis);
    }
    // end manage foto ekthesis
}
