    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mountain Plains</title>



        <!-- Bootstrap -->
	<link href="{{ asset('css/frontend_css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Main Style -->
	<link href="{{ asset('css/frontend_css/index_main.css') }}" rel="stylesheet">

        <!-- Responsive Style -->
	<link href="{{ asset('css/frontend_css/responsive.css') }}" rel="stylesheet">

        <!--Icon Fonts-->
        <link rel="stylesheet" media="screen" href="assets/fonts/font-awesome/font-awesome.min.css" />


        <!-- Extras -->
        <link rel="stylesheet" type="text/css" href="assets/extras/animate.css">
	<link href="{{ asset('extras/animate.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/extras/lightbox.css">
	<link href="{{ asset('extras/lightbox.css') }}" rel="stylesheet">


        <!-- jQuery Load -->
        <script src="{{ asset('JS/frontend_js/jquery-min.js') }}"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

      </head>

    <body data-spy="scroll" data-offset="20" data-target="#navbar">
    <!-- Nav Menu Section -->
    <div class="logo-menu">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="50">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header col-md-3">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#home">Mountain Plains</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="nav navbar-nav col-md-7 pull-right">
                            <li class="active"><a href="#hero-area"> Home</a></li>
                            <li><a href="#schedule"> Schedule</a></li>
                            <li><a href="#portfolio"> Tickets</a></li>
                            <li><a href="#sponsors"> Sponsors</a></li>
                            <li><a href="#papers"> Papers</a></li>
                            </ul>
        </div>
      </div>
    </nav>
    </div>
<!-- Nav Menu Section End -->

<!-- Hero Area Section -->

<section id="hero-area">
@include('Index.Home')
</section>

<!-- Hero Area Section End-->



<!-- Schedule Section -->

<section id="schedule">
@include('Index.Schedule')
</section>
<!-- Schedule Section End -->



<!-- Ticket Section -->

    <section id="portfolio">
    @include('Index.Ticket')
    </section>
<!-- Ticket Section End -->


<!-- Sponsor Section -->
    <section id="sponsors">
    @include('Index.Sponsors')
    </section>
<!-- Sponsor Section End -->



<!-- paper Section -->
    <section id="papers">
    <h1 class="title">Submit a Paper</h1>
	@include('Index.upload')
    </section>

<!-- Paper Section End-->

<!-- Copyright Section -->
    <div id="copyright">
    <div class="container">
    <div class="col-md-10"><p>Design & Developed by <a href="http://graygrids.com">GrayGrids</a></p></div>

    </div>
<!-- Copyright Section End-->

        <!-- Bootstrap JS -->
        <script src="{{ asset('JS/frontend_js/bootstrap.min.js') }}"></script>

            <!-- Smooth Scroll -->
                    <!-- Smooth Scroll -->
        <script src="assets/js/smooth-scroll.js"></script>
	<script src="{{ asset('JS/frontend_js/smooth-scroll.js') }}"></script>
        <script src="assets/js/lightbox.min.js"></script>
	<script src="{{ asset('JS/frontend_js/lightbox.min.js') }}"></script>

        <!-- All JS plugin Triggers
        <script src="assets/js/main.js"></script>-->



    </body>
    </html>
