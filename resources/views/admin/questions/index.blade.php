<!DOCTYPE html>
<html lang="en">
<head>
    <title>قائمه الاسئله - الادمن</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('admin.body.head')
</head>
<body style="font-family: 'Cairo', sans-serif">
<div class="wrapper">
    @include('admin.body.main-header')
    @include('admin.body.main-sidebar')
    <!-- main-content -->
    <div class="content-wrapper">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="mb-0" style="font-family: 'Cairo', sans-serif;"> قائمه الاسئله</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" class="default-color">الرئيسيه</a></li>
                        <li class="breadcrumb-item active">قائمه الاسئله</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-md-12 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="col-xl-12 mb-30">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
{{--                                    <a href="{{route('Question.create')}}" class="btn btn-success btn-sm" role="button"--}}
{{--                                       aria-pressed="true">اضافة سؤال جديد</a><br><br>--}}
                                    <div class="table-responsive">
                                        <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                               data-page-length="10"
                                               style="text-align: center">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">السؤال</th>
                                                <th scope="col">الاجابات</th>
                                                <th scope="col">الاجابة الصحيحة</th>
                                                <th scope="col">اسم الاختبار</th>
                                                <th scope="col">العمليات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($questions as $question)
                                                <tr>
                                                    <td>{{ $loop->iteration}}</td>
                                                    <td>{{$question->title}}</td>
                                                    <td>{{$question->answers}}</td>
                                                    <td>{{$question->right_answer}}</td>
                                                    <td>{{$question->Exams->name}}</td>
                                                    <td>
                                                        <a href="{{route('Question.edit',$question->id)}}"
                                                           class="btn btn-info btn-sm" role="button" aria-pressed="true"><i
                                                                class="fa fa-edit"></i></a>
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#delete_exam{{ $question->id }}" title="حذف"><i
                                                                class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>

                                            @include('admin.questions.destroy')
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
        <!--================================footer -->
        @include('admin.body.footer')
    </div><!-- main content wrapper end-->
</div>
<!--=================================footer -->
@include('admin.body.footer-scripts')
</body>
</html>
