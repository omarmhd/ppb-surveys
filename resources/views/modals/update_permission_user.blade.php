<div class="modal fade" id="modal_permission_user" tabindex="-1" aria-hidden="true">
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
                        <a href="javascript:void(0)" class="fw-bolder link-primary">صلاحيات المستخدم</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <iframe id="permission_iframe" name="permission_iframe" src=""
                        class="invisible d-none visually-hidden"></iframe>
                <!--begin:Form-->
                <form id="permission_form" class="form" action="{{route('permission.user.update')}}" method="POST"
                      target="permission_iframe">
                    @csrf
                    <input id="id" name="id" type="hidden"/>
                    <div class="row g-9 mb-8">
                        <div class="col-md-8 fv-row" id="select_user_type">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                <span class="required">نوع المستخدم</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select id="user_type" name="user_type" data-control="select2"
                                    data-dropdown-parent="#select_user_type"
                                    data-placeholder="إختار النوع المستخدم ..." class="form-select form-select-solid">
                                <option value="">إختار النوع المستخدم ...</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                            <!--end::Select-->
                        </div>
                        <div class="col-md-4 fv-row">
                            <button type="button" id="select_type" class="btn btn-primary mt-9">
                                <span class="indicator-label">تطبيق</span>
                                <span class="indicator-progress">الرجاء الإنتظار...
															<span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </div>
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
                    <div class="text-center mt-20">
                        <button type="submit" id="permission_submit" class="btn btn-primary">
                            <span class="indicator-label">تحديث</span>
                            <span class="indicator-progress">الرجاء الإنتظار...
															<span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <button type="reset" id="permission_cancel" class="btn btn-white me-3">إلغاء</button>
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
        let modal_permission_user = document.getElementById('modal_permission_user');
        let permission_form = document.getElementById('permission_form');
        let permission_submit = document.getElementById("permission_submit");
        let permission_cancel = document.getElementById("permission_cancel");
        let permission_iframe = document.getElementById('permission_iframe');
        let user_type = document.getElementById('user_type');
        let select_type = document.getElementById('select_type');
        permission_iframe.onload = function () {
            const iframeDocument = permission_iframe.contentWindow.document;
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
        permission_iframe.src = '{{route('permission.user.update')}}';
        window.frames[1].stop();
        var validate_user_type = FormValidation.formValidation(permission_form, {
            fields: {
                user_type: {
                    validators: {
                        notEmpty: {message: "قم بإختيار حقل لنوع المستخدم لتطبيقه"},
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
        var validate = FormValidation.formValidation(permission_form, {
            fields: {
                'permission[]': {
                    validators: {
                        notEmpty: {message: "يجب إختيار صلاحية واحدة على الأقل"},
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
        modal_permission_user.addEventListener('show.bs.modal', function (event) {
            var show = event.relatedTarget;
            permission_submit.setAttribute("data-kt-indicator", "on");
            permission_submit.disabled = true;
            select_type.setAttribute("data-kt-indicator", "on");
            select_type.disabled = true;
            var id = show.getAttribute('data-bs-id');
            var id_role = show.getAttribute('data-bs-id-role');
            $('#id').val(id);
            $('#user_type').val(id_role);
            $('#user_type').change();
            let permission = modal_permission_user.querySelectorAll('input[name="permission[]"]');
            permission.forEach((dot => {
                document.getElementById(dot.id).removeAttribute('checked');
            }));
            var url = "{{route('UserPermission.show',['UserPermission'=>':permission'])}}";
            url = url.replace(':permission', id);
            $.ajax({
                type: 'get',
                url: url,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    JSON.parse(data).forEach((e => {
                        document.getElementById('permission-' + e.id_permission).setAttribute('checked', true);
                    }));
                    select_type.removeAttribute("data-kt-indicator");
                    select_type.disabled = false;
                    permission_submit.removeAttribute("data-kt-indicator");
                    permission_submit.disabled = false;
                }
            });
        });
        select_type.addEventListener("click", function (t) {
            validate_user_type.validate().then(function (e) {
                "Valid" === e ? (
                    select_type.setAttribute("data-kt-indicator", "on"), select_type.disabled = true,
                        setTimeout(function () {
                            select_type.removeAttribute("data-kt-indicator"), select_type.disabled = false;
                            var opt = user_type.options[user_type.selectedIndex];
                            let permission = modal_permission_user.querySelectorAll('input[name="permission[]"]');
                            permission.forEach((dot => {
                                document.getElementById(dot.id).removeAttribute('checked');
                            }));
                            var url = "{{route('Role.show',['Role'=>':role'])}}";
                            url = url.replace(':role', opt.value);
                            $.ajax({
                                type: 'get',
                                url: url,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: (data) => {
                                    JSON.parse(data).forEach((e => {
                                        e.role_permission.forEach((e => {
                                            document.getElementById('permission-' + e.id_permission).setAttribute('checked', true);
                                        }));
                                    }));
                                    toastr.success('تم تطبيق ' + opt.text);
                                }
                            });
                        }, time_interval)) : Swal.fire({
                    text: "نأسف تأكد من صحة بعض المدخلات",
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "حسنا",
                    customClass: {confirmButton: "btn btn-primary"}
                });
            })
        });
        permission_submit.addEventListener("click", function (t) {
            t.preventDefault();
            validate.validate().then(function (e) {
                "Valid" === e ? (
                    permission_submit.setAttribute("data-kt-indicator", "on"), permission_submit.disabled = true, permission_form.submit(),
                        setTimeout(function () {
                            permission_submit.removeAttribute("data-kt-indicator"), permission_submit.disabled = false;
                            $('#table_users').DataTable().ajax.reload(null, false);
                            toastr.success("تم إرسال الطلب وجاري معالجته في السيرفر")
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
