<!DOCTYPE html>
<html lang="en">
<head>
    <title>قائمه الاختبارات - الادمن</title>
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
                    <h4 class="mb-0" style="font-family: 'Cairo', sans-serif;"> قائمه الاختبارات</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" class="default-color">الرئيسيه</a></li>
                        <li class="breadcrumb-item active">قائمه الاختبارات</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            @if ($errors->any()) <div class="error">{{ $errors->first('Name') }}</div> @endif
            <div class="col-xl-12 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
{{--                        <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">--}}
{{--                            اضافه اختبار جديد</button><br><br>--}}
                        <div class="table-responsive">
                            <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="10"
                                   style="text-align: center">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم الاختبار</th>
                                    <th>تاريخ الاضافه</th>
{{--                                    <th>العمليات</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; ?>
                                @foreach ($exams as $exam)
                                    <tr>
                                            <?php $i++; ?>
                                        <td>{{ $i }}</td>
                                        <td>{{ $exam->name }}</td>
                                        <td>{{ Carbon\Carbon::parse($exam->created_at)->diffForHumans() }}</td>
{{--                                        <td>--}}
{{--                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"--}}
{{--                                                    data-target="#delete{{ $exam->id }}"--}}
{{--                                                    title="Delete"><i--}}
{{--                                                    class="fa fa-trash"></i></button>--}}
{{--                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"--}}
{{--                                                    data-target="#edit{{ $exam->id }}"--}}
{{--                                                    title="Edit"><i class="fa fa-edit"></i></button>--}}

{{--                                            <a href="{{route('Exam.show',$exam->id)}}"--}}
{{--                                               class="btn btn-warning btn-sm" title="عرض الاسئلة" role="button" aria-pressed="true"><i--}}
{{--                                                    class="fa fa-binoculars"></i></a>--}}

{{--                                            <a href="{{route('student.exam',$exam->id)}}" class="btn btn-primary btn-sm" title="عرض الطلاب المختبرين"--}}
{{--                                               role="button" aria-pressed="true"><i class="fa fa-street-view"></i></a>--}}
{{--                                        </td>--}}
                                    </tr>

                                    <!-- delete_modal_specilization -->
                                    <div class="modal fade" id="delete{{ $exam->id }}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                        حذف الاختبار
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('Exam.destroy', 'test') }}" method="post">
                                                        {{ method_field('Delete') }}
                                                        @csrf
                                                        هل انت متأكد من حذف هذا الاختبار ؟
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                               value="{{ $exam->id }}">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">الغاء</button>
                                                            <button type="submit"
                                                                    class="btn btn-danger">حذف</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Edit_modal_specilization -->
                                    <div class="modal fade" id="edit{{ $exam->id }}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                        تعديل فى بيانات الاختبار
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('Exam.update', 'test') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                                                        {{ method_field('patch') }}
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $exam->id }}">
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <label for="title">الاسم</label>
                                                                <input type="text" name="name" value="{{ $exam->name }}" class="form-control" required>
                                                            </div>
                                                        </div><br><hr>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">الغاء</button>
                                                            <button type="submit"
                                                                    class="btn btn-info">تعديل</button>


                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- add_modal_Grade -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                                اضافه اختبار جديد
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- add_form -->
                            <form action="{{route('Exam.store')}}"  method="post" autocomplete="off">
                                @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">الاسم</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                </div> <br>
                                <hr>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">اضافه جديد</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================================footer -->
        @include('admin.body.footer')
    </div><!-- main content wrapper end-->
</div>
<!--=================================footer -->
@include('admin.body.footer-scripts')
</body>
</html>
