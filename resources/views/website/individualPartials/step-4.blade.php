<!------------------------------------  تاكيد محل الاقامة   -------------------------------->
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
            <label for="is_saudi_resident" class="radio-label">{{trans('form.Are you a non-resident person in Saudi Arabia?')}}</label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="is_saudi_resident" value="1" id="single_room7" required @if($individual->is_saudi_resident == 1) checked @endif>
                    <label for="single_room7">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="is_saudi_resident" value="0" id="family_room7" @if($individual->is_saudi_resident == 0) checked @endif>
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
            <input class="form-control" type="text" placeholder="{{trans('form.build_num')}}" value="{{$individual->Individuals_Model1->model1_build_num}}" name="model1_build_num" aria-label="default input example" maxlength="4" onkeypress="return isNumberKey(event)" >
            @error('model1_build_num')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.sub number')}}" value="{{$individual->Individuals_Model1->model1_sub_num}}" name="model1_sub_num" aria-label="default input example" maxlength="4" onkeypress="return isNumberKey(event)">
            @error('model1_sub_num')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.Postal code')}}" value="{{$individual->Individuals_Model1->model1_post_code}}" name="model1_post_code" aria-label="default input example" maxlength="8" onkeypress="return isNumberKey(event)">
            @error('model1_post_code')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>


    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.mail box')}}" value="{{$individual->Individuals_Model1->model1_post_box}}" name="model1_post_box" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
            @error('model1_post_box')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.city')}}" value="{{$individual->Individuals_Model1->model_1_city}}" name="model_1_city" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
            @error('model_1_city')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.country')}}" value="{{$individual->Individuals_Model1->model_1_country}}" name="model_1_country" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
            @error('model_1_country')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="is_registretion_beneficial" class="radio-label">{{trans('form.Are you the real beneficiary of this account?')}}</label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="is_registretion_beneficial" id="single_room8" value="1" @if($individual->is_registretion_beneficial == 1) checked @endif>
                    <label for="single_room8">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="is_registretion_beneficial" id="family_room8" value="0" @if($individual->is_registretion_beneficial == 0) checked @endif>
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
                    <input type="radio" name="beneficiary_status" id="single_room9" value="agent" @if($individual->Individuals_Beneficiary->beneficiary_status == 'agent') checked @endif  >
                    <label for="single_room9">{{trans('form.agent')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="beneficiary_status" id="family_room9" value="legal_representative" @if($individual->Individuals_Beneficiary->beneficiary_status == 'legal_representative') checked @endif >
                    <label for="family_room9">{{trans('form.The legal representative of the seized person')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="beneficiary_status" id="singleroom9" value="executor" @if($individual->Individuals_Beneficiary->beneficiary_status == 'executor') checked @endif >
                    <label for="singleroom9">{{trans('form.executor')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="beneficiary_status" id="familyroom9" value="personal_reference" @if($individual->Individuals_Beneficiary->beneficiary_status == 'personal_reference') checked @endif >
                    <label for="familyroom9">{{trans('form.personal_reference')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="beneficiary_status" id="singlerom9" value="judicial_guard" @if($individual->Individuals_Beneficiary->beneficiary_status == 'judicial_guard') checked @endif >
                    <label for="singlerom9">{{trans('form.judicial_guard')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="beneficiary_status" id="familyrom9" value="other" @if($individual->Individuals_Beneficiary->beneficiary_status == 'other') checked @endif >
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
            <input class="form-control" type="text" placeholder="{{trans('form.quadruple name')}}" value="{{$individual->Individuals_Beneficiary->beneficiary_full_name}}" name="beneficiary_full_name" aria-label="default input example" maxlength="80" onkeypress="return isNumberKey(event)">
                @error('beneficiary_full_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.relative relation')}}" value="{{$individual->Individuals_Beneficiary->beneficiary_relation}}" name="beneficiary_relation" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
                @error('beneficiary_relation')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>


    <div class="form-row">
        <div class="form-group">
            <label for="name">{{trans('form.ID or residence number')}}</label>
            <input class="form-control" type="text" placeholder="{{trans('form.ID or residence number')}}" value="{{$individual->Individuals_Beneficiary->beneficiary_ssn}}" name="beneficiary_ssn" aria-label="default input example" maxlength="20" onkeypress="return isNumberKey(event)">
                @error('beneficiary_ssn')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name">{{trans('form.Expiry date')}}</label>
            <input class="form-control" type="date" placeholder="{{trans('form.Expiry date')}}" value="{{$individual->Individuals_Beneficiary->beneficiary_ssn_expire_date}}" name="beneficiary_ssn_expire_date" aria-label="default input example">
                @error('beneficiary_ssn_expire_date')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name">{{trans('form.The national address')}}</label>
            <input class="form-control" type="text" placeholder="{{trans('form.The national address')}}" value="{{$individual->Individuals_Beneficiary->beneficiary_address}}" name="beneficiary_address" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
                @error('beneficiary_address')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name">{{trans('form.birth_date')}}</label>
            <input class="form-control" type="date" placeholder="{{trans('form.birth_date')}}" value="{{$individual->Individuals_Beneficiary->beneficiary_birth_date}}" name="beneficiary_birth_date" aria-label="default input example">
                @error('beneficiary_birth_date')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="phone"></label>
            <input type="text" placeholder="{{trans('form.Mobile_numb')}}" value="{{$individual->Individuals_Beneficiary->beneficiary_phone1}}" name="beneficiary_phone1" class="form-control" maxlength="15" onkeypress="return isNumberKey(event)">
                @error('beneficiary_phone1')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="phone"></label>
            <input type="text" placeholder="{{trans('form.phone_num')}}" value="{{$individual->Individuals_Beneficiary->beneficiary_phone2}}" name="beneficiary_phone2" class="form-control" maxlength="15" onkeypress="return isNumberKey(event)">
                @error('beneficiary_phone2')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="Email"></label>
            <input type="text" placeholder="{{trans('form.email')}}" value="{{$individual->Individuals_Beneficiary->beneficiary_email}}" name="beneficiary_email" class="form-control" maxlength="60" onkeypress="return isNumberKey(event)">
                @error('beneficiary_email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>
    <input type="hidden" name="step" value="{{$step}}"/>

    <ul class="form-navigation">
		<li><a onclick="document.getElementById('signup-form').submit();">{{trans('form.next')}}</a></li>
        <li><a href="{{url('indvidual-registration/step/'.($step-1))}}">{{trans('form.previous')}}</a></li>
    </ul>


</fieldset>
<!------------------------------------  تاكيد محل الاقامة   -------------------------------->