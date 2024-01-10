<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
use DB;
use File;
use Image;
use App\Models\Http\Requests\FormRequestCompanies;
use App\Models\Http\Requests\FormRequestIndvidual;

class FormController extends Controller
{
    public function getIndvidualLogin(){
        return view('website.individualPartials.login');
    }

    public function getCompaniesLogin(){
        return view('website.companiesPartials.login');
    }
    public function haveIndvidualAccount(){
        return view('website.individualPartials.have_account');
    }
    public function haveCompanyAccount(){
        return view('website.companiesPartials.have_account');
    }
    //////////////////  rigestring ///////////////////////
    public function sendRegistrationIndividualOTP(Request $request){
        $request->validate([
            'phone' => 'required|numeric'
        ]);
		if(Individuals::where('phone', '=', '996' . $request->phone)->exists()){
		 return redirect('indvidual-registration/login')->with('error' , trans('form.your number is already exists please login directly'));
		}else{
		$otp = mt_rand(1111,9999);
        
        $this->sendOTPCode($request->phone,$otp);
        \Session::put('otp',$otp);
		\Session::put('phone',$request->phone);

        return redirect('/indvidual-registration/validate-otp');
		}

    }
    public function validateOTPView(){
        return view('website.individualPartials.validateOTPView');
    }

    public function validateIndvidualOTP(Request $request){
        if($request->otp == \Session::get('otp')){
			$phone = \Session::get('phone');
            return $this->indvidualRegistration($phone);
        }else{
            return back()->with('error',trans('form.please enter correct otp'));
        }
    }
    
