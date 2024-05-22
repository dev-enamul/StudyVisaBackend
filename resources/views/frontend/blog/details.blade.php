@extends('frontend.master.layouts')
@section('content')

 

    <section class="blog-details-area mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="blog-details">
                        <h2>{{$data->heading}}</h2>
                        <div class="thumbnail mb-4">
                            <img class="w-100" src="{{asset($data->details_image)}}" alt="">
                        </div>
                        <p>{!!$data->description!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
 

@endsection