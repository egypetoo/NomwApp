<!--------------------------------- Client investment information in the potential transaction ---------------------------------------------->
<h3>
</h3>
<fieldset> 
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.Information of the client investment in the potential transaction')}}                            
        </label>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="make_decision" class="radio-label">
                {{trans('form.How did you make the decision to enter this investment?')}} [ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="make_decision" value="personal" id="single_room40" required @if($individual->make_decision == 'personal') checked @endif>
                    <label for="single_room40"> {{trans('form.personal')}} [1]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="make_decision" value="company_advice" id="family_room40" @if($individual->make_decision == 'company_advice') checked @endif>
                    <label for="family_room40"> {{trans('form.Advice provided by the company')}} [0]</label>
                    <span class="check"></span>
                </div>
            </div>
            
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="current_investment_ratio" class="radio-label">
                {{trans('form.What is the percentage of your current investment with us from the value of your current assets?')}} [ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="current_investment_ratio" value="a" id="single_room41" required @if($individual->current_investment_ratio == 'a') checked @endif>
                    <label for="single_room41">  1-5% [8]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="current_investment_ratio" value="b" id="family_room41" @if($individual->current_investment_ratio == 'b') checked @endif>
                    <label for="family_room41"> 5-20% [6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="current_investment_ratio" value="c" id="familyroom41" @if($individual->current_investment_ratio == 'c') checked @endif>
                    <label for="familyroom41"> 20-50% [4]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="current_investment_ratio" value="d" id="singlerom41" @if($individual->current_investment_ratio == 'd') checked @endif>
                    <label for="singlerom41">    50-70% [2]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="current_investment_ratio" value="e" id="familyrom41" @if($individual->current_investment_ratio == 'e') checked @endif>
                    <label for="familyrom41"> 70-100% [1]</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="volume_investment_withus" class="radio-label">
               {{trans('form.What is the value of your investment with us in this opportunity?')}}  [ {{trans('form.points')}}  ]      
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="volume_investment_withus" value="a" id="single_room42" required @if($individual->volume_investment_withus == 'a') checked @endif>
                    <label for="single_room42"> {{trans('form.More than 200 thousand riyals')}} [6]</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="volume_investment_withus" value="b" id="family_room42" @if($individual->volume_investment_withus == 'b') checked @endif>
                    <label for="family_room42">  {{trans('form.Less than 200 thousand riyals')}} [0]</label>
                    <span class="check"></span>
                </div>
            </div>
            
        </div>
    </div>

    <div class="form-row">
        <label for="room2" class="radio-label choose">
            {{trans('form.In the event that the amount of your investment in this opportunity is more than 200,000 Saudi riyals, please fill out Form 8')}}                            
        </label>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="financial_market_regulations" class="radio-label">
                {{trans('form.According to the regulations of the Capital Market Authority, it is not possible to invest more than 200,000 riyals (please choose one of the following options)')}}
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="financial_market_regulations" value="a" id="single_room43" required @if($individual->financial_market_regulations == 'a') checked @endif>
                    <label for="single_room43"> {{trans('form.Have you made transactions in the stock markets, the total value of which is not less than 40 million Saudi riyals, and not less than 10 transactions in each quarter during the past 12 months')}}</label>
                    <span class="check"></span>
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="a" id="customFile" style="display: none;">
                            @error('a')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <label class="custom-file-label" for="customFile">{{trans('form.Click to back up the selection with a document')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="financial_market_regulations" value="b" id="family_room43" @if($individual->financial_market_regulations == 'b') checked @endif>
                    <label for="family_room43">{{trans('form.Is your net asset value not less than 5 million Saudi riyals?')}}</label>
                    <span class="check"></span>
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="b" id="customFile1" style="display: none;">
                            @error('b')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <label class="custom-file-label" for="customFile1">{{trans('form.Click to back up the selection with a document')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="financial_market_regulations" value="c" id="familyroom43" @if($individual->financial_market_regulations == 'c') checked @endif>
                    <label for="familyroom43">{{trans('form.Have you ever worked for at least 3 years in the financial sector in a professional job related to investing in securities?')}}</label>
                    <span class="check"></span>
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="c" id="customFile2" style="display: none;">
                            @error('c')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <label class="custom-file-label" for="customFile2">{{trans('form.Click to back up the selection with a document')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="financial_market_regulations" value="d" id="singlerom43" @if($individual->financial_market_regulations == 'd') checked @endif>
                    <label for="singlerom43">{{trans('form.Have you obtained a professional certificate specialized in the field of securities business accredited by an internationally recognized body?')}}</label>
                    <span class="check"></span>
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="d" id="customFile3" style="display: none;">
                            @error('d')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <label class="custom-file-label" for="customFile3">{{trans('form.Click to back up the selection with a document')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="financial_market_regulations" value="e" id="familyrom43" @if($individual->financial_market_regulations == 'e') checked @endif>
                    <label for="familyrom43">{{trans('form.Have you obtained the general certificate for dealing in securities approved by the Capital Market Authority, and that your annual income is not less than 600,000 riyals in the past two years?')}}</label>
                    <span class="check"></span>
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="e" id="customFile4" style="display: none;">
                            @error('e')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <label class="custom-file-label" for="customFile4">{{trans('form.Click to back up the selection with a document')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="financial_market_regulations" value="f" id="snglerom43" @if($individual->financial_market_regulations == 'f') checked @endif>
                    <label for="snglerom43">{{trans('form.Are you an employee registered with the fund manager of this opportunity?')}}</label>
                    <span class="check"></span>
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="f" id="customFile5" style="display: none;">
                            @error('f')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <label class="custom-file-label" for="customFile5">{{trans('form.Click to back up the selection with a document')}}</label>
                    </div>
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
<!--------------------------------- Client investment information in the potential transaction ---------------------------------------------->