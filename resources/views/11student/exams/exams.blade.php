<!DOCTYPE html>
<html lang="en">
<head>
    <title>قائمه الاختبارات  </title>
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
                    <h4 class="mb-0" style="font-family: 'Cairo', sans-serif;"> قائمه الاختبارات</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                        <li class="breadcrumb-item"><a href="{{ route('11student.dashboard') }}" class="default-color">الرئيسيه</a></li>
                        <li class="breadcrumb-item active">قائمه الاختبارات</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <p >
                            <h4 style="font-family: 'Cairo', sans-serif">كيف اختار تخصصي” علمي أو أدبي “</h4>
                            علمي أو ادبي؟ هذا السؤال حير طلاب  المرحلة الثانوية حيث ينبغي  عليهم أخذ القرار المناسب  في أي قسم دراسي سوف يختارونه،  وأكثر الطلبة لا يقدرون على أخذ القرار المناسب والصحيح بسبب حيرته بين  إجادته لمواد معينة مع رغباته في الدراسة الجامعية

                            وقد تجد أن أغلب الأشخاص  يحاولون إقناعك بالإلتحاق بالقسم العلمي لأنهم يروا أن الأدبي أقل من العلمي فعليك عدم الإستماع لهم لكي لا تتخذ قرار خاطئ فسوف نساعدك لكي تتخذ القرار الصحيح.

                            <h5 style="font-family: 'Cairo', sans-serif">أولاً: قدراتك العقلية</h5>

                            يجب عليك إختيار ما يتوافق مع قدراتك العقلية، لكي لا تتعرض للفشل والإحباط الذي سوف ينتج عن إلتحاقك بكلية لا تتناسب مع قدراتك ويصعب عليك دراستها ويمكنك أن ترى درجاتك في المواد العلمية والأدبية لكي تجعلها مقياساً لتحديد قدراتك العقلية، ومعرفة مستواك في كل مادة،  لكي تساعدك في إختيار القسم المناسب لك والذي يتوافق مع قدراتك .

                            <h5 style="font-family: 'Cairo', sans-serif">ثانيا: ميولك المهنية</h5>

                            يجب أن تفكر أيضاً ما الذي تريد أن تفعله بعد التخرج من الجامعة لكي تتخذ قرار صحيح يتناسب مع ميولك المهنية، لكي  لا تواجه مشاكل فيما بعد بسبب إلتحاقك بوظيفة  لا تشبع حاجاتك الشخصية والإجتماعية ولا تستمتع بالعمل بها ولكي تتمكن من إتخاذ القرار الصحيح، يجب أن تتعرف على مجالات العمل المتاحة لكل كلية.

                            <h5 style="font-family: 'Cairo', sans-serif">ثالثا: استشر أساتذتك</h5>

                            اطلب النصيحة من المدرسين وذلك لأنهم على دراية بمستواك الدراسي، لذلك  يُمكنهم  تحديد القسم الأنسب لك ولكن يجب أن لا تسمع لمدرس واحد فحسب ، بل عليك أن تتعرف على آراء أكبر عدد منهم، خاصة مدرسي المواد العلمية والأدبية.



                        <h5 style="font-family: 'Cairo', sans-serif">رابعا :جدول المواد العلمية والأدبية</h5>

                            قم بعمل  جدول وقم بتقسيمه إلى خانتين خانة  للقسم العلمي والأدبي، وخانة للمواد التي تحبها، وبعد ذلك انظر  للمواد التي تحبها أكثر هل العلمية أم الأدبية  فإذا  تساوت الخانتين  فقم بإختيار أكثر مادة  يمكنك  أن تبدع فيها، وترى أنها ملائمة لرغباتك وطموحاتك وقدراتك.
                        <h5 style="font-family: 'Cairo', sans-serif">التقييم</h5>

                        اذا كانت الدرجه اقل من 150 اذا ميولك هو ادبى واذا كانت الدرجه اكثر من 150 اذا ميولك علمى.
                        <hr><h6 style="font-family: 'Cairo', sans-serif; color: red;">برجاء عدم إعادة تحميل الصفحة بعد دخول الاختبار - في حال تم تنفيذ ذلك سيتم الغاء الاختبار بشكل اوتوماتيك</h6>



                        <hr>
                        </p>
                    </div>
                </div>
            </div>
            <p ></p>
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
                            <hr><h5 style="font-family: 'Cairo', sans-serif; text-align: center;" >الدخول الى الاختبار</h5><hr>
                        <div class="table-responsive">
                            <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="10"
                                   style="text-align: center">
                                <thead>
                                <tr>
                                    <th>اسم الاختبار</th>
                                    <th>الدخول / درجه الاختبار</th>
                                    <th>الميول</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; ?>
                                @foreach ($exams as $exam)
                                    <tr>
                                            <?php $i++; ?>

                                        <td>{{ $exam->name }}</td>
                                        <td>
                                            @if($exam->degree->count() > 0 && $exam->id == $exam->degree[0]->exam_id)
                                                 حصلت على {{$exam->degree[0]->score}} من 300 درجه
                                            @else
                                                <a href="{{route('student.exam',$exam->id)}}"
                                                   class="btn btn-outline-success btn-sm" role="button"
                                                   aria-pressed="true" onclick="alertAbuse()" title="اجراء الاختبار">
                                                    الدخول الى الاختبار</a>
                                            @endif
                                        </td>
                                        <td>
                                            @if($exam->degree->count() > 0 )
                                                @if($exam->degree[0]->score > 150 )
                                                    علمى
                                                @else
                                            ادبى
                                                @endif
                                            @else
                                                لم يتم اجراء الاختبار بعد
                                            @endif
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
        @include('11student.body.footer')
    </div><!-- main content wrapper end-->
</div>
<!--=================================footer -->
@include('11student.body.footer-scripts')

</body>
</html>
