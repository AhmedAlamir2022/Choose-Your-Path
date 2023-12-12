<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">لوحه التحكم </li>
                    <li>
                        <a href="{{ route('12student.dashboard') }}">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">لوحه التحكم</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">الرئيسيه </li>
                    <!-- Notes-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Notes">
                            <div class="pull-left"><i class="fa fa-book"></i><span
                                    class="right-nav-text"> ملاحظات </span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Notes" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('mynotes.student12')}}">ارسال ملاحظات</a></li>
                        </ul>
                    </li>
                    <!-- Universites-->
                                        <li>
                                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Universtey">
                                                <div class="pull-left"><i class="fa fa-book"></i><span
                                                        class="right-nav-text">الجامعات والكليات </span></div>
                                                <div class="pull-right"><i class="ti-plus"></i></div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <ul id="Universtey" class="collapse" data-parent="#sidebarnav">
                                                <li><a href="{{route('student12.universties')}}">قائمه الجامعات والكليات</a></li>
                                            </ul>
                                        </li>
                    <!-- Specilization -->
                                        <li>
                                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Specilazation">
                                                <div class="pull-left"><i class="fa fa-building"></i><span
                                                        class="right-nav-text">التخصصات </span></div>
                                                <div class="pull-right"><i class="ti-plus"></i></div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <ul id="Specilazation" class="collapse" data-parent="#sidebarnav">
                                                <li><a href="{{route('student12.specilazation')}}">قائمه التخصصات</a></li>
                                            </ul>
                                        </li>
                    <!-- Hospitals-->
                                        <li>
                                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Hospitals-menu">
                                                <div class="pull-left"><i class="ti-palette"></i></i><span
                                                        class="right-nav-text">البانارات</span></div>
                                                <div class="pull-right"><i class="ti-plus"></i></div>
                                                <div class="clearfix"></div>
                                            </a>
                                            <ul id="Hospitals-menu" class="collapse" data-parent="#sidebarnav">
                                                <li> <a href="{{route('student12.banners')}}">قائمه البانارات</a> </li>
                                            </ul>
                                        </li>
                    <!-- Questions -->
                    {{--                    <li>--}}
                    {{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Rates">--}}
                    {{--                            <div class="pull-left"><i class="fa fa-building"></i><span--}}
                    {{--                                    class="right-nav-text">الاسئله</span></div>--}}
                    {{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
                    {{--                            <div class="clearfix"></div>--}}
                    {{--                        </a>--}}
                    {{--                        <ul id="Rates" class="collapse" data-parent="#sidebarnav">--}}
                    {{--                            <li><a href="{{route('Question.index')}}">قائمه الاسئله</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    <!-- Complaints-->
                    {{--                    <li>--}}
                    {{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Complaints">--}}
                    {{--                            <div class="pull-left"><i class="fa fa-building"></i><span--}}
                    {{--                                    class="right-nav-text">Complaints</span></div>--}}
                    {{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
                    {{--                            <div class="clearfix"></div>--}}
                    {{--                        </a>--}}
                    {{--                        <ul id="Complaints" class="collapse" data-parent="#sidebarnav">--}}
                    {{--                            <li><a href="{{route('Complaints.index')}}">Complaints List</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    <!-- Doucments-->
                    {{--                    <li>--}}
                    {{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Doucments">--}}
                    {{--                            <div class="pull-left"><i class="fa fa-book"></i><span--}}
                    {{--                                    class="right-nav-text">Doucments</span></div>--}}
                    {{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
                    {{--                            <div class="clearfix"></div>--}}
                    {{--                        </a>--}}
                    {{--                        <ul id="Doucments" class="collapse" data-parent="#sidebarnav">--}}
                    {{--                            <li><a href="{{ route('admin.doucments') }}">Patient Doucments</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}

                    <!-- Tests -->
                    {{--                    <li>--}}
                    {{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Tests">--}}
                    {{--                            <div class="pull-left"><i class="fa fa-building"></i><span--}}
                    {{--                                    class="right-nav-text">Tests </span></div>--}}
                    {{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
                    {{--                            <div class="clearfix"></div>--}}
                    {{--                        </a>--}}
                    {{--                        <ul id="Tests" class="collapse" data-parent="#sidebarnav">--}}
                    {{--                            <li><a href="{{ route('admin.tests') }}">Tests List</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    <!-- Requests-->
                    {{--                    <li>--}}
                    {{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Reuests">--}}
                    {{--                            <div class="pull-left"><i class="fa fa-question"></i><span--}}
                    {{--                                    class="right-nav-text">Requests</span></div>--}}
                    {{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
                    {{--                            <div class="clearfix"></div>--}}
                    {{--                        </a>--}}
                    {{--                        <ul id="Reuests" class="collapse" data-parent="#sidebarnav">--}}
                    {{--                            <li><a href="{{ route('admin.requests') }}">Requests List</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}


                    <!-- Reports-->
                    {{--                    <li>--}}
                    {{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Reports">--}}
                    {{--                            <div class="pull-left"><i class="ti-comments"></i></i><span--}}
                    {{--                                    class="right-nav-text">Reports</span></div>--}}
                    {{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
                    {{--                            <div class="clearfix"></div>--}}
                    {{--                        </a>--}}
                    {{--                        <ul id="Reports" class="collapse" data-parent="#sidebarnav">--}}
                    {{--                            <li><a href="{{ route('admin.reports') }}">Reports List</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}

                    <!-- Contacts-->
                    {{--                    <li>--}}
                    {{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Contacts">--}}
                    {{--                            <div class="pull-left"><i class="ti-comments"></i></i><span--}}
                    {{--                                    class="right-nav-text">Contacts</span></div>--}}
                    {{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
                    {{--                            <div class="clearfix"></div>--}}
                    {{--                        </a>--}}
                    {{--                        <ul id="Contacts" class="collapse" data-parent="#sidebarnav">--}}
                    {{--                            <li><a href="{{ route('all.messages') }}">Customers Messages</a></li>--}}
                    {{--                            <li><a href="{{ route('Query.index') }}">Contacts Info</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}

                    <!-- Testimonials-->
                    {{--                    <li>--}}
                    {{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Testimonials">--}}
                    {{--                            <div class="pull-left"><i class="ti-comments"></i></i><span--}}
                    {{--                                    class="right-nav-text">Testimonials</span></div>--}}
                    {{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
                    {{--                            <div class="clearfix"></div>--}}
                    {{--                        </a>--}}
                    {{--                        <ul id="Testimonials" class="collapse" data-parent="#sidebarnav">--}}
                    {{--                            <li><a href="{{ route('all.testimoinals') }}">Testimonials List</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}

                    <!-- Subscribers-->
                    {{--                    <li>--}}
                    {{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Subscribers">--}}
                    {{--                            <div class="pull-left"><i class="ti-comments"></i></i><span--}}
                    {{--                                    class="right-nav-text">Subscribers</span></div>--}}
                    {{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
                    {{--                            <div class="clearfix"></div>--}}
                    {{--                        </a>--}}
                    {{--                        <ul id="Subscribers" class="collapse" data-parent="#sidebarnav">--}}
                    {{--                            <li><a href="{{ route('all.subscriptions') }}">Subscribers List</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}

                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">الاعدادت </li>
                    <!-- Profile-->
                    <li>
                        <a href="{{ route('12student.profile') }}"><i class="ti-user"></i><span class="right-nav-text">البيانات الشخصيه</span></a>
                    </li>
                    <!-- Change Password-->
                    <li>
                        <a href="{{ route('12student.change.password') }}"><i class="ti-settings"></i><span class="right-nav-text">تغيير كلمه السر</span></a>
                    </li>
                    <!-- Logout-->
                    <li>
                        <a class="dropdown-item" href="{{ route('12student.logout') }}" ><i class="text-info ti-lock"></i>تسجيل الخروج</a>
                    </li>
                    <br><hr>
                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
