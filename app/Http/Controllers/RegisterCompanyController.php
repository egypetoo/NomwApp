<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies\Companies;

class RegisterCompanyController extends Controller
{
    public function index()
    {
        $registerCompanyMessages = Companies::with(['Companies_Attachment', 'Companies_Bank', 'Companies_Board_Members', 'Companies_Certificates', 'Companies_ContactData', 'Companies_AcceptanceForm', 'Companies_LegalForm', 'Companies_Manager_Approval', 'Companies_Managers', 'Companies_Model1', 'Companies_Model2', 'Companies_Model3', 'Companies_Model4', 'Companies_Model5', 'Companies_LaunderingRisks', 'Companies_Ownership_Structure', 'Companies_Person_Authorized', 'Companies_Profit_Shares', 'Companies_Sale_Proceeds'])->paginate(10);
        return view('admin.companyMessages.companyMessages',compact('registerCompanyMessages'));
    }
    public function edit($id)
    {
        $registerCompanyMessage=Companies::with(['Companies_Attachment', 'Companies_Bank', 'Companies_Board_Members', 'Companies_Certificates', 'Companies_ContactData', 'Companies_AcceptanceForm', 'Companies_LegalForm', 'Companies_Manager_Approval', 'Companies_Managers', 'Companies_Model1', 'Companies_Model2', 'Companies_Model3', 'Companies_Model4', 'Companies_Model5', 'Companies_LaunderingRisks', 'Companies_Ownership_Structure', 'Companies_Person_Authorized', 'Companies_Profit_Shares', 'Companies_Sale_Proceeds'])->find($id);
        if($registerCompanyMessage){
            return view('admin.companyMessages.companyMessages_details',compact('registerCompanyMessage'));
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
            $registerCompanyMessage =  Companies::with(['Companies_Attachment', 'Companies_Bank', 'Companies_Board_Members', 'Companies_Certificates', 'Companies_ContactData', 'Companies_AcceptanceForm', 'Companies_LegalForm', 'Companies_Manager_Approval', 'Companies_Managers', 'Companies_Model1', 'Companies_Model2', 'Companies_Model3', 'Companies_Model4', 'Companies_Model5', 'Companies_LaunderingRisks', 'Companies_Ownership_Structure', 'Companies_Person_Authorized', 'Companies_Profit_Shares', 'Companies_Sale_Proceeds'])->findOrFail($id);
            $registerCompanyMessage->delete();
            return redirect()->url('/admin/individual-messages')->with('success',trans('home.message successfully deleted'));

        }
    }  
}
