@extends('layout.main')
@section('title')
    Home| Mountain Plains
@endsection
@section('content')
    {{--@foreach($data as $datas)--}}
        {{--<h1>{!! $datas->Title!!}</h1>--}}
        {{--<h6>{!! $datas->body !!}</h6>--}}
        {{--<a href="/home-edit/edit/{{$datas->id}}">Edit</a>--}}
    {{--@endforeach--}}

    @foreach($data as $datas)

    <section id="hero">
        <div class="hero-container">
                    <div class="carousel-item active" style="background: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fpixabay.com%2Fimages%2Fsearch%2Fnature%2F&psig=AOvVaw3cPSDtB8Oa99_wvPzsi9Xx&ust=1586227061192000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCNDl5bTi0ugCFQAAAAAdAAAAABAD')">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animated fadeInDown">Welcome to <span>Mountain Plains Conference </span></h2>
                                <h3 class="animated fadeInUp">Educational Conference for a teacher from mountain plains region</h3>
                                <h4>Location: {!! $datas->Location !!}</h4>
                                <h5>Time: {!! $datas->Time !!}</h5>
                            </div>
                        </div>
                    </div>
        </div>
    </section><!-- End Hero -->

    <section id="about" class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('Image/about.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>About Us</h3>
                    <p class="font-italic">{!! $datas->description!!}</p>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->



    @endforeach
@endsection
