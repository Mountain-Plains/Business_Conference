<header id="header" style="background-color:{{$template->headerColor}};">
    <div class="container d-flex" style="color:{{$template->headerTextColor}};">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="/" style="color:{{$template->headerTextColor}};"><span>Mountain Plains</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
{{--            <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>--}}
        </div>

        <nav class="nav-menu d-none d-lg-block" >
            <ul>
                <li class=""><a href="/" style="color:{{$template->headerTextColor}};">Home</a></li>
                <li><a href="/schedule" style="color:{{$template->headerTextColor}};">Schedule</a></li>
                <li><a href="/file-upload" style="color:{{$template->headerTextColor}};">Paper Submission</a></li>
                <li><a href="/Ticket" style="color:{{$template->headerTextColor}};">Ticket</a></li>
                <li><a href="/Sponsor" style="color:{{$template->headerTextColor}};">Sponsor</a></li>
                <li><a href="/dashboard" style="color:{{$template->headerTextColor}};">Admin</a></li>

            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header>
