<?php

namespace App\Http\Controllers;

use App\Element;
use App\Forms\ElementForm;
use Illuminate\Http\Request;
use App\Agres;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Support\Facades\Storage;

class AgresElementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder,$agres_id)
    {
        $agres = Agres::find($agres_id);

        $form = $formBuilder->create(ElementForm::class, [
            'method' => 'POST',
            'url' => route('agres.elements.store',$agres_id)
        ]);

        return view('forms.element')->with(compact('agres','form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$agre)
    {
        /**
         * Image
         */
        $agres = Agres::find($agre);

        if($request->hasFile('image'))
        {

            $imagename = $agres->shortname."_".$request->num.".".$request->image->extension();
            $imagepath = "elements/".$imagename;



            $path = Storage::disk('s3')->put('upload', $request->image);
            Storage::disk('s3')->delete($imagepath);
            Storage::disk('s3')->move($path,$imagepath);


        }

        $element = Element::find($request->id);

        if($element === null)
        {
            $element = new Element;

        }


        $element->num =  $request->num;
        $element->difficulte = $request->difficulte;
        $element->nom = $request->nom;
        $element->envol = $request->envol;
        $element->BI = $request->BI;
        $element->BS = $request->BS;
        $element->agres_id = $agre;
        $element->famille_id = $request->famille_id;
        if($request->hasFile('image'))
        $element->image = $imagepath;


        $element->save();



        $info = "Enregistrement effectué";
        return back()->with('info');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
