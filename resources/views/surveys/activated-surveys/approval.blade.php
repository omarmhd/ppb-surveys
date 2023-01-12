@extends('layouts.app_admin')
@section('title','صفحة الاعتماد')
@section('toolbar.title','لوحة التحكم')
@section('breadcrumb')
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-400 w-5px h-2px"></span>
    </li>

    <li class="breadcrumb-item text-muted">لوحة التحكم</li>
@endsection
@push('css')


    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet"
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


            <div class="table-responsive">

            <!--begin::Table-->
                <table
                       class="table table-row-bordered gy-5">
                    <!--begin::Table head-->

                    <tr class="">
                        <td class="min-w-10px text-right" style="width: 20%" > النموذج :   <span class="text-muted"> {{$survey->survey->title}}</span></td>


                    </tr>

                    <tr class="">
                        <td class="min-w-10px text-right" style="width: 20%" >المقيم:  <span class="text-muted"> {{$survey->evaluator->full_name}}</span> </td>

                        <td class="text-right" >الموظف: <span class="text-muted"> {{$survey->employee->full_name}}</span>  </td>

                    </tr>
                    <tr class="">
                        <td class="min-w-10px text-right" style="width: 20%"> الحالة : <span class="text-muted">{{$survey->status_print}} </span>  </td>

                        <td class="text-right" > النتيجة :<span class="text-muted"> {{$survey->score}} %</span>   </td>

                    </tr>
                    <tr class="">
                        <td class="min-w-10px text-right" style="width: 20%">  ملاحظات المقيم : </td>
                        <td class="text-right" >
                            <span class="text-muted">{{$survey->evaluator_notes}}</span>
                        </td>

                    </tr>
                    <tr class="">
                        <td class="min-w-20px text-right" >  ملاحظات الموظف: </td>
                        <td class="text-right" > <span class="text-muted">{{$survey->employee_notes}} </span></td>

                    </tr>

                    <!--end::Table head-->
                </table>
                <!--end::Table-->
            </div>
            @if($survey->status=='2')

            <div class="text-center mt-20 ms-20 mb-20">
                <button type="submit" id="btn_approval" class="btn btn-primary" >
                    <span class="indicator-label"><i class="fa fa-save"></i> اعتماد نهائي </span>
                    <span class="indicator-progress">الرجاء الإنتظار...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <a href="{{route("status.update",['type'=>4,'id'=>$survey->id])}}" class="btn btn-secondary"> <i class="fa fa-"></i>طلب إعادة التقيم</a>

            </div>
        @endif
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 13-->
@endsection

@push('js')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    @include("parts.sweetApproval",['id'=>$survey->id])
    @include('surveys.activated-surveys._datatable')
    @include("parts.sweetDelete", ['route' => route('activated-surveys.destroy', ['activated_survey' => ':id'])])
@endpush
