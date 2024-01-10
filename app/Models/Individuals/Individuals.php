<?php

namespace App\Models\Individuals;

use Illuminate\Database\Eloquent\Model;

class Individuals extends Model
{
    protected $table = 'individuals';
    public $timestamps = false;
    //relations 
    public function Individuals_AccountOpening()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsAccountOpening','individuals_id','id');
    }
    public function Individuals_Attachment()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsAttachment','individuals_id','id');
    }
    public function Individuals_Banks()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsBanks','individuals_id','id');
    }
    public function Individuals_Certificates()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsCertificates','individuals_id','id');
    }
    public function Individuals_ServiceOffers()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsClientServiceOffers','individuals_id','id');
    }
    public function Individuals_Manager_Approval()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsManagerApproval','individuals_id','id');
    }
    public function Individuals_Model1()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsModel1','individuals_id','id');
    }
    public function Individuals_Model3()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsModel3','individuals_id','id');
    }
    public function Individuals_Model5()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsModel5','individuals_id','id');
    }
    public function Individuals_Model6()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsModel6','individuals_id','id');
    }
    public function Individuals_Model7()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsModel7','individuals_id','id');
    }
    public function Individuals_contacts()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsPerContacts','individuals_id','id');
    }
    public function Individuals_Info()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsPerInfo','individuals_id','id');
    }
    public function Individuals_Profit_Shares()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsProfitShares','individuals_id','id');
    }
    public function Individuals_Beneficiary()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsRegistrationBeneficiary','individuals_id','id');
    }
    public function IndividualsResidentConfirmation()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsResidentConfirmation','individuals_id','id');
    }
    public function Individuals_Sale_Proceeds()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsSaleProceeds','individuals_id','id');
    }
    public function Individuals_Source_Income()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsSourceIncome','individuals_id','id');
    }
    public function Individuals_Assessor()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsTaxAssessor','individuals_id','id');
    }
    public function Individuals_Residency_Information()
    {
        return $this->hasOne('App\Models\Individuals\IndividualsTaxResidencyInformation','individuals_id','id');
    }


    // get data from database
    public function getType(){
        return $this->type == '1' ? trans('form.individual') : '';
    }
    public function getCurrency(){
        if($this->currency == 'SAR'){
            return trans('form.SAR');
        }elseif($this->currency == 'USD'){
            return trans('form.USD');
        }else{
            return trans('form.other');
        }
    }
    public function getWallet_type(){
        if($this->wallet_type == 'local'){
            return trans('form.Local stock portfolio');
        }elseif($this->wallet_type == 'international_invistments'){
            return trans('form.Foreign stock portfolio');
        }else{
            return trans('form.investment funds');
        }
    }

    public function getIndividual_type(){
        if($this->individual_type == 'mr'){
            return trans('form.mr');
        }elseif($this->individual_type == 'mrs'){
            return trans('form.mrs');
        }elseif($this->individual_type == 'miss'){
            return trans('form.miss');
        }else{
            return trans('form.other');
        }
    }

    public function getIs_saudi_resident(){
        return $this->is_saudi_resident == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getIs_registretion_beneficial(){
        return $this->is_registretion_beneficial == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getIs_american_resident(){
        return $this->is_american_resident == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getAnother_visa(){
        return $this->another_visa == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getCustodian_appointed(){
        return $this->custodian_appointed == 1 ? trans('form.yes') : trans('form.no');
    }
    
    public function getIs_member_or_related(){
        return $this->is_member_or_related == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getIs_entrusted_tasks(){
        return $this->is_entrusted_tasks == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getIs_owner_or_shareholder(){
        return $this->is_owner_or_shareholder == 1 ? trans('form.yes') : trans('form.no');
    }
	public function getCheck_customer_name(){
        return $this->Check_customer_name == 1 ? trans('form.yes') : trans('form.no');
    }
	public function getTaxes_in_which_country_place(){
        return $this->taxes_in_which_country_place == 1 ? trans('form.yes') : trans('form.no');
    }
	
	

    public function getEducational_level(){
        if($this->educational_level == 'nothing'){
            return trans('form.None (0)');
        }elseif($this->educational_level == 'primary'){
            return trans('form.(1) Primary');
        }elseif($this->educational_level == 'medium'){
            return trans('form.medium (2)');
        }elseif($this->educational_level == 'secondary'){
            return trans('form.secondary (3)');
        }elseif($this->educational_level == 'diploma'){
            return trans('form.Diploma (4)');
        }elseif($this->educational_level == 'collage'){
            return trans('form.University (5)');
        }else{
            return trans('form.Postgraduate studies (6)');
        }
    }
    public function getEmployment_status(){
        if($this->educational_level == 'unemployed'){
            return trans('form.Unemployed (0)');
        }elseif($this->educational_level == 'housewife'){
            return trans('form.housewife (2)');
        }elseif($this->educational_level == 'student'){
            return trans('form.Student (3)');
        }elseif($this->educational_level == 'employee'){
            return trans('form.employee (4)');
        }elseif($this->educational_level == 'retired'){
            return trans('form.retired (5)');
        }else{
            return trans('form.businessman (6)');
        }
    }
    public function getAnnual_income(){
        if($this->annual_income == 'a'){
            return trans('form.less than 100,000 [0]');
        }elseif($this->annual_income == 'b'){
            return trans('form.100,001 to 300,000 [1]');
        }elseif($this->annual_income == 'c'){
            return trans('form.300,001 to 600,000 [2]');
        }elseif($this->annual_income == 'd'){
            return trans('form.600,001 to 1,500,000 [3]');
        }elseif($this->annual_income == 'e'){
            return trans('form.1,500,001 to 5,000,000 [4]');
        }elseif($this->annual_income == 'f'){
            return trans('form.5,000,001 to 10,000,000 [5]');
        }elseif($this->annual_income == 'g'){
            return trans('form.10,000,001 to 50,000,000 [6]');
        }else{
            return trans('form.More than 50,000,000');
        }
    }
    public function getNet_worth(){
        if($this->net_worth == 'a'){
            return trans('form.less than 100,000 [0]');
        }elseif($this->net_worth == 'b'){
            return trans('form.100,001 to 300,000 [1]');
        }elseif($this->net_worth == 'c'){
            return trans('form.300,001 to 600,000 [2]');
        }elseif($this->net_worth == 'd'){
            return trans('form.600,001 to 1,500,000 [3]');
        }elseif($this->net_worth == 'e'){
            return trans('form.1,500,001 to 5,000,000 [4]');
        }elseif($this->net_worth == 'f'){
            return trans('form.5,000,001 to 10,000,000 [5]');
        }elseif($this->net_worth == 'g'){
            return trans('form.10,000,001 to 50,000,000 [6]');
        }else{
            return trans('form.More than 50,000,000');
        }
    }
    public function getSources_of_wealth(){
        return $this->sources_of_wealth == 'trade' ? trans('form.Trade/business is free') : trans('form.investments');
    }
    public function getIs_workin_financial_sector(){
        return $this->is_workin_financial_sector == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getIs_other_experiences(){
        return $this->is_other_experiences == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getIs_professional_certificates(){
        return $this->is_professional_certificates == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getIs_refused_private_account(){
        return $this->is_refused_private_account == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getIs_other_info_financial(){
        return $this->is_other_info_financial == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getLoan_ratio(){
        if($this->loan_ratio == 'a'){
            return "0-5% [4]";
        }elseif($this->loan_ratio == 'b'){
            return "5-15% [1]";
        }elseif($this->loan_ratio == 'c'){
            return "15-30% [0]";
        }elseif($this->loan_ratio == 'd'){
            return "30-50% [0]";
        }else{
            return trans('form.more than 50%');
        }
    }
    public function getFinancing_deals(){
        return $this->financing_deals == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getInvestment_knowledge(){
        if($this->investment_knowledge == 'low'){
            return trans('form.low') [0];
        }elseif($this->investment_knowledge == 'average'){
            return trans('form.average') [4];
        }else{
            return trans('form.high') [6];
        }
    }
    public function getTake_risk(){
        if($this->take_risk == 'low'){
            return trans('form.low') [0];
        }elseif($this->take_risk == 'average'){
            return trans('form.average') [4];
        }else{
            return trans('form.high') [6];
        }
    }
    public function getInvestment_objectives(){
        if($this->investment_objectives == 'a'){
            return trans('form.Monetization');
        }elseif($this->investment_objectives == 'b'){
            return trans('form.capital growth');
        }elseif($this->investment_objectives == 'c'){
            return trans('form.Create retirement savings');
        }elseif($this->investment_objectives == 'd'){
            return trans('form.Buying an asset (eg: real estate, vehicle)');
        }elseif($this->investment_objectives == 'e'){
            return trans('form.Capital protection');
        }elseif($this->investment_objectives == 'f'){
            return trans('form.balanced');
        }else{
            return trans('form.Project financing');
        }
    }
    public function getRefund_period(){
        if($this->refund_period == 'short'){
            return trans('form.Short term (less than a year)') [2];
        }elseif($this->refund_period == 'average'){
            return trans('form.Medium term (from one to five years)') [4];
        }else{
            return trans('form.Long term (more than five years)') [6];
        }
    }
    public function getInvestment_assets(){
        return $this->investment_assets == 'SAR' ? trans('form.Assets in Saudi Riyals') [4] : trans('form.Assets in other foreign currencies') [4];
    }
    public function getInvestment_products(){
        if($this->investment_products == 'a'){
            return trans('form.shares') [6];
        }elseif($this->investment_products == 'b'){
            return trans('form.debt instruments') [2];
        }elseif($this->investment_products == 'c'){
            return trans('form.mutual funds') [6];
        }elseif($this->investment_products == 'd'){
            return trans('form.real estate')  [3];
        }elseif($this->investment_products == 'e'){
            return trans('form.derivative contracts')[6];
        }elseif($this->investment_products == 'f'){
            return trans('form.alternative investments') [3];
        }else{
            return trans('form.Murabaha deposits') [4];
        }
    }
    public function getKnowledge_level(){
        if($this->knowledge_level == 'limit'){
            return trans('form.limited') [1];
        }elseif($this->knowledge_level == 'good'){
            return trans('form.good') [4];
        }else{
            return trans('form.strong') [6];
        }
    }
    public function getTrading_years(){
        if($this->trading_years == 'a'){
            return 0 . trans('form.Years') [0];
        }elseif($this->trading_years == 'b'){
            return 1-3 . trans('form.Years') [2];
        }elseif($this->trading_years == 'c'){
            return 4-6 . trans('form.Years') [6];
        }else{
            return trans('form.More than 6 years') [8];
        }
    }
    public function getDeals_number(){
        if($this->deals_number == 'a'){
            return 0 . trans('form.deals') [0];
        }elseif($this->deals_number == 'b'){
            return 1-10 . trans('form.deals') [4];
        }elseif($this->deals_number == 'c'){
            return 10-30;
        }else{
            return trans('form.More than 30 deals') [8];
        }
    }
    public function getDeals_volume(){
        if($this->deals_volume == 'a'){
            return trans('form.Less than 200 thousand') [1];
        }elseif($this->deals_volume == 'b'){
            return trans('form.200 thousand to 400 thousand') [2];
        }elseif($this->deals_volume == 'c'){
            return trans('form.500 thousand to a million') [4];
        }elseif($this->deals_volume == 'd'){
            trans('form.million to 5 million') [6];
        }
        else{
            return trans('form.more than 5 million') [8];
        }
    }
    public function getFinancial_deals_outside(){
        return $this->financial_deals_outside == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getMake_decision(){
        return $this->make_decision == 'personal' ? trans('form.personal') [1] : trans('form.Advice provided by the company');
    }
    public function getCurrent_investment_ratio(){
        if($this->current_investment_ratio == 'a'){
            return "1-5% [8]";
        }elseif($this->current_investment_ratio == 'b'){
            return "5-20% [6]";
        }elseif($this->current_investment_ratio == 'c'){
            return "20-50% [4]";
        }elseif($this->current_investment_ratio == 'd'){
            return "50-70% [2]";
        }else{
            return "70-100% [1]";
        }
    }
    public function getVolume_investment_withus(){
        return $this->volume_investment_withus == 'a' ? trans('form.More than 200 thousand riyals') [6] : trans('form.Less than 200 thousand riyals') [0];
    }
    public function getFinancial_market_regulations(){
        if($this->financial_market_regulations == 'a'){
            return trans('form.Have you made transactions in the stock markets, the total value of which is not less than 40 million Saudi riyals, and not less than 10 transactions in each quarter during the past 12 months');
        }elseif($this->financial_market_regulations == 'b'){
            return trans('form.Is your net asset value not less than 5 million Saudi riyals?');
        }elseif($this->financial_market_regulations == 'c'){
            return trans('form.Have you ever worked for at least 3 years in the financial sector in a professional job related to investing in securities?');
        }elseif($this->financial_market_regulations == 'd'){
            return trans('form.Have you obtained a professional certificate specialized in the field of securities business accredited by an internationally recognized body?');
        }elseif($this->financial_market_regulations == 'e'){
            return trans('form.Have you obtained the general certificate for dealing in securities approved by the Capital Market Authority, and that your annual income is not less than 600,000 riyals in the past two years?');
        }else{
            return trans('form.Are you an employee registered with the fund manager of this opportunity?');
        }
    }
    public function getClient_rating(){
        if($this->client_rating == 'individual'){
            return trans('form.individual client');
        }elseif($this->client_rating == 'implement_individual'){
            return trans('form.Individual client implementation-only');
        }elseif($this->client_rating == 'counterparty'){
            return trans('form.counterparty');
        }elseif($this->client_rating == 'retail_client'){
            return trans('form.retail client');
        }elseif($this->client_rating == 'qualified_customer'){
            return trans('form.Qualified customer');
        }else{
            return trans('form.Institutional client');
        }
    }
    public function getIs_politically_defined(){
        return $this->is_politically_defined == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getIs_geographical_risk(){
        return $this->is_geographical_risk == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getIs_private_account_investment(){
        return $this->is_private_account_investment == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getIs_investment_for_others(){
        return $this->is_investment_for_others == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getIs_investment_others(){
        return $this->is_investment_others == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getCustomer_annual_income(){
        return $this->customer_annual_income == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getIs_client_background(){
        return $this->is_client_background == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getFinal_risk_assessment(){
        if($this->final_risk_assessment == 'high'){
            return trans('form.High stakes');
        }elseif($this->final_risk_assessment == 'average'){
            return trans('form.average risk');
        }elseif($this->final_risk_assessment == 'low'){
            return trans('form.Low risk');
        }elseif($this->final_risk_assessment == 'political'){
            return trans('form.political person');
        }else{
            return trans('form.other');
        }
    }
	public function SubscribeToFund()
    {
        return $this->hasMany('App\SubscribeToFund','individual_id','id');
    }


}
