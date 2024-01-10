<!----------------------------------------------  RELATIONSHIP MANAGER ACKNOWLEDGEMENT   ----------------------------------------------->
<h3>
</h3>
<fieldset> 

    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.Relationship manager approval')}}                            
        </label>
    </div>
    
    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">{{trans('form.date')}}</label>
            <input class="form-control" type="date" name="manager_approval_date" value="{{$company->Companies_Manager_Approval->manager_approval_date}}" aria-label="default input example">
                @error('manager_approval_date')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="manager_approval_agreement_place" value="{{$company->Companies_Manager_Approval->manager_approval_agreement_place}}" placeholder="{{trans('form.Meeting Place')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_approval_agreement_place')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="manager_approval_employee_name" value="{{$company->Companies_Manager_Approval->manager_approval_employee_name}}" placeholder="{{trans('form.Company employee name')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_approval_employee_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="manager_approval_employee_signature" value="{{$company->Companies_Manager_Approval->manager_approval_employee_signature}}" placeholder="{{trans('form.Signature of the company employee')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_approval_employee_signature')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <label for="room2" class="radio-label choose">
            {{trans('form.and compliance compliance management')}}                           
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="manager_approval_conformity_reason" value="{{$company->Companies_Manager_Approval->manager_approval_conformity_reason}}" placeholder="{{trans('form.The reason for rejecting the application')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_approval_conformity_reason')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="manager_approval_conformity_name" value="{{$company->Companies_Manager_Approval->manager_approval_conformity_name}}" placeholder="{{trans('form.name')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_approval_conformity_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="manager_approval_conformity_signature" value="{{$company->Companies_Manager_Approval->manager_approval_conformity_signature}}" placeholder="{{trans('form.the signature')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_approval_conformity_signature')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="date" name="manager_approval_conformity_date" value="{{$company->Companies_Manager_Approval->manager_approval_conformity_date}}" aria-label="default input example">
                @error('manager_approval_conformity_date')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <label for="room2" class="radio-label choose">
            {{trans('form.Some cases (CEO)')}}                         
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="manager_approval_some_cases_reason" value="{{$company->Companies_Manager_Approval->manager_approval_some_cases_reason}}" placeholder="{{trans('form.The reason for rejecting the application')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_approval_some_cases_reason')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="manager_approval_some_cases_name" value="{{$company->Companies_Manager_Approval->manager_approval_some_cases_name}}" placeholder="{{trans('form.name')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_approval_some_cases_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="manager_approval_some_cases_signature" value="{{$company->Companies_Manager_Approval->manager_approval_some_cases_signature}}" placeholder="{{trans('form.the signature')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_approval_some_cases_signature')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="date" name="manager_approval_some_cases_date" value="{{$company->Companies_Manager_Approval->manager_approval_some_cases_date}}" aria-label="default input example">
                @error('manager_approval_some_cases_date')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <label for="room2" class="radio-label choose">
            {{trans('form.management operations')}}                           
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="manager_approval_management_operations_num" value="{{$company->Companies_Manager_Approval->manager_approval_management_operations_num}}" placeholder="{{trans('form.client_number')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_approval_management_operations_num')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="manager_approval_management_operations_name" value="{{$company->Companies_Manager_Approval->manager_approval_management_operations_name}}" placeholder="{{trans('form.name')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_approval_management_operations_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="manager_approval_management_operations_job" value="{{$company->Companies_Manager_Approval->manager_approval_management_operations_job}}" placeholder="{{trans('form.Position')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_approval_management_operations_job')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="manager_approval_management_operations_signature" value="{{$company->Companies_Manager_Approval->manager_approval_management_operations_signature}}" placeholder="{{trans('form.the signature')}}" aria-label="default input example" maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_approval_management_operations_signature')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="date" name="manager_approval_management_operations_date" value="{{$company->Companies_Manager_Approval->manager_approval_management_operations_date}}" aria-label="default input example">
                @error('manager_approval_management_operations_date')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div>

    <input type="hidden" name="step" value="{{$step}}"/>

    <ul class="form-navigation">
        <li><a href="{{url('company-registration/step/'.($step-1))}}">{{trans('form.previous')}}</a></li>
    </ul>
    
</fieldset>
<!---------------------------------------------  RELATIONSHIP MANAGER ACKNOWLEDGEMENT   ------------------------------------------------->
