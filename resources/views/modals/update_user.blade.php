<div class="modal fade" id="modal_update_user" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div id="close_standers" class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon |-->
                    <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg"
                                                             width="24px"
                                                             height="24px" viewBox="0 0 24 24" version="1.1">
															<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                                               fill="#000000">
																<rect fill="#000000" x="0" y="7" width="16" height="2"
                                                                      rx="1"/>
																<rect fill="#000000" opacity="0.5"
                                                                      transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                                      x="0" y="7" width="16" height="2" rx="1"/>
															</g>
														</svg>
													</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="mb-13 mt-5  text-center">
                    <!--begin::Title-->
                    <h1 class="mb-3">المستخدمين</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-gray-400 fw-bold fs-5">وزارة الأشغال العامة والإسكان
                        <a href="javascript:void(0)" class="fw-bolder link-primary">بيانات المستخدم</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <iframe id="update_iframe" name="update_iframe" src=""
                        class="invisible d-none visually-hidden"></iframe>
                <!--begin:Form-->
                <form id="update_form" class="form" action="{{route('user.update')}}" method="POST"
                      target="update_iframe">
                    @csrf
                    <input id="update_id" name="id" type="hidden"/>
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">رقم الهوية</span>
                            </label>
                            <!--end::Label-->
                            <input id="update_id_number" type="text" class="form-control form-control-solid"
                                   placeholder="رقم الهوية"
                                   name="id_number"/>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">اسم المستخدم</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                   title="يجب أن يحتوي الإسم المستخدم على الإسم الرباعي"></i>
                            </label>
                            <!--end::Label-->
                            <input id="update_name" type="text" class="form-control form-control-solid"
                                   placeholder="اسم المستخدم"
                                   name="name"/>
                        </div>
                        <!--end::Col-->

                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span>رقم الوظيفي</span>
                            </label>
                            <!--end::Label-->
                            <input id="update_id_job" type="text" class="form-control form-control-solid"
                                   placeholder="رقم الوظيفي"
                                   name="id_job"/>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">المسمى الوظيفي</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                   title="يجب أن يحتوي المسمى الوظيفي على الوظيفة التي يشغلها الموظف"></i>
                            </label>
                            <!--end::Label-->
                            <input id="update_name_job" type="text" class="form-control form-control-solid"
                                   placeholder="المسمى الوظيفي"
                                   name="name_job"/>
                        </div>
                        <!--end::Col-->

                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">البريد الإلكتروني</span>
                            </label>
                            <!--end::Label-->
                            <input id="update_email" type="text" class="form-control form-control-solid"
                                   placeholder="البريد الإلكتروني"
                                   name="email"/>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">رقم الجوال</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                   title="يجب ان يحتوي رقم الجوال على المقدمة 970"></i>
                            </label>
                            <!--end::Label-->
                            <input id="update_mobile" type="text" class="form-control form-control-solid"
                                   placeholder="رقم الجوال"
                                   name="mobile"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="submit" id="update_submit" class="btn btn-primary">
                            <span class="indicator-label">تحديث</span>
                            <span class="indicator-progress">الرجاء الإنتظار...
															<span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <button type="reset" id="update_cancel" class="btn btn-white me-3">إلغاء</button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->

            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->
