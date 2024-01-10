<!-----------------------------  معلومات عن المحفظة الاستثمارية للعميل     --------------------------->
<h3>
</h3>
<fieldset> 
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.Information about the client investment portfolio')}}                              
        </label>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="investment_products" class="radio-label">
                {{trans('form.Previously invested products')}}  [ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="investment_products" value="a" id="single_room35" required @if($individual->investment_products == 'a') checked @endif>
                    <label for="single_room35"> {{trans('form.shares')}} [6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="investment_products" value="b" id="family_room35" @if($individual->investment_products == 'b') checked @endif>
                    <label for="family_room35"> {{trans('form.debt instruments')}} [2]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="investment_products" value="c" id="familyroom35" @if($individual->investment_products == 'c') checked @endif>
                    <label for="familyroom35"> {{trans('form.mutual funds')}} [6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="investment_products" value="d" id="singlerom38" @if($individual->investment_products == 'd') checked @endif>
                    <label for="singlerom38">  {{trans('form.real estate')}}  [3]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="investment_products" value="e" id="familyrom38" @if($individual->investment_products == 'e') checked @endif>
                    <label for="familyrom38"> {{trans('form.derivative contracts')}}[6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="investment_products" value="f" id="familyro38" @if($individual->investment_products == 'f') checked @endif>
                    <label for="familyro38"> {{trans('form.alternative investments')}} [3]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="investment_products" value="g" id="familyro38656" @if($individual->investment_products == 'g') checked @endif>
                    <label for="familyro38656"> {{trans('form.Murabaha deposits')}} [4]</label>
                    <span class="check"></span>
                </div>
                <div class="form-group">
                    <label for="name"></label>
                    <input class="form-control" type="text" name="countries_outside" value="{{$individual->countries_outside}}" placeholder="{{trans('form.Countries outside the Kingdom in which these attributes have been implemented')}}" aria-label="default input example">
                    @error('countries_outside')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                
            </div>
            
        </div>
    </div>

        

    <div class="form-row">
        <div class="form-radio">
            <label for="knowledge_level" class="radio-label">
                {{trans('form.level of knowledge and experience')}} [ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="knowledge_level" value="limit" id="single_room3565656" required @if($individual->knowledge_level == 'limit') checked @endif>
                    <label for="single_room3565656"> {{trans('form.limited')}} [1]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="knowledge_level" value="good" id="family_room357878" @if($individual->knowledge_level == 'good') checked @endif>
                    <label for="family_room357878">  {{trans('form.good')}} [4]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="knowledge_level" value="excellent" id="familyroom35666" @if($individual->knowledge_level == 'excellent') checked @endif>
                    <label for="familyroom35666">  {{trans('form.strong')}} [6]</label>
                    <span class="check"></span>
                </div>

            </div>
            
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="trading_years" class="radio-label">
                {{trans('form.Years of trading/holding/investing')}} [ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="trading_years" value="a" id="single_room36" required @if($individual->trading_years == 'a') checked @endif>
                    <label for="single_room36"> 0 {{trans('form.Years')}} [0]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="trading_years" value="b" id="family_room36" @if($individual->trading_years == 'b') checked @endif>
                    <label for="family_room36">  1-3 {{trans('form.Years')}} [2]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="trading_years" value="c" id="familyroom36" @if($individual->trading_years == 'c') checked @endif>
                    <label for="familyroom36">  4-6 {{trans('form.Years')}} [6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="trading_years" value="d" id="singlerom36" @if($individual->trading_years == 'd') checked @endif>
                    <label for="singlerom36">   {{trans('form.More than 6 years')}} [8]</label>
                    <span class="check"></span>
                </div>
            </div>
            
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="deals_number" class="radio-label">
                {{trans('form.Estimated number of deals')}} [ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="deals_number" value="a" id="single_room37" required @if($individual->deals_number == 'a') checked @endif>
                    <label for="single_room37"> 0 {{trans('form.deals')}} [0]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="deals_number" value="b" id="family_room37" @if($individual->deals_number == 'b') checked @endif>
                    <label for="family_room37">  1-10 {{trans('form.deals')}} [4]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="deals_number" value="c" id="familyroom37" @if($individual->deals_number == 'c') checked @endif>
                    <label for="familyroom37">  10-30 {{trans('form.deals')}} [6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="deals_number" value="d" id="singlerom37" @if($individual->deals_number == 'd') checked @endif>
                    <label for="singlerom37"> {{trans('form.More than 30 deals')}} [8]</label>
                    <span class="check"></span>
                </div>
            </div>
            
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="deals_volume" class="radio-label">
                {{trans('form.Transaction volume')}} [ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="deals_volume" value="a" id="single_room38" required @if($individual->deals_volume == 'a') checked @endif>
                    <label for="single_room38"> {{trans('form.Less than 200 thousand')}} [1]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="deals_volume" value="b" id="family_room38" @if($individual->deals_volume == 'b') checked @endif>
                    <label for="family_room38">  {{trans('form.200 thousand to 400 thousand')}} [2]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="deals_volume" value="c" id="familyroom38" @if($individual->deals_volume == 'c') checked @endif>
                    <label for="familyroom38">  {{trans('form.500 thousand to a million')}} [4]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="deals_volume" value="d" id="singlerom3877" @if($individual->deals_volume == 'd') checked @endif>
                    <label for="singlerom3877">  {{trans('form.million to 5 million')}} [6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="deals_volume" value="e" id="familyrom3800" @if($individual->deals_volume == 'e') checked @endif>
                    <label for="familyrom3800"> {{trans('form.more than 5 million')}} [8]</label>
                    <span class="check"></span>
                </div>
                
            </div>
            
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="financial_deals_outside" class="radio-label">
                {{trans('form.Securities transactions outside the Kingdom during the previous five years')}} [ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="financial_deals_outside" value="1" id="single_room3888" required @if($individual->financial_deals_outside == 1) checked @endif>
                    <label for="single_room3888"> {{trans('form.yes')}} [1]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="financial_deals_outside" value="0" id="family_room3833" @if($individual->financial_deals_outside == 0) checked @endif>
                    <label for="family_room3833">  {{trans('form.no')}} [0]</label>
                    <span class="check"></span>
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
<!-----------------------------  معلومات عن المحفظة الاستثمارية للعميل    ---------------------------->