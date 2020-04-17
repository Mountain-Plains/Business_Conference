<div class="container">
<h1 class="title">Tickets</h1>
@foreach($ticketData as $ev)
    <iframe src="{{$ev->URL}}" scrolling="no"></iframe>
@endforeach
</div>
