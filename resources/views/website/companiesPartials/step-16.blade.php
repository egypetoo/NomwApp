<!-----------------------------  Products already invested in     --------------------------->
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
            <label for="previously_invested_products" class="radio-label">
                {{trans('form.Previously invested products')}}  [ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="previously_invested_products" value="a" id="single_room35" required @if($company->previously_invested_products == 'a') checked @endif>
                    <label for="single_room35"> {{trans('form.shares')}} [6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="previously_invested_products" value="b" id="family_room35" @if($company->previously_invested_products == 'b') checked @endif>
                    <label for="family_room35">  {{trans('form.debt instruments')}} [2]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="previously_invested_products" value="c" id="familyroom35" @if($company->previously_invested_products == 'c') checked @endif>
                    <label for="familyroom35"> {{trans('form.mutual funds')}} [6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="previously_invested_products" value="d" id="singlerom38" @if($company->previously_invested_products == 'd') checked @endif>
                    <label for="singlerom38">  {{trans('form.real estate')}}  [3]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="previously_invested_products" value="e" id="familyrom38" @if($company->previously_invested_products == 'e') checked @endif>
                    <label for="familyrom38"> {{trans('form.derivative contracts')}} [6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="previously_invested_products" value="f" id="familyro38" @if($company->previously_invested_products == 'f') checked @endif>
                    <label for="familyro38"> {{trans('form.alternative investments')}} [3]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="previously_invested_products" value="g" id="familyro38525" @if($company->previously_invested_products == 'g') checked @endif>
                    <label for="familyro38525"> {{trans('form.Murabaha deposits')}} [4]</label>
                    <span class="check"></span>
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
                    <input type="radio" name="knowledge_level" value="week" id="single_room35424" required @if($company->knowledge_level == 'week') checked @endif>
                    <label for="single_room35424"> {{trans('form.limited')}} [1]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="knowledge_level" value="good" id="family_room351548" @if($company->knowledge_level == 'good') checked @endif>
                    <label for="family_room351548">  {{trans('form.good')}} [4]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="knowledge_level" value="excellent" id="familyroom3574545" @if($company->knowledge_level == 'excellent') checked @endif>
                    <label for="familyroom3574545">  {{trans('form.strong')}} [6]</label>
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
                    <input type="radio" name="trading_years" value="a" id="single_room36" required @if($company->trading_years == 'a') checked @endif>
                    <label for="single_room36"> 0 {{trans('form.Years')}} [0]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="trading_years" value="b" id="family_room36" @if($company->trading_years == 'b') checked @endif>
                    <label for="family_room36">  1-3 {{trans('form.Years')}} [2]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="trading_years" value="c" id="familyroom36" @if($company->trading_years == 'c') checked @endif>
                    <label for="familyroom36">  4-6 {{trans('form.Years')}} [6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="trading_years" value="d" id="singlerom36" @if($company->trading_years == 'd') checked @endif>
                    <label for="singlerom36">  {{trans('form.More than 6 years')}} [8]</label>
                    <span class="check"></span>
                </div>
            </div>
            
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="deals_number" class="radio-label">
                {{trans('form.Estimated number of deals')}} [ {{trans('form.points')}} ]      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="deals_number" value="a" id="single_room37" required @if($company->deals_number == 'a') checked @endif>
                    <label for="single_room37"> 0 {{trans('form.deals')}} [0]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="deals_number" value="b" id="family_room37" @if($company->deals_number == 'b') checked @endif>
                    <label for="family_room37">  1-10 {{trans('form.deals')}} [4]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="deals_number" value="c" id="familyroom37" @if($company->deals_number == 'c') checked @endif>
                    <label for="familyroom37">  10-30 {{trans('form.deals')}} [6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="deals_number" value="d" id="singlerom37" @if($company->deals_number == 'd') checked @endif>
                    <label for="singlerom37">  {{trans('form.More than 30 deals')}} [8]</label>
                    <span class="check"></span>
                </div>
            </div>
            
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="transaction_volume" class="radio-label">
                {{trans('form.Transaction volume')}} [ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="transaction_volume" value="a" id="single_room38" required @if($company->transaction_volume == 'a') checked @endif>
                    <label for="single_room38"> {{trans('form.Less than 200 thousand')}} [1]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="transaction_volume" value="b" id="family_room38" @if($company->transaction_volume == 'b') checked @endif>
                    <label for="family_room38"> {{trans('form.200 thousand to 400 thousand')}} [2]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="transaction_volume" value="c" id="familyroom38" @if($company->transaction_volume == 'c') checked @endif>
                    <label for="familyroom38"> {{trans('form.500 thousand to a million')}} [4]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="transaction_volume" value="d" id="singlerom3265438" @if($company->transaction_volume == 'd') checked @endif>
                    <label for="singlerom3265438">  {{trans('form.million to 5 million')}} [6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="transaction_volume" value="e" id="familyrom8538" @if($company->transaction_volume == 'e') checked @endif>
                    <label for="familyrom8538"> {{trans('form.more than 5 million')}} [8]</label>
                    <span class="check"></span>
                </div>
                
            </div>
            
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="transactions_outside_kingdom" class="radio-label">
                {{trans('form.Securities transactions outside the Kingdom during the previous five years')}} [ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="transactions_outside_kingdom" value="1" id="single_room37848" required @if($company->transactions_outside_kingdom == 1) checked @endif>
                    <label for="single_room37848"> {{trans('form.yes')}} [1]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="transactions_outside_kingdom" value="0" id="family_room357458" @if($company->transactions_outside_kingdom == 0) checked @endif>
                    <label for="family_room357458">  {{trans('form.no')}} [0]</label>
                    <span class="check"></span>
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
<!-----------------------------   Products already invested in  ---------------------------->