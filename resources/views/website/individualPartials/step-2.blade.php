<!-------------------------------------  معلومات عامة ------------------------------------->
<h3>
</h3>
<fieldset>
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.general information')}}
        </label>
    </div>
    <div class="form-row">
        <div class="form-radio line">
            <label for="individual_type" class="radio-label">
                {{trans('form.nickname')}}
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="individual_type" id="single" value="mr" required @if($individual->individual_type == 'mr') checked @endif>
                    <label for="single">
                        {{trans('form.mr')}}
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="individual_type" id="family" value="mrs" @if($individual->individual_type == 'mrs') checked @endif>
                    <label for="family">
                        {{trans('form.mrs')}}
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="individual_type" id="fam" value="miss" @if($individual->individual_type == 'miss') checked @endif>
                    <label for="fam">
                        {{trans('form.miss')}}
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="individual_type" id="business" value="other" @if($individual->individual_type == 'other') checked @endif>
                    <label for="business">{{trans('form.other')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.quadruple name')}}
            </label>
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.first_name')}}" value="{{$individual->Individuals_Info->f_name}}" name="f_name" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('f_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.Father name')}}" value="{{$individual->Individuals_Info->m_name}}" name="m_name" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('m_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.grand name')}}" value="{{$individual->Individuals_Info->l_name}}" name="l_name" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('l_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
		<div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.family name')}}" value="{{$individual->Individuals_Info->family_name}}" name="family_name" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('family_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name">{{trans('form.nationality')}}</label>
            <input class="form-control" type="text" placeholder="{{trans('form.nationality')}}" value="{{$individual->Individuals_Info->nationality}}" name="nationality" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('nationality')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name">{{trans('form.dob_islamic')}}</label>
            <input class="form-control hijri-date-input" type="text" placeholder="{{trans('form.dob_islamic')}}" value="{{$individual->Individuals_Info->dob_islamic}}" name="dob_islamic" aria-label="default input example" required>
                @error('dob_islamic')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name">{{trans('form.dob_cristian')}}</label>
            <input class="form-control hijri-date-input" type="text"  placeholder="{{trans('form.dob_cristian')}}" value="{{$individual->Individuals_Info->dob_cristian}}" name="dob_cristian" aria-label="default input example" required>
                @error('dob_cristian')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.Country and place of birth')}}" value="{{$individual->Individuals_Info->country}}" name="country" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('country')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="{{trans('form.Place of residence')}}" value="{{$individual->Individuals_Info->district}}" name="district" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('f_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="gender" class="radio-label">
                {{trans('form.gender')}}
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="gender" value="male" id="single2" required @if($individual->Individuals_Info->gender == 'male') checked @endif>
                    <label for="single2">
                        {{trans('form.male')}}
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="gender" value="female" id="family2" @if($individual->Individuals_Info->gender == 'female') checked @endif>
                    <label for="family2">
                        {{trans('form.female')}}
                    </label>
                    <span class="check"></span>
                </div>

            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="personality_id" class="radio-label">
                {{trans('form.id_type')}}
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="personality_id" value="ssn" id="single3" required @if($individual->Individuals_Info->personality_id == 'ssn') checked @endif>
                    <label for="single3">
                        {{trans('form.national_id')}}
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="personality_id" value="passport" id="family3" @if($individual->Individuals_Info->personality_id == 'passport') checked @endif>
                    <label for="family3">
                        {{trans('form.passport')}}
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="personality_id" value="resident" id="fam3" @if($individual->Individuals_Info->personality_id == 'resident') checked @endif>
                    <label for="fam3">
                        {{trans('form.Accommodation')}}
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="personality_id" id="business3" value="other"  @if($individual->Individuals_Info->personality_id == 'other') checked @endif>
                    <label for="business3">{{trans('form.other')}}</label>
                    <span class="check"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="name">{{trans('form.ID Number')}}</label>
                    <input class="form-control" type="number" placeholder="{{trans('form.ID Number')}}" value="{{$individual->Individuals_Info->id_num}}" name="id_num" aria-label="default input example" maxlength="30" onkeypress="return isNumberKey(event)" required>
                        @error('id_num')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="name2">{{trans('form.Expiry date')}}</label>
                    <input class="form-control" type="date" placeholder="{{trans('form.Expiry date')}}" value="{{$individual->Individuals_Info->exp_date}}" name="exp_date" aria-label="default input example"required>
                        @error('exp_date')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="social_status" class="radio-label">
                {{trans('form.marital status')}}
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="social_status" value="single" id="family4" required @if($individual->Individuals_Info->social_status == 'single') checked @endif>
                    <label for="family4">
                        {{trans('form.single')}}
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="social_status" value="marred" id="fam4" @if($individual->Individuals_Info->social_status == 'marred') checked @endif>
                    <label for="fam4">
                        {{trans('form.marred')}}
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="social_status" value="divorced" id="family857532" @if($individual->Individuals_Info->social_status == 'divorced') checked @endif>
                    <label for="family857532">
                        {{trans('form.divorced')}}
                    </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="social_status" value="widowed" id="family2131332" @if($individual->Individuals_Info->social_status == 'widowed') checked @endif>
                    <label for="family2131332">
                        {{trans('form.widowed')}}
                    </label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
        <div class="form-group line">
            <label for="name" class="son">{{trans('form.number of family members')}}</label>
            <input class="form-control" type="text" placeholder="{{trans('form.number of family members')}}"  name="no_family_members" value="{{$individual->Individuals_Info->no_family_members}}" aria-label="default input example" maxlength="2" onkeypress="return isNumberKey(event)" required>
            @error('no_family_members')
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
<!-------------------------------------  معلومات عامة ------------------------------------->
