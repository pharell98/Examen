<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Referentiel;
use App\Models\User;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $candidats = User::all();
        $formations = Formation::withCount('users')->get();
        $countHomme = User::where('sexe', 'homme')->count();
        $countFemme = User::where('sexe', 'femme')->count();
        $referentiels = Referentiel::withCount('formations')->get();
        //dd($formations);
        $datas = range(15, 35, 5);
        $tabs_x = [];
        $tabs_y = [];
        for ($i = 0; $i < count($datas) - 1; $i++) {
            $tabs_y[] = ($datas[$i] + 1) . '-' . $datas[$i + 1];

            $tabs_x[] = DB::table('users')
                ->whereBetween('age', [$datas[$i], $datas[$i + 1]])->count();
        }



        $inProgress = $formations->where('status', 0)->count();
        $pending = $formations->where('status', 1)->count();
        
        $types = DB::table('formations')
        ->join('referentiels', 'formations.id', '=', 'referentiels.id')
        ->join('types', 'referentiels.type_id', '=', 'types.id')
        
        ->select('types.type', DB::raw('count(*) as total'))
        ->groupBy('types.type')
        ->get();
        //dd($types);
        return view('admin.dashboard', compact('formations', 'countHomme', 'countFemme', 'referentiels', 'tabs_y', 'tabs_x', 'inProgress', 'pending','candidats','types'));
    }

    public function login()
    {

        return view('admin.loginadmin');
    }

    public function connect(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $admin = User::where('email', $request->input('email'))->first();
        if ($admin) {
            if ($admin->email == 'sambaisidk@groupeisi.com') {
                if (Hash::check($request->input('password'), $admin->password)) {
                    session()->put('admin', $admin);
                    return redirect('admin');
                } else {
                    return back()->with('error', 'Erreur de mots de passe ');
                }
            } else {
                # code...
                return back()->with('error', 'Vous n\'etes pas Admin');
            }
        } else {
            return back()->with('error', 'Ce compte n\'existe pas ');
        }
    }

    public function logout()
    {
        session()->forget('admin');
        return redirect('/loginadmin');
    }
}
