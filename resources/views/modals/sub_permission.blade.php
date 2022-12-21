<!--begin::Modal - New Target-->
<div class="modal fade" id="modal_sub_permission" tabindex="-1" aria-hidden="true">
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
                <!--begin::Heading-->
                <div class="mb-7 text-center">
                    <!--begin::Title-->
                    <h1 class="mb-3">الصلاحيات الفرعية</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-gray-400 fw-bold fs-7">وزارة الأشغال العامة والإسكان
                        <a class="fw-bolder link-primary">صلاحيات الفرعية</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--begin::Col-->
                <div class="mt-10 fv-row" id="edit_selectGroupPermission">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">مجموعة الصلاحيات</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Select-->
                    <select id="group_permission" name="group_permission" data-control="select2"
                            data-dropdown-parent="#edit_selectGroupPermission" onchange="changeGroupPermission()"
                            data-placeholder="إختار مجموعة الصلاحيات ..." class="form-select form-select-solid">
                    </select>
                    <!--end::Select-->

                </div>
                <!--end::Col-->
                <!--end::Heading-->
                <!--begin:Form-->
                <form id="sub_permission_form" class="form" action="{{route('subPermissionUser.update')}}"
                      method="POST" target="update_iframe">
                    @csrf
                    <input type="hidden" name="id" id="id_sub_permission_user">
                    <div id="sub-permission" class="row g-9 mb-8 ms-8  mt-10">

                    </div>
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="submit" id="sub_permission_submit" class="btn btn-primary">
                            <span class="indicator-label">حفظ</span>
                            <span class="indicator-progress">الرجاء الإنتظار...
															<span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <button type="reset" id="sub_permission_cancel" class="btn btn-white me-3">إلغاء</button>
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
        var id_user;
        var sub_permission;
        let modal_sub_permission = document.getElementById('modal_sub_permission');
        let groupPermission = document.getElementById('group_permission');
        let sub_permission_form = document.getElementById('sub_permission_form');
        modal_sub_permission.addEventListener('show.bs.modal', function (event) {
            var show = event.relatedTarget;
            $('#group_permission').val('');
            $('#group_permission').change();
            id_user = show.getAttribute('data-bs-id');
            var group = show.getAttribute('data-bs-group');
            $('#id_sub_permission_user').val(id_user);
            refreshSelection();
            JSON.parse(group).forEach((e => {
                var opt = document.createElement('option');
                opt.value = e.id_group;
                opt.innerHTML = e.name;
                group_permission.appendChild(opt);
            }));
        });
        let sub_permission_submit = document.getElementById("sub_permission_submit");

        function changeGroupPermission() {
            $('#sub-permission').empty();
            var group = $('#group_permission').val();

                var url = "{{route('SubPermission.show',['SubPermission'=>':group'])}}";
                url = url.replace(':group', group);
                $.ajax({
                    type: 'get',
                    url: url,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        if (!data.length) {
                            $('#sub-permission').append(`<div class="col-md-4 fv-row">
                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid">
                                    <input id="permission" class="form-check-input h-20px w-20px" type="checkbox" onchange="select_all()"/>
                                    <span class="form-check-label fw-bold">تحديد الكل</span>
                                </label>
                                <!--end::Checkbox-->
                            </div>`);
                        }
                        JSON.parse(data).forEach((e => {
                            var id = e.id;
                            $('#sub-permission').append(`<div class="col-md-4 fv-row">
                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid">
                                    <input id="permission-` + id + `" class="form-check-input h-20px w-20px" type="checkbox"
                                           name="sub_permission[]" data-bs-selecting="permission-sub-check"
                                           value="` + id + `"  ` + ((sub_permission.some(function (entry) {
                                return entry["id_subPermission"] == id;
                            })) ? `checked onchange="removeSubPermission(` + id_user + `,` + id + `);"` : ``) + `/>
                                    <span class="form-check-label fw-bold">` + e.DB_col + `</span>
                                </label>
                                <!--end::Checkbox-->
                            </div>`);
                        }));
                    }
                });
        }

        sub_permission_submit.addEventListener("click", function (t) {
            t.preventDefault();
            validate.validate().then(function (e) {
                "Valid" === e ? (
                    update_iframe.src = '{{route('subPermissionUser.update')}}', window.frames[0].stop(),
                        sub_permission_submit.setAttribute("data-kt-indicator", "on"), sub_permission_submit.disabled = true,
                        sub_permission_form.submit(),
                        setTimeout(function () {
                            sub_permission_submit.removeAttribute("data-kt-indicator"), sub_permission_submit.disabled = false;
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

        function removeSubPermission(id_user, id) {
            var url = "{{route('subPermissionUser.moveToTrash',['id'=>':ids'])}}";
            url = url.replace(':ids', [id_user, id]);
            $.ajax({
                type: 'post',
                url: url,
                cache: false,
                success: (output) => {
                    if (output.status) {
                        toastr.success(output.data);
                    } else {
                        toastr.warning(output.data);
                    }
                }
            });
            refreshSelection();
        }

        function refreshSelection() {
            var opt = document.createElement('option');
            opt.value = "";
            opt.innerHTML = "إختار مجموعة الصلاحيات ...";
            group_permission.appendChild(opt);
            var url = "{{route('SubPermissionUser.show',['SubPermissionUser'=>':user'])}}";
            url = url.replace(':user', id_user);
            $.ajax({
                type: 'get',
                url: url,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    sub_permission = JSON.parse(data);
                }
            });
        }

        function select_all() {
            var status = $('#permission').is(':checked');
            document.getElementById('sub-permission').querySelectorAll('[data-bs-selecting="permission-sub-check"]').forEach((e => {
                e.checked = status;
            }));

        }
    </script>
@endpush
