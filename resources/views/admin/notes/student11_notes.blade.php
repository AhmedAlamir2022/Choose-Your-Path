<!DOCTYPE html>
<html lang="en">
<head>
    <title>ملاحظات طلاب 11 - الادمن </title>
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
                    <h4 class="mb-0" style="font-family: 'Cairo', sans-serif;"> ملاحظات طلاب 11</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" class="default-color">الرئيسيه</a></li>
                        <li class="breadcrumb-item active">ملاحظات طلاب 11</li>
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
                                    <th>الطالب</th>
                                    <th>الملاحظه</th>
                                    <th>رد الادمن</th>
                                    <th>تاريخ الاضافه</th>
                                    <th>العمليات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; ?>
                                @foreach ($notes as $note)
                                    @if($note->admin_id   == Auth::guard('admin')->user()->id)
                                        <tr>
                                                <?php $i++; ?>
                                            <td>{{ $i }}</td>
                                            <td>{{ $note->Student11->name }}</td>
                                            <td>{{ $note->note }}</td>
                                            <td>{{ $note->admin_replay }}</td>
                                            <td>{{ Carbon\Carbon::parse($note->created_at)->diffForHumans() }}</td>
                                            <td>

                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                        data-target="#edit{{ $note->id }}"
                                                        title="Edit"><i class="fa fa-edit"></i></button>
                                            </td>
                                        </tr>
                                        <!-- Edit_modal_user -->
                                        <div class="modal fade" id="edit{{ $note->id }}" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                            id="exampleModalLabel">
                                                            الرد على ملاحظات الطالب
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('edit.note11',$note->id) }}" method="post" autocomplete="off">
                                                            @csrf
                                                            <div class="form-row">
                                                                <div class="col">
                                                                    <label for="title">الطالب 11</label>
                                                                    <input class="form-control form-control-lg" value="{{ $note->Student11->name }}" readonly>
                                                                    <input id="id" type="hidden" name="id" class="form-control" value="{{ $note->id }}">
                                                                </div>
                                                            </div> <br>
                                                            <div class="form-row">
                                                                <div class="col">
                                                                    <label for="title">ملاحظه الطالب</label>
                                                                    <textarea class="form-control" readonly rows="5">{{ $note->note }}</textarea>
                                                                </div>
                                                            </div> <br>
                                                            <div class="form-row">
                                                                <div class="col">
                                                                    <label for="title">الملاحظه</label>
                                                                    <textarea name="admin_replay" required class="form-control" rows="5">{{ $note->admin_replay }}</textarea>
                                                                </div>
                                                            </div> <br>
                                                            <hr>
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
                                @endif
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
