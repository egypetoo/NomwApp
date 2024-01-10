<!-----------------------------------معلومات الاقامة الضريبية------------------------------>
<h3>
</h3>
<fieldset>
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.Tax residency information')}}  
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                    {{trans('form.Please select your country of residence')}}
            </label>
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.country')}}" value="{{$individual->Individuals_Residency_Information->residency_country_name}}" name="residency_country_name" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('residency_country_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.tax identification number')}}" value="{{$individual->Individuals_Residency_Information->residency_tax_identfire_num}}" name="residency_tax_identfire_num" aria-label="default input example" maxlength="20" onkeypress="return isNumberKey(event)" required>
            @error('residency_tax_identfire_num')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <label for="room2" class="radio-label choose">
            {{trans('form.In the absence of a tax identification number, please choose one of the reasons')}}
        </label>
    </div>
    

    <div class="form-row">
        <div class="form-radio-group">            
            <div class="form-radio-item">
                <input type="radio" name="residency_no_tax_identfire_num" value="a" id="single_room11" required @if($individual->Individuals_Residency_Information->residency_no_tax_identfire_num == 'a') checked @endif>
                <label for="single_room11">{{trans('form.a. The country/jurisdiction in which the Account Holder resides does not issue TINs to residents')}}</label>
                <span class="check"></span>
            </div>
            <div class="form-radio-item">
                <input type="radio" name="residency_no_tax_identfire_num" value="b" id="family_room11" @if($individual->Individuals_Residency_Information->residency_no_tax_identfire_num == 'b') checked @endif>
                <label for="family_room11">{{trans('form.B. Otherwise, the account holder is unable to obtain a TIN or equivalent number')}}</label>
                <span class="check"></span>
            </div>
            <div class="form-radio-item">
                <input type="radio" name="residency_no_tax_identfire_num" value="c" id="singleroom11" @if($individual->Individuals_Residency_Information->residency_no_tax_identfire_num == 'c') checked @endif>
                <label for="singleroom11">{{trans('form.A tax identification number is not required. (Note: Select this reason only if the local law of the relevant jurisdiction does not require a TIN issued by that jurisdiction.)')}}</label>
                <span class="check"></span>
            </div>

        </div>
    </div>
    <input type="hidden" name="step" value="{{$step}}"/>

    <ul class="form-navigation">
		<li><a onclick="document.getElementById('signup-form').submit();">{{trans('form.next')}}</a></li>
        <li><a href="{{url('indvidual-registration/step/'.($step-1))}}">{{trans('form.previous')}}</a></li>
    </ul>
</fieldset>
<!-----------------------------------معلومات الاقامة الضريبية ------------------------------>