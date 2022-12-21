<!--begin::Modal - New Target-->
<div class="modal fade" id="modal_group_permission" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
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
                <!--begin:Form-->
                <iframe id="add_group_iframe" name="add_group_iframe" src=""
                        class="invisible d-none visually-hidden"></iframe>
                <!--begin:Form-->
                <form id="add_group_form" class="form" action="{{route('GroupPermission.store')}}" method="POST"
                      target="add_group_iframe">
                    @csrf
                    <div class="mb-7 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">المجموعات</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-gray-400 fw-bold fs-7">وزارة الأشغال العامة والإسكان
                            <a class="fw-bolder link-primary">بيانات المجموعة</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-5 fv-row" id="selectTable">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">جدول قاعدة البيانات</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                   title="قم بإختيار الجدول قاعدة البيانات لربطه بمجموعة الصلاحيات"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select id="optionTables" name="DB_table" data-control="select2"
                                    data-dropdown-parent="#selectTable"
                                    data-placeholder="إختار جدول البيانات ..." class="form-select form-select-solid">
                                <option value="">إختار جدول البيانات ...</option>
                            </select>
                            <!--end::Select-->

                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-5 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">الإسم المجموعة</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="الإسم المجموعة"
                                   name="name_group_permission"/>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-2 fv-row">
                            <button type="submit" id="group_permission_submit" class="btn btn-primary mt-8">
                                <span class="indicator-label">حفظ</span>
                                <span class="indicator-progress">الرجاء الإنتظار...
															<span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </form>
                <!--end:Form-->
                <div id="list-group">

                </div>

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
        let add_group_form = document.getElementById('add_group_form');
        let add_group_iframe = document.getElementById('add_group_iframe');
        let group_permission_submit = document.getElementById("group_permission_submit");
        add_group_iframe.onload = function () {
            const iframeDocument = add_group_iframe.contentWindow.document;
            if (iframeDocument.getElementById('type') != null) {
                if (iframeDocument.getElementById('type').value == "success") {
                    toastr.success(iframeDocument.getElementById('massage').innerText);
                } else {
                    toastr.error(iframeDocument.getElementById('massage').innerText);
                }
            } else {
                toastr.error((iframeDocument.querySelector('.solution-title') != null) ? iframeDocument.querySelector('.solution-title').innerText : (iframeDocument.querySelector('.ui-exception-class > span:last-child') != null) ? iframeDocument.querySelector('.ui-exception-class > span:last-child').innerText : "لا توجد إستجابة من السيرفر", 'حصل خطأ في السيرفر');
            }
        };
        add_group_iframe.src = '{{route('GroupPermission.store')}}';
        window.frames[0].stop();
        var validate_add_group_form = FormValidation.formValidation(add_group_form, {
            fields: {
                name_group_permission: {
                    validators: {
                        notEmpty: {message: "قم بإدخال الإسم الصلاحية"},
                        regexp: {
                            regexp: /^[A-Za-zء-ي]+/i,
                            message: "يجب ان تحتوي التسمية على حروف"
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
                })
            }
        });
        group_permission_submit.addEventListener("click", function (t) {
            t.preventDefault();
            validate_add_group_form.validate().then(function (e) {
                "Valid" === e ? (group_permission_submit.setAttribute("data-kt-indicator", "on"), group_permission_submit.disabled = true, add_group_form.submit(), add_group_form.reset(), setTimeout(function () {
                        group_permission_submit.removeAttribute("data-kt-indicator"),
                            group_permission_submit.disabled = false;
                        refreshGroupPermission();
                        toastr.success("تم إرسال الطلب وجاري معالجته في السيرفر")
                    }, time_interval)
                ) : Swal.fire({
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
