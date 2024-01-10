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

    <div class="form-row">
        <div class="form-group no-p-left">
            <label for="name" class="head">{{trans('form.Agreement to open an account')}}</label>
            <input class="form-control" type="text" name="account_opening_agreement" value="{{$company->account_opening_agreement}}" placeholder="{{trans('form.Agreement to open an account')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('account_opening_agreement')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>


    <div class="form-row">
        <div class="form-check">
            <input type="checkbox" name="account_opening[]" value="a" id="agree-term1" class="agree-term" @if(in_array("a", explode(',',$company->account_opening))) checked @endif>                            
            <label for="agree-term1" class="label-agree-term"><span><span></span></span>{{trans('form.The original ID has been reviewed and the photos have been authenticated')}}</label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check">
            <input type="checkbox" name="account_opening[]" value="b" id="agree-term10" class="agree-term" @if(in_array("b", explode(',',$company->account_opening))) checked @endif>
            <label for="agree-term10" class="label-agree-term"><span><span></span></span>{{trans('form.Agency or other authorization order')}}</label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check">
            <input type="checkbox" name="account_opening[]" value="c" id="agree-term2" class="agree-term" @if(in_array("c", explode(',',$company->account_opening))) checked @endif>
            <label for="agree-term2" class="label-agree-term"><span><span></span></span>{{trans('form.Know your customer')}}</label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check">
            <input type="checkbox" name="account_opening[]" value="d" id="agree-term3" class="agree-term" @if(in_array("d", explode(',',$company->account_opening))) checked @endif>
            <label for="agree-term3" class="label-agree-term"><span><span></span></span>{{trans('form.Customer acceptance form')}}</label>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="account_fit_report" value="{{$company->account_fit_report}}" placeholder="{{trans('form.fit report')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('account_fit_report')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="account_special_instructions" value="{{$company->account_special_instructions}}" placeholder="{{trans('form.Special instructions')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('account_special_instructions')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="room_type43" class="radio-label">
                {{trans('form.Companies (Please upload these files)')}}                           
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_attachment_commercial_register_copy" id="customFile" style="display: none;">
                        @error('attachment_attachment_commercial_register_copy')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile">{{trans('form.A copy of the commercial register')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_establishment_contract_copy" id="customFile1" style="display: none;">
                        @error('attachment_establishment_contract_copy')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile1">{{trans('form.A copy of the Memorandum of Association / Articles of Association and its appendices')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_company_owner_list" id="customFile2" style="display: none;">
                        @error('attachment_company_owner_list')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile2">{{trans('form.A list of the company owners and copies of their identities')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_decision_appointing_copy" id="customFile3" style="display: none;">
                        @error('attachment_decision_appointing_copy')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile3">{{trans('form.Copies of the decision appointing the Board of Directors')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_board_directors_id_copy" id="customFile4" style="display: none;">
                        @error('attachment_board_directors_id_copy')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile4">{{trans('form.Copies of the identities of the members of the board of directors, the general manager and the authorized managers')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_account_open_decision_copy" id="customFile5" style="display: none;">
                        @error('attachment_account_open_decision_copy')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile5">{{trans('form.A copy of the decision issued to open the account')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_letter_to_commissioners" id="customFile6" style="display: none;">
                        @error('attachment_letter_to_commissioners')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile6">{{trans('form.A letter to the delegates to manage the account')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_article7" id="customFile7" style="display: none;">
                        @error('attachment_article7')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile7">{{trans('form.In the case of a listed company - Article (7) of the Investment Accounts Instructions shall be referred to')}}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <div class="form-row">
        <div class="form-radio">
            <label for="room_type43" class="radio-label sm">
                    {{trans('form.Non-profit organizations and institutions (please upload these files)')}}                          
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_licenses_copy" id="customFile8" style="display: none;">
                        @error('attachment_licenses_copy')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile8">{{trans('form.Copy of licenses and articles of association')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_decision_account_copy" id="customFile9" style="display: none;">
                        @error('attachment_decision_account_copy')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile9">{{trans('form.A copy of the decision issued to open the account')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_letter_manage_account" id="customFile10" style="display: none;">
                        @error('attachment_letter_manage_account')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile10">{{trans('form.A letter to the delegates to manage the account')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_primary_law" id="customFile11" style="display: none;">
                        @error('attachment_primary_law')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile11">{{trans('form.The Articles of Association, provided that it includes an explicit text permitting investment in securities')}}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="room_type43" class="radio-label">
                {{trans('form.Government agencies (please upload these files)')}}                          
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_basic_documents" id="customFile12" style="display: none;">
                        @error('attachment_basic_documents')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile12">{{trans('form.The basic documents of the entity according to its administrative organization')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_decision_authorized_person" id="customFile13" style="display: none;">
                        @error('attachment_decision_authorized_person')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile13">{{trans('form.The decision of the authorized person to authorize those authorized to manage the account')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_ministry_finance_approval" id="customFile14" style="display: none;">
                        @error('attachment_ministry_finance_approval')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile14">{{trans('form.Approval of the Ministry of Finance to open the account')}}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="room_type43" class="radio-label">
               {{trans('form.Endowments (Please upload these files)')}}                          
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_endowment_deed" id="customFile15" style="display: none;">
                        @error('attachment_endowment_deed')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile15">{{trans('form.The endowment deed and the glasses deed')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_superintendent_id" id="customFile16" style="display: none;">
                        @error('attachment_superintendent_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile16">{{trans('form.The national identity card of the endowment superintendent / the glasses board')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_beholder_decision" id="customFile17" style="display: none;">
                        @error('attachment_beholder_decision')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile17">{{trans('form.The decision of the principal or the board approving the opening of the account and granting powers to the delegates')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_allowed" id="customFile18" style="display: none;">
                        @error('attachment_allowed')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile18">{{trans('form.The endowment deed must include a statement allowing the endowment to invest in securities')}}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="room_type43" class="radio-label sm">
               {{trans('form.Investment funds established in the Kingdom and the GCC countries (please download these files)')}}                          
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_commercial_register" id="customFile19" style="display: none;">
                        @error('attachment_commercial_register')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile19">{{trans('form.The commercial register of the fund manager')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_fund_articles_association" id="customFile20" style="display: none;">
                        @error('attachment_fund_articles_association')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile20">{{trans('form.The Articles of Association of the Fund, the Fund Manager or the Memorandum of Association and any amendments thereto')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_market_authority_license" id="customFile21" style="display: none;">
                        @error('attachment_market_authority_license')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile21">{{trans('form.Licensing the Capital Market Authority or its equivalent in the Cooperation Council')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_approval_notice" id="customFile22" style="display: none;">
                        @error('attachment_approval_notice')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile22">{{trans('form.Notice of approval from the Capital Market Authority to establish the fund and offer its units')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_terms_and_conditions" id="customFile23" style="display: none;">
                        @error('attachment_terms_and_conditions')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile23">{{trans('form.Fund Terms and Conditions and any amendments thereto')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_powers_delegates" id="customFile24" style="display: none;">
                        @error('attachment_powers_delegates')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile24">{{trans('form.The decision to approve the opening of the account and grant the powers of the delegates')}}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="room_type43" class="radio-label sm">
                {{trans('form.Funds owned by government agencies (please download these files)')}}                          
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_verify_full_ownership" id="customFile25" style="display: none;">
                        @error('attachment_verify_full_ownership')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile25">{{trans('form.Proof of full ownership of the government (Saudi or from the Cooperation Council countries)')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_fundamental_system" id="customFile26" style="display: none;">
                        @error('attachment_fundamental_system')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile26">{{trans('form.Fundamental system')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_commissioners_decision" id="customFile27" style="display: none;">
                        @error('attachment_commissioners_decision')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile27">{{trans('form.A decision by the authorized persons to open and manage the account')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_commissioners_id" id="customFile28" style="display: none;">
                        @error('attachment_commissioners_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile28">{{trans('form.delegate identities')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_list_name_members" id="customFile29" style="display: none;">
                        @error('attachment_list_name_members')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile29">{{trans('form.A document showing the list of names of the members of the Board of Directors')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_granting_powers_to_delegates" id="customFile30" style="display: none;">
                        @error('attachment_granting_powers_to_delegates')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile30">{{trans('form.The decision to approve the opening of the account and grant the powers of the delegates')}}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="room_type43" class="radio-label sm">
                {{trans('form.International organizations and bodies (please download these files)')}}                          
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_founding_agreement" id="customFile31" style="display: none;">
                        @error('attachment_founding_agreement')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile31">{{trans('form.Articles of Association and/or Articles of Association')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_headquarters_agreement_signed" id="customFile32" style="display: none;">
                        @error('attachment_headquarters_agreement_signed')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile32">{{trans('form.The headquarters agreement signed with the government of the Kingdom that allows dealing in securities')}}</label>
                    </div>
                </div>
                <div class="form-radio-item">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input" name="attachment_decision_of_authorized_person" id="customFile33" style="display: none;">
                        @error('attachment_decision_of_authorized_person')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label class="custom-file-label" for="customFile33">{{trans('form.The decision of the authorized person to authorize the persons who will open and operate the investment account')}}</label>
                    </div>
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
<!------------------------------------------------------------  checklist    ----------------------------------------------------------->
