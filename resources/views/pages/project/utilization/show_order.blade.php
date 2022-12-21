@extends('layouts.app_admin')
@section('sub_title','عرض الطلبات')
@section('toolbar.title','لوحة التحكم')
@push('css')
    <style>

        #DataTables_Table_0_processing {
            top: 0px;
            width: auto;
            margin: 0;
            transform: translateX(-50%);
        }
    </style>
@endpush

@section('toolbar.subTitle')
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">المشاريع</li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">إدارة طلبات الإنتفاع</li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    3
    <li class="breadcrumb-item text-white">عرض الطلب</li>
    <!--end::Item-->
@endsection
@section('content')

    @include('modals.details_order')

    <!--begin::Form Widget 13-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body py-1">
            <!--begin:Form-->
            <!--begin::Heading-->
            <div class="mt-2 text-start">
                <!--begin::Title-->
                <h1 class="mb-2">طلبات إنتفاع المواطنين</h1>
                <!--end::Title-->
            </div>
            <!--end::Heading-->
            <!--begin::Input group-->
            <div class="row g-3 mb-1">
                <!--begin::Col-->
                <div class="col-md-2 col-id fv-row ">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span>رقم الوثيقة</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                           title=" قم بإدخل رقم الهوية المواطن المكونة من 9 أرقام "></i>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="رقم الوثيقة"
                           name="id_applicant"/>

                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-2 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="">الإسم المواطن</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                           title="قم بإدخال إسم المواطن رباعي"></i>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="أدخل إسم المواطن"
                           name="name_applicant"/>

                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-2 col-date-order fv-row">
                    <label class="fs-6 fw-bold mb-2">من تاريخ</label>
                    <!--begin::Input-->
                    <div class="position-relative d-flex align-items-center">
                        <!--begin::Icon-->
                        <div class="symbol symbol-20px me-4 position-absolute ms-4">
                                <span class="symbol-label bg-secondary">
                                    <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-grid.svg-->
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                             viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4"
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
                        <input class="date_from form-control form-control-solid ps-12" placeholder="حدد تاريخ من"
                               name="date_from"/>
                        <!--end::Datepicker-->
                    </div>
                    <!--end::Input-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-2 col-date-order fv-row ">
                    <label class="fs-6 fw-bold mb-2">إلى تاريخ</label>
                    <!--begin::Input-->
                    <div class="position-relative d-flex align-items-center">
                        <!--begin::Icon-->
                        <div class="symbol symbol-20px me-4 position-absolute ms-4">
                                <span class="symbol-label bg-secondary">
                                    <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-grid.svg-->
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                             viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4"
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
                        <input class="date_to form-control form-control-solid ps-12" placeholder="حدد تاريخ إلى"
                               name="date_to"/>
                        <!--end::Datepicker-->
                    </div>
                    <!--end::Input-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-2 col-status-order fv-row">
                    <label class="fs-6 fw-bold mb-2">حالة الطلب</label>
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                            data-placeholder="إختار" name="status">
                        <option value="">تحديد الحالة</option>
                        <option value="1">جديد</option>
                        <option value="2">تدقيق</option>
                        <option value="3">بحث ميداني</option>
                        <option value="4">مرشح للإستفادة</option>
                        <option value="5">مستفيد</option>
                        <option value="6">مستفيد مسبقا</option>
                        <option value="7">مرفوض</option>
                    </select>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 col-name-project fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="">المشروع</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="الإسم المشروع"
                           name="target_title"/>

                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Actions-->
            <div class="text-center mt-10">
                <button type="reset" id="reset" class="btn btn-white me-3">تنظيف الحقول
                </button>
                <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                    <span class="indicator-label">بحث</span>
                    <span class="indicator-progress">الرجاء الإنتظار
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
            <!--end::Actions-->
            <!--end:Form-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Form Widget 13-->

    <!--begin::Tables Widget 13-->
    <div class="card ">
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table
                    class="table data-table table-bordered table-row-gray-300 align-middle gs-0 gy-3 border-1 text-center">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bolder text-gray-700 bg-secondary ps-5 fs-5">


                        <th class="min-w-50px">رقم الطلب</th>
                        <th class="min-w-200px">الإسم المواطن</th>
                        <th class="min-w-120px">رقم الوثيقة</th>

                        <th class="min-w-200px">تاريخ الطلب</th>
                        <th>العمليات</th>
                        {{--                        <th class="min-w-120px">تاريخ الطلب</th>--}}
                        {{--                        <th class="min-w-120px">المشروع</th>--}}
                        {{--                        <th class="min-w-120px">حالة الطلب</th>--}}
                        {{--                        <th class="min-w-100px text-end"></th>--}}
                    </tr>
                    </thead>

                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
        <!--begin::Header-->
        <div class="card-header border-0">
            <h3 class="card-title align-items-start flex-column">
                <span class="text-muted mt-1 fw-bold fs-7">أكثر من 50 طلب</span>
            </h3>
        </div>
        <!--end::Header-->
    </div>
    <!--end::Tables Widget 13-->
