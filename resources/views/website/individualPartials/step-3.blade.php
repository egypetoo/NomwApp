<!---------------------------------- بيانات الاتصال والمراسلات ----------------------------->
<h3>
</h3>
<fieldset>
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.Contact and correspondence data')}}
        </label>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.The national address')}} 
            </label>
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.name')}}" name="national_address_name" value="{{$individual->Individuals_contacts->national_address_name}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('national_address_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.District')}}" name="national_address_region_name" value="{{$individual->Individuals_contacts->national_address_region_name}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('national_address_region_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.street')}}" name="national_address_area_name" value="{{$individual->Individuals_contacts->national_address_area_name}}" aria-label="default input example" maxlength="80" onkeypress="return isNumberKey(event)" required>
                @error('national_address_area_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.build_num')}}" name="national_address_build_num" value="{{$individual->Individuals_contacts->national_address_build_num}}" aria-label="default input example" maxlength="4" onkeypress="return isNumberKey(event)" required>
                @error('national_address_build_num')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>


    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.mail_num')}}" value="{{$individual->Individuals_contacts->national_address_postal_code}}" name="national_address_postal_code" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('national_address_postal_code')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.city')}}" value="{{$individual->Individuals_contacts->national_address_city}}" name="national_address_city" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('national_address_city')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.additional code')}}" value="{{$individual->Individuals_contacts->national_address_additional_code}}" name="national_address_additional_code" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('national_address_additional_code')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.country')}}" value="{{$individual->Individuals_contacts->national_address_country}}" name="national_address_country" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('national_address_country')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="national_address_sender_type" class="radio-label">
                {{trans('form.Correspondence mechanism')}}
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="national_address_sender_type" value="text" id="single5" required @if($individual->Individuals_contacts->national_address_sender_type == 'text') checked @endif>
                    <label for="single5">
                        {{trans('form.Text message')}}
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="national_address_sender_type" value="sms" id="family556565" @if($individual->Individuals_contacts->national_address_sender_type == 'sms') checked @endif>
                    <label for="family556565">
                        {{trans('form.mail')}} 
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="national_address_sender_type" value="email" id="fam5845" @if($individual->Individuals_contacts->national_address_sender_type == 'email') checked @endif>
                    <label for="fam5845">
                        {{trans('form.e-mail')}}
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="national_address_sender_type" value="nothing" id="business518412" @if($individual->Individuals_contacts->national_address_sender_type == 'nothing') checked @endif>
                    <label for="business518412">{{trans('form.no limitation')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="national_address_sender_lang" class="radio-label">
                {{trans('form.Correspondence language')}}
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="national_address_sender_lang" value="ar" id="single6" required @if($individual->Individuals_contacts->national_address_sender_lang == 'ar') checked @endif>
                    <label for="single6">
                        {{trans('form.ar')}} 
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="national_address_sender_lang" value="en" id="family6" @if($individual->Individuals_contacts->national_address_sender_lang == 'en') checked @endif>
                    <label for="family6">
                        {{trans('form.en')}}  
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="national_address_sender_lang" value="nothing" id="business6" @if($individual->Individuals_contacts->national_address_sender_lang == 'nothing') checked @endif>
                    <label for="business6">{{trans('form.no limitation')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.Contact Data')}}
            </label>
        </div>
        <div class="form-group">
            <label for="national_address_phone1"></label>
            <input type="text" name="national_address_phone1" value="{{$individual->Individuals_contacts->national_address_phone1}}" placeholder="{{trans('form.Mobile number')}}" class="form-control" maxlength="15" onkeypress="return isNumberKey(event)" required>
            @error('national_address_phone1')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="national_address_phone2"></label>
            <input type="text" name="national_address_phone2" value="{{$individual->Individuals_contacts->national_address_phone2}}" placeholder="{{trans('form.another number')}}" class="form-control" maxlength="15" onkeypress="return isNumberKey(event)" required>
            @error('national_address_phone2')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="national_address_email"></label>
            <input type="text" name="national_address_email" value="{{$individual->Individuals_contacts->national_address_email}}" placeholder="{{trans('form.email')}}" class="form-control" maxlength="40" onkeypress="return isNumberKey(event)" required>
            @error('national_address_email')
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
<!---------------------------------- بيانات الاتصال والمراسلات ----------------------------->