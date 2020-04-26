<div class="container">
<h1 class="title">Tickets</h1>
<div align="center">
<div class="row">
<div class="col-md-12">
<p>Tickets may be requested and paid for through a seperate event registration site.</p>
@foreach($ticketData as $ev)
    <a href="{{$ev->URL}}" class="btn btn-common btn-lg">Get a Ticket</a>
    <!--<iframe src="{{$ev->URL}}" scrolling="no"></iframe>-->
@endforeach
</div>
</div>
</div>
</div>
