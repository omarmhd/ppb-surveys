<div class="modal fade" id="modal_update_building" tabindex="-1" aria-hidden="true">
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
                <div class="mb-13 mt-5 text-start">
                    <!--begin::Title-->
                    <h1 class="mb-3">الشقق السكنية</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-gray-400 fw-bold fs-5">وزارة الأشغال العامة والإسكان
                        <a href="javascript:void(0)" class="fw-bolder link-primary">بيانات المشروع</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-4 fv-row " id="selectCodeProject">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-5">
                            <span class="required">كود المشروع</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="إختيار كود المشروع الذي سيتم تسجيل الشقة بإسمه"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Select-->
                        <select id="code_project" name="CodeProject" data-control="select2"
                                data-dropdown-parent="#selectCodeProject"
                                data-placeholder="إختار كود المشروع ..." class="form-select form-select-solid"
                                onchange="changeCodeProject()">
                        </select>
                        <!--end::Select-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-md-4 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5"> الإسم المشروع</label>
                        <!--end::Label-->
                        <input id="name_project" type="text" class="form-control" placeholder=" الإسم المشروع"
                               disabled/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5">الجهة القائمة على المشرع</label>
                        <!--end::Label-->
                        <input id="sponsor_project" type="text" class="form-control"
                               placeholder="الجهة القائمة على المشرع" disabled/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5">تاريخ الإعلان</label>
                        <!--end::Label-->
                        <input id="date_publish" type="text" class="form-control" placeholder="تاريخ الإعلان" disabled/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5">نوع المشروع</label>
                        <!--end::Label-->
                        <input id="type_project" type="text" class="form-control" placeholder="نوع المشروع" disabled/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-12 fv-row">
                        <!--begin::Label-->
                        <label class="fs-5 fw-bold mb-5">العنوان</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <textarea id="address" class="form-control" rows="3" placeholder="العنوان المشروع"
                                  disabled></textarea>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Heading-->
                <div class="mb-13 mt-15 text-start">
                    <!--begin::Description-->
                    <div class="text-gray-400 fw-bold fs-5">وزارة الأشغال العامة والإسكان
                        <a href="javascript:void(0)" class="fw-bolder link-primary">بيانات الشقة السكنية</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <iframe id="update_iframe" name="update_iframe" src=""
                        class="invisible d-none visually-hidden"></iframe>

                <!--begin:Form-->
                <form id="update_form" class="form" action="{{route('building.update')}}" method="POST"
                      target="update_iframe">
                    @csrf
                    <input id="id_project" type="hidden" name="id_project"/>
                    <input id="id" type="hidden" name="id"/>
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">رقم العمارة</span>
                            </label>
                            <!--end::Label-->
                            <input id="num_building" type="text" class="form-control form-control-solid"
                                   placeholder="رقم العمارة"
                                   name="num_building"/>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">رقم الشقة</span>
                            </label>
                            <!--end::Label-->
                            <input id="num_apartment" type="text" class="form-control form-control-solid"
                                   placeholder="رقم الشقة"
                                   name="num_apartment"/>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">رقم الطابق</span>
                            </label>
                            <!--end::Label-->
                            <input id="floor" type="text" class="form-control form-control-solid"
                                   placeholder="رقم الطابق"
                                   name="floor"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">مساحة الشقة</span>
                            </label>
                            <!--end::Label-->
                            <input id="size_apartment" type="text" class="form-control form-control-solid"
                                   placeholder="مساحة الشقة"
                                   name="size_apartment"/>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">إتجاه الشقة</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                   title="الإتجاه المطلة عليه الشقة يحيث يصف مثل الإتجاه الغربي او الشرق او جنوب غرب"></i>
                            </label>
                            <!--end::Label-->
                            <select id="orientation" class="form-select form-select-solid" data-control="select2"
                                    data-hide-search="true" data-placeholder="إتجاه الشقة..."
                                    name="orientation">
                                <option value="">إتجاه الشقة...</option>
                                <option value="شرقي">شرقي</option>
                                <option value="غربي">غربي</option>
                                <option value="شمالي">شمالي</option>
                                <option value="جنوب">جنوب</option>
                                <option value="شمالي شرقي"> شمالي شرقي</option>
                                <option value="جنوب شرقي">جنوب شرقي</option>
                                <option value="شمالي غربي">شمالي غربي</option>
                                <option value="جنوب غربي">جنوب غربي</option>
                            </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row">
                            <label class="fs-6 fw-bold mb-2">حالة الشقة</label>
                            <select id="status" class="form-select form-select-solid" data-control="select2"
                                    data-hide-search="true"
                                    data-placeholder="إختار" name="status">
                                <option value="">تحديد الحالة</option>
                                <option value="مشطبة">مشطبة</option>
                                <option value="عظم">عظم</option>
                            </select>
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

        let modal_update_project = document.getElementById('modal_update_building');
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
        update_iframe.src = '{{route('building.update')}}';
        window.frames[0].stop();
        var validate = FormValidation.formValidation(update_form, {
            fields: {
                code: {validators: {notEmpty: {message: "قم بإدخال كود المشروع"}}},
                name: {validators: {notEmpty: {message: "قم بإدخال إسم المشروع"}}},
                sponsor: {validators: {notEmpty: {message: "قم بإدخال الجهة القائمة على المشروع"}}},
                date_publish: {validators: {notEmpty: {message: "قم بإدخال تاريخ الإعلان"}}},
                type_project: {validators: {notEmpty: {message: "قم بإخيار نوع المشروع"}}},
                /* standard: {
                     selector: '.selector-item-standard',
                     validators: {
                         callback: {
                             message: "قم بإضافة معيار واحد على الاقل",
                             callback: function (input) {
                                 if ($('#list_stander').filter(function () {
                                     return $(this).children("li").length > 1
                                 }).length) {
                                     validate.updateFieldStatus('standard', 'Valid', 'callback');
                                     return true;
                                 }
                                 return false;
                             }
                         }
                     }
                 }*/
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
        modal_update_project.addEventListener('show.bs.modal', function (event) {
            var show = event.relatedTarget;
            var id = show.getAttribute('data-bs-id');
            var num_building = show.getAttribute('data-bs-num-building');
            var num_apartment = show.getAttribute('data-bs-num-apartment');
            var floor = show.getAttribute('data-bs-floor');
            var size_apartment = show.getAttribute('data-bs-size-apartment');
            var orientation = show.getAttribute('data-bs-orientation');
            var status = show.getAttribute('data-bs-status');
            var code_project = show.getAttribute('data-bs-code-project');
            $('#id').val(id);
            $('#num_building').val(num_building);
            $('#num_apartment').val(num_apartment);
            $('#floor').val(floor);
            $('#size_apartment').val(size_apartment);
            $('#status').val(status);
            $('#status').change();
            $('#code_project').val(code_project);
            $('#code_project').change();
            $('#orientation').val(orientation);
            $('#orientation').change();
        });
        update_submit.addEventListener("click", function (t) {
            t.preventDefault();
            validate.validate().then(function (e) {
                "Valid" === e ? (
                    update_submit.setAttribute("data-kt-indicator", "on"), update_submit.disabled = true, update_form.submit(),
                        setTimeout(function () {
                            update_submit.removeAttribute("data-kt-indicator"), update_submit.disabled = false;
                            toastr.success("تم إرسال الطلب وجاري معالجته في السيرفر")
                            $('#table_building').DataTable().ajax.reload(null, false);
                        }, time_interval)) : Swal.fire({
                    text: "نأسف تأكد من صحة بعض المدخلات",
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "حسنا",
                    customClass: {confirmButton: "btn btn-primary"}
                });
            })
        });
        $.ajax({
            type: 'get',
            url: "{{route('Project.show',['Project'=>'0'])}}",
            contentType: false,
            processData: false,
            success: (data) => {
                var opt = document.createElement('option');
                opt.value = "";
                opt.innerHTML = "إختار كود المشروع ...";
                code_project.appendChild(opt);
                JSON.parse(data).forEach((e => {
                    var opt = document.createElement('option');
                    opt.value = e.code;
                    opt.innerHTML = e.code;
                    code_project.appendChild(opt);
                }));
            }
        });

        function changeCodeProject() {
            let url = "{{route('Project.show',['Project'=>':project'])}}";
            url = url.replace(':project', $('#code_project').val());
            $.ajax({
                type: 'get',
                url: url,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    JSON.parse(data).forEach((e => {
                        $('#name_project').val(e.name);
                        $('#sponsor_project').val(e.sponsor);
                        $('#date_publish').val(e.date_publish);
                        $('#type_project').val((e.type_project == 'free') ? "مجاني" : "مدفوع");
                        var address = JSON.parse(e.address);
                        $('#address').val(address.Governorate + " - " + address.City + " - " + address.address);
                        $('#id_project').val(e.id);
                    }));
                }
            });
        }

        document.getElementById('update_cancel').addEventListener('click', function () {
            $('#orientation').val('');
            $('#orientation').change();
            $('#status').val('');
            $('#status').change();

        });
    </script>
@endpush
