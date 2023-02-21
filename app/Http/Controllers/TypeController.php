<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeRequest;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    //
    public function showType()
    {
        return view('admin.ajoutertype');
    }

    public function sauvertype(Type $type, TypeRequest $request)
    {
        
        Type::create([
            'type' => $request->libelleType
        ]);

        return redirect()->back()->with('success', $request->libelleType . ' ajouter avec success');
    }


    public function tabtype()
    {
        $types = Type::all();
        return view('admin.types',['types'=>$types]);
    }
}
