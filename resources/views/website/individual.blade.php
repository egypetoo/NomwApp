@extends('layouts.app')
@section('meta')
    <title>{{trans('home.Register as an individual')}}</title>
@endsection

@php
    $individual =session()->get('individual');
@endphp

@section('content')
    <!-------------------Breadcrumb----------------------->
    <section class="breadcrumb-area employee">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="title">{{trans('home.Register as an individual')}}</h2>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!------------------- End Breadcrumb----------------------->
    <!------------------------------------------------- Start Form Wizard page ------------------------------------------------->
    <section id="all-form">
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 tabs-div">
                        <ul class="sid-menu">
                            @for($i=1; $i<=17; $i++)
                                <li class="@if($step == $i) active @endif"><a href="{{url("indvidual-registration/step/$i")}}">{{trans('form.step')}} {{$i}}</a></li>
                            @endfor
                        </ul>
                    </div>
                    <div class="col-md-9 form-div">
                        <form method="POST" action='{{url("indvidual-registration/update/$individual->id")}}' id="signup-form" class="signup-form" enctype="multipart/form-data">
                            @csrf 
                            <input type="hidden" name="id" value="{{$individual->id}}" />
                            @include("website.individualPartials.step-$step")
                            <div class="form-row">
                                <button type="submit" class="btn submit-btn">{{trans('form.save_changes')}}</button>
								@if($step == 17)<a href="{{url('real-estate-funds')}}" class="btn submit-btn">{{trans('form.investment_funds')}}</a>@endif
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-------------------------------------------------- End  Form Wizard page ------------------------------------------------->   

@endsection
@section('script')
		<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
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
            saveSVGButton.addEventListener("click", function (event) {
                if (signaturePad.isEmpty()) {
                alert("Please provide a signature first.");
                } else {
                var dataURL = signaturePad.toDataURL('image/svg+xml');
                download(dataURL, "signature.svg");
                }
            });
        </script>
@endsection
