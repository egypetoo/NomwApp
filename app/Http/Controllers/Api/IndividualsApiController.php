<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\IndividualResource;
use App\Individuals\Individuals;
use DB;
use File;
use Image;

class IndividualsApiController extends Controller{
	public function index(){
        $Individuals = Individuals::paginate(5);
		return IndividualResource::collection($Individuals);
	}
    public function show($id){
        $Individuals = Individuals::find($id);
        if($Individuals){
            return new IndividualResource(Individuals::find($id));
        }else{
            return response()->json([
                'status' => 422,
                'message' => 'sorry this id is not exist',
                'data' => ''
            ], 422);
        }
	}
}