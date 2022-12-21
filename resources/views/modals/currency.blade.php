<!--begin::Modal - New Target-->
<div class="modal fade" id="modal_currency" tabindex="-1" aria-hidden="true">
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
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <!--begin::Title-->
                    <h1 class="mb-3">العملات</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-gray-400 fw-bold fs-7">وزارة الأشغال العامة والإسكان
                        <a class="fw-bolder link-primary">العملات</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <iframe id="currency_iframe" name="currency_iframe" src=""
                        class="invisible d-none visually-hidden"></iframe>
                <!--begin:Form-->
                <form id="currency_form" class="form" action="{{route('StaticData.store')}}" method="POST"
                      target="currency_iframe">
                    @csrf
                    <input type="hidden" id="currency_id" name="id"/>
                    <input type="hidden" id="currency_key_name" name="key_name" value="currency"/>
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">العملة</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="العملة"
                                   id="currency_name" name="name"/>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">رمز العملة</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="رمز العملة"
                                   id="currency_symbol" name="symbol"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-10 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">قيمة العملة</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" name="value" id="currency_value" class="form-control form-control-solid"
                                   placeholder="قيمة العملة"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="submit" id="currency_submit" class="btn btn-primary">
                            <span class="indicator-label">حفظ</span>
                            <span class="indicator-progress">الرجاء الإنتظار...
															<span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <button type="reset" id="currency_cancel" class="btn btn-white me-3">إلغاء</button>
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
        let modal_currency = document.getElementById('modal_currency');
        let currency_form = document.getElementById('currency_form');
        let currency_submit = document.getElementById("currency_submit");
        let currency_cancel = document.getElementById("currency_cancel");
        let currency_iframe = document.getElementById('currency_iframe');
        currency_iframe.onload = function () {
            const iframeDocument = currency_iframe.contentWindow.document;
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
        var currency_validate = FormValidation.formValidation(currency_form, {
            fields: {
                name: {
                    validators: {
                        notEmpty: {message: "قم بإدخال إسم العملة"},
                        regexp: {
                            regexp: /^[A-Za-zء-ي]+/i,
                            message: "يجب ان تحتوي التسمية على حروف"
                        },
                    }
                },
                symbol: {
                    validators: {
                        notEmpty: {message: "قم بإدخال رمز العملة"},
                        stringCase: {
                            'case': 'upper',
                            message: "يجب ان يحتوي الترميز على حروف إنجليزية A-Z"
                        },
                        stringLength: {
                            max: 4,
                            message: 'يجب ان يحتوي الترميز 4 حرف كحد أقصى'
                        },
                        regexp: {
                            regexp: /[A-Z]+/i,
                            message: "يجب ان تحتوي التسمية على حروف إنجليزية"
                        },
                    }
                },
                value: {
                    validators: {
                        notEmpty: {message: "قم بإدخال قيمة العملة"},
                        numeric: {message: "القيمة يجب ان تكون رقمية"}
                    }
                }
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
        currency_submit.addEventListener("click", function (t) {
            t.preventDefault();
            currency_validate.validate().then(function (e) {
                "Valid" === e ? (
                    currency_submit.setAttribute("data-kt-indicator", "on"), currency_submit.disabled = true, currency_form.submit(), currency_form.reset(),
                        setTimeout(function () {
                            currency_submit.removeAttribute("data-kt-indicator"), currency_submit.disabled = false;
                            toastr.success("تم إرسال الطلب وجاري معالجته في السيرفر")
                            $('#table_currency').DataTable().ajax.reload(null, false);
                        }, time_interval)) : Swal.fire({
                    text: "نأسف تأكد من صحة بعض المدخلات",
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "حسنا",
                    customClass: {confirmButton: "btn btn-primary"}
                });
            })
        });
        modal_currency.addEventListener('show.bs.modal', function (event) {
            var show = event.relatedTarget
            if (show.getAttribute('data-bs-id') != null) {
                var id = show.getAttribute('data-bs-id');
                var name = show.getAttribute('data-bs-name');
                var symbol = show.getAttribute('data-bs-symbol');
                var value = show.getAttribute('data-bs-value');
                $('#currency_id').val(id);
                $('#currency_name').val(name);
                $('#currency_symbol').val(symbol);
                $('#currency_value').val(value);
                currency_iframe.src = '{{route('staticData.update')}}';
                window.frames[0].stop();
                currency_form.action = '{{route('staticData.update')}}';
            } else {
                $('#currency_id').val('');
                $('#currency_name').val('');
                $('#currency_symbol').val('');
                $('#currency_value').val('');
                currency_iframe.src = '{{route('StaticData.store')}}';
                window.frames[0].stop();
                currency_form.action = '{{route('StaticData.store')}}';
            }
        });
    </script>
@endpush
