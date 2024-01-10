<!------------------------------- استبيان تقييم الملائمة و تحمل المخاطر------------------------------>
<h3>
</h3>
<fieldset> 
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.Appropriateness and risk tolerance assessment questionnaire')}}  
        </label>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="educational_level" class="radio-label">
                    {{trans('form.Education level (points)')}} 
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="educational_level" value="nothing" id="single_room17" required @if($individual->educational_level == 'nothing') checked @endif>
                    <label for="single_room17">{{trans('form.None (0)')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="educational_level" value="primary" id="family_room17" @if($individual->educational_level == 'primary') checked @endif>
                    <label for="family_room17">{{trans('form.(1) Primary')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="educational_level" value="medium" id="singleroom17" @if($individual->educational_level == 'medium') checked @endif>
                    <label for="singleroom17">{{trans('form.medium (2)')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="educational_level" value="secondary" id="familyroom17" @if($individual->educational_level == 'secondary') checked @endif>
                    <label for="familyroom17">{{trans('form.secondary (3)')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="educational_level" value="diploma" id="singlerom17" @if($individual->educational_level == 'diploma') checked @endif>
                    <label for="singlerom17">{{trans('form.Diploma (4)')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="educational_level" value="collage" id="familyrom17" @if($individual->educational_level == 'collage') checked @endif>
                    <label for="familyrom17">{{trans('form.University (5)')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="educational_level" value="postgraduate" id="familyrm17" @if($individual->educational_level == 'postgraduate') checked @endif>
                    <label for="familyrm17">{{trans('form.Postgraduate studies (6)')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-radio line">
            <label for="employment_status" class="radio-label">
                    {{trans('form.Employment status (points)')}}  
            </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="employment_status" value="unemployed" id="single_room18" required @if($individual->employment_status == 'unemployed') checked @endif>
                    <label for="single_room18">{{trans('form.Unemployed (0)')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="employment_status" value="housewife" id="singleroom18" @if($individual->employment_status == 'housewife') checked @endif>
                    <label for="singleroom18">{{trans('form.housewife (2)')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="employment_status" value="student" id="familyroom18" @if($individual->employment_status == 'student') checked @endif>
                    <label for="familyroom18">{{trans('form.Student (3)')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="employment_status" value="employee" id="singlerom18" @if($individual->employment_status == 'employee') checked @endif>
                    <label for="singlerom18">{{trans('form.employee (4)')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="employment_status" value="retired" id="familyrom18" @if($individual->employment_status == 'retired') checked @endif>
                    <label for="familyrom18">{{trans('form.retired (5)')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="employment_status" value="businessman" id="familyrm18" @if($individual->employment_status == 'businessman') checked @endif>
                    <label for="familyrm18">{{trans('form.businessman (6)')}}</label>
                    <span class="check"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <label for="rom2" class="radio-label choose">
            {{trans('form.In the event that an employee or retiree is selected, please fill out Form 6')}}                             
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.Model 6')}}
            </label>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Model6->model6_employer_name}}" name="model6_employer_name" placeholder="{{trans('form.employer name')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)">
                @error('model6_employer_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Model6->model6_employer_address}}" name="model6_employer_address" placeholder="{{trans('form.Business address')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)">
                @error('model6_employer_address')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="number"></label>
            <input class="form-control" type="number" value="{{$individual->Individuals_Model6->model6_phone}}" name="model6_phone" placeholder="{{trans('form.phone')}}" aria-label="default input example"  maxlength="20" onkeypress="return isNumberKey(event)">
                @error('model6_phone')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Model6->model6_job_name}}" name="model6_job_name" placeholder="{{trans('form.position')}}" aria-label="default input example"  maxlength="30" onkeypress="return isNumberKey(event)">
                @error('model6_job_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Model6->model6_section}}" name="model6_section" placeholder="{{trans('form.business sector')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)">
                @error('model6_section')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Model6->model6_service_duration}}" name="model6_service_duration" placeholder="{{trans('form.Length of service')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)">
                @error('model6_service_duration')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>


    <div class="form-row">
        <label for="rom2" class="radio-label choose">
            {{trans('form.In the event of choosing a businessman, please fill out Form 7')}}                              
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">
                {{trans('form.Model 7')}}
            </label>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model7_company_name" value="{{$individual->Individuals_Model7->model7_company_name}}" placeholder="{{trans('form.The name of the company/establishment')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)">
                @error('model7_company_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model7_activity_type" value="{{$individual->Individuals_Model7->model7_activity_type}}" placeholder="{{trans('form.activity type')}}" aria-label="default input example"  maxlength="30" onkeypress="return isNumberKey(event)">
                @error('model7_activity_type')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model7_position" value="{{$individual->Individuals_Model7->model7_position}}" placeholder="{{trans('form.position')}}" aria-label="default input example"  maxlength="30" onkeypress="return isNumberKey(event)">
                @error('model7_position')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="number"></label>
            <input class="form-control" type="number" name="model7_phone" value="{{$individual->Individuals_Model7->model7_phone}}" placeholder="{{trans('form.phone')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)">
                @error('model7_phone')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model7_office_address" value="{{$individual->Individuals_Model7->model7_office_address}}" placeholder="{{trans('form.business sector')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)">
                @error('model7_office_address')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model7_number_years_activity" value="{{$individual->Individuals_Model7->model7_number_years_activity}}" placeholder="{{trans('form.Number of years of activity')}}" aria-label="default input example"  maxlength="15" onkeypress="return isNumberKey(event)">
                @error('model7_number_years_activity')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="model7_countries" value="{{$individual->Individuals_Model7->model7_countries}}" placeholder="{{trans('form.countries you deal with')}}" aria-label="default input example"  maxlength="80" onkeypress="return isNumberKey(event)">
                @error('model7_countries')
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
<!------------------------------- استبيان تقييم الملائمة و تحمل المخاطر------------------------------>