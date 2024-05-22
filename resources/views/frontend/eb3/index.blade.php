@extends('frontend.master.layouts')
@section('content')

 <div class="nhp-banner-c">
    <img src="{{asset($key[46]->val)}}" alt="Scholarship Offers">
    <button class="edit button-1 top_left" id="edit_button" onclick="getEditModal(46,'file','1920 X 452')"  style="z-index: 99">
        <span class="edit-icon"></span>
    </button>  
       <section class="breadcrumb-part">
           <div class="container">
               <div class="row">
                <div class="col-12 text-center">
                       <div class="breadcrumb-title">
                           
                       </div>
                   </div>
               </div> 
           </div>
       </section>
    </div>
    
<section class="what-we-are-area pb-5 pt-5">
    <div class="container">
 
        <div class="row">
            <div class="col-sm-12 pb-3">
                <div class="relative text-center">
                    <h2>How Does the EB-3 Visa Program Work? </h2> 
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="wwo-thumb">
                    <img class="position-relative" src="{{asset($key[34]->val??'')}}" alt="EB-3">
                    <button class="edit button-1 top_left" id="edit_button" onclick="getEditModal(34,'file','629 X 474')" >
                        <span class="edit-icon"></span>
                    </button> 
                </div><!-- logo box close -->
            </div><!-- col close -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="wwe-content"> 
                    <p class="intro">{!!$key[35]->val??''!!}</p>
                  <button class="button-1"><a href="https://bsmeduimmi.com/blog/green-card-%28eb-3-visa%29-for-unskilled-and-low-skilled-workers">Details</a> </button>
                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(35,'textarea')" >
                        <span class="edit-icon"></span>
                    </button> 

                </div><!-- logo box close -->
            </div><!-- col close -->

        </div>
    </div>
</section><!-- wwo area close -->


<section class="what-we-are-area background-white-2 pt-5 pb-5">
    <div class="container">

        <div class="row">

            <div class="col-md-12 mb-2">
                <div class="title-r">
                    <h2>What we offered?</h2>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="wwe-content"> 
                    <p class="intro">{!!$key[37]->val??''!!}</p>
                    <button class="edit button-1 top_left" id="edit_button" onclick="getEditModal(37,'textarea')" >
                        <span class="edit-icon"></span>
                    </button>
                </div><!-- logo box close -->

                <div class="d-flex">
                    <button class="button-1 mr-2"><a href="{{route('login')}}">Login</a> </button> 
                    <button class="button-1"><a href="{{route('user.register')}}">Register</a> </button>
                </div>

            </div><!-- col close -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="wwo-thumb">
                    <img class="position-relative" src="{{asset($key[36]->val??'')}}" alt="EB-3">
                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(36,'file','629 X 474')" >
                        <span class="edit-icon"></span>
                    </button> 
                </div><!-- logo box close -->
            </div><!-- col close -->

        </div>
    </div>
</section><!-- wwo area close -->

<section class="what-we-are-area  pt-5 pb-5">
  <div class="container">
    <div class="col-md-12">
                <h4 class="color5">Frequently asked questions</h4>
                <!-- Accordion -->
                <div class="accordion mb-3" id="accordionExample">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed position-relative" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    {!!$key[2]->val??''!!}
                                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(2,'text')" >
                                        <span class="edit-icon"></span>
                                    </button>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                            <div class="card-body position-relative">
                                {!!$key[3]->val??''!!}
                                <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(3,'textarea')" >
                                    <span class="edit-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed position-relative" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    {!!$key[4]->val??''!!}
                                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(4,'text')" >
                                        <span class="edit-icon"></span>
                                    </button>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body position-relative">
                                {!!$key[5]->val??''!!} 
                                <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(5,'textarea')" >
                                    <span class="edit-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed position-relative" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    {!!$key[6]->val??''!!} 
                                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(6,'text')" >
                                        <span class="edit-icon"></span>
                                    </button>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body position-relative">
                                {!!$key[7]->val??''!!}
                                <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(7,'textarea')" >
                                    <span class="edit-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed position-relative" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                    {!!$key[8]->val??''!!} 
                                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(8,'text')" >
                                        <span class="edit-icon"></span>
                                    </button>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body position-relative">
                                {!!$key[9]->val??''!!}
                                <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(9,'textarea')" >
                                    <span class="edit-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                  
                   <div class="card">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed position-relative" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                    {!!$key[52]->val??''!!} 
                                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(52,'text')" >
                                        <span class="edit-icon"></span>
                                    </button>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body position-relative">
                                {!!$key[53]->val??''!!}
                                <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(53,'textarea')" >
                                    <span class="edit-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                  
                   <div class="card">
                        <div class="card-header" id="headingsix">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed position-relative" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                    {!!$key[54]->val??''!!} 
                                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(54,'text')" >
                                        <span class="edit-icon"></span>
                                    </button>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                            <div class="card-body position-relative">
                                {!!$key[55]->val??''!!}
                                <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(55,'textarea')" >
                                    <span class="edit-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                  
                  
                </div>  
               
            </div> 
  </div> 
</section>
 
 @include('frontend.pages.free_consultant')
 @include('frontend.pages.achivement')
@endsection