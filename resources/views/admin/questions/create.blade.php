<!DOCTYPE html>
<html lang="en">
<head>
    <title>اضافه سؤال جديد - الادمن</title>
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
                    <h4 class="mb-0" style="font-family: 'Cairo', sans-serif;"> اضافه سؤال جديد</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" class="default-color">الرئيسيه</a></li>
                        <li class="breadcrumb-item active">اضافه سؤال جديد</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-md-12 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">

                        @if(session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ session()->get('error') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="col-xs-12">
                            <div class="col-md-12">
                                <br>
                                <form action="{{ route('Question.store') }}" method="post" autocomplete="off">
                                    @csrf
                                    <div class="form-row">

                                        <div class="col">
                                            <label for="title">اسم السؤال</label>
                                            <input type="text" name="title" id="input-name"
                                                   class="form-control form-control-alternative" autofocus>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-row">
                                        <div class="col">
                                            <label for="title">الاجابات</label>
                                            <textarea name="answers" class="form-control" id="exampleFormControlTextarea1"
                                                      rows="4"></textarea>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-row">
                                        <div class="col">
                                            <label for="title">الاجابة الصحيحة</label>
                                            <input type="text" name="right_answer" id="input-name"
                                                   class="form-control form-control-alternative" autofocus>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="Grade_id">اسم الاختبار : <span
                                                    class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="exam_id">
                                                <option selected disabled>حدد اسم الاختبار...</option>
                                                @foreach($exams as $exam)
                                                    <option value="{{ $exam->id }}">{{ $exam->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">حفظ البيانات</button>
                                </form>
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
