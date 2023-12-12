<!DOCTYPE html>
<html lang="en">
<head>
    <title>تعديل بيانات الجامعه - الادمن</title>
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
                    <h4 class="mb-0" style="font-family: 'Cairo', sans-serif;">تعديل بيانات الجامعه</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" class="default-color">الرئيسيه</a></li>
                        <li class="breadcrumb-item active">تعديل بيانات الجامعه</li>
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

                        <form method="post" action="{{route('Universtey.update','test')}}" autocomplete="off" enctype="multipart/form-data">
                            {{ method_field('patch') }}
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>اسم الجامعه</label>
                                        <input  class="form-control" name="title" value="{{$universty->title}}" type="text" required>
                                        <input type="hidden" name="id" value="{{$universty->id}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>البريد الالكترونى للجامعه </label>
                                        <input  class="form-control" name="email" value="{{$universty->email}}"  type="email" required>
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>نبذه قصيره</label>
                                        <textarea class="form-control" name="short_desc" rows="2" required>{{$universty->short_desc}}</textarea>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>رقم الهاتف الخاص بالجامعه</label>
                                        <input  class="form-control" name="contact" value="{{$universty->contact}}" type="number" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>البلد </label>
                                        <input  class="form-control" name="country" value="{{$universty->country}}" type="text" required>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>نبذه عامه عن الجامعه</label>
                                        <textarea class="form-control" name="long_desc" rows="6" required>{{$universty->long_desc}}</textarea>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>المدينه</label>
                                        <input  class="form-control" name="city" value="{{$universty->city}}" type="text" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>العنوان</label>
                                        <textarea class="form-control" name="address" rows="1" required>{{$universty->address}}</textarea>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>الموقع الالكترونى للجامعه </label>
                                        <input class="form-control" name="website" value="{{$universty->website}}" type="url" required>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>الصوره الاولى</label>
                                        <img class="form-control" readonly src="{{ asset($universty->image1) }}" style="width: 100px; height: 100px;">
                                        <input  class="form-control" name="image1" type="file">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>الصوره الثانيه </label>
                                        <img class="form-control" readonly src="{{ asset($universty->image2) }}" style="width: 100px; height: 100px;">
                                        <input  class="form-control" name="image2"  type="file">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>فيس بوك</label>
                                        <input  class="form-control" name="facebook" value="{{$universty->facebook}}" type="text">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>تويتر</label>
                                        <input  class="form-control" name="twitter" value="{{$universty->twitter}}"  type="text">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>انستجرام</label>
                                        <input  class="form-control" name="instgram" value="{{$universty->instgram}}" type="text">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>يوتيوب</label>
                                        <input  class="form-control" name="youtube" value="{{$universty->youtube}}" type="text">
                                    </div>
                                </div>
                            </div><br><hr>
                            <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">تعديل بيانات الجامعه</button>
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
