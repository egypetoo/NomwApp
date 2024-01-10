<!------------------------------------------------------  AML Risk Assessment   -------------------------------------------------------->
<h3>
</h3>
<fieldset> 
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.Assess the level of money laundering risks')}}                          
        </label>
    </div>
    
    <div class="form-row">
        <div class="form-radio">
            <label for="laundering_is_political_person" class="radio-label">
                {{trans('form.Is the client a politically defined person or related to a political person? Or a senior position in a listed company or financial institution?')}}                               
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="laundering_is_political_person" value="1" id="single_room47" required @if($company->Companies_LaunderingRisks->laundering_is_political_person == 1) checked @endif>
                    <label for="single_room47">  {{trans('form.yes')}} </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="laundering_is_political_person" value="0" id="family_room47" @if($company->Companies_LaunderingRisks->laundering_is_political_person == 0) checked @endif>
                    <label for="family_room47"> {{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-group">
                    <label for="name"></label>
                    <input class="form-control" type="text" name="laundering_political_person_true" value="{{$company->Companies_LaunderingRisks->laundering_political_person_true}}" placeholder="{{trans('form.If the answer is yes, specify the relationship and job grade.')}}" maxlength="80" onkeypress="return isNumberKey(event)" required>
                    @error('laundering_political_person_true')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="laundering_geographical_risk" class="radio-label">
                {{trans('form.Geographical risk: Does the customer have any dealings with high-risk countries or classified as money laundering countries?')}}                               
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="laundering_geographical_risk" value="1" id="single_room48" required @if($company->Companies_LaunderingRisks->laundering_geographical_risk == 1) checked @endif>
                    <label for="single_room48">  {{trans('form.yes')}} </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="laundering_geographical_risk" value="0" id="family_room48" @if($company->Companies_LaunderingRisks->laundering_geographical_risk == 0) checked @endif>
                    <label for="family_room48"> {{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-group">
                    <label for="name"></label>
                    <input class="form-control" type="text" name="laundering_geographical_risk_true" value="{{$company->Companies_LaunderingRisks->laundering_geographical_risk_true}}" placeholder="{{trans('form.If yes, list these countries:')}}" aria-label="default input example">
                    @error('laundering_geographical_risk_true')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="laundering_invest_mony_own" class="radio-label">
                {{trans('form.Does the client invest his money for his own account?')}}                              
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="laundering_invest_mony_own" value="1" id="single_room49" required @if($company->Companies_LaunderingRisks->laundering_invest_mony_own == 1) checked @endif>
                    <label for="single_room49">  {{trans('form.yes')}} </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="laundering_invest_mony_own" value="0" id="family_room49" @if($company->Companies_LaunderingRisks->laundering_invest_mony_own == 0) checked @endif>
                    <label for="family_room49"> {{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="laundering_invest_mony_other" class="radio-label">
                {{trans('form.Does the client invest his money for the account of other beneficiaries?')}}                               
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="laundering_invest_mony_other" value="1" id="single_room50" required @if($company->Companies_LaunderingRisks->laundering_invest_mony_other == 1) checked @endif>
                    <label for="single_room50">  {{trans('form.yes')}} </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="laundering_invest_mony_other" value="0" id="family_room50" @if($company->Companies_LaunderingRisks->laundering_invest_mony_other == 0) checked @endif>
                    <label for="family_room50"> {{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.High risk trade')}}                          
        </label>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="laundering_high_risk_work" class="radio-label">
                {{trans('form.Does the customer, in the nature of his work, engage in activities classified as high risk?')}}                               
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="laundering_high_risk_work" value="1" id="single_room51" required @if($company->Companies_LaunderingRisks->laundering_high_risk_work == 1) checked @endif>
                    <label for="single_room51">  {{trans('form.yes')}} </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="laundering_high_risk_work" value="0" id="family_room51" @if($company->Companies_LaunderingRisks->laundering_high_risk_work == 0) checked @endif>
                    <label for="family_room51"> {{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-group">
                    <label for="name"></label>
                    <input class="form-control" type="text" name="laundering_high_risk_work_true" value="{{$company->Companies_LaunderingRisks->laundering_high_risk_work_true}}" placeholder="{{trans('form.If the answer is yes, list these actions:')}}" aria-label="default input example">
                    @error('laundering_high_risk_work_true')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>


    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.High risk products')}}                           
        </label>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="laundering_activity_secondry_income" class="radio-label">
                {{trans('form.Are the client expected activities in line with the client annual income?')}}                               
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="laundering_activity_secondry_income" value="1" id="single_room52" required @if($company->Companies_LaunderingRisks->laundering_activity_secondry_income == 1) checked @endif>
                    <label for="single_room52">  {{trans('form.yes')}} </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="laundering_activity_secondry_income" value="0" id="family_room52" @if($company->Companies_LaunderingRisks->laundering_activity_secondry_income == 0) checked @endif>
                    <label for="family_room52"> {{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="laundering_client_background_services" class="radio-label">
                {{trans('form.Are the services provided to the client in line with the client background?')}}                               
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="laundering_client_background_services" value="1" id="single_room53" required @if($company->Companies_LaunderingRisks->laundering_client_background_services == 1) checked @endif>
                    <label for="single_room53">  {{trans('form.yes')}} </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="laundering_client_background_services" value="0" id="family_room53" @if($company->Companies_LaunderingRisks->laundering_client_background_services == 0) checked @endif>
                    <label for="family_room53"> {{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="laundering_final_risk_level" class="radio-label">
                {{trans('form.Final risk assessment')}}                                
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="laundering_final_risk_level" value="high" id="single_room54" required @if($company->Companies_LaunderingRisks->laundering_final_risk_level == 'high') checked @endif>
                    <label for="single_room54"> {{trans('form.High stakes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="laundering_final_risk_level" value="average" id="family_room54" @if($company->Companies_LaunderingRisks->laundering_final_risk_level == 'average') checked @endif>
                    <label for="family_room54">{{trans('form.average risk')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="laundering_final_risk_level" value="low" id="familyroom54" @if($company->Companies_LaunderingRisks->laundering_final_risk_level == 'low') checked @endif>
                    <label for="familyroom54"> {{trans('form.Low risk')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="laundering_final_risk_level" value="political_person" id="singlerom54" @if($company->Companies_LaunderingRisks->laundering_final_risk_level == 'political_person') checked @endif>
                    <label for="singlerom54"> {{trans('form.political person')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="laundering_final_risk_level" value="other" id="familyrom54" @if($company->Companies_LaunderingRisks->laundering_final_risk_level == 'other') checked @endif>
                    <label for="familyrom54"> {{trans('form.other')}}  </label>
                    <span class="check"></span>
                </div>
                <div class="form-group">
                    <label for="name"></label>
                    <input class="form-control" type="text" name="laundering_classification_reason" value="{{$company->Companies_LaunderingRisks->laundering_classification_reason}}" placeholder="{{trans('form.reason for classification')}}" aria-label="default input example" maxlength="80" onkeypress="return isNumberKey(event)" required>
                    @error('laundering_classification_reason')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" name="step" value="{{$step}}"/>

    <ul class="form-navigation">
        <li><a href="{{url('company-registration/step/'.($step+1))}}">{{trans('form.next')}}</a></li>
        <li><a href="{{url('company-registration/step/'.($step-1))}}">{{trans('form.previous')}}</a></li>
    </ul>
    
</fieldset>
<!------------------------------------------------------  AML Risk Assessment----------------------------------------------------------->
