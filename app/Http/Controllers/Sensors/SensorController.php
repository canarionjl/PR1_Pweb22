<?php

namespace App\Http\Controllers\Sensors;

use App\Http\Controllers\Controller;
use App\Models\DatosSensor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($startDate, $endDate)
    {
        $startDate = Carbon::createFromFormat('dmY', $startDate);
        $endDate = Carbon::createFromFormat('dmY', $endDate);

        return DatosSensor::whereBetween('fecha',[$startDate,$endDate])
            ->get();
        // Example: http://proyectoweb22.test/api/get/01112022/01012023
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return
     */
    public function store(Request $request)
    {
        $sensorData = array('sensor' => $request->get('sensor'),
            'valor' => $request->get('valor'),
            'fecha' => Carbon::createFromFormat('d/m/Y-H:i:s',$request->get('fecha')));
        DatosSensor::create($sensorData);
        return $sensorData;
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
