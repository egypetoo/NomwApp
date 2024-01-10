<!------------------------------------  شهادة إقرار ذاتي   -------------------------------->
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
            <label for="is_american_resident" class="radio-label">{{trans('form.Are you a person from the United States of America?')}}</label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="is_american_resident" value="1" id="single_room11" required @if($individual->is_american_resident == 1) checked @endif>
                    <label for="single_room11">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="is_american_resident" value="0" id="family_room11" @if($individual->is_american_resident == 0) checked @endif>
                    <label for="family_room11">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="american_state"></label>
            <input type="text" name="american_state" placeholder="{{trans('form.If not (please indicate the country)')}}" value="{{$individual->american_state}}" class="form-control" maxlength="20" onkeypress="return isNumberKey(event)">
            @error('american_state')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-radio line">
            <label for="taxes_in_which_country" class="radio-label">{{trans('form.Are you subject to taxes in any country or countries outside the Kingdom of Saudi Arabia?')}}</label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="taxes_in_which_country" value="1" id="single_room186734321" required @if($individual->taxes_in_which_country == 1) checked @endif>
                    <label for="single_room186734321">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="taxes_in_which_country" value="0" id="family_room1172885" @if($individual->taxes_in_which_country == 0) checked @endif>
                    <label for="family_room1172885">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="taxes_in_which_country_place"></label>
            <input type="text" name="taxes_in_which_country_place" placeholder="{{trans('form.If yes (please indicate the country)')}}" value="{{$individual->taxes_in_which_country_place}}" class="form-control" maxlength="20" onkeypress="return isNumberKey(event)">
            @error('taxes_in_which_country_place')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-radio line">
            <label for="another_visa" class="radio-label">{{trans('form.Do you have an immigrant visa or permanent residence in a country other than Saudi Arabia?')}}</label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="another_visa" value="1" id="single_rooom11" required @if($individual->another_visa == 1) checked @endif>
                    <label for="single_rooom11">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="another_visa" value="0" id="family_rooom11" @if($individual->another_visa == 0) checked @endif>
                    <label for="family_rooom11">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="visa_name"></label>
            <input type="text" name="visa_name" value="{{$individual->visa_name}}" placeholder="{{trans('form.If the answer is (yes), please indicate the status for each permanent residence')}}" class="form-control" maxlength="40" onkeypress="return isNumberKey(event)">
            @error('visa_name')
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
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.Model (3)')}}  
            </label>
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="tax_assessor_guarantee_num" value="{{$individual->Individuals_Assessor->tax_assessor_guarantee_num}}" placeholder="{{trans('form.Social security number')}}" aria-label="default input example" maxlength="20" onkeypress="return isNumberKey(event)">
            @error('tax_assessor_guarantee_num')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="tax_assessor_assigned_id" value="{{$individual->Individuals_Assessor->tax_assessor_assigned_id}}" placeholder="{{trans('form.The identification number of the taxpayer')}}" aria-label="default input example" maxlength="20" onkeypress="return isNumberKey(event)">
            @error('tax_assessor_assigned_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="tax_assessor_adoption_tax_id_number" value="{{$individual->Individuals_Assessor->tax_assessor_adoption_tax_id_number}}" placeholder="{{trans('form.A tax identification number for adoption cases')}}" aria-label="default input example" maxlength="20" onkeypress="return isNumberKey(event)">
            @error('tax_assessor_adoption_tax_id_number')
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
<!------------------------------------  شهادة إقرار ذاتي   -------------------------------->