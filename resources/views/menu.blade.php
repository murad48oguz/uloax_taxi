<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/responsive.css">
<link rel="icon" href="{{url('images/fevicon.png')}}" type="image/gif" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--header section start -->
<div id="{{route('homePage')}}" class="header_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="logo"><a href="{{route('homePage')}}"><img src="{{url('images/logo.png')}}"></a></div>
            </div>
            <div class="col-sm-6 col-lg-9">
                <div class="menu_text">


                 @guest



                        <ul>
                            <li><a href="{{route('homePage')}}">Home</a></li>
                            <li><a href="#taxis">Taxi</a></li>
                            <li><a href="{{route('register')}}">Register</a></li>
                            <li><a href="{{route('login')}}">Login</a></li>

                        </ul>

                @endguest





                @auth



                        <ul>
                            <li><a href="{{route('homePage')}}">Home</a></li>
                            <li><a href="#taxis">Taxi</a></li>
                            <li><a href="{{route('dashboard')}}">Dashboard</a></li>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900" >

                                    Log out
                                    </button>
                                </form>

                        </ul>



                @endauth













            </div>

            </div>
            </li>
                    </ul>
                </div>
        </div>
    </div>
</div>
<!-- header section end -->



