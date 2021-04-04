@extends('layouts.loginlayout')


@section('content')


<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="right-side">
        <!-- Fetchig tutor list in here -->
        <div class="premium-tutor-submit-section">
         <div class="main-section">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="title" style="text-align: left; white-space: pre-line; width: 60%;margin: auto;">
                      কেন ‘Premium Tutor’ হবেন?
                      ১) আপনার টিউটর প্রোফাইল আমাদের বিশেষ ট্যাব ‘প্রিমিয়াম টিউটর’ সেকশনে দেখানো হবে, যার মাধ্যমে আপনি দ্রুত টিউশন অফার পেতে পারেন।
                      ২) ‘প্রিমিয়াম টিউটর’ সুবিধা নেওয়া শিক্ষক-শিক্ষিকাদের প্রোফাইল গার্ডিয়ান কতৃক টিউটর সার্চে
                      অগ্রাধিকার ভিত্তিতে প্রথম দিকে শো করানো হবে।
                      ৩) আপনার প্রদানকৃত তথ্যমতে আপনার এলাকায় টিউশন ম্যাচিং হলে TUTOR DASHBOARD এর
                      নোটিফিকেশন পাঠানোর পাশাপাশি সরাসরি SMS এর মাধ্যমে জানানো হবে।
                      ৪) আপনার প্রোফাইল আইকনের নামের পাশে ভেরিফাইড ব্যাজ শো করবে, যা আপনাকে দ্রুত টিউশন পেতে সাহায্য করবে।

                      <span style="color: red;font-weight: bolder;">3 Month – 300 TK</span>
                      <span style="color: red;font-weight: bolder;">6 Month – 500 TK</span>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="title" style="text-align: left; white-space: pre-line;width: 60%;margin: auto;">
                 কীভাবে পে করবেন?
                 ১) যেকোনো একটি প্যাকেজ পছন্দ করুন।
                 ২) BKash/ROCKET/NAGAD এর USSD মেন্যু অথবা অ্যাপে এর মাধ্যমে ‘Send Money’ অপশনটি
                 সিলেক্ট করুন।
                 ৩) আমাদের নাম্বার প্রবেশ করান।
                 <span style="color: red;font-weight: bolder;">BKash/NAGAD: 01317263524</span>
                 <span style="color: red; font-weight: bolder;">ROCKET: 017595882884</span>
                 ৪) রেফারেন্স হিসেবে ‘MT-PT’ ব্যবহার করুন।
                 ৫) সাকসেসফুলি পেমেন্ট সম্পন্ন করার পরে নিন্মোক্ত ঘরে আপনার ফোন নাম্বার (যে নাম্বার থেকে টাকা
                 পাঠানো হয়েছে) ও Transaction ID এর শেষ ৪ ডিজিট আমাদের জানান।
                 ৬) এডমিন প্যানেল কতৃক আপনার রিকুয়েস্টটি সম্পন্ন করতে কিছুটা সময় লাগতে পারে। ধন্যবাদ।
                 প্রয়োজনে কল করুন আমাদের নাম্বারে।
                 হটলাইনঃ +8801609 578 508
             </div>
         </div>
     </div>


     <div class="form-section">
        <div class="title" style="color: red; font-weight: bold">
            আপনার বিকাশ/নগদ/রকেট এর শেষ ৪ ডিজিট এবং সফল পেমেন্ট এর স্ক্রিনশট নিচে সাবমিট করুন। 
        </div>
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

             <input type="hidden" name="name" value="{{Auth::user()->name}}">
             <input type="hidden" name="phone_number" value="{{Auth::user()->phone_number}}">
             <input type="hidden" name="email" value="{{Auth::user()->email}}">

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

{{-- <div class="make-easy-payment">
 <img class="img-fluid" src="assets/vendor/images/paymentpage/bkash.png">
</div> --}}




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