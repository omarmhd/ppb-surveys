@extends('layouts.app_admin')
@section('title','الرئيسية')
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
    <div class="row gy-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <!--begin::Card widget 2-->
            <div class="card h-lg-100">
                <!--begin::Body-->
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <!--begin::Icon-->
                    <div class="m-0">
                        <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->

                        <i class= "fa fa-user fs-2"></i>

                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Icon-->
                    <!--begin::Section-->
                    <div class="d-flex flex-column my-7">
                        <!--begin::Number-->
                        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{$users_count}}</span>
                        <!--end::Number-->
                        <!--begin::Follower-->
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-400">عدد المستخدمين</span>
                        </div>
                        <!--end::Follower-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Badge-->
                    <span class="">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->

                        <!--end::Svg Icon--></span>
                    <!--end::Badge-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card widget 2-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <!--begin::Card widget 2-->
            <div class="card h-lg-100">
                <!--begin::Body-->
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <!--begin::Icon-->
                    <div class="m-0">
                        <!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
                        <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z" fill="currentColor"></path>
																<path d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="currentColor"></path>
															</svg>
														</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Icon-->
                    <!--begin::Section-->
                    <div class="d-flex flex-column my-7">
                        <!--begin::Number-->
                        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{$currant_count}}</span>
                        <!--end::Number-->
                        <!--begin::Follower-->
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-400">عدد التقيمات المطلوبة</span>
                        </div>
                        <!--end::Follower-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Badge-->
                    <span class="">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
										</span>
                    <!--end::Badge-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card widget 2-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <!--begin::Card widget 2-->
            <div class="card h-lg-100">
                <!--begin::Body-->
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <!--begin::Icon-->
                    <div class="m-0">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs048.svg-->
                        <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
												                          <i class="fas fa-user-tie fs-2"></i>
														</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Icon-->
                    <!--begin::Section-->
                    <div class="d-flex flex-column my-7">
                        <!--begin::Number-->
                        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{$employee_count}}</span>
                        <!--end::Number-->
                        <!--begin::Follower-->
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-400">
                                عدد الموظفين
                            </span>
                        </div>
                        <!--end::Follower-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Badge-->
                    <span class="">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
									</span>
                    <!--end::Badge-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card widget 2-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <!--begin::Card widget 2-->
            <div class="card h-lg-100">
                <!--begin::Body-->
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <!--begin::Icon-->
                    <div class="m-0">
                        <!--begin::Svg Icon | path: icons/duotune/maps/map002.svg-->
                        <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
												                          <i class="fas fa-user-tie fs-2"></i>
														</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Icon-->
                    <!--begin::Section-->
                    <div class="d-flex flex-column my-7">
                        <!--begin::Number-->
                        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{$evaluator_count}}</span>
                        <!--end::Number-->
                        <!--begin::Follower-->
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-400">عدد المقيمين</span>
                        </div>
                        <!--end::Follower-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Badge-->
                    <span class="">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
												</span>
                    <!--end::Badge-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card widget 2-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
            <!--begin::Card widget 2-->
            <div class="card h-lg-100">
                <!--begin::Body-->
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <!--begin::Icon-->
                    <div class="m-0">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs037.svg-->
                        <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M2.10001 10C3.00001 5.6 6.69998 2.3 11.2 2L8.79999 4.39999L11.1 7C9.60001 7.3 8.30001 8.19999 7.60001 9.59999L4.5 12.4L2.10001 10ZM19.3 11.5L16.4 14C15.7 15.5 14.4 16.6 12.7 16.9L15 19.5L12.6 21.9C17.1 21.6 20.8 18.2 21.7 13.9L19.3 11.5Z" fill="currentColor"></path>
																<path d="M13.8 2.09998C18.2 2.99998 21.5 6.69998 21.8 11.2L19.4 8.79997L16.8 11C16.5 9.39998 15.5 8.09998 14 7.39998L11.4 4.39998L13.8 2.09998ZM12.3 19.4L9.69998 16.4C8.29998 15.7 7.3 14.4 7 12.8L4.39999 15.1L2 12.7C2.3 17.2 5.7 20.9 10 21.8L12.3 19.4Z" fill="currentColor"></path>
															</svg>
														</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Icon-->
                    <!--begin::Section-->
                    <div class="d-flex flex-column my-7">
                        <!--begin::Number-->
                        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{$survey_count}}</span>
                        <!--end::Number-->
                        <!--begin::Follower-->
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-400">عدد النماذج</span>
                        </div>
                        <!--end::Follower-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Badge-->
                    <span class="">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
										</span>
                    <!--end::Badge-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card widget 2-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->

        <!--end::Col-->
    </div>
    <!--end::Form Widget 13-->
@endsection
@push('js')

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