    public function indvidualRegistration($phone){
		
        $individual_id = Individuals::insertGetId([
            'phone' => '996'.$phone,
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
        return redirect('indvidual-registration/step/1');
    }
	
    public function sendRegistrationCompanyOTP(Request $request){
        $request->validate([
            'phone' => 'required|numeric'
        ]);
		if(Companies::where('phone', '=', '996' . $request->phone)->exists()){
		 return redirect('company-registration/login')->with('error' , trans('form.your number is already exists please login directly'));
		}else{
			$otp = mt_rand(1111,9999);
			$this->sendOTPCode($request->phone,$otp);
			\Session::put('otp',$otp);
			\Session::put('phone',$request->phone);
			return redirect('/company-registration/validate-otp');
		}
    }
    public function validateOTPCompanyView(){
        return view('website.companiesPartials.validateOTPView');
    }

    public function validateCompanyOTP(Request $request){
        if($request->otp == \Session::get('otp')){
			$phone = \Session::get('phone');
            return $this->companyRegistration($phone);
        }else{
            return back()->with('error',trans('form.please enter correct otp'));
        }
    }
    public function companyRegistration($phone){
        $company_id = Companies::insertGetId([
            'phone' => '996'.$phone,
        ]);
        CompaniesAttachment::insert([
            'companies_id' => $company_id
        ]);
        CompaniesBank::insert([
            'companies_id' => $company_id
        ]);
        CompaniesBoardMembers::insert([
            'companies_id' => $company_id
        ]);
        CompaniesCertificates::insert([
            'companies_id' => $company_id
        ]);
        CompaniesContactData::insert([
            'companies_id' => $company_id
        ]);
        CompaniesCustomerAcceptanceForm::insert([
            'companies_id' => $company_id
        ]);
        CompaniesLegalForm::insert([
            'companies_id' => $company_id
        ]);
        CompaniesManagerApproval::insert([
            'companies_id' => $company_id
        ]);
        CompaniesManagers::insert([
            'companies_id' => $company_id
        ]);
        CompaniesModel1::insert([
            'companies_id' => $company_id
        ]);
        CompaniesModel2::insert([
            'companies_id' => $company_id
        ]);
        CompaniesModel3::insert([
            'companies_id' => $company_id
        ]);
        CompaniesModel4::insert([
            'companies_id' => $company_id
        ]);
        CompaniesModel5::insert([
            'companies_id' => $company_id
        ]);
        CompaniesMoneyLaunderingRisks::insert([
            'companies_id' => $company_id
        ]);
        CompaniesOwnershipStructure::insert([
            'companies_id' => $company_id
        ]);
        CompaniesPersonAuthorized::insert([
            'companies_id' => $company_id
        ]);
        CompaniesProfitShares::insert([
            'companies_id' => $company_id
        ]);
        CompaniesSaleProceeds::insert([
            'companies_id' => $company_id
        ]);
        $company = Companies::select('id','phone')->where('id', $company_id)->first();
        session()->put('company', $company);
		\Session::forget('type');
		\Session::forget('phone');
        return redirect('company-registration/step/1');

    }
    ////////////////// end rigestring ///////////////////////
    ////////////////// confirming ///////////////////////
    public function indvidualRegistrationConfirming(Request $request){
        $request->validate([
            'phone' => 'required|numeric'
        ]);
		
        if(Individuals::where('phone', '=', '996' . $request->phone)->exists()){
            $individual = Individuals::where('phone', '996' . $request->phone)->with(['Individuals_AccountOpening', 'Individuals_Attachment', 'Individuals_Banks', 'Individuals_Certificates', 'Individuals_ServiceOffers', 'Individuals_Manager_Approval', 'Individuals_Model1', 'Individuals_Model3', 'Individuals_Model5', 'Individuals_Model6', 'Individuals_Model7', 'Individuals_contacts', 'Individuals_Info', 'Individuals_Profit_Shares', 'Individuals_Beneficiary', 'IndividualsResidentConfirmation', 'Individuals_Sale_Proceeds', 'Individuals_Source_Income', 'Individuals_Assessor', 'Individuals_Residency_Information'])->first();            
            
            session()->put('individual', $individual);
            return redirect('indvidual-registration/step/1');
        }
        return redirect('indvidual-registration/login')->with('error' , trans('form.your number not register please register first'));
    }
    public function companyRegistrationConfirming(Request $request){
        $request->validate([
            'phone' => 'required|numeric'
        ]);
        if(Companies::where('phone', '=', '996' . $request->phone)->exists()){
            $company = Companies::where('phone', '996' . $request->phone)->with(['Companies_Attachment', 'Companies_Bank', 'Companies_Board_Members', 'Companies_Certificates', 'Companies_ContactData', 'Companies_AcceptanceForm', 'Companies_LegalForm', 'Companies_Manager_Approval', 'Companies_Managers', 'Companies_Model1', 'Companies_Model2', 'Companies_Model3', 'Companies_Model4', 'Companies_Model5', 'Companies_LaunderingRisks', 'Companies_Ownership_Structure', 'Companies_Person_Authorized', 'Companies_Profit_Shares', 'Companies_Sale_Proceeds'])->first();
            session()->put('company', $company);
            return redirect('company-registration/step/1');
        }
        return redirect('company-registration/login')->with('error' , trans('form.your number not register please register first'));

    }

    ////////////////// end confirming ///////////////////////

    
    public function getIndvidualRegistration($step){
        return view('website.individual',compact('step'));
    }
    public function getCompanyRegistration($step){
        return view('website.company',compact('step'));
    }
    public function updateRegistration($id, FormRequestIndvidual $request){
        
        $data = Individuals::find($request->id);
        if(! $data){
            abort('404');
        }
        //IndividualsPerInfoTable
        $per_info = IndividualsPerInfo::where('individuals_id',$request->id)->first();
        //IndividualsPerContactsTable
        $perContacts = IndividualsPerContacts::where('individuals_id',$request->id)->first();
        //IndividualsModel1Table
        $model1 = IndividualsModel1::where('individuals_id',$request->id)->first();
        //IndividualsRegistrationBeneficiaryTable
        $registrationBeneficiary = IndividualsRegistrationBeneficiary::where('individuals_id',$request->id)->first();
        //IndividualsTaxAssessorTable
        $taxAssessor = IndividualsTaxAssessor::where('individuals_id',$request->id)->first();
        //IndividualsTaxResidencyInformationTable
        $taxResidencyInformation = IndividualsTaxResidencyInformation::where('individuals_id',$request->id)->first();
        //IndividualsModel3Table
        $model3 = IndividualsModel3::where('individuals_id',$request->id)->first();
        //IndividualsCertificatesTable
        $certificates = IndividualsCertificates::where('individuals_id',$request->id)->first();
        //IndividualsProfitSharesTable
        $profitShares = IndividualsProfitShares::where('individuals_id',$request->id)->first();
        //IndividualsSaleProceedsTable
        $saleProceeds = IndividualsSaleProceeds::where('individuals_id',$request->id)->first();
        //IndividualsBanksTable
        $banks = IndividualsBanks::where('individuals_id',$request->id)->first();
        //IndividualsModel5Table
        $model5 = IndividualsModel5::where('individuals_id',$request->id)->first();
        //IndividualsModel6Table
        $model6 = IndividualsModel6::where('individuals_id',$request->id)->first();
        //IndividualsModel7Table
        $model7 = IndividualsModel7::where('individuals_id',$request->id)->first();
        //IndividualsSourceIncomeTable
        $sourceIncome = IndividualsSourceIncome::where('individuals_id',$request->id)->first();
        //IndividualsAttachmentTable
        $attachment = IndividualsAttachment::where('individuals_id',$request->id)->first();
        //IndividualsClientServiceOffersTable
        $clientServiceOffers = IndividualsClientServiceOffers::where('individuals_id',$request->id)->first();
        //IndividualsAccountOpeningTable
        $accountOpening = IndividualsAccountOpening::where('individuals_id',$request->id)->first();
        //IndividualsManagerApprovalTable
        $managerApproval = IndividualsManagerApproval::where('individuals_id',$request->id)->first();

        $step = $request->step;

        switch ($step) {
            //step 1
            case $step == 1:
                $data->name = $request->name;
                $data->no_invistments = $request->no_invistments;
                $data->currency = $request->currency;
                $data->wallet_type = $request->wallet_type;
                break;
            //step 2
            case  $step == 2:
                $data->individual_type = $request->individual_type;
                //IndividualsPerInfoTable
                $per_info->f_name = $request->f_name;
                $per_info->m_name = $request->m_name;
                $per_info->l_name = $request->l_name;
				$per_info->family_name = $request->family_name;
                $per_info->nationality = $request->nationality;
                $per_info->dob_islamic = $request->dob_islamic;
                $per_info->dob_cristian = $request->dob_cristian;
                $per_info->country = $request->country;
                $per_info->district = $request->district;
                $per_info->gender = $request->gender;
                $per_info->personality_id = $request->personality_id;
				$per_info->id_num = $request->id_num;
				$per_info->exp_date = $request->exp_date;
                $per_info->social_status = $request->social_status;
                $per_info->no_family_members = $request->no_family_members;

                break;
            //step 3
            case $step == 3:
                //IndividualsPerContactsTable
                $perContacts->national_address_name = $request->national_address_name;
                $perContacts->national_address_region_name = $request->national_address_region_name;
                $perContacts->national_address_area_name = $request->national_address_area_name;
                $perContacts->national_address_build_num = $request->national_address_build_num;
                $perContacts->national_address_city = $request->national_address_city;
                $perContacts->national_address_postal_code = $request->national_address_postal_code;
                $perContacts->national_address_additional_code = $request->national_address_additional_code;
                $perContacts->national_address_country = $request->national_address_country;
                $perContacts->national_address_sender_type = $request->national_address_sender_type;
                $perContacts->national_address_sender_lang = $request->national_address_sender_lang;
                $perContacts->national_address_phone1 = $request->national_address_phone1;
                $perContacts->national_address_phone2 = $request->national_address_phone2;
                $perContacts->national_address_email = $request->national_address_email;
                break;
            //step 4    
            case $step == 4:
                $data->is_saudi_resident = $request->is_saudi_resident;
                //IndividualsModel1Table
                $model1->model1_build_num = $request->model1_build_num;
                $model1->model1_sub_num = $request->model1_sub_num;
                $model1->model1_post_code = $request->model1_post_code;
                $model1->model1_post_box = $request->model1_post_box;
                $model1->model_1_city = $request->model_1_city;
                $model1->model_1_country = $request->model_1_country;
                //Individuals
                $data->is_registretion_beneficial = $request->is_registretion_beneficial;
                //IndividualsRegistrationBeneficiaryTable
                $registrationBeneficiary->beneficiary_status = $request->beneficiary_status;
                $registrationBeneficiary->beneficiary_full_name = $request->beneficiary_full_name;
                $registrationBeneficiary->beneficiary_relation = $request->beneficiary_relation;
                $registrationBeneficiary->beneficiary_ssn = $request->beneficiary_ssn;
                $registrationBeneficiary->beneficiary_ssn_expire_date = $request->beneficiary_ssn_expire_date;
                $registrationBeneficiary->beneficiary_address = $request->beneficiary_address;
                $registrationBeneficiary->beneficiary_birth_date = $request->beneficiary_birth_date;
                $registrationBeneficiary->beneficiary_phone1 = $request->beneficiary_phone1;
                $registrationBeneficiary->beneficiary_phone2 = $request->beneficiary_phone2;
                $registrationBeneficiary->beneficiary_email = $request->beneficiary_email;
                break;
            //step 5
            case $step == 5:
                $data->is_american_resident = $request->is_american_resident;
                $data->american_state = $request->american_state;
                $data->taxes_in_which_country = $request->taxes_in_which_country;
                $data->taxes_in_which_country_place = $request->taxes_in_which_country_place;
                $data->another_visa = $request->another_visa;
                $data->visa_name = $request->visa_name;
                //IndividualsTaxAssessorTable
                $taxAssessor->tax_assessor_guarantee_num = $request->tax_assessor_guarantee_num;
                $taxAssessor->tax_assessor_assigned_id = $request->tax_assessor_assigned_id;
                $taxAssessor->tax_assessor_adoption_tax_id_number = $request->tax_assessor_adoption_tax_id_number;
                break;
            //step 6
            case $step == 6:
                //IndividualsTaxResidencyInformationTable
                $taxResidencyInformation->residency_country_name = $request->residency_country_name;
                $taxResidencyInformation->residency_tax_identfire_num = $request->residency_tax_identfire_num;
                $taxResidencyInformation->residency_no_tax_identfire_num = $request->residency_no_tax_identfire_num;
                break;
            //step 7
            case $step == 7:
                $data->custodian_appointed = $request->custodian_appointed;
                //IndividualsModel3Table
                $model3->model3_full_name = $request->model3_full_name;
                $model3->model3_address = $request->model3_address;
                $model3->model3_account_name = $request->model3_account_name;
                $model3->model3_account_number = $request->model3_account_number;
                //IndividualsCertificatesTable
                $certificates->certificates_client_name = $request->certificates_client_name;
                $certificates->certificates_custodian_name = $request->certificates_custodian_name;
                $certificates->certificates_other_hand = $request->certificates_other_hand;
                //IndividualsProfitSharesTable
                $profitShares->profit_client_name = $request->profit_client_name;
                $profitShares->profit_custodian_name = $request->profit_custodian_name;
                $profitShares->profit_other_hand = $request->profit_other_hand;
                //IndividualsSaleProceedsTable
                $saleProceeds->sale_client_name = $request->sale_client_name;
                $saleProceeds->sale_custodian_name = $request->sale_custodian_name;
                $saleProceeds->sale_other_hand = $request->sale_other_hand;

                break;
            //step 8
            case $step == 8:
                //IndividualsBanksTable
                $banks->main_bank_name = $request->main_bank_name;
                $banks->main_bank_address = $request->main_bank_address;
                $banks->main_bank_account_name = $request->main_bank_account_name;
                $banks->main_bank_account_num = $request->main_bank_account_num;
                $banks->sub_bank_name = $request->sub_bank_name;
                $banks->sub_bank_address = $request->sub_bank_address;
                $banks->sub_bank_account_name = $request->sub_bank_account_name;
                $banks->sub_bank_account_num = $request->sub_bank_account_num;
                break;
            //step 9
            case $step == 9:
                $data->is_member_or_related = $request->is_member_or_related;
                $data->is_entrusted_tasks = $request->is_entrusted_tasks;
                $data->is_owner_or_shareholder = $request->is_owner_or_shareholder;
                //IndividualsModel5Table
                $model5->model5_name = $request->model5_name;
                $model5->model5_section_name = $request->model5_section_name;
                $model5->model5_position_name = $request->model5_position_name;
                $model5->model5_position_degree = $request->model5_position_degree;
                $model5->model5_relative_relation = $request->model5_relative_relation;
                $model5->model5_country_name = $request->model5_country_name;
                $model5->model5_company_name = $request->model5_company_name;
                break;
            //step 10
            case $step == 10:
                $data->educational_level = $request->educational_level;
                $data->employment_status = $request->employment_status;
                //IndividualsModel6Table
                $model6->model6_employer_name = $request->model6_employer_name;
                $model6->model6_employer_address = $request->model6_employer_address;
                $model6->model6_phone = $request->model6_phone;
                $model6->model6_job_name = $request->model6_job_name;
                $model6->model6_section = $request->model6_section;
                $model6->model6_service_duration = $request->model6_service_duration;
                //IndividualsModel7Table
                $model7->model7_company_name = $request->model7_company_name;
                $model7->model7_activity_type = $request->model7_activity_type;
                $model7->model7_position = $request->model7_position;
                $model7->model7_phone = $request->model7_phone;
                $model7->model7_office_address = $request->model7_office_address;
                $model7->model7_number_years_activity = $request->model7_number_years_activity;
                $model7->model7_countries = $request->model7_countries;
                break;
            //step 11
            case $step == 11:
                $data->annual_income = $request->annual_income;
                $data->net_worth = $request->net_worth;
                //IndividualsSourceIncomeTable
                $sourceIncome->source_salary = $request->source_salary;
                $sourceIncome->source_inherite = $request->source_inherite;
                $sourceIncome->source_investment_returns = $request->source_investment_returns;
                $sourceIncome->source_private_job = $request->source_private_job;
                $sourceIncome->source_other = $request->source_other;
                //IndividualsTable
                $data->sources_of_wealth = $request->sources_of_wealth;
                $data->sources_of_wealth_other = $request->sources_of_wealth_other;
                break;
            //step 12
            case $step == 12:
                $data->is_workin_financial_sector = $request->is_workin_financial_sector;
                $data->is_other_experiences = $request->is_other_experiences;
                $data->is_professional_certificates = $request->is_professional_certificates;
                $data->is_refused_private_account = $request->is_refused_private_account;
                $data->is_other_info_financial = $request->is_other_info_financial;
                $data->loan_ratio = $request->loan_ratio;
                $data->financing_deals = $request->financing_deals;
                $data->investment_knowledge = $request->investment_knowledge;
                $data->take_risk = $request->take_risk;
                break;
            //step 13
            case $step == 13:
                $data->investment_objectives = $request->investment_objectives;
                $data->refund_period = $request->refund_period;
                $data->investment_assets = $request->investment_assets;
                $data->investment_assets_currency = $request->investment_assets_currency;
                break;
            //step 14
            case $step == 14:
                $data->investment_products = $request->investment_products;
                $data->countries_outside = $request->countries_outside;
                $data->knowledge_level = $request->knowledge_level;
                $data->trading_years = $request->trading_years;
                $data->deals_number = $request->deals_number;
                $data->deals_volume = $request->deals_volume;
                $data->financial_deals_outside = $request->financial_deals_outside;
                break;
            //step 15
            case $step == 15:
                $data->make_decision = $request->make_decision;
                $data->current_investment_ratio = $request->current_investment_ratio;
                $data->volume_investment_withus = $request->volume_investment_withus;
                $data->financial_market_regulations = $request->financial_market_regulations;
                //IndividualsAttachmentTable
                if($request->hasFile("a")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->a);
                    $extension = $request->file('a')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('a')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->a = $filename;
                }
                if($request->hasFile("b")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->b);
                    $extension = $request->file('b')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('b')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->b = $filename;
                }
                if($request->hasFile("c")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->c);
                    $extension = $request->file('c')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('c')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->c = $filename;
                }
                if($request->hasFile("d")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->d);
                    $extension = $request->file('d')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('d')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->d = $filename;
                }
                if($request->hasFile("e")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->e);
                    $extension = $request->file('e')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('e')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->e = $filename;
                }
                if($request->hasFile("f")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->f);
                    $extension = $request->file('f')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('f')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->f = $filename;
                }
                break;
            //step 16
            case $step == 16:
                //IndividualsAccountOpeningTable
                // $accountOpening->account_opening_agreement = $request->account_opening_agreement;
                //$accountOpening->account_opening_set = implode(",",$request->account_opening_set);
                // $accountOpening->account_opening_fit_report = $request->account_opening_fit_report;
                // $accountOpening->account_opening_special_instructions = $request->account_opening_special_instructions;
                //IndividualsAttachmentTable
                if($request->hasFile("attachment_national_id_copy")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_national_id_copy);
                    $extension = $request->file('attachment_national_id_copy')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_national_id_copy')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_national_id_copy = $filename;
                }
                if($request->hasFile("attachment_national_gulf_id_copy")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_national_gulf_id_copy);
                    $extension = $request->file('attachment_national_gulf_id_copy')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_national_gulf_id_copy')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_national_gulf_id_copy = $filename;
                }
                if($request->hasFile("attachment_passport")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_passport);
                    $extension = $request->file('attachment_passport')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_passport')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_passport = $filename;
                }
                if($request->hasFile("attachment_residency_copy")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_residency_copy);
                    $extension = $request->file('attachment_residency_copy')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_residency_copy')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_residency_copy = $filename;
                }
                if($request->hasFile("attachment_marred_copy")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_marred_copy);
                    $extension = $request->file('attachment_marred_copy')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_marred_copy')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_marred_copy = $filename;
                }
                if($request->hasFile("attachment_introduction_speech")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_introduction_speech);
                    $extension = $request->file('attachment_introduction_speech')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_introduction_speech')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_introduction_speech = $filename;
                }
                if($request->hasFile("attachment_clear_address")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_clear_address);
                    $extension = $request->file('attachment_clear_address')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_clear_address')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_clear_address = $filename;
                }
                if($request->hasFile("attachment_diplomatic_card")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_diplomatic_card);
                    $extension = $request->file('attachment_diplomatic_card')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_diplomatic_card')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_diplomatic_card = $filename;
                }
                if($request->hasFile("attachment_embassy_letter")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_embassy_letter);
                    $extension = $request->file('attachment_embassy_letter')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_embassy_letter')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_embassy_letter = $filename;
                }
                if($request->hasFile("attachment_valid_passport")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_valid_passport);
                    $extension = $request->file('attachment_valid_passport')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_valid_passport')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_valid_passport = $filename;
                }
                break;
			//step 17
            case $step == 17:
                //IndividualsManagerApprovalTable
                // $managerApproval->manager_date = $request->manager_date;
                // $managerApproval->manager_agreement_place = $request->manager_agreement_place;
                // $managerApproval->manager_employee_name = $request->manager_employee_name;
				if($request->hasFile("manager_employee_signature")){
                    @unlink( base_path() . '/uploads/forms/'. $managerApproval->manager_employee_signature);
                    $extension = $request->file('manager_employee_signature')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('manager_employee_signature')->move( base_path() . '/uploads/forms', $filename );
                    $managerApproval->manager_employee_signature = $filename;
                }
                // $managerApproval->manager_conformity_reason = $request->manager_conformity_reason;
                // $managerApproval->manager_conformity_name = $request->manager_conformity_name;
                // $managerApproval->manager_conformity_signature = $request->manager_conformity_signature;
                // $managerApproval->manager_conformity_date = $request->manager_conformity_date;
                // $managerApproval->manager_some_cases_reason = $request->manager_some_cases_reason;
                // $managerApproval->manager_some_cases_name = $request->manager_some_cases_name;
                // $managerApproval->manager_some_cases_signature = $request->manager_some_cases_signature;
                // $managerApproval->manager_some_cases_date = $request->manager_some_cases_date;
                // $managerApproval->manager_management_operations_num = $request->manager_management_operations_num;
                // $managerApproval->manager_management_operations_name = $request->manager_management_operations_name;
                // $managerApproval->manager_management_operations_job = $request->manager_management_operations_job;
                // $managerApproval->manager_management_operations_signature = $request->manager_management_operations_signature;
                // $managerApproval->manager_management_operations_date = $request->manager_management_operations_date;
                break;
        }

        //IndividualsTable
        $data->save();

        //IndividualsPerInfoTable
        $per_info->save();

        //IndividualsAccountOpeningTable
        $accountOpening->save();

        //IndividualsAttachmentTable
        $attachment->save();

        //IndividualsBanksTable
        $banks->save();

        //IndividualsCertificatesTable
        $certificates->save();

        //IndividualsClientServiceOffersTable
        $clientServiceOffers->save();

        //IndividualsManagerApprovalTable
        $managerApproval->save();

        //IndividualsModel1Table
        $model1->save();

        //IndividualsModel3Table
        $model3->save();

        //IndividualsModel5Table
        $model5->save();

        //IndividualsModel6Table
        $model6->save();

        //IndividualsModel7Table
        $model7->save();

        //IndividualsPerContactsTable
        $perContacts->save();

        //IndividualsProfitSharesTable
        $profitShares->save();

        //IndividualsRegistrationBeneficiaryTable
        $registrationBeneficiary->save();

        // //IndividualsResidentConfirmationTable
        // $residentConfirmation = IndividualsResidentConfirmation::where('individuals_id',$id)->first();
        // $residentConfirmation->build_num = $request->build_num;
        // $residentConfirmation->sub_number = $request->sub_number;
        // $residentConfirmation->postal_code = $request->postal_code;
        // $residentConfirmation->country_name = $request->country_name;
        // $residentConfirmation->region_name = $request->region_name;
        // $residentConfirmation->mail_box = $request->mail_box;
        // $residentConfirmation->save();

        //IndividualsSaleProceedsTable
        $saleProceeds->save();

        //IndividualsSourceIncomeTable
        $sourceIncome->save();

        //IndividualsTaxAssessorTable
        $taxAssessor->save();

        //IndividualsTaxResidencyInformationTable
        $taxResidencyInformation->save();


        $nextStep = $step+1;
        // update session
        $individual= $data;
        session()->put('individual', $individual);
        if($step == 17){
            return redirect("/")->with(['contact_message'=>trans('form.your regester is updated successfully')]);

        }
        return redirect("indvidual-registration/step/$nextStep")->with(['contact_message'=>trans('form.your regester is updated successfully')]);

    }
    public function updateCompanyRegistration($id, FormRequestCompanies $request){
        $data = Companies::find($request->id);
        if(! $data){
            abort('404');
        }
        //CompaniesAttachmentTable
        $attachment = CompaniesAttachment::where('companies_id',$request->id)->first();
        
        //CompaniesBankTable
        $bank = CompaniesBank::where('companies_id',$request->id)->first();
        //CompaniesBoardMembersTable
        $boardMembers = CompaniesBoardMembers::where('companies_id',$request->id)->first();
        //CompaniesCertificatesTable
        $certificates = CompaniesCertificates::where('companies_id',$request->id)->first();
        //CompaniesContactDataTable
        $contactData = CompaniesContactData::where('companies_id',$request->id)->first();
        //CompaniesCustomerAcceptanceFormTable
        $customerAcceptanceForm = CompaniesCustomerAcceptanceForm::where('companies_id',$request->id)->first();
        //CompaniesLegalFormTable
        $legalForm = CompaniesLegalForm::where('companies_id',$request->id)->first();
        //CompaniesManagerApprovalTable
        $managerApproval = CompaniesManagerApproval::where('companies_id',$request->id)->first();
        //CompaniesManagersTable
        $managers = CompaniesManagers::where('companies_id',$request->id)->first();
        //CompaniesModel1Table
        $model1 = CompaniesModel1::where('companies_id',$request->id)->first();
        //CompaniesModel2Table
        $model2 = CompaniesModel2::where('companies_id',$request->id)->first();
        //CompaniesModel3Table
        $model3 = CompaniesModel3::where('companies_id',$request->id)->first();
        //CompaniesModel4Table
        $model4 = CompaniesModel4::where('companies_id',$request->id)->first();
        //CompaniesModel5Table
        $model5 = CompaniesModel5::where('companies_id',$request->id)->first();
        //CompaniesMoneyLaunderingRisksTable
        $moneyLaunderingRisks = CompaniesMoneyLaunderingRisks::where('companies_id',$request->id)->first();
        //CompaniesOwnershipStructureTable
        $ownershipStructure = CompaniesOwnershipStructure::where('companies_id',$request->id)->first();
        //CompaniesPersonAuthorizedTable
        $personAuthorized = CompaniesPersonAuthorized::where('companies_id',$request->id)->first();
        //CompaniesProfitSharesTable
        $profitShares = CompaniesProfitShares::where('companies_id',$request->id)->first();
        //CompaniesSaleProceedsTable
        $saleProceeds = CompaniesSaleProceeds::where('companies_id',$request->id)->first();

        $step = $request->step;

        switch ($step) {
            //step 1
            case $step == 1:
                $data->name = $request->name;
                $data->no_invistments = $request->no_invistments;
                $data->currency = $request->currency;
                $data->wallet_type = $request->wallet_type;
                break;
            //step 2
            case  $step == 2:
                $data->trade_name = $request->trade_name;
                $data->legal_name = $request->legal_name;
                $data->legal_form = $request->legal_form;
                //CompanieslegalFormTable
                $legalForm->legal_countries_operate = $request->legal_countries_operate;
                $legalForm->legal_commercial_registration_no = $request->legal_commercial_registration_no;
                $legalForm->legal_website = $request->legal_website;
                $legalForm->legal_secondary_business_volume = $request->legal_secondary_business_volume;
                $legalForm->legal_address = $request->legal_address;
                $legalForm->legal_country_name = $request->legal_country_name;
                $legalForm->legal_phone = $request->legal_phone;
                $legalForm->legal_telephone = $request->legal_telephone;
                $legalForm->legal_birth_place = $request->legal_birth_place;
                $legalForm->legal_residence_place = $request->legal_residence_place;
                $legalForm->legal_employees_number = $request->legal_employees_number;

                //CompaniesTable
                $data->establishment_date = $request->establishment_date;
                $data->expiry_date = $request->expiry_date;
                //CompaniesPersonAuthorizedTable
                $personAuthorized->person_authorized_name = $request->person_authorized_name;
                $personAuthorized->person_authorized_nationality = $request->person_authorized_nationality;
                $personAuthorized->person_authorized_id_type = $request->person_authorized_id_type;
                $personAuthorized->person_authorized_id_number = $request->person_authorized_id_number;
                break;
            //step 3
            case $step == 3:
                //CompaniesManagersTable
                $managers->manager1_name = $request->manager1_name;
                $managers->manager1_id_num = $request->manager1_id_num;
                $managers->manager1_date = $request->manager1_date;
                $managers->manager2_name = $request->manager2_name;
                $managers->manager2_id_num = $request->manager2_id_num;
                $managers->manager2_date = $request->manager2_date;
                $managers->manager3_name = $request->manager3_name;
                $managers->manager3_id_num = $request->manager3_id_num;
                $managers->manager3_date = $request->manager3_date;

                break;
            //step 4    
            case $step == 4:
                //CompaniesBoardMembersTable
                $boardMembers->member1_name = $request->member1_name;
                $boardMembers->member1_id_num = $request->member1_id_num;
                $boardMembers->member1_date = $request->member1_date;
                $boardMembers->member2_name = $request->member2_name;
                $boardMembers->member2_id_num = $request->member2_id_num;
                $boardMembers->member2_date = $request->member2_date;
                $boardMembers->member3_name = $request->member3_name;
                $boardMembers->member3_id_num = $request->member3_id_num;
                $boardMembers->member3_date = $request->member3_date;
                $boardMembers->member4_name = $request->member4_name;
                $boardMembers->member4_id_num = $request->member4_id_num;
                $boardMembers->member4_date = $request->member4_date;

                break;
            //step 5
            case $step == 5:
                //CompaniesOwnershipStructureTable
                $ownershipStructure->ownership1_name = $request->ownership1_name;
                $ownershipStructure->ownership1_num_id = $request->ownership1_num_id;
                $ownershipStructure->ownership1_percentage = $request->ownership1_percentage;
                $ownershipStructure->ownership1_date = $request->ownership1_date;
                $ownershipStructure->ownership2_name = $request->ownership2_name;
                $ownershipStructure->ownership2_num_id = $request->ownership2_num_id;
                $ownershipStructure->ownership2_percentage = $request->ownership2_percentage;
                $ownershipStructure->ownership2_date = $request->ownership2_date;
                $ownershipStructure->ownership3_name = $request->ownership3_name;
                $ownershipStructure->ownership3_num_id = $request->ownership3_num_id;
                $ownershipStructure->ownership3_percentage = $request->ownership3_percentage;
                $ownershipStructure->ownership3_date = $request->ownership3_date;
                $ownershipStructure->ownership4_name = $request->ownership4_name;
                $ownershipStructure->ownership4_num_id = $request->ownership4_num_id;
                $ownershipStructure->ownership4_percentage = $request->ownership4_percentage;
                $ownershipStructure->ownership4_date = $request->ownership4_date;
                break;
            //step 6
            case $step == 6:
                //CompaniesContactDataTable
                $contactData->contact_data_name = $request->contact_data_name;
                $contactData->contact_data_district = $request->contact_data_district;
                $contactData->contact_data_street = $request->contact_data_street;
                $contactData->contact_data_build_num = $request->contact_data_build_num;
                $contactData->contact_data_post_code = $request->contact_data_post_code;
                $contactData->contact_data_city_name = $request->contact_data_city_name;
                $contactData->contact_data_additional_code = $request->contact_data_additional_code;
                $contactData->contact_data_country_name = $request->contact_data_country_name;
                $contactData->contact_data_correspondence_mechanism = $request->contact_data_correspondence_mechanism;
                $contactData->contact_data_correspondence_lang = $request->contact_data_correspondence_lang;
                $contactData->contact_data_officer_name = $request->contact_data_officer_name;
                $contactData->contact_data_position = $request->contact_data_position;
                $contactData->contact_data_phone1 = $request->contact_data_phone1;
                $contactData->contact_data_phone2 = $request->contact_data_phone2;
                $contactData->contact_data_email = $request->contact_data_email;

                break;
            //step 7
            case $step == 7:
                $data->not_residing_sa = $request->not_residing_sa;
                //CompaniesModel1Table
                $model1->model1_build_num = $request->model1_build_num;
                $model1->model1_sub_build_num = $request->model1_sub_build_num;
                $model1->model1_post_code = $request->model1_post_code;
                $model1->model1_post_box = $request->model1_post_box;
                $model1->model1_city_name = $request->model1_city_name;
                $model1->model1_country_name = $request->model1_country_name;
                //CompaniesTable
                $data->is_real_beneficiary = $request->is_real_beneficiary;
                $data->beneficiary_status = $request->beneficiary_status;
                //CompaniesModel2Table
                $model2->model2_full_name = $request->model2_full_name;
                $model2->model2_customer_relationship = $request->model2_customer_relationship;
                $model2->model2_id_num = $request->model2_id_num;
                $model2->model2_expire_date = $request->model2_expire_date;
                $model2->model2_address = $request->model2_address;
                $model2->model2_birth_date = $request->model2_birth_date;
                $model2->model2_phone = $request->model2_phone;
                $model2->model2_telephone = $request->model2_telephone;
                $model2->model2_email = $request->model2_email;
                break;
            //step 8
            case $step == 8:
                $data->is_company_usa = $request->is_company_usa;
                $data->is_taxable = $request->is_taxable;
                $data->country_taxable_true = $request->country_taxable_true;
                //CompaniesModel3Table
                $model3->model3_specific_american_person = $request->model3_specific_american_person;
                $model3->model3_us_tin = $request->model3_us_tin;
                $model3->model3_is_saudi_financial = $request->model3_is_saudi_financial;
                $model3->model3_non_us_financial = $request->model3_non_us_financial;
                $model3->model3_non_us_giin = $request->model3_non_us_giin;
                $model3->model3_obligated_register = $request->model3_obligated_register;
                $model3->model3_obligated_giin = $request->model3_obligated_giin;
                $model3->model3_obliged_comply = $request->model3_obliged_comply;
                $model3->model3_not_participating = $request->model3_not_participating;
                $model3->model3_exempt_beneficiary = $request->model3_exempt_beneficiary;
                $model3->model3_exempt_foreign_entities = $request->model3_exempt_foreign_entities;
                $model3->model3_active_foreign_entities = $request->model3_active_foreign_entities;
                $model3->model3_notactive_foreign_entities = $request->model3_notactive_foreign_entities;
                $model3->model3_tax_identification_num = $request->model3_tax_identification_num;
                $model3->model3_tax_us_tin = $request->model3_tax_us_tin;
                $model3->model3_entity1_name = $request->model3_entity1_name;
                $model3->model3_entity1_address = $request->model3_entity1_address;
                $model3->model3_entity1_ownership = $request->model3_entity1_ownership;
                $model3->model3_entity1_tax = $request->model3_entity1_tax;
                $model3->model3_entity2_name = $request->model3_entity2_name;
                $model3->model3_entity2_address = $request->model3_entity2_address;
                $model3->model3_entity2_ownership = $request->model3_entity2_ownership;
                $model3->model3_entity2_tax = $request->model3_entity2_tax;
                $model3->model3_entity3_name = $request->model3_entity3_name;
                $model3->model3_entity3_address = $request->model3_entity3_address;
                $model3->model3_entity3_ownership = $request->model3_entity3_ownership;
                $model3->model3_entity3_tax = $request->model3_entity3_tax;
                $model3->model3_entity4_name = $request->model3_entity4_name;
                $model3->model3_entity4_address = $request->model3_entity4_address;
                $model3->model3_entity4_ownership = $request->model3_entity4_ownership;
                $model3->model3_entity4_tax = $request->model3_entity4_tax;
                break;
            //step 9
            case $step == 9:
                $data->supervision_authority = $request->supervision_authority;
                $data->supervision_authority_true = $request->supervision_authority_true;
                $data->refused_open_account = $request->refused_open_account;
                $data->clients_other_countries = $request->clients_other_countries;
                $data->clients_other_countries_true = $request->clients_other_countries_true;
                $data->monitor_terrorism_list = $request->monitor_terrorism_list;
                $data->monitor_terrorism_list_true = $request->monitor_terrorism_list_true;
                $data->documents_request = $request->documents_request;
                $data->documents_request_true = $request->documents_request_true;
                $data->regulatory_standards = $request->regulatory_standards;
                $data->regulatory_standards_true = $request->regulatory_standards_true;
                $data->review_customer_data = $request->review_customer_data;
                $data->review_customer_data_true = $request->review_customer_data_true;
                $data->know_real_person = $request->know_real_person;
                $data->money_control_system = $request->money_control_system;
                $data->employees_qualify = $request->employees_qualify;
                $data->matching_official = $request->matching_official;
                $data->matching_official_true = $request->matching_official_true;
                $data->your_jurisdiction = $request->your_jurisdiction;
                $data->your_jurisdiction_true = $request->your_jurisdiction_true;

                
                break;
            //step 10
            case $step == 10:
                $data->has_custodian = $request->has_custodian;
                //CompaniesModel4Table
                $model4->model4_full_name = $request->model4_full_name;
                $model4->model4_address = $request->model4_address;
                $model4->model4_account_name = $request->model4_account_name;
                $model4->model4_account_number = $request->model4_account_number;
                //CompaniesCertificatesTable
                $certificates->certificates_client = $request->certificates_client;
                $certificates->certificates_custodian = $request->certificates_custodian;
                $certificates->certificates_other_hand = $request->certificates_other_hand;
                //CompaniesProfitSharesTable
                $profitShares->profit_shares_client = $request->profit_shares_client;
                $profitShares->profit_shares_custodian = $request->profit_shares_custodian;
                $profitShares->profit_shares_other_hand = $request->profit_shares_other_hand;
                //CompaniesSaleProceedsTable
                $saleProceeds->sale_proceeds_client = $request->sale_proceeds_client;
                $saleProceeds->sale_proceeds_custodian = $request->sale_proceeds_custodian;
                $saleProceeds->sale_proceeds_other_hand = $request->sale_proceeds_other_hand;
                break;
            //step 11
            case $step == 11:
                //CompaniesBankTable
                $bank->bank1_name = $request->bank1_name;
                $bank->bank1_address = $request->bank1_address;
                $bank->bank1_account_name = $request->bank1_account_name;
                $bank->bank1_account_num = $request->bank1_account_num;
                $bank->bank2_name = $request->bank2_name;
                $bank->bank2_address = $request->bank2_address;
                $bank->bank2_account_name = $request->bank2_account_name;
                $bank->bank2_account_num = $request->bank2_account_num;
                break;
            //step 12
            case $step == 12:
                $data->is_related_board_member = $request->is_related_board_member;
                $data->is_charged_higher_duties = $request->is_charged_higher_duties;
                $data->is_owner_or_shareholder = $request->is_owner_or_shareholder;
                //CompaniesModel5Table
                $model5->model5_name = $request->model5_name;
                $model5->model5_section = $request->model5_section;
                $model5->model5_position = $request->model5_position;
                $model5->model5_degree = $request->model5_degree;
                $model5->model5_relative_relation = $request->model5_relative_relation;
                $model5->model5_country = $request->model5_country;
                $model5->model5_company_name = $request->model5_company_name;
                break;
            //step 13
            case $step == 13:
                $data->net_assets = $request->net_assets;
                break;
            //step 14
            case $step == 14:
                $data->have_other_experiences = $request->have_other_experiences;
                $data->other_experiences_true = $request->other_experiences_true;
                $data->other_financial_information = $request->other_financial_information;
                $data->loan_ratio = $request->loan_ratio;
                $data->financing_deals = $request->financing_deals;
                $data->investment_experience = $request->investment_experience;
                $data->customer_ability_take_risks = $request->customer_ability_take_risks;
                break;
            //step 15
            case $step == 15:
                $data->general_investment_goals = $request->general_investment_goals;
                $data->Recovery_invested_money = $request->Recovery_invested_money;
                $data->preferred_investment_assets = $request->preferred_investment_assets;
                $data->currency_other = $request->currency_other;
                break;
            //step 16
            case $step == 16:
                $data->previously_invested_products = $request->previously_invested_products;
                $data->knowledge_level = $request->knowledge_level;
                $data->trading_years = $request->trading_years;
                $data->deals_number = $request->deals_number;
                $data->transaction_volume = $request->transaction_volume;
                $data->transactions_outside_kingdom = $request->transactions_outside_kingdom;
                break;
            //step 17
            case $step == 17:
                $data->make_decision = $request->make_decision;
                $data->current_investment_represents = $request->current_investment_represents;
                $data->investment_value = $request->investment_value;
                $data->market_authority_regulations = $request->market_authority_regulations;
                //CompaniesAttachmentTable
                if($request->hasFile("attachment_a")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_a);
                    $extension = $request->file('attachment_a')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_a')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_a = $filename;
                }
                if($request->hasFile("attachment_b")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_b);
                    $extension = $request->file('attachment_b')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_b')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_b = $filename;
                }
                if($request->hasFile("attachment_c")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_c);
                    $extension = $request->file('attachment_c')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_c')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_c = $filename;
                }
                if($request->hasFile("attachment_d")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_d);
                    $extension = $request->file('attachment_d')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_d')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_d = $filename;
                }
                if($request->hasFile("attachment_e")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_e);
                    $extension = $request->file('attachment_e')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_e')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_e = $filename;
                }
                if($request->hasFile("attachment_f")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_f);
                    $extension = $request->file('attachment_f')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_f')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_f = $filename;
                }
                break;
            //step 18
            case $step == 18:
                //CompaniesCustomerAcceptanceFormTable
                $customerAcceptanceForm->acceptance_form_investments_box = $request->acceptance_form_investments_box;
                $customerAcceptanceForm->acceptance_form_portfolio_management = $request->acceptance_form_portfolio_management;
                $customerAcceptanceForm->acceptance_form_order = $request->acceptance_form_order;
                $customerAcceptanceForm->acceptance_form_save = $request->acceptance_form_save;
                $customerAcceptanceForm->acceptance_form_advice = $request->acceptance_form_advice;
                $customerAcceptanceForm->acceptance_form_other = $request->acceptance_form_other;
                $customerAcceptanceForm->acceptance_form_client_rating = $request->acceptance_form_client_rating;
                $customerAcceptanceForm->acceptance_form_classification_reason = $request->acceptance_form_classification_reason;
                $customerAcceptanceForm->acceptance_form_suitable_for_customer = $request->acceptance_form_suitable_for_customer;
                $customerAcceptanceForm->acceptance_form_risk_degree = $request->acceptance_form_risk_degree;
                $customerAcceptanceForm->acceptance_form_risk_reason = $request->acceptance_form_risk_reason;
                break;
            //step 19
            case $step == 19:
                //CompaniesMoneyLaunderingRisksTable
                $moneyLaunderingRisks->laundering_is_political_person = $request->laundering_is_political_person;
                $moneyLaunderingRisks->laundering_political_person_true = $request->laundering_political_person_true;
                $moneyLaunderingRisks->laundering_geographical_risk = $request->laundering_geographical_risk;
                $moneyLaunderingRisks->laundering_geographical_risk_true = $request->laundering_geographical_risk_true;
                $moneyLaunderingRisks->laundering_invest_mony_own = $request->laundering_invest_mony_own;
                $moneyLaunderingRisks->laundering_invest_mony_other = $request->laundering_invest_mony_other;
                $moneyLaunderingRisks->laundering_high_risk_work = $request->laundering_high_risk_work;
                $moneyLaunderingRisks->laundering_high_risk_work_true = $request->laundering_high_risk_work_true;
                $moneyLaunderingRisks->laundering_activity_secondry_income = $request->laundering_activity_secondry_income;
                $moneyLaunderingRisks->laundering_client_background_services = $request->laundering_client_background_services;
                $moneyLaunderingRisks->laundering_final_risk_level = $request->laundering_final_risk_level;
                $moneyLaunderingRisks->laundering_classification_reason = $request->laundering_classification_reason;
                break;
            //step 20
            case $step == 20:
                $data->account_opening_agreement = $request->account_opening_agreement;
                $data->account_opening = implode(",",$request->account_opening);
                $data->account_fit_report = $request->account_fit_report;
                $data->account_special_instructions = $request->account_special_instructions;
                //CompaniesAttachmentTable
                if($request->hasFile("attachment_attachment_commercial_register_copy")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_attachment_commercial_register_copy);
                    $extension = $request->file('attachment_attachment_commercial_register_copy')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_attachment_commercial_register_copy')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_attachment_commercial_register_copy = $filename;
                }
                if($request->hasFile("attachment_establishment_contract_copy")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_establishment_contract_copy);
                    $extension = $request->file('attachment_establishment_contract_copy')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_establishment_contract_copy')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_establishment_contract_copy = $filename;
                }
                if($request->hasFile("attachment_company_owner_list")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_company_owner_list);
                    $extension = $request->file('attachment_company_owner_list')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_company_owner_list')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_company_owner_list = $filename;
                }
                if($request->hasFile("attachment_decision_appointing_copy")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_decision_appointing_copy);
                    $extension = $request->file('attachment_decision_appointing_copy')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_decision_appointing_copy')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_decision_appointing_copy = $filename;
                }
                if($request->hasFile("attachment_board_directors_id_copy")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_board_directors_id_copy);
                    $extension = $request->file('attachment_board_directors_id_copy')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_board_directors_id_copy')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_board_directors_id_copy = $filename;
                }
                if($request->hasFile("attachment_account_open_decision_copy")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_account_open_decision_copy);
                    $extension = $request->file('attachment_account_open_decision_copy')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_account_open_decision_copy')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_account_open_decision_copy = $filename;
                }
                if($request->hasFile("attachment_letter_to_commissioners")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_letter_to_commissioners);
                    $extension = $request->file('attachment_letter_to_commissioners')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_letter_to_commissioners')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_letter_to_commissioners = $filename;
                }
                if($request->hasFile("attachment_article7")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_article7);
                    $extension = $request->file('attachment_article7')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_article7')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_article7 = $filename;
                }
                if($request->hasFile("attachment_licenses_copy")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_licenses_copy);
                    $extension = $request->file('attachment_licenses_copy')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_licenses_copy')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_licenses_copy = $filename;
                }
                if($request->hasFile("attachment_decision_account_copy")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_decision_account_copy);
                    $extension = $request->file('attachment_decision_account_copy')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_decision_account_copy')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_decision_account_copy = $filename;
                }
                if($request->hasFile("attachment_letter_manage_account")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_letter_manage_account);
                    $extension = $request->file('attachment_letter_manage_account')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_letter_manage_account')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_letter_manage_account = $filename;
                }
                if($request->hasFile("attachment_primary_law")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_primary_law);
                    $extension = $request->file('attachment_primary_law')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_primary_law')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_primary_law = $filename;
                }
                if($request->hasFile("attachment_basic_documents")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_basic_documents);
                    $extension = $request->file('attachment_basic_documents')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_basic_documents')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_basic_documents = $filename;
                }
                if($request->hasFile("attachment_decision_authorized_person")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_decision_authorized_person);
                    $extension = $request->file('attachment_decision_authorized_person')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_decision_authorized_person')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_decision_authorized_person = $filename;
                }
                if($request->hasFile("attachment_ministry_finance_approval")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_ministry_finance_approval);
                    $extension = $request->file('attachment_ministry_finance_approval')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_ministry_finance_approval')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_ministry_finance_approval = $filename;
                }
                if($request->hasFile("attachment_endowment_deed")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_endowment_deed);
                    $extension = $request->file('attachment_endowment_deed')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_endowment_deed')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_endowment_deed = $filename;
                }
                if($request->hasFile("attachment_superintendent_id")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_superintendent_id);
                    $extension = $request->file('attachment_superintendent_id')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_superintendent_id')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_superintendent_id = $filename;
                }
                if($request->hasFile("attachment_beholder_decision")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_beholder_decision);
                    $extension = $request->file('attachment_beholder_decision')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_beholder_decision')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_beholder_decision = $filename;
                }
                if($request->hasFile("attachment_allowed")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_allowed);
                    $extension = $request->file('attachment_allowed')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_allowed')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_allowed = $filename;
                }
                if($request->hasFile("attachment_commercial_register")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_commercial_register);
                    $extension = $request->file('attachment_commercial_register')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_commercial_register')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_commercial_register = $filename;
                }
                if($request->hasFile("attachment_fund_articles_association")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_fund_articles_association);
                    $extension = $request->file('attachment_fund_articles_association')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_fund_articles_association')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_fund_articles_association = $filename;
                }


                if($request->hasFile("attachment_market_authority_license")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_market_authority_license);
                    $extension = $request->file('attachment_market_authority_license')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_market_authority_license')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_market_authority_license = $filename;
                }

                if($request->hasFile("attachment_approval_notice")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_approval_notice);
                    $extension = $request->file('attachment_approval_notice')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_approval_notice')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_approval_notice = $filename;
                }

                if($request->hasFile("attachment_terms_and_conditions")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_terms_and_conditions);
                    $extension = $request->file('attachment_terms_and_conditions')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_terms_and_conditions')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_terms_and_conditions = $filename;
                }

                if($request->hasFile("attachment_powers_delegates")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_powers_delegates);
                    $extension = $request->file('attachment_powers_delegates')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_powers_delegates')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_powers_delegates = $filename;
                }

                if($request->hasFile("attachment_verify_full_ownership")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_verify_full_ownership);
                    $extension = $request->file('attachment_verify_full_ownership')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_verify_full_ownership')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_verify_full_ownership = $filename;
                }

                if($request->hasFile("attachment_fundamental_system")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_fundamental_system);
                    $extension = $request->file('attachment_fundamental_system')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_fundamental_system')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_fundamental_system = $filename;
                }

                if($request->hasFile("attachment_commissioners_decision")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_commissioners_decision);
                    $extension = $request->file('attachment_commissioners_decision')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_commissioners_decision')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_commissioners_decision = $filename;
                }

                if($request->hasFile("attachment_commissioners_id")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_commissioners_id);
                    $extension = $request->file('attachment_commissioners_id')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_commissioners_id')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_commissioners_id = $filename;
                }

                if($request->hasFile("attachment_list_name_members")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_list_name_members);
                    $extension = $request->file('attachment_list_name_members')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_list_name_members')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_list_name_members = $filename;
                }

                if($request->hasFile("attachment_granting_powers_to_delegates")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_granting_powers_to_delegates);
                    $extension = $request->file('attachment_granting_powers_to_delegates')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_granting_powers_to_delegates')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_granting_powers_to_delegates = $filename;
                }

                if($request->hasFile("attachment_founding_agreement")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_founding_agreement);
                    $extension = $request->file('attachment_founding_agreement')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_founding_agreement')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_founding_agreement = $filename;
                }

                if($request->hasFile("attachment_headquarters_agreement_signed")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_headquarters_agreement_signed);
                    $extension = $request->file('attachment_headquarters_agreement_signed')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_headquarters_agreement_signed')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_headquarters_agreement_signed = $filename;
                }

                if($request->hasFile("attachment_decision_of_authorized_person")){
                    @unlink( base_path() . '/uploads/forms/'. $attachment->attachment_decision_of_authorized_person);
                    $extension = $request->file('attachment_decision_of_authorized_person')->getClientOriginalExtension();
                    $filename = rand(11111111, 99999999). '.' . $extension;
                    $request->file('attachment_decision_of_authorized_person')->move( base_path() . '/uploads/forms', $filename );
                    $attachment->attachment_decision_of_authorized_person = $filename;
                }
                

                break;
            //step 21
            case $step == 21:
                //CompaniesManagerApprovalTable
                $managerApproval->manager_approval_date = $request->manager_approval_date;
                $managerApproval->manager_approval_agreement_place = $request->manager_approval_agreement_place;
                $managerApproval->manager_approval_employee_name = $request->manager_approval_employee_name;
                $managerApproval->manager_approval_employee_signature = $request->manager_approval_employee_signature;
                $managerApproval->manager_approval_conformity_reason = $request->manager_approval_conformity_reason;
                $managerApproval->manager_approval_conformity_name = $request->manager_approval_conformity_name;
                $managerApproval->manager_approval_conformity_signature = $request->manager_approval_conformity_signature;
                $managerApproval->manager_approval_conformity_date = $request->manager_approval_conformity_date;
                $managerApproval->manager_approval_some_cases_reason = $request->manager_approval_some_cases_reason;
                $managerApproval->manager_approval_some_cases_name = $request->manager_approval_some_cases_name;
                $managerApproval->manager_approval_some_cases_signature = $request->manager_approval_some_cases_signature;
                $managerApproval->manager_approval_some_cases_date = $request->manager_approval_some_cases_date;
                $managerApproval->manager_approval_management_operations_num = $request->manager_approval_management_operations_num;
                $managerApproval->manager_approval_management_operations_name = $request->manager_approval_management_operations_name;
                $managerApproval->manager_approval_management_operations_job = $request->manager_approval_management_operations_job;
                $managerApproval->manager_approval_management_operations_signature = $request->manager_approval_management_operations_signature;
                $managerApproval->manager_approval_management_operations_date = $request->manager_approval_management_operations_date;
                break;
        }

        //Companies
        $data->save();
        //CompaniesAttachmentTable
        $attachment->save();
        //CompaniesBankTable
        $bank->save();
        //CompaniesBoardMembersTable
        $boardMembers->save();
        //CompaniesCertificatesTable
        $certificates->save();
        //CompaniesContactDataTable
        $contactData->save();
        //CompaniesCustomerAcceptanceFormTable
        $customerAcceptanceForm->save();
        //CompaniesLegalFormTable
        $legalForm->save();
        //CompaniesManagerApprovalTable
        $managerApproval->save();
        //CompaniesManagersTable
        $managers->save();
        //CompaniesModel1Table
        $model1->save();
        //CompaniesModel2Table
        $model2->save();
        //CompaniesModel3Table
        $model3->save();
        //CompaniesModel4Table
        $model4->save();
        //CompaniesModel5Table
        $model5->save();
        //CompaniesMoneyLaunderingRisksTable
        $moneyLaunderingRisks->save();
        //CompaniesOwnershipStructureTable
        $ownershipStructure->save();
        //CompaniesPersonAuthorizedTable
        $personAuthorized->save();
        //CompaniesProfitSharesTable
        $profitShares->save();
        //CompaniesSaleProceedsTable
        $saleProceeds->save();


        $nextStep = $step+1;
        //update session
        $company= $data;
        session()->put('company', $company);
        if($step == 21){
            return redirect("/")->with(['contact_message'=>trans('form.your regester is updated successfully')]);

        }
        return redirect("company-registration/step/$nextStep")->with(['contact_message'=>trans('form.your regester is updated successfully')]);

    }
    public function sendOTPCode($phone,$otp){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://www.msegat.com/gw/sendsms.php");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, TRUE);

		curl_setopt($ch, CURLOPT_POST, TRUE);

		$fields = <<<EOT
		{
			"userName":"Nomw",
			"numbers": "966.$phone",
			"userSender":"NOMWCAPITAL",
			"apiKey":"413c48f22a742194bb083bb010603b2f",
			"msg":"رمز التحقق للتسجيل في نمو كابتال هو $otp"
		}
		EOT;
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		  "Content-Type: application/json"
		));
		$response = curl_exec($ch);
		$info = curl_getinfo($ch);
		curl_close($ch);
    }
}
