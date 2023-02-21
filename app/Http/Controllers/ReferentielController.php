<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReferentielRequest;
use App\Models\Referentiel;
use App\Models\Type;
use Illuminate\Http\Request;
use League\CommonMark\Reference\Reference;

class ReferentielController extends Controller
{
    //
    public function showRef()
    {
        $types = Type::all();
        return view('admin.ajoutreferentiel', ['types' => $types]);
    }

    public function sauverreferentiel(Referentiel $ref, ReferentielRequest $refR)
    {

        Referentiel::create([
            'libelle' => $refR->libelle_ref,
            'type_id' => $refR->type,
            'status' => 0
        ]);

        return redirect()->back()->with('success', $refR->libelle_ref . ' ajouter avec success');
    }

    public function tabRef()
    {
        $referentiels = Referentiel::with('type')->get();
        return view('admin.referentiels', ['referentiels' => $referentiels]);
    }

    public function editSelect($id)
    {
        $types = Type::all();
        $referentiel = Referentiel::find($id);
        return view('admin.edit_referentiel', ['referentiel' => $referentiel, 'types' => $types]);
    }

    public function editer(ReferentielRequest $request)
    {
        $ref = Referentiel::find($request->id);
        $ref->libelle = $request->libelle_ref;
        $ref->type_id = $request->type;
        $ref->update();

        return redirect('/referentiels')->with('success', ' Modifier avec success');
    }
    public function activer_ref($id)
    {
        $ref = Referentiel::find($id);
        $ref->status = 1;
        $ref->update();

        return redirect()->back()->with('success', $ref->libelle.' activer  avec success');
    }
}
