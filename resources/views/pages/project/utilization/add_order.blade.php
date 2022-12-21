@extends('layouts.app_admin')
@section('sub_title','إضافة الطلبات')
@section('toolbar.title','طلبات ')
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
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-white">إضافة طلب</li>
    <!--end::Item-->
@endsection
@section('content')
    <!--begin::Form Widget 13-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body py-1">
            <!--begin::Heading-->
            <div class="mb-13 mt-5 text-start">
                <!--begin::Title-->
                <h1 class="mb-3">طلب إنتفاع للمواطن</h1>
                <!--end::Title-->
                <!--begin::Description-->
                <div class="text-gray-400 fw-bold fs-5">إضافة طلب إنتفاع
                    <a href="#" class="fw-bolder link-primary">بيانات المشروع</a>.
                </div>
                <!--end::Description-->
            </div>
            <!--end::Heading-->
            <!--begin::Input group-->
            <div class="row g-9 mb-8">
                <!--begin::Col-->
                <div class="col-md-4 fv-row " id="selectCodeProject">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-bold mb-5">
                        <span class="required">كود المشروع</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                           title="إختيار كود المشروع الذي سيتم تسجيل الشقة بإسمه"></i>
                    </label>
                    <!--end::Label-->
                    <!--begin::Select-->
                    <select id="code_project" name="CodeProject" data-control="select2"
                            data-dropdown-parent="#selectCodeProject"
                            data-placeholder="إختار كود المشروع ..." class="form-select form-select-solid"
                            onchange="changeCodeProject()">
                    </select>
                    <!--end::Select-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5"> الإسم المشروع</label>
                    <!--end::Label-->
                    <input id="name_project" type="text" class="form-control" placeholder=" الإسم المشروع" disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">الجهة القائمة على المشرع</label>
                    <!--end::Label-->
                    <input id="sponsor_project" type="text" class="form-control" placeholder="الجهة القائمة على المشرع"
                           disabled/>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row g-9 mb-8">
                <!--begin::Col-->
                <div class="col-md-6 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">تاريخ الإعلان</label>
                    <!--end::Label-->
                    <input id="date_publish" type="text" class="form-control" placeholder="تاريخ الإعلان" disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">نوع المشروع</label>
                    <!--end::Label-->
                    <input id="type_project" type="text" class="form-control" placeholder="نوع المشروع" disabled/>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row g-9 mb-8">
                <!--begin::Col-->
                <div class="col-md-12 fv-row">
                    <!--begin::Label-->
                    <label class="fs-5 fw-bold mb-5">العنوان</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <textarea id="address" class="form-control" rows="3" placeholder="العنوان المشروع"
                              disabled></textarea>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin:Form-->
            <form id="kt_modal_new_target_form" class="form" method="post"
                  action="{{route('utilization.order.store')}}">
            @csrf
                <!--begin::Heading-->
                <div class="mb-13 mt-5 text-start">
                    <!--begin::Description-->
                    <div class="text-gray-400 fw-bold fs-5">إضافة طلب إنتفاع
                        <a href="#" class="fw-bolder link-primary">بيانات رب الأسرة</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-4 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">الإسم مقدم الطلب</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="الإسم مقدم الطلب ( رباعي )"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="الإسم مقدم الطلب رباعي"
                               name="name_applicant"/>

                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">رقم الهوية</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="رقم الهوية المكون من  9 خانات"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="رقم الهوية"
                               name="id_applicant"/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">رقم الجوال</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="رقم الجوال المكون من 10 ارقام مبدوء ب 970"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="رقم الجوال"
                               name="phone_applicant"/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->


                {{--                    <div class="col-md-4 fv-row">--}}
                {{--                        <!--begin::Label-->--}}
                {{--                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">--}}
                {{--                            <span class="required">الإسم الزوج/ة</span>--}}
                {{--                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"--}}
                {{--                               title="الإسم الزوج/ة ( رباعي )"></i>--}}
                {{--                        </label>--}}
                {{--                        <!--end::Label-->--}}
                {{--                        <input type="text" class="form-control form-control-solid" placeholder="الإسم الزوج/ة"--}}
                {{--                               name=""/>--}}
                {{--                    </div>--}}
                <!--end::Col-->
                    <!--begin::Col-->


                    <table class="table  borderless relationships-table">


                        <tr>
                            <td>
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">الإسم الزوج/ة</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                       title="الإسم الزوج/ة ( رباعي )"></i>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="الإسم الزوج/ة"
                                       name=""/></td>

                            <td>
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">رقم الهوية</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                       title="الإسم الزوج/ة ( رباعي )"></i>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="رقم الهوية"
                                       name=""/></td>

                            <td>

                                <div class="my-10">
                                    <button type="button"
                                            class="btn btn-icon btn-bg-secondary btn-active-color-primary btn-sm me-5  btn-add">
                                        <i class="fa fa-plus"></i></button>
                                </div>
                            </td>
                        </tr>


                    </table>

                </div>

                <div class="row g-9 mb-8">
                    <div class="col-md-3 fv-row" id="kt_form_Governoratey">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                            <span class="required">المحافظة</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="المحافظة المقيم فيها حاليا"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Select-->


                        <select name="name_governorate" data-control="select2"
                                data-dropdown-parent="#kt_form_Governoratey"
                                data-placeholder="إختار المحافظة ..."
                                class="form-select form-select-solid name_governorate">

                            @foreach(config("options.governorates") as $key=>$value)

                                <option value="{{$key}}">
                                    {{$key}}
                                </option>

                            @endforeach

                        </select>
                        <!--end::Select-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3 fv-row" id="kt_form_Municipal">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                            <span class="required">البلدية</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="البلدية التابعة للمنطقة التي انت فيها"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Select-->
                        <select name="municipal" data-control="select2" data-dropdown-parent="#kt_form_Municipal"
                                data-placeholder="إختار البلدية ..." class="form-select form-select-solid">
                            <option value="">إختار البلدية ...</option>
                            <option value="ffff">ffff</option>

                        </select>
                    </div>

                    <div class="col-md-3 fv-row" id="kt_form_City">

                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                            <span class="required">مدينة</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="المدينة المقيم فيها حاليا"></i>
                        </label>

                        <select name="city" data-control="select2" data-dropdown-parent="#kt_form_City"
                                data-placeholder="إختار المدينة ..." class="form-select cities form-select-solid">


                        </select>

                    </div>

                    <div class="col-md-3 fv-row" id="kt_form_nearest">

                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                            <span class="required">أقرب مؤسسة أو مسجد</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="Your payment statements may very based on selected country"></i>
                        </label>


                        <input type="text" name="landmark_near" class="form-control form-control-solid"
                               placeholder="أقرب مؤسسة أو مسجد">

                    </div>
                </div>

                <div class="row g-9 mb-8 mt-5">

                    <div class="row col-md-6 fv-row">

                        <label class="col-md-4 d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">الحالة الإجتماعية</span>
                        </label>


                        <div class="row col-md-7">
                            <!--begin::Checkbox-->
                            <label class="col-md-3 form-check form-check-custom form-check-solid">
                                <input class="form-check-input h-20px w-20px" type="radio" name="social_status"
                                       value="اعزب" id="social_status1"/>
                                <span class="form-check-label fw-bold">اعزب</span>
                            </label>

                            <label class="col-md-3 form-check form-check-custom form-check-solid">
                                <input class="form-check-input h-20px w-20px" type="radio" name="social_status"
                                       value="متزوج" id="social_status2"/>
                                <span class="form-check-label fw-bold">متزوج</span>
                            </label>

                            <label class="col-md-3 form-check form-check-custom form-check-solid">
                                <input class="form-check-input h-20px w-20px" type="radio" name="social_status"
                                       value="مطلق" id="social_status3"/>
                                <span class="form-check-label fw-bold">مطلق</span>
                            </label>

                            <label class="col-md-3 form-check form-check-custom form-check-solid">
                                <input class="form-check-input h-20px w-20px" type="radio" name="social_status"
                                       value="أرمل" id="social_status4"/>
                                <span class="form-check-label fw-bold">أرمل</span>
                            </label>


                        </div>
                    </div>


                    <div class="row col-md-6 fv-row">
                        <label class="col-md-3 d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">تفاصيل العمل</span>
                        </label>


                        <div class="row col-md-9">

                            <label class="col-md-4 form-check form-check-custom form-check-solid">
                                <input class="form-check-input h-20px w-20px" type="radio" name="work_details"
                                       value="موظف حكومي" id="job_status1"/>
                                <span class="form-check-label fw-bold">موظف حكومي</span>
                            </label>


                            <label class="col-md-5 form-check form-check-custom form-check-solid">
                                <input class="form-check-input h-20px w-20px" type="radio" name="work_details"
                                       value="موظف قطاع خاص" id="job_status2"/>
                                <span class="form-check-label fw-bold">موظف قطاع خاص</span>
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Checkbox-->
                            <label class="col-md-3 form-check form-check-custom form-check-solid">
                                <input class="form-check-input h-20px w-20px" type="radio" name="work_details"
                                       value="لايوجد" id="job_status3"/>
                                <span class="form-check-label fw-bold">لايوجد</span>
                            </label>
                            <!--end::Checkbox-->
                        </div>
                        <!--end::Checkboxes-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Heading-->
                <div class="mb-13 mt-15 text-start">
                    <!--begin::Description-->
                    <div class="text-gray-400 fw-bold fs-5">إضافة طلب إنتفاع
                        <a href="#" class="fw-bolder link-primary">بيانات الأسرة والمقيمين</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-4 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">عدد الأسر المقيمة في نفس الوحدة</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="عدد المقيمين"
                               name="number_families"/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">إجمالي عدد اللإفراد المقيمين في نفس الوحدة</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="إجمالي عدد اللإفراد المقيمين في نفس الوحدة"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" name="total_people" class="form-control form-control-solid"
                               placeholder="عدد اللإفراد"
                        />
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">عدد أفراد أسرة مقدم الطلب</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="عدد أفراد أسرة مقدم الطلب"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="عدد اللإفراد"
                               name="number_family_members"/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">قيمة دخل الأسرة</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="قيمة دخل الأسرة ( الشيكل )"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="قيمة دخل الأسرة"
                               name="value_income"/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">مصادر الدخل</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="مصادر الدخل"
                               name="sources_income"/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row g-9 mb-8 mt-5">
                    <!--begin::Col-->
                    <div class="row col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="col-md-4 d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">هل العائلة مستفيدة من الشؤون الإجتماعية</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Checkboxes-->
                        <div class="row col-md-7">
                            <!--begin::Checkbox-->
                            <label class="col-md-3 form-check form-check-custom form-check-solid">
                                <input class="form-check-input h-20px w-20px" type="radio" name="benefit_affairs"
                                       value="نعم" id="social_affairs1"/>
                                <span class="form-check-label fw-bold">نعم</span>
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Checkbox-->
                            <label class="col-md-3 form-check form-check-custom form-check-solid">
                                <input class="form-check-input h-20px w-20px" type="radio" name="benefit_affairs"
                                       value="لا" id="social_affairs2"/>
                                <span class="form-check-label fw-bold">لا</span>
                            </label>
                            <!--end::Checkbox-->
                        </div>
                        <!--end::Checkboxes-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="row col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">قيمة الدفعة المالية من الشؤون</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="قيمة الدفعة المالية من الشؤون ( الشيكل )"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid"
                               placeholder="قيمة الدفعة المالية من الشؤون" name="payment_affairs"/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row g-9 mb-8 mt-5">
                    <!--begin::Col-->
                    <div class="row col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="col-md-4 d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">هل يوجد في العائة مرضى بأمراض مزمنة</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Checkboxes-->
                        <div class="row col-md-7">
                            <!--begin::Checkbox-->
                            <label class="col-md-3 form-check form-check-custom form-check-solid">
                                <input class="form-check-input h-20px w-20px" type="radio" name="existing_patients"
                                       value="نعم"
                                       id="patients1"/>
                                <span class="form-check-label fw-bold">نعم</span>
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Checkbox-->
                            <label class="col-md-3 form-check form-check-custom form-check-solid">
                                <input class="form-check-input h-20px w-20px" type="radio" name="existing_patients"
                                       value="لا"
                                       id="patients2"/>
                                <span class="form-check-label fw-bold">لا</span>
                            </label>
                            <!--end::Checkbox-->
                        </div>
                        <!--end::Checkboxes-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="row col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">عدد المرضى</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="عدد المرضى"
                               name="number_patients"/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center">
                    <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-white me-3">إلغاء</button>
                    <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                        <span class="indicator-label">إرسال الطلب</span>
                        <span class="indicator-progress">الرجاء الإنتظار...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
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
    <script>
        $(document).on('click', '.btn-add ', function () {

            let trCount = $('.relationships-table').find('tr:last').length;
            let numberIncr = trCount > 0 ? parseInt($('.relationships-table').find('tr:last').attr('id')) + 1 : 0;


            $('.relationships-table').append($(`
   <tr id="0">
                            <td>
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">الإسم الزوج/ة</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                   title="الإسم الزوج/ة ( رباعي )"></i>
                            </label>
                                    <input type="text" class="form-control form-control-solid" placeholder="الإسم الزوج/ة"
                                             name=""/></td>

                                <td>
                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">رقم الهوية</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                           title="الإسم الزوج/ة ( رباعي )"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" placeholder="رقم الهوية"
                                                   name=""/></td>

                                <td>

                                    <div class="my-10">
                                    <button type="button"  class="btn btn-icon btn-bg-secondary btn-active-color-primary btn-sm me-5 btn-add" > <i class="fa fa-plus"></i></button>
                                    <button type="button" class="btn btn-icon btn-bg-secondary btn-active-color-primary btn-sm me-5  btn-remove"><i class="fa fa-minus"></i></button>
                                    </div>
                                </td>
                            </tr>
`));
        })

        $(document).on('click', '.btn-remove', function (e) {
            $(this).parent().parent().parent().remove();

        });
        $(document).on('keyup', 'input[name=id_applicant]', function (e) {
            var id = $(this).val();

            if (id.toString().length == 9) {
                var url = "{{route('utilization.order.search.id',['id'=>':id'])}}"
                url = url.replace(':id', id);
                $.ajax({
                    type: 'get',
                    url: url,
                    data: {},
                    cache: false,

                    success: (data) => {
                        var data_re = JSON.parse(data)

                        if (data_re) {
                            console.log(data_re[0])
                            var socialstatus = data_re[0].SOCIAL_STATUS
                            console.log(socialstatus)
                            $('select[name=name_governorate]').val(data_re[0].CI_REGION).change();
                            $('input[name=landmark_near]').val(data_re[0].STREET_ARB);
                            $("input[name=social_status][value=" + socialstatus + "]").attr('checked', 'checked');
                            $('select[name=city]').val(data_re[0].CI_CITY).change();
                            $('input[name=name_applicant]').val(data_re[0].ENG_NAME);
                            $('select[name=name_governorate]').val(data_re[0].CI_REGION).change();
                        }


                    },
                })

            }

            if (id == "") {

                $('#kt_modal_new_target_form').trigger("reset");
            }


        });


        $(document).on('change', '.name_governorate', function () {
            $('select[name="city"] option').remove()
            $('select[name="city"]').append('<option></option>');

            {{--var arr={{config('options.governorates')}}--}}

            var rf = JSON.stringify({!!json_encode(config('options.governorates'))!!});
            var arr = jQuery.parseJSON(rf);

            $.each(arr[$(this).val()], function (key, value) {

                var newOption = new Option(value, value, false, false);
                $('select[name="city"]').append(newOption).trigger('change');

            })


        });

        $.ajax({
            type: 'get',
            url: "{{route('Project.show',['Project'=>'0'])}}",
            contentType: false,
            processData: false,
            success: (data) => {
                var opt = document.createElement('option');
                opt.value = "";
                opt.innerHTML = "إختار كود المشروع ...";
                code_project.appendChild(opt);
                JSON.parse(data).forEach((e => {
                    var opt = document.createElement('option');
                    opt.value = e.code;
                    opt.innerHTML = e.code;
                    code_project.appendChild(opt);
                }));
            }
        });
        function changeCodeProject() {
            let url = "{{route('Project.show',['Project'=>':project'])}}";
            url = url.replace(':project', $('#code_project').val());
            $.ajax({
                type: 'get',
                url: url,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    JSON.parse(data).forEach((e => {
                        $('#name_project').val(e.name);
                        $('#sponsor_project').val(e.sponsor);
                        $('#date_publish').val(e.date_publish);
                        $('#type_project').val((e.type_project == 'free') ? "مجاني" : "مدفوع");
                        var address = JSON.parse(e.address);
                        $('#address').val(address.Governorate + " - " + address.City + " - " + address.address);
                        $('#id_project').val(e.id);
                        document.getElementById('num_building').disabled = false;
                        document.getElementById('num_apartment').disabled = false;
                        document.getElementById('floor').disabled = false;
                        document.getElementById('size_apartment').disabled = false;
                        document.getElementById('orientation').disabled = false;
                        document.getElementById('status').disabled = false;
                    }));
                }
            });
        }
    </script>

@endpush
