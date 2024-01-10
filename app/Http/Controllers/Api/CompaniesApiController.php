<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Companies\Companies;
use DB;
use File;
use Image;

class CompaniesApiController extends Controller{
	public function index(){
        $companies = Companies::paginate(5);
		return CompanyResource::collection($companies);
	}
	public function show($id){
        $companies = Companies::find($id);
        if($companies){
            return new CompanyResource(Companies::find($id));
        }else{
            return response()->json([
                'status' => 422,
                'message' => 'sorry this id is not exist',
                'data' => ''
            ], 422);
        }
	}
}