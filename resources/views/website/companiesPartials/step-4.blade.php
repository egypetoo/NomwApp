<!--------------------------------------------BOD member information ------------------------------------------>
<h3></h3>
<fieldset>
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.Information about the members of the Board of Directors (if any)')}}                             
        </label>
    </div>

    <!----------------------------------BOD 1---------------------------------->
    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.member')}} 1                                   
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="member1_name" value="{{$company->Companies_Board_Members->member1_name}}" placeholder="{{trans('form.member_name')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('member1_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="member1_id_num" value="{{$company->Companies_Board_Members->member1_id_num}}" placeholder="{{trans('form.ID Number')}}" aria-label="default input example"  maxlength="20" onkeypress="return isNumberKey(event)" required>
            @error('member1_id_num')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">{{trans('form.Expiry date')}}</label>
            <input class="form-control" type="date" name="member1_date" value="{{$company->Companies_Board_Members->member1_date}}" aria-label="default input example">
            @error('member1_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <!----------------------------------BOD 1---------------------------------->
    <!----------------------------------BOD 2---------------------------------->
    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.member')}} 2                                   
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="member2_name" value="{{$company->Companies_Board_Members->member2_name}}" placeholder="{{trans('form.member_name')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('member2_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="member2_id_num" value="{{$company->Companies_Board_Members->member2_id_num}}" placeholder="{{trans('form.ID Number')}}" aria-label="default input example"  maxlength="20" onkeypress="return isNumberKey(event)" required>
            @error('member2_id_num')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">{{trans('form.Expiry date')}}</label>
            <input class="form-control" type="date" name="member2_date" value="{{$company->Companies_Board_Members->member2_date}}" aria-label="default input example">
            @error('member2_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <!----------------------------------BOD 2---------------------------------->
    <!----------------------------------BOD 3---------------------------------->
    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.member')}} 3                                   
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="member3_name" value="{{$company->Companies_Board_Members->member3_name}}" placeholder="{{trans('form.member_name')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('member3_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="member3_id_num" value="{{$company->Companies_Board_Members->member3_id_num}}" placeholder="{{trans('form.ID Number')}}" aria-label="default input example"  maxlength="20" onkeypress="return isNumberKey(event)" required>
            @error('member3_id_num')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">{{trans('form.Expiry date')}}</label>
            <input class="form-control" type="date" name="member3_date" value="{{$company->Companies_Board_Members->member3_date}}" aria-label="default input example">
            @error('member3_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <!----------------------------------BOD 3---------------------------------->
    <!----------------------------------BOD 4---------------------------------->
    <div class="form-row">
        <label for="room" class="radio-label choose">
            {{trans('form.member')}} 4                                   
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="member4_name" value="{{$company->Companies_Board_Members->member4_name}}" placeholder="{{trans('form.member_name')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
            @error('member4_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" name="member4_id_num" value="{{$company->Companies_Board_Members->member4_id_num}}" placeholder="{{trans('form.ID Number')}}" aria-label="default input example"  maxlength="20" onkeypress="return isNumberKey(event)" required>
            @error('member4_id_num')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">{{trans('form.Expiry date')}}</label>
            <input class="form-control" type="date" name="member4_date" value="{{$company->Companies_Board_Members->member4_date}}" aria-label="default input example">
            @error('member4_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <!----------------------------------BOD 4---------------------------------->

    <input type="hidden" name="step" value="{{$step}}"/>

    <ul class="form-navigation">
        <li><a href="{{url('company-registration/step/'.($step+1))}}">{{trans('form.next')}}</a></li>
        <li><a href="{{url('company-registration/step/'.($step-1))}}">{{trans('form.previous')}}</a></li>
    </ul>
</fieldset>
<!------------------------------------------BOD member information -------------------------------------------->