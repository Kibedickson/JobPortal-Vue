<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
    <div class="container">
        <div class="theme-header clearfix">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="lni lni-menu"></span>
                    <span class="lni lni-menu"></span>
                    <span class="lni lni-menu"></span>
                </button>
                <a href="/" class="navbar-brand"><img src="{{ URL::asset('assets/img/logo.png') }}" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item active">
                        <a class="nav-link" ><router-link to="/">Home</router-link></a>
                    </li>
                    @if(Gate::allows('isCandidate'))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Candidates
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"><router-link to="/browse">Browse Jobs</router-link></a></li>
                                <li><a class="dropdown-item " href="">Job Details</a></li>
                            </ul>
                        </li>
                    @endif
                    @if(Gate::allows('isEmployer'))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Employer
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="">Add Job</a></li>
                                <li><a class="dropdown-item"><router-link to="/browse">Browse Jobs</router-link></a></li>
                                <li><a class="dropdown-item" href="">Manage Applications</a></li>
                            </ul>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            Contact
                        </a>
                    </li>
                    @if(Gate::allows('isCandidate'))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="">My Resume</a></li>
                                <li><a class="dropdown-item" href="">Manage Applications</a></li>
                            </ul>
                        </li>
                    @endif
                    @guest
                        <li class="nav-item">
                            <a class="nav-link"><router-link to="/login">Login</router-link></a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <li class="button-group">
                        <router-link to="/addjob"><a class=" button btn btn-common">Post a Job</a></router-link>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu" data-logo="{{ asset('assets/img/logo-mobile.png') }}"></div>
</nav>
