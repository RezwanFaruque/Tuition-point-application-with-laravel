@extends('layouts.loginlayout')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="faq-section">
                <div class="title">
                   Frequently Asked Questions
                </div>
                <div class="faq-collapse-body">
                    <div id="accordion">
                        <div class="card mb-4">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Meet Tutor কী?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Meet Tutor অনলাইনে হোম টিউটর খোঁজার একটি ফুল-ফিচারড প্লাটফর্ম। তবে, ক্ষেত্রবিশেষে কিছু জায়গাতে আমরা ব্যাচ সুবিধাও দিয়ে থাকি। আমাদের রয়েছে প্রশিক্ষিত গার্ডিয়ান কনসাল্টেন্ট, যারা তাদের অভিজ্ঞতাকে কাজে লাগিয়ে সঠিক পরামর্শ দিয়ে থাকেন।
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        Meet Tutor কীভাবে পরিচালিত হয়?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                   আমাদের রয়েছে বিভিন্ন স্কুল-কলেজ ও কোচিং-এর শিক্ষক-শিক্ষিকামন্ডলি। এছাড়াও, আমাদের সাথে রয়েছে প্রায় ঢাকা বিশ্ববিদ্যালয়, জাহাঙ্গীরনগর বিশ্ববিদ্যালয়, জগন্নাথ বিশবিদ্যালয়সহ, ঢামেক, বুয়েট, চুয়েট, রুয়েটসব বিভিন্ন প্রকৌশল বিশ্ববিদ্যালয়ের প্রায় ১০০০০ এরও বেশি শিক্ষার্থী।
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Meet Tutor কী সব রকমের শিক্ষক-শিক্ষিকা দিয়ে থাকেন?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                   হ্যাঁ, আমরা ইংলিশ মিডিয়াম, ইংলিশ ভার্সন, বাংলা মাধ্যমসহ, বিভিন্ন প্রফেশনাল কোর্স যেমন, IELTS, GRE, GED, SPOKEN ENGLISH, GRAPHICS DESIGN, WEB DEVELOPMENT & DESIGN, DIGITAL MARKETING ইত্যাদি বিষয়ের টিউটর/মেন্টর দেওয়া হয়।
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="faq-section">
                <div class="title">
                    Frequently Asked Questions
                </div>

                <div class="faq-collapse-body">
                    <div id="accordion">
                        <div class="card mb-4">
                            <div class="card-header" id="headingfour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapsefour"
                                        aria-expanded="true" aria-controls="collapsefour">
                                        প্রিমিয়াম টিউটর হওয়ার সুবিধা কী?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapsefour" class="collapse show" aria-labelledby="headingfour"
                                data-parent="#accordion">
                                <div class="card-body">
                                    প্রিমিয়াম টিউটর আমাদের পেইড সার্ভিস। এর মাধ্যমে টিউশন প্রাপ্তিতে অগ্রাধিকারসহ বিভিন্ন সুযোগ-সুবিধা প্রদান করা হয়। বিস্তারিত জানতে আমাদের হটলাইন নাম্বারে কল করুন।
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
