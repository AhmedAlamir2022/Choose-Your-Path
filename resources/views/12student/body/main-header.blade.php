<div id="pre-loader">
    <img src="{{ URL::asset('assets/images/pre-loader/loader-01.svg') }}" alt="">
</div>
<!--=================================
 header start-->
<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <!-- logo -->
    <div class="text-left navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{ route('11student.dashboard') }}"><img src="{{ URL::asset('frontend/images/logo2.png') }}" alt=""></a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('11student.dashboard') }}"><img src="{{ URL::asset('frontend/images/logo2.png') }}" alt=""></a>
    </div>
    <!-- Top bar left -->
    <ul class="nav navbar-nav mr-auto">
        <li class="nav-item">
            <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left"
               href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
        </li>
        <li class="nav-item">
            <div class="search">
                <a class="search-btn not_click" href="javascript:void(0);"></a>
                <div class="search-box not-click">
                    <input type="text" class="not-click form-control" placeholder="Search" value=""
                           name="search">
                    <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
                </div>
            </div>
        </li>
    </ul>
    <!-- top bar right -->
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item fullscreen">
            <a id="btnFullscreen" href="#" class="nav-link"><i class="ti-fullscreen"></i></a>
        </li>
        <li class="nav-item dropdown mr-30">
            <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="true" aria-expanded="false">
                <img src="{{ URL::asset('assets/images/user_icon.png') }}" alt="avatar">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="mt-0 mb-0">{{ Auth::guard('12student')->user()->name }}</h5>
                            <span>{{ Auth::guard('12student')->user()->email }}</span>
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('12student.profile') }}"><i class="text-warning ti-user"></i>البيانات الشخصيه</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('12student.change.password') }}"><i class="text-info ti-settings"></i>تغيير كلمه السر</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('12student.logout') }}"><i class="text-info ti-lock"></i>تسجيل الخروج</a>
            </div>
        </li>
    </ul>
</nav>
<!--=================================
header End-->
