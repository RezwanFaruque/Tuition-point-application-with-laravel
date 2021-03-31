@extends('layouts.loginlayout')


@section('content')


<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="right-side">
        <!-- Fetchig tutor list in here -->
        <div class="premium-tutor-submit-section">
         <div class="main-section">
             <div class="title">
                প্রিমিয়াম টিউটর হওয়ার জন্য দয়া করে বিকাশের মাধ্যমে ৫০০০ টাকা পেমেন্ট কমপ্লিট করুন। তারপ্র পেমেন্ট শেষে আপনার বিকাশ নাম্বারের শেষের ৪ ডিজিট এবং পেমেন্ট সফল হওয়ার শক্রিনশট আপলোড করে ফরমটি সাবমিট করুন ।  
            </div>

            <div class="form-section">
                <form  action="{{route('tutor.savepaymentinfo')}}" method="POST" enctype="multipart/form-data">
                @csrf
                 <div class="digit-submit">
                     <div class="title">
                      Last 4 Digit of Bkash Number:
                  </div>

                  <div class="digit-input">
                     <input type="text" class="bkash-digit-input" name="degit1">
                     <input type="text" class="bkash-digit-input" name="degit2">
                     <input type="text" class="bkash-digit-input" name="degit3">
                     <input type="text" class="bkash-digit-input" name="degit4">
                 </div>
             </div>

             <div class="screenshot-submit">
                 <div class="title">
                     Upload Successfull Payment's ScreenShoot
                 </div>
                 <div class="file-upload">
                     <input type="file" class="upload-screenshot" name="payment_screen_shoot">
                 </div>
             </div>

             <div class="submit-button">
                 <button type="submit" class="payment-submit">Submit</button>
             </div>
         </form>
     </div>
 </div>
</div>

<div class="make-easy-payment">
 <img class="img-fluid" src="assets/vendor/images/paymentpage/bkash.png">
</div>




<div class="social-fix-position">
    <div class="social-section">
        <div class="logo">
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
        </div>
        <div class="text">
            <a href="#">Facebook</a>
        </div>
    </div>

    <div class="social-section">
        <div class="logo">
            <i class="fa fa-instagram" aria-hidden="true"></i>
        </div>
        <div class="text">
            <a href="#">Instagram</a>
        </div>
    </div>

    <div class="social-section">
        <div class="logo">
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </div>
        <div class="text">
            <a href="#">Tweeter</a>
        </div>
    </div>
</div>
</div>
</div>

@endsection