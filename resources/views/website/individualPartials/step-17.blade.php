<!----------------------------------------------  RELATIONSHIP MANAGER ACKNOWLEDGEMENT   ----------------------------------------------->
<h3>
</h3>
<fieldset> 

    {{--
	<div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.Relationship manager approval')}}                            
        </label>
    </div>
	--}}
    
    {{-- <div class="form-row">
        <div class="form-group">
            <label for="name" class="head">{{trans('form.date')}}</label>
            <input class="form-control" type="date" value="{{$individual->Individuals_Manager_Approval->manager_date}}" name="manager_date" aria-label="default input example">
                @error('manager_date')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div> --}}

    <div class="form-row">
        {{-- <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Manager_Approval->manager_agreement_place}}" name="manager_agreement_place" placeholder="{{trans('form.place of agreement')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_agreement_place')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Manager_Approval->manager_employee_name}}" name="manager_employee_name" placeholder="{{trans('form.Company employee name')}} " aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_employee_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div> --}}
        <div class="form-radio-group" style="padding-top: 0;">            
			<div class="form-radio-item">
				<div class="form-group custom-file">
					<input type="file" class="custom-file-input" name="manager_employee_signature" id="customFile44454545" style="display: none;">
					@error('manager_employee_signature')
					<span class="text-danger">{{$message}}</span>
					@enderror
					<label class="custom-file-label" for="customFile44454545">{{trans('form.Signature of client')}}</label>
				</div>
			</div>
		</div>
    </div>
	<!--online signature -->
		<div class="row form-row">
			<div class="col-sm-12 col-md-12 @if(! empty($individual->Individuals_Manager_Approval->manager_employee_signature)) col-lg-7 @else col-lg-12 @endif">
				<div id="signature-pad" class="jay-signature-pad">
					<div class="jay-signature-pad--body">
						<canvas id="jay-signature-pad" style=" width: 100%; height:200px;" ></canvas>
					</div>
					<div class="signature-pad--footer txt-center">
						<div class="description"><strong> {{trans('form.sign above')}} </strong></div>
						<div class="signature-pad--actions txt-center">
							<div>
								<button type="button" class="button clear submit-btn" data-action="clear">{{trans('form.Clear')}}</button>                        										<button type="button" class="button display-none" data-action="change-color" style="display:none;">Change color</button>

							</div><br/>
							<div>
								<button type="button" class="button save submit-btn" data-action="save-png">{{trans('form.Save as PNG')}}</button>
								<button type="button" class="button save submit-btn" data-action="save-jpg">{{trans('form.Save as JPG')}}</button>
								<!--<button type="button" class="button save submit-btn" data-action="save-svg">Save as SVG</button>-->
							</div>
						</div>
					</div>
				</div>
				
				
		<!-- end online signature -->
			</div>
			@if(! empty($individual->Individuals_Manager_Approval->manager_employee_signature))
			<div class="col-sm-12 col-md-12 col-lg-5">
					<div style="margin-top: 20px;">
						<img style="width: 100%;" src="{{url('uploads/forms/' . $individual->Individuals_Manager_Approval->manager_employee_signature)}}">
					</div>
			</div>
			@endif
		</div>

    {{-- <div class="form-row">
        <label for="room2" class="radio-label choose">
            {{trans('form.and compliance compliance management')}}                           
        </label>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Manager_Approval->manager_conformity_reason}}" name="manager_conformity_reason" placeholder="{{trans('form.The reason for rejecting the application')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_conformity_reason')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Manager_Approval->manager_conformity_name}}" name="manager_conformity_name" placeholder="{{trans('form.name')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_conformity_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Manager_Approval->manager_conformity_signature}}" name="manager_conformity_signature" placeholder="{{trans('form.the signature')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_conformity_signature')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="date" value="{{$individual->Individuals_Manager_Approval->manager_conformity_date}}" name="manager_conformity_date" aria-label="default input example">
                @error('manager_conformity_date')
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
            <input class="form-control" type="text" value="{{$individual->Individuals_Manager_Approval->manager_some_cases_reason}}" name="manager_some_cases_reason" placeholder="{{trans('form.The reason for rejecting the application')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_some_cases_reason')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Manager_Approval->manager_some_cases_name}}" name="manager_some_cases_name" placeholder="{{trans('form.name')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_some_cases_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Manager_Approval->manager_some_cases_signature}}" name="manager_some_cases_signature" placeholder="{{trans('form.the signature')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_some_cases_signature')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="date" value="{{$individual->Individuals_Manager_Approval->manager_some_cases_date}}" name="manager_some_cases_date" aria-label="default input example">
                @error('manager_some_cases_date')
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
            <input class="form-control" type="text" value="{{$individual->Individuals_Manager_Approval->manager_management_operations_num}}" name="manager_management_operations_num" placeholder="{{trans('form.client_number')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_management_operations_num')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Manager_Approval->manager_management_operations_name}}" name="manager_management_operations_name" placeholder="{{trans('form.name')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_management_operations_name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Manager_Approval->manager_management_operations_job}}" name="manager_management_operations_job" placeholder="{{trans('form.Position')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_management_operations_job')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" value="{{$individual->Individuals_Manager_Approval->manager_management_operations_signature}}" name="manager_management_operations_signature" placeholder="{{trans('form.the signature')}}" aria-label="default input example"  maxlength="60" onkeypress="return isNumberKey(event)" required>
                @error('manager_management_operations_signature')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="date" value="{{$individual->Individuals_Manager_Approval->manager_management_operations_date}}" name="manager_management_operations_date" aria-label="default input example">
                @error('manager_management_operations_date')
                    <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
    </div> --}}
    <input type="hidden" name="step" value="{{$step}}"/>

    <ul class="form-navigation">
        <li><a href="{{url('indvidual-registration/step/'.($step-1))}}">{{trans('form.previous')}}</a></li>
    </ul>
</fieldset>
<!---------------------------------------------  RELATIONSHIP MANAGER ACKNOWLEDGEMENT   -------------------------------------------------> 