<!-----------------------   CLIENT'S PROFESSIONAL EXPERIENCES IN THE FINANCIAL SECTOR --------------------------------->
<h3>
</h3>
<fieldset> 
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
           {{trans('form.Practical experiences of the client in the financial sector')}}          
        </label>
    </div>
    
    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.Points yes = 10 / no = 0')}}
            </label>
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-radio line">
            <label for="have_other_experiences" class="radio-label sm">
                {{trans('form.Does the client have any other practical experience related to the financial sector?')}}
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="have_other_experiences" value="1" id="single_room23" required @if($company->have_other_experiences == 1) checked @endif>
                    <label for="single_room23"> {{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="have_other_experiences" value="0" id="family_room23" @if($company->have_other_experiences == 0) checked @endif>
                    <label for="family_room23"> {{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-group">
                    <label for="name"></label>
                    <input class="form-control" type="text" name="other_experiences_true" value="{{$company->other_experiences_true}}" placeholder="{{trans('form.If the answer is yes, please specify years of experience')}}" aria-label="default input example" maxlength="80" onkeypress="return isNumberKey(event)" required>
                    @error('other_experiences_true')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="other_financial_information" class="radio-label">
                {{trans('form.Is there any other information about the financial situation?')}}                               
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="other_financial_information" value="1" id="single_room24" required @if($company->other_financial_information == 1) checked @endif>
                    <label for="single_room24"> {{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="other_financial_information" value="0" id="family_room24" @if($company->other_financial_information == 0) checked @endif>
                    <label for="family_room24"> {{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>


    <div class="form-row">
        <label for="room2" class="radio-label choose">
            {{trans('form.other information')}}                                                                                                   
        </label>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="loan_ratio" class="radio-label">
                {{trans('form.Percentage of Loans out of Total Invested Funds [Points]')}}    
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="loan_ratio" value="a" id="single_room28" required @if($company->loan_ratio == 'a') checked @endif>
                    <label for="single_room28"> 0-5% [6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="loan_ratio" value="b" id="family_room28" @if($company->loan_ratio == 'b') checked @endif>
                    <label for="family_room28"> 5-15% [1] </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="loan_ratio" value="c" id="familyroom28" @if($company->loan_ratio == 'c') checked @endif>
                    <label for="familyroom28"> 15-30% [0] </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="loan_ratio" value="d" id="singlerom28" @if($company->loan_ratio == 'd') checked @endif>
                    <label for="singlerom28"> 30-50% [0] </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="loan_ratio" value="e" id="familyrom28" @if($company->loan_ratio == 'e') checked @endif>
                    <label for="familyrom28"> {{trans('form.more than 50%')}} [0]</label>
                    <span class="check"></span>
                </div>
            </div>
            
        </div>
    </div>


    <div class="form-row">
        <div class="form-radio line">
            <label for="financing_deals" class="radio-label">
                {{trans('form.Margin Finance Transactions During the Previous Five Years [Points]')}}    
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="financing_deals" value="1" id="single_room29" required @if($company->financing_deals == 1) checked @endif>
                    <label for="single_room29"> {{trans('form.yes')}} [0]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="financing_deals" value="0" id="family_room29" @if($company->financing_deals == 0) checked @endif>
                    <label for="family_room29"> {{trans('form.no')}} [4] </label>
                    <span class="check"></span>
                </div>
            </div>
            
        </div>
    </div>

    <div class="form-row">
        <label for="room2" class="radio-label choose">
            {{trans('form.Investment knowledge and experience')}}                                                                                                   
        </label>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="investment_experience" class="radio-label">
                {{trans('form.Investment knowledge and experience [Points]')}}    
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="investment_experience" value="low" id="single_room30" required @if($company->investment_experience == 'low') checked @endif>
                    <label for="single_room30"> {{trans('form.low')}} [0]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="investment_experience" value="average" id="family_room30" @if($company->investment_experience == 'average') checked @endif>
                    <label for="family_room30"> {{trans('form.average')}} [4] </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="investment_experience" value="high" id="familyroom30" @if($company->investment_experience == 'high') checked @endif>
                    <label for="familyroom30"> {{trans('form.high')}} [6] </label>
                    <span class="check"></span>
                </div>
            </div>
            
        </div>
    </div>

    <div class="form-row">
        <label for="room2" class="radio-label choose">
           {{trans('form.customer ability to take risks')}}                           
        </label>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="customer_ability_take_risks" class="radio-label">
                {{trans('form.customer ability to take risks')}} [ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="customer_ability_take_risks" value="low" id="single_room31" required @if($company->customer_ability_take_risks == 'low') checked @endif>
                    <label for="single_room31"> {{trans('form.low')}} [0]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="customer_ability_take_risks" value="average" id="family_room31" @if($company->customer_ability_take_risks == 'average') checked @endif>
                    <label for="family_room31">{{trans('form.average')}} [4] </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="customer_ability_take_risks" value="high" id="familyroom30212" @if($company->customer_ability_take_risks == 'high') checked @endif>
                    <label for="familyroom30212"> {{trans('form.high')}} [6] </label>
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
<!-----------------------   CLIENT'S PROFESSIONAL EXPERIENCES IN THE FINANCIAL SECTOR --------------------------------->
