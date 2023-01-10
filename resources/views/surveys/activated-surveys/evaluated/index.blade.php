@extends('layouts.app_admin')
@section('title','التقيمات المرسلة ')
@section('toolbar.title','لوحة التحكم')
@section('breadcrumb')
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-400 w-5px h-2px"></span>
    </li>

    <li class="breadcrumb-item text-muted">لوحة التحكم</li>
@endsection
@push('css')


    {{--    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet"--}}
    {{--          type="text/css"/>--}}
    <link href="{{asset('/')}}assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
          type="text/css"/>
@endpush
@section('content')

    <!--begin::Tables Widget 13-->
    <div class="card ">
        <!--begin::Card header-->


        <!--end::Card header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->

            <form id="search_form" class="form" action="javascript:void(0)">
                <!--begin::Heading-->
                <div class="mt-10 text-start mb-15 fs-6">
                    <!--begin::Title-->
                    <!--end::Title-->
                </div>
                <!--end::Heading-->
                <!--begin::Input group-->
                <div class="row g-3 mb-1">
                    <!--begin::Col-->
                    <div class="col-md-2 fv-row ">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span>اسم الموظف</span>

                        </label>
                        <!--end::Label-->


                        <select class="form-control form-control-solid"  id="kt_select2_3" name="employee_id">
                            <option value=""  selected></option>

                            @foreach($employees as $employee)
                                <option  value="{{$employee->id}}">{{$employee->full_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3 fv-row ">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span>اسم المقيم</span>
                        </label>
                        <!--end::Label-->
                        <select class="form-control form-control-solid"  id="kt_select2_3" name="evaluator_id">
                            <option value=""  selected></option>

                            @foreach($evaluators as $evaluator)
                                <option  value="{{$evaluator->id}}">{{$evaluator->full_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3 fv-row ">
                        <label class="fs-6 fw-bold mb-2">من تاريخ </label>
                        <input type="date" class="form-control form-control-solid" name="date_from">
                        <!--begin::Input-->

                        <!--end::Input-->
                    </div>

                    <div class="col-md-3 fv-row ">
                        <label class="fs-6 fw-bold mb-2">إلى تاريخ </label>
                        <input type="date" class="form-control form-control-solid" name="date_to">
                        <!--begin::Input-->

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

            <div class="table-responsive">

                <!--begin::Table-->
                <table id="table_id"
                       class="table table-bordered table-hover table-row-gray-300 align-middle gs-0 gy-3 border-1 text-center fs-7">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bolder  bg-secondary text-muted ">

                        <th class="min-w-10px text-center" >#</th>

                        <th class="min-w-150px text-center">اسم النموذج</th>
                        <th class="min-w-20px text-center">الموظف</th>
                        <th class="min-w-100px text-center">المقيم</th>
                        <th class="min-w-10px text-center">ظهور التقيم للموظف</th>
                        <th class="min-w-10px text-center">التاريخ</th>
                        <th class="min-w-10px text-center">درجة التقيم</th>

                        <th class="min-w-10px text-center">
                            @can('administrator')
                                الاجراءات
                            @endcan
                        </th>

                    </tr>


                    </thead>


                    </tr>

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
    <script src="{{asset('/')}}assets/plugins/custom/datatables/datatables.bundle.js"></script>

    <script>
        $(function () {

            var start = moment().subtract(29, "days");
            var end = moment();

            function cb(start, end) {
                $("#kt_daterangepicker_4").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
            }


            $("#kt_daterangepicker_4").daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    "Today": [moment(), moment()],
                    "Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
                    "Last 7 Days": [moment().subtract(6, "days"), moment()],
                    "Last 30 Days": [moment().subtract(29, "days"), moment()],
                    "This Month": [moment().startOf("month"), moment().endOf("month")],
                    "Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
                }
            }, cb);

            cb(start, end);

            {{--$('#search_form').on('submit', function (e)  {--}}

            {{--    table.draw();--}}
            {{--    // let employee=$('select[name="employee"]').find(":selected").text();--}}
            {{--    e.preventDefault()--}}
            {{--    //stop submit the form, we will post it manually.--}}



            {{--    // Get form--}}


            {{--    // FormData object--}}
            {{--    var data = new FormData(this);--}}

            {{--    // If you want to add an extra field for the FormData--}}

            {{--    // disabled the submit button--}}

            {{--    var startDate = $('#kt_daterangepicker_4').data('daterangepicker').startDate;--}}
            {{--    var endDate = $('#kt_daterangepicker_4').data('daterangepicker').endDate;--}}


            {{--    $.ajax({--}}
            {{--        url: "{{route('activated-surveys.index')}}",--}}
            {{--        type: 'get',--}}
            {{--        data:{--}}
            {{--            'from_date':moment(startDate).format('DD/MM/YYYY') ,--}}
            {{--            'to_date':moment(endDate).format('DD/MM/YYYY') ,--}}
            {{--        },--}}
            {{--        success: function (data) {--}}


            {{--        },--}}
            {{--        error: function (e) {--}}

            {{--        }--}}

            {{--    });--}}


            {{--});--}}
        });
    </script>

    @include('surveys.activated-surveys.evaluated._datatable')
    @include("parts.sweetDelete", ['route' => route('activated-surveys.destroy', ['activated_survey' => ':id'])])
@endpush
