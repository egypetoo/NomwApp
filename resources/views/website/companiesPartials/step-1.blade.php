<!------------------------------------- Know your customer   ------------------------------------->
<h3>
</h3>
<fieldset>
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.client_application')}}
        </label>
    </div>
    <div class="form-row">
        <div class="form-group no-p-bottom no-m-bottom">
            <label for="name" class="head">
                {{trans('form.client_type')}}
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check">
            <input type="checkbox" name="type" id="agree-term" class="agree-term" value="1" checked disabled>
            <label for="type" class="label-agree-term"><span><span></span></span>{{trans('form.company')}}</label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="name" value="{{$company->name}}" placeholder="{{trans('form.client_name')}}" aria-label="default input example"  maxlength="80" onkeypress="return isNumberKey(event)" required>
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" disabled value="{{$company->phone}}" placeholder="{{trans('form.client_number')}}" aria-label="default input example">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="no_invistments" value="{{$company->no_invistments}}" placeholder="{{trans('form.number_investment')}}" aria-label="default input example"  maxlength="20" onkeypress="return isNumberKey(event)" required>
            @error('no_invistments')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-radio form-group">
            <label for="currency" class="radio-label">{{trans('form.account_currency')}}</label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="currency" value="SAR" id="single_room" required @if($company->currency == 'SAR') checked @endif>
                    <label for="single_room">{{trans('form.SAR')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="currency" value="USD" id="family_room" @if($company->currency == 'USD') checked @endif>
                    <label for="family_room">{{trans('form.USD')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="currency" value="other" id="business_room" @if($company->currency == 'other') checked @endif>
                    <label for="business_room">{{trans('form.other')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
        <div class="form-radio form-group">
            <label for="wallet_type" class="radio-label">{{trans('form.wallet_type')}}</label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="wallet_type" value="local" id="single_room1" required @if($company->wallet_type == 'local') checked @endif>
                    <label for="single_room1">{{trans('form.Local stock portfolio')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="wallet_type" value="international_invistments" id="family_room1" @if($company->wallet_type == 'international_invistments') checked @endif>
                    <label for="family_room1">{{trans('form.Foreign stock portfolio')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="wallet_type" value="investment_funds" id="business_room1" @if($company->wallet_type == 'investment_funds') checked @endif>
                    <label for="business_room1">{{trans('form.investment funds')}}</label>
                    <span class="check"></span>
                </div>
                
            </div>
        </div>
    </div>
    <!-- <div class="form-check">
        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
        <label for="agree-term" class="label-agree-term"><span><span></span></span>Subscribe to out newletter</label>
    </div> -->

    <input type="hidden" name="step" value="{{$step}}"/>

    <ul class="form-navigation">
        <li><a href="{{url('company-registration/step/'.($step+1))}}">{{trans('form.next')}}</a></li>
    </ul>
</fieldset>
<!------------------------------------- Know your customer    ------------------------------------->