@push('js')
    <script>
        let modal_update_user = document.getElementById('modal_update_user');
        let code_project = document.getElementById('code_project');
        let update_form = document.getElementById('update_form');
        let update_submit = document.getElementById("update_submit");
        let update_cancel = document.getElementById("update_cancel");
        let update_iframe = document.getElementById('update_iframe');
        update_iframe.onload = function () {
            const iframeDocument = update_iframe.contentWindow.document;
            if (iframeDocument.getElementById('type') != null) {
                if (iframeDocument.getElementById('type').value == "success") {
                    toastr.success(iframeDocument.getElementById('massage').innerText)
                } else {
                    toastr.error(iframeDocument.getElementById('massage').innerText)
                }
            } else {
                toastr.error((iframeDocument.querySelector('.solution-title') != null) ? iframeDocument.querySelector('.solution-title').innerText : (iframeDocument.querySelector('.ui-exception-class > span:last-child') != null) ? iframeDocument.querySelector('.ui-exception-class > span:last-child').innerText : "لا توجد إستجابة من السيرفر", 'حصل خطأ في السيرفر');
            }
        };
        var validate = FormValidation.formValidation(update_form, {
            fields: {
                id_number: {
                    validators: {
                        notEmpty: {message: "يجب تعبئة حقل رقم الهوية"},
                        regexp: {
                            regexp: /[0-9]{9}/i,
                            message: "يجب ان يتم تعبئة رقم الهوية بشكل صحيح"
                        },
                    }
                },
                name: {
                    validators: {
                        notEmpty: {message: "قم بإدخال الإسم مستخدم "},
                        regexp: {
                            regexp: /^[A-Za-zء-ي]+ [A-Za-zء-ي]+ [A-Za-zء-ي]+ [A-Za-zء-ي]+/i,
                            message: "يجب ان تحتوي التسمية على الإسم الرباعي"
                        },
                    }
                },
                id_job: {
                    validators: {
                        regexp: {
                            regexp: /[0-9]+/i,
                            message: "يجب أن يحتوي الرقم الوظيفي على أرقام"
                        },
                    }
                },
                name_job: {
                    validators: {
                        notEmpty: {message: "يجب تعبئة حقل المسمى الوظيفي"},
                        regexp: {
                            regexp: /^[A-Za-zء-ي]+/i,
                            message: "يجب ان تحتوي التسمية على حروف"
                        },
                    }
                },
                email: {
                    validators: {
                        notEmpty: {message: "يجب تعبئة حقل البريد الإلكتروني"},
                        emailAddress: {
                            message: 'تأكد من كتابة البريد بشكل صحيح'
                        }
                    }
                },
                mobile: {
                    validators: {
                        notEmpty: {message: "يجب تعبئة حقل الرقم الجوال"},
                        regexp: {
                            regexp: /[0-9]{3}-[0-9]{2}-[0-9]{7}/i,
                            message: "يجب ان يكن تنسيق الرقم على هذا النحو *******-**-***"
                        },
                    }
                },
                password: {
                    validators: {
                        notEmpty: {message: "يجب تعبئة حقل كلمة السر"},
                        stringLength: {
                            min: 8,
                            message: 'يجب ان يحتوي كلمة السر 8 حرف كحد أقل'
                        },
                        regexp: {
                            regexp: /[A-Z0-9]+/i,
                            message: "يجب ان تحتوي كلمة السر على حروف إنجليزية وأرقام"
                        },
                    }
                },

            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger,
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: ".fv-row",
                    eleInvalidClass: "",
                    eleValidClass: ""
                }),
            }
        });
        modal_update_user.addEventListener('show.bs.modal', function (event) {
            var show = event.relatedTarget;
            var id = show.getAttribute('data-bs-id');
            var id_number = show.getAttribute('data-bs-id-number');
            var id_job = show.getAttribute('data-bs-id-job');
            var mobile = show.getAttribute('data-bs-mobile');
            var name = show.getAttribute('data-bs-name');
            var job_name = show.getAttribute('data-bs-job-name');
            var email = show.getAttribute('data-bs-email');
            $('#update_id').val(id);
            $('#update_id_number').val(id_number);
            $('#update_name').val(name);
            $('#update_id_job').val(id_job);
            $('#update_name_job').val(job_name);
            $('#update_email').val(email);
            $('#update_mobile').val(mobile);
        });
        update_submit.addEventListener("click", function (t) {
            t.preventDefault();
            validate.validate().then(function (e) {
                "Valid" === e ? (
                    update_iframe.src = '{{route('user.update')}}', window.frames[0].stop(),
                        update_submit.setAttribute("data-kt-indicator", "on"), update_submit.disabled = true, update_form.submit(),
                        setTimeout(function () {
                            update_submit.removeAttribute("data-kt-indicator"), update_submit.disabled = false;
                            toastr.success("تم إرسال الطلب وجاري معالجته في السيرفر")
                            $('#table_users').DataTable().ajax.reload(null, false);
                        }, time_interval)) : Swal.fire({
                    text: "نأسف تأكد من صحة بعض المدخلات",
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "حسنا",
                    customClass: {confirmButton: "btn btn-primary"}
                });
            })
        });

    </script>
@endpush
