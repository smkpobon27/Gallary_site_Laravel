<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-10 d-flex align-items-center">
                <h1 class="logo mr-auto"><a href="index.html">Presento<span>.</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="/">Home</a></li>
                        @if (Auth::check())
                            <li><a href="/user/about">About</a></li>
                            <li><a href="/user/profile/create">Profile</a></li>
                            <li><a href="/image/gallary">Gallary</a></li>
                            <li><a href="/team">Team</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li class="drop-down"><a href="">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down 1</a></li>
                                    <li class="drop-down"><a href="#">Deep Drop Down</a>
                                        <ul>
                                            <li><a href="#">Deep Drop Down 1</a></li>
                                            <li><a href="#">Deep Drop Down 2</a></li>
                                            <li><a href="#">Deep Drop Down 3</a></li>
                                            <li><a href="#">Deep Drop Down 4</a></li>
                                            <li><a href="#">Deep Drop Down 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Drop Down 2</a></li>
                                    <li><a href="#">Drop Down 3</a></li>
                                    <li><a href="#">Drop Down 4</a></li>
                                </ul>
                            </li>
                        @endif
                        <li><a href="#contact">Contact</a></li>
                        @if (Auth::guest())
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Register</a></li>
                        @else
                            <li class="drop-down"><a href="">{{ Auth::User()->name }}</a>
                                <ul>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logoutform').submit();">Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </nav><!-- .nav-menu -->
                <form id="logoutform" method="POST" action="{{ route('logout') }}" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>

    </div>
</header><!-- End Header -->
