<!DOCTYPE html>
<html lang="en">
<head>
    <title>قائمه الادمن - الادمن</title>
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
                    <h4 class="mb-0" style="font-family: 'Cairo', sans-serif;"> قائمه الادمن</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" class="default-color">الرئيسيه</a></li>
                        <li class="breadcrumb-item active">قائمه الادمن</li>
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
                        <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
                            أضافه ادمن جديد</button><br><br>
                        <div class="table-responsive">
                            <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="10"
                                   style="text-align: center">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الاسم</th>
                                    <th>البريد الالكترونى</th>
                                    <th>رقم الجوال</th>
                                    <th>تاريخ الاضافه</th>
                                    <th>العمليات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; ?>
                                @foreach ($admins as $user)
                                    <tr>
                                            <?php $i++; ?>
                                        <td>{{ $i }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email  }}</td>
                                        <td>{{ $user->contact  }}</td>
                                        <td>{{ Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#delete{{ $user->id }}"
                                                    title="حذف"><i
                                                    class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>

                                    <!-- delete_modal_user -->
                                    <div class="modal fade" id="delete{{ $user->id }}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                        حذف حساب الادمن
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('delete.admin',$user->id) }}" method="post">
                                                        @csrf
                                                        هل انت متأكد من عمليه الحذف ؟
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                               value="{{ $user->id }}">
                                                        <input type="text" class="form-control"
                                                               value="{{ $user->name }}">
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
                                أضافه ادمن جديد
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- add_form -->
                            <form action="{{ route('add.admin') }}"  method="post" autocomplete="off">
                                @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">الاسم</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                    <div class="col">
                                        <label for="title">البريد الالكترونى</label>
                                        <input type="email" name="email" class="form-control" required>
                                    </div>
                                </div> <br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">كلمه السر</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                </div><br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">رقم الجوال</label>
                                        <input type="number" name="contact" class="form-control" required>
                                    </div>
                                </div><br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">العنوان</label>
                                        <textarea class="form-control" rows="3" name="address" required></textarea>
                                    </div>
                                </div><br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">البلد</label>
                                        <input type="text" name="country" class="form-control" required>
                                    </div>
                                    <div class="col">
                                        <label for="title">المدينه</label>
                                        <input type="text" name="city" class="form-control" required>
                                    </div>
                                </div>
                                <br><hr>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">أضافه جديد</button>
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
