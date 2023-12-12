<!DOCTYPE html>
<html lang="en">
<head>
    <title>لوحه النحكم - الادمن</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('admin.body.head')
</head>

<body>

<div class="wrapper">

    <!--=================================
preloader -->


    <!--=================================
preloader -->

    @include('admin.body.main-header')

    @include('admin.body.main-sidebar')

    <!--=================================
 Main content -->
    <!-- main-content -->
    <div class="content-wrapper">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="mb-0" style="font-family: cairo;">لوحه التحكم الخاصه بالادمن</h4>
                </div><br>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    </ol>
                </div>
            </div>
        </div><br>
        <!-- widgets -->
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-danger">
                                        <i class="fa fa-university highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">الجامعات والكليات</p>
                                <h4>{{ \App\Models\Universty::count() }}</h4>
                            </div>
                        </div>
                     <a href="{{route('Universtey.index')}}">  <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fa fa-university mr-1" aria-hidden="true"></i> كل الجامعات والكليات
                        </p></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-warning">
                                        <i class="fa fa-book highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">التخصصات</p>
                                <h4>{{ \App\Models\Specialization::count() }}</h4>
                            </div>
                        </div>
                        <a href="{{route('Specialization.index')}}"><p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fa fa-book mr-1" aria-hidden="true"></i> جميع التخصصات
                            </p></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-success">
                                        <i class="fa fa-question highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">الاسئله</p>
                                <h4>{{ \App\Models\Question::count() }}</h4>
                            </div>
                        </div>
                        <a href="{{route('Question.index')}}"><p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fa fa-question mr-1" aria-hidden="true"></i> الاسئله
                            </p></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-primary">
                                        <i class="fa fa-question-circle highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">الاختبارات</p>
                                <h4>{{ \App\Models\Exam::count() }}</h4>
                            </div>
                        </div>
                        <a href="{{route('Exam.index')}}"> <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fa fa-question-circle mr-1" aria-hidden="true"></i> اختبار تحديد المستوى
                            </p></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-primary">
                                        <i class="fa fa-user-plus highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">طلاب 11</p>
                                <h4>{{ \App\Models\Student11::count() }}</h4>
                            </div>
                        </div>
                        <a href="{{ route('all.11_students') }}"> <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fa fa-user-plus mr-1" aria-hidden="true"></i> جميع طلاب 11
                            </p></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-primary">
                                        <i class="fa fa-user-plus highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">طلاب 12</p>
                                <h4>{{ \App\Models\Student12::count() }}</h4>
                            </div>
                        </div>
                        <a href="{{ route('all.12_students') }}"><p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fa fa-user-plus mr-1" aria-hidden="true"></i> جميع طلاب 12
                            </p></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-primary">
                                        <i class="fa fa-comments highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">ملاحظات طلاب 11</p>
                                <h4>{{ \App\Models\Note11::count() }}</h4>
                            </div>
                        </div>
                        <a href="{{route('notes.student11')}}"> <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fa fa-comments mr-1" aria-hidden="true"></i> كل الملاحظات
                            </p></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-primary">
                                        <i class="fa fa-comments highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">ملاحظات طلاب 12</p>
                                <h4>{{ \App\Models\Note12::count() }}</h4>
                            </div>
                        </div>
                        <a href="{{route('notes.student12')}}"> <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fa fa-comments mr-1" aria-hidden="true"></i> كل الملاحظات
                            </p></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="calendar-main mb-30">
            <div class="row">
                <div class="col-lg-12">
                    <div id="calendar"></div>
                    <div class="modal" tabindex="-1" role="dialog" id="event-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add New Event</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body p-20"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success save-event">Create
                                        event</button>
                                    <button type="button" class="btn btn-danger delete-event"
                                            data-dismiss="modal">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================================
wrapper -->

        <!--=================================
footer -->

        @include('admin.body.footer')
    </div><!-- main content wrapper end-->
</div>
</div>
</div>

<!--=================================
footer -->

@include('admin.body.footer-scripts')

</body>

</html>
