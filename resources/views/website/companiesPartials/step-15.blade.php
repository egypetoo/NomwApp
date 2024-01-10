<!--------------------------------------  General Investment Objectives   ----------------------------------->
<h3></h3>
<fieldset> 
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.General investment goals')}}                           
            </label>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="general_investment_goals" class="radio-label">
                {{trans('form.General investment goals')}} [ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="general_investment_goals" value="a" id="single_room32" required @if($company->general_investment_goals == 'a') checked @endif>
                    <label for="single_room32">  {{trans('form.Monetization')}} [8]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="general_investment_goals" value="b" id="family_room32" @if($company->general_investment_goals == 'b') checked @endif>
                    <label for="family_room32"> {{trans('form.capital growth')}} [10]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="general_investment_goals" value="c" id="familyroom32" @if($company->general_investment_goals == 'c') checked @endif>
                    <label for="familyroom32">  {{trans('form.Create retirement savings')}} [2]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="general_investment_goals" value="d" id="singlerom32" @if($company->general_investment_goals == 'd') checked @endif>
                    <label for="singlerom32">  {{trans('form.Buying an asset (eg: real estate, vehicle)')}}  [2]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="general_investment_goals" value="e" id="familyrom32" @if($company->general_investment_goals == 'e') checked @endif>
                    <label for="familyrom32"> {{trans('form.Capital protection')}} [2]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="general_investment_goals" value="f" id="snglerom32" @if($company->general_investment_goals == 'f') checked @endif>
                    <label for="snglerom32">  {{trans('form.balanced')}} [6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="general_investment_goals" value="g" id="fmilyrom32" @if($company->general_investment_goals == 'g') checked @endif>
                    <label for="fmilyrom32"> {{trans('form.Project financing')}} [3]</label>
                    <span class="check"></span>
                </div>
            </div>
            
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="room_type33" class="radio-label">
               {{trans('form.The period during which the customer expects to recover the invested money')}} [ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="Recovery_invested_money" value="low" id="single_room33" required @if($company->Recovery_invested_money == 'low') checked @endif>
                    <label for="single_room33"> {{trans('form.Short term (less than a year)')}}  [2]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="Recovery_invested_money" value="average" id="family_room33" @if($company->Recovery_invested_money == 'average') checked @endif>
                    <label for="family_room33">  {{trans('form.Medium term (from one to five years)')}} [6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="Recovery_invested_money" value="high" id="familyroom33" @if($company->Recovery_invested_money == 'high') checked @endif>
                    <label for="familyroom33">  {{trans('form.Long term (more than five years)')}} [8]</label>
                    <span class="check"></span>
                </div>
                
                
            </div>
            
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="preferred_investment_assets" class="radio-label">
                {{trans('form.What are the client preferred investment assets?')}} [ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">   
                <div class="form-radio-item">
                    <input type="radio" name="preferred_investment_assets" value="SAR" id="singlerom33" required @if($company->preferred_investment_assets == 'SAR') checked @endif>
                    <label for="singlerom33">   {{trans('form.Assets in Saudi Riyals')}} [4]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="preferred_investment_assets" value="other" id="familyrom33" @if($company->preferred_investment_assets == 'other') checked @endif>
                    <label for="familyrom33"> {{trans('form.Assets in other foreign currencies')}} [6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-group">
                    <label for="name"></label>
                    <input class="form-control" type="text" name="currency_other" value="{{$company->currency_other}}" placeholder="{{trans('form.Foreign currencies should be indicated.')}}" aria-label="default input example" maxlength="80" onkeypress="return isNumberKey(event)" required>
                    @error('currency_other')
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
<!--------------------------------------  General Investment Objectives   -----------------------------------> 
