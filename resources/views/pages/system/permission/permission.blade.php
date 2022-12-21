@extends('layouts.app_admin')
@section('sub_title','الصلاحيات')
@section('toolbar.title','لوحة التحكم')
@section('toolbar.subTitle')
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">النظام</li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">إدارة الصلاحيات</li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-white">الصلاحيات</li>
    <!--end::Item-->
@endsection
@push('css')
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.rtl.css')}}" rel="stylesheet"
          type="text/css"/>
@endpush
@section('content')
    @include('modals.groub_permission')
    @include('modals.edit_permission')
    <!--begin::Form Widget 13-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body py-1">
            <!--begin::Heading-->
            <div class="mt-10 text-start mb-15 fs-6">
                <!--begin::Title-->
                <h1 class="mb-5">الصلاحيات</h1>
                <!--end::Title-->
                <!--begin::Description-->
                <div class="text-gray-400 fw-bold fs-5">وزارة الأشغال العامة والإسكان
                    <a href="javascript:void(0)" class="fw-bolder link-primary">إضافة صلاحية</a>.
                </div>
                <!--end::Description-->
            </div>
            <!--end::Heading-->
            <iframe id="permission_iframe" name="permission_iframe" src=""
                    class="invisible d-none visually-hidden"></iframe>
            <!--begin:Form-->
            <form id="permission_form" class="form" action="{{route('Permission.store')}}" method="POST"
                  target="permission_iframe">
            @csrf
            <!--begin::Input group-->
                <div class="row g-4 mb-1">
                    <!--begin::Col-->
                    <div class="col-md-4 fv-row" id="selectGroupPermission">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">مجموعة الصلاحيات</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="قم إدخال المجموعة التي تندرج تحتها هذه الصلاحية"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Select-->
                        <select id="group_permission" name="group_permission" data-control="select2"
                                data-dropdown-parent="#selectGroupPermission"
                                data-placeholder="إختار مجموعة الصلاحيات ..." class="form-select form-select-solid">
                        </select>
                        <!--end::Select-->

                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 fv-row" id="selectLinkPermission">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required"> الإسم الرابط الصلاحية </span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="يحتوي على إسماء الروابط الخاصة ليسهل التعامل معها لإضافه كصلاحية وصول لهذا الرابط"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Select-->
                        <select id="link_permission" name="link_permission" data-control="select2"
                                data-dropdown-parent="#selectLinkPermission"
                                data-placeholder="اختار رابط الصلاحية الصلاحيات ..."
                                class="form-select form-select-solid">
                            <option value="">تحديد رابط الصلاحية</option>
                            @foreach($routes as $route)
                                <option value="{{$route->getName()}}">{{$route->getName()}}</option>
                            @endforeach
                        </select>
                        <!--end::Select-->

                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">الاسم الصلاحية</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="قم بإدخال الإسم الصلاحية"></i>
                        </label>
                        <!--end::Label-->
                        <input id="name" name="name" type="text" class="form-control form-control-solid"
                               placeholder="الإسم الصلاحية"/>

                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center mt-15">
                    <button type="submit" id="permission_submit" class="btn btn-primary">
                        <span class="indicator-label">حفظ</span>
                        <span class="indicator-progress">الرجاء الإنتظار
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <button type="reset" id="permission_cancel" class="btn btn-white me-3">تنظيف الحقول
                    </button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end:Form-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Form Widget 13-->
    <!--begin::Tables Widget 14-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-bottom-0">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: -->
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
													<svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path
                                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                fill="#000000" fill-rule="nonzero" opacity="0.3"/>
															<path
                                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                fill="#000000" fill-rule="nonzero"/>
														</g>
													</svg>
												</span>
                    <!--end::Svg Icon-->
                    <input type="text" data-table-filter="search" class="form-control form-control-solid w-250px ps-15"
                           placeholder="بحث"/>
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-table-toolbar="base">
                    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                            data-bs-target="#modal_group_permission">
                        <!--begin::Svg Icon | -->
                        <span class="svg-icon svg-icon-1">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3"
              transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4"
              y="11" width="16" height="2" rx="1"/>
    </g>
