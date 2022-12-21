<!--begin::Modal - New Target-->
<div class="modal fade" id="modal_edit_permission" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div id="close_standers" class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
                <form id="edit_permission_form" class="form" action="{{route('permission.update')}}" method="POST"
                      target="permission_iframe">
                    <!--begin::Heading-->
                    <div class="mb-7 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">الصلاحيات</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-gray-400 fw-bold fs-7">وزارة الأشغال العامة والإسكان
                            <a class="fw-bolder link-primary">تعديل الصلاحيات</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                @csrf
                <!--begin::Input group-->
                    <div class="g-4 mb-10">
                        <input id="edit_id" name="id" type="hidden"/>
                        <!--begin::Col-->
                        <div class="mt-10 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">الاسم الصلاحية</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                   title="قم بإدخال الإسم الصلاحية"></i>
                            </label>
                            <!--end::Label-->
                            <input id="edit_name" name="name" type="text" class="form-control form-control-solid"
                                   placeholder="الإسم الصلاحية"/>

                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="mt-10 fv-row" id="edit_selectLinkPermission">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required"> الإسم الرابط الصلاحية </span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                   title="يحتوي على إسماء الروابط الخاصة ليسهل التعامل معها لإضافه كصلاحية وصول لهذا الرابط"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select id="edit_link_permission" name="link_permission" data-control="select2"
                                    data-dropdown-parent="#edit_selectLinkPermission"
                                    data-placeholder="اختار رابط الصلاحية الصلاحيات ..."
                                    class="form-select form-select-solid">
                                <option value="">اختار رابط الصلاحية الصلاحيات ...</option>
                                @foreach($routes as $route)
                                    <option value="{{$route->getName()}}">{{$route->getName()}}</option>
                                @endforeach
                            </select>
                            <!--end::Select-->

                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="mt-10 fv-row" id="edit_selectGroupPermission">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">مجموعة الصلاحيات</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                   title="قم إدخال المجموعة التي تندرج تحتها هذه الصلاحية"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select id="edit_group_permission" name="group_permission" data-control="select2"
                                    data-dropdown-parent="#edit_selectGroupPermission"
                                    data-placeholder="إختار مجموعة الصلاحيات ..." class="form-select form-select-solid">
                            </select>
                            <!--end::Select-->

                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="submit" id="edit_permission_submit" class="btn btn-primary">
                            <span class="indicator-label">حفظ</span>
                            <span class="indicator-progress">الرجاء الإنتظار...
															<span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <button type="reset" id="edit_permission_cancel" class="btn btn-white me-3">إلغاء</button>
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
        var link;
        let edit_link_permission = document.getElementById('edit_link_permission');
        let modal_edit_permission = document.getElementById('modal_edit_permission');
        let edit_permission_form = document.getElementById('edit_permission_form');
        let edit_permission_submit = document.getElementById("edit_permission_submit");
        var edit_validate = FormValidation.formValidation(edit_permission_form, {
            fields: {
                group_permission: {
                    validators: {
                        notEmpty: {message: "قم بإختيار مجموع الصلاحيات"},
                    }
                },
                link_permission: {
                    validators: {
                        notEmpty: {message: "قم بإدخال التسمية رابط الصلاحية"},
                    }
                },
                name: {
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
        edit_permission_submit.addEventListener("click", function (t) {
            t.preventDefault();
            permission_iframe.src = '{{route('permission.update')}}';
            window.frames[1].stop();
            edit_validate.validate().then(function (e) {
                "Valid" === e ? (edit_permission_submit.setAttribute("data-kt-indicator", "on"), edit_permission_submit.disabled = true, edit_permission_form.submit(), setTimeout(function () {
                        edit_permission_submit.removeAttribute("data-kt-indicator"),
                            edit_permission_submit.disabled = false;
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
        modal_edit_permission.addEventListener('show.bs.modal', function (event) {
            var show = event.relatedTarget
            var id = show.getAttribute('data-bs-id');
            var name = show.getAttribute('data-bs-name');
            link = show.getAttribute('data-bs-link');
            var group = show.getAttribute('data-bs-group');
            $('#edit_id').val(id);
            $('#edit_name').val(name);
            var opt = document.createElement('option');
            opt.value = link;
            opt.innerHTML = link;
            edit_link_permission.appendChild(opt);
            $('#edit_link_permission').val(link);
            $('#edit_link_permission').change();
            $('#edit_group_permission').val(group);
            $('#edit_group_permission').change();
        });
        modal_edit_permission.addEventListener('hidden.bs.modal', function (event) {
            $('#edit_link_permission  option[value="' + link + '"]').remove();
        });
        document.getElementById('edit_permission_cancel').addEventListener('click', function () {
            $('#edit_link_permission').val('');
            $('#edit_link_permission').change();
            $('#edit_group_permission').val('');
            $('#edit_group_permission').change();
        });
    </script>
@endpush
