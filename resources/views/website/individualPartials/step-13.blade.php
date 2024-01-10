<!--------------------------------------  الأهداف الاستثمارية العامة ----------------------------------->
<h3></h3>
<fieldset> 
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.General investment goals')}}                          
            </label>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="investment_objectives" class="radio-label">
                {{trans('form.General investment goals')}} [ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="investment_objectives" value="a" id="single_room32" required @if($individual->investment_objectives == 'a') checked @endif>
                    <label for="single_room32"> {{trans('form.Monetization')}} [4]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="investment_objectives" value="b" id="family_room32"  @if($individual->investment_objectives == 'b') checked @endif>
                    <label for="family_room32"> {{trans('form.capital growth')}} [6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="investment_objectives" value="c" id="familyroom32"  @if($individual->investment_objectives == 'c') checked @endif>
                    <label for="familyroom32">  {{trans('form.Create retirement savings')}} [2]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="investment_objectives" value="d" id="singlerom32"  @if($individual->investment_objectives == 'd') checked @endif>
                    <label for="singlerom32"> {{trans('form.Buying an asset (eg: real estate, vehicle)')}} [2]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="investment_objectives" value="e" id="familyrom32"  @if($individual->investment_objectives == 'e') checked @endif>
                    <label for="familyrom32"> {{trans('form.Capital protection')}} [2]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="investment_objectives" value="f" id="snglerom32"  @if($individual->investment_objectives == 'f') checked @endif>
                    <label for="snglerom32">{{trans('form.balanced')}} [4]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="investment_objectives" value="g" id="fmilyrom32"  @if($individual->investment_objectives == 'g') checked @endif>
                    <label for="fmilyrom32"> {{trans('form.Project financing')}} [3]</label>
                    <span class="check"></span>
                </div>
            </div>
            
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="refund_period" class="radio-label">
                {{trans('form.The period during which the customer expects to recover the invested money')}} [ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="refund_period" value="short" id="single_room33" required @if($individual->refund_period == 'short') checked @endif>
                    <label for="single_room33"> {{trans('form.Short term (less than a year)')}} [2]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="refund_period" value="average" id="family_room33"  @if($individual->refund_period == 'average') checked @endif>
                    <label for="family_room33">{{trans('form.Medium term (from one to five years)')}} [4]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="refund_period" value="long" id="familyroom33"  @if($individual->refund_period == 'long') checked @endif>
                    <label for="familyroom33">{{trans('form.Long term (more than five years)')}} [6]</label>
                    <span class="check"></span>
                </div>
                
                
            </div>
            
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="investment_assets" class="radio-label">
                {{trans('form.What are the client preferred investment assets?')}} [ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">   
                <div class="form-radio-item">
                    <input type="radio" name="investment_assets" value="SAR" id="singlerom33" required  @if($individual->investment_assets == 'SAR') checked @endif>
                    <label for="singlerom33">{{trans('form.Assets in Saudi Riyals')}} [4]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="investment_assets" value="another" id="familyrom33"  @if($individual->investment_assets == 'another') checked @endif>
                    <label for="familyrom33"> {{trans('form.Assets in other foreign currencies')}} [6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-group">
                    <label for="name"></label>
                    <input class="form-control" type="text" name="investment_assets_currency" value="{{$individual->investment_assets_currency}}" placeholder="{{trans('form.Foreign currencies should be indicated.')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)">
                    @error('investment_assets_currency')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="step" value="{{$step}}"/>

    <ul class="form-navigation">
		<li><a onclick="document.getElementById('signup-form').submit();">{{trans('form.next')}}</a></li>
        <li><a href="{{url('indvidual-registration/step/'.($step-1))}}">{{trans('form.previous')}}</a></li>
    </ul>
    
</fieldset>
<!--------------------------------------  الأهداف الاستثمارية العامة -----------------------------------> 