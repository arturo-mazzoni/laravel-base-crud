<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $automobili_sel = Car::all();

        $data = [
            'automobili' => $automobili_sel
        ];

        return view('cars.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'marca' => 'required|max:50',
            'modello' => 'required|unique:cars|max:50',
            'cilindrata' => 'required|max:4',
            'prezzo' => 'required|max:10',
            'descrizione' => 'required',
        ]);

        $carNew = new Car();
        // $carNew->marca = $data['marca'];
        // $carNew->modello = $data['modello'];
        // $carNew->cilindrata = $data['cilindrata'];
        // $carNew->prezzo = $data['prezzo'];
        // $carNew->descrizione = $data['descrizione'];
        $carNew->fill($data);

        $carNew->save();

        // return redirect()->route('cars.index');
        return redirect()->route('cars.show',$carNew->find($carNew->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $cars)
    {
        // $automobile_sel = Car::find($id);

        if ($automobile_sel) {

            $data = [
                'automobile' => $automobile_sel
            ];

            return view('cars.show', $data);
        }

        abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
