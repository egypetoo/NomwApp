<!-------------------------------------  	General information   ------------------------------------->
<h3>
</h3>
<fieldset>
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.general information')}}
        </label>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.Trade Name')}}
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="trade_name" value="{{$company->trade_name}}" placeholder="{{trans('form.Trade Name')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('trade_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.Legal name')}}
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="legal_name" value="{{$company->legal_name}}" placeholder="{{trans('form.Legal name')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('legal_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="legal_form" class="radio-label">
                {{trans('form.Legal form')}}
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="legal_form" value="limited_liability" id="single" required @if($company->legal_form == 'limited_liability') checked @endif>
                    <label for="single">
                        {{trans('form.Limited liability')}}
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="legal_form" value="contribution_locked" id="family" @if($company->legal_form == 'contribution_locked') checked @endif>
                    <label for="family">
                        {{trans('form.Contribution locked')}}
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="legal_form" value="public_contribution" id="famil" @if($company->legal_form == 'public_contribution') checked @endif>
                    <label for="famil">
                        {{trans('form.Public contribution')}}
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="legal_form" value="solidarity" id="fam" @if($company->legal_form == 'solidarity') checked @endif>
                    <label for="fam">
                        {{trans('form.Solidarity')}}
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="legal_form" value="other" id="business" @if($company->legal_form == 'other') checked @endif>
                    <label for="business">{{trans('form.other')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>


    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$company->Companies_LegalForm->legal_countries_operate}}" name="legal_countries_operate" placeholder="{{trans('form.countries in which it operates')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('legal_countries_operate')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$company->Companies_LegalForm->legal_commercial_registration_no}}" name="legal_commercial_registration_no" placeholder="{{trans('form.Commercial Registration No')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('legal_commercial_registration_no')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$company->Companies_LegalForm->legal_website}}" name="legal_website" placeholder="{{trans('form.website')}}" aria-label="default input example"  maxlength="100" onkeypress="return isNumberKey(event)" required>
            @error('legal_website')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$company->Companies_LegalForm->legal_secondary_business_volume}}" name="legal_secondary_business_volume" placeholder="{{trans('form.Annual business volume')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('legal_secondary_business_volume')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$company->Companies_LegalForm->legal_address}}" name="legal_address" placeholder="{{trans('form.registered address')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('legal_address')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$company->Companies_LegalForm->legal_country_name}}" name="legal_country_name" placeholder="{{trans('form.country of registration')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('legal_country_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="tel" value="{{$company->Companies_LegalForm->legal_phone}}" name="legal_phone" placeholder="{{trans('form.Mobile_numb')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('legal_phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="tel" value="{{$company->Companies_LegalForm->legal_telephone}}" name="legal_telephone" placeholder="{{trans('form.phone')}}" aria-label="default input example"  maxlength="20" onkeypress="return isNumberKey(event)" required>
            @error('legal_telephone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$company->Companies_LegalForm->legal_birth_place}}" name="legal_birth_place" placeholder="{{trans('form.Country and place of birth')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('legal_birth_place')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$company->Companies_LegalForm->legal_residence_place}}" name="legal_residence_place" placeholder="{{trans('form.Place of residence')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('legal_residence_place')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$company->Companies_LegalForm->legal_employees_number}}" name="legal_employees_number" placeholder="{{trans('form.Number of Employees')}}" aria-label="default input example"  maxlength="15" onkeypress="return isNumberKey(event)" required>
            @error('legal_employees_number')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">{{trans('form.Date of Establishment')}}</label>
            <input class="form-control" type="date" name="establishment_date" value="{{$company->establishment_date}}" aria-label="default input example">
            @error('establishment_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="name" class="head">{{trans('form.Expiry date')}}</label>
            <input class="form-control" type="date" name="expiry_date" value="{{$company->expiry_date}}" aria-label="default input example">
            @error('expiry_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.The person authorized to sign')}}                                
            </label>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$company->Companies_Person_Authorized->person_authorized_name}}" name="person_authorized_name" placeholder="{{trans('form.name')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('person_authorized_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$company->Companies_Person_Authorized->person_authorized_nationality}}" name="person_authorized_nationality" placeholder="{{trans('form.nationality')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('person_authorized_nationality')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$company->Companies_Person_Authorized->person_authorized_id_type}}" name="person_authorized_id_type" placeholder="{{trans('form.id_type')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('person_authorized_id_type')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$company->Companies_Person_Authorized->person_authorized_id_number}}" name="person_authorized_id_number" placeholder="{{trans('form.ID Number')}}" aria-label="default input example"  maxlength="20" onkeypress="return isNumberKey(event)" required>
            @error('person_authorized_id_number')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    {{-- <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">{{trans('form.Expiry date')}}</label>
            <input class="form-control" type="date" name="" aria-label="default input example">
        </div>
    </div> --}}



    <!-- <div class="form-row">
        <div class="form-radio line">
            <label for="room_type2" class="radio-label">
                الجنس
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="room_type2" id="single2">
                    <label for="single2">
                        ذكر
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="room_type2" id="family2">
                    <label for="family2">
                        انثى
                    </label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="room_type3" class="radio-label">
                نوع الهوية
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="room_type3" id="single3">
                    <label for="single3">
                        الهوية الوطنية
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="room_type3" id="family3">
                    <label for="family3">
                        جواز سفر
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="room_type3" id="fam3">
                    <label for="fam3">
                        اقامة
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="room_type3" id="business3" checked>
                    <label for="business3">اخرى</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="room_type4" class="radio-label">
                الحالة الاجتماعية 
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="room_type4" id="family4">
                    <label for="family4">
                        اعزب
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="room_type4" id="fam4">
                    <label for="fam4">
                        متزوج
                    </label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
        <div class="form-group line">
            <label for="name" class="son">عدد افراد الاسرة</label>
            <input class="form-control" type="text" placeholder="عدد افراد الاسرة" aria-label="default input example">
        </div>
    </div> -->
    
    <input type="hidden" name="step" value="{{$step}}"/>

    <ul class="form-navigation">
        <li><a href="{{url('company-registration/step/'.($step+1))}}">{{trans('form.next')}}</a></li>
        <li><a href="{{url('company-registration/step/'.($step-1))}}">{{trans('form.previous')}}</a></li>
    </ul>

</fieldset>
<!-------------------------------------  	General information   ------------------------------------->