@extends('layouts.admin')
@section('meta')
    <title>{{trans('home.registerIndividualMessages')}}</title>
@endsection
@section('content')

<div class="container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">{{trans('home.registerIndividualMessages')}}</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">{{trans('home.admin')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{url('admin/countries')}}">{{trans('home.registerIndividualMessages')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{trans('home.registerIndividualMessages')}}</li>
                </ol>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- Row-->
        <div class="row">

            <div class="ol-sm-12 col-xl-12 col-lg-12">
				<div class="card custom-card">
					<div class="">
						<div class="main-content-body main-content-body-contacts">
							<div class="main-contact-info-header pt-3">
								<div class="media">
									<div class="main-img-user">
										<img alt="avatar" src="{{url('resources/assets/back/img/users/1.jpg')}}">
									</div>
									<div class="media-body">
										<h4>{{$registerIndividualMessage->name}}</h4>
									</div>
								</div>
							</div>
							<div class="main-contact-info-body">
								<div>
									<h6>{{trans('home.registerIndividualMessages')}}</h6>
									<p>{{$registerIndividualMessage->message}}</p>
								</div>
								<div class="media-list">
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('home.type')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getType()}}</span>
											</div>
											<div>
												<label>{{trans('form.client_number')}}</label> <span class="tx-medium">{{$registerIndividualMessage->phone}}</span>
											</div>
											
											<div>
												<label>{{trans('form.number_investment')}}</label> <span class="tx-medium">{{$registerIndividualMessage->no_invistments}}</span>
											</div>
											<div>
												<label>{{trans('form.account_currency')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getCurrency()}}</span>
											</div>
											<div>
												<label>{{trans('form.wallet_type')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getWallet_type()}}</span>
											</div>
											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.nickname')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getIndividual_type()}}</span>
											</div>
											<div>
												<label>{{trans('form.first_name')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Info->f_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Father name')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Info->m_name}}</span>
											</div>
											<div>
												<label>{{trans('form.grand name')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Info->l_name}}</span>
											</div>
											<div>
												<label>{{trans('form.nationality')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Info->nationality}}</span>
											</div>
											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.dob_islamic')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Info->dob_islamic}}</span>
											</div>
											<div>
												<label>{{trans('form.dob_cristian')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Info->dob_cristian}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Country and place of birth')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Info->country}}</span>
											</div>
											<div>
												<label>{{trans('form.Place of residence')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Info->district}}</span>
											</div>
											<div>
												<label>{{trans('form.gender')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Info->getGender()}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.id_type')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Info->getPersonality_id()}}</span>
											</div>
											<div>
												<label>{{trans('form.marital status')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Info->getSocial_status()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.number of family members')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Info->no_family_members}}</span>
											</div>
											<div>
												<label>{{trans('form.The national address')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_contacts->national_address_name}}</span>
											</div>
											<div>
												<label>{{trans('form.District')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_contacts->national_address_region_name}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.street')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_contacts->national_address_area_name}}</span>
											</div>
											<div>
												<label>{{trans('form.build_num')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_contacts->national_address_build_num}}</span>
											</div>
											
											<div>
												<label>{{trans('form.mail_num')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_contacts->national_address_postal_code}}</span>
											</div>
											<div>
												<label>{{trans('form.city')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_contacts->national_address_city}}</span>
											</div>
											<div>
												<label>{{trans('form.additional code')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_contacts->national_address_additional_code}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.country')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_contacts->national_address_country}}</span>
											</div>
											<div>
												<label>{{trans('form.Correspondence mechanism')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_contacts->getNational_address_sender_type()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Correspondence language')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_contacts->getNational_address_sender_lang()}}</span>
											</div>
											<div>
												<label>{{trans('form.Mobile number')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_contacts->national_address_phone1}}</span>
											</div>
											<div>
												<label>{{trans('form.another number')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_contacts->national_address_phone2}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.email')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_contacts->national_address_email}}</span>
											</div>
											<div>
												<label>{{trans('form.Are you a non-resident person in Saudi Arabia?')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getIs_saudi_resident()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Model (1)')}} {{trans('form.build_num')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model1->model1_build_num}}</span>
											</div>
											<div>
												<label>{{trans('form.sub number')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model1->model1_sub_num}}</span>
											</div>
											<div>
												<label>{{trans('form.Postal code')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model1->model1_post_code}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.mail box')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model1->model1_post_box}}</span>
											</div>
											<div>
												<label>{{trans('form.city')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model1->model_1_city}}</span>
											</div>
											
											<div>
												<label>{{trans('form.country')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model1->model_1_country}}</span>
											</div>
											<div>
												<label>{{trans('form.Are you the real beneficiary of this account?')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getIs_registretion_beneficial()}}</span>
											</div>
											<div>
												<label>{{trans('form.The status of the beneficiary')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Beneficiary->getBeneficiary_status()}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Form (2) Related Party Information')}} {{trans('form.quadruple name')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Beneficiary->beneficiary_full_name}}</span>
											</div>
											<div>
												<label>{{trans('form.relative relation')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Beneficiary->beneficiary_relation}}</span>
											</div>
											
											<div>
												<label>{{trans('form.ID or residence number')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Beneficiary->beneficiary_ssn}}</span>
											</div>
											<div>
												<label>{{trans('form.Expiry date')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Beneficiary->beneficiary_ssn_expire_date}}</span>
											</div>
											<div>
												<label>{{trans('form.The national address')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Beneficiary->beneficiary_address}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.birth_date')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Beneficiary->beneficiary_birth_date}}</span>
											</div>
											<div>
												<label>{{trans('form.Mobile_numb')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Beneficiary->beneficiary_phone1}}</span>
											</div>
											
											<div>
												<label>{{trans('form.phone_num')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Beneficiary->beneficiary_phone2}}</span>
											</div>
											<div>
												<label>{{trans('form.email')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Beneficiary->beneficiary_email}}</span>
											</div>
											<div>
												<label>{{trans('form.Are you a person from the United States of America?')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getIs_american_resident()}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.If not (please indicate the country)')}}</label> <span class="tx-medium">{{$registerIndividualMessage->american_state}}</span>
											</div>
											<div>
												<label>{{trans('form.Do you have an immigrant visa or permanent residence in a country other than Saudi Arabia?')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getAnother_visa()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.If the answer is (yes), please indicate the status for each permanent residence')}}</label> <span class="tx-medium">{{$registerIndividualMessage->visa_name}}</span>
											</div>
											<div>
												<label>{{trans('form.Model (3)')}} {{trans('form.Social security number')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Assessor->tax_assessor_guarantee_num}}</span>
											</div>
											<div>
												<label>{{trans('form.The identification number of the taxpayer')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Assessor->tax_assessor_assigned_id}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Are you subject to taxes in any country or countries outside the Kingdom of Saudi Arabia?')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getTaxes_in_which_country_place()}}</span>
											</div>
											<div>
												<label>{{trans('form.If yes (please indicate the country)')}}</label> <span class="tx-medium">{{$registerIndividualMessage->taxes_in_which_country_place}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.A tax identification number for adoption cases')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Assessor->tax_assessor_adoption_tax_id_number}}</span>
											</div>
											<div>
												<label>{{trans('form.Please select your country of residence')}} {{trans('form.country')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Residency_Information->residency_country_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.tax identification number')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Residency_Information->residency_tax_identfire_num}}</span>
											</div>
											<div>
												<label>{{trans('form.In the absence of a tax identification number, please choose one of the reasons')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Residency_Information->getResidency_no_tax_identfire_num()}}</span>
											</div>
											<div>
												<label>{{trans('form.Was a custodian appointed by you?')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getCustodian_appointed()}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Model (4)')}} {{trans('form.quadruple name')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model3->model3_full_name}}</span>
											</div>
											<div>
												<label>{{trans('form.mailing address')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model3->model3_address}}</span>
											</div>
											
											<div>
												<label>{{trans('form.account_name')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model3->model3_account_name}}</span>
											</div>
											<div>
												<label>{{trans('form.account_num')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model3->model3_account_number}}</span>
											</div>
											<div>
												<label>{{trans('form.Certificates')}} </label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Certificates->certificates_client_name}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Custodian')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Certificates->certificates_custodian_name}}</span>
											</div>
											<div>
												<label>{{trans('form.Other party: Determine any instructions issued by him in relation to the party')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Certificates->certificates_other_hand}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Dividend shares or any other income')}} {{trans('form.client')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Profit_Shares->profit_client_name}}</span>
											</div>
											<div>
												<label>{{trans('form.Custodian')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Profit_Shares->profit_custodian_name}}</span>
											</div>
											<div>
												<label>{{trans('form.Other party: Determine any instructions issued by him in relation to the party')}} </label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Profit_Shares->profit_other_hand}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.sale proceeds')}} {{trans('form.client')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Sale_Proceeds->sale_client_name}}</span>
											</div>
											<div>
												<label>{{trans('form.Custodian')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Sale_Proceeds->sale_custodian_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Other party: Determine any instructions issued by him in relation to the party')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Sale_Proceeds->sale_other_hand}}</span>
											</div>
											<div>
												<label>{{trans('form.The main bank name')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Banks->main_bank_name}}</span>
											</div>
											<div>
												<label>{{trans('form.address')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Banks->main_bank_address}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Account holder name')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Banks->main_bank_account_name}}</span>
											</div>
											<div>
												<label>{{trans('form.account_num')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Banks->main_bank_account_num}}</span>
											</div>
											
											<div>
												<label>{{trans('form.The second bank name')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Banks->sub_bank_name}}</span>
											</div>
											<div>
												<label>{{trans('form.address')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Banks->sub_bank_address}}</span>
											</div>
											<div>
												<label>{{trans('form.Account holder name')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Banks->sub_bank_account_name}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.account_num')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Banks->sub_bank_account_num}}</span>
											</div>
											<div>
												<label>{{trans('form.Are you a member or related to a member of the board of directors, an audit committee, or a senior executive in a listed company or licensed by the Capital Market Authority, a securities brokerage company, or a person registered as a broker?')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getIs_member_or_related()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Are you a person who has held or is entrusted with higher missions in the Kingdom or in a foreign country, senior management positions, or a job in an international organization? Or related to this person (in which you have a blood relationship, or the husband up to the second degree, or a person close to him)?')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getIs_entrusted_tasks()}}</span>
											</div>
											<div>
												<label>{{trans('form.Do you own or share 10% or more in any listed company (in Tadawul Market)?')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getIs_owner_or_shareholder()}}</span>
											</div>
											<div>
												<label>{{trans('form.Model (5)')}} {{trans('form.Name of the person holding the position')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model5->model5_name}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.section')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model5->model5_section_name}}</span>
											</div>
											<div>
												<label>{{trans('form.position')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model5->model5_position_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Functional/government grade')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model5->model5_position_degree}}</span>
											</div>
											<div>
												<label>{{trans('form.relative relation')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model5->model5_relative_relation}}</span>
											</div>
											<div>
												<label>{{trans('form.country')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model5->model5_country_name}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Company name / entity name')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model5->model5_company_name}}</span>
											</div>
											<div>
												<label>{{trans('form.Education level (points)')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getEducational_level()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Employment status (points)')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getEmployment_status()}}</span>
											</div>
											<div>
												<label>{{trans('form.Model 6')}} {{trans('form.employer name')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model6->model6_employer_name}}</span>
											</div>
											<div>
												<label>{{trans('form.Business address')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model6->model6_employer_address}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.phone')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model6->model6_phone}}</span>
											</div>
											<div>
												<label>{{trans('form.position')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model6->model6_job_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.business sector')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model6->model6_section}}</span>
											</div>
											<div>
												<label>{{trans('form.Length of service')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model6->model6_service_duration}}</span>
											</div>
											<div>
												<label>{{trans('form.Model 7')}} {{trans('form.The name of the company/establishment')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model7->model7_company_name}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.activity type')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model7->model7_activity_type}}</span>
											</div>
											<div>
												<label>{{trans('form.position')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model7->model7_position}}</span>
											</div>
											
											<div>
												<label>{{trans('form.phone')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model7->model7_phone}}</span>
											</div>
											<div>
												<label>{{trans('form.office address')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model7->model7_office_address}}</span>
											</div>
											<div>
												<label>{{trans('form.Number of years of activity')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model7->model7_number_years_activity}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.countries you deal with')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Model7->model7_countries}}</span>
											</div>
											<div>
												<label>{{trans('form.Approximate Annual Income (in Saudi Riyals) [Points]')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getAnnual_income()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Approximate Net Worth (Excluding Home) (SAR)')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getNet_worth()}}</span>
											</div>
											<div>
												<label>{{trans('form.Sources of income')}} {{trans('form.job salary')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Source_Income->source_salary}}</span>
											</div>
											<div>
												<label>{{trans('form.legacy')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Source_Income->source_inherite}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.returns from investments')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Source_Income->source_investment_returns}}</span>
											</div>
											<div>
												<label>{{trans('form.private job')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Source_Income->source_private_job}}</span>
											</div>
											
											<div>
												<label>{{trans('form.other (please specify)')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Source_Income->source_other}}</span>
											</div>
											<div>
												<label>{{trans('form.Sources of wealth')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getSources_of_wealth()}}</span>
											</div>
											<div>
												<label>{{trans('form.other')}}</label> <span class="tx-medium">{{$registerIndividualMessage->sources_of_wealth_other}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Has the client ever worked in the financial sector during the past five years? (This includes, for example, working for financial market institutions, banks, financing companies, and insurance companies).')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getIs_workin_financial_sector()}}</span>
											</div>
											<div>
												<label>{{trans('form.Does the client have any other practical experience related to the financial sector?')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getIs_other_experiences()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Do you have any professional certifications? Please specify (for individual customers)')}} </label> <span class="tx-medium">{{$registerIndividualMessage->getIs_professional_certificates()}}</span>
											</div>
											<div>
												<label>{{trans('form.Has a financial institution ever refused to open an account for you?')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getIs_refused_private_account()}}</span>
											</div>
											<div>
												<label>{{trans('form.Is there any other information about the financial situation?')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getIs_other_info_financial()}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Percentage of Loans out of Total Invested Funds [Points]')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getLoan_ratio()}}</span>
											</div>
											<div>
												<label>{{trans('form.Margin Finance Transactions During the Previous Five Years [Points]')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getFinancing_deals()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Investment knowledge and experience [Points]')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getInvestment_knowledge()}}</span>
											</div>
											<div>
												<label>{{trans('form.customer ability to take risks')}}[ {{trans('form.points')}}  ] </label> <span class="tx-medium">{{$registerIndividualMessage->getTake_risk()}}</span>
											</div>
											<div>
												<label>{{trans('form.General investment goals')}} [ {{trans('form.points')}}  ] </label> <span class="tx-medium">{{$registerIndividualMessage->getInvestment_objectives()}}</span>
											</div>
										</div>
									</div> 
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.The period during which the customer expects to recover the invested money')}} [ {{trans('form.points')}}  ]</label> <span class="tx-medium">{{$registerIndividualMessage->getRefund_period()}}</span>
											</div>
											<div>
												<label>{{trans('form.What are the client preferred investment assets?')}} [ {{trans('form.points')}}  ]</label> <span class="tx-medium">{{$registerIndividualMessage->getInvestment_assets()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Foreign currencies should be indicated.')}}</label> <span class="tx-medium">{{$registerIndividualMessage->investment_assets_currency}}</span>
											</div>
											<div>
												<label>{{trans('form.Previously invested products')}}  [ {{trans('form.points')}}  ]  </label> <span class="tx-medium">{{$registerIndividualMessage->getInvestment_products()}}</span>
											</div>
											<div>
												<label>{{trans('form.Countries outside the Kingdom in which these attributes have been implemented')}}  </label> <span class="tx-medium">{{$registerIndividualMessage->countries_outside}}</span>
											</div>
											<div>
												<label>{{trans('form.level of knowledge and experience')}} [ {{trans('form.points')}}  ]  </label> <span class="tx-medium">{{$registerIndividualMessage->getKnowledge_level()}}</span>
											</div>
										</div>
									</div> 
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Years of trading/holding/investing')}} [ {{trans('form.points')}}  ]</label> <span class="tx-medium">{{$registerIndividualMessage->getTrading_years()}}</span>
											</div>
											<div>
												<label>{{trans('form.Estimated number of deals')}} [ {{trans('form.points')}}  ]</label> <span class="tx-medium">{{$registerIndividualMessage->getDeals_number()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Transaction volume')}} [ {{trans('form.points')}}  ] </label> <span class="tx-medium">{{$registerIndividualMessage->getDeals_volume()}}</span>
											</div>
											<div>
												<label>{{trans('form.Securities transactions outside the Kingdom during the previous five years')}} [ {{trans('form.points')}}  ]  </label> <span class="tx-medium">{{$registerIndividualMessage->getFinancial_deals_outside()}}</span>
											</div>
											<div>
												<label>{{trans('form.How did you make the decision to enter this investment?')}} [ {{trans('form.points')}}  ]  </label> <span class="tx-medium">{{$registerIndividualMessage->getMake_decision()}}</span>
											</div>
										</div>
									</div> 
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.What is the percentage of your current investment with us from the value of your current assets?')}} [ {{trans('form.points')}}  ]</label> <span class="tx-medium">{{$registerIndividualMessage->getCurrent_investment_ratio()}}</span>
											</div>
											<div>
												<label>{{trans('form.What is the value of your investment with us in this opportunity?')}}  [ {{trans('form.points')}}  ]</label> <span class="tx-medium">{{$registerIndividualMessage->getVolume_investment_withus()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.According to the regulations of the Capital Market Authority, it is not possible to invest more than 200,000 riyals (please choose one of the following options)')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getFinancial_market_regulations()}}</span>
											</div>
											<div>
												<label>{{trans('form.Services provided to the customer')}} {{trans('form.investment Funds')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_ServiceOffers->client_investments_box}}</span>
											</div>
											<div>
												<label>{{trans('form.portfolio management')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_ServiceOffers->client_portfolio_management}}</span>
											</div>
										</div>
									</div> 
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.ordering')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_ServiceOffers->client_order}}</span>
											</div>
											<div>
												<label>{{trans('form.save')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_ServiceOffers->client_save}}</span>
											</div>
											
											<div>
												<label>{{trans('form.advice')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_ServiceOffers->client_advice}}</span>
											</div>
											<div>
												<label>{{trans('form.other')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_ServiceOffers->client_other}}</span>
											</div>
											<div>
												<label>{{trans('form.Client rating')}} </label> <span class="tx-medium">{{$registerIndividualMessage->getClient_rating()}}</span>
											</div>
										</div>
									</div> 
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.reason for classification')}}</label> <span class="tx-medium">{{$registerIndividualMessage->rating_reason}}</span>
											</div>
											<div>
												<label>{{trans('form.Is the client a politically defined person or related to a political person? Or a senior position in a listed company or financial institution?')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getIs_politically_defined()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.If the answer is yes, specify the relationship and job grade.')}}</label> <span class="tx-medium">{{$registerIndividualMessage->politically_defined_true}}</span>
											</div>
											<div>
												<label>{{trans('form.Geographical risk: Does the customer have any dealings with high-risk countries or classified as money laundering countries?')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getIs_geographical_risk()}}</span>
											</div>
											<div>
												<label>{{trans('form.Is the name of the client, beneficial owners and delegates checked in the block list?')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getCheck_customer_name()}}</span>
											</div>
											<div>
												<label>{{trans('form.If yes, list these countries:')}}</label> <span class="tx-medium">{{$registerIndividualMessage->geographical_risk_true}}</span>
											</div>
										</div>
									</div> 
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Does the client invest his money for his own account?')}} </label> <span class="tx-medium">{{$registerIndividualMessage->getIs_private_account_investment()}}</span>
											</div>
											<div>
												<label>{{trans('form.Does the client invest his money for the account of other beneficiaries?')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getIs_investment_for_others()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Does the customer, in the nature of his work, engage in activities classified as high risk?')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getIs_investment_others()}}</span>
											</div>
											<div>
												<label>{{trans('form.If the answer is yes, list these actions:')}}</label> <span class="tx-medium">{{$registerIndividualMessage->investment_others_true}}</span>
											</div>
											<div>
												<label>{{trans('form.Are the client expected activities in line with the client annual income?')}} </label> <span class="tx-medium">{{$registerIndividualMessage->getCustomer_annual_income()}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Are the services provided to the client in line with the client background?')}} </label> <span class="tx-medium">{{$registerIndividualMessage->getIs_client_background()}}</span>
											</div>
											<div>
												<label>{{trans('form.Final risk assessment')}}</label> <span class="tx-medium">{{$registerIndividualMessage->getFinal_risk_assessment()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.reason for classification')}}</label> <span class="tx-medium">{{$registerIndividualMessage->final_risk_reason}}</span>
											</div>
											{{-- <div>
												<label>{{trans('form.Agreement to open an account')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_AccountOpening->account_opening_agreement}}</span>
											</div> --}}
											<div>
												<label>{{trans('form.Agreement to open an account')}} </label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_AccountOpening->getAccount_opening_set()}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											{{-- <div>
												<label>{{trans('form.fit report')}} </label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_AccountOpening->account_opening_fit_report}}</span>
											</div> --}}
											{{-- <div>
												<label>{{trans('form.Special instructions')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_AccountOpening->account_opening_special_instructions}}</span>
											</div> --}}
											
											<div>
												<label>{{trans('form.Relationship manager approval')}} {{trans('form.date')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Manager_Approval->manager_date}}</span>
											</div>
											<div>
												<label>{{trans('form.place of agreement')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Manager_Approval->manager_agreement_place}}</span>
											</div>
											<div>
												<label>{{trans('form.Company employee name')}} </label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Manager_Approval->manager_employee_name}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">						
											<div>
												<label>{{trans('form.The reason for rejecting the application')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Manager_Approval->manager_conformity_reason}}</span>
											</div>
											
											<div>
												<label>{{trans('form.name')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Manager_Approval->manager_conformity_name}}</span>
											</div>
											<div>
												<label>{{trans('form.the signature')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Manager_Approval->manager_conformity_signature}}</span>
											</div>
											<div>
												<label>{{trans('form.date')}} </label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Manager_Approval->manager_conformity_date}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.The reason for rejecting the application')}} </label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Manager_Approval->manager_some_cases_reason}}</span>
											</div>
											<div>
												<label>{{trans('form.name')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Manager_Approval->manager_some_cases_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.the signature')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Manager_Approval->manager_some_cases_signature}}</span>
											</div>
											<div>
												<label>{{trans('form.date')}} </label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Manager_Approval->manager_some_cases_date}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.client_number')}} </label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Manager_Approval->manager_management_operations_num}}</span>
											</div>
											<div>
												<label>{{trans('form.name')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Manager_Approval->manager_management_operations_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Position')}}</label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Manager_Approval->manager_management_operations_job}}</span>
											</div>
											<div>
												<label>{{trans('form.the signature')}} </label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Manager_Approval->manager_management_operations_signature}}</span>
											</div>
											<div>
												<label>{{trans('form.date')}} </label> <span class="tx-medium">{{$registerIndividualMessage->Individuals_Manager_Approval->manager_management_operations_date}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											@if (! empty($registerIndividualMessage->Individuals_Attachment->a))
												<div>
													<a href="{{url('uploads/forms/'.$registerIndividualMessage->Individuals_Attachment->a)}}" target="_blank">
														{{trans('form.Have you made transactions in the stock markets, the total value of which is not less than 40 million Saudi riyals, and not less than 10 transactions in each quarter during the past 12 months')}}</a>
												</div>
											@endif
											@if (! empty($registerIndividualMessage->Individuals_Attachment->b))
												<div>
													<a href="{{url('uploads/forms/'.$registerIndividualMessage->Individuals_Attachment->b)}}" target="_blank">
														{{trans('form.Is your net asset value not less than 5 million Saudi riyals?')}}</a>
												</div>
											@endif
											@if (! empty($registerIndividualMessage->Individuals_Attachment->c))
												<div>
													<a href="{{url('uploads/forms/'.$registerIndividualMessage->Individuals_Attachment->c)}}" target="_blank">
														{{trans('form.Have you ever worked for at least 3 years in the financial sector in a professional job related to investing in securities?')}}</a>
												</div>
											@endif
											@if (! empty($registerIndividualMessage->Individuals_Attachment->d))
												<div>
													<a href="{{url('uploads/forms/'.$registerIndividualMessage->Individuals_Attachment->d)}}" target="_blank">
														{{trans('form.Have you obtained a professional certificate specialized in the field of securities business accredited by an internationally recognized body?')}}</a>
												</div>
											@endif
											@if (! empty($registerIndividualMessage->Individuals_Attachment->e))
												<div>
													<a href="{{url('uploads/forms/'.$registerIndividualMessage->Individuals_Attachment->e)}}" target="_blank">
														{{trans('form.Have you obtained the general certificate for dealing in securities approved by the Capital Market Authority, and that your annual income is not less than 600,000 riyals in the past two years?')}}</a>
												</div>
											@endif
											@if (! empty($registerIndividualMessage->Individuals_Attachment->f))
												<div>
													<a href="{{url('uploads/forms/'.$registerIndividualMessage->Individuals_Attachment->f)}}" target="_blank">
														{{trans('form.Are you an employee registered with the fund manager of this opportunity?')}}</a>
												</div>
											@endif
											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											@if (! empty($registerIndividualMessage->Individuals_Attachment->attachment_national_id_copy))
												<div>
													<a href="{{url('uploads/forms/'.$registerIndividualMessage->Individuals_Attachment->attachment_national_id_copy)}}" target="_blank">
														{{trans('form.A copy of a valid national ID')}}</a>
												</div>
											@endif
											@if (! empty($registerIndividualMessage->Individuals_Attachment->attachment_national_gulf_id_copy))
												<div>
													<a href="{{url('uploads/forms/'.$registerIndividualMessage->Individuals_Attachment->attachment_national_gulf_id_copy)}}" target="_blank">
														{{trans('form.A copy of a valid national gulf ID')}}</a>
												</div>
											@endif								
											@if (! empty($registerIndividualMessage->Individuals_Attachment->attachment_passport))
												<div>
													<a href="{{url('uploads/forms/'.$registerIndividualMessage->Individuals_Attachment->attachment_passport)}}" target="_blank">
														{{trans('form.The passport is valid')}}</a>
												</div>
											@endif
											@if (! empty($registerIndividualMessage->Individuals_Attachment->attachment_residency_copy))
												<div>
													<a href="{{url('uploads/forms/'.$registerIndividualMessage->Individuals_Attachment->attachment_residency_copy)}}" target="_blank">
														{{trans('form.A valid residence permit')}}</a>
												</div>
											@endif											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											@if (! empty($registerIndividualMessage->Individuals_Attachment->attachment_marred_copy))
												<div>
													<a href="{{url('uploads/forms/'.$registerIndividualMessage->Individuals_Attachment->attachment_marred_copy)}}" target="_blank">
														{{trans('form.A valid copy of the passport')}}</a>
												</div>
											@endif
											@if (! empty($registerIndividualMessage->Individuals_Attachment->attachment_introduction_speech))
												<div>
													<a href="{{url('uploads/forms/'.$registerIndividualMessage->Individuals_Attachment->attachment_introduction_speech)}}" target="_blank">
														{{trans('form.Introduction letter from the employer')}}</a>
												</div>
											@endif
											@if (! empty($registerIndividualMessage->Individuals_Attachment->attachment_clear_address))
												<div>
													<a href="{{url('uploads/forms/'.$registerIndividualMessage->Individuals_Attachment->attachment_clear_address)}}" target="_blank">
														{{trans('form.Clear address in the home country')}}</a>
												</div>
											@endif											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											@if (! empty($registerIndividualMessage->Individuals_Attachment->attachment_diplomatic_card))
												<div>
													<a href="{{url('uploads/forms/'.$registerIndividualMessage->Individuals_Attachment->attachment_diplomatic_card)}}" target="_blank">
														{{trans('form.Diplomatic card for diplomats')}}</a>
												</div>
											@endif
											@if (! empty($registerIndividualMessage->Individuals_Attachment->attachment_embassy_letter))
												<div>
													<a href="{{url('uploads/forms/'.$registerIndividualMessage->Individuals_Attachment->attachment_embassy_letter)}}" target="_blank">
														{{trans('form.Introduction letter from the embassy')}}</a>
												</div>
											@endif
											@if (! empty($registerIndividualMessage->Individuals_Attachment->attachment_valid_passport))
												<div>
													<a href="{{url('uploads/forms/'.$registerIndividualMessage->Individuals_Attachment->attachment_valid_passport)}}" target="_blank">
														{{trans('form.A valid passport')}}</a>
												</div>
											@endif		
											@if (! empty($registerIndividualMessage->Individuals_Manager_Approval->manager_employee_signature))
												<div>
													<a href="{{url('uploads/forms/'.$registerIndividualMessage->Individuals_Manager_Approval->manager_employee_signature)}}" target="_blank">
														{{trans('form.Signature of the company employee')}}</a>
												</div>
											@endif	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        <!-- End Row -->
    </div>

@endsection
