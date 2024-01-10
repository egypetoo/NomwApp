<!------------------------------------------ الحالة المالية     -------------------------------------->
<h3>
</h3>
<fieldset>
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.Client financial condition')}} 
        </label>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="annual_income" class="radio-label">
                    {{trans('form.Approximate Annual Income (in Saudi Riyals) [Points]')}}                            
                </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="annual_income" value="a" required id="single_room19" @if($individual->annual_income == 'a') checked @endif>
                    <label for="single_room19">{{trans('form.less than 100,000 [0]')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="annual_income" value="b" id="family_room19" @if($individual->annual_income == 'b') checked @endif>
                    <label for="family_room19">{{trans('form.100,001 to 300,000 [1]')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="annual_income" value="c" id="familyroom19" @if($individual->annual_income == 'c') checked @endif>
                    <label for="familyroom19">{{trans('form.300,001 to 600,000 [2]')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="annual_income" value="d" id="singlerom19" @if($individual->annual_income == 'd') checked @endif>
                    <label for="singlerom19">{{trans('form.600,001 to 1,500,000 [3]')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="annual_income" value="e" id="familyrom19" @if($individual->annual_income == 'e') checked @endif>
                    <label for="familyrom19">{{trans('form.1,500,001 to 5,000,000 [4]')}}</label>
                    <span class="check"></span>
                </div>

                <div class="form-radio-item">
                    <input type="radio" name="annual_income" value="f" id="famlyrom19" @if($individual->annual_income == 'f') checked @endif>
                    <label for="famlyrom19">{{trans('form.5,000,001 to 10,000,000 [5]')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="annual_income" value="g" id="famlyrom20" @if($individual->annual_income == 'g') checked @endif>
                    <label for="famlyrom20">{{trans('form.10,000,001 to 50,000,000 [6]')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="annual_income" value="h" id="famlyrm21" @if($individual->annual_income == 'h') checked @endif>
                    <label for="famlyrm21">{{trans('form.More than 50,000,000')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="net_worth" class="radio-label">
                {{trans('form.Approximate Net Worth (Excluding Home) (SAR)')}}</label>
                <div class="form-radio-group">            
                    <div class="form-radio-item">
                        <input type="radio" name="net_worth" value="a" required id="single_room20" @if($individual->net_worth == 'a') checked @endif>
                        <label for="single_room20">{{trans('form.less than 100,000 [0]')}}</label>
                        <span class="check"></span>
                    </div>
                    <div class="form-radio-item">
                        <input type="radio" name="net_worth" value="b" id="family_room20" @if($individual->net_worth == 'b') checked @endif>
                        <label for="family_room20">{{trans('form.100,001 to 300,000 [1]')}}</label>
                        <span class="check"></span>
                    </div>
                    <div class="form-radio-item">
                        <input type="radio" name="net_worth" value="c" id="familyroom20" @if($individual->net_worth == 'c') checked @endif>
                        <label for="familyroom20">{{trans('form.300,001 to 600,000 [2]')}}</label>
                        <span class="check"></span>
                    </div>
                    <div class="form-radio-item">
                        <input type="radio" name="net_worth" value="d" id="singlerom20" @if($individual->net_worth == 'd') checked @endif>
                        <label for="singlerom20">{{trans('form.600,001 to 1,500,000 [3]')}}</label>
                        <span class="check"></span>
                    </div>
                    <div class="form-radio-item">
                        <input type="radio" name="net_worth" value="e" id="familyrom20" @if($individual->net_worth == 'e') checked @endif>
                        <label for="familyrom20">{{trans('form.1,500,001 to 5,000,000 [4]')}}</label>
                        <span class="check"></span>
                    </div>

                    <div class="form-radio-item">
                        <input type="radio" name="net_worth" value="f" id="familyrom22" @if($individual->net_worth == 'f') checked @endif>
                        <label for="familyrom22">{{trans('form.5,000,001 to 10,000,000 [5]')}}</label>
                        <span class="check"></span>
                    </div>
                    <div class="form-radio-item">
                        <input type="radio" name="net_worth" value="g" id="famlyrom23" @if($individual->net_worth == 'g') checked @endif>
                        <label for="famlyrom23"> {{trans('form.10,000,001 to 50,000,000 [6]')}}</label>
                        <span class="check"></span>
                    </div>
                    <div class="form-radio-item">
                        <input type="radio" name="net_worth" value="h" id="famlyrm24" @if($individual->net_worth == 'h') checked @endif>
                        <label for="famlyrm24">{{trans('form.More than 50,000,000')}}</label>
                        <span class="check"></span>
                    </div>
                </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.Sources of income')}}
            </label>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="source_salary" value="{{$individual->Individuals_Source_Income->source_salary}}" placeholder="{{trans('form.job salary')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('source_salary')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="source_inherite" value="{{$individual->Individuals_Source_Income->source_inherite}}" placeholder="{{trans('form.legacy')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('source_inherite')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="source_investment_returns" value="{{$individual->Individuals_Source_Income->source_investment_returns}}" placeholder="{{trans('form.returns from investments')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('source_investment_returns')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="source_private_job" value="{{$individual->Individuals_Source_Income->source_private_job}}" placeholder="{{trans('form.private job')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('source_private_job')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="source_other" value="{{$individual->Individuals_Source_Income->source_other}}" placeholder="{{trans('form.other (please specify)')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)">
                @error('source_other')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>


    <div class="form-row">
        <div class="form-radio">
            <label for="sources_of_wealth" class="radio-label">
                {{trans('form.Sources of wealth')}}                                
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="sources_of_wealth" value="trade" required  id="singlez_room19" @if($individual->sources_of_wealth == 'trade') checked @endif>
                    <label for="singlez_room19">{{trans('form.Trade/business is free')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="sources_of_wealth" value="investment" id="familys_room19" @if($individual->sources_of_wealth == 'investment') checked @endif>
                    <label for="familys_room19">{{trans('form.investments')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-group">
                    <label for="name"></label>
                    <input class="form-control" type="text" name="sources_of_wealth_other" value="{{$individual->sources_of_wealth_other}}" placeholder="{{trans('form.other')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)">
                    @error('sources_of_wealth_other')
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
<!------------------------------------------ الحالة المالية     -------------------------------------->