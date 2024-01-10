<!------------------------------------------------------   client acceptance form   -------------------------------------------------------->
<h3>
</h3>
<fieldset> 
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
           {{trans('form.Customer acceptance form')}}                           
        </label>
    </div>

    <div lass="form-row">
        <div class="form-group">
            <label for="name" class="head">
                    {{trans('form.Services provided to the customer')}} 
            </label>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="acceptance_form_investments_box" value="{{$company->Companies_AcceptanceForm->acceptance_form_investments_box}}" placeholder="{{trans('form.investment Funds')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('acceptance_form_investments_box')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="acceptance_form_portfolio_management" value="{{$company->Companies_AcceptanceForm->acceptance_form_portfolio_management}}" placeholder={{trans('form.portfolio management')}} aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('acceptance_form_portfolio_management')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="acceptance_form_order" value="{{$company->Companies_AcceptanceForm->acceptance_form_order}}" placeholder="{{trans('form.ordering')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('acceptance_form_order')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="acceptance_form_save" value="{{$company->Companies_AcceptanceForm->acceptance_form_save}}" placeholder="{{trans('form.save')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('acceptance_form_save')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="acceptance_form_advice" value="{{$company->Companies_AcceptanceForm->acceptance_form_advice}}" placeholder="{{trans('form.advice')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('acceptance_form_advice')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="acceptance_form_other" value="{{$company->Companies_AcceptanceForm->acceptance_form_other}}" placeholder="{{trans('form.other')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('acceptance_form_other')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="acceptance_form_client_rating" class="radio-label">
                {{trans('form.Client rating')}}                               
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="acceptance_form_client_rating" value="individual" id="single_room44" required @if($company->Companies_AcceptanceForm->acceptance_form_client_rating == 'individual') checked @endif>
                    <label for="single_room44"> {{trans('form.individual client')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="acceptance_form_client_rating" value="implementation_individual" id="family_room44" @if($company->Companies_AcceptanceForm->acceptance_form_client_rating == 'implementation_individual') checked @endif>
                    <label for="family_room44"> {{trans('form.Individual client implementation-only')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="acceptance_form_client_rating" value="counterparty" id="familyroom44" @if($company->Companies_AcceptanceForm->acceptance_form_client_rating == 'counterparty') checked @endif>
                    <label for="familyroom44"> {{trans('form.counterparty')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="acceptance_form_client_rating" value="retail_client" id="singlerom44" @if($company->Companies_AcceptanceForm->acceptance_form_client_rating == 'retail_client') checked @endif>
                    <label for="singlerom44">  {{trans('form.retail client')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="acceptance_form_client_rating" value="qualified_customer" id="familyrom44" @if($company->Companies_AcceptanceForm->acceptance_form_client_rating == 'qualified_customer') checked @endif>
                    <label for="familyrom44">{{trans('form.Qualified customer')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="acceptance_form_client_rating" value="institutional_client" id="singleom44" @if($company->Companies_AcceptanceForm->acceptance_form_client_rating == 'institutional_client') checked @endif>
                    <label for="singleom44">  {{trans('form.Institutional client')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-group">
                    <label for="name"></label>
                    <input class="form-control" type="text" name="acceptance_form_classification_reason" value="{{$company->Companies_AcceptanceForm->acceptance_form_classification_reason}}" placeholder={{trans('form.reason for classification')}} aria-label="default input example" maxlength="80" onkeypress="return isNumberKey(event)" required>
                    @error('acceptance_form_classification_reason')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>


    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.Customer tolerance of product risk and suitability')}}                         
        </label>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="acceptance_form_suitable_for_customer" class="radio-label">
                {{trans('form.Is the offered product suitable for the customer?')}}                               
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="acceptance_form_suitable_for_customer" value="1" id="single_room45" required @if($company->Companies_AcceptanceForm->acceptance_form_suitable_for_customer == 1) checked @endif>
                    <label for="single_room45">  {{trans('form.yes')}} </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="acceptance_form_suitable_for_customer" value="0" id="family_room45" @if($company->Companies_AcceptanceForm->acceptance_form_suitable_for_customer == 0) checked @endif>
                    <label for="family_room45"> {{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="acceptance_form_risk_degree" class="radio-label">
               {{trans('form.The degree of risk assessment of the product offered to the customer')}}                                
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="acceptance_form_risk_degree" value="low" id="single_room46" required @if($company->Companies_AcceptanceForm->acceptance_form_risk_degree == 'low') checked @endif>
                    <label for="single_room46">  {{trans('form.low')}} </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="acceptance_form_risk_degree" value="average" id="family_room46" @if($company->Companies_AcceptanceForm->acceptance_form_risk_degree == 'average') checked @endif>
                    <label for="family_room46"> {{trans('form.average')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="acceptance_form_risk_degree" value="high" id="sinnnglerom44" @if($company->Companies_AcceptanceForm->acceptance_form_risk_degree == 'high') checked @endif>
                    <label for="sinnnglerom44"> {{trans('form.high')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-group">
                    <label for="name"></label>
                    <input class="form-control" type="text" name="acceptance_form_risk_reason" value="{{$company->Companies_AcceptanceForm->acceptance_form_risk_reason}}" placeholder="{{trans('form.reason for classification')}}" aria-label="default input example" maxlength="80" onkeypress="return isNumberKey(event)" required>
                    @error('acceptance_form_risk_reason')
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
<!---------------------------------------------------   client acceptance form    ------------------------------------------------------------>
