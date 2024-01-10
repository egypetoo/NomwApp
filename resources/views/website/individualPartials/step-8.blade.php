<!-----------------------------------  معلومات  البنك   ------------------------------------>
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
            <input class="form-control" type="text" name="main_bank_name" value="{{$individual->Individuals_Banks->main_bank_name}}" placeholder="{{trans('form.The main bank name')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('main_bank_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control full" type="text" name="main_bank_address" value="{{$individual->Individuals_Banks->main_bank_address}}" placeholder="{{trans('form.address')}}" aria-label="default input example" maxlength="80" onkeypress="return isNumberKey(event)" required>
                @error('main_bank_address')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="main_bank_account_name" value="{{$individual->Individuals_Banks->main_bank_account_name}}" placeholder="{{trans('form.Account holder name')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('main_bank_account_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="number"></label>
            <input class="form-control" type="text" name="main_bank_account_num" value="{{$individual->Individuals_Banks->main_bank_account_num}}" placeholder="{{trans('form.account_num')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('main_bank_account_num')
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
            <input class="form-control" type="text" name="sub_bank_name" value="{{$individual->Individuals_Banks->sub_bank_name}}" placeholder="{{trans('form.The second bank name')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
                @error('sub_bank_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control full" type="text" name="sub_bank_address" value="{{$individual->Individuals_Banks->sub_bank_address}}" placeholder="{{trans('form.address')}}" aria-label="default input example" maxlength="80" onkeypress="return isNumberKey(event)">
                @error('sub_bank_address')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="sub_bank_account_name" value="{{$individual->Individuals_Banks->sub_bank_account_name}}" placeholder="{{trans('form.Account holder name')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
                @error('sub_bank_account_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="number"></label>
            <input class="form-control" type="text" name="sub_bank_account_num" value="{{$individual->Individuals_Banks->sub_bank_account_num}}" placeholder="{{trans('form.account_num')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
                @error('sub_bank_account_num')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>
    <input type="hidden" name="step" value="{{$step}}"/>

    <ul class="form-navigation">
		<li><a onclick="document.getElementById('signup-form').submit();">{{trans('form.next')}}</a></li>
        <li><a href="{{url('indvidual-registration/step/'.($step-1))}}">{{trans('form.previous')}}</a></li>
    </ul>
</fieldset>
<!-----------------------------------  معلومات  البنك   ------------------------------------>