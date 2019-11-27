<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="col-md-2 mr-3">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="logo">
                    </a>
                </div>

                
                <div class="col-md-8">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('about-us') }}">About us <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('blog') }}">Blog <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-us">Contact us <span class="sr-only">(current)</span></a>
                        </li>
                        </ul>
                        <!-- <form class="form-inline my-2" action="{{ url('blog') }}">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                        </form> -->
                    </div>
                </div>

                <div class="col-md-2">
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary text-white mr-2" href="{{ asset('/login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link btn btn-primary text-white" href="http://localhost/blogsystem/public/register">Register</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>