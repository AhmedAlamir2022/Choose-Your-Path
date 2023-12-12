<!DOCTYPE html>
<html lang="en">
<head>
    <title>ملاحظاتى </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('11student.body.head')
</head>
<body style="font-family: 'Cairo', sans-serif">
<div class="wrapper">
    @include('11student.body.main-header')
    @include('11student.body.main-sidebar')
    <!-- main-content -->
    <div class="content-wrapper">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="mb-0" style="font-family: 'Cairo', sans-serif;"> ملاحظاتى</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                        <li class="breadcrumb-item"><a href="{{ route('11student.dashboard') }}" class="default-color">الرئيسيه</a></li>
                        <li class="breadcrumb-item active">ملاحظاتى</li>
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
                            اضافه ملاحظه جديد</button><br><br>
                        <div class="table-responsive">
                            <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="10"
                                   style="text-align: center">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الادمن</th>
                                    <th>الملاحظه</th>
                                    <th>رد الادمن</th>
                                    <th>تاريخ الاضافه</th>
                                    <th>العمليات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; ?>
                                @foreach ($notes as $note)
                                    @if($note->student11_id   == Auth::guard('11student')->user()->id)
                                        <tr>
                                                <?php $i++; ?>
                                            <td>{{ $i }}</td>
                                            <td>{{ $note->Admins->name }}</td>
                                            <td>{{ $note->note }}</td>
                                            <td>{{ $note->admin_replay }}</td>
                                            <td>{{ Carbon\Carbon::parse($note->created_at)->diffForHumans() }}</td>
                                            <td>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                        data-target="#delete{{ $note->id }}"
                                                        title="Delete"><i
                                                        class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>

                                        <!-- delete_modal_specilization -->
                                        <div class="modal fade" id="delete{{ $note->id }}" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                            id="exampleModalLabel">
                                                            حذف الملاحظه
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('delete.note11',$note->id) }}" method="post">
                                                            @csrf
                                                            هل انت متأكد من حذف هذه الملاحظه ؟
                                                            <input id="id" type="hidden" name="id" class="form-control"
                                                                   value="{{ $note->id }}">
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
                                    @endif
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
                                ارسال ملاحظات الى الادمن
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- add_form -->
                            <form action="{{ route('add.note11') }}" method="post" autocomplete="off">
                                @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">الادمن</label>
                                        <select name="admin_id" class="form-control" required>
                                            <option value="">--------اختر---------</option>
                                            @foreach ($admins as $admin)
                                                <option value="{{ $admin->id }}">
                                                    {{ $admin->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> <br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">الملاحظه</label>
                                        <textarea name="note" required class="form-control" rows="5"></textarea>
                                    </div>
                                </div> <br>
                                <hr>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">اضافه </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================================footer -->
        @include('11student.body.footer')
    </div><!-- main content wrapper end-->
</div>
<!--=================================footer -->
@include('11student.body.footer-scripts')
</body>
</html>
