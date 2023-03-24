<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Experiance;
use Illuminate\Http\Request;

class ExperianceController extends Controller
{
    public function get_all_experiance(){
        $experiances = Experiance::orderBy('id', 'DESC')->get();
        return response()->json([
            'experiances' => $experiances
        ],200);
    }

    public function create_experiance(Request $request){
        $this->validate($request, [
            'company'=> 'required'

        ]);
        $experiance = new Experiance();
        $experiance->company = $request->company;
        $experiance->period = $request->period;
        $experiance->position = $request->position;
        $experiance->save();

    }

    public function update_experiance(Request $request, $id){
        $experiance = Experiance::find($id);
        $this->validate($request, [
            'company'=> 'required'

        ]);

        $experiance->company = $request->company;
        $experiance->period = $request->period;
        $experiance->position = $request->position;
        $experiance->save();


    }

    public function delete_experiance(Request $request, $id){
        $experiance = Experiance::findOrFail($id);
        $experiance->delete();

    }
}
