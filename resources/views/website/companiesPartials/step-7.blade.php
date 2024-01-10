<!------------------------------------  Confirmation of residence   -------------------------------->
<h3>
</h3>
<fieldset>
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.Confirmation of residence')}}  
        </label>
    </div>
    <div class="form-row">
        <div class="form-radio line">
            <label for="not_residing_sa" class="radio-label">{{trans('form.Are you a non-resident person in Saudi Arabia?')}}</label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="not_residing_sa" value="1" id="single_room73232" required @if($company->not_residing_sa == 1) checked @endif>
                    <label for="single_room73232">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="not_residing_sa" value="0" id="family_room7" @if($company->not_residing_sa == 0) checked @endif>
                    <label for="family_room7">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.If the answer is (yes), please fill out Form 1')}}                                                                                                  
        </label>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.Model (1)')}}  
            </label>
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model1_build_num" value="{{$company->Companies_Model1->model1_build_num}}" placeholder="{{trans('form.build_num')}}" aria-label="default input example" maxlength="10" onkeypress="return isNumberKey(event)" required>
            @error('model1_build_num')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model1_sub_build_num" value="{{$company->Companies_Model1->model1_sub_build_num}}" placeholder="{{trans('form.sub number')}}" aria-label="default input example" maxlength="10" onkeypress="return isNumberKey(event)" required>
            @error('model1_sub_build_num')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model1_post_code" value="{{$company->Companies_Model1->model1_post_code}}" placeholder="{{trans('form.Postal code')}}" aria-label="default input example" maxlength="20" onkeypress="return isNumberKey(event)" required>
            @error('model1_post_code')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>


    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model1_post_box" value="{{$company->Companies_Model1->model1_post_box}}" placeholder="{{trans('form.mail box')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model1_post_box')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model1_city_name" value="{{$company->Companies_Model1->model1_city_name}}" placeholder="{{trans('form.city')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model1_city_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model1_country_name" value="{{$company->Companies_Model1->model1_country_name}}" placeholder="{{trans('form.country')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model1_country_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="is_real_beneficiary" class="radio-label">{{trans('form.Are you the real beneficiary of this account?')}}</label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="is_real_beneficiary" value="1" id="single_room8" required @if($company->is_real_beneficiary == 1) checked @endif>
                    <label for="single_room8">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="is_real_beneficiary" value="0" id="family_room8" @if($company->is_real_beneficiary == 0) checked @endif>
                    <label for="family_room8">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <label for="room2" class="radio-label choose">
            {{trans('form.If the answer is (no), please fill out Form 2')}}                                                                                                  
        </label>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="beneficiary_status" class="radio-label">
                    {{trans('form.The status of the beneficiary')}}
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="beneficiary_status" value="headmaster" id="single_room9" @if($company->beneficiary_status == 'headmaster') checked @endif>
                    <label for="single_room9">{{trans('form.headmaster')}} </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="beneficiary_status" value="delegate" id="family_room9" @if($company->beneficiary_status == 'delegate') checked @endif>
                    <label for="family_room9">{{trans('form.Delegate for legal entities')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="beneficiary_status" value="other" id="familyrom9" @if($company->beneficiary_status == 'other') checked @endif>
                    <label for="familyrom9">{{trans('form.other')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.Form (2) Related Party Information')}}
            </label>
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model2_full_name" value="{{$company->Companies_Model2->model2_full_name}}" placeholder="{{trans('form.quadruple name')}}" aria-label="default input example" maxlength="80" onkeypress="return isNumberKey(event)" required>
            @error('model2_full_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model2_customer_relationship" value="{{$company->Companies_Model2->model2_customer_relationship}}" placeholder="{{trans('form.Customer relationship')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model2_customer_relationship')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>


    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model2_id_num" value="{{$company->Companies_Model2->model2_id_num}}" placeholder="{{trans('form.ID or residence number')}}" aria-label="default input example" maxlength="20" onkeypress="return isNumberKey(event)" required>
            @error('model2_id_num')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="date" name="model2_expire_date" value="{{$company->Companies_Model2->model2_expire_date}}" placeholder="{{trans('form.Expiry date')}}" aria-label="default input example">
            @error('model2_expire_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model2_address" value="{{$company->Companies_Model2->model2_address}}" placeholder="{{trans('form.The national address')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('model2_address')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="date" name="model2_birth_date" value="{{$company->Companies_Model2->model2_birth_date}}" placeholder="{{trans('form.birth_date')}}" aria-label="default input example">
            @error('model2_birth_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="phone"></label>
            <input type="text" name="model2_phone" value="{{$company->Companies_Model2->model2_phone}}" placeholder="{{trans('form.Mobile number')}}" class="form-control" maxlength="15" onkeypress="return isNumberKey(event)" required>
            @error('contact_data_additional_code')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone"></label>
            <input type="text" name="model2_telephone" value="{{$company->Companies_Model2->model2_telephone}}" placeholder="{{trans('form.phone_num')}}" class="form-control" maxlength="15" onkeypress="return isNumberKey(event)" required>
            @error('contact_data_additional_code')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="Email"></label>
            <input type="text" name="model2_email" value="{{$company->Companies_Model2->model2_email}}" placeholder="{{trans('form.email')}}" class="form-control" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('contact_data_additional_code')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <input type="hidden" name="step" value="{{$step}}"/>

    <ul class="form-navigation">
        <li><a href="{{url('company-registration/step/'.($step+1))}}">{{trans('form.next')}}</a></li>
        <li><a href="{{url('company-registration/step/'.($step-1))}}">{{trans('form.previous')}}</a></li>
    </ul>

</fieldset>
<!------------------------------------    Confirmation of residence   -------------------------------->