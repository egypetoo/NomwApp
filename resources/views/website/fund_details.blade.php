@extends('layouts.app')
@section('meta')
	<title>{{app()->getLocale() == 'en' ? $fund->name_en : $fund->name_ar }}</title>
@endsection

@section('content')

    <!-------------------Breadcrumb----------------------->
    <section class="breadcrumb-area about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="title">{{app()->getLocale() == 'en' ? $fund->name_en : $fund->name_ar}} </h2>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!------------------- End Breadcrumb----------------------->
		<section id="funds-details">
			<div class="container">
				<div class="top-content">
					<div class="funt-img">
						<img src="{{url('uploads/funds/source/' . $fund->image)}}">
					</div>
					<div class="funt-body">
						<h3>
							{{app()->getLocale() == 'en' ? $fund->name_en : $fund->name_ar}}
						</h3>
						<p>
							{!! app()->getLocale() == 'en' ? $fund->text_en : $fund->text_ar !!}
						</p>
						@if(! empty($fund->pdf))
							<div class="download-btn">
								<a href="{{url('uploads/funds/source/' . $fund->pdf)}}" target="_blank" class="btn">{{trans('home.download')}}</a>
							</div>
						@endif
					</div>
				</div>
				<div class="bottom-content">
					<div class="row">
						<div class="form-group col-md-12" id="all-form">
							
							
							<div class="form-check">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term product-images">
                                <label for="agree-term" class="label-agree-term ckbox"><span><span></span></span>
									{{trans('home.Acceptance of the terms and conditions, registration in the fund')}}
								</label>
                            </div>
						</div>
						<div class="col-md-12">
							<div id="product-images">
								<form method="post" action="{{url('save/funds')}}" enctype="multipart/form-data">
									@csrf
									<div class="content">
										<h6>
											{{trans('home.Subscription')}}
										</h6>
										<div class="top">
									<input type="hidden" class="form-control" name="fund_id" id="exampleFormControlInput1" value="{{$fund->id}}">

											<h5>1. {{trans('home.Data of the applicant (customer)')}} :</h5>
											 <div class="mb-3 line">
												 <label for="exampleFormControlInput1" class="form-label">
													{{trans('home.name')}}
												 </label>
												  <input type="text" class="form-control" name="name" id="exampleFormControlInput1" required maxlength="100" onkeypress="return isNumberKey(event)">
											@error('name')
												<span class="text-danger">{{$message}}</span>
											@enderror
											</div>
											<div class="mb-3 line">
												<label for="exampleFormControlInput2" class="form-label">
													{{trans('home.id_type')}}
												</label>
												  <input type="text" class="form-control" name="id_type" id="exampleFormControlInput2" required maxlength="80" onkeypress="return isNumberKey(event)">
												@error('id_type')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
											<div class="mb-3 line">
												<label for="exampleFormControlInput3" class="form-label">
													{{trans('home.id_num')}}
												</label>
												  <input type="number" class="form-control" name="id_num" id="exampleFormControlInput3" required maxlength="20" onkeypress="return isNumberKey(event)">
												@error('id_num')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>
										<div class="middle">
											<h5>
												2. {{trans('home.Subscription data')}}
											</h5>
											<div class="radio-row" id="all-form">
												<label>
													{{trans('home.Subscription_type')}}
												</label>
												<div class="form-row">
													<div class="form-radio">
														<div class="form-radio-group inline-radio">            
															<div class="form-radio-item">
																<input type="radio" name="subscription_type" value="eyes" id="single200" required>
																<label for="single200">
																	{{trans('home.Eyes')}}
																</label>
																<span class="check"></span>
															</div>
															<div class="form-radio-item">
																<input type="radio" name="subscription_type" value="monetary" id="family211">
																<label for="family211">
																	{{trans('home.monetary')}}
																</label>
																<span class="check"></span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!------------------------------------------------------->

												<div class="form-input row">
													<!----------------------------- Start Content Of Row ---------------------------->
													<div class="col-sm-12 col-md-6 col-lg-4">
														<label class="cs-primary_color">
															{{trans('home.number of units')}}
														</label>
													</div>
													<div class="col-sm-12 col-md-6 col-lg-4 inline-input">
														<label class="cs-primary_color">
															{{trans('home.Digital')}}
														</label>
														<input type="text" class="form-control" name="number_of_units_digital" id="exampleFormControlInput6" required maxlength="80" onkeypress="return isNumberKey(event)">
														@error('number_of_units_digital')
															<span class="text-danger">{{$message}}</span>
														@enderror
													</div>
													<div class="col-sm-12 col-md-6 col-lg-4 inline-input">
														<label class="cs-primary_color">
															{{trans('home.writing')}}
														</label>
														<input type="text" class="form-control" name="number_of_units_writing" id="exampleFormControlInput5" required maxlength="80" onkeypress="return isNumberKey(event)">
														@error('number_of_units_writing')
															<span class="text-danger">{{$message}}</span>
														@enderror
													</div>
													<!----------------------------- End Content Of Row ---------------------------->
													<!----------------------------- Start Content Of Row ---------------------------->
													<div class="col-sm-12 col-md-6 col-lg-4">
														<label class="cs-primary_color">
															{{trans('home.The_subscription_fee_is_in_Saudi_riyals')}} 
														</label>
													</div>
													<div class="col-sm-12 col-md-6 col-lg-4 inline-input">
														<label class="cs-primary_color">
															{{trans('home.Digital')}}
														</label>
														<input type="text" class="form-control" name="The_subscription_fee_is_in_Saudi_riyals_digital" id="exampleFormControlInput7" required maxlength="80" onkeypress="return isNumberKey(event)">
											@error('The_subscription_fee_is_in_Saudi_riyals_digital')
												<span class="text-danger">{{$message}}</span>
											@enderror
													</div>
													<div class="col-sm-12 col-md-6 col-lg-4 inline-input">
														<label class="cs-primary_color">
															{{trans('home.writing')}}
														</label>
														<input type="text" class="form-control" name="The_subscription_fee_is_in_Saudi_riyals_writing" id="exampleFormControlInput8" required maxlength="80" onkeypress="return isNumberKey(event)">
											@error('The_subscription_fee_is_in_Saudi_riyals_writing')
												<span class="text-danger">{{$message}}</span>
											@enderror
													</div>
													<!----------------------------- End Content Of Row ---------------------------->
													<!----------------------------- Start Content Of Row ---------------------------->
													<div class="col-sm-12 col-md-6 col-lg-4">
														<label class="cs-primary_color">
															{{trans('home.paid amount')}} 
														</label>
													</div>
													<div class="col-sm-12 col-md-6 col-lg-4 inline-input">
														<label class="cs-primary_color">
															{{trans('home.Digital')}}
														</label>
														<input type="text" class="form-control" name="paid_amount_digital" id="exampleFormControlInput11" required maxlength="80" onkeypress="return isNumberKey(event)">
											@error('paid_amount_digital')
												<span class="text-danger">{{$message}}</span>
											@enderror
													</div>
													<div class="ccol-sm-12 col-md-6 col-lg-4 inline-input">
														<label class="cs-primary_color">
															{{trans('home.writing')}}
														</label>
														<input type="text" class="form-control" name="paid_amount_writing" id="exampleFormControlInput12" required maxlength="80" onkeypress="return isNumberKey(event)">
											@error('paid_amount_writing')
												<span class="text-danger">{{$message}}</span>
											@enderror
													</div>
													<!----------------------------- End Content Of Row ---------------------------->
												</div>
										</div>
										<div class="bottom">
											<h5>
												3. {{trans('home.Payment instructions')}}
											</h5>
											<p>
												{{trans('home.In my capacity as the undersigned applicant, I declare that the full value of the cash subscription amount and any fees and charges have been transferred in the Know Your Customer form
	From my bank account mentioned in the know the customer form and according to what is stated in the terms and conditions of the fund. He also acknowledged that in the event of being late
	Transferring the subscription amount to the specified bank account, the subscription will be incomplete and void. As endorsed by I/we, the signed applicant
	Below is the receipt of the private placement documents of the Defaf Real Estate Fund, and their reading, understanding and acceptance, including the terms and conditions of the fund and part
	relating to the “representations and warranties of the Applicant” contained in this Subscription Agreement, and I/we irrevocably and irrevocably agree to
	Conditional on subscribing to the number of units specified in this application in the Defaf Real Estate Fund.')}}
											</p>
											<div class="mb-3 line">
												 <label for="exampleFormControlInput1" class="form-label">
													{{trans('home.client_name')}}
												 </label>
												  <input type="text" class="form-control" name="client_name" id="exampleFormControlInput13" required maxlength="80" onkeypress="return isNumberKey(event)">
											@error('client_name')
												<span class="text-danger">{{$message}}</span>
											@enderror
											</div>

											<div class="mb-3 line">
												<label for="exampleFormControlInput3" class="form-label">
													{{trans('home.date')}}
												</label>
												<input type="date" class="form-control hijri-date-input" name="date" id="exampleFormControlInput15" required>
											@error('date')
												<span class="text-danger">{{$message}}</span>
											@enderror
											</div>
																						<div class="mb-3 line">
												<label for="exampleFormControlInput2" class="form-label">
													{{trans('home.client_signature')}}
												</label>
												  <input type="file" class="form-control" name="client_signature" id="exampleFormControlInput14" required maxlength="80" onkeypress="return isNumberKey(event)">
											@error('client_signature')
												<span class="text-danger">{{$message}}</span>
											@enderror
											</div>
												<!--online signature -->
		<div class="row form-row">
			<div class="col-sm-12 col-md-12">
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
		</div>
										</div>
									</div>
									<button type="submit" class="sub-btn">{{trans('home.submit')}}</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		
@endsection
@section('script')
		<script>
			$(".product-images").click(function(){
					if($(".product-images").is(':checked') ){
						$("#product-images").css({'display': 'block'});
					}else{
						$("#product-images").css({'display': 'none'});
					}
				});
		</script>
		<script src="{{url('resources/assets/front/js/signature_pad.min.js')}}"></script>
		<script src="{{url('resources/assets/front/js/signature_pad2.min.js')}}"></script>
		<!--<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>-->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script> --->
        <script>
            var wrapper = document.getElementById("signature-pad");
            var clearButton = wrapper.querySelector("[data-action=clear]");
            var changeColorButton = wrapper.querySelector("[data-action=change-color]");
            var savePNGButton = wrapper.querySelector("[data-action=save-png]");
            var saveJPGButton = wrapper.querySelector("[data-action=save-jpg]");
            var saveSVGButton = wrapper.querySelector("[data-action=save-svg]");
            var canvas = wrapper.querySelector("canvas");
            var signaturePad = new SignaturePad(canvas, {
                backgroundColor: 'rgb(255, 255, 255)'
            });
            // Adjust canvas coordinate space taking into account pixel ratio,
            // to make it look crisp on mobile devices.
            // This also causes canvas to be cleared.
            function resizeCanvas() {
                // When zoomed out to less than 100%, for some very strange reason,
                // some browsers report devicePixelRatio as less than 1
                // and only part of the canvas is cleared then.
                var ratio =  Math.max(window.devicePixelRatio || 1, 1);
                // This part causes the canvas to be cleared
                canvas.width = canvas.offsetWidth * ratio;
                canvas.height = canvas.offsetHeight * ratio;
                canvas.getContext("2d").scale(ratio, ratio);
                // This library does not listen for canvas changes, so after the canvas is automatically
                // cleared by the browser, SignaturePad#isEmpty might still return false, even though the
                // canvas looks empty, because the internal data of this library wasn't cleared. To make sure
                // that the state of this library is consistent with visual state of the canvas, you
                // have to clear it manually.
                signaturePad.clear();
            }
            // On mobile devices it might make more sense to listen to orientation change,
            // rather than window resize events.
            window.onresize = resizeCanvas;
            resizeCanvas();
            function download(dataURL, filename) {
                var blob = dataURLToBlob(dataURL);
                var url = window.URL.createObjectURL(blob);
                var a = document.createElement("a");
                a.style = "display: none";
                a.href = url;
                a.download = filename;
                document.body.appendChild(a);
                a.click();
                window.URL.revokeObjectURL(url);
            }
            // One could simply use Canvas#toBlob method instead, but it's just to show
            // that it can be done using result of SignaturePad#toDataURL.
            function dataURLToBlob(dataURL) {
                var parts = dataURL.split(';base64,');
                var contentType = parts[0].split(":")[1];
                var raw = window.atob(parts[1]);
                var rawLength = raw.length;
                var uInt8Array = new Uint8Array(rawLength);
                for (var i = 0; i < rawLength; ++i) {
                    uInt8Array[i] = raw.charCodeAt(i);
                }
                return new Blob([uInt8Array], { type: contentType });
            }
            clearButton.addEventListener("click", function (event) {
                signaturePad.clear();
            });
            changeColorButton.addEventListener("click", function (event) {
                var r = Math.round(Math.random() * 255);
                var g = Math.round(Math.random() * 255);
                var b = Math.round(Math.random() * 255);
                var color = "rgb(" + r + "," + g + "," + b +")";
                signaturePad.penColor = color;
            });
            savePNGButton.addEventListener("click", function (event) {
                if (signaturePad.isEmpty()) {
                alert("Please provide a signature first.");
                } else {
                var dataURL = signaturePad.toDataURL();
                download(dataURL, "signature.png");
                }
            });
            saveJPGButton.addEventListener("click", function (event) {
                if (signaturePad.isEmpty()) {
                alert("Please provide a signature first.");
                } else {
                var dataURL = signaturePad.toDataURL("image/jpeg");
                download(dataURL, "signature.jpg");
                }
            });

        </script>
@endsection
