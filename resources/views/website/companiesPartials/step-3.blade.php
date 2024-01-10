<!-------------------------------------INFORMATION FOR MANAGERS AND EXECUTIVES--------------------------------->
<h3></h3>
<fieldset>
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
           {{trans('form.Information of directors and executives')}}
        </label>
    </div>

    <!----------------------------------Manager 1---------------------------------->
    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.manager')}} 1                                   
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="manager1_name" value="{{$company->Companies_Managers->manager1_name}}" placeholder="{{trans('form.manager_name')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('manager1_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="manager1_id_num" value="{{$company->Companies_Managers->manager1_id_num}}" placeholder="{{trans('form.ID Number')}}" aria-label="default input example"  maxlength="20" onkeypress="return isNumberKey(event)" required>
            @error('manager1_id_num')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">{{trans('form.Expiry date')}}</label>
            <input class="form-control" type="date" value="{{$company->Companies_Managers->manager1_date}}" name="manager1_date" aria-label="default input example">
            @error('manager1_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <!----------------------------------Manager 1---------------------------------->
    <!----------------------------------Manager 2---------------------------------->
    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.manager')}} 2                                   
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="manager2_name" value="{{$company->Companies_Managers->manager2_name}}" placeholder="{{trans('form.manager_name')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('manager2_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="manager2_id_num" value="{{$company->Companies_Managers->manager2_id_num}}" placeholder="{{trans('form.ID Number')}}" aria-label="default input example"  maxlength="20" onkeypress="return isNumberKey(event)" required>
            @error('manager2_id_num')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">{{trans('form.Expiry date')}}</label>
            <input class="form-control" type="date" value="{{$company->Companies_Managers->manager2_date}}" name="manager2_date" aria-label="default input example">
            @error('manager2_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <!----------------------------------Manager 2---------------------------------->
    <!----------------------------------Manager 3---------------------------------->
    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.manager')}} 3                                   
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$company->Companies_Managers->manager3_name}}" name="manager3_name" placeholder="{{trans('form.manager_name')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('manager3_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$company->Companies_Managers->manager3_id_num}}" name="manager3_id_num" placeholder="{{trans('form.ID Number')}}" aria-label="default input example"  maxlength="20" onkeypress="return isNumberKey(event)" required>
            @error('manager3_id_num')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">{{trans('form.Expiry date')}}</label>
            <input class="form-control" type="date" value="{{$company->Companies_Managers->manager3_date}}" name="manager3_date" aria-label="default input example">
            @error('manager3_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <!----------------------------------Manager 3---------------------------------->
    
    <input type="hidden" name="step" value="{{$step}}"/>


    <ul class="form-navigation">
        <li><a href="{{url('company-registration/step/'.($step+1))}}">{{trans('form.next')}}</a></li>
        <li><a href="{{url('company-registration/step/'.($step-1))}}">{{trans('form.previous')}}</a></li>
    </ul>
</fieldset>
<!-------------------------------------INFORMATION FOR MANAGERS AND EXECUTIVES--------------------------------->