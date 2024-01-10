<!------------------------------------ Self-Certification & Declaration Form    -------------------------------->
<h3>
</h3>
<fieldset>

    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.Self-certification certificate')}}
        </label>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="is_company_usa" class="radio-label">{{trans('form.Are you a company from the USA?')}}</label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="is_company_usa" value="1" id="single_room10" required @if($company->is_company_usa == 1) checked @endif>
                    <label for="single_room10">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="is_company_usa" value="0" id="family_room10" @if($company->is_company_usa == 0) checked @endif>
                    <label for="family_room10">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="is_taxable" class="radio-label">{{trans('form.Are you subject to taxes in any country or countries outside the Kingdom of Saudi Arabia?')}}</label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="is_taxable" value="1" id="single_room11" required @if($company->is_taxable == 1) checked @endif>
                    <label for="single_room11">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="is_taxable" value="0" id="family_room11" @if($company->is_taxable == 0) checked @endif>
                    <label for="family_room11">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="phone"></label>
            <input type="text" name="country_taxable_true" value="{{$company->country_taxable_true}}" placeholder="{{trans('form.If yes (please indicate the country)')}}"class="form-control" required="">
            @error('country_taxable_true')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    
    <div class="form-row">
        <label for="rom2" class="radio-label choose">
            {{trans('form.If you are a tax resident in the United States of America - please fill out Form 3')}}   
        </label>
    </div>

    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.Model (3)')}} 
        </label>
    </div>
    <!---------------------------------------------------------------->
    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.US financial entities and institutions')}} 
        </label>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="model3_specific_american_person" class="radio-label">{{trans('form.Are you an identifiable American person?')}}</label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="model3_specific_american_person" value="1" id="single_room010" required @if($company->Companies_Model3->model3_specific_american_person == 1) checked @endif>
                    <label for="single_room010">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="model3_specific_american_person" value="0" id="family_room010" @if($company->Companies_Model3->model3_specific_american_person == 0) checked @endif>
                    <label for="family_room010">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-group">
                    <label for="phone"></label>
                    <input type="text" name="model3_us_tin" value="{{$company->Companies_Model3->model3_us_tin}}" placeholder="{{trans('form.US tax identification number')}}"class="form-control" required="">
                    @error('contact_data_additional_code')
                <span class="text-danger">{{$message}}</span>
            @enderror
                </div>
            </div>

        </div>
    </div>


    <!---------------------------------------------------------------->

    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.Non-US foreign financial institutions')}}
        </label>
    </div> 

    <div class="form-row">
        <div class="form-radio line">
            <label for="model3_is_saudi_financial" class="radio-label sm">
                {{trans('form.Are you a Saudi financial institution or a financial institution created or incorporated in the Kingdom under an intergovernmental agreement with the United States regarding FATCA?')}}
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="model3_is_saudi_financial" value="1" id="single_room011" required @if($company->Companies_Model3->model3_is_saudi_financial == 1) checked @endif>
                    <label for="single_room011">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="model3_is_saudi_financial" value="0" id="family_room011" @if($company->Companies_Model3->model3_is_saudi_financial == 0) checked @endif>
                    <label for="family_room011">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>

        </div>
    </div>
    <div class="form-row">
        <div class="form-radio line">
            <label for="model3_non_us_financial" class="radio-label">
                {{trans('form.Are you a participating non-US financial institution?')}}	
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="model3_non_us_financial" value="1" id="single_room012" required @if($company->Companies_Model3->model3_non_us_financial == 1) checked @endif>
                    <label for="single_room012">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="model3_non_us_financial" value="0" id="family_room012" @if($company->Companies_Model3->model3_non_us_financial == 0) checked @endif>
                    <label for="family_room012">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-group">
                    <label for="phone"></label>
                    <input type="text" name="model3_non_us_giin" value="{{$company->Companies_Model3->model3_non_us_giin}}" placeholder="GIIN  "class="form-control" required="">
                    @error('model3_non_us_giin')
                <span class="text-danger">{{$message}}</span>
            @enderror
                </div>
            </div>

        </div>
    </div>
    <div class="form-row">
        <div class="form-radio line">
            <label for="model3_obligated_register" class="radio-label">
                {{trans('form.Are you a non-US financial institution that is required to register?')}}
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="model3_obligated_register" value="1" id="single_room013" required @if($company->Companies_Model3->model3_obligated_register == 1) checked @endif>
                    <label for="single_room013">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="model3_obligated_register" value="0" id="family_room013" @if($company->Companies_Model3->model3_obligated_register == 0) checked @endif>
                    <label for="family_room013">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-group">
                    <label for="phone"></label>
                    <input type="text" name="model3_obligated_giin" placeholder="GIIN" value="{{$company->Companies_Model3->model3_obligated_giin}}" class="form-control" required="">
                    @error('model3_obligated_giin')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>

        </div>
    </div>
    <div class="form-row">
        <div class="form-radio line">
            <label for="model3_obliged_comply" class="radio-label">
               {{trans('form.Are you a non-US financial institution that is required to comply?')}}
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="model3_obliged_comply" value="1" id="single_room014" required @if($company->Companies_Model3->model3_obliged_comply == 1) checked @endif>
                    <label for="single_room014">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="model3_obliged_comply" value="0" id="family_room014" @if($company->Companies_Model3->model3_obliged_comply == 0) checked @endif>
                    <label for="family_room014">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>

        </div>
    </div>
    <div class="form-row">
        <div class="form-radio line">
            <label for="model3_not_participating" class="radio-label">
                {{trans('form.Are you a non-US, non-participating financial institution?')}}	   
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="model3_not_participating" value="1" id="single_room015" required @if($company->Companies_Model3->model3_not_participating == 1) checked @endif>
                    <label for="single_room015">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="model3_not_participating" value="0" id="family_room015" @if($company->Companies_Model3->model3_not_participating == 0) checked @endif>
                    <label for="family_room015">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>

        </div>
    </div>
    <!---------------------------------------------------------------->
    <!---------------------------------------------------------------->
    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.Exempt entities')}}                           
        </label>
    </div> 

    <div class="form-row">
        <div class="form-radio line">
            <label for="model3_exempt_beneficiary" class="radio-label">
                {{trans('form.Are you an exempt beneficial owner?')}}                               
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="model3_exempt_beneficiary" value="1" id="single_room016" required @if($company->Companies_Model3->model3_exempt_beneficiary == 1) checked @endif >
                    <label for="single_room016">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="model3_exempt_beneficiary" value="0" id="family_room016" @if($company->Companies_Model3->model3_exempt_beneficiary == 0) checked @endif >
                    <label for="family_room016">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>

        </div>
    </div>
    <!---------------------------------------------------------------->
    <!---------------------------------------------------------------->
    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.Exempt entities')}}                           
        </label>
    </div> 

    <div class="form-row">
        <div class="form-radio line">
            <label for="model3_exempt_foreign_entities" class="radio-label sm">
                {{trans('form.Are you an exempt non-US and non-financial entity? (This designation is also known as exempt non-financial foreign entities)')}}
                </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="model3_exempt_foreign_entities" value="1" id="single_room017" required @if($company->Companies_Model3->model3_exempt_foreign_entities == 1) checked @endif>
                    <label for="single_room017">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="model3_exempt_foreign_entities" value="0" id="family_room017" @if($company->Companies_Model3->model3_exempt_foreign_entities == 0) checked @endif>
                    <label for="family_room017">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>

        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="model3_active_foreign_entities" class="radio-label sm">
                {{trans('form.Are you an active Non-US Non-Financial Entity? (This designation is known as Active Non-Financial Foreign Entity)')}}                                    
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="model3_active_foreign_entities" value="1" id="single_room018" required @if($company->Companies_Model3->model3_active_foreign_entities == 1) checked @endif>
                    <label for="single_room018">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="model3_active_foreign_entities" value="0" id="family_room018" @if($company->Companies_Model3->model3_active_foreign_entities == 0) checked @endif>
                    <label for="family_room018">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>

        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="model3_notactive_foreign_entities" class="radio-label sm">
                {{trans('form.Are you a passive non-US non-financial entity? (This designation is known as passive non-financial foreign entity)')}}                               
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="model3_notactive_foreign_entities" value="1" id="single_room019" required @if($company->Companies_Model3->model3_notactive_foreign_entities == 1) checked @endif>
                    <label for="single_room019">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="model3_notactive_foreign_entities" value="0" id="family_room019" @if($company->Companies_Model3->model3_notactive_foreign_entities == 0) checked @endif>
                    <label for="family_room019">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>

        </div>
    </div>
    <!---------------------------------------------------------------->
    <!---------------------------------------------------------------->
    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.Non-financial and inactive foreign entities')}}                           
        </label>
    </div> 

    <div class="form-row">
        <div class="form-radio line">
            <label for="model3_tax_identification_num" class="radio-label">
                {{trans('form.Do you have a tax identification number?')}}                                
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="model3_tax_identification_num" value="1" id="single_room020" required @if($company->Companies_Model3->model3_tax_identification_num == 1) checked @endif>
                    <label for="single_room020">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="model3_tax_identification_num" value="0" id="family_room020" @if($company->Companies_Model3->model3_tax_identification_num == 0) checked @endif>
                    <label for="family_room020">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-group">
                    <label for="phone"></label>
                    <input type="text" name="model3_tax_us_tin" value="{{$company->Companies_Model3->model3_tax_us_tin}}" placeholder="{{trans('form.US tax identification number')}}"class="form-control" required="">
                    @error('model3_tax_us_tin')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <!---------------------------------------------------------------->
    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.Please also provide the details requested below in full for any of the primary owners')}}
            </label>
        </div>
    </div>


    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.entity')}} 1                                   
        </label>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model3_entity1_name" value="{{$company->Companies_Model3->model3_entity1_name}}" placeholder="{{trans('form.The name of the US controlling person')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model3_entity1_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model3_entity1_address" value="{{$company->Companies_Model3->model3_entity1_address}}" placeholder={{trans('form.US controlling person address')}} aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model3_entity1_address')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model3_entity1_ownership" value="{{$company->Companies_Model3->model3_entity1_ownership}}" placeholder="{{trans('form.Percentage of ownership held by the US controlling person')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model3_entity1_ownership')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model3_entity1_tax" value="{{$company->Companies_Model3->model3_entity1_tax}}" placeholder="{{trans('form.The US tax identification number of the controlling person')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model3_entity1_tax')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <!---------------------------------------------------------------->
    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.entity')}} 2                                   
        </label>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model3_entity2_name" value="{{$company->Companies_Model3->model3_entity2_name}}" placeholder="{{trans('form.The name of the US controlling person')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model3_entity2_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model3_entity2_address" value="{{$company->Companies_Model3->model3_entity2_address}}" placeholder={{trans('form.US controlling person address')}} aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model3_entity2_address')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model3_entity2_ownership" value="{{$company->Companies_Model3->model3_entity2_ownership}}" placeholder="{{trans('form.Percentage of ownership held by the US controlling person')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model3_entity2_ownership')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model3_entity2_tax" value="{{$company->Companies_Model3->model3_entity2_tax}}" placeholder="{{trans('form.The US tax identification number of the controlling person')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model3_entity2_tax')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <!---------------------------------------------------------------->
    <!---------------------------------------------------------------->
    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.entity')}} 3                                   
        </label>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model3_entity3_name" value="{{$company->Companies_Model3->model3_entity3_name}}" placeholder="{{trans('form.The name of the US controlling person')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model3_entity3_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model3_entity3_address" value="{{$company->Companies_Model3->model3_entity3_address}}" placeholder={{trans('form.US controlling person address')}} aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model3_entity3_address')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model3_entity3_ownership" value="{{$company->Companies_Model3->model3_entity3_ownership}}" placeholder="{{trans('form.Percentage of ownership held by the US controlling person')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model3_entity3_ownership')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model3_entity3_tax" value="{{$company->Companies_Model3->model3_entity3_tax}}" placeholder="{{trans('form.The US tax identification number of the controlling person')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model3_entity3_tax')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <!---------------------------------------------------------------->
    <!---------------------------------------------------------------->
    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.entity')}} 4                                   
        </label>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model3_entity4_name" value="{{$company->Companies_Model3->model3_entity4_name}}" placeholder="{{trans('form.The name of the US controlling person')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model3_entity4_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model3_entity4_address" value="{{$company->Companies_Model3->model3_entity4_address}}" placeholder={{trans('form.US controlling person address')}} aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model3_entity4_address')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model3_entity4_ownership" value="{{$company->Companies_Model3->model3_entity4_ownership}}" placeholder="{{trans('form.Percentage of ownership held by the US controlling person')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model3_entity4_ownership')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model3_entity4_tax" value="{{$company->Companies_Model3->model3_entity4_tax}}" placeholder="{{trans('form.The US tax identification number of the controlling person')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model3_entity4_tax')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <!---------------------------------------------------------------->

    <input type="hidden" name="step" value="{{$step}}"/>

    <ul class="form-navigation">
        <li><a href="{{url('company-registration/step/'.($step+1))}}">{{trans('form.next')}}</a></li>
        <li><a href="{{url('company-registration/step/'.($step-1))}}">{{trans('form.previous')}}</a></li>
    </ul>
</fieldset>
<!------------------------------------ Self-Certification & Declaration Form  -------------------------------->