<!DOCTYPE html>
<html lang="en">
<head>
    <title> بيانات الجامعه - طالب 12</title>
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

    <!--=================================
preloader -->



    <!--=================================
preloader -->

    @include('12student.body.main-header')
    @include('12student.body.main-sidebar')

    <!--=================================
 Main content -->
    <!-- main-content -->

    <div class="content-wrapper">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="mb-0" style="font-family: 'Cairo', sans-serif;"> بيانات الجامعه</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                        <li class="breadcrumb-item"><a href="{{ route('12student.dashboard') }}" class="default-color">الرئيسيه</a></li>
                        <li class="breadcrumb-item active"> بيانات الجامعه</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-md-12 mb-30">
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

                        <form autocomplete="off" >
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>اسم الجامعه</label>
                                        <input  class="form-control"  value="{{$universty->title}}" type="text" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>البريد الالكترونى للجامعه </label>
                                        <input  class="form-control" value="{{$universty->email}}"  type="email" readonly>
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>نبذه قصيره</label>
                                        <textarea class="form-control" rows="2" readonly>{{$universty->short_desc}}</textarea>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>رقم الهاتف الخاص بالجامعه</label>
                                        <input  class="form-control" value="{{$universty->contact}}" type="number" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>البلد </label>
                                        <input  class="form-control" value="{{$universty->country}}" type="text" readonly>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>نبذه عامه عن الجامعه</label>
                                        <textarea class="form-control" rows="6" readonly>{{$universty->long_desc}}</textarea>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>المدينه</label>
                                        <input  class="form-control" value="{{$universty->city}}" type="text" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>العنوان</label>
                                        <textarea class="form-control" rows="1" readonly>{{$universty->address}}</textarea>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>الموقع الالكترونى للجامعه </label>
                                        <input class="form-control" value="{{$universty->website}}" type="url" readonly>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>الصوره الاولى</label>
                                        <img class="form-control" readonly src="{{ asset($universty->image1) }}" style="width: 100px; height: 100px;">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>الصوره الثانيه </label>
                                        <img class="form-control" readonly src="{{ asset($universty->image2) }}" style="width: 100px; height: 100px;">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>فيس بوك</label>
                                        <input  class="form-control" value="{{$universty->facebook}}" type="text" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>تويتر</label>
                                        <input  class="form-control" value="{{$universty->twitter}}"  type="text" readonly>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>انستجرام</label>
                                        <input  class="form-control" value="{{$universty->instgram}}" type="text" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>يوتيوب</label>
                                        <input  class="form-control" value="{{$universty->youtube}}" type="text" readonly>
                                    </div>
                                </div>
                            </div><br><hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
        <!--=================================
wrapper -->

        <!--=================================
footer -->

        @include('12student.body.footer')

    </div><!-- main content wrapper end-->
</div>
</div>
</div>

<!--=================================
footer -->

@include('12student.body.footer-scripts')

</body>

</html>
