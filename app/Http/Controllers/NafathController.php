<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use File;
use Image;
use App\Models\Individuals\Individuals;
use App\Models\Individuals\IndividualsPerInfo;
use App\Models\Individuals\IndividualsAccountOpening;
use App\Models\Individuals\IndividualsAttachment;
use App\Models\Individuals\IndividualsBanks;
use App\Models\Individuals\IndividualsCertificates;
use App\Models\Individuals\IndividualsClientServiceOffers;
use App\Models\Individuals\IndividualsManagerApproval;
use App\Models\Individuals\IndividualsModel1;
use App\Models\Individuals\IndividualsModel3;
use App\Models\Individuals\IndividualsModel5;
use App\Models\Individuals\IndividualsModel6;
use App\Models\Individuals\IndividualsModel7;
use App\Models\Individuals\IndividualsPerContacts;
use App\Models\Individuals\IndividualsProfitShares;
use App\Models\Individuals\IndividualsRegistrationBeneficiary;
use App\Models\Individuals\IndividualsResidentConfirmation;
use App\Models\Individuals\IndividualsSaleProceeds;
use App\Models\Individuals\IndividualsSourceIncome;
use App\Models\Individuals\IndividualsTaxAssessor;
use App\Models\Individuals\IndividualsTaxResidencyInformation;

use App\Models\Companies\Companies;
use App\Models\Companies\CompaniesAttachment;
use App\Models\Companies\CompaniesBank;
use App\Models\Companies\CompaniesBoardMembers;
use App\Models\Companies\CompaniesCertificates;
use App\Models\Companies\CompaniesContactData;
use App\Models\Companies\CompaniesCustomerAcceptanceForm;
use App\Models\Companies\CompaniesLegalForm;
use App\Models\Companies\CompaniesManagerApproval;
use App\Models\Companies\CompaniesManagers;
use App\Models\Companies\CompaniesModel1;
use App\Models\Companies\CompaniesModel2;
use App\Models\Companies\CompaniesModel3;
use App\Models\Companies\CompaniesModel4;
use App\Models\Companies\CompaniesModel5;
use App\Models\Companies\CompaniesMoneyLaunderingRisks;
use App\Models\Companies\CompaniesOwnershipStructure;
use App\Models\Companies\CompaniesPersonAuthorized;
use App\Models\Companies\CompaniesProfitShares;
use App\Models\Companies\CompaniesSaleProceeds;
use App\Models\Http\Requests\FormRequestCompanies;
use App\Models\Http\Requests\FormRequestIndvidual;


class NafathController extends Controller
{

	public function getIndvidualNafathAuth(){
        return view('website.individualPartials.NafathAuth.login2');
    }
	
