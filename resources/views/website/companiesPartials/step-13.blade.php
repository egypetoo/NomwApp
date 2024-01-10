<!------------------------------------------ Client's financial situation       -------------------------------------->
<h3>
</h3>
<fieldset>
    <div class="form-row">
        <label for="room2" class="radio-label choose head-form">
            {{trans('form.Client financial condition')}} 
        </label>
    </div>

    <div class="form-row">
        <div class="form-radio">
            <label for="net_assets" class="radio-label">
                {{trans('form.Net assets (in Saudi Riyals)')}} [{{trans('form.points')}}]                            
                </label>
            <div class="form-radio-group">            
                <div class="form-radio-item">
                    <input type="radio" name="net_assets" value="a" id="single_room19" required @if($company->net_assets == 'a') checked @endif>
                    <label for="single_room19"> {{trans('form.less than 100,000 [0]')}} </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="net_assets" value="b" id="family_room19" @if($company->net_assets == 'b') checked @endif>
                    <label for="family_room19">{{trans('form.100,001 to 300,000 [1]')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="net_assets" value="c" id="familyroom19" @if($company->net_assets == 'c') checked @endif>
                    <label for="familyroom19">{{trans('form.300,001 to 600,000 [2]')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="net_assets" value="d" id="singlerom19" @if($company->net_assets == 'd') checked @endif>
                    <label for="singlerom19">{{trans('form.600,001 to 1,500,000 [4]')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="net_assets" value="e" id="familyrom19" @if($company->net_assets == 'e') checked @endif>
                    <label for="familyrom19">{{trans('form.1,500,001 to 5,000,000 [6]')}}</label>
                    <span class="check"></span>
                </div>

                <div class="form-radio-item">
                    <input type="radio" name="net_assets" value="f" id="famlyrom1900" @if($company->net_assets == 'f') checked @endif>
                    <label for="famlyrom1900">{{trans('form.5,000,001 to 10,000,000 [8]')}}</label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="net_assets" value="g" id="famlyrom20" @if($company->net_assets == 'g') checked @endif>
                    <label for="famlyrom20">{{trans('form.10,000,001 to 50,000,000 [10]')}} </label>
                    <span class="check"></span>
                </div>
                <div class="form-radio-item">
                    <input type="radio" name="net_assets" value="h" id="famlyrm21" @if($company->net_assets == 'h') checked @endif>
                    <label for="famlyrm21">{{trans('form.More than 50,000,000 [12]')}} </label>
                    <span class="check"></span>
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
<!------------------------------------------ Client's financial situation       -------------------------------------->
