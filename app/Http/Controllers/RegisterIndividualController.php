<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Individuals\Individuals;

class RegisterIndividualController extends Controller
{
    public function index()
    {
        $registerIndividualMessages = Individuals::with(['Individuals_AccountOpening', 'Individuals_Attachment', 'Individuals_Banks', 'Individuals_Certificates', 'Individuals_ServiceOffers', 'Individuals_Manager_Approval', 'Individuals_Model1', 'Individuals_Model3', 'Individuals_Model5', 'Individuals_Model6', 'Individuals_Model7', 'Individuals_contacts', 'Individuals_Info', 'Individuals_Profit_Shares', 'Individuals_Beneficiary', 'IndividualsResidentConfirmation', 'Individuals_Sale_Proceeds', 'Individuals_Source_Income', 'Individuals_Assessor', 'Individuals_Residency_Information'])->paginate(10);
        return view('admin.individualMessages.individualMessages',compact('registerIndividualMessages'));
    }
    public function edit($id)
    {
        $registerIndividualMessage=Individuals::with(['Individuals_AccountOpening', 'Individuals_Attachment', 'Individuals_Banks', 'Individuals_Certificates', 'Individuals_ServiceOffers', 'Individuals_Manager_Approval', 'Individuals_Model1', 'Individuals_Model3', 'Individuals_Model5', 'Individuals_Model6', 'Individuals_Model7', 'Individuals_contacts', 'Individuals_Info', 'Individuals_Profit_Shares', 'Individuals_Beneficiary', 'IndividualsResidentConfirmation', 'Individuals_Sale_Proceeds', 'Individuals_Source_Income', 'Individuals_Assessor', 'Individuals_Residency_Information'])->find($id);
        if($registerIndividualMessage){
            return view('admin.individualMessages.individualMessages_details',compact('registerIndividualMessage'));
        }else{
            abort('404');
        }
    }
    public function destroy($ids)
    {
        //
        $ids = explode(',', $ids);
        if ($ids[0] == 'on') {
            unset($ids[0]);
            
        }
        
        foreach ($ids as $id) {
            $registerIndividualMessage =  Individuals::with(['Individuals_AccountOpening', 'Individuals_Attachment', 'Individuals_Banks', 'Individuals_Certificates', 'Individuals_ServiceOffers', 'Individuals_Manager_Approval', 'Individuals_Model1', 'Individuals_Model3', 'Individuals_Model5', 'Individuals_Model6', 'Individuals_Model7', 'Individuals_contacts', 'Individuals_Info', 'Individuals_Profit_Shares', 'Individuals_Beneficiary', 'IndividualsResidentConfirmation', 'Individuals_Sale_Proceeds', 'Individuals_Source_Income', 'Individuals_Assessor', 'Individuals_Residency_Information'])->findOrFail($id);
            $registerIndividualMessage->delete();
            return redirect()->url('/admin/individual-messages')->with('success',trans('home.message successfully deleted'));

        }
    }  
}
