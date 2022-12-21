<!--begin::Modal - New Target-->
<div class="modal fade" id="modal_installments" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px mh-850px">
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
                    <h1 class="mb-3">الأقساط الشهرية</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-gray-400 fw-bold fs-7">وزارة الأشغال العامة والإسكان
                        <a class="fw-bolder link-primary">الأقساط الشهرية</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <iframe id="installments_iframe" name="installments_iframe" src=""
                        class="invisible d-none visually-hidden"></iframe>
                <!--begin:Form-->
                <form id="installments_form" class="form" action="{{route('StaticData.store')}}" method="POST"
                      target="installments_iframe">
                    @csrf
                    <input type="hidden" id="installments_id" name="id"/>
                    <input type="hidden" id="installments_key_name" name="key_name" value="installments"/>
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">الإسم القسط</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="الإسم القسط"
                                   name="name" id="installments_name"/>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">قيمة القسط</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="قيمة القسط"
                                   name="value" id="installments_value"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row g-9 mb-8">
                        <div class="col-md-12 fv-row" id="select_installments_currency">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                <span class="required">العملة</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                   title="العملة التي المعتمدة للقسط"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select id="installments_currency" name="currency" data-control="select2"
                                    data-dropdown-parent="#select_installments_currency"
                                    data-placeholder="إختار العملة ..." class="form-select form-select-solid">
                                <option value="">إختار العملة</option>
                            </select>
                            <!--end::Select-->
                        </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="submit" id="installments_submit" class="btn btn-primary">
                            <span class="indicator-label">حفظ</span>
                            <span class="indicator-progress">الرجاء الإنتظار...
															<span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <button type="reset" id="installments_cancel" class="btn btn-white me-3">إلغاء</button>
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

        let modal_installments = document.getElementById('modal_installments');
        let installments_form = document.getElementById('installments_form');
        let installments_submit = document.getElementById("installments_submit");
        let installments_cancel = document.getElementById("installments_cancel");
        let installments_iframe = document.getElementById('installments_iframe');
        let installments_currency = document.getElementById('installments_currency');
        var installments_validate = FormValidation.formValidation(installments_form, {
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
        installments_iframe.onload = function () {
            const iframeDocument = installments_iframe.contentWindow.document;
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
        let url = "{{route('StaticData.show',['StaticDatum'=>':staticData'])}}";
        url = url.replace(':staticData', 'currency.');
        $.ajax({
            type: 'get',
            url: url,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                $('#installments_currency option').remove();
                var opt = document.createElement('option');
                opt.value = "";
                opt.innerHTML = "إختار العملة";
                installments_currency.appendChild(opt);
                JSON.parse(data).forEach((e => {
                    var item = JSON.parse(e.value);
                    var opt = document.createElement('option');
                    opt.value = item.symbol;
                    opt.innerHTML = item.name + " - " + item.symbol;
                    installments_currency.appendChild(opt);
                }));
            }
        });
        installments_submit.addEventListener("click", function (t) {
            t.preventDefault();
            installments_validate.validate().then(function (e) {
                "Valid" === e ? (
                    installments_submit.setAttribute("data-kt-indicator", "on"), installments_submit.disabled = true, installments_form.submit(), installments_form.reset(),
                        setTimeout(function () {
                            installments_submit.removeAttribute("data-kt-indicator"), installments_submit.disabled = false;
                            toastr.success("تم إرسال الطلب وجاري معالجته في السيرفر")
                            $('#table_installments').DataTable().ajax.reload(null, false);
                        }, time_interval)) : Swal.fire({
                    text: "نأسف تأكد من صحة بعض المدخلات",
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "حسنا",
                    customClass: {confirmButton: "btn btn-primary"}
                });
            })
        });
        modal_installments.addEventListener('show.bs.modal', function (event) {
            var show = event.relatedTarget
            if (show.getAttribute('data-bs-id') != null) {
                var id = show.getAttribute('data-bs-id');
                var name = show.getAttribute('data-bs-name');
                var currency = show.getAttribute('data-bs-currency');
                var value = show.getAttribute('data-bs-value');
                $('#installments_id').val(id);
                $('#installments_name').val(name);
                $('#installments_value').val(value);
                $('#installments_currency').val(currency);
                $('#installments_currency').change();
                installments_iframe.src = '{{route('staticData.update')}}';
                window.frames[1].stop();
                installments_form.action = '{{route('staticData.update')}}';
            } else {
                $('#installments_id').val('');
                $('#installments_name').val('');
                $('#installments_value').val('');
                $('#installments_currency').val('');
                $('#installments_currency').change();
                installments_iframe.src = '{{route('StaticData.store')}}';
                window.frames[1].stop();
                installments_form.action = '{{route('StaticData.store')}}';
            }

        });
    </script>
@endpush
