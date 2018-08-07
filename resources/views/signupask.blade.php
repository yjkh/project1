@extends('layout.signuploginlayout')
@section('title','Signup')
@section('content')

 <div class="limiter">
		<div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                                        Signup
                    </span>
                </div>

                <form class="login100-form">
                    <fieldset>
                        <fieldset class="form-group">
                            <legend>I am a</legend>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                 Student
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                                  Tutor
                                </label>
                            </div>
                        </fieldset>
       
                        <div class="container-login100-form-btn" >
                             <button class="login100-form-btn  bg-dark">
                             Register
                             </button> 
                         </div>

                    </fieldset>
               </form>
           </div>
        </div>
    </div>
@endsection