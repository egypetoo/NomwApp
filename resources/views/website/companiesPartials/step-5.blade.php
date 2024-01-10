<!--------------------------------------------BOD member information ------------------------------------------>
<h3></h3>
<fieldset>
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.The ownership structure of the owners or those controlling 25% or more of the shares')}}                           
        </label>
    </div>

    <!----------------------------------Owner 1---------------------------------->
    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.owner')}} 1                                   
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="ownership1_name" value="{{$company->Companies_Ownership_Structure->ownership1_name}}" placeholder="{{trans('form.owner_name')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('ownership1_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="ownership1_num_id" value="{{$company->Companies_Ownership_Structure->ownership1_num_id}}" placeholder="{{trans('form.ID Number')}}" aria-label="default input example"  maxlength="20" onkeypress="return isNumberKey(event)" required>
            @error('ownership1_num_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="ownership1_percentage" value="{{$company->Companies_Ownership_Structure->ownership1_percentage}}" placeholder="{{trans('form.ownership percentage')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('ownership1_percentage')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">{{trans('form.Expiry date')}}</label>
            <input class="form-control" type="date" name="ownership1_date" value="{{$company->Companies_Ownership_Structure->ownership1_date}}" aria-label="default input example">
            @error('ownership1_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <!----------------------------------Owner 1---------------------------------->
    <!----------------------------------Owner 2---------------------------------->
    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.owner')}} 2                                   
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="ownership2_name" value="{{$company->Companies_Ownership_Structure->ownership2_name}}" placeholder="{{trans('form.owner_name')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('ownership2_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="ownership2_num_id" value="{{$company->Companies_Ownership_Structure->ownership2_num_id}}" placeholder="{{trans('form.ID Number')}}" aria-label="default input example"  maxlength="20" onkeypress="return isNumberKey(event)" required>
            @error('ownership2_num_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="ownership2_percentage" value="{{$company->Companies_Ownership_Structure->ownership2_percentage}}" placeholder="{{trans('form.ownership percentage')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('ownership2_percentage')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">{{trans('form.Expiry date')}}</label>
            <input class="form-control" type="date" name="ownership2_date" value="{{$company->Companies_Ownership_Structure->ownership2_date}}" aria-label="default input example">
            @error('ownership2_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <!----------------------------------Owner 2---------------------------------->
    <!----------------------------------Owner 3---------------------------------->
    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.owner')}} 3                                   
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="ownership3_name" value="{{$company->Companies_Ownership_Structure->ownership3_name}}" placeholder="{{trans('form.member_name')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('ownership3_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="ownership3_num_id" value="{{$company->Companies_Ownership_Structure->ownership3_num_id}}" placeholder="{{trans('form.owner number')}}" aria-label="default input example"  maxlength="20" onkeypress="return isNumberKey(event)" required>
            @error('ownership3_num_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="ownership3_percentage" value="{{$company->Companies_Ownership_Structure->ownership3_percentage}}" placeholder="{{trans('form.ownership percentage')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('ownership3_percentage')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">{{trans('form.Expiry date')}}</label>
            <input class="form-control" type="date" name="ownership3_date" value="{{$company->Companies_Ownership_Structure->ownership3_date}}" aria-label="default input example">
            @error('ownership3_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <!----------------------------------Owner 3---------------------------------->
    <!----------------------------------Owner 4---------------------------------->
    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.owner')}} 4                                   
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="ownership4_name" value="{{$company->Companies_Ownership_Structure->ownership4_name}}" placeholder="{{trans('form.owner_name')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('ownership4_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="ownership4_num_id" value="{{$company->Companies_Ownership_Structure->ownership4_num_id}}" placeholder="{{trans('form.ID Number')}}" aria-label="default input example"  maxlength="20" onkeypress="return isNumberKey(event)" required>
            @error('ownership4_num_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="ownership4_percentage" value="{{$company->Companies_Ownership_Structure->ownership4_percentage}}" placeholder="{{trans('form.ownership percentage')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('ownership4_percentage')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">{{trans('form.Expiry date')}}</label>
            <input class="form-control" type="date" name="ownership4_date" value="{{$company->Companies_Ownership_Structure->ownership4_date}}" aria-label="default input example">
            @error('ownership4_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <!----------------------------------Owner 4---------------------------------->

    <input type="hidden" name="step" value="{{$step}}"/>

    <ul class="form-navigation">
        <li><a href="{{url('company-registration/step/'.($step+1))}}">{{trans('form.next')}}</a></li>
        <li><a href="{{url('company-registration/step/'.($step-1))}}">{{trans('form.previous')}}</a></li>
    </ul>
</fieldset>
<!------------------------------------------BOD member information -------------------------------------------->