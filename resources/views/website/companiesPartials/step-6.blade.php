<!----------------------------------   Contact Details and Correspondence ----------------------------->
<h3>
</h3>
<fieldset>
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.Contact and correspondence data')}}
        </label>
    </div>

    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.The national address')}}
        </label>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="contact_data_name" value="{{$company->Companies_ContactData->contact_data_name}}" placeholder="{{trans('form.name')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('contact_data_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="contact_data_district" value="{{$company->Companies_ContactData->contact_data_district}}" placeholder="{{trans('form.District')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('contact_data_district')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="contact_data_street" value="{{$company->Companies_ContactData->contact_data_street}}" placeholder="{{trans('form.street')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('contact_data_street')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="contact_data_build_num" value="{{$company->Companies_ContactData->contact_data_build_num}}" placeholder="{{trans('form.build_num')}}" aria-label="default input example"  maxlength="10" onkeypress="return isNumberKey(event)" required>
            @error('contact_data_build_num')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>


    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="contact_data_post_code" value="{{$company->Companies_ContactData->contact_data_post_code}}" placeholder="{{trans('form.mail_num')}}" aria-label="default input example" maxlength="10" onkeypress="return isNumberKey(event)" required>
            @error('contact_data_post_code')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="contact_data_city_name" value="{{$company->Companies_ContactData->contact_data_city_name}}" placeholder="{{trans('form.city')}}" aria-label="default input example" maxlength="15" onkeypress="return isNumberKey(event)" required>
            @error('contact_data_city_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="contact_data_additional_code" value="{{$company->Companies_ContactData->contact_data_additional_code}}" placeholder="{{trans('form.additional code')}}" aria-label="default input example" maxlength="20" onkeypress="return isNumberKey(event)" required>
            @error('contact_data_additional_code')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="contact_data_country_name" value="{{$company->Companies_ContactData->contact_data_country_name}}" placeholder="{{trans('form.country')}}" aria-label="default input example" maxlength="20" onkeypress="return isNumberKey(event)" required>
            @error('contact_data_country_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="contact_data_correspondence_mechanism" class="radio-label">
                {{trans('form.Correspondence mechanism')}}
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="contact_data_correspondence_mechanism" value="text" id="single5" required @if($company->Companies_ContactData->contact_data_correspondence_mechanism == 'text') checked @endif>
                    <label for="single5">
                        {{trans('form.Text message')}}
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="contact_data_correspondence_mechanism" value="sms" id="family5" @if($company->Companies_ContactData->contact_data_correspondence_mechanism == 'sms') checked @endif>
                    <label for="family5">
                        {{trans('form.mail')}} 
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="contact_data_correspondence_mechanism" value="email" id="fam5" @if($company->Companies_ContactData->contact_data_correspondence_mechanism == 'email') checked @endif>
                    <label for="fam5">
                        {{trans('form.e-mail')}}
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="contact_data_correspondence_mechanism" value="nothing" id="business5" @if($company->Companies_ContactData->contact_data_correspondence_mechanism == 'nothing') checked @endif>
                    <label for="business5">{{trans('form.no limitation')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="contact_data_correspondence_lang" class="radio-label">
                {{trans('form.Correspondence language')}}
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="contact_data_correspondence_lang" value="ar" id="single6" required @if($company->Companies_ContactData->contact_data_correspondence_lang == 'ar') checked @endif>
                    <label for="single6">
                        {{trans('form.ar')}} 
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="contact_data_correspondence_lang" value="en" id="family6" @if($company->Companies_ContactData->contact_data_correspondence_lang == 'en') checked @endif>
                    <label for="family6">
                        {{trans('form.en')}} 
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="contact_data_correspondence_lang" value="nothing" id="business6" @if($company->Companies_ContactData->contact_data_correspondence_lang == 'nothing') checked @endif>
                    <label for="business6">{{trans('form.no limitation')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>


    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.Contact Data')}} 
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="text"></label>
            <input type="text" name="contact_data_officer_name" value="{{$company->Companies_ContactData->contact_data_officer_name}}" placeholder="{{trans('form.The name of the contact officer')}}" class="form-control" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('contact_data_officer_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="text"></label>
            <input type="text" name="contact_data_position" value="{{$company->Companies_ContactData->contact_data_position}}" placeholder="{{trans('form.position')}}" class="form-control" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('contact_data_position')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="phone"></label>
            <input type="text" name="contact_data_phone1" value="{{$company->Companies_ContactData->contact_data_phone1}}" placeholder="{{trans('form.Mobile number')}}" class="form-control" maxlength="15" onkeypress="return isNumberKey(event)" required>
            @error('contact_data_phone1')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone"></label>
            <input type="text" name="contact_data_phone2" value="{{$company->Companies_ContactData->contact_data_phone2}}" placeholder="{{trans('form.another number')}}" class="form-control" maxlength="15" onkeypress="return isNumberKey(event)" required>
            @error('contact_data_phone2')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="Email"></label>
            <input type="text" name="contact_data_email" value="{{$company->Companies_ContactData->contact_data_email}}" placeholder="{{trans('form.email')}}" class="form-control" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('contact_data_email')
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
<!---------------------------------- Contact Details and Correspondence   ----------------------------->