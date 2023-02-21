<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Formation;
use App\Models\Referentiel;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CandidatController extends Controller
{
    //
    public function home()
    {

        $formations = Formation::all()->where('status', 1);

        return view('candidat.accueil', ['formations' => $formations]);
    }

    public function accueil()
    {
        $formations = Formation::all()->where('status', 1);
        $referentiels = Referentiel::all()->where('status', 1);
        $types = Type::all();
        return view('candidat.home', ['formations' => $formations, 'referentiels' =>  $referentiels, 'types' => $types]);
    }

    public function candidat()
    {
        return view('candidat.profil');
    }


    public function mesformations($id)
    {
        $user = User::find($id);

        $formations = $user->formations;

        return view('candidat.mesformations', compact('formations'));
    }

    public function update($id)
    {

        $user = User::find($id);
        return view('candidat.modifiercandidat',compact('user'));
    }

    public function user(LoginRequest $request)
    {
        
    }


    public function all($id)
    {
        $referentiel = Referentiel::find($id);
        $formations = Formation::where('status', '=', 1)->where('referentiel_id', '=', $id)->get();
        return view('candidat.allforms', ['formations' => $formations, 'referentiel' =>  $referentiel]);
    }

    public function integrer($candId, $formId)
    {
        $user = User::find($candId);
        
        if ($user->formations->contains($formId)) {
            return redirect()->back()->with('error', 'Vous avez déja integrer cette formation');
        }

        // Ajoutez le rôle à l'utilisateur sans le dupliquer
        $user->formations()->syncWithoutDetaching($formId);

        return redirect()->back()->with('success', 'Formation integrer avec succès');
    }
}
