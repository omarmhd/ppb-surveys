@extends('layouts.app_admin')
@section('sub_title','ثوابت النظام')
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
    <li class="breadcrumb-item text-muted">الإعدادت</li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-white">ثوابت النظام</li>
    <!--end::Item-->
@endsection
@push('css')
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.rtl.css')}}" rel="stylesheet"
          type="text/css"/>
@endpush
@section('content')
    @include('modals.currency')
    @include('modals.installments')

    <!--begin::Tables Widget 13-->
    <div class="card ">
        <div class="card-header border-bottom-0">
            <!--begin::Heading-->
            <div class="mt-10 text-start ms-10">
                <!--begin::Title-->
                <h2>ثوابت النظام</h2>
                <!--end::Title-->
            </div>
            <!--end::Heading-->
        </div>
        <!--begin::Body-->
        <div class="card-body mt-n8">
            <div class="row">
                <div class="col-md-6 fv-row">
                    <!--begin::Heading-->
                    <div class="mb-2 text-start ms-11">
                        <!--begin::Description-->
                        <div class="text-gray-400 fw-bold fs-6">وزارة الأشغال العامة والإسكان
                            <a href="javascript:void(0);" class="fw-bolder link-primary">العملات</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Tables Widget 13-->
                    <div class="card ">
                        <!--begin::Card header-->
                        <div class="card-header border-bottom-0">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1 ">
                                    <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                                    <span class="svg-icon svg-icon-1 position-absolute ms-6 svg-icon-warning">
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
                                    <input type="text" data-table-filter="search_currency"
                                           class="form-control form-control-solid bg-light-warning w-250px ps-15"
                                           placeholder="بحث"/>
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--begin::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-table-toolbar="base_currency">
                                    <div class="dropdown me-3">
                                        <a class="btn btn-light-warning me-3 ps-7 pe-7 dropdown-toggle" href="#"
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
                                    <!--begin::Export-->
                                    <button type="button" class="btn btn-light-warning me-3 " data-bs-toggle="modal"
                                            data-bs-target="#modal_currency">
                                        <span class="svg-icon svg-icon-1 m-n3 svg-icon-warning"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Plus.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3"
              transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4"
              y="11" width="16" height="2" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span>
                                    </button>
                                    <!--end::Export-->

                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Group actions-->
                                <div class="d-flex justify-content-end align-items-center d-none"
                                     data-table-toolbar="selected_currency">
                                    <div class="fw-bolder me-5">
                                        <span class="me-2" data-table-select="selected_count_currency"></span>
                                    </div>
                                    <button type="button" class="btn btn-danger"
                                            data-table-select="delete_selected_currency">
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
                                <table id="table_currency"
                                       class="table table-bordered table-hover table-row-gray-300 align-middle gs-0 gy-3 border-2 text-center  fs-7">
                                    <!--begin::Table head-->
                                    <thead>
                                    <tr class="fw-bolder  bg-light-warning text-muted">
                                        <th class="w-25px">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                       data-kt-check="true"
                                                       data-kt-check-target=".widget-13-check"/>
                                            </div>
                                        </th>
                                        <th class="min-w-120px">الإسم العملة</th>
                                        <th class="min-w-120px">رمز العملة</th>
                                        <th class="min-w-120px">العملة / الشيكل</th>
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
                    <!--end::Tables Widget 13-->
                </div>
                <div class="col-md-6 fv-row">
                    <!--begin::Heading-->
                    <div class="mb-2 text-start ms-11">
                        <!--begin::Description-->
                        <div class="text-gray-400 fw-bold fs-6">وزارة الأشغال العامة والإسكان
                            <a href="javascript:void(0);" class="fw-bolder link-primary">الأقساط</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Tables Widget 14-->
                    <div class="card">
                        <!--begin::Card header-->
                        <div class="card-header border-bottom-0">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
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
                                    <input type="text" data-table-filter="search_installments"
                                           class="form-control form-control-solid w-250px ps-15"
                                           placeholder="بحث"/>
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--begin::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-table-toolbar="base_installments">
                                    <div class="dropdown">
                                        <a class="btn btn-bg-secondary me-3 ps-7 pe-7 dropdown-toggle" href="#"
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
                                    <!--begin::Export-->
                                    <button type="button" class="btn btn-bg-secondary me-3" data-bs-toggle="modal"
                                            data-bs-target="#modal_installments">
                                        <!--begin::Svg Icon | path: icons/duotone/Files/Export.svg-->
                                        <span class="svg-icon svg-icon-1 m-n3"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Plus.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3"
              transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4"
              y="11" width="16" height="2" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span>
                                    </button>
                                    <!--end::Export-->
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Group actions-->
                                <div class="d-flex justify-content-end align-items-center d-none"
                                     data-table-toolbar="selected_installments">
                                    <div class="fw-bolder me-5">
                                        <span class="me-2" data-table-select="selected_count_installments"></span>
                                    </div>
                                    <button type="button" class="btn btn-danger"
                                            data-table-select="delete_selected_installments">
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
                                <table id="table_installments"
                                       class="table table-bordered table-hover table-row-gray-300 align-middle gs-0 gy-3 border-2 text-center  fs-7">
                                    <!--begin::Table head-->
                                    <thead>
                                    <tr class="fw-bolder  bg-secondary text-muted">
                                        <th class="w-25px">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                       data-kt-check="true"
                                                       data-kt-check-target=".widget-14-check"/>
                                            </div>
                                        </th>
                                        <th class="min-w-120px">الإسم القسط</th>
                                        <th class="min-w-120px">قيمة القسط</th>
                                        <th class="min-w-120px">العملة</th>
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
                </div>
            </div>
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 13-->

