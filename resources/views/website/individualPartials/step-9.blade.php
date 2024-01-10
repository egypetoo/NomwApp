<!-----------------------------------  معلومات  عامة عن العميل   ------------------------------------>
<h3>
</h3>
<fieldset> 
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.General information about the client')}}   
        </label>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="is_member_or_related" class="radio-label sm">{{trans('form.Are you a member or related to a member of the board of directors, an audit committee, or a senior executive in a listed company or licensed by the Capital Market Authority, a securities brokerage company, or a person registered as a broker?')}}</label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="is_member_or_related" value="1" required id="single_room13" @if($individual->is_member_or_related == 1) checked @endif>
                    <label for="single_room13">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="is_member_or_related" value="0" id="family_room13" @if($individual->is_member_or_related == 0) checked @endif>
                    <label for="family_room13">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="is_entrusted_tasks" class="radio-label sm">
                {{trans('form.Are you a person who has held or is entrusted with higher missions in the Kingdom or in a foreign country, senior management positions, or a job in an international organization? Or related to this person (in which you have a blood relationship, or the husband up to the second degree, or a person close to him)?')}}
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="is_entrusted_tasks" value="1" required id="single_room15" @if($individual->is_entrusted_tasks == 1) checked @endif>
                    <label for="single_room15">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="is_entrusted_tasks" value="0" id="family_room15" @if($individual->is_entrusted_tasks == 0) checked @endif>
                    <label for="family_room15">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="is_owner_or_shareholder" class="radio-label sm">
                {{trans('form.Do you own or share 10% or more in any listed company (in Tadawul Market)?')}}
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="is_owner_or_shareholder" value="1" id="single_room16" required @if($individual->is_owner_or_shareholder == 1) checked @endif>
                    <label for="single_room16">{{trans('form.yes')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="is_owner_or_shareholder" value="0" id="family_room16" @if($individual->is_owner_or_shareholder == 0) checked @endif>
                    <label for="family_room16">{{trans('form.no')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <label for="rom2" class="radio-label choose">
            {{trans('form.If the answer is (yes) to any of the questions, please fill out Form 5')}}                           
            </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.Model (5)')}}
            </label>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Model5->model5_name}}" name="model5_name" placeholder="{{trans('form.Name of the person holding the position')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
                @error('model5_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control full" type="text" value="{{$individual->Individuals_Model5->model5_section_name}}" name="model5_section_name" placeholder="{{trans('form.section')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
                @error('model5_section_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Model5->model5_position_name}}" name="model5_position_name" placeholder="{{trans('form.position')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
                @error('model5_position_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Model5->model5_position_degree}}" name="model5_position_degree" placeholder="{{trans('form.Functional/government grade')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
                @error('model5_position_degree')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Model5->model5_relative_relation}}" name="model5_relative_relation" placeholder="{{trans('form.relative relation')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
                @error('model5_relative_relation')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Model5->model5_country_name}}" name="model5_country_name" placeholder="{{trans('form.country')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
                @error('model5_country_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Model5->model5_company_name}}" name="model5_company_name" placeholder="{{trans('form.Company name / entity name')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)">
                @error('model5_company_name')
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
<!-----------------------------------  معلومات  عامة عن العميل   ------------------------------------>