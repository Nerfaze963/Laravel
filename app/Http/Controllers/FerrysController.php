<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\FerryRequest;
use App\Models\{Ferrys,Equipement};


class FerrysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug =null):View 
    {
   
        $ferrys = Ferrys::all();
        return view('index', compact('ferrys','slug'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipements = Equipement::all();
        
        return view('create', compact ('equipements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FerryRequest $ferryRequest): RedirectResponse
    {
        $ferry = new Ferrys();
        $ferry->nom =$ferryRequest->input('nom');
        $ferry->longueur =$ferryRequest->input('longueur');
        $ferry->largeur =$ferryRequest->input('largeur');    
        $ferry->vitesse =$ferryRequest->input('vitesse');
        $ferry->photo  =$ferryRequest->input('photo');  

       

        if($ferryRequest->hasfile('photo')){
            $ferryRequest->file("photo")->getPathname();
            $imageName=time().'.'.$ferryRequest->photo->extension();
            $ferryRequest->photo->move(public_path('images'), $imageName);
            $ferry->photo = $imageName;
        } 
       
        $ferry->save();
        $ferry->Equipement()->attach($ferryRequest->equipements);
        return redirect()->route('ferrys.index')->with('info', "le bateau a bien été créé");
    }

    /**
     * Display the specified resource.
     */
    public function show(Ferrys $ferry) : View
    {
        $equipements = Equipement::all();
        return view ("show", compact('ferry','equipements'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ferrys $ferry)
    {
        $ferry->delete();
        return back()->with('info',"le bateau a été supprimé");
    }
}

