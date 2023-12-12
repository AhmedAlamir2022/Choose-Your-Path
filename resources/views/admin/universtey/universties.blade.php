<!DOCTYPE html>
<html>
<head>
    <title>قائمه الجامعات والكليات - الادمن</title>
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
                    <h4 class="mb-0" style="font-family: 'Cairo', sans-serif;"> قائمه الجامعات والكليات</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" class="default-color">الرئيسيه</a></li>
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
                        <a href="{{ route('Universtey.create') }}"><button type="button" class="button x-small">
                                أضافه جديد</button></a><br><br>
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
                                        <td>{{ $universty->title }}</td>
                                        <td>{{ $universty->contact }}</td>
                                        <td>{{ Carbon\Carbon::parse($universty->created_at)->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{route('Universtey.edit',$universty->id)}}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                            {{-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#delete{{ $universty->id }}"
                                                    title="Delete"><i
                                                    class="fa fa-trash"></i></button> --}}

                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#delete{{ $universty->id }}"
                                                    title="حذف"><i
                                                    class="fa fa-trash"></i></button>

                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                    data-target="#view{{ $universty->id }}"
                                                    title="View"><i
                                                    class="fa fa-book"></i></button>
                                        </td>
                                    </tr>

                                    <!-- delete_modal_hospital -->
                                    <div class="modal fade" id="delete{{ $universty->id }}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                        حذف الجامعه
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('delete.universty',$universty->id) }}" method="post">
                                                        @csrf
                                                        هل انت متأكد من عمليه الحذف ؟
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                               value="{{ $universty->id }}"><br>
                                                        <input id="id" type="text" name="id" class="form-control"
                                                               value="{{ $universty->title }}">
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
                                    <!-- View_modal_hospital -->
                                    <div class="modal fade" id="view{{ $universty->id }}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                        تفاصيل الجامعه
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <label>اسم الجامعه</label>
                                                                <input type="text" value="{{ $universty->title }}" class="form-control" readonly>
                                                            </div>
                                                            <div class="col">
                                                                <label>البريد الالكترونى </label>
                                                                <input type="email" value="{{ $universty->email }}" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <label for="title">نبذه ضغيره</label>
                                                                <textarea class="form-control" rows="2" readonly>{{ $universty->short_desc }}</textarea>
                                                            </div>
                                                        </div><br>
                                                        <div class="form-row">
                                                            <div class="form-group col">
                                                                <label for="inputState">رقم الهاتف</label>
                                                                <input type="text" value="{{ $universty->contact }}" class="form-control" readonly>
                                                            </div>
                                                            <div class="form-group col">
                                                                <label for="inputState">البلد</label>
                                                                <input type="text" value="{{ $universty->country }}" class="form-control" readonly>
                                                            </div>
                                                        </div><br>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <label for="title">نبذه عامه</label>
                                                                <textarea class="form-control" rows="6" readonly>{{ $universty->long_desc }}</textarea>
                                                            </div>
                                                        </div><br>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <label for="title">الموقع الالكترونى للجامعه</label>
                                                                <input type="text" value="{{ $universty->website }}" class="form-control" readonly>
                                                            </div>
                                                        </div><br>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <label for="title">العنوان</label>
                                                                <textarea class="form-control" rows="1" readonly>{{ $universty->address }}</textarea>
                                                            </div>
                                                            <div class="col">
                                                                <label for="title">المدينه</label>
                                                                <input type="text" value="{{ $universty->city }}" class="form-control" readonly>
                                                            </div>
                                                        </div><br>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <label for="title">الصوره الاولى</label>
                                                                <img class="form-control" readonly src="{{ asset($universty->image1) }}" style="width: 100px; height: 100px;">
                                                            </div>
                                                            <div class="col">
                                                                <label for="title">الصوره الثانيه</label>
                                                                <img class="form-control" readonly src="{{ asset($universty->image2) }}" style="width: 100px; height: 100px;">
                                                            </div>
                                                        </div><br>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <label for="title">فيس بوك</label>
                                                                <input type="text" value="{{ $universty->facebook }}" class="form-control" readonly>
                                                            </div>
                                                            <div class="col">
                                                                <label for="title">تويتر</label>
                                                                <input type="text" value="{{ $universty->instgram }}" class="form-control" readonly>
                                                            </div>
                                                        </div><br>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <label for="title">انستجرام</label>
                                                                <input type="text" value="{{ $universty->twitter }}" class="form-control" readonly>
                                                            </div>
                                                            <div class="col">
                                                                <label for="title">يوتيوب</label>
                                                                <input type="text" value="{{ $universty->youtube }}" class="form-control" readonly>
                                                            </div>
                                                        </div><br>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <label for="title">تاريخ الاضافه</label>
                                                                <input type="text" value="{{ $universty->created_at }}" class="form-control" readonly>
                                                            </div>
                                                        </div><br>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">الغاء</button>
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
        </div>
        <!--================================footer -->
        @include('admin.body.footer')
    </div><!-- main content wrapper end-->
</div>
<!--=================================footer -->
@include('admin.body.footer-scripts')
</body>
</html>