@endsection
@push('js')
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('[name="date_from"]').flatpickr({enableTime: 0, dateFormat: "Y-m-d"});
        $('[name="date_to"]').flatpickr({enableTime: 0, dateFormat: "Y-m-d"});


    </script>

    <script>

        var dataTable;
        $(document).ready(function () {
                var url = "{{ route('utilization.order.index') }}";

                var details_order = document.getElementById('details_order');
                details_order.addEventListener('show.bs.modal', function (event) {


                    var button = event.relatedTarget


                    var phone_applicant = button.getAttribute('data-phone-applicant')
                    var name_governorate = button.getAttribute('data-name-governorate')
                    var municipal = button.getAttribute('data-municipal')
                    var city = button.getAttribute('data-city')
                    var landmark_near = button.getAttribute('data-landmark-near')
                    var social_status = button.getAttribute('data-social-status')
                    var number_families = button.getAttribute('data-number-families')
                    var total_people = button.getAttribute('data-total-people')
                    var value_income = button.getAttribute('data-value-income')
                    var existing_patients = button.getAttribute('data-existing-patients')
                    var benefit_affairs = button.getAttribute('data-benefit-affairs')
                    var number_patients = button.getAttribute('data-number-patients')
                    var number_family_members = button.getAttribute('data-number-family-members')
                    var work_details = button.getAttribute('data-work-details')
                    var sources_income = button.getAttribute('data-sources-income')
                    var payment_affairs = button.getAttribute('data-payment-affairs')


                    var modal = $(this)


                    // Extract info from data-bs-* attributes
                    modal.find('.modal-body input[name="phone_applicant"]').val(phone_applicant)
                    modal.find('.modal-body .name_governorate').text(name_governorate)
                    modal.find('.modal-body .municipal').text(municipal)
                    modal.find('.modal-body .city').text(city)
                    modal.find('.modal-body .landmark_near').text(landmark_near)
                    modal.find('.modal-body .social_status').text(social_status)
                    modal.find('.modal-body .number_families').text(number_families)
                    modal.find('.modal-body .total_people').text(total_people)
                    modal.find('.modal-body .value_income').text(value_income)
                    modal.find('.modal-body .existing_patients').text(existing_patients)
                    modal.find('.modal-body .benefit_affairs').text(benefit_affairs)
                    modal.find('.modal-body .number_patients').text(number_patients)
                    modal.find('.modal-body .number_family_members').text(number_family_members)
                    modal.find('.modal-body .work_details').text(work_details)
                    modal.find('.modal-body .sources_income').text(sources_income)
                    modal.find('.modal-body .payment_affair').text(payment_affairs)


                });

                fill_datatable();


                function fill_datatable(date_from = '', date_to = '', name_applicant = '', id_applicant = '',
                                        status = '') {
                    globalThis.dataTable = $('.data-table').DataTable({
                        processing: true,
                        serverSide: true,

                        searching: false,
                        ajax: {
                            url: url,
                            data: {
                                date_from: date_from,
                                date_to: date_to,
                                name_applicant: name_applicant,
                                id_applicant: id_applicant,
                                status: status
                            }
                        },
                        columns: [
                            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                            {data: 'name_applicant', name: 'name_applicant'},
                            {data: 'id_applicant', name: 'id_applicant'},
                            {data: 'date', name: 'date'},
                            {data: 'action', name: 'action'},
                        ]
                    });
                }

                $.extend($.fn.dataTable.defaults, {
                    language: {
                        "processing": "انتظر قليلا.."
                    },

                });

                $('#kt_modal_new_target_submit').click(function () {
                    var date_from = $('.date_from').val();
                    console.log(date_from);
                    var date_to = $('.date_to').val();
                    console.log(date_to);
                    var name_applicant = $('input[name="name_applicant"]').val();
                    console.log(name_applicant);
                    var id_applicant = $('input[name="id_applicant"]').val();
                    console.log(id_applicant);
                    var status = $('select[name="status"]').find(":selected").text();
                    console.log(status);

                    if ((date_from != '' && date_to != '') || (name_applicant != '') || (id_applicant != '') || (status != '')) {
                        $('.data-table').DataTable().destroy();
                        fill_datatable(date_from, date_to, name_applicant, id_applicant, status);
                    } else {
                        alert('Select Both filter option');
                    }
                });


                $('#reset').click(function () {
                    $('.date_from').val('');
                    $('.date_to').val('');
                    $('.data-table').DataTable().destroy();
                    fill_datatable();
                });


            }
        )


        function deleteRecord(id) {

            Swal.fire({
                title: 'هل تريد حذف الطلب ?',
                text: "لن تتمكن من التراجع عن هذا!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'نعم, حذف الطلب!',
                cancelButtonText: "إلغاء"
            }).then((result) => {


                if (result.isConfirmed) {
                    let url = "{{route('utilization.order.destroy',['id'=>':id'])}}";
                    url = url.replace(':id', id);
                    $.ajax({
                        url: url,
                        type: "get",

                        success: function (response) {

                            if (response.status == "success") {


                                dataTable.ajax.reload();

                            }

                        },
                        error: function (response) {
                            alert("Something went wrong.");
                            console.log(response);
                        },
                    });

                    Swal.fire(
                        'تم الحذف!',
                        id + 'تم حذف الطلب رقم',
                        'success'
                    )
                }
            })


        }


    </script>
@endpush
