<!-----------------------  الخبرات العملية للعميل في القطاع المالي --------------------------------->
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
                {{trans('form.Points yes = 6 / no = 0')}}
            </label>
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-radio line">
            <label for="is_workin_financial_sector" class="radio-label sm">
                {{trans('form.Has the client ever worked in the financial sector during the past five years? (This includes, for example, working for financial market institutions, banks, financing companies, and insurance companies).')}}
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="is_workin_financial_sector" required value="1" id="single_room23" @if($individual->is_workin_financial_sector == 1) checked @endif>
                    <label for="single_room23">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="is_workin_financial_sector" value="0" id="family_room23" @if($individual->is_workin_financial_sector == 0) checked @endif>
                    <label for="family_room23">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="is_other_experiences" class="radio-label">
                {{trans('form.Does the client have any other practical experience related to the financial sector?')}}  
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="is_other_experiences" value="1" id="single_room24" required @if($individual->is_other_experiences == 1) checked @endif>
                    <label for="single_room24">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="is_other_experiences" value="0" id="family_room24" @if($individual->is_other_experiences == 0) checked @endif>
                    <label for="family_room24">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="is_professional_certificates" class="radio-label">
                {{trans('form.Do you have any professional certifications? Please specify (for individual customers)')}}              
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="is_professional_certificates" value="1" id="single_room25" required @if($individual->is_professional_certificates == 1) checked @endif>
                    <label for="single_room25">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="is_professional_certificates" value="0" id="family_room25" @if($individual->is_professional_certificates == 0) checked @endif>
                    <label for="family_room25">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="is_refused_private_account" class="radio-label">
                {{trans('form.Has a financial institution ever refused to open an account for you?')}}                               
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="is_refused_private_account" value="1" id="single_room26" required @if($individual->is_refused_private_account == 1) checked @endif>
                    <label for="single_room26">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="is_refused_private_account" value="0" id="family_room26" @if($individual->is_refused_private_account == 0) checked @endif>
                    <label for="family_room26">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="is_other_info_financial" class="radio-label">
               {{trans('form.Is there any other information about the financial situation?')}}                     
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="is_other_info_financial" value="1" id="single_room27" required @if($individual->is_other_info_financial == 1) checked @endif>
                    <label for="single_room27">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="is_other_info_financial" value="0" id="family_room277" @if($individual->is_other_info_financial == 0) checked @endif>
                    <label for="family_room277">{{trans('form.no')}}</label>
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
                    <input type="radio" name="loan_ratio" value="a" id="single_room28" required @if($individual->loan_ratio == 'a') checked @endif>
                    <label for="single_room28"> 0-5% [4]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="loan_ratio" value="b" id="family_room28" @if($individual->loan_ratio == 'b') checked @endif>
                    <label for="family_room28"> 5-15% [1] </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="loan_ratio" value="c" id="familyroom28" @if($individual->loan_ratio == 'c') checked @endif>
                    <label for="familyroom28"> 15-30% [0] </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="loan_ratio" value="d" id="singlerom28" @if($individual->loan_ratio == 'd') checked @endif>
                    <label for="singlerom28"> 30-50% [0] </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="loan_ratio" value="e" id="familyrom28" @if($individual->loan_ratio == 'e') checked @endif>
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
                    <input type="radio" name="financing_deals" value="1" id="single_room29" required @if($individual->financing_deals == 1) checked @endif>
                    <label for="single_room29"> {{trans('form.yes')}} [0]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="financing_deals" value="0" id="family_room29" @if($individual->financing_deals == 0) checked @endif>
                    <label for="family_room29"> {{trans('form.no')}} [2] </label>
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
            <label for="investment_knowledge" class="radio-label">
                {{trans('form.Investment knowledge and experience [Points]')}}      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="investment_knowledge" value="low" id="single_room30" required @if($individual->investment_knowledge == 'low') checked @endif>
                    <label for="single_room30"> {{trans('form.low')}} [0]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="investment_knowledge" value="average" id="family_room30" @if($individual->investment_knowledge == 'average') checked @endif>
                    <label for="family_room30"> {{trans('form.average')}} [4] </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="investment_knowledge" value="high" id="familyroom30" @if($individual->investment_knowledge == 'high') checked @endif>
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
            <label for="take_risk" class="radio-label">
                {{trans('form.customer ability to take risks')}}[ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="take_risk" value="low" id="single_room31" required @if($individual->take_risk == 'low') checked @endif>
                    <label for="single_room31"> {{trans('form.low')}} [0]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="take_risk" value="average" id="family_room31" @if($individual->take_risk == 'average') checked @endif>
                    <label for="family_room31">{{trans('form.average')}} [4] </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="take_risk" value="high" id="familyyroom30" @if($individual->take_risk == 'high') checked @endif>
                    <label for="familyyroom30"> {{trans('form.high')}} [6] </label>
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
<!----------------------- الخبرات العملية للعميل في القطاع المالي ----------------------------------->