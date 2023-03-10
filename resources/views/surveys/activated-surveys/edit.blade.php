@extends('layouts.app_admin')
@section('title','  تعديل بيانات نموذج موظف  ')
@section('toolbar.title','لوحة التحكم')
@section('breadcrumb')
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-400 w-5px h-2px"></span>
    </li>

    <li class="breadcrumb-item text-muted">@yield('title')</li>
@endsection

@section('content')
    <!--begin::Form Widget 13-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body py-1">
            <!--begin:Form-->
            <!--begin::Heading-->
            <div class="mb-13 mt-5 text-start">
                <!--begin::Title-->
                <h1 class="mb-3">@yield('title') : {{$activated_survey->employee->full_name}}</h1>
                <!--end::Title-->
                <!--begin::Description-->
                <div class="text-gray-400 fw-bold fs-5">
{{--                    <a href="{{route('activated-surveys.index')}}" class="fw-bolder link-primary">جميع المستخدمين</a>.--}}
                </div>
                <!--end::Description-->
            </div>
            <form id="form1" class="form" method="post" action="javascript:void(0)">

            @method("put")
            @csrf
            <!--begin::Input group-->
                <div class="row g-9 mb-8">




                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required"> الاستبيان</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title=""></i>
                        </label>
                        <!--end::Label-->
                        <select  name="survey_id" class="js-example-matcher-start  js-states form-control  form-control-solid" id="select2-data-1-r80d"  data-select2-id="select2-data-1-r80d" tabindex="-1" aria-hidden="true">

                            @foreach($surveys as $survey)
                                <option {{$activated_survey->id==$survey->id?"selected":""}} value="{{$survey->id}}">{{$survey->title}}</option>
                            @endforeach
                        </select>
                    </div>











                    <div id="kt_repeater_1">

                        <div class="">
                            <div class="row mb-2">
                                {{--                        <label class="col-lg-2 col-form-label text-right"> تفاصيل السؤال   <span class="number"></span> :</label>--}}
                                <div data-repeater-list="" class="col-lg-10">
                                    <div data-repeater-item="" class="form-group row align-items-center">

                                        <div class="col-md-4">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required"> المقيم </span>
{{--                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"--}}
{{--                                                   title=""></i>--}}
                                            </label>

                                            {{--                                    <label>السؤال:</label>--}}

                                            <select class="form-control   form-control-solid"  id="select-eva" name="evaluator_id">

                                                @foreach($users as $user)
                                                    <option {{$activated_survey->evaluator_id==$user->id?"selected":""}}  value="{{$user->id}}">{{$user->full_name}}</option>
                                                @endforeach
                                            </select>                                            <div class="d-md-none mb-2"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required"> الموظف </span>
                                                {{--                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"--}}
                                                {{--                                                   title=""></i>--}}
                                            </label>

                                            <select class="form-control    form-control-solid"  id="select-emp" name="employee_id">

                                                @foreach($users as $user)
                                                    <option {{$activated_survey->employee_id==$user->id?"selected":""}}  value="{{$user->id}}">{{$user->full_name}}</option>
                                                @endforeach

                                            </select>



                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>


                    <hr>
                    <h5 class="mb-4">إعدادت أخرى :</h5>
                    <div class="clearfix visible-sm"></div>
                    <div class="col-md-4">

                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">حالة الظهور </span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title=""></i>
                        </label>
                        <select class="form-control form-control-solid"  name="status_show" >

                                 <option {{$activated_survey->status_show=="private"?"selected":''}} value="private">خاص</option>
                                 <option {{$activated_survey->status_show=="published"?"selected":''}} value="published">مرفوع</option>

                        </select>
                    </div>
                    <div class="col-md-4">

                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">حالة النموذج</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title=""></i>
                        </label>
                        <select class="form-control form-control-solid"  name="is_open" >

                            <option  {{$activated_survey->is_open==0?"selected":''}} value="0">مغلق</option>
                            <option  {{$activated_survey->is_open==1?"selected":''}} value="1">مفتوح</option>

                        </select>
                    </div>



                </div>



                <div class="text-center mt-20 ms-20 mb-20">
                    <button type="submit" id="user_submit" class="btn btn-primary">
                        <span class="indicator-label"><i class="fa fa-save"></i> حفظ </span>
                        <span class="indicator-progress">الرجاء الإنتظار...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <a href="{{route('activated-surveys.index')}}" class="btn btn-secondary"> <i class="fa fa-"></i>عودة</a>
                    <button type="reset" id="user_cancel" class="btn btn-white me-3">إلغاء</button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end:Form-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Form Widget 13-->

@endsection
@push('js')

    <script src="{{asset('assets/js/select2.min.js')}}"></script>


    @include("parts.sweetCreate", ['route' => route('activated-surveys.update',['activated_survey'=>$activated_survey]),'method'=>'put'])

@endpush

{{--@push('js')--}}
{{--    <script>--}}
{{--        let user_submit = document.getElementById("user_submit");--}}
{{--        let user_cancel = document.getElementById("user_cancel");--}}
{{--        let user_form = document.getElementById('user_form');--}}
{{--        let user_iframe = document.getElementById('user_iframe');--}}
{{--        user_iframe.onload = function () {--}}
{{--            const iframeDocument = user_iframe.contentWindow.document;--}}
{{--            if (iframeDocument.getElementById('type') != null) {--}}
{{--                if (iframeDocument.getElementById('type').value == "success") {--}}
{{--                    toastr.success(iframeDocument.getElementById('massage').innerText)--}}
{{--                } else {--}}
{{--                    toastr.error(iframeDocument.getElementById('massage').innerText)--}}
{{--                }--}}
{{--            } else {--}}
{{--                toastr.error((iframeDocument.querySelector('.solution-title') != null) ? iframeDocument.querySelector('.solution-title').innerText : (iframeDocument.querySelector('.ui-exception-class > span:last-child') != null) ? iframeDocument.querySelector('.ui-exception-class > span:last-child').innerText : "لا توجد إستجابة من السيرفر", 'حصل خطأ في السيرفر');--}}
{{--            }--}}
{{--        };--}}
{{--        user_iframe.src = '{{route('User.store')}}';--}}
{{--        window.frames[0].stop();--}}
{{--        var validate = FormValidation.formValidation(user_form, {--}}
{{--            fields: {--}}
{{--                id_number: {--}}
{{--                    validators: {--}}
{{--                        notEmpty: {message: "يجب تعبئة حقل رقم الهوية"},--}}
{{--                        regexp: {--}}
{{--                            regexp: /[0-9]{9}/i,--}}
{{--                            message: "يجب ان يتم تعبئة رقم الهوية بشكل صحيح"--}}
{{--                        },--}}
{{--                    }--}}
{{--                },--}}
{{--                name: {--}}
{{--                    validators: {--}}
{{--                        notEmpty: {message: "قم بإدخال الإسم مستخدم "},--}}
{{--                        regexp: {--}}
{{--                            regexp: /^[A-Za-zء-ي]+ [A-Za-zء-ي]+ [A-Za-zء-ي]+ [A-Za-zء-ي]+/i,--}}
{{--                            message: "يجب ان تحتوي التسمية على الإسم الرباعي"--}}
{{--                        },--}}
{{--                    }--}}
{{--                },--}}
{{--                id_job: {--}}
{{--                    validators: {--}}
{{--                        regexp: {--}}
{{--                            regexp: /[0-9]+/i,--}}
{{--                            message: "يجب أن يحتوي الرقم الوظيفي على أرقام"--}}
{{--                        },--}}
{{--                    }--}}
{{--                },--}}
{{--                name_job: {--}}
{{--                    validators: {--}}
{{--                        notEmpty: {message: "يجب تعبئة حقل المسمى الوظيفي"},--}}
{{--                        regexp: {--}}
{{--                            regexp: /^[A-Za-zء-ي]+/i,--}}
{{--                            message: "يجب ان تحتوي التسمية على حروف"--}}
{{--                        },--}}
{{--                    }--}}
{{--                },--}}
{{--                email: {--}}
{{--                    validators: {--}}
{{--                        notEmpty: {message: "يجب تعبئة حقل البريد الإلكتروني"},--}}
{{--                        emailAddress: {--}}
{{--                            message: 'تأكد من كتابة البريد بشكل صحيح'--}}
{{--                        }--}}
{{--                    }--}}
{{--                },--}}
{{--                mobile: {--}}
{{--                    validators: {--}}
{{--                        notEmpty: {message: "يجب تعبئة حقل الرقم الجوال"},--}}
{{--                        regexp: {--}}
{{--                            regexp: /[0-9]{3}-[0-9]{2}-[0-9]{7}/i,--}}
{{--                            message: "يجب ان يكن تنسيق الرقم على هذا النحو *******-**-***"--}}
{{--                        },--}}
{{--                    }--}}
{{--                },--}}
{{--                password: {--}}
{{--                    validators: {--}}
{{--                        notEmpty: {message: "يجب تعبئة حقل كلمة السر"},--}}
{{--                        stringLength: {--}}
{{--                            min: 8,--}}
{{--                            message: 'يجب ان يحتوي كلمة السر 8 حرف كحد أقل'--}}
{{--                        },--}}
{{--                        regexp: {--}}
{{--                            regexp: /[A-Z0-9]+/i,--}}
{{--                            message: "يجب ان تحتوي كلمة السر على حروف إنجليزية وأرقام"--}}
{{--                        },--}}
{{--                    }--}}
{{--                },--}}

{{--            },--}}
{{--            plugins: {--}}
{{--                trigger: new FormValidation.plugins.Trigger,--}}
{{--                bootstrap: new FormValidation.plugins.Bootstrap5({--}}
{{--                    rowSelector: ".fv-row",--}}
{{--                    eleInvalidClass: "",--}}
{{--                    eleValidClass: ""--}}
{{--                }),--}}
{{--            }--}}
{{--        });--}}
{{--        user_submit.addEventListener("click", function (t) {--}}
{{--            t.preventDefault();--}}
{{--            validate.validate().then(function (e) {--}}
{{--                "Valid" === e ? (user_submit.setAttribute("data-kt-indicator", "on"), user_submit.disabled = true, user_form.submit(), user_form.reset(), setTimeout(function () {--}}
{{--                    user_submit.removeAttribute("data-kt-indicator"),--}}
{{--                        user_submit.disabled = false;--}}
{{--                    const iframeDocument = user_iframe.contentWindow.document;--}}
{{--                    toastr.success("تم إرسال الطلب وجاري معالجته في السيرفر")--}}
{{--                }, time_interval)) : Swal.fire({--}}
{{--                    text: "نأسف تأكد من صحة بعض المدخلات",--}}
{{--                    icon: "error",--}}
{{--                    buttonsStyling: !1,--}}
{{--                    confirmButtonText: "حسنا",--}}
{{--                    customClass: {confirmButton: "btn btn-primary"}--}}
{{--                });--}}
{{--            })--}}
{{--        });--}}
{{--        $('#id_number').on('keyup', function (e) {--}}
{{--            var id = $(this).val();--}}
{{--            if (id.toString().length == 9) {--}}
{{--                var url = "{{route('utilization.order.search.id',['id'=>':id'])}}"--}}
{{--                url = url.replace(':id', id);--}}
{{--                $.ajax({--}}
{{--                    type: 'get',--}}
{{--                    url: url,--}}
{{--                    data: {},--}}
{{--                    cache: false,--}}
{{--                    success: (data) => {--}}
{{--                       JSON.parse(data).forEach((e => {--}}
{{--                           $('#name').val(e.FNAME_ARB + ' '+ e.SNAME_ARB+ ' '+ e.TNAME_ARB+ ' '+ e.LNAME_ARB);--}}
{{--                       }));--}}
{{--                    },--}}
{{--                })--}}
{{--            }--}}
{{--            if (id == "") {--}}
{{--                $('#user_form').trigger("reset");--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}
{{--@endpush--}}
