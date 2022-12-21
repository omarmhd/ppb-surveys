<!--begin::Modal - New Target-->
<div class="modal fade" id="modal_edit_role" tabindex="-1" aria-hidden="true">
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
                <form id="edit_role_form" class="form" action="{{route('role.update')}}" method="POST"
                      target="role_iframe">
                    <!--begin::Heading-->
                    <div class="mb-7 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">أنواع المستخدمين</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-gray-400 fw-bold fs-7">وزارة الأشغال العامة والإسكان
                            <a class="fw-bolder link-primary">تعديل الأنواع</a>.
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
                                <span class="required">الإسم النوع</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                   title="قم بإدخال الإسم الصلاحية"></i>
                            </label>
                            <!--end::Label-->
                            <input id="edit_name" name="name" type="text" class="form-control form-control-solid"
                                   placeholder="الإسم النوع"/>

                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="mt-10 fv-row" id="edit_select_type">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">مجموعة الصلاحيات</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                   title="قم إدخال المجموعة التي تندرج تحتها هذه الصلاحية"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select id="select_type" name="select_type" data-control="select2"
                                    data-dropdown-parent="#edit_select_type" onchange="changeGroup()"
                                    data-placeholder="إختار مجموعة الصلاحيات ..." class="form-select form-select-solid">
                                <option value="">إختار مجموعة الصلاحيات ...</option>
                                @foreach($groupPermissions as $group)
                                    <option value="{{$group->id}}">{{$group->name}}</option>
                                @endforeach
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    @foreach($groupPermissions as $group)
                        <div id="group-permission_list-{{$group->id}}" class="row g-9 mb-8 ms-8  mt-10">
                            <!--begin::Heading-->
                            <div class="text-start">
                                <div class="ms-n10 text-gray-400 fs-6">
                                    {{$group->name}}.
                                </div>
                            </div>
                            <!--end::Heading-->
                        </div>
                @endforeach
                <!--begin::Actions-->
                    <div class="text-center">
                        <button type="submit" id="edit_role_submit" class="btn btn-primary">
                            <span class="indicator-label">حفظ</span>
                            <span class="indicator-progress">الرجاء الإنتظار...
															<span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <button type="reset" id="edit_role_cancel" class="btn btn-white me-3">إلغاء</button>
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
        let modal_role_permission = document.getElementById('modal_edit_role');
        let edit_role_form = document.getElementById('edit_role_form');
        let edit_role_submit = document.getElementById("edit_role_submit");
        let select_type = document.getElementById('select_type');
        var edit_validate = FormValidation.formValidation(edit_role_form, {
            fields: {
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
        edit_role_submit.addEventListener("click", function (t) {
            t.preventDefault();
            role_iframe.src = '{{route('role.update')}}';
            window.frames[0].stop();
            edit_validate.validate().then(function (e) {
                "Valid" === e ? (edit_role_submit.setAttribute("data-kt-indicator", "on"), edit_role_submit.disabled = true, edit_role_form.submit(), setTimeout(function () {
                        edit_role_submit.removeAttribute("data-kt-indicator"),
                            edit_role_submit.disabled = false;
                        Datatable_role.ajax.reload(null, false);
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
        var url = "{{route('Permission.show',['Permission'=>':permission'])}}";
        url = url.replace(':permission', '0');
        $.ajax({
            type: 'get',
            url: url,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                JSON.parse(data).forEach((e => {
                    $('#group-permission_list-' + e.id_group).append(`<div class="col-md-4 fv-row">
                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid">
                                    <input id="permission-` + e.id + `" class="form-check-input h-20px w-20px" type="checkbox"
                                           name="permission[]"
                                           value="` + e.id + `" data-bs-name-route="` + e.name_route + `"/>
                                    <span class="form-check-label fw-bold">` + e.name + `</span>
                                </label>
                                <!--end::Checkbox-->
                            </div>`);
                }));
            }
        });
        modal_role_permission.addEventListener('show.bs.modal', function (event) {
            var show = event.relatedTarget
            edit_role_submit.setAttribute("data-kt-indicator", "on");
            edit_role_submit.disabled = true;
            select_type.disabled = true;
            let permission = modal_role_permission.querySelectorAll('input[name="permission[]"]');
            permission.forEach((dot => {
                document.getElementById(dot.id).removeAttribute('checked');
            }));
            var id = show.getAttribute('data-bs-id');
            var name = show.getAttribute('data-bs-name');
            $('#edit_id').val(id);
            $('#edit_name').val(name);
            var url = "{{route('GroupPermission.show',['GroupPermission'=>':group'])}}";
            url = url.replace(':group', id);
            $.ajax({
                type: 'get',
                url: url,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    JSON.parse(data).forEach((e => {
                        e.permission.forEach((e => {
                            document.getElementById('permission-' + e.id).setAttribute('checked', true);
                        }));
                    }));
                    select_type.disabled = false;
                    edit_role_submit.removeAttribute("data-kt-indicator");
                    edit_role_submit.disabled = false;
                }
            });
        });

        function changeGroup() {
            var opt = select_type.options[select_type.selectedIndex];
            let permission = modal_role_permission.querySelectorAll('input[name="permission[]"]');
            permission.forEach((dot => {
                document.getElementById(dot.id).removeAttribute('checked');
            }));
            var url = "{{route('GroupPermission.show',['GroupPermission'=>':group'])}}";
            url = url.replace(':group', opt.value);
            $.ajax({
                type: 'get',
                url: url,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    JSON.parse(data).forEach((e => {
                        e.permission.forEach((e => {
                            document.getElementById('permission-' + e.id).setAttribute('checked', true);
                        }));
                    }));
                    toastr.success('تم تطبيق ' + opt.text);
                }
            });
        }
    </script>
@endpush
