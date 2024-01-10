<!------------------------------------------------------------  checklist    ----------------------------------------------------------->
<h3>
</h3>
<fieldset> 

    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.Checklist')}}                           
        </label>
    </div>

    <div class="form-row">

    </div>

    {{-- <div class="form-row">
        <div class="form-group no-p-left">
            <label for="name" class="head">{{trans('form.Agreement to open an account')}}</label>
            <input class="form-control" type="text" name="account_opening_agreement" value="{{$individual->Individuals_AccountOpening->account_opening_agreement}}" placeholder="{{trans('form.Agreement to open an account')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('account_opening_agreement')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div> --}}

    {{-- <div class="form-row">
        <div class="form-check">
            <input type="checkbox" name="account_opening_set[]" value="e" id="agree-term165" class="agree-term" @if(in_array("e", explode(',',$individual->Individuals_AccountOpening->account_opening_set))) checked @endif>                            
            <label for="agree-term165" class="label-agree-term"><span><span></span></span>{{trans('form.Agreement to open an account')}}</label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check">
            <input type="checkbox" name="account_opening_set[]" value="a" id="agree-term1" class="agree-term" @if(in_array("a", explode(',',$individual->Individuals_AccountOpening->account_opening_set))) checked @endif>                            
            <label for="agree-term1" class="label-agree-term"><span><span></span></span>{{trans('form.The original ID has been reviewed and the photos have been authenticated')}}</label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check">
            <input type="checkbox" name="account_opening_set[]" value="b" id="agree-term10" class="agree-term" @if(in_array("b", explode(',',$individual->Individuals_AccountOpening->account_opening_set))) checked @endif>
            <label for="agree-term10" class="label-agree-term"><span><span></span></span>{{trans('form.Agency or other authorization order')}}</label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check">
            <input type="checkbox" name="account_opening_set[]" value="c" id="agree-term2" class="agree-term" @if(in_array("c", explode(',',$individual->Individuals_AccountOpening->account_opening_set))) checked @endif>
            <label for="agree-term2" class="label-agree-term"><span><span></span></span>{{trans('form.Know your customer')}}</label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check">
            <input type="checkbox" name="account_opening_set[]" value="d" id="agree-term3" class="agree-term" @if(in_array("d", explode(',',$individual->Individuals_AccountOpening->account_opening_set))) checked @endif>
            <label for="agree-term3" class="label-agree-term"><span><span></span></span>{{trans('form.Customer acceptance form')}}</label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check">
            <input type="checkbox" name="account_opening_set[]" value="f" id="agree-term345" class="agree-term" @if(in_array("f", explode(',',$individual->Individuals_AccountOpening->account_opening_set))) checked @endif>
            <label for="agree-term345" class="label-agree-term"><span><span></span></span>{{trans('form.fit report')}}</label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check">
            <input type="checkbox" name="account_opening_set[]" value="g" id="agree-term355" class="agree-term" @if(in_array("g", explode(',',$individual->Individuals_AccountOpening->account_opening_set))) checked @endif>
            <label for="agree-term355" class="label-agree-term"><span><span></span></span>{{trans('form.Special instructions')}}</label>
        </div>
    </div> --}}

    {{-- <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="account_opening_fit_report" value="{{$individual->Individuals_AccountOpening->account_opening_fit_report}}" placeholder="{{trans('form.fit report')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('account_opening_fit_report')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="account_opening_special_instructions" value="{{$individual->Individuals_AccountOpening->account_opening_special_instructions}}" placeholder="{{trans('form.Special instructions')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('account_opening_special_instructions')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div> --}}
    <div class="form-row">
        <div class="form-radio">
            <label for="room_type43" class="radio-label">
                {{trans('form.Saudi Individuals (Please upload these files)')}}                           
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_national_id_copy" id="customFile222" style="display: none;">
                            @error('attachment_national_id_copy')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <label class="custom-file-label" for="customFile222">{{trans('form.A copy of a valid national ID')}}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="room_type43" class="radio-label">
                {{trans('form.Gulf individuals (Please upload these files)')}}                           
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_national_gulf_id_copy" id="customFile222" style="display: none;">
                            @error('attachment_national_gulf_id_copy')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <label class="custom-file-label" for="customFile222">{{trans('form.A copy of a valid national ID')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_passport" id="customFile333" style="display: none;">
                            @error('attachment_passport')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <label class="custom-file-label" for="customFile333">{{trans('form.The passport is valid')}}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

        
    <div class="form-row">
        <div class="form-radio">
            <label for="room_type43" class="radio-label">
                    {{trans('form.Resident foreigner (please upload these files)')}}                          
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_residency_copy" id="customFile444" style="display: none;">
                            @error('attachment_residency_copy')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <label class="custom-file-label" for="customFile444">{{trans('form.A valid residence permit')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_marred_copy" id="customFile555" style="display: none;">
                            @error('attachment_marred_copy')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <label class="custom-file-label" for="customFile555">{{trans('form.A valid copy of the passport')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_introduction_speech" id="customFile666" style="display: none;">
                            @error('attachment_introduction_speech')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <label class="custom-file-label" for="customFile666">{{trans('form.Introduction letter from the employer')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_clear_address" id="customFile777" style="display: none;">
                            @error('attachment_clear_address')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <label class="custom-file-label" for="customFile777">{{trans('form.Clear address in the home country')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_diplomatic_card" id="customFile888" style="display: none;">
                            @error('attachment_diplomatic_card')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <label class="custom-file-label" for="customFile888">{{trans('form.Diplomatic card for diplomats')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_embassy_letter" id="customFile999" style="display: none;">
                            @error('attachment_embassy_letter')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <label class="custom-file-label" for="customFile999">{{trans('form.Introduction letter from the embassy')}}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="room_type43" class="radio-label">
                {{trans('form.Non-resident foreigner (please upload these files)')}}                          
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_valid_passport" id="customFile991" style="display: none;">
                            @error('attachment_valid_passport')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <label class="custom-file-label" for="customFile991">{{trans('form.A valid passport')}}</label>
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
<!------------------------------------------------------------  checklist    ----------------------------------------------------------->
