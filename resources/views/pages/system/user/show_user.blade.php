@extends('layouts.app_admin')
@section('sub_title','عرض المستخدمين')
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
    <li class="breadcrumb-item text-muted">المستخدمين</li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-white">عرض المستخدمين</li>
    <!--end::Item-->
@endsection
@push('css')
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.rtl.css')}}" rel="stylesheet"
          type="text/css"/>
@endpush
@section('content')
    @include('modals.update_user')
    @include('modals.update_permission_user')
    @include('modals.sub_permission')
    <!--begin::Form Widget 13-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body py-1">
            <!--begin:Form-->
            <form id="search_form m-1 " class="form" action="#">
                <!--begin::Heading-->
                <div class="mt-10 text-start mb-15 fs-6">
                    <!--begin::Title-->
                    <h1 class="mb-5">مستخدمين النظام</h1>
                    <!--end::Title-->
                </div>
                <!--end::Heading-->
                <!--begin::Input group-->
                <div class="row g-3 mb-1">
                    <!--begin::Col-->
                    <div class="col-md-2 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span>رقم الوثيقة</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title=" قم بإدخل رقم الهوية المواطن المكونة من 9 أرقام "></i>
                        </label>
                        <!--end::Label-->
                        <input id="id_number" type="text" class="form-control form-control-solid"
                               placeholder="رقم الوثيقة"/>

                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="">الإسم المستخدم</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="قم بإدخال إسم المواطن رباعي"></i>
                        </label>
                        <!--end::Label-->
                        <input id="name" type="text" class="form-control form-control-solid"
                               placeholder="أدخل إسم المستخدم"/>

                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-2 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="">رقم الهاتف المحمول</span>
                        </label>
                        <!--end::Label-->
                        <input id="mobile" type="text" class="form-control form-control-solid"
                               placeholder="رقم الهاتف المحمول"/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-2 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="">الوظيفة</span>
                        </label>
                        <!--end::Label-->
                        <input id="job" type="text" class="form-control form-control-solid" placeholder="الوظيفة"/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3 fv-row">
                        <label class="fs-6 fw-bold mb-2">تاريخ من / إلي</label>
                        <!--begin::Input-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <div class="symbol symbol-20px me-4 position-absolute ms-4">
                                            <span class="symbol-label bg-secondary">
                                                <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-grid.svg-->
                                                <span class="svg-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px"
                                                         viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <rect fill="#000000" opacity="0.3" x="4" y="4" width="4"
                                                                  height="4"
                                                                  rx="1"/>
                                                            <path
                                                                d="M5,10 L7,10 C7.55228475,10 8,10.4477153 8,11 L8,13 C8,13.5522847 7.55228475,14 7,14 L5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,7 C14,7.55228475 13.5522847,8 13,8 L11,8 C10.4477153,8 10,7.55228475 10,7 L10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L11,14 C10.4477153,14 10,13.5522847 10,13 L10,11 C10,10.4477153 10.4477153,10 11,10 Z M17,4 L19,4 C19.5522847,4 20,4.44771525 20,5 L20,7 C20,7.55228475 19.5522847,8 19,8 L17,8 C16.4477153,8 16,7.55228475 16,7 L16,5 C16,4.44771525 16.4477153,4 17,4 Z M17,10 L19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 L17,14 C16.4477153,14 16,13.5522847 16,13 L16,11 C16,10.4477153 16.4477153,10 17,10 Z M5,16 L7,16 C7.55228475,16 8,16.4477153 8,17 L8,19 C8,19.5522847 7.55228475,20 7,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,17 C4,16.4477153 4.44771525,16 5,16 Z M11,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 L10,17 C10,16.4477153 10.4477153,16 11,16 Z M17,16 L19,16 C19.5522847,16 20,16.4477153 20,17 L20,19 C20,19.5522847 19.5522847,20 19,20 L17,20 C16.4477153,20 16,19.5522847 16,19 L16,17 C16,16.4477153 16.4477153,16 17,16 Z"
                                                                fill="#000000"/>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Datepicker-->
                            <input id="date" class="form-control form-control-solid ps-12" placeholder="تاريخ من / إلي"
                                   name="date"/>
                            <!--end::Datepicker-->
                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Actions-->
                <div class="text-center mt-15">
                    <button type="submit" id="search_submit" class="btn btn-primary">
                        <span class="indicator-label">بحث</span>
                        <span class="indicator-progress">الرجاء الإنتظار
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <button type="reset" id="search_cancel" class="btn btn-white me-3">تنظيف الحقول
                    </button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end:Form-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Form Widget 13-->

    <!--begin::Tables Widget 13-->
    <div class="card ">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">

            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-table-toolbar="base">
                    <select name="status" data-control="select2" data-hide-search="true" data-placeholder="Export" class="form-select form-select-solid ">
                        <option value="1">Excel</option>
                        <option value="1">PDF</option>
                        <option value="2">Print</option>
                    </select>
                </div>
                <!--end::Toolbar-->
                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-table-toolbar="selected">
                    <div class="fw-bolder me-5">
                        <span class="me-2" data-table-select="selected_count"></span>
                    </div>
                    <button type="button" class="btn btn-danger" data-table-select="delete_selected">احذف المحدد
                    </button>
                </div>
                <!--end::Group actions-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table id="table_users"
                       class="table table-bordered table-hover table-row-gray-300 align-middle gs-0 gy-3 border-1 text-center fs-7">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bolder  bg-secondary text-muted ">
                        <th class="w-10px">
                            <div class="form-check form-check-sm form-check-custom form-check-solid ms-5">
                                <input class="form-check-input" type="checkbox" value="0" data-kt-check="true"
                                       data-kt-check-target=".widget-13-check"/>
                            </div>
                        </th>
                        <th class="min-w-25px">رقم</th>
                        <th class="min-w-150px">الإسم المستخدم</th>
                        <th class="min-w-120px">رقم الوثيقة</th>
                        <th class="min-w-125px">الوظيفة</th>
                        <th class="min-w-120px">رقم الجوال</th>
                        <th class="min-w-125px">تاريخ الإضافة</th>
                        <th class="min-w-15px text-start"></th>
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
    <!--end::Tables Widget 13-->
