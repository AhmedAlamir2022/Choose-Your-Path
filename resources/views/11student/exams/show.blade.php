<!DOCTYPE html>
<html lang="en">
<head>
    <title>قائمه الاختبارات  </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('11student.body.head')

</head>
<body style="font-family: 'Cairo', sans-serif">
<div class="wrapper">
    @include('11student.body.main-header')
    @include('11student.body.main-sidebar')
    <!-- main-content -->
    <div class="content-wrapper">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="mb-0" style="font-family: 'Cairo', sans-serif;"> قائمه الاختبارات</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                        <li class="breadcrumb-item"><a href="{{ route('11student.dashboard') }}" class="default-color">الرئيسيه</a></li>
                        <li class="breadcrumb-item active">قائمه الاختبارات</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-30">
                @livewire('show-question', ['exam_id' => $exam_id, 'student_id' => $student_id])
            </div>
        </div>
        <!--================================footer -->
        @include('11student.body.footer')
    </div><!-- main content wrapper end-->
</div>
<!--=================================footer -->
@include('11student.body.footer-scripts')

</body>
</html>
