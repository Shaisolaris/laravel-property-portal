<div class="navbarWraper">
    <div class="topBar">
        <div class="container">
            <div class="row align-items-center justify-content-between px-2 px-sm-0">
                <div class="d-flex logoWrapper">
                    <div class="logo d-lg-block d-none">
                        <a class="" href="{{ url('/') }}">
                            <img src="{{ asset('design/img/navbar/Logo.svg') }}" alt="logo"/>
                        </a>
                    </div>
                    <div class="contactWrapper d-flex align-items-md-center">
                        <div class="contactInfo phoneNo">
                            <a href="tel:+143-52-9933631" class="d-flex">
                                <img src="{{ asset('design/img/navbar/telephone.svg') }}" class="mr-2"/> +143-52-9933631
                            </a>
                        </div>
                        <div class="contactInfo email">
                            <a class="d-flex" href="#">
                                <img src="{{ asset('design/img/navbar/envelope.svg') }}" class="mr-2"/>
                                academy@example.com
                            </a>
                        </div>
                    </div>
                </div>
                <div class="languageSelector">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            English
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navigationBar">
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg bg-transparent px-sm-0 px-2">
                <a class="d-lg-none d-block" href="/">
                    <img src="{{ asset('design/img/navbar/Logo.svg') }}" alt="logo"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <img src="{{ asset('design/img/navbar/menuBtn.svg') }}" alt="inoura"/>
                    </span>
                </button>
                <div class="collapse navbar-collapse align-lg-baseline" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto navbarContent">
                        <li class="nav-item active">
                            <a class="nav-link pl-0" href="{{ url('/') }}">Academy of Inoura</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">
                                School of Inoura
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                All Courses
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <img src="{{ asset('design/img/navbar/search.svg') }}" class="seachBtn" alt="search"/>
                        </li>
                    </ul>
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <form class="form-inline mt-2 mb-4 mt-lg-0 mb-lg-0 navbarBtn">
                            <a href="{{ url('/logout') }}" class="profileDetail text-danger">Logout</a>
                            <a href="{{ url('/academy/dashboard/courses') }}" class="profileDetail">My Courses</a>

                            <a href="{{ url('/cart/') }}" class="navIcons">
                                <img src="/design/img/navbar/handbag.svg" alt="inoura"/>
                            </a>

                            <a href="" class="navIcons">
                                <img src="/design/img/navbar/heart.svg" alt="inoura"/>
                            </a>
                            <a href="{{ url('/academy/dashboard/settings') }}" class="navIcons">
                                <img src="/design/img/navbar/bell.svg" alt="inoura"/>
                            </a>
                            <a href="{{ url('/academy/dashboard') }}" class="profile">
                                <img src="{{ $authUser->getAvatar(40) }}" alt="inoura" height="40"/>
                            </a>
                        </form>
                    @else
                        <form class="form-inline mt-2 mb-4 mt-lg-0 mb-lg-0 navbarBtn">
                            <a href="#" class="navIcons">
                                <img src="{{ asset('design/img/navbar/handbag.svg') }}" alt="inoura"/>
                            </a>
                            <a>
                                <button class="btn contactUsBtn" type="submit">
                                    Create an account
                                </button>
                            </a>
                            <a href="{{ url('/login') }}">
                                <button class="btn loginBtn" type="button">Login</button>
                            </a>
                        </form>
                    @endif
                </div>
            </nav>
        </div>
    </div>
</div>
