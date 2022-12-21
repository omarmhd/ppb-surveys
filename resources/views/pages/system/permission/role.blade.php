@extends('layouts.app_admin')
@section('sub_title',' أنواع الصلاحيات')
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
    <li class="breadcrumb-item text-white"> أنواع المستخدمين</li>
    <!--end::Item-->
@endsection
@push('css')
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.rtl.css')}}" rel="stylesheet"
          type="text/css"/>
@endpush
@section('content')
    @include('modals.edit_role')
    <!--begin::Form Widget 13-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body py-1">
            <iframe id="role_iframe" name="role_iframe" src=""
                    class="invisible d-none visually-hidden"></iframe>
            <!--begin:Form-->
            <form id="role_form" class="form" action="{{route('Role.store')}}" method="POST"
                  target="role_iframe">
            @csrf
            <!--begin::Heading-->
                <div class="mt-10 text-start mb-15 fs-6">
                    <!--begin::Title-->
                    <h1 class="mb-5"> أنواع المستخدمين</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-gray-400 fw-bold fs-5">وزارة الأشغال العامة والإسكان
                        <a href="javascript:void(0)" class="fw-bolder link-primary">إضافة نوع</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
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
                            <option value="">إختار مجموعة الصلاحيات ...</option>
                            @foreach($groupPermissions as $group)
                                <option value="{{$group->id}}">{{$group->name}}</option>
                            @endforeach
                        </select>
                        <!--end::Select-->

                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">الإسم نوع الصلاحية</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="قم بإدخال الإسم لنوع الصلاحية"></i>
                        </label>
                        <!--end::Label-->
                        <input id="name" name="name" type="text" class="form-control form-control-solid"
                               placeholder="الإسم نوع الصلاحية"/>

                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 fv-row">
                        <!--begin::Actions-->
                        <div class="text-center mt-8">
                            <button type="submit" id="role_submit" class="btn btn-primary">
                                <span class="indicator-label">حفظ</span>
                                <span class="indicator-progress">الرجاء الإنتظار
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <button type="reset" id="role_cancel" class="btn btn-white me-3">تنظيف الحقول
                            </button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Col-->

                </div>
                <!--end::Input group-->
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
                                                         width="24px"
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
                <table id="table_role"
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
                        <th class="min-w-120px">النوع</th>
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
        let Datatable_role, table_role;
        let role_form = document.getElementById('role_form');
        let role_iframe = document.getElementById('role_iframe');
        let role_submit = document.getElementById("role_submit");
        role_iframe.onload = function () {
            const iframeDocument = role_iframe.contentWindow.document;
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
        window.frames[0].stop();
        var validate = FormValidation.formValidation(role_form, {
            fields: {
                group_permission: {
                    validators: {
                        notEmpty: {message: "قم بإختيار مجموع الصلاحيات"},
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
        role_submit.addEventListener("click", function (t) {
            t.preventDefault();
            role_iframe.src = '{{route('Role.store')}}';
            window.frames[0].stop();
            validate.validate().then(function (e) {
                "Valid" === e ? (role_submit.setAttribute("data-kt-indicator", "on"), role_submit.disabled = true, role_form.submit(), role_form.reset(), setTimeout(function () {
                        role_submit.removeAttribute("data-kt-indicator"),
                            role_submit.disabled = false;
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
        document.getElementById('role_cancel').addEventListener('click', function () {
            $('#group_permission').val('');
            $('#group_permission').change();
        });

        function deleteData(n, name) {
            Swal.fire({
                text: "هل أنت متأكد أنك تريد حذف النوع  " + name + " ؟ ",
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
                    text: "لقد حذفت النوع " + name + " !. ",
                    icon: "success",
                    buttonsStyling: !1,
                    confirmButtonText: "حسنا",
                    customClass: {confirmButton: "btn fw-bold btn-primary"}
                }).then((function () {
                    var url = "{{route('role.moveToTrash',['id'=>':id'])}}";
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
                    Datatable_role.ajax.reload(null, false);
                })) : "cancel" === e.dismiss && Swal.fire({
                    text: " لم يتم حذف النوع " + name,
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
                c = table_role.querySelectorAll('tbody [type="checkbox"]');
            let r = !1, l = 0;
            c.forEach(t => {
                t.checked && (r = !0 , l++)
            }), r ? (o.innerHTML = "تم تحديد : " + l + " عنصر ", t.classList.add("d-none"), e.classList.remove("d-none")) : (t.classList.remove("d-none"), e.classList.add("d-none"));
        }

        function deleteRow() {
            table_role = document.querySelector("#table_role");
            const e = table_role.querySelectorAll('[type="checkbox"]'),
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
                        var url = "{{route('role.moveToTrash',['id'=>':id'])}}";
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
                        Datatable_role.ajax.reload(null, false);
                        table_role.querySelectorAll('[type="checkbox"]')[0].checked = !1;
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
            initDataTable.ajax = '{{route('role.table.show')}}';
            initDataTable.columns = {!!json_encode($dt_info['labels'])!!};
            initDataTable.order = {!!json_encode($dt_info['order'])!!};
            initDataTable.columnDefs = [
                {
                    targets: 0,
                    orderable: false,
                    sortable: false,
                },
                {
                    targets: 3,
                    orderable: false,
                    sortable: false
                },
            ];
            Datatable_role = $('#table_role').DataTable(initDataTable);
            Datatable_role.on("draw", (function () {
                deleteRow(),
                    countRows();
            })), deleteRow();
            document.querySelector('[data-table-filter="search"]').addEventListener("keyup", (function (e) {
                Datatable_role.search(e.target.value).draw()
            }));
        });
    </script>
@endpush
