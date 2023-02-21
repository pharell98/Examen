<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormationRequest;
use App\Models\Formation;
use App\Models\Referentiel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormationController extends Controller
{
    //
    public function showForm(){
        $referentiels = Referentiel::all()->where('status', '=', 1);
        return view('admin.ajouterformation',['referentiels'=>$referentiels]);
    }

    public function sauverformation(FormationRequest $request){
       if($request->hasFile('Form_image')){
            $fileNamaExt= $request->file('Form_image')->getClientOriginalName();
            $fileNAme=pathinfo($fileNamaExt,PATHINFO_FILENAME);
            $extension = $request -> file('Form_image')->getClientOriginalExtension();
            $fileNameStore = $fileNAme.'_'.time().'.'.$extension;
            $path = $request->file('Form_image')->storeAs('public/formation_images',$fileNameStore);

       }else{
            $fileNameStore = 'NoImage.jpg';
       }

       Formation::create([
        'libelle' => $request->nom_form,
        'dure' => $request->dure,
        'description' => $request->description,
        'date' => $request->dateD,
        'referentiel_id' => $request->referentiel,
        'form_image' => $fileNameStore,
        'status' => 0
       ]);

       return redirect()->back()->with('success', $request->nom_form . ' ajouter avec success');
    }
    
    public function tabForm(){
        $formations = Formation::with('referentiel')->get();
        return view('admin.formations',['formations'=> $formations]);
    }

    public function editSelect($id)
    {
        $referentiels = Referentiel::all()->where('status', '=', 1);
        $formation = Formation::find($id);
        return view('admin.edit_formation', ['formation' => $formation, 'referentiels' => $referentiels]);
    }

    public function editer(FormationRequest $request)
    {
        if($request->hasFile('Form_image')){
            $fileNamaExt= $request->file('Form_image')->getClientOriginalName();
            $fileNAme=pathinfo($fileNamaExt,PATHINFO_FILENAME);
            $extension = $request -> file('Form_image')->getClientOriginalExtension();
            $fileNameStore = $fileNAme.'_'.time().'.'.$extension;
            $path = $request->file('Form_image')->storeAs('public/formation_images',$fileNameStore);

       }

       

        $form = Formation::find($request->id);
        $form->libelle = $request->nom_form;
        $form->dure = $request->dure;
        $form->description = $request->description;
        $form->date = $request->dateD;
        $form->referentiel_id = $request->referentiel;
       
        if($form->form_image != 'NoImage.jpg'){
            Storage::delete('public/formation_images/'.$form->Form_image);
        }
        $form->form_image = 'NoImage.jpg';
        $form->update();

        return redirect('/formations')->with('success','Modifier avec success');
    }

  
    public function activer_form($id)
    {
        $form = Formation::find($id);
        $form->status = 1;
        $form->update();

        return redirect()->back()->with('success', $form->libelle.' activer  avec success');
    }
}