</svg><!--end::Svg Icon-->
                        </span>
                        <span class="fs-7">مجموعات الصلاحيات</span>
                    </button>
                    <!--begin::Export-->
                    <div class="dropdown">
                        <a class="btn btn-light-primary me-3 ps-7 pe-7 dropdown-toggle" href="#"
                           role="button" id="export_dropdown" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            تصدير
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="export_dropdown">
                            <li><a class="dropdown-item" href="#">PDF</a></li>
                            <li><a class="dropdown-item" href="#">CSV</a></li>
                            <li><a class="dropdown-item" href="#">Excel</a></li>
                        </ul>
                    </div>
                    <!--end::Export-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none"
                     data-table-toolbar="selected">
                    <div class="fw-bolder me-5">
                        <span class="me-2" data-table-select="selected_count"></span>
                    </div>
                    <button type="button" class="btn btn-danger"
                            data-table-select="delete_selected">
                        احذف المحدد
                    </button>
                </div>
                <!--end::Group actions-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Body-->
        <div class="card-body mt-n5">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table id="table_permission"
                       class="table table-bordered table-hover table-row-gray-300 align-middle gs-0 gy-3 border-2 text-center  fs-7">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bolder  bg-secondary text-muted">
                        <th class="min-w-25px">
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"
                                       data-kt-check="true"
                                       data-kt-check-target=".widget-14-check"/>
                            </div>
                        </th>
                        <th class="min-w-25px">رقم</th>
                        <th class="min-w-120px">المجموعة</th>
                        <th class="min-w-120px">الصلاحيات</th>
                        <th class="min-w-100px">الرابط</th>
                        <th class="min-w-120px text-end"></th>
                    </tr>
                    </thead>
                    <!--end::Table head-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 14-->