	public function createNafathAuthRequest(Request $request){	
		$curl = curl_init();
	
		$data = [];
		$data['nationalId'] = $request->nationalId;
		$data['service'] = "OpenAccount";
		
		$chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
$serial = '';
$max = count($chars)-1;
for($i=0;$i<20;$i++){
    $serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
}
		
		\Session::put('requestId',$serial);
		
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://nafath.api.elm.sa/api/v1/mfa/request?local=en&requestId=$serial",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => json_encode($data),
			CURLOPT_HTTPHEADER => array(
				'APP-ID: 5a4b226b',
				'APP-KEY: 245a44872b125c0b874a07b631cede69',
				'Content-Type: application/json',
				'Cookie: 032a884254476225472cab3df5d268bf=22a7b6f18e0b7b974ce878cf9697aa09; NSC_3Tdbmf-	Pqfotijgu.w4=14b5a3d94456a1593f35e91f73179db4ec5cc88f5d93141396964eb279cec105ef88e639; TS01e2737f=015a42f27e2568ba380157e5be81510d47adbbb4041c06e1777c287ad8f71eea5c548da402e6e5abfab1b3b31831c546d3763ef154e0bffdf2d456c2d45de760e057a3bf2d681be9abfe15b68721e31df8687909cf'
			),
		));

		$response = curl_exec($curl);
		curl_close($curl);
		
		$res = json_decode($response);
		
		$nationalId = $data['nationalId'];
		
		
		if(isset($res->random)){
			return view('website.individualPartials.NafathAuth.verifyNationalId',compact('res','nationalId'));
		}else{
			return back()->with('fail',trans('form.please wait and try again later'));
		}
    }
	
	public function checkNafathAuthRequest(Request $request){
		$curl = curl_init();
	
		$data = [];
		$data['nationalId'] = $request->nationalId;
		$data['transId'] = $request->transId;
		$data['random'] = $request->random;
		
		$requestId = \Session::get('requestId');
		
		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://nafath.api.elm.sa/api/v1/mfa/request/status',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => json_encode($data),
			CURLOPT_HTTPHEADER => array(
				'APP-ID: 5a4b226b',
				'APP-KEY: 245a44872b125c0b874a07b631cede69',
				'Content-Type: application/json',
				'Cookie: 032a884254476225472cab3df5d268bf=22a7b6f18e0b7b974ce878cf9697aa09; NSC_3Tdbmf-	Pqfotijgu.w4=14b5a3d94456a1593f35e91f73179db4ec5cc88f5d93141396964eb279cec105ef88e639; TS01e2737f=015a42f27e2568ba380157e5be81510d47adbbb4041c06e1777c287ad8f71eea5c548da402e6e5abfab1b3b31831c546d3763ef154e0bffdf2d456c2d45de760e057a3bf2d681be9abfe15b68721e31df8687909cf'
			),
		));

		$response = curl_exec($curl);
		curl_close($curl);
		
		$res = json_decode($response);
		//dd($res);
		if($res->status == 'WAITING'){
			return redirect('indvidual-registration/nafathAuth')->with('success',trans('form.please wait not authnticated throw nafath app'));
		}elseif($res->status == 'EXPIRED'){
			return redirect('indvidual-registration/nafathAuth')->with('fail',trans('form.your auth session is expired try again later'));
		}else{
			return $this->nafathCallBack($requestId,$request->transId);
			 /*if(Individuals::where('national_id', '=', $request->nationalId)->exists()){
				$individual = Individuals::where('national_id', $request->nationalId)->with(['Individuals_AccountOpening', 'Individuals_Attachment', 'Individuals_Banks', 'Individuals_Certificates', 'Individuals_ServiceOffers', 'Individuals_Manager_Approval', 'Individuals_Model1', 'Individuals_Model3', 'Individuals_Model5', 'Individuals_Model6', 'Individuals_Model7', 'Individuals_contacts', 'Individuals_Info', 'Individuals_Profit_Shares', 'Individuals_Beneficiary', 'IndividualsResidentConfirmation', 'Individuals_Sale_Proceeds', 'Individuals_Source_Income', 'Individuals_Assessor', 'Individuals_Residency_Information'])->first();            

				session()->put('individual', $individual);
				return redirect('indvidual-registration/step/1');
			}else{
				$this->indvidualRegistration($request->nationalId);
				 return redirect('indvidual-registration/step/1');
			} */
		}
	}
		
	public function indvidualRegistration($nationalId){
		
        $individual_id = Individuals::insertGetId([
            'national_id' => $nationalId,
        ]);
        IndividualsPerInfo::insert([
            'individuals_id' => $individual_id
        ]);
        IndividualsAccountOpening::insert([
            'individuals_id' => $individual_id
        ]);
        IndividualsAttachment::insert([
            'individuals_id' => $individual_id
        ]);
        IndividualsBanks::insert([
            'individuals_id' => $individual_id
        ]);
        IndividualsCertificates::insert([
            'individuals_id' => $individual_id
        ]);
        IndividualsClientServiceOffers::insert([
            'individuals_id' => $individual_id
        ]);
        IndividualsManagerApproval::insert([
            'individuals_id' => $individual_id
        ]);
        IndividualsModel1::insert([
            'individuals_id' => $individual_id
        ]);
        IndividualsModel3::insert([
            'individuals_id' => $individual_id
        ]);
        IndividualsModel5::insert([
            'individuals_id' => $individual_id
        ]);
        IndividualsModel6::insert([
            'individuals_id' => $individual_id
        ]);
        IndividualsModel7::insert([
            'individuals_id' => $individual_id
        ]);
        IndividualsPerContacts::insert([
            'individuals_id' => $individual_id
        ]);
        IndividualsProfitShares::insert([
            'individuals_id' => $individual_id
        ]);
        IndividualsRegistrationBeneficiary::insert([
            'individuals_id' => $individual_id
        ]);
        IndividualsResidentConfirmation::insert([
            'individuals_id' => $individual_id
        ]);
        IndividualsSaleProceeds::insert([
            'individuals_id' => $individual_id
        ]);
        IndividualsSourceIncome::insert([
            'individuals_id' => $individual_id
        ]);
        IndividualsTaxAssessor::insert([
            'individuals_id' => $individual_id
        ]);
        IndividualsTaxResidencyInformation::insert([
            'individuals_id' => $individual_id
        ]);
        $individual = Individuals::select('id','phone')->where('id', $individual_id)->first();
		
        \Session::forget('type');
		\Session::forget('phone');
		
        session()->put('individual', $individual);
    }
		
	
	public function nafathCallBack($requestId,$transId){
		
		$curl = curl_init();
	
		$data = [];
		$data['requestId'] = $requestId;
		$data['transId'] = $transId;
		$data['token'] = "eyJraWQiOiJqd2stMTIzNCIsImFsZyI6IlJTMjU2In0.eyJhdWQiOiJTUF9OQU1FIiwibmJmIjoxNjYxMTU1OTE0LCJ0c
mFuc0lkIjoiM2E0YTNiMjYtM2I4Zi00ZDRmLTkwZmUtZDFhNGVmODM0ZThkIiwiaXNzIjoiTmFmYXRoIEFwcCIsImV4cCI6MTY
2MTE1NTkxNCwiaWF0IjoxNjYxMTU1NjE0LCJzdGF0dXMiOiJXQUlUSU5HIn0.ntTgX1GGRRdRnZ0XlzJehpsyqMnhN5jIH_0a_
P6FdPDodxLz-nRHlkyNLRvHBq9W8YIxDAMQshOcBbThpYgjYszg6IBnvltdX81rjQ_7Yl4e5AK_kDugdh9MmBB5UWaWp8aQ6
EALnjcmXKvQ-bIKmoxw4TQb_PasNQ99gENdA3Wc4GDz6qw-OgeqLCJFLzcM2blq0RfdTjm5q_ArhwGGn9FAERhoKteafBH
64AYgBmzOO6eabQTvokiFCBb90UkO2auCG9RJlqt_Vtobhk4_ZQPjNKN4B-q3fy5LD4OGNTBfKMmZ7jRDTuizXGK-PoqMcbD
nS8mPMQtCrzWvxua9wA";
		
		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://nomwcapital.com.sa/nafath-verfication-CallBack',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => json_encode($data),
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/json',
			),
		));

		$response = curl_exec($curl);
		curl_close($curl);
		
		$res = json_decode($response);
		dd($res);
		
		
		
	}

}
