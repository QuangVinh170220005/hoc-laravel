<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CauthuController extends Controller
{
    function listCT(){
        $query = DB::table('cauthu')->orderBy('id','asc')->get();
        return view('/list_cauthu', compact('query'));
    }

    function addCT(){
        return view('/add_cauthu');
    }
    function store(Request $req){
        DB::table('cauthu')->insert([
            'name' => $req  -> name,
            'age' => $req -> age,
            'national' => $req -> national,
            'position' => $req -> position,
            'salary' => $req -> salary
        ]);
        return redirect('/list_cauthu');
    }


    function editCT($id){
        $query = DB::table('cauthu')->where('id', $id) -> first();
        return view('/edit_cauthu', compact('query'));
    }
    function update(Request $req, $id){
        $query = DB::table('cauthu')-> where('id', $id)
                -> update([
                    'name' => $req  -> name,
                    'age' => $req -> age,
                    'national' => $req -> national,
                    'position' => $req -> position,
                    'salary' => $req -> salary
                ]);
        return redirect('/list_cauthu');
    }

    function deleteCT($id){
        DB::table('cauthu')->where('id', $id)->delete();
        return redirect('/list_cauthu');
    }
}
