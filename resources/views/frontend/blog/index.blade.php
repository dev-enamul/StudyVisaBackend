@extends('frontend.master.layouts')
@section('content')

<div class="nhp-banner-c">
    <img src="{{asset($key[49]->val)}}" alt="Scholarship Offers">
    <button class="edit button-1 top_left" id="edit_button" onclick="getEditModal(49,'file','1920 X 452')"  style="z-index: 99">
        <span class="edit-icon"></span>
    </button>  
       <section class="breadcrumb-part">
           <div class="container">
               <div class="row">
               <div class="col-12 text-center">
                       <div class="breadcrumb-title">
                           <h1>Blogs</h1> 
                       </div>
                   </div>
               </div> 
           </div>
       </section>
    </div>

<section class="blog-area mb-5 mt-5">
    <div class="container">
        <div class="row">

            <section class="blog-area mb-5">
                <div class="container">
                    <div class="row"> 
                        @foreach ($datas as $data)
                        <div class="col-xl-4 col-md-6 col-sm-12 mb-30px">
                            <div class="single-blog">
                                <div class="thumb">
                                    <img src="{{asset($data->image??'frontend/images/blog.jpg')}}" alt="">
                                </div>
                                <div class="single-blog-content-box">
                                    <h2>{{$data->heading}}</h2>
                                    <p>{!!Str::limit($data->description,200)!!}</p>
                                     <div class="readmore mt-2">
                                         <a href="{{route('frontend.blog',$data->slug)}}" class="button-1">Read More <i class="icofont-arrow-right"></i></a>
                                     </div>
                                </div>
                            </div>
                        </div>
                        @endforeach 
                    </div>
                </div>
            </section>
         
            

        </div>
    </div>
</section>

@endsection