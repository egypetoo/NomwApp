<!-----------------------------------معلومات امين الحفظ ------------------------------------>
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
            <label for="custodian_appointed" class="radio-label">{{trans('form.Was a custodian appointed by you?')}}</label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="custodian_appointed" value="1" required @if($individual->custodian_appointed == 1) checked @endif  id="single_room12">
                    <label for="single_room12">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="custodian_appointed" value="0" @if($individual->custodian_appointed == 0) checked @endif id="family_room12">
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
            <input class="form-control" type="text" placeholder="{{trans('form.quadruple name')}}" value="{{$individual->Individuals_Model3->model3_full_name}}" name="model3_full_name" aria-label="default input example" maxlength="80" onkeypress="return isNumberKey(event)">
                @error('model3_full_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control full" type="text" placeholder="{{trans('form.mailing address')}}" value="{{$individual->Individuals_Model3->model3_address}}" name="model3_address" aria-label="default input example" maxlength="40" onkeypress="return isNumberKey(event)">
                @error('model3_address')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.account_name')}}" value="{{$individual->Individuals_Model3->model3_account_name}}" name="model3_account_name" aria-label="default input example" maxlength="80" onkeypress="return isNumberKey(event)">
                @error('model3_account_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="number"></label>
            <input class="form-control" type="number" placeholder="{{trans('form.account_num')}}" value="{{$individual->Individuals_Model3->model3_account_number}}" name="model3_account_number" aria-label="default input example" maxlength="20" onkeypress="return isNumberKey(event)">
                @error('model3_account_number')
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
            <input class="form-control" type="text" value="{{$individual->Individuals_Certificates->certificates_client_name}}" name="certificates_client_name" placeholder="{{trans('form.client')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
             @error('certificates_client_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror   
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Certificates->certificates_custodian_name}}" name="certificates_custodian_name" placeholder="{{trans('form.Custodian')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
              @error('certificates_custodian_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror  
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Certificates->certificates_other_hand}}" name="certificates_other_hand" placeholder="{{trans('form.Other party: Determine any instructions issued by him in relation to the party')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
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
            <input class="form-control" type="text" value="{{$individual->Individuals_Profit_Shares->profit_client_name}}" name="profit_client_name" placeholder="{{trans('form.client')}}" aria-label="default input example" maxlength="80" onkeypress="return isNumberKey(event)">
                @error('profit_client_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Profit_Shares->profit_custodian_name}}" name="profit_custodian_name" placeholder="{{trans('form.Custodian')}}" aria-label="default input example" maxlength="80" onkeypress="return isNumberKey(event)">
                @error('profit_custodian_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Profit_Shares->profit_other_hand}}" name="profit_other_hand" placeholder="{{trans('form.Other party: Determine any instructions issued by him in relation to the party')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
                @error('profit_other_hand')
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
            <input class="form-control" type="text" value="{{$individual->Individuals_Sale_Proceeds->sale_client_name}}" name="sale_client_name" placeholder="{{trans('form.client')}}" aria-label="default input example" maxlength="80" onkeypress="return isNumberKey(event)">
                @error('sale_client_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Sale_Proceeds->sale_custodian_name}}" name="sale_custodian_name" placeholder="{{trans('form.Custodian')}}" aria-label="default input example" maxlength="80" onkeypress="return isNumberKey(event)">
                @error('sale_custodian_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Sale_Proceeds->sale_other_hand}}" name="sale_other_hand" placeholder="{{trans('form.Other party: Determine any instructions issued by him in relation to the party')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
                @error('sale_other_hand')
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
<!-----------------------------------معلومات امين الحفظ ------------------------------------>