@endsection
@push('js')
    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script>
        let Datatable_permission, table_permission, tables_item = [];
        let optionTables = document.getElementById('optionTables');
        let group_permission = document.getElementById('group_permission');
        let edit_group_permission = document.getElementById('edit_group_permission');
        let permission_form = document.getElementById('permission_form');
        let permission_iframe = document.getElementById('permission_iframe');
        let permission_submit = document.getElementById("permission_submit");
        permission_iframe.onload = function () {
            const iframeDocument = permission_iframe.contentWindow.document;
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
        window.frames[1].stop();
        var validate = FormValidation.formValidation(permission_form, {
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
        permission_submit.addEventListener("click", function (t) {
            t.preventDefault();
            permission_iframe.src = '{{route('Permission.store')}}';
            window.frames[1].stop();
            validate.validate().then(function (e) {
                "Valid" === e ? (permission_submit.setAttribute("data-kt-indicator", "on"), permission_submit.disabled = true, permission_form.submit(), permission_form.reset(), setTimeout(function () {
                        permission_submit.removeAttribute("data-kt-indicator"),
                            permission_submit.disabled = false;
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
        document.getElementById('permission_cancel').addEventListener('click', function () {
            $('#group_permission').val('');
            $('#group_permission').change();
            $('#link_permission').val('');
            $('#link_permission').change();
        });

        function refreshGroupPermission() {
            $.ajax({
                type: 'get',
                url: "{{route('groupPermission.tables')}}",
                contentType: false,
                processData: false,
                success: (data) => {
                    tables_item = data;
                    data.forEach((e => {
                        var opt = document.createElement('option');
                        opt.value = e;
                        opt.innerHTML = e;
                        optionTables.appendChild(opt);
                    }));
                    refresh();
                }
            });
        }

        function refresh() {
            $.ajax({
                type: 'get',
                url: "{{route('GroupPermission.show',['GroupPermission'=>'0'])}}",
                contentType: false,
                processData: false,
                success: (data) => {
                    $('#list-group').empty();
                    $('#group_permission > option').remove();
                    $('#edit_group_permission > option').remove();
                    var opt = document.createElement('option');
                    opt.value = "";
                    opt.innerHTML = "إختار مجموع الصلاحيات ...";
                    group_permission.appendChild(opt);
                    var opt = document.createElement('option');
                    opt.value = "";
                    opt.innerHTML = "إختار مجموع الصلاحيات ...";
                    edit_group_permission.appendChild(opt);
                    JSON.parse(data).forEach((e => {
                        var opt = document.createElement('option');
                        opt.value = e.id;
                        opt.innerHTML = e.name;
                        group_permission.appendChild(opt);
                        var opt = document.createElement('option');
                        opt.value = e.id;
                        opt.innerHTML = e.name;
                        edit_group_permission.appendChild(opt);
                        $('#list-group').append(`<div class="d-flex align-items-center mb-8">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-vertical h-40px bg-secondary"></span>
                        <!--end::Bullet-->
                        <a href="javascript:void(0)" class="btn btn-icon  btn-active-color-primary btn-sm me-5" onclick="deleteDataGroup('` + e.id + `','` + e.name + `')">
                            <!--begin::Svg Icon |-->
                            <span class="svg-icon svg-icon-1 ms-2 me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         width="24px"
                                         height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                               fill="#000000">
                                                <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"/>
                                                <rect fill="#000000" opacity="0.5"
                                                      transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                      x="0" y="7" width="16" height="2" rx="1"/>
                                            </g>
                                    </svg>
                                </span>
                            <!--end::Svg Icon-->
                        </a>
                        <form class="form row col-md-12 mt-7 group_permission_form" action="{{route('groupPermission.update')}}" method="POST" target="permission_iframe">
                            @csrf
                        <!--begin::Col-->
                    <div class="col-md-5 fv-row" id="selectTable_` + e.id + `">
                        <!--begin::Select-->
                        <select  name="DB_table" data-control="select2"
                                data-dropdown-parent="#selectTable_` + e.id + `"
                                data-placeholder="إختار جدول البيانات ..." class="form-select form-select-solid db_tables">
                                <option value="` + e.DB_table + `">` + e.DB_table + `</option>

                        </select>
                        <!--end::Select-->

                    </div>
                    <!--end::Col-->
                    <!--begin::Description-->
                    <div class="col-md-5 fv-row">
                        <input type="text" class="form-control form-control-solid" placeholder="الإسم المجموعة"
                               name="name_group_permission" value="` + e.name + `"/>
                            </div>
                            <!--end::Description-->
                            <input type="hidden" name="id_group_permission" value="` + e.id + `">
                            <!--begin::Col-->
                            <div class="col-md-2 fv-row">
                                <button type="submit" class="btn btn-secondary btn-active-light-primary shadow w-25">
                                    <span class="indicator-label ms-n3">
                                        <span class="svg-icon svg-icon-primary svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                    <path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) "/>
                                                </g>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="indicator-progress">الرجاء الإنتظار...
                                                                <span
                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Col-->
                        </form>
                    </div>`);
                    }));
                    document.querySelectorAll('.db_tables').forEach(e => {
                        tables_item.forEach((c => {
                            var opt = document.createElement('option');
                            opt.value = c;
                            opt.innerHTML = c;
                            e.appendChild(opt);
                        }));
                    });
                    document.querySelectorAll('.group_permission_form').forEach(e => {
                        var submit_group = e.querySelector('[type="submit"]');
                        var validate_e = FormValidation.formValidation(e, {
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
                        $(".db_tables").select2();
                        submit_group.addEventListener("click", (function (event) {
                            event.preventDefault();
                            permission_iframe.src = '{{route('groupPermission.update')}}';
                            window.frames[1].stop();
                            validate_e.validate().then(function (v) {
                                "Valid" === v ? (submit_group.setAttribute("data-kt-indicator", "on"),
                                        submit_group.disabled = true,
                                        submit_group.classList.remove("btn-secondary"),
                                        submit_group.classList.remove("btn-active-light-primary"),
                                        submit_group.classList.remove("shadow"),
                                        submit_group.classList.remove("w-25"),
                                        e.submit(), setTimeout(function () {
                                        submit_group.removeAttribute("data-kt-indicator"),
                                            submit_group.disabled = false,
                                            submit_group.classList.add("btn-secondary"),
                                            submit_group.classList.add("btn-active-light-primary"),
                                            submit_group.classList.add("shadow"),
                                            submit_group.classList.add("w-25");
                                        Datatable_permission.ajax.reload(null, false);
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
                        }));

                    });

                }
            });
        }

        function deleteDataGroup(n, name) {
            Swal.fire({
                text: "هل أنت متأكد أنك تريد حذف  مجموعة الصلاحية  " + name + " ؟ ",
                icon: "warning",
                showCancelButton: !0,
                buttonsStyling: !1,
                confirmButtonText: "نعم ، احذف!",
                cancelButtonText: "لا ، إلغاء",
                customClass: {
                    confirmButton: "btn fw-bold btn-danger",
                    cancelButton: "btn fw-bold btn-active-light-primary"
                }
            }).then((function (e) {
                e.value ? Swal.fire({
                    text: "لقد حذفت مجموعة الصلاحية " + name + " !. ",
                    icon: "success",
                    buttonsStyling: !1,
                    confirmButtonText: "حسنا",
                    customClass: {confirmButton: "btn fw-bold btn-primary"}
                }).then((function () {
                    var url = "{{route('groupPermission.moveToTrash',['id'=>':id'])}}";
                    url = url.replace(':id', n);
                    $.ajax({
                        type: 'post',
                        url: url,
                        cache: false,
                        success: (output) => {
                            if (output.status) {
                                toastr.success(output.data)
                            } else {
                                toastr.warning(output.data);
                            }
                        }
                    });
                    refreshGroupPermission();
                })) : "cancel" === e.dismiss && Swal.fire({
                    text: " لم يتم حذف  مجموعة الصلاحية " + name,
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "حسنا",
                    customClass: {confirmButton: "btn fw-bold btn-primary"}
                })
            }))
        }

        function deleteData(n, name) {
            Swal.fire({
                text: "هل أنت متأكد أنك تريد حذف الصلاحية  " + name + " ؟ ",
                icon: "warning",
                showCancelButton: !0,
                buttonsStyling: !1,
                confirmButtonText: "نعم ، احذف!",
                cancelButtonText: "لا ، إلغاء",
                customClass: {
                    confirmButton: "btn fw-bold btn-danger",
                    cancelButton: "btn fw-bold btn-active-light-primary"
                }
            }).then((function (e) {
                e.value ? Swal.fire({
                    text: "لقد حذفت الصلاحية " + name + " !. ",
                    icon: "success",
                    buttonsStyling: !1,
                    confirmButtonText: "حسنا",
                    customClass: {confirmButton: "btn fw-bold btn-primary"}
                }).then((function () {
                    var url = "{{route('permission.moveToTrash',['id'=>':id'])}}";
                    url = url.replace(':id', n);
                    $.ajax({
                        type: 'post',
                        url: url,
                        cache: false,
                        success: (output) => {
                            if (output.status) {
                                toastr.success(output.data)
                            } else {
                                toastr.warning(output.data);
                            }
                        }
                    });
                    Datatable_permission.ajax.reload(null, false);
                })) : "cancel" === e.dismiss && Swal.fire({
                    text: " لم يتم حذف الصلاحية " + name,
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "حسنا",
                    customClass: {confirmButton: "btn fw-bold btn-primary"}
                })
            }))
        }

        function countRows() {
            const t = document.querySelector('[data-table-toolbar="base"]'),
                e = document.querySelector('[data-table-toolbar="selected"]'),
                o = document.querySelector('[data-table-select="selected_count"]'),
                c = table_permission.querySelectorAll('tbody [type="checkbox"]');
            let r = !1, l = 0;
            c.forEach(t => {
                t.checked && (r = !0 , l++)
            }), r ? (o.innerHTML = "تم تحديد : " + l + " عنصر ", t.classList.add("d-none"), e.classList.remove("d-none")) : (t.classList.remove("d-none"), e.classList.add("d-none"));
        }

        function deleteRow() {
            table_permission = document.querySelector("#table_permission");
            const e = table_permission.querySelectorAll('[type="checkbox"]'),
                o = document.querySelector('[data-table-select="delete_selected"]');
            e.forEach((t => {
                t.addEventListener("click", (function () {
                    setTimeout((function () {
                        countRows();
                    }), 500)
                }))
            }));
            o.addEventListener("click", (function () {
                Swal.fire({
                    text: "هل أنت متأكد أنك تريد حذف السجلات المحددة?",
                    icon: "warning",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: "نعم ، احذف!",
                    cancelButtonText: "لا ، إلغاء",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then((function (o) {
                    o.value ? Swal.fire({
                        text: "لقد قمت بحذف جميع السجلات المحددة!.",
                        icon: "success",
                        buttonsStyling: !1,
                        confirmButtonText: "حسنا",
                        customClass: {confirmButton: "btn fw-bold btn-primary"}
                    }).then((function () {
                        var values = [];
                        e.forEach((e => {
                            var val = $(e).val();
                            if (val != 0) {
                                values.push(val);
                            }
                        }));
                        var url = "{{route('permission.moveToTrash',['id'=>':id'])}}";
                        url = url.replace(':id', values);
                        $.ajax({
                            type: 'POST',
                            url: url,
                            cache: false,
                            success: (output) => {
                                if (output.status) {
                                    toastr.success(output.data)
                                } else {
                                    toastr.warning(output.data);
                                }
                            }
                        });
                        Datatable_permission.ajax.reload(null, false);
                        table_permission.querySelectorAll('[type="checkbox"]')[0].checked = !1;
                    })) : "cancel" === o.dismiss && Swal.fire({
                        text: "لم يتم حذف السجلات المحددة .",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "حسنا!",
                        customClass: {confirmButton: "btn fw-bold btn-primary"}
                    })
                }))
            }))
        }

        $(document).ready(function () {
            initDataTable.ajax = '{{route('permission.table.show')}}';
            initDataTable.columns = [
                {data: 'id', name: 'id',targets: 0,orderable: false,sortable: false,},
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name_group', name: 'name_group'},
                {data: 'permission', name: 'permission'},
                {data: 'link', name: 'link'},
                {data: 'action', name: 'action'},
            ];
            initDataTable.columnDefs = [
                {
                    targets: 0,
                    orderable: false,
                    sortable: false,
                },
                {
                    targets: 5,
                    orderable: false,
                    sortable: false
                },
            ];
            Datatable_permission = $('#table_permission').DataTable(initDataTable);
            Datatable_permission.on("draw", (function () {
                deleteRow(),
                    countRows();
            })), deleteRow();
            document.querySelector('[data-table-filter="search"]').addEventListener("keyup", (function (e) {
                if (e.keyCode === 13) {
                    Datatable_permission.search(e.target.value).draw();
                }
            }));
            refreshGroupPermission();
        });
    </script>
@endpush
