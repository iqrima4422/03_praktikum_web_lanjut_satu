@extends('layouts.app')

@section('content')
<!-- CONTACT FORM-->
<div class="support">
<div class="container">
<h2 class="sub-header1" id="contact"><span class='color'>Contact</span> Support</h2>
        <div class="row">
          
          <form role="form" method="POST" action="" onSubmit="this.scrollPosition.value=document.body.scrollTop" class="contact-form">

            <input type="hidden" name="scrollPosition">

            <input type="hidden" name="submitted" id="submitted" value="true" />

            <div class="col-lg-4 col-sm-4" data-scrollreveal="enter left after 0s over 1s">

              <input type="text" name="myname" placeholder="Your Name" class="form-control input-box" value="">

            </div>
            <br>

            <div class="col-lg-4 col-sm-4" data-scrollreveal="enter left after 0s over 1s">

              <input type="email" name="myemail" placeholder="Your Email" class="form-control input-box" value="">

            </div>
            <br>

            <div class="col-lg-4 col-sm-4" data-scrollreveal="enter left after 0s over 1s">

              <input type="text" name="mysubject" placeholder="Subject" class="form-control input-box" value="">

            </div>
            <br>

            <div class="col-md-12" data-scrollreveal="enter right after 0s over 1s">

              <textarea name="mymessage" class="form-control textarea-box" placeholder="Your Message"></textarea>
            <br>
              <button class="btn btn-primary custom-button send-btn" type="submit" data-scrollreveal="enter left after 0s over 1s">Send Message</button> 
            </div>
            
          </form>

        </div>
</div>
</div>
<br>
<br>
<br>
<br>

<!-- / END CONTACT FORM-->
@endsection