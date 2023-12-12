<!DOCTYPE html>
<html>
<head>
    <title>قائمه الجامعات والكليات - طالب 12</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('12student.body.head')
</head>
<body style="font-family: 'Cairo', sans-serif">
<div class="wrapper">
    @include('12student.body.main-header')
    @include('12student.body.main-sidebar')
    <!-- main-content -->
    <div class="content-wrapper">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="mb-0" style="font-family: 'Cairo', sans-serif;"> قائمه الجامعات والكليات</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                        <li class="breadcrumb-item"><a href="{{ route('12student.dashboard') }}" class="default-color">الرئيسيه</a></li>
                        <li class="breadcrumb-item active">قائمه الجامعات والكليات</li>
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

                        <div class="table-responsive">
                            <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="10"
                                   style="text-align: center">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الصوره</th>
                                    <th>اسم الجامعه</th>
                                    <th>رقم الهاتف</th>
                                    <th>تاريخ الاضافه</th>
                                    <th>العمليات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; ?>
                                @foreach ($universties as $universty)
                                    <tr>
                                            <?php $i++; ?>
                                        <td>{{ $i }}</td>
                                        <td><img src="{{ asset($universty->image1) }}" style="width: 60px; height: 50px;"></td>
                                        <td><a href="{{route('universty.specialization',$universty->id)}}" title="اظهار التخصصات" style="color: dodgerblue;">{{ $universty->title }}</a></td>
                                        <td>{{ $universty->contact }}</td>
                                        <td>{{ Carbon\Carbon::parse($universty->created_at)->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{route('universty.details',$universty->id)}}" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i class="fa fa-book"></i></a>


                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================================footer -->
        @include('12student.body.footer')
    </div><!-- main content wrapper end-->
</div>
<!--=================================footer -->
@include('12student.body.footer-scripts')
</body>
</html>
