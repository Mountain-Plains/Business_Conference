@foreach($homeData as $datas)
<div class="container">
<div class="row">
<div class="col-md-12">
        <h2 class="title">Welcome to <span>Mountain Plains Conference </span></h1>
        <h3 class="subtitle" style="margin-bottom: 15px">Educational Conference for a Teacher from Mountain Plains Region</h2>

        <img class="col-md-6 col-sm-6 col-xs-12 animated fadeInLeft" src="{{ asset('Image/about.jpg') }}" alt="">

        <div class="col-md-6 col-sm-6 col-xs-12 animated fadeInRight delay-0-5">
	<h4 class="subtitle">Location: {!! $datas->Location !!} </h4>
	<h5 class="subtitle">Time: {!! $datas->Time !!}</h5>
	<h3>About Us</h3>
	{!! $datas->description!!}
        </div>

</div>
</div>
</div>
@endforeach