@endsection
@push('js')
    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script>

        var date = $('[name="date"]').flatpickr({
            altInput: true,
            maxDate: "today",
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
            mode: "range"
        });
        let DataTable_users, table_users, value_name;

        function deleteData(n, name) {
            Swal.fire({
                text: "هل أنت متأكد أنك تريد حذف مستخدم صاحب هوية رقم " + name + " ؟ ",
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
                    text: "لقد حذفت مستخدم صاحب هوية رقم " + name + " !. ",
                    icon: "success",
                    buttonsStyling: !1,
                    confirmButtonText: "حسنا",
                    customClass: {confirmButton: "btn fw-bold btn-primary"}
                }).then((function () {
                    var url = "{{route('user.moveToTrash',['id'=>':id'])}}";
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
                    DataTable_users.ajax.reload(null, false);
                })) : "cancel" === e.dismiss && Swal.fire({
                    text: " لم يتم حذف مستخدم صاحب هوية رقم " + name,
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
                c = table_users.querySelectorAll('tbody [type="checkbox"]');
            let r = !1, l = 0;
            c.forEach(t => {
                t.checked && (r = !0 , l++)
            }), r ? (o.innerHTML = "تم تحديد : " + l + " عنصر ", t.classList.add("d-none"), e.classList.remove("d-none")) : (t.classList.remove("d-none"), e.classList.add("d-none"));
        }

        function deleteRow() {
            table_users = document.querySelector("#table_users");
            const e = table_users.querySelectorAll('[type="checkbox"]'),
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
                        var url = "{{route('user.moveToTrash',['id'=>':id'])}}";
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
                        DataTable_users.ajax.reload(null, false);
                        table_users.querySelectorAll('[type="checkbox"]')[0].checked = !1;
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
            initDataTable.ajax = '{{route('user.table.show')}}';
            initDataTable.columns = [
                {data: 'id_checkbox', name: 'id_checkbox', targets: 0, orderable: false, sortable: false,},
                {data: 'id', name: 'id',},
                {data: 'name', name: 'name'},
                {data: 'id_number', name: 'id_number'},
                {data: 'name_job', name: 'name_job'},
                {data: 'mobile', name: 'mobile'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action'},
            ];
            initDataTable.columnDefs = [
                {
                    targets: 0,
                    orderable: false,
                    sortable: false,
                },
                {
                    targets: 7,
                    orderable: false,
                    sortable: false
                },
            ];
            DataTable_users = $('#table_users').DataTable(initDataTable);
            DataTable_users.on("draw", (function () {
                deleteRow(),
                    countRows();
            })), deleteRow();
            document.getElementById('search_submit').addEventListener("click", (function (e) {
                e.preventDefault();
                DataTable_users.columns(2).search($('#name').val());
                DataTable_users.columns(3).search($('#id_number').val());
                DataTable_users.columns(4).search($('#job').val());
                DataTable_users.columns(5).search($('#mobile').val());
                DataTable_users.columns(6).search($('#date').val()).draw();
            }));
        });

        document.getElementById('search_cancel').addEventListener('click', function () {
            date.clear();
        });
    </script>
@endpush
