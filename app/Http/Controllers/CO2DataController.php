<?php

namespace App\Http\Controllers;

use App\Models\CO2Data;
use Illuminate\Http\Request;

class CO2DataController extends Controller
{
    public function index() {
        return CO2Data::all();
    }

    public function show(CO2Data $data) {
        return $data;
    }

    public function store(Request $request) {
        // validate
        $data = $request->validate([
            'msg'                                   => 'sometimes|string',
            'code'                                  => 'sometimes|integer',
            'co2total'                              => 'required|numeric',
            'co2params.*'                           => 'required|array',
            'co2params.*.value'                     => 'required|numeric',
            'co2params.*.params'                    => 'required|array',
            'co2params.sector1.params.size'         => 'required|integer',
            'co2params.sector1.params.renew'        => 'required|boolean',
            'co2params.sector1.params.eco'          => 'required|boolean',
            'co2params.sector2.params.nocar'        => 'required|boolean',
            'co2params.sector2.params.freqfly'      => 'required|boolean',
            'co2params.sector3.params.nomeat'       => 'required|boolean',
            'co2params.sector3.params.muchmeat'     => 'required|boolean',
            'co2params.sector4.params.nomoney'      => 'required|boolean',
            'co2params.sector4.params.muchmoney'    => 'required|boolean',
            'co2params.sector4.params.stock'        => 'required|boolean',
            'location'                              => 'required|array',
            'location.district'                     => 'required|integer',
            'location.mult'                         => 'required|integer'
        ]);
        return "Validated true!";

        // save to database
        $model = new CO2Data;
        $model->co2total = $data['co2total'];
        $model->co2params = $data['co2params'];
        $model->location = $data['location'];
        $model->save();
        
        // TEST → return all data
        return CO2Data::all();
    }
}
