@extends('layouts.app_admin')
@section('title','الإستبيانات')
@section('toolbar.title','لوحة التحكم')
@section('breadcrumb')
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-400 w-5px h-2px"></span>
    </li>

    <li class="breadcrumb-item text-muted">@yield('title')</li>
@endsection
@section('content')
    <!--begin::Form Widget 13-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body py-1">
            <!--begin:Form-->
            <!--begin::Heading-->
            <div class="mb-13 mt-5 text-start">
                <!--begin::Title-->
                <h1 class="mb-3">@yield('title')</h1>
                <!--end::Title-->
                <!--begin::Description-->
                <div class="text-gray-400 fw-bold fs-5">
                    <a href="{{route('users.index')}}" class="fw-bolder link-primary">جميع المستخدمين</a>.
                </div>
                <!--end::Description-->
            </div>
            <form id="form1" class="form" method="POST" action="javascript:void(0)">
            @method("put")
            @csrf
            <!--begin::Input group-->
                <div class="row g-9 mb-8">




                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">عنوان الاستبيان</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title=""></i>
                        </label>
                        <!--end::Label-->
                        <input id="" type="text" class="form-control form-control-solid"
                               placeholder="العنوان"
                               value="{{$survey->title}}"
                               name="title"/>
                    </div>


                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">التفاصيل</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title=""></i>
                        </label>

                        <!--end::Label-->
                        <input id="id_number" type="text" class="form-control form-control-solid"
                               placeholder="التفاصيل "
                               value="{{$survey->description}}"
                               name="description"/>
                    </div>

                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">الأقسام بالترتيب</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title=""></i>
                        </label>
                        <!--end::Label-->
                        <select class="form-control select2 select2-hidden-accessible  form-control-solid"  id="kt_select2_3" name="sections[]" multiple="" data-select2-id="kt_select2_3" tabindex="-1" aria-hidden="true" direction="rtl">
                            @foreach($sections as $section)
                                <option {{in_array($section->id,$survey->sections->pluck("id")->toArray())?"selected":""}} value="{{$section->id}}">{{$section->title}}</option>
                            @endforeach


                        </select>

                    </div>

                </div>


                <div class="text-center mt-20 ms-20 mb-20">
                    <button type="submit" id="user_submit" class="btn btn-primary">
                        <span class="indicator-label"><i class="fa fa-save"></i> حفظ </span>
                        <span class="indicator-progress">الرجاء الإنتظار...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <a href="{{route("users.index")}}" class="btn btn-secondary"> <i class="fa fa-"></i>عودة</a>
                    <button type="reset" id="user_cancel" class="btn btn-white me-3">إلغاء</button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end:Form-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Form Widget 13-->

@endsection
@push('js')

    <script src="https://preview.keenthemes.com//metronic/theme/html/demo1/dist/assets/js/pages/crud/forms/widgets/select2.js?v=7.2.9"></script>
    <script>
        $(function () {
            $('#kt_select2_3, #kt_select2_12_2, #kt_select2_12_3, #kt_select2_12_4').select2({
                placeholder: " اختيار",
            });
        });

    </script>

    @include("parts.sweetCreate", ['route' => route('surveys.update',['survey'=>$survey]),'method'=>'put'])

@endpush
