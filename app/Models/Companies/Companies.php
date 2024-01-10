<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $table = 'companies';
    public $timestamps = false;
    ////////////////////// relations /////////////////////////////////////
    public function Companies_Attachment()
    {
        return $this->hasOne('App\Companies\Models\CompaniesAttachment','companies_id','id');
    }
    public function Companies_Bank()
    {
        return $this->hasOne('App\Companies\Models\CompaniesBank','companies_id','id');
    }
    public function Companies_Board_Members()
    {
        return $this->hasOne('App\Companies\Models\CompaniesBoardMembers','companies_id','id');
    }
    public function Companies_Certificates()
    {
        return $this->hasOne('App\Companies\Models\CompaniesCertificates','companies_id','id');
    }
    public function Companies_ContactData()
    {
        return $this->hasOne('App\Companies\Models\CompaniesContactData','companies_id','id');
    }
    public function Companies_AcceptanceForm()
    {
        return $this->hasOne('App\Companies\Models\CompaniesCustomerAcceptanceForm','companies_id','id');
    }
    public function Companies_LegalForm()
    {
        return $this->hasOne('App\Companies\Models\CompaniesLegalForm','companies_id','id');
    }
    public function Companies_Manager_Approval()
    {
        return $this->hasOne('App\Companies\Models\CompaniesManagerApproval','companies_id','id');
    }
    public function Companies_Managers()
    {
        return $this->hasOne('App\Companies\Models\CompaniesManagers','companies_id','id');
    }
    public function Companies_Model1()
    {
        return $this->hasOne('App\Companies\Models\CompaniesModel1','companies_id','id');
    }
    public function Companies_Model2()
    {
        return $this->hasOne('App\Companies\Models\CompaniesModel2','companies_id','id');
    }
    public function Companies_Model3()
    {
        return $this->hasOne('App\Companies\Models\CompaniesModel3','companies_id','id');
    }
    public function Companies_Model4()
    {
        return $this->hasOne('App\Companies\Models\CompaniesModel4','companies_id','id');
    }
    public function Companies_Model5()
    {
        return $this->hasOne('App\Companies\Models\CompaniesModel5','companies_id','id');
    }
    public function Companies_LaunderingRisks()
    {
        return $this->hasOne('App\Companies\Models\CompaniesMoneyLaunderingRisks','companies_id','id');
    }
    public function Companies_Ownership_Structure()
    {
        return $this->hasOne('App\Companies\Models\CompaniesOwnershipStructure','companies_id','id');
    }
    public function Companies_Person_Authorized()
    {
        return $this->hasOne('App\Companies\Models\CompaniesPersonAuthorized','companies_id','id');
    }
    public function Companies_Profit_Shares()
    {
        return $this->hasOne('App\Companies\Models\CompaniesProfitShares','companies_id','id');
    }
    public function Companies_Sale_Proceeds()
    {
        return $this->hasOne('App\Companies\Models\CompaniesSaleProceeds','companies_id','id');
    }
    // get data from database
    public function getType(){
        return $this->type == '1' ? trans('form.company') : '';
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
    public function getLegal_form(){
        if($this->legal_form == 'limited_liability'){
            return trans('form.Limited liability');
        }elseif($this->legal_form == 'contribution_locked'){
            return trans('form.Contribution locked');
        }elseif($this->legal_form == 'public_contribution'){
            return trans('form.Public contribution');
        }elseif($this->legal_form == 'solidarity'){
            return trans('form.Solidarity');
        }else{
            return trans('form.other');
        }
    }
    public function getNot_residing_sa(){
        return $this->not_residing_sa == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getIs_real_beneficiary(){
        return $this->is_real_beneficiary == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getBeneficiary_status(){
        if($this->beneficiary_status == 'headmaster'){
            return trans('form.headmaster');
        }elseif($this->beneficiary_status == 'delegate'){
            return trans('form.Delegate for legal entities');
        }else{
            return trans('form.other');
        }
    }
    public function getIs_company_usa(){
        return $this->is_company_usa == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getIs_taxable(){
        return $this->is_taxable == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getSupervision_authority(){
        return $this->supervision_authority == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getRefused_open_account(){
        return $this->refused_open_account == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getClients_other_countries(){
        return $this->clients_other_countries == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getMonitor_terrorism_list(){
        return $this->monitor_terrorism_list == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getRegulatory_standards(){
        return $this->regulatory_standards == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getReview_customer_data(){
        return $this->review_customer_data == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getKnow_real_person(){
        return $this->know_real_person == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getMoney_control_system(){
        return $this->money_control_system == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getEmployees_qualify(){
        return $this->employees_qualify == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getMatching_official(){
        return $this->matching_official == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getYour_jurisdiction(){
        return $this->your_jurisdiction == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getHas_custodian(){
        return $this->has_custodian == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getIs_related_board_member(){
        return $this->is_related_board_member == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getIs_charged_higher_duties(){
        return $this->is_charged_higher_duties == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getIs_owner_or_shareholder(){
        return $this->is_owner_or_shareholder == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getNet_assets(){
        if($this->net_assets == 'a'){
            return trans('form.less than 100,000 [0]');
        }elseif($this->net_assets == 'b'){
            return trans('form.100,001 to 300,000 [1]');
        }elseif($this->net_assets == 'c'){
            return trans('form.300,001 to 600,000 [2]');
        }elseif($this->net_assets == 'd'){
            return trans('form.600,001 to 1,500,000 [4]');
        }elseif($this->net_assets == 'e'){
            return trans('form.1,500,001 to 5,000,000 [6]');
        }elseif($this->net_assets == 'f'){
            return trans('form.5,000,001 to 10,000,000 [8]');
        }elseif($this->net_assets == 'g'){
            return trans('form.10,000,001 to 50,000,000 [10]');
        }else{
            return trans('form.More than 50,000,000') [12];
        }
    }
    public function getHave_other_experiences(){
        return $this->have_other_experiences == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getOther_financial_information(){
        return $this->other_financial_information == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getLoan_ratio(){
        if($this->loan_ratio == 'a'){
            return "0-5% [6]";
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
    public function getInvestment_experience(){
        if($this->investment_experience == 'low'){
            return trans('form.low') [0];
        }elseif($this->investment_experience == 'average'){
            return trans('form.average') [4];
        }else{
            return trans('form.high') [6];
        }
    }
    public function getCustomer_ability_take_risks(){
        if($this->customer_ability_take_risks == 'low'){
            return trans('form.low') [0];
        }elseif($this->customer_ability_take_risks == 'average'){
            return trans('form.average') [4];
        }else{
            return trans('form.high') [6];
        }
    }
    public function getGeneral_investment_goals(){
        if($this->general_investment_goals == 'a'){
            return trans('form.Monetization') [8];
        }elseif($this->general_investment_goals == 'b'){
            return trans('form.capital growth') [10];
        }elseif($this->general_investment_goals == 'c'){
            return trans('form.Create retirement savings') [2];
        }elseif($this->general_investment_goals == 'd'){
            return trans('form.Buying an asset (eg: real estate, vehicle)')  [2];
        }elseif($this->general_investment_goals == 'e'){
            return trans('form.Capital protection') [2];
        }elseif($this->general_investment_goals == 'f'){
            return trans('form.balanced') [6];
        }else{
            return trans('form.Project financing') [3];
        }
    }
    public function getRecovery_invested_money(){
        if($this->Recovery_invested_money == 'low'){
            return trans('form.Short term (less than a year)')  [2];
        }elseif($this->Recovery_invested_money == 'average'){
            return trans('form.Medium term (from one to five years)') [6];
        }else{
            return trans('form.Long term (more than five years)') [8];
        }
    }
    public function getPreferred_investment_assets(){
        return $this->preferred_investment_assets == 'SAR' ? trans('form.Assets in Saudi Riyals') [4] : trans('form.Assets in other foreign currencies') [6];
    }
    public function getPreviously_invested_products(){
        if($this->previously_invested_products == 'a'){
            return trans('form.shares') [6];
        }elseif($this->previously_invested_products == 'b'){
            return trans('form.debt instruments') [2];
        }elseif($this->previously_invested_products == 'c'){
            return trans('form.mutual funds') [6];
        }elseif($this->previously_invested_products == 'd'){
            return trans('form.real estate') [3];
        }elseif($this->previously_invested_products == 'e'){
            return trans('form.derivative contracts') [6];
        }elseif($this->previously_invested_products == 'f'){
            return trans('form.alternative investments') [3];
        }else{
            return trans('form.Murabaha deposits') [4];
        }
    }
    public function getKnowledge_level(){
        if($this->knowledge_level == 'week'){
            return trans('form.limited') [1];
        }elseif($this->knowledge_level == 'good'){
            return trans('form.good'). 4;
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
            return 4-6 . trans('form.Years') . 6;
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
            return 10-30 . trans('form.deals') . 6;
        }else{
            return trans('form.More than 30 deals') [8];
        }
    }
    public function getTransaction_volume(){
        if($this->transaction_volume == 'a'){
            return trans('form.Less than 200 thousand') [1];
        }elseif($this->transaction_volume == 'b'){
            return trans('form.200 thousand to 400 thousand') [2];
        }elseif($this->transaction_volume == 'c'){
            return trans('form.500 thousand to a million') [4];
        }elseif($this->transaction_volume == 'd'){
            return trans('form.million to 5 million') [6];
        }else{
            return trans('form.more than 5 million') [8];
        }
    }
    public function getTransactions_outside_kingdom(){
        return $this->transactions_outside_kingdom == 1 ? trans('form.yes') : trans('form.no');
    }
    public function getMake_decision(){
        return $this->make_decision == 'personal' ? trans('form.personal') [1] : trans('form.Advice provided by the company') [0];
    }
    public function getCurrent_investment_represents(){
        if($this->current_investment_represents == 'a'){
            return "1-5% [8]";
        }elseif($this->current_investment_represents == 'b'){
            return "5-20% [6]";
        }elseif($this->current_investment_represents == 'c'){
            return "20-50% [4]";
        }elseif($this->current_investment_represents == 'd'){
            return "50-70% [2]";
        }else{
            return "70-100% [1]";
        }
    }
    public function getInvestment_value(){
        return $this->investment_value == 'a' ? trans('form.More than 200 thousand riyals') [6] : trans('form.Less than 200 thousand riyals') [0];
    }
    public function getMarket_authority_regulations(){
        if($this->market_authority_regulations == 'a'){
            return trans('form.Have you made transactions in the stock markets, the total value of which is not less than 40 million Saudi riyals, and not less than 10 transactions in each quarter during the past 12 months');
        }elseif($this->market_authority_regulations == 'b'){
            return trans('form.Is your net asset value not less than 5 million Saudi riyals?');
        }elseif($this->market_authority_regulations == 'c'){
            return trans('form.Have you ever worked for at least 3 years in the financial sector in a professional job related to investing in securities?');
        }elseif($this->market_authority_regulations == 'd'){
            return trans('form.Have you obtained a professional certificate specialized in the field of securities business accredited by an internationally recognized body?');
        }elseif($this->market_authority_regulations == 'e'){
            return trans('form.Have you obtained the general certificate for dealing in securities approved by the Capital Market Authority, and that your annual income is not less than 600,000 riyals in the past two years?');
        }else{
            return trans('form.Are you an employee registered with the fund manager of this opportunity?');
        }
    }
    public function getAccount_opening(){
        if($this->account_opening == 'a'){
            return trans('form.The original ID has been reviewed and the photos have been authenticated');
        }elseif($this->account_opening == 'b'){
            return trans('form.Agency or other authorization order');
        }elseif($this->account_opening == 'c'){
            return trans('form.Know your customer');
        }else{
            return trans('form.Customer acceptance form');
        }
    }
}













































