<!----------------------------------------- CUSTODIAN INFORMATION    ----------------------------------------->
<h3>
</h3>
<fieldset> 

    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
           {{trans('form.Custodian information')}}  
        </label>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="has_custodian" class="radio-label">{{trans('form.Was a custodian appointed by you?')}}</label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="has_custodian" value="1" id="single_room12" required @if($company->has_custodian == 1) checked @endif>
                    <label for="single_room12">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="has_custodian" value="0" id="family_room12" @if($company->has_custodian == 0) checked @endif>
                    <label for="family_room12">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.Model (4)')}}  
            </label>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model4_full_name" value="{{$company->Companies_Model4->model4_full_name}}" placeholder="{{trans('form.quadruple name')}}" aria-label="default input example" maxlength="80" onkeypress="return isNumberKey(event)" required>
                @error('model4_full_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control full" type="text" name="model4_address" value="{{$company->Companies_Model4->model4_address}}" placeholder="{{trans('form.mailing address')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('model4_address')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model4_account_name" value="{{$company->Companies_Model4->model4_account_name}}" placeholder="{{trans('form.account_name')}}" aria-label="default input example" maxlength="80" onkeypress="return isNumberKey(event)" required>
                @error('model4_account_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="number"></label>
            <input class="form-control" type="number" name="model4_account_number" value="{{$company->Companies_Model4->model4_account_number}}" placeholder="{{trans('form.account_num')}}" aria-label="default input example" maxlength="20" onkeypress="return isNumberKey(event)" required>
                @error('model4_account_number')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <label for="room2" class="radio-label choose">
            {{trans('form.Send certificates and quotas')}}    
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.Please fill it in if applicable')}}                               
            </label>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.Certificates')}}
            </label>
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="certificates_client" value="{{$company->Companies_Certificates->certificates_client}}" placeholder="{{trans('form.client')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('certificates_client')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="certificates_custodian" value="{{$company->Companies_Certificates->certificates_custodian}}" placeholder="{{trans('form.Custodian')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('certificates_custodian')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="certificates_other_hand" value="{{$company->Companies_Certificates->certificates_other_hand}}" placeholder="{{trans('form.Other party: Determine any instructions issued by him in relation to the party')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('certificates_other_hand')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.Dividend shares or any other income')}}
            </label>
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="profit_shares_client" value="{{$company->Companies_Profit_Shares->profit_shares_client}}" placeholder="{{trans('form.client')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('profit_shares_client')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="profit_shares_custodian" value="{{$company->Companies_Profit_Shares->profit_shares_custodian}}" placeholder="{{trans('form.Custodian')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('profit_shares_custodian')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="profit_shares_other_hand" value="{{$company->Companies_Profit_Shares->profit_shares_other_hand}}" placeholder="{{trans('form.Other party: Determine any instructions issued by him in relation to the party')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('profit_shares_other_hand')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
               {{trans('form.sale proceeds')}}
            </label>
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="sale_proceeds_client" value="{{$company->Companies_Sale_Proceeds->sale_proceeds_client}}" placeholder="{{trans('form.client')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('sale_proceeds_client')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="sale_proceeds_custodian" value="{{$company->Companies_Sale_Proceeds->sale_proceeds_custodian}}" placeholder="{{trans('form.Custodian')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('sale_proceeds_custodian')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="sale_proceeds_other_hand" value="{{$company->Companies_Sale_Proceeds->sale_proceeds_other_hand}}" placeholder="{{trans('form.Other party: Determine any instructions issued by him in relation to the party')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('sale_proceeds_other_hand')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <input type="hidden" name="step" value="{{$step}}"/>

    <ul class="form-navigation">
        <li><a href="{{url('company-registration/step/'.($step+1))}}">{{trans('form.next')}}</a></li>
        <li><a href="{{url('company-registration/step/'.($step-1))}}">{{trans('form.previous')}}</a></li>
    </ul>
    
</fieldset>
<!----------------------------------------- CUSTODIAN INFORMATION    ----------------------------------------->