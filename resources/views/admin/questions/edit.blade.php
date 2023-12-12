<!DOCTYPE html>
<html lang="en">
<head>
    <title>تعديل بيانات السؤال - الادمن</title>
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
                    <h4 class="mb-0" style="font-family: 'Cairo', sans-serif;"> تعديل بيانات السؤال</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" class="default-color">الرئيسيه</a></li>
                        <li class="breadcrumb-item active">تعديل بيانات السؤال</li>
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
                                <form action="{{ route('Question.update','test') }}" method="post" autocomplete="off">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-row">

                                        <div class="col">
                                            <label for="title">اسم السؤال</label>
                                            <input type="text" name="title" id="input-name"
                                                   class="form-control form-control-alternative" value="{{$question->title}}">
                                            <input type="hidden" name="id" value="{{$question->id}}">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-row">
                                        <div class="col">
                                            <label for="title">الاجابات</label>
                                            <textarea name="answers" class="form-control" id="exampleFormControlTextarea1" rows="4">{{$question->answers}}</textarea>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-row">
                                        <div class="col">
                                            <label for="title">الاجابة الصحيحة</label>
                                            <input type="text" name="right_answer" id="input-name" class="form-control form-control-alternative" value="{{$question->right_answer}}">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="Grade_id">اسم الاختبار : <span
                                                        class="text-danger">*</span></label>
                                                <select class="custom-select mr-sm-2" name="exam_id">
                                                    <option selected disabled>حدد اسم الاختبار...</option>
                                                    @foreach($exams as $exam)
                                                        <option value="{{ $exam->id }}" {{$exam->id == $question->exam_id ? 'selected':'' }} >{{ $exam->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
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
