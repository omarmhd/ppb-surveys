@extends('layouts.app_admin')
@section('title','إضافة قسم')
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
                    <a href="{{route('sections.index')}}" class="fw-bolder link-primary">جميع الأقسام</a>.
                </div>
                <!--end::Description-->
            </div>
            <form id="form1" class="form" method="POST" action="javascript:void(0)">

            @csrf
            <!--begin::Input group-->
                <div class="row g-9 mb-8">

                    <div class="col-md-5 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">العنوان</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title=" title "></i>
                        </label>
                        <!--end::Label-->
                        <input id="" type="text" class="form-control form-control-solid"
                               placeholder="عنوان القسم"
                               name="title"/>

                    </div>

                    <div class="col-md-5 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">فئة النموذج</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="فئة النموذج"></i>
                        </label>
                        <!--end::Label-->
                        <input id="" type="text" class="form-control form-control-solid"
                               placeholder="مثال : موظفين تحصيل"
                               name="category"/>

                    </div>


                </div>
                <hr>


                <div id="kt_repeater_1">
                    <h4 class="mb-10">الأسئلة</h4>

                    <div class="">
                        <div class="row mb-2">
                            {{--                        <label class="col-lg-2 col-form-label text-right"> تفاصيل السؤال   <span class="number"></span> :</label>--}}
                            <div data-repeater-list="" class="col-lg-10">
                                <div data-repeater-item="" class="form-group row align-items-center">

                                    <div class="col-md-6">
                                        {{--                                    <label>السؤال:</label>--}}
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="question[]">
                                        <div class="d-md-none mb-2"></div>
                                    </div>

                                    <div class="col-md-4">
                                        <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                            <i class="la la-trash-o"></i>حذف</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group-duplicate" style="display: none">
                        <div class="row mb-2">

                            <div data-repeater-list="" class="col-lg-10">
                                <div data-repeater-item="" class="form-group row align-items-center">

                                    <div class="col-md-6">
                                        {{--                                        <label>السؤال:</label>--}}
                                        <input type="text" class="form-control form-control-solid" disabled placeholder="" name="question[]">
                                        <div class="d-md-none mb-2"></div>


                                    </div>

                                    <div class="col-md-4">
                                        <a href="javascript:;" class="btn btn-sm font-weight-bolder btn-light-danger btn-remove">
                                            <i class="la la-trash-o"></i>حذف</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-10">

                        <div class="col-lg-4">
                            <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-success btn-add">
                                <i class="la la-plus"></i>إضافة سؤال</a>
                        </div>
                    </div>

                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-6">
                            <button type="submit" id="user_submit" class="btn btn-primary">
                                <span class="indicator-label"><i class="fa fa-save"></i> حفظ </span>
                                <span class="indicator-progress">الرجاء الإنتظار...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <a href="{{route("sections.index")}}" class="btn btn-secondary"> <i class="fa fa-"></i>عودة</a>
                            <button type="reset" id="user_cancel" class="btn btn-white me-3">إلغاء</button>
                        </div>
                    </div>
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
    @include("parts.sweetCreate", ['route' => route('sections.store'),'method'=>'post'])
    <script>


        $(function () {

            let i =2;
            $('.btn-add').click(function (e) {
                e.preventDefault();
                var newel = $(this).parent().parent().siblings('.group-duplicate').clone();
                newel.show()
                newel.find('input').prop("disabled", false);
                // newel.find('.number').text(i)
                newel.removeClass('group-duplicate')

                $(newel).insertBefore($(this).parent().parent());

                i++;
            });



            $(document).on("click", ".btn-remove", function (e) {

                e.preventDefault();

                $(this).parent().parent().parent().parent().parent().remove()
                // Create clone of <div class='input-form'>

            });


        });
    </script>

@endpush
