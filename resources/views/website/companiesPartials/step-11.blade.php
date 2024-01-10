<!-----------------------------------  CUSTODIAN INFORMATION     ------------------------------------>
<h3>
</h3>
<fieldset> 
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.bank information')}}   
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.The main bank')}}
            </label>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="bank1_name" value="{{$company->Companies_Bank->bank1_name}}" placeholder="{{trans('form.The main bank name')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('bank1_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control full" type="text" name="bank1_address" value="{{$company->Companies_Bank->bank1_address}}" placeholder="{{trans('form.address')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('bank1_address')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="bank1_account_name" value="{{$company->Companies_Bank->bank1_account_name}}" placeholder="{{trans('form.Account holder name')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('bank1_account_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="number"></label>
            <input class="form-control" type="number" name="bank1_account_num" value="{{$company->Companies_Bank->bank1_account_num}}" placeholder="{{trans('form.account_num')}}" aria-label="default input example" maxlength="20" onkeypress="return isNumberKey(event)" required>
                @error('bank1_account_num')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.The second bank')}}
            </label>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="bank2_name" value="{{$company->Companies_Bank->bank2_name}}" placeholder="{{trans('form.The second bank name')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('bank2_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control full" type="text" name="bank2_address" value="{{$company->Companies_Bank->bank2_address}}" placeholder="{{trans('form.address')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('bank2_address')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="bank2_account_name" value="{{$company->Companies_Bank->bank2_account_name}}" placeholder="{{trans('form.Account holder name')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('sale_proceeds_custodian')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="number"></label>
            <input class="form-control" type="number" name="bank2_account_num" value="{{$company->Companies_Bank->bank2_account_num}}" placeholder="{{trans('form.account_num')}}" aria-label="default input example" maxlength="20" onkeypress="return isNumberKey(event)" required>
                @error('sale_proceeds_custodian')
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
<!-----------------------------------  CUSTODIAN INFORMATION     ------------------------------------>