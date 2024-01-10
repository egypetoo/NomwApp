@extends('layouts.admin')
@section('meta')
    <title>{{trans('home.registerCompanyMessages')}}</title>
@endsection
@section('content')

<div class="container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">{{trans('home.registerCompanyMessages')}}</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">{{trans('home.admin')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{url('admin/countries')}}">{{trans('home.registerCompanyMessages')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{trans('home.registerCompanyMessages')}}</li>
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
										<h4>{{$registerCompanyMessage->name}}</h4>
									</div>
								</div>
							</div>
							<div class="main-contact-info-body">
								<div>
									<h6>{{trans('home.registerCompanyMessages')}}</h6>
									<p>{{$registerCompanyMessage->message}}</p>
								</div>
								<div class="media-list">
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('home.type')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getType()}}</span>
											</div>
											<div>
												<label>{{trans('form.client_number')}}</label> <span class="tx-medium">{{$registerCompanyMessage->phone}}</span>
											</div>
											
											<div>
												<label>{{trans('form.number_investment')}}</label> <span class="tx-medium">{{$registerCompanyMessage->no_invistments}}</span>
											</div>
											<div>
												<label>{{trans('form.account_currency')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getCurrency()}}</span>
											</div>
											<div>
												<label>{{trans('form.wallet_type')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getWallet_type()}}</span>
											</div>
											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Trade Name')}}</label> <span class="tx-medium">{{$registerCompanyMessage->trade_name}}</span>
											</div>
											<div>
												<label>{{trans('form.Legal name')}}</label> <span class="tx-medium">{{$registerCompanyMessage->legal_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Legal form')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getLegal_form()}}</span>
											</div>
											<div>
												<label>{{trans('form.countries in which it operates')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LegalForm->legal_countries_operate}}</span>
											</div>
											<div>
												<label>{{trans('form.Commercial Registration No')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LegalForm->legal_commercial_registration_no}}</span>
											</div>
											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.website')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LegalForm->legal_website}}</span>
											</div>
											<div>
												<label>{{trans('form.Annual business volume')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LegalForm->legal_secondary_business_volume}}</span>
											</div>
											
											<div>
												<label>{{trans('form.registered address')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LegalForm->legal_address}}</span>
											</div>
											<div>
												<label>{{trans('form.country of registration')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LegalForm->legal_country_name}}</span>
											</div>
											<div>
												<label>{{trans('form.Mobile_numb')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LegalForm->legal_phone}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.phone')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LegalForm->legal_telephone}}</span>
											</div>
											<div>
												<label>{{trans('form.Country and place of birth')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LegalForm->legal_birth_place}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Place of residence')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LegalForm->legal_residence_place}}</span>
											</div>
											<div>
												<label>{{trans('form.Number of Employees')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LegalForm->legal_employees_number}}</span>
											</div>
											<div>
												<label>{{trans('form.Date of Establishment')}}</label> <span class="tx-medium">{{$registerCompanyMessage->establishment_date}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Expiry date')}}</label> <span class="tx-medium">{{$registerCompanyMessage->expiry_date}}</span>
											</div>
											<div>
												<label>{{trans('form.The person authorized to sign')}} {{trans('form.name')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Person_Authorized->person_authorized_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.nationality')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Person_Authorized->person_authorized_nationality}}</span>
											</div>
											<div>
												<label>{{trans('form.id_type')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Person_Authorized->person_authorized_id_type}}</span>
											</div>
											<div>
												<label>{{trans('form.ID Number')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Person_Authorized->person_authorized_id_number}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.manager')}} 1 {{trans('form.manager_name')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Managers->manager1_name}}</span>
											</div>
											<div>
												<label>{{trans('form.ID Number')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Managers->manager1_id_num}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Expiry date')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Managers->manager1_date}}</span>
											</div>
											<div>
												<label>{{trans('form.manager')}} 2 {{trans('form.manager_name')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Managers->manager2_name}}</span>
											</div>
											<div>
												<label>{{trans('form.ID Number')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Managers->manager2_id_num}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Expiry date')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Managers->manager2_date}}</span>
											</div>
											<div>
												<label>{{trans('form.manager')}} 3 {{trans('form.manager_name')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Managers->manager3_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.ID Number')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Managers->manager3_id_num}}</span>
											</div>
											<div>
												<label>{{trans('form.Expiry date')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Managers->manager3_date}}</span>
											</div>
											<div>
												<label>{{trans('form.member')}} 1 {{trans('form.member_name')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Board_Members->member1_name}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.ID Number')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Board_Members->member1_id_num}}</span>
											</div>
											<div>
												<label>{{trans('form.Expiry date')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Board_Members->member1_date}}</span>
											</div>
											
											<div>
												<label>{{trans('form.member')}} 2 {{trans('form.member_name')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Board_Members->member2_name}}</span>
											</div>
											<div>
												<label>{{trans('form.ID Number')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Board_Members->member2_id_num}}</span>
											</div>
											<div>
												<label>{{trans('form.Expiry date')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Board_Members->member2_date}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.member')}} 3 {{trans('form.member_name')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Board_Members->member3_name}}</span>
											</div>
											<div>
												<label>{{trans('form.ID Number')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Board_Members->member3_id_num}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Expiry date')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Board_Members->member3_date}}</span>
											</div>
											<div>
												<label>{{trans('form.member_name')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Board_Members->member4_name}}</span>
											</div>
											<div>
												<label>{{trans('form.ID Number')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Board_Members->member4_id_num}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Expiry date')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Board_Members->member4_date}}</span>
											</div>
											<div>
												<label>{{trans('form.owner')}} 1 {{trans('form.owner_name')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Ownership_Structure->ownership1_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.ID Number')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Ownership_Structure->ownership1_num_id}}</span>
											</div>
											<div>
												<label>{{trans('form.ownership percentage')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Ownership_Structure->ownership1_percentage}}</span>
											</div>
											<div>
												<label>{{trans('form.Expiry date')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Ownership_Structure->ownership1_date}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.owner')}} 2 {{trans('form.owner_name')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Ownership_Structure->ownership2_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.ID Number')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Ownership_Structure->ownership2_num_id}}</span>
											</div>
											<div>
												<label>{{trans('form.ownership percentage')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Ownership_Structure->ownership2_percentage}}</span>
											</div>
											<div>
												<label>{{trans('form.Expiry date')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Ownership_Structure->ownership2_date}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.owner')}} 3 {{trans('form.owner_name')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Ownership_Structure->ownership3_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.ID Number')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Ownership_Structure->ownership3_num_id}}</span>
											</div>
											<div>
												<label>{{trans('form.ownership percentage')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Ownership_Structure->ownership3_percentage}}</span>
											</div>
											<div>
												<label>{{trans('form.Expiry date')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Ownership_Structure->ownership3_date}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.owner')}} 4 {{trans('form.owner_name')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Ownership_Structure->ownership4_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.ID Number')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Ownership_Structure->ownership4_num_id}}</span>
											</div>
											<div>
												<label>{{trans('form.ownership percentage')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Ownership_Structure->ownership4_percentage}}</span>
											</div>
											<div>
												<label>{{trans('form.Expiry date')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Ownership_Structure->ownership4_date}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.The national address')}} {{trans('form.name')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_ContactData->contact_data_name}}</span>
											</div>
											<div>
												<label>{{trans('form.District')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_ContactData->contact_data_district}}</span>
											</div>
											
											<div>
												<label>{{trans('form.street')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_ContactData->contact_data_street}}</span>
											</div>
											<div>
												<label>{{trans('form.build_num')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_ContactData->contact_data_build_num}}</span>
											</div>
											<div>
												<label>{{trans('form.mail_num')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_ContactData->contact_data_post_code}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.city')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_ContactData->contact_data_city_name}}</span>
											</div>
											<div>
												<label>{{trans('form.additional code')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_ContactData->contact_data_additional_code}}</span>
											</div>
											
											<div>
												<label>{{trans('form.country')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_ContactData->contact_data_country_name}}</span>
											</div>
											<div>
												<label>{{trans('form.Correspondence mechanism')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_ContactData->getContact_data_correspondence_mechanism()}}</span>
											</div>
											<div>
												<label>{{trans('form.Correspondence language')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_ContactData->getContact_data_correspondence_lang()}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Contact Data')}} {{trans('form.The name of the contact officer')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_ContactData->contact_data_officer_name}}</span>
											</div>
											<div>
												<label>{{trans('form.position')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_ContactData->contact_data_position}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Mobile number')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_ContactData->contact_data_phone1}}</span>
											</div>
											<div>
												<label>{{trans('form.another number')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_ContactData->contact_data_phone2}}</span>
											</div>
											<div>
												<label>{{trans('form.email')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_ContactData->contact_data_email}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Are you a non-resident person in Saudi Arabia?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getNot_residing_sa()}}</span>
											</div>
											<div>
												<label>{{trans('form.Model (1)')}} {{trans('form.build_num')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model1->model1_build_num}}</span>
											</div>
											
											<div>
												<label>{{trans('form.sub number')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model1->model1_sub_build_num}}</span>
											</div>
											<div>
												<label>{{trans('form.Postal code')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model1->model1_post_code}}</span>
											</div>
											<div>
												<label>{{trans('form.mail box')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model1->model1_post_box}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.city')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model1->model1_city_name}}</span>
											</div>
											<div>
												<label>{{trans('form.country')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model1->model1_country_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Are you the real beneficiary of this account?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getIs_real_beneficiary()}}</span>
											</div>
											<div>
												<label>{{trans('form.The status of the beneficiary')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getBeneficiary_status()}}</span>
											</div>
											<div>
												<label>{{trans('form.Form (2) Related Party Information')}} {{trans('form.quadruple name')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model2->model2_full_name}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Customer relationship')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model2->model2_customer_relationship}}</span>
											</div>
											<div>
												<label>{{trans('form.ID or residence number')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model2->model2_id_num}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Expiry date')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model2->model2_expire_date}}</span>
											</div>
											<div>
												<label>{{trans('form.The national address')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model2->model2_address}}</span>
											</div>
											<div>
												<label>{{trans('form.birth_date')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model2->model2_birth_date}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Mobile number')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model2->model2_phone}}</span>
											</div>
											<div>
												<label>{{trans('form.phone_num')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model2->model2_telephone}}</span>
											</div>
											
											<div>
												<label>{{trans('form.email')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model2->model2_email}}</span>
											</div>
											<div>
												<label>{{trans('form.Are you a company from the USA?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getIs_company_usa()}}</span>
											</div>
											<div>
												<label>{{trans('form.Are you subject to taxes in any country or countries outside the Kingdom of Saudi Arabia?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getIs_taxable()}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.If yes (please indicate the country)')}}</label> <span class="tx-medium">{{$registerCompanyMessage->country_taxable_true}}</span>
											</div>
											<div>
												<label>{{trans('form.Model (3)')}} {{trans('form.Are you an identifiable American person?')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->getModel3_specific_american_person()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.US tax identification number')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_us_tin}}</span>
											</div>
											<div>
												<label>{{trans('form.Are you a Saudi financial institution or a financial institution created or incorporated in the Kingdom under an intergovernmental agreement with the United States regarding FATCA?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->getModel3_is_saudi_financial()}}</span>
											</div>
											<div>
												<label>{{trans('form.Are you a participating non-US financial institution?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->getModel3_non_us_financial()}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>GIIN</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_non_us_giin}}</span>
											</div>
											<div>
												<label>{{trans('form.Are you a non-US financial institution that is required to register?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->getModel3_obligated_register()}}</span>
											</div>
											
											<div>
												<label>GIIN</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_obligated_giin}}</span>
											</div>
											<div>
												<label>{{trans('form.Are you a non-US financial institution that is required to comply?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->getModel3_obliged_comply()}}</span>
											</div>
											<div>
												<label>{{trans('form.Are you a non-US, non-participating financial institution?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->getModel3_not_participating()}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Are you an exempt beneficial owner?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->getModel3_exempt_beneficiary()}}</span>
											</div>
											<div>
												<label>{{trans('form.Are you an exempt non-US and non-financial entity? (This designation is also known as exempt non-financial foreign entities)')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->getModel3_exempt_foreign_entities()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Are you an active Non-US Non-Financial Entity? (This designation is known as Active Non-Financial Foreign Entity)')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->getModel3_active_foreign_entities()}}</span>
											</div>
											<div>
												<label>{{trans('form.Are you a passive non-US non-financial entity? (This designation is known as passive non-financial foreign entity)')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->getModel3_notactive_foreign_entities()}}</span>
											</div>
											<div>
												<label>{{trans('form.Do you have a tax identification number?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->getModel3_tax_identification_num()}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.US tax identification number')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_tax_us_tin}}</span>
											</div>
											<div>
												<label>{{trans('form.entity')}} 1 {{trans('form.The name of the US controlling person')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_entity1_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.US controlling person address')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_entity1_address}}</span>
											</div>
											<div>
												<label>{{trans('form.Percentage of ownership held by the US controlling person')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_entity1_ownership}}</span>
											</div>
											<div>
												<label>{{trans('form.The US tax identification number of the controlling person')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_entity1_tax}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.entity')}} 2 {{trans('form.The name of the US controlling person')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_entity2_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.US controlling person address')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_entity2_address}}</span>
											</div>
											<div>
												<label>{{trans('form.Percentage of ownership held by the US controlling person')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_entity2_ownership}}</span>
											</div>
											<div>
												<label>{{trans('form.The US tax identification number of the controlling person')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_entity2_tax}}</span>
											</div>
										</div>
									</div> 
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.entity')}} 3 {{trans('form.The name of the US controlling person')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_entity3_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.US controlling person address')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_entity3_address}}</span>
											</div>
											<div>
												<label>{{trans('form.Percentage of ownership held by the US controlling person')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_entity3_ownership}}</span>
											</div>
											<div>
												<label>{{trans('form.The US tax identification number of the controlling person')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_entity3_tax}}</span>
											</div>
										</div>
									</div> 
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.entity')}} 4 {{trans('form.The name of the US controlling person')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_entity4_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.US controlling person address')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_entity4_address}}</span>
											</div>
											<div>
												<label>{{trans('form.Percentage of ownership held by the US controlling person')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_entity4_ownership}}</span>
											</div>
											<div>
												<label>{{trans('form.The US tax identification number of the controlling person')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model3->model3_entity4_tax}}</span>
											</div>
										</div>
									</div> 
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Is your institution subject to the supervision of a local authority / body concerned with combating money laundering and combating the financing of terrorism?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getSupervision_authority()}}</span>
											</div>
											<div>
												<label>{{trans('form.If the answer is yes, please indicate the name of the supervising authority/body')}}</label> <span class="tx-medium">{{$registerCompanyMessage->supervision_authority_true}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Has a financial institution ever refused to open an account for you?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getRefused_open_account()}}</span>
											</div>
											<div>
												<label>{{trans('form.Do you do business with clients from other countries and do not apply the recommendations of the Financial Action Task Force (FATF)?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getClients_other_countries()}}</span>
											</div>
											<div>
												<label>{{trans('form.If yes, please explain:')}}</label> <span class="tx-medium">{{$registerCompanyMessage->clients_other_countries_true}}</span>
											</div>
										</div>
									</div> 
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Does your organization monitor any terrorist lists or any persons or countries in the banned lists?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getMonitor_terrorism_list()}}</span>
											</div>
											<div>
												<label>{{trans('form.If the answer is yes, please clarify the names from the lists')}}</label> <span class="tx-medium">{{$registerCompanyMessage->monitor_terrorism_list_true}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Does your organization require documents to be kept for a specific period after closing the account?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getRegulatory_standards()}}</span>
											</div>
											<div>
												<label>{{trans('form.If the answer is yes, how long is the retention period for the documents?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->documents_request_true}}</span>
											</div>
											<div>
												<label>{{trans('form.Do the directives and laws regulating the work of your branches and subsidiaries have the minimum regulatory standards for anti-money laundering and terrorist financing policies?')}} </label> <span class="tx-medium">{{$registerCompanyMessage->getRegulatory_standards()}}</span>
											</div>
										</div>
									</div> 
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.If the answer is yes, please provide us with the special policies to combat money laundering and terrorist financing')}}</label> <span class="tx-medium">{{$registerCompanyMessage->regulatory_standards_true}}</span>
											</div>
											<div>
												<label>{{trans('form.Does your organization require periodic review of customer data and transaction history?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getReview_customer_data()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.If yes, how many times')}}</label> <span class="tx-medium">{{$registerCompanyMessage->review_customer_data_true}}</span>
											</div>
											<div>
												<label>{{trans('form.Do regulations require identification of the true identity of customers, wealth assets, stakeholders and real beneficiaries of transactions managed through financial intermediaries?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getKnow_real_person()}}</span>
											</div>
											<div>
												<label>{{trans('form.Does your institution have a money monitoring system that enables you to discover any suspicious transactions and activities?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getMoney_control_system()}}</span>
											</div>
										</div>
									</div> 
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Do you qualify your employees in terms of anti-money laundering training?')}} </label> <span class="tx-medium">{{$registerCompanyMessage->getEmployees_qualify()}}</span>
											</div>
											<div>
												<label>{{trans('form.Does your organization have a compliance officer or a money laundering and anti-terrorism officer, as is the case in monitoring complaints?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getMatching_official()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.If the answer is yes, please provide the name and contact information')}}</label> <span class="tx-medium">{{$registerCompanyMessage->matching_official_true}}</span>
											</div>
											<div>
												<label>{{trans('form.Do laws and regulations in your jurisdiction allow: a) the opening or maintenance of anonymous or numbered accounts (account holder name not available)')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getYour_jurisdiction()}}</span>
											</div>
											<div>
												<label>{{trans('form.If you answered yes, please explain')}} </label> <span class="tx-medium">{{$registerCompanyMessage->your_jurisdiction_true}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Was a custodian appointed by you?')}} </label> <span class="tx-medium">{{$registerCompanyMessage->getHas_custodian()}}</span>
											</div>
											<div>
												<label>{{trans('form.Model (4)')}} {{trans('form.quadruple name')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model4->model4_full_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.mailing address')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model4->model4_address}}</span>
											</div>
											<div>
												<label>{{trans('form.account_name')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model4->model4_account_name}}</span>
											</div>
											<div>
												<label>{{trans('form.account_num')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model4->model4_account_number}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Certificates')}} {{trans('form.client')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Certificates->certificates_client}}</span>
											</div>
											<div>
												<label>{{trans('form.Custodian')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Certificates->certificates_custodian}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Other party: Determine any instructions issued by him in relation to the party')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Certificates->certificates_other_hand}}</span>
											</div>
											<div>
												<label>{{trans('form.client')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Sale_Proceeds->sale_proceeds_client}}</span>
											</div>
											<div>
												<label>{{trans('form.Custodian')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Sale_Proceeds->sale_proceeds_custodian}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Other party: Determine any instructions issued by him in relation to the party')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Sale_Proceeds->sale_proceeds_other_hand}}</span>
											</div>
											<div>
												<label>{{trans('form.The main bank name')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Bank->bank1_name}}</span>
											</div>
											
											<div>
												<label>{{trans('form.address')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Bank->bank1_address}}</span>
											</div>
											<div>
												<label>{{trans('form.Account holder name')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Bank->bank1_account_name}}</span>
											</div>
											<div>
												<label>{{trans('form.account_num')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Bank->bank1_account_num}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.The second bank name')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Bank->bank2_name}}</span>
											</div>
											<div>
												<label>{{trans('form.address')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Bank->bank2_address}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Account holder name')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Bank->bank2_account_name}}</span>
											</div>
											<div>
												<label>{{trans('form.account_num')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Bank->bank2_account_num}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Is one of the company owners, managers, or delegates a member of or related to a member of the board of directors, an audit committee, or a senior executive in a listed company or licensed by the Capital Market Authority, a securities brokerage company, or a person registered as a broker?')}} </label> <span class="tx-medium">{{$registerCompanyMessage->getIs_related_board_member()}}</span>
											</div>
											<div>
												<label>{{trans('form.Has one of the company owners, managers, or delegates held or been entrusted with higher missions in the Kingdom or in a foreign country, higher management positions, or a job in an international organization? Or related to this person (in which you have a blood relationship, or the husband up to the second degree, or a person close to him)?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getIs_charged_higher_duties()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Does one of the company owners, managers, or delegates own or share 10% or more in any company listed (in Tadawul Market)?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getIs_owner_or_shareholder()}}</span>
											</div>
											<div>
												<label>{{trans('form.Model (5)')}} {{trans('form.Name of the person holding the position')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model5->model5_name}}</span>
											</div>
											<div>
												<label>{{trans('form.section')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model5->model5_section}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.position')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model5->model5_position}}</span>
											</div>
											<div>
												<label>{{trans('form.Functional/government grade')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model5->model5_degree}}</span>
											</div>
											
											<div>
												<label>{{trans('form.relative relation')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model5->model5_relative_relation}}</span>
											</div>
											<div>
												<label>{{trans('form.country')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model5->model5_country}}</span>
											</div>
											<div>
												<label>{{trans('form.Company name / entity name')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Model5->model5_company_name}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Net assets (in Saudi Riyals)')}} [{{trans('form.points')}}] </label> <span class="tx-medium">{{$registerCompanyMessage->getNet_assets()}}</span>
											</div>
											<div>
												<label>{{trans('form.Does the client have any other practical experience related to the financial sector?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getHave_other_experiences()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.If the answer is yes, please specify years of experience')}}</label> <span class="tx-medium">{{$registerCompanyMessage->other_experiences_true}}</span>
											</div>
											<div>
												<label>{{trans('form.Is there any other information about the financial situation?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getOther_financial_information()}}</span>
											</div>
											<div>
												<label>{{trans('form.Percentage of Loans out of Total Invested Funds [Points]')}} </label> <span class="tx-medium">{{$registerCompanyMessage->getLoan_ratio()}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Margin Finance Transactions During the Previous Five Years [Points]')}}  </label> <span class="tx-medium">{{$registerCompanyMessage->getFinancing_deals()}}</span>
											</div>
											<div>
												<label>{{trans('form.Investment knowledge and experience [Points]')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getInvestment_experience()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.customer ability to take risks')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getCustomer_ability_take_risks()}}</span>
											</div>
											<div>
												<label>{{trans('form.General investment goals')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getGeneral_investment_goals()}}</span>
											</div>
											<div>
												<label>{{trans('form.The period during which the customer expects to recover the invested money')}} </label> <span class="tx-medium">{{$registerCompanyMessage->getRecovery_invested_money()}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.What are the client preferred investment assets?')}} </label> <span class="tx-medium">{{$registerCompanyMessage->getPreferred_investment_assets()}}</span>
											</div>
											<div>
												<label>{{trans('form.Foreign currencies should be indicated.')}}</label> <span class="tx-medium">{{$registerCompanyMessage->currency_other}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Previously invested products')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getPreviously_invested_products()}}</span>
											</div>
											<div>
												<label>{{trans('form.level of knowledge and experience')}} </label> <span class="tx-medium">{{$registerCompanyMessage->getKnowledge_level()}}</span>
											</div>
											<div>
												<label>{{trans('form.Years of trading/holding/investing')}} </label> <span class="tx-medium">{{$registerCompanyMessage->getTrading_years()}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Estimated number of deals')}} </label> <span class="tx-medium">{{$registerCompanyMessage->getDeals_number()}}</span>
											</div>
											<div>
												<label>{{trans('form.Transaction volume')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getTransaction_volume()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Securities transactions outside the Kingdom during the previous five years')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getTransactions_outside_kingdom()}}</span>
											</div>
											<div>
												<label>{{trans('form.How did you make the decision to enter this investment?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getMake_decision()}}</span>
											</div>
											<div>
												<label>{{trans('form.What is the percentage of your current investment with us from the value of your current assets?')}} </label> <span class="tx-medium">{{$registerCompanyMessage->getCurrent_investment_represents()}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.What is the value of your investment with us in this opportunity?')}} </label> <span class="tx-medium">{{$registerCompanyMessage->getInvestment_value()}}</span>
											</div>
											<div>
												<label>{{trans('form.According to the regulations of the Capital Market Authority, it is not possible to invest more than 200,000 riyals (please choose one of the following options)')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getMarket_authority_regulations()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.investment Funds')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_AcceptanceForm->acceptance_form_investments_box}}</span>
											</div>
											<div>
												<label>{{trans('form.portfolio management')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_AcceptanceForm->acceptance_form_portfolio_management}}</span>
											</div>
											<div>
												<label>{{trans('form.ordering')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_AcceptanceForm->acceptance_form_order}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.save')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_AcceptanceForm->acceptance_form_save}}</span>
											</div>
											<div>
												<label>{{trans('form.advice')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_AcceptanceForm->acceptance_form_advice}}</span>
											</div>
											
											<div>
												<label>{{trans('form.other')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_AcceptanceForm->acceptance_form_other}}</span>
											</div>
											<div>
												<label>{{trans('form.Client rating')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_AcceptanceForm->getAcceptance_form_client_rating()}}</span>
											</div>
											<div>
												<label>{{trans('form.reason for classification')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_AcceptanceForm->acceptance_form_classification_reason}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Is the offered product suitable for the customer?')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_AcceptanceForm->getAcceptance_form_suitable_for_customer()}}</span>
											</div>
											<div>
												<label>{{trans('form.The degree of risk assessment of the product offered to the customer')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_AcceptanceForm->getAcceptance_form_risk_degree()}}</span>
											</div>
											
											<div>
												<label>{{trans('form.reason for classification')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_AcceptanceForm->acceptance_form_risk_reason}}</span>
											</div>
											<div>
												<label>{{trans('form.Is the client a politically defined person or related to a political person? Or a senior position in a listed company or financial institution?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LaunderingRisks->getLaundering_is_political_person()}}</span>
											</div>
											<div>
												<label>{{trans('form.If the answer is yes, specify the relationship and job grade.')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LaunderingRisks->laundering_political_person_true}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Geographical risk: Does the customer have any dealings with high-risk countries or classified as money laundering countries?')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LaunderingRisks->getLaundering_geographical_risk()}}</span>
											</div>
											<div>
												<label>{{trans('form.If yes, list these countries:')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LaunderingRisks->laundering_geographical_risk_true}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Does the client invest his money for his own account?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LaunderingRisks->getLaundering_invest_mony_own()}}</span>
											</div>
											<div>
												<label>{{trans('form.Does the client invest his money for the account of other beneficiaries?')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LaunderingRisks->getLaundering_invest_mony_other()}}</span>
											</div>
											<div>
												<label>{{trans('form.Does the customer, in the nature of his work, engage in activities classified as high risk?')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LaunderingRisks->getLaundering_high_risk_work()}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.If the answer is yes, list these actions:')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LaunderingRisks->laundering_high_risk_work_true}}</span>
											</div>
											<div>
												<label>{{trans('form.If yes, list these countries:')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LaunderingRisks->laundering_geographical_risk_true}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Are the client expected activities in line with the client annual income?')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LaunderingRisks->getLaundering_activity_secondry_income()}}</span>
											</div>
											<div>
												<label>{{trans('form.Are the services provided to the client in line with the client background?')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LaunderingRisks->getLaundering_client_background_services()}}</span>
											</div>
											<div>
												<label>{{trans('form.Final risk assessment')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LaunderingRisks->getLaundering_final_risk_level()}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.reason for classification')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_LaunderingRisks->laundering_classification_reason}}</span>
											</div>
											<div>
												<label>{{trans('form.Agreement to open an account')}}</label> <span class="tx-medium">{{$registerCompanyMessage->account_opening_agreement}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Agreement to open an account')}}</label> <span class="tx-medium">{{$registerCompanyMessage->getAccount_opening()}}</span>
											</div>
											<div>
												<label>{{trans('form.fit report')}} </label> <span class="tx-medium">{{$registerCompanyMessage->account_fit_report}}</span>
											</div>
											<div>
												<label>{{trans('form.Special instructions')}} </label> <span class="tx-medium">{{$registerCompanyMessage->account_special_instructions}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.Relationship manager approval')}} {{trans('form.date')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Manager_Approval->manager_approval_date}}</span>
											</div>
											<div>
												<label>{{trans('form.Meeting Place')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Manager_Approval->manager_approval_agreement_place}}</span>
											</div>
											
											<div>
												<label>{{trans('form.Company employee name')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Manager_Approval->manager_approval_employee_name}}</span>
											</div>
											<div>
												<label>{{trans('form.Signature of the company employee')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Manager_Approval->manager_approval_employee_signature}}</span>
											</div>
											<div>
												<label>{{trans('form.The reason for rejecting the application')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Manager_Approval->manager_approval_conformity_reason}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.name')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Manager_Approval->manager_approval_conformity_name}}</span>
											</div>
											<div>
												<label>{{trans('form.the signature')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Manager_Approval->manager_approval_conformity_signature}}</span>
											</div>
											
											<div>
												<label>{{trans('form.date')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Manager_Approval->manager_approval_conformity_date}}</span>
											</div>
											<div>
												<label>{{trans('form.Some cases (CEO)')}} {{trans('form.The reason for rejecting the application')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Manager_Approval->manager_approval_some_cases_reason}}</span>
											</div>
											<div>
												<label>{{trans('form.name')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Manager_Approval->manager_approval_some_cases_name}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.the signature')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Manager_Approval->manager_approval_some_cases_signature}}</span>
											</div>
											<div>
												<label>{{trans('form.date')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Manager_Approval->manager_approval_some_cases_date}}</span>
											</div>
											
											<div>
												<label>{{trans('form.management operations')}} {{trans('form.client_number')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Manager_Approval->manager_approval_management_operations_num}}</span>
											</div>
											<div>
												<label>{{trans('form.name')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Manager_Approval->manager_approval_management_operations_name}}</span>
											</div>
											<div>
												<label>{{trans('form.Position')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Manager_Approval->manager_approval_management_operations_job}}</span>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											<div>
												<label>{{trans('form.the signature')}} </label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Manager_Approval->manager_approval_management_operations_signature}}</span>
											</div>
											<div>
												<label>{{trans('form.date')}}</label> <span class="tx-medium">{{$registerCompanyMessage->Companies_Manager_Approval->manager_approval_management_operations_date}}</span>
											</div>
											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_a))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_a)}}" target="_blank">
														{{trans('form.Have you made transactions in the stock markets, the total value of which is not less than 40 million Saudi riyals, and not less than 10 transactions in each quarter during the past 12 months')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_b))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_b)}}" target="_blank">
														{{trans('form.Is your net asset value not less than 5 million Saudi riyals?')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_c))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_c)}}" target="_blank">
														{{trans('form.Have you ever worked for at least 3 years in the financial sector in a professional job related to investing in securities?')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_d))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_d)}}" target="_blank">
														{{trans('form.Have you obtained a professional certificate specialized in the field of securities business accredited by an internationally recognized body?')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_e))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_e)}}" target="_blank">
														{{trans('form.Have you obtained the general certificate for dealing in securities approved by the Capital Market Authority, and that your annual income is not less than 600,000 riyals in the past two years?')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_f))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_f)}}" target="_blank">
														{{trans('form.Are you an employee registered with the fund manager of this opportunity?')}}</a>
												</div>
											@endif
											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_attachment_commercial_register_copy))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_attachment_commercial_register_copy)}}" target="_blank">
														{{trans('form.A copy of the commercial register')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_establishment_contract_copy))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_establishment_contract_copy)}}" target="_blank">
														{{trans('form.A copy of the Memorandum of Association / Articles of Association and its appendices')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_company_owner_list))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_company_owner_list)}}" target="_blank">
														{{trans('form.A list of the company owners and copies of their identities')}}</a>
												</div>
											@endif											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_decision_appointing_copy))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_decision_appointing_copy)}}" target="_blank">
														{{trans('form.Copies of the decision appointing the Board of Directors')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_board_directors_id_copy))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_board_directors_id_copy)}}" target="_blank">
														{{trans('form.Copies of the identities of the members of the board of directors, the general manager and the authorized managers')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_account_open_decision_copy))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_account_open_decision_copy)}}" target="_blank">
														{{trans('form.A copy of the decision issued to open the account')}}</a>
												</div>
											@endif											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_letter_to_commissioners))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_letter_to_commissioners)}}" target="_blank">
														{{trans('form.A letter to the delegates to manage the account')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_article7))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_article7)}}" target="_blank">
														{{trans('form.In the case of a listed company - Article (7) of the Investment Accounts Instructions shall be referred to')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_licenses_copy))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_licenses_copy)}}" target="_blank">
														{{trans('form.Copy of licenses and articles of association')}}</a>
												</div>
											@endif											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_decision_account_copy))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_decision_account_copy)}}" target="_blank">
														{{trans('form.A copy of the decision issued to open the account')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_letter_manage_account))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_letter_manage_account)}}" target="_blank">
														{{trans('form.A letter to the delegates to manage the account')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_primary_law))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_primary_law)}}" target="_blank">
														{{trans('form.The Articles of Association, provided that it includes an explicit text permitting investment in securities')}}</a>
												</div>
											@endif											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_basic_documents))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_basic_documents)}}" target="_blank">
														{{trans('form.The basic documents of the entity according to its administrative organization')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_decision_authorized_person))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_decision_authorized_person)}}" target="_blank">
														{{trans('form.The decision of the authorized person to authorize those authorized to manage the account')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_ministry_finance_approval))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_ministry_finance_approval)}}" target="_blank">
														{{trans('form.Approval of the Ministry of Finance to open the account')}}</a>
												</div>
											@endif											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_endowment_deed))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_endowment_deed)}}" target="_blank">
														{{trans('form.The endowment deed and the glasses deed')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_superintendent_id))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_superintendent_id)}}" target="_blank">
														{{trans('form.The national identity card of the endowment superintendent / the glasses board')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_beholder_decision))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_beholder_decision)}}" target="_blank">
														{{trans('form.The decision of the principal or the board approving the opening of the account and granting powers to the delegates')}}</a>
												</div>
											@endif											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_allowed))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_allowed)}}" target="_blank">
														{{trans('form.The endowment deed must include a statement allowing the endowment to invest in securities')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_commercial_register))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_commercial_register)}}" target="_blank">
														{{trans('form.The commercial register of the fund manager')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_fund_articles_association))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_fund_articles_association)}}" target="_blank">
														{{trans('form.The Articles of Association of the Fund, the Fund Manager or the Memorandum of Association and any amendments thereto')}}</a>
												</div>
											@endif											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_market_authority_license))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_market_authority_license)}}" target="_blank">
														{{trans('form.Licensing the Capital Market Authority or its equivalent in the Cooperation Council')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_approval_notice))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_approval_notice)}}" target="_blank">
														{{trans('form.Notice of approval from the Capital Market Authority to establish the fund and offer its units')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_terms_and_conditions))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_terms_and_conditions)}}" target="_blank">
														{{trans('form.Fund Terms and Conditions and any amendments thereto')}}</a>
												</div>
											@endif											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_powers_delegates))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_powers_delegates)}}" target="_blank">
														{{trans('form.The decision to approve the opening of the account and grant the powers of the delegates')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_verify_full_ownership))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_verify_full_ownership)}}" target="_blank">
														{{trans('form.Proof of full ownership of the government (Saudi or from the Cooperation Council countries)')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_fundamental_system))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_fundamental_system)}}" target="_blank">
														{{trans('form.Fundamental system')}}</a>
												</div>
											@endif											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_commissioners_decision))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_commissioners_decision)}}" target="_blank">
														{{trans('form.A decision by the authorized persons to open and manage the account')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_commissioners_id))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_commissioners_id)}}" target="_blank">
														{{trans('form.delegate identities')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_list_name_members))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_list_name_members)}}" target="_blank">
														{{trans('form.A document showing the list of names of the members of the Board of Directors')}}</a>
												</div>
											@endif											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_granting_powers_to_delegates))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_granting_powers_to_delegates)}}" target="_blank">
														{{trans('form.The decision to approve the opening of the account and grant the powers of the delegates')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_founding_agreement))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_founding_agreement)}}" target="_blank">
														{{trans('form.Articles of Association and/or Articles of Association')}}</a>
												</div>
											@endif
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_headquarters_agreement_signed))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_headquarters_agreement_signed)}}" target="_blank">
														{{trans('form.The headquarters agreement signed with the government of the Kingdom that allows dealing in securities')}}</a>
												</div>
											@endif											
										</div>
									</div>
									<div class="media">
										<div class="media-body">
											@if (! empty($registerCompanyMessage->Companies_Attachment->attachment_decision_of_authorized_person))
												<div>
													<a href="{{url('uploads/forms/'.$registerCompanyMessage->Companies_Attachment->attachment_decision_of_authorized_person)}}" target="_blank">
														{{trans('form.The decision of the authorized person to authorize the persons who will open and operate the investment account')}}</a>
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
        </div>
        <!-- End Row -->
    </div>

@endsection
