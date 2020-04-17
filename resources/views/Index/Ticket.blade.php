<div class="container">
<h1 class="title">Tickets</h1>
<div align="center">
@foreach($ticketData as $ev)
    <iframe src="{{$ev->URL}}" scrolling="no"></iframe>
@endforeach
</div>
</div>