@endsection
@push('js')
    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script>

        let table_currency, DataTable_currency;

        function deleteData_currency(n, name) {
            Swal.fire({
                text: "هل أنت متأكد أنك تريد حذف عملة " + name + " ؟ ",
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
                    text: "لقد حذفت عملة " + name + " !. ",
                    icon: "success",
                    buttonsStyling: !1,
                    confirmButtonText: "حسنا",
                    customClass: {confirmButton: "btn fw-bold btn-primary"}
                }).then((function () {
                    var url = "{{route('staticData.moveToTrash',['id'=>':id'])}}";
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
                    DataTable_currency.ajax.reload(null, false);
                })) : "cancel" === e.dismiss && Swal.fire({
                    text: " لم يتم حذف عملة " + name,
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "حسنا",
                    customClass: {confirmButton: "btn fw-bold btn-primary"}
                })
            }))
        }

        function countRows_currency() {
            const t = document.querySelector('[data-table-toolbar="base_currency"]'),
                e = document.querySelector('[data-table-toolbar="selected_currency"]'),
                o = document.querySelector('[data-table-select="selected_count_currency"]'),
                c = table_currency.querySelectorAll('tbody [type="checkbox"]');
            let r = !1, l = 0;
            c.forEach(t => {
                t.checked && (r = !0 , l++)
            }), r ? (o.innerHTML = "تم تحديد : " + l + " عنصر ", t.classList.add("d-none"), e.classList.remove("d-none")) : (t.classList.remove("d-none"), e.classList.add("d-none"));
        }

        function deleteRow_currency() {
            table_currency = document.querySelector("#table_currency");
            const e = table_currency.querySelectorAll('[type="checkbox"]'),
                o = document.querySelector('[data-table-select="delete_selected_currency"]');
            e.forEach((t => {
                t.addEventListener("click", (function () {
                    setTimeout((function () {
                        countRows_currency();
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
                        var url = "{{route('staticData.moveToTrash',['id'=>':id'])}}";
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
                        DataTable_currency.ajax.reload(null, false);
                        table_currency.querySelectorAll('[type="checkbox"]')[0].checked = !1;
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
            var initDataTable_currency = initDataTable;
            initDataTable_currency.ajax = '{{route('currency.table.show')}}';
            initDataTable_currency.columns = {!!json_encode($currency_info['labels'])!!};
            initDataTable_currency.order = {!!json_encode($currency_info['order'])!!};
            initDataTable_currency.columnDefs = [
                {
                    targets: 0,
                    orderable: false,
                    sortable: false,
                },
                {
                    targets: 4,
                    orderable: false,
                    sortable: false
                },
            ];
            DataTable_currency = $('#table_currency').DataTable(initDataTable_currency);
            DataTable_currency.on("draw", (function () {
                deleteRow_currency(),
                    countRows_currency();
            })), deleteRow_currency();
            document.querySelector('[data-table-filter="search_currency"]').addEventListener("keyup", (function (e) {
                DataTable_currency.search(e.target.value).draw()
            }));
        });
    </script>
    <script>

        let table_installments, DataTable_installments;

        function deleteData_installments(n, name) {
            Swal.fire({
                text: "هل أنت متأكد أنك تريد حذف  القسط " + name + " ؟ ",
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
                    text: "لقد حذفت قسط" + name + " !. ",
                    icon: "success",
                    buttonsStyling: !1,
                    confirmButtonText: "حسنا",
                    customClass: {confirmButton: "btn fw-bold btn-primary"}
                }).then((function () {
                    var url = "{{route('staticData.moveToTrash',['id'=>':id'])}}";
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
                    DataTable_installments.ajax.reload(null, false);
                })) : "cancel" === e.dismiss && Swal.fire({
                    text: " لم يتم حذف قسط " + name,
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "حسنا",
                    customClass: {confirmButton: "btn fw-bold btn-primary"}
                })
            }))
        }

        function countRows_installments() {
            const t = document.querySelector('[data-table-toolbar="base_installments"]'),
                e = document.querySelector('[data-table-toolbar="selected_installments"]'),
                o = document.querySelector('[data-table-select="selected_count_installments"]'),
                c = table_installments.querySelectorAll('tbody [type="checkbox"]');
            let r = !1, l = 0;
            c.forEach(t => {
                t.checked && (r = !0 , l++)
            }), r ? (o.innerHTML = "تم تحديد : " + l + " عنصر ", t.classList.add("d-none"), e.classList.remove("d-none")) : (t.classList.remove("d-none"), e.classList.add("d-none"));
        }

        function deleteRow_installments() {
            table_installments = document.querySelector("#table_installments");
            const e = table_installments.querySelectorAll('[type="checkbox"]'),
                o = document.querySelector('[data-table-select="delete_selected_installments"]');
            e.forEach((t => {
                t.addEventListener("click", (function () {
                    setTimeout((function () {
                        countRows_installments();
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
                        var url = "{{route('staticData.moveToTrash',['id'=>':id'])}}";
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
                        DataTable_installments.ajax.reload(null, false);
                        table_installments.querySelectorAll('[type="checkbox"]')[0].checked = !1;
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
            var initDataTable_installments = initDataTable;
            initDataTable_installments.ajax = '{{route('installments.table.show')}}';
            initDataTable_installments.columns = {!!json_encode($installments_info['labels'])!!};
            initDataTable_installments.order = {!!json_encode($installments_info['order'])!!};
            initDataTable_installments.columnDefs = [
                {
                    targets: 0,
                    orderable: false,
                    sortable: false,
                },
                {
                    targets: 4,
                    orderable: false,
                    sortable: false
                },
            ];
            DataTable_installments = $('#table_installments').DataTable(initDataTable_installments);
            DataTable_installments.on("draw", (function () {
                deleteRow_installments(),
                    countRows_installments();
            })), deleteRow_installments();
            document.querySelector('[data-table-filter="search_installments"]').addEventListener("keyup", (function (e) {
                DataTable_installments.search(e.target.value).draw()
            }));
        });
    </script>
@endpush
