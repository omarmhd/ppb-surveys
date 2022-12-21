@extends('layouts.app_admin')
@section('sub_title','عرض شقة سكنية')
@section('toolbar.title','لوحة التحكم')
@section('toolbar.subTitle')
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">المنتفعين</li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">إدارة الشقق السكنية</li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-white">إضافة إنتفاع شقة</li>
    <!--end::Item-->
@endsection
@section('content')
    <!--begin::Form Widget 13-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body py-1">
            <!--begin:Form-->
            <!--begin::Heading-->
            <!--begin::Heading-->
            <div class="mb-13 mt-5 text-start">
                <!--begin::Title-->
                <h1 class="mb-3">الشقق السكنية</h1>
                <!--end::Title-->
                <!--begin::Description-->
                <div class="text-gray-400 fw-bold fs-5">وزارة الأشغال العامة والإسكان
                    <a href="javascript:void(0)" class="fw-bolder link-primary">بيانات الشقة</a>.
                </div>
                <!--end::Description-->
            </div>
            <!--end::Heading-->
            <!--begin::Input group-->
            <div class="row g-9 mb-8">
                <!--begin::Col-->
                <div class="col-md-3 fv-row " id="selectNumApartment">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-bold mb-5">
                        <span class="required">الشقة</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                           title="إختيار كود المشروع الذي سيتم تسجيل الشقة بإسمه"></i>
                    </label>
                    <!--end::Label-->
                    <!--begin::Select-->
                    <select id="num_apartment" name="numApartment" data-control="select2"
                            data-dropdown-parent="#selectNumApartment"
                            data-placeholder="إختار الشقة ..." class="form-select form-select-solid"
                            onchange="changeNumApartment()">
                        <option value="">إختار الشقة ...</option>
                        @foreach($apartments as $apartment)
                            <option
                                value="{{$apartment->id}}">{{'المشروع : '.$apartment->code .' - '.'الشقة : '.$apartment->num_apartment }}</option>
                        @endforeach
                    </select>
                    <!--end::Select-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5"> كود المشروع</label>
                    <!--end::Label-->
                    <input id="code_project" type="text" class="form-control" placeholder=" كود المشروع" disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5"> الإسم المشروع</label>
                    <!--end::Label-->
                    <input id="name_project" type="text" class="form-control" placeholder=" الإسم المشروع" disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">الجهة القائمة على المشروع</label>
                    <!--end::Label-->
                    <input id="sponsor_project" type="text" class="form-control" placeholder="الجهة القائمة على المشروع"
                           disabled/>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row g-9 mb-8">
                <!--begin::Col-->
                <div class="col-md-4 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">تاريخ الإعلان</label>
                    <!--end::Label-->
                    <input id="date_publish" type="text" class="form-control" placeholder="تاريخ الإعلان" disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">نوع المشروع</label>
                    <!--end::Label-->
                    <input id="type_project" type="text" class="form-control" placeholder="نوع المشروع" disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">رقم العمارة</label>
                    <!--end::Label-->
                    <input id="num_building" type="text" class="form-control" placeholder="رقم العمارة" disabled/>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row g-9 mb-8">
                <!--begin::Col-->
                <div class="col-md-3 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">رقم الطابق</label>
                    <!--end::Label-->
                    <input id="floor" type="text" class="form-control" placeholder="رقم الطابق" disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">مساحة الشقة</label>
                    <!--end::Label-->
                    <input id="size_apartment" type="text" class="form-control" placeholder="مساحة الشقة" disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">إتجاه الشقة</label>
                    <!--end::Label-->
                    <input id="orientation" type="text" class="form-control" placeholder="إتجاه الشقة" disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">حالة الشقة</label>
                    <!--end::Label-->
                    <input id="status" type="text" class="form-control" placeholder="حالة الشقة" disabled/>
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
            <div class="mb-13 mt-5 text-start">
                <!--begin::Description-->
                <div class="text-gray-400 fw-bold fs-5">وزارة الأشغال العامة والإسكان
                    <a href="javascript:void(0)" class="fw-bolder link-primary">بيانات الطلب</a>.
                </div>
                <!--end::Description-->
            </div>
            <!--end::Heading-->
            <!--begin::Input group-->
            <div class="row g-9 mb-8">
                <!--begin::Col-->
                <div class="col-md-4 fv-row " id="selectNumOrder">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-bold mb-5">
                        <span class="required">الطلب</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                           title="إختيار كود المشروع الذي سيتم تسجيل الشقة بإسمه"></i>
                    </label>
                    <!--end::Label-->
                    <!--begin::Select-->
                    <select id="num_order" name="numOrder" data-control="select2"
                            data-dropdown-parent="#selectNumOrder"
                            data-placeholder="إختار الطلب ..." class="form-select form-select-solid"
                            onchange="changeNumOrder()">
                        <option value="">إختار الطلب ...</option>
                        @foreach($orders as $order)
                            <option
                                value="{{$order->id}}">{{$order->name_applicant .' - '.$order->id_applicant }}</option>
                        @endforeach
                    </select>
                    <!--end::Select-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">رقم الهوية</label>
                    <!--end::Label-->
                    <input id="id_applicant" type="text" class="form-control" placeholder="رقم الهوية" disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">الإسم مقدم الطلب</label>
                    <!--end::Label-->
                    <input id="name_applicant" type="text" class="form-control" placeholder="الإسم مقدم الطلب"
                           disabled/>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row g-9 mb-8">
                <!--begin::Col-->
                <div class="col-md-3 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">رقم الجوال</label>
                    <!--end::Label-->
                    <input id="phone_applicant" type="text" class="form-control" placeholder="رقم الجوال" disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">الحالة الإجتماعية</label>
                    <!--end::Label-->
                    <input id="social_status" type="text" class="form-control" placeholder="الحالة الإجتماعية"
                           disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">العمل</label>
                    <!--end::Label-->
                    <input id="work_details" type="text" class="form-control" placeholder="العمل"
                           disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">المرضى</label>
                    <!--end::Label-->
                    <input id="patients" type="text" class="form-control" placeholder="0 - المرضى"
                           disabled/>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row g-9 mb-8">
                <!--begin::Col-->
                <div class="col-md-3 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">المحافظة</label>
                    <!--end::Label-->
                    <input id="name_governorate" type="text" class="form-control" placeholder="المحافظة" disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">البلدية</label>
                    <!--end::Label-->
                    <input id="municipal" type="text" class="form-control" placeholder="البلدية" disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">مدينة</label>
                    <!--end::Label-->
                    <input id="city" type="text" class="form-control" placeholder="مدينة"
                           disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">أقرب مؤسسة أو مسجد</label>
                    <!--end::Label-->
                    <input id="landmark_near" type="text" class="form-control" placeholder="أقرب مؤسسة أو مسجد"
                           disabled/>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row g-9 mb-8">
                <!--begin::Col-->
                <div class="col-md-4 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">عدد الأسر المقيمة في نفس الوحدة</label>
                    <!--end::Label-->
                    <input id="number_families" type="text" class="form-control" placeholder="عدد الأسر المقيمة "
                           disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">إجمالي عدد اللإفراد المقيمين في نفس
                        الوحدة</label>
                    <!--end::Label-->
                    <input id="total_people" type="text" class="form-control" placeholder="عدد الأفراد المقيمة"
                           disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">عدد أفراد أسرة مقدم الطلب</label>
                    <!--end::Label-->
                    <input id="number_family_members" type="text" class="form-control"
                           placeholder="عدد أفراد أسرة مقدم الطلب"
                           disabled/>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row g-9 mb-8">
                <!--begin::Col-->
                <div class="col-md-3 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">قيمة دخل الأسرة</label>
                    <!--end::Label-->
                    <input id="value_income" type="text" class="form-control" placeholder="قيمة دخل الأسرة" disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">مصادر الدخل</label>
                    <!--end::Label-->
                    <input id="sources_income" type="text" class="form-control" placeholder="مصادر الدخل" disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">مستفيد من الشؤون الإجتماعية</label>
                    <!--end::Label-->
                    <input id="benefit_affairs" type="text" class="form-control"
                           placeholder="مستفيدة من الشؤون الإجتماعية"
                           disabled/>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-5">قيمة الدفعة المالية من الشؤون</label>
                    <!--end::Label-->
                    <input id="payment_affairs" type="text" class="form-control" placeholder="قيمة الدفعة" disabled/>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Heading-->
            <div class="mb-13 mt-15 text-start">
                <!--begin::Description-->
                <div class="text-gray-400 fw-bold fs-5">وزارة الأشغال العامة والإسكان
                    <a href="javascript:void(0)" class="fw-bolder link-primary">بيانات العقد</a>.
                </div>
                <!--end::Description-->
            </div>
            <!--end::Heading-->
            <iframe id="beneficiaries_iframe" name="beneficiaries_iframe" src=""
                    class="invisible d-none visually-hidden"></iframe>
            <form id="beneficiaries_form" class="form" action="{{route('BeneficiariesBuilding.store')}}" method="POST"
                  target="beneficiaries_iframe">
                @csrf
                <input id="id_apartment" type="hidden" name="id_apartment"/>
                <input id="id_order" type="hidden" name="id_order"/>
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-4 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">نوع العقد</span>
                        </label>
                        <!--end::Label-->
                        <select id="type_contract" class="form-select form-select-solid" data-control="select2"
                                data-hide-search="true"
                                data-placeholder="نوع العقد" name="type_contract">
                            <option value="">نوع العقد</option>
                            <option value="قيد الاجراء">قيد الاجراء</option>
                            <option value="بيع إبتدائي">بيع إبتدائي</option>
                            <option value="بيع نهائي">بيع نهائي</option>
                            <option value="عارية">عارية</option>
                            <option value="أجار">أجار</option>
                        </select>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">طبيعة العقد</span>
                        </label>
                        <!--end::Label-->
                        <select id="nature_contract" class="form-select form-select-solid" data-control="select2"
                                data-hide-search="true"
                                data-placeholder="طبيعة العقد" name="nature_contract">
                            <option value="">طبيعة العقد</option>
                            <option value="بيع إبتدائي">أقساط</option>
                            <option value="بيع نهائي">بيع</option>
                            <option value="عارية">اعارة</option>
                            <option value="أجار">أجار</option>
                        </select>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 fv-row" id="select_year_infringement">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">سنة التعدي</span>
                        </label>
                        <!--begin::Select-->
                        <select id="year_infringement" name="year_infringement" data-control="select2"
                                data-dropdown-parent="#select_year_infringement"
                                data-placeholder="إختار السنة ..." class="form-select form-select-solid">
                            <option value="">إختار السنة ...</option>
                            @for($i=\Carbon\Carbon::now()->year;$i>1400;$i--)
                                <option
                                    value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                        <!--end::Select-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-3 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">تاريخ العقد</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <div class="symbol symbol-20px me-4 position-absolute ms-4">
							    <span class="symbol-label bg-secondary">
								    <span class="svg-icon">
										<svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             width="24px" height="24px"
                                             viewBox="0 0 24 24" version="1.1">
											 <g stroke="none" stroke-width="1"
                                                fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24"
                                                      height="24"/>
												<rect fill="#000000" opacity="0.3"
                                                      x="4" y="4" width="4"
                                                      height="4" rx="1"/>
												<path
                                                    d="M5,10 L7,10 C7.55228475,10 8,10.4477153 8,11 L8,13 C8,13.5522847 7.55228475,14 7,14 L5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,7 C14,7.55228475 13.5522847,8 13,8 L11,8 C10.4477153,8 10,7.55228475 10,7 L10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L11,14 C10.4477153,14 10,13.5522847 10,13 L10,11 C10,10.4477153 10.4477153,10 11,10 Z M17,4 L19,4 C19.5522847,4 20,4.44771525 20,5 L20,7 C20,7.55228475 19.5522847,8 19,8 L17,8 C16.4477153,8 16,7.55228475 16,7 L16,5 C16,4.44771525 16.4477153,4 17,4 Z M17,10 L19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 L17,14 C16.4477153,14 16,13.5522847 16,13 L16,11 C16,10.4477153 16.4477153,10 17,10 Z M5,16 L7,16 C7.55228475,16 8,16.4477153 8,17 L8,19 C8,19.5522847 7.55228475,20 7,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,17 C4,16.4477153 4.44771525,16 5,16 Z M11,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 L10,17 C10,16.4477153 10.4477153,16 11,16 Z M17,16 L19,16 C19.5522847,16 20,16.4477153 20,17 L20,19 C20,19.5522847 19.5522847,20 19,20 L17,20 C16.4477153,20 16,19.5522847 16,19 L16,17 C16,16.4477153 16.4477153,16 17,16 Z"
                                                    fill="#000000"/>
											 </g>
										</svg>
									</span>
								</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Datepicker-->
                            <input id="date_contract" type="text" class="form-control form-control-solid ps-12"
                                   placeholder="تاريخ العقد"
                                   name="date_contract"/>
                            <!--end::Datepicker-->

                        </div>
                        <!--end::Input-->

                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">ثمن العقد</span>
                        </label>
                        <!--end::Label-->
                        <input id="contract_pricet" type="text" class="form-control form-control-solid"
                               placeholder="ثمن العقد"
                               name="contract_price"/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">تاريخ ملحق العقد</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <div class="symbol symbol-20px me-4 position-absolute ms-4">
							    <span class="symbol-label bg-secondary">
								    <span class="svg-icon">
										<svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             width="24px" height="24px"
                                             viewBox="0 0 24 24" version="1.1">
											 <g stroke="none" stroke-width="1"
                                                fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24"
                                                      height="24"/>
												<rect fill="#000000" opacity="0.3"
                                                      x="4" y="4" width="4"
                                                      height="4" rx="1"/>
												<path
                                                    d="M5,10 L7,10 C7.55228475,10 8,10.4477153 8,11 L8,13 C8,13.5522847 7.55228475,14 7,14 L5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,7 C14,7.55228475 13.5522847,8 13,8 L11,8 C10.4477153,8 10,7.55228475 10,7 L10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L11,14 C10.4477153,14 10,13.5522847 10,13 L10,11 C10,10.4477153 10.4477153,10 11,10 Z M17,4 L19,4 C19.5522847,4 20,4.44771525 20,5 L20,7 C20,7.55228475 19.5522847,8 19,8 L17,8 C16.4477153,8 16,7.55228475 16,7 L16,5 C16,4.44771525 16.4477153,4 17,4 Z M17,10 L19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 L17,14 C16.4477153,14 16,13.5522847 16,13 L16,11 C16,10.4477153 16.4477153,10 17,10 Z M5,16 L7,16 C7.55228475,16 8,16.4477153 8,17 L8,19 C8,19.5522847 7.55228475,20 7,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,17 C4,16.4477153 4.44771525,16 5,16 Z M11,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 L10,17 C10,16.4477153 10.4477153,16 11,16 Z M17,16 L19,16 C19.5522847,16 20,16.4477153 20,17 L20,19 C20,19.5522847 19.5522847,20 19,20 L17,20 C16.4477153,20 16,19.5522847 16,19 L16,17 C16,16.4477153 16.4477153,16 17,16 Z"
                                                    fill="#000000"/>
											 </g>
										</svg>
									</span>
								</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Datepicker-->
                            <input id="contract_extension_date" type="text"
                                   class="form-control form-control-solid ps-12"
                                   placeholder="تاريخ ملحق العقد"
                                   name="contract_extension_date"/>
                            <!--end::Datepicker-->

                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">ثمن ملحق العقد</span>
                        </label>
                        <!--end::Label-->
                        <input id="contract_extension_price" type="text" class="form-control form-control-solid"
                               placeholder="ثمن ملحق العقد"
                               name="contract_extension_price"/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-3 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">دفعة مقدمة</span>
                        </label>
                        <!--end::Label-->
                        <input id="advance_payment" type="text" class="form-control form-control-solid"
                               placeholder="دفعة مقدمة"
                               name="advance_payment"/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">مبالغ أخرى مسددة</span>
                        </label>
                        <!--end::Label-->
                        <input id="other_amounts_paid" type="text" class="form-control form-control-solid"
                               placeholder="مبالغ أخرى مسددة"
                               name="other_amounts_paid"/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">أضرار الشقة</span>
                        </label>
                        <!--end::Label-->
                        <input id="apartment_damage" type="text" class="form-control form-control-solid"
                               placeholder="أضرار الشقة"
                               name="apartment_damage"/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Heading-->
                <div class="mb-13 mt-15 text-start">
                    <!--begin::Description-->
                    <div class="text-gray-400 fw-bold fs-5">وزارة الأشغال العامة والإسكان
                        <a href="javascript:void(0)" class="fw-bolder link-primary">بيانات الكفلاء</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <div id="guarantors">
                </div>
                <!--begin::Heading-->
                <div class="mb-13 mt-15 text-start">
                    <!--begin::Description-->
                    <div class="text-gray-400 fw-bold fs-5">وزارة الأشغال العامة والإسكان
                        <a href="javascript:void(0)" class="fw-bolder link-primary">بيانات الأقساط</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <div id="installment">
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-3 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">طبيعة القسط</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid"
                                   placeholder="طبيعة القسط"
                                   name="nature_installment[]"/>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-3 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">قيمة القسط</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid"
                                   placeholder="قيمة القسط"
                                   name="value_installment[]"/>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">تاريخ بدء سداد</span>
                            </label>
                            <!--end::Label-->

                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <div class="symbol symbol-20px me-4 position-absolute ms-4">
							    <span class="symbol-label bg-secondary">
								    <span class="svg-icon">
										<svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             width="24px" height="24px"
                                             viewBox="0 0 24 24" version="1.1">
											 <g stroke="none" stroke-width="1"
                                                fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24"
                                                      height="24"/>
												<rect fill="#000000" opacity="0.3"
                                                      x="4" y="4" width="4"
                                                      height="4" rx="1"/>
												<path
                                                    d="M5,10 L7,10 C7.55228475,10 8,10.4477153 8,11 L8,13 C8,13.5522847 7.55228475,14 7,14 L5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,7 C14,7.55228475 13.5522847,8 13,8 L11,8 C10.4477153,8 10,7.55228475 10,7 L10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L11,14 C10.4477153,14 10,13.5522847 10,13 L10,11 C10,10.4477153 10.4477153,10 11,10 Z M17,4 L19,4 C19.5522847,4 20,4.44771525 20,5 L20,7 C20,7.55228475 19.5522847,8 19,8 L17,8 C16.4477153,8 16,7.55228475 16,7 L16,5 C16,4.44771525 16.4477153,4 17,4 Z M17,10 L19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 L17,14 C16.4477153,14 16,13.5522847 16,13 L16,11 C16,10.4477153 16.4477153,10 17,10 Z M5,16 L7,16 C7.55228475,16 8,16.4477153 8,17 L8,19 C8,19.5522847 7.55228475,20 7,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,17 C4,16.4477153 4.44771525,16 5,16 Z M11,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 L10,17 C10,16.4477153 10.4477153,16 11,16 Z M17,16 L19,16 C19.5522847,16 20,16.4477153 20,17 L20,19 C20,19.5522847 19.5522847,20 19,20 L17,20 C16.4477153,20 16,19.5522847 16,19 L16,17 C16,16.4477153 16.4477153,16 17,16 Z"
                                                    fill="#000000"/>
											 </g>
										</svg>
									</span>
								</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Datepicker-->
                                <input type="text" class="form-control form-control-solid payment_start_date ps-12"
                                       placeholder="تاريخ بدء سداد"
                                       name="payment_start_date[]"/>
                                <!--end::Datepicker-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <div class="row col-md-2 fv-row pt-5" id="installment-0">
                            <button type="button"
                                    class="btn btn-icon btn-bg-secondary btn-active-color-primary btn-sm w-25 h-50 mt-12"
                                    onclick="add_installment('installment-0');">
                                <span class="indicator-label">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             width="24px" height="24px"
                                             viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/>
                                                <rect fill="#000000" opacity="0.3"
                                                      transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                      x="4"
                                                      y="11" width="16" height="2" rx="1"/>
                                            </g>
                                        </svg>
                                    </span>
                                </span>
                                <span class="indicator-progress">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path
                                                d="M19.5,10.5 L21,10.5 C21.8284271,10.5 22.5,11.1715729 22.5,12 C22.5,12.8284271 21.8284271,13.5 21,13.5 L19.5,13.5 C18.6715729,13.5 18,12.8284271 18,12 C18,11.1715729 18.6715729,10.5 19.5,10.5 Z M16.0606602,5.87132034 L17.1213203,4.81066017 C17.7071068,4.22487373 18.6568542,4.22487373 19.2426407,4.81066017 C19.8284271,5.39644661 19.8284271,6.34619408 19.2426407,6.93198052 L18.1819805,7.99264069 C17.5961941,8.57842712 16.6464466,8.57842712 16.0606602,7.99264069 C15.4748737,7.40685425 15.4748737,6.45710678 16.0606602,5.87132034 Z M16.0606602,18.1819805 C15.4748737,17.5961941 15.4748737,16.6464466 16.0606602,16.0606602 C16.6464466,15.4748737 17.5961941,15.4748737 18.1819805,16.0606602 L19.2426407,17.1213203 C19.8284271,17.7071068 19.8284271,18.6568542 19.2426407,19.2426407 C18.6568542,19.8284271 17.7071068,19.8284271 17.1213203,19.2426407 L16.0606602,18.1819805 Z M3,10.5 L4.5,10.5 C5.32842712,10.5 6,11.1715729 6,12 C6,12.8284271 5.32842712,13.5 4.5,13.5 L3,13.5 C2.17157288,13.5 1.5,12.8284271 1.5,12 C1.5,11.1715729 2.17157288,10.5 3,10.5 Z M12,1.5 C12.8284271,1.5 13.5,2.17157288 13.5,3 L13.5,4.5 C13.5,5.32842712 12.8284271,6 12,6 C11.1715729,6 10.5,5.32842712 10.5,4.5 L10.5,3 C10.5,2.17157288 11.1715729,1.5 12,1.5 Z M12,18 C12.8284271,18 13.5,18.6715729 13.5,19.5 L13.5,21 C13.5,21.8284271 12.8284271,22.5 12,22.5 C11.1715729,22.5 10.5,21.8284271 10.5,21 L10.5,19.5 C10.5,18.6715729 11.1715729,18 12,18 Z M4.81066017,4.81066017 C5.39644661,4.22487373 6.34619408,4.22487373 6.93198052,4.81066017 L7.99264069,5.87132034 C8.57842712,6.45710678 8.57842712,7.40685425 7.99264069,7.99264069 C7.40685425,8.57842712 6.45710678,8.57842712 5.87132034,7.99264069 L4.81066017,6.93198052 C4.22487373,6.34619408 4.22487373,5.39644661 4.81066017,4.81066017 Z M4.81066017,19.2426407 C4.22487373,18.6568542 4.22487373,17.7071068 4.81066017,17.1213203 L5.87132034,16.0606602 C6.45710678,15.4748737 7.40685425,15.4748737 7.99264069,16.0606602 C8.57842712,16.6464466 8.57842712,17.5961941 7.99264069,18.1819805 L6.93198052,19.2426407 C6.34619408,19.8284271 5.39644661,19.8284271 4.81066017,19.2426407 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        </g>
                                    </svg>
                                </span>
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <button type="button"
                                    class="btn btn-icon btn-bg-secondary btn-active-color-primary btn-sm ms-3 w-25 h-50 mt-12 invisible"
                                    onclick="$(this).parent().parent().remove()">
                                <span class="indicator-label">
                                    <span class="svg-icon svg-icon-3 svg-icon-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"/>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"/>
                                                    </g>
                                        </svg>
                                    </span>
                                </span>
                                <span class="indicator-progress">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path
                                                d="M19.5,10.5 L21,10.5 C21.8284271,10.5 22.5,11.1715729 22.5,12 C22.5,12.8284271 21.8284271,13.5 21,13.5 L19.5,13.5 C18.6715729,13.5 18,12.8284271 18,12 C18,11.1715729 18.6715729,10.5 19.5,10.5 Z M16.0606602,5.87132034 L17.1213203,4.81066017 C17.7071068,4.22487373 18.6568542,4.22487373 19.2426407,4.81066017 C19.8284271,5.39644661 19.8284271,6.34619408 19.2426407,6.93198052 L18.1819805,7.99264069 C17.5961941,8.57842712 16.6464466,8.57842712 16.0606602,7.99264069 C15.4748737,7.40685425 15.4748737,6.45710678 16.0606602,5.87132034 Z M16.0606602,18.1819805 C15.4748737,17.5961941 15.4748737,16.6464466 16.0606602,16.0606602 C16.6464466,15.4748737 17.5961941,15.4748737 18.1819805,16.0606602 L19.2426407,17.1213203 C19.8284271,17.7071068 19.8284271,18.6568542 19.2426407,19.2426407 C18.6568542,19.8284271 17.7071068,19.8284271 17.1213203,19.2426407 L16.0606602,18.1819805 Z M3,10.5 L4.5,10.5 C5.32842712,10.5 6,11.1715729 6,12 C6,12.8284271 5.32842712,13.5 4.5,13.5 L3,13.5 C2.17157288,13.5 1.5,12.8284271 1.5,12 C1.5,11.1715729 2.17157288,10.5 3,10.5 Z M12,1.5 C12.8284271,1.5 13.5,2.17157288 13.5,3 L13.5,4.5 C13.5,5.32842712 12.8284271,6 12,6 C11.1715729,6 10.5,5.32842712 10.5,4.5 L10.5,3 C10.5,2.17157288 11.1715729,1.5 12,1.5 Z M12,18 C12.8284271,18 13.5,18.6715729 13.5,19.5 L13.5,21 C13.5,21.8284271 12.8284271,22.5 12,22.5 C11.1715729,22.5 10.5,21.8284271 10.5,21 L10.5,19.5 C10.5,18.6715729 11.1715729,18 12,18 Z M4.81066017,4.81066017 C5.39644661,4.22487373 6.34619408,4.22487373 6.93198052,4.81066017 L7.99264069,5.87132034 C8.57842712,6.45710678 8.57842712,7.40685425 7.99264069,7.99264069 C7.40685425,8.57842712 6.45710678,8.57842712 5.87132034,7.99264069 L4.81066017,6.93198052 C4.22487373,6.34619408 4.22487373,5.39644661 4.81066017,4.81066017 Z M4.81066017,19.2426407 C4.22487373,18.6568542 4.22487373,17.7071068 4.81066017,17.1213203 L5.87132034,16.0606602 C6.45710678,15.4748737 7.40685425,15.4748737 7.99264069,16.0606602 C8.57842712,16.6464466 8.57842712,17.5961941 7.99264069,18.1819805 L6.93198052,19.2426407 C6.34619408,19.8284271 5.39644661,19.8284271 4.81066017,19.2426407 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        </g>
                                    </svg>
                                </span>
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </div>
                    <!--end::Input group-->
                </div>
                <!--begin::Actions-->
                <div class="text-center mt-20 ms-20 mb-15">
                    <button type="submit" id="beneficiaries_submit" class="btn btn-primary">
                        <span class="indicator-label">إضافة</span>
                        <span class="indicator-progress">الرجاء الإنتظار...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <button type="reset" id="beneficiaries_cancel" class="btn btn-white me-3">إلغاء</button>
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
        var i_installment = 1, i_guarantors = 1;
        var date = $('[name="date_contract"]').flatpickr({
            altInput: true,
            maxDate: "today",
            altFormat: "d / m / Y",
            dateFormat: "Y/m/d",
        });
        var date = $('[name="contract_extension_date"]').flatpickr({
            altInput: true,
            maxDate: "today",
            altFormat: "d / m / Y",
            dateFormat: "Y/m/d",
        });
        var date = $('.payment_start_date').flatpickr({
            altInput: true,
            minDate: "today",
            altFormat: "d / m / Y",
            dateFormat: "Y/m/d",
        });
        let beneficiaries_submit = document.getElementById("beneficiaries_submit");
        let beneficiaries_cancel = document.getElementById("beneficiaries_cancel");
        let beneficiaries_form = document.getElementById('beneficiaries_form');
        let beneficiaries_iframe = document.getElementById('beneficiaries_iframe');
        beneficiaries_iframe.onload = function () {
            const iframeDocument = beneficiaries_iframe.contentWindow.document;
            if (iframeDocument.getElementById('type') != null) {
                if (iframeDocument.getElementById('type').value == "success") {
                    toastr.success(iframeDocument.getElementById('massage').innerText)
                } else {
                    toastr.error(iframeDocument.getElementById('massage').innerText)
                }
            } else {
                toastr.error((iframeDocument.querySelector('.solution-title') != null) ? iframeDocument.querySelector('.solution-title').innerText : (iframeDocument.querySelector('.ui-exception-class > span:last-child') != null) ? iframeDocument.querySelector('.ui-exception-class > span:last-child').innerText : "لا توجد إستجابة من السيرفر", 'حصل خطأ في السيرفر');
            }
        };
        beneficiaries_iframe.src = '{{route('BeneficiariesBuilding.store')}}';
        window.frames[0].stop();

        function changeNumOrder() {
            var num_order = $('#num_order').val();
            if (num_order) {
                let url = "{{route('Order.show',['id'=>':id'])}}";
                url = url.replace(':id', num_order);
                $.ajax({
                    type: 'get',
                    url: url,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        JSON.parse(data).forEach((e => {
                            $('#id_order').val(e.id);
                            $('#id_applicant').val(e.id_applicant);
                            $('#name_applicant').val(e.name_applicant);
                            $('#phone_applicant').val(e.phone_applicant);
                            $('#social_status').val(e.social_status);
                            $('#work_details').val(e.work_details);
                            $('#patients').val((e.existing_patients == 'نعم') ? e.number_patients + ' - المرضى' : 'لايوجد مرضى');
                            $('#name_governorate').val(e.name_governorate);
                            $('#municipal').val(e.municipal);
                            $('#city').val(e.city);
                            $('#landmark_near').val(e.landmark_near);
                            $('#number_families').val(e.number_families);
                            $('#total_people').val(e.total_people);
                            $('#number_family_members').val(e.number_family_members);
                            $('#value_income').val(e.value_income);
                            $('#sources_income').val(e.sources_income);
                            $('#benefit_affairs').val(e.benefit_affairs);
                            $('#payment_affairs').val(e.payment_affairs);
                        }));
                    }
                });
            } else {
                $('#id_order').val('');
                $('#id_applicant').val('');
                $('#name_applicant').val('');
                $('#phone_applicant').val('');
                $('#social_status').val('');
                $('#work_details').val('');
                $('#patients').val('');
                $('#name_governorate').val('');
                $('#municipal').val('');
                $('#city').val('');
                $('#landmark_near').val('');
                $('#number_families').val('');
                $('#total_people').val('');
                $('#number_family_members').val('');
                $('#value_income').val('');
                $('#sources_income').val('');
                $('#benefit_affairs').val('');
                $('#payment_affairs').val('');
            }
        }

        function changeNumApartment() {
            var num_apartment = $('#num_apartment').val();
            if (num_apartment) {
                let url = "{{route('Building.show',['Building'=>':building'])}}";
                url = url.replace(':building', num_apartment);
                $.ajax({
                    type: 'get',
                    url: url,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        JSON.parse(data).forEach((e => {
                            $('#id_apartment').val(e.id);
                            $('#floor').val(e.floor);
                            $('#num_building').val(e.num_building);
                            $('#size_apartment').val(e.size_apartment);
                            $('#orientation').val(e.orientation);
                            $('#status').val(e.status);
                            $('#code_project').val(e.project.code);
                            $('#name_project').val(e.project.name);
                            $('#sponsor_project').val(e.project.sponsor);
                            $('#date_publish').val(e.project.date_publish);
                            $('#type_project').val((e.project.type_project == 'free') ? "مجاني" : "مدفوع");
                            var address = JSON.parse(e.project.address);
                            $('#address').val(address.Governorate + " - " + address.City + " - " + address.address);
                        }));
                    }
                });
            } else {
                $('#id_apartment').val('');
                $('#floor').val('');
                $('#num_building').val('');
                $('#size_apartment').val('');
                $('#orientation').val('');
                $('#status').val('');
                $('#code_project').val('');
                $('#name_project').val('');
                $('#sponsor_project').val('');
                $('#date_publish').val('');
                $('#type_project').val('');
                $('#address').val('');
            }

        }

        document.getElementById('beneficiaries_cancel').addEventListener('click', function () {
            $('#num_order').val('');
            $('#num_order').change();
            $('#num_apartment').val('');
            $('#num_apartment').change();
        });

        function add_installment(id) {
            var del = document.getElementById(id).children[1];
            del.classList.remove('invisible');
            del.classList.remove('ms-3');
            document.getElementById(id).children[0].remove();
            $('#installment').append(`
                <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-3 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">طبيعة القسط</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid"
                                   placeholder="طبيعة القسط"
                                   name="nature_installment[]"/>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-3 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">قيمة القسط</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid"
                                   placeholder="قيمة القسط"
                                   name="value_installment[]"/>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">تاريخ بدء سداد</span>
                            </label>
                            <!--end::Label-->

                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <div class="symbol symbol-20px me-4 position-absolute ms-4">
							    <span class="symbol-label bg-secondary">
								    <span class="svg-icon">
										<svg xmlns="http://www.w3.org/2000/svg"
                                             width="24px" height="24px"
                                             viewBox="0 0 24 24" version="1.1">
											 <g stroke="none" stroke-width="1"
                                                fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24"
                                                      height="24"/>
												<rect fill="#000000" opacity="0.3"
                                                      x="4" y="4" width="4"
                                                      height="4" rx="1"/>
												<path
                                                    d="M5,10 L7,10 C7.55228475,10 8,10.4477153 8,11 L8,13 C8,13.5522847 7.55228475,14 7,14 L5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,7 C14,7.55228475 13.5522847,8 13,8 L11,8 C10.4477153,8 10,7.55228475 10,7 L10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L11,14 C10.4477153,14 10,13.5522847 10,13 L10,11 C10,10.4477153 10.4477153,10 11,10 Z M17,4 L19,4 C19.5522847,4 20,4.44771525 20,5 L20,7 C20,7.55228475 19.5522847,8 19,8 L17,8 C16.4477153,8 16,7.55228475 16,7 L16,5 C16,4.44771525 16.4477153,4 17,4 Z M17,10 L19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 L17,14 C16.4477153,14 16,13.5522847 16,13 L16,11 C16,10.4477153 16.4477153,10 17,10 Z M5,16 L7,16 C7.55228475,16 8,16.4477153 8,17 L8,19 C8,19.5522847 7.55228475,20 7,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,17 C4,16.4477153 4.44771525,16 5,16 Z M11,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 L10,17 C10,16.4477153 10.4477153,16 11,16 Z M17,16 L19,16 C19.5522847,16 20,16.4477153 20,17 L20,19 C20,19.5522847 19.5522847,20 19,20 L17,20 C16.4477153,20 16,19.5522847 16,19 L16,17 C16,16.4477153 16.4477153,16 17,16 Z"
                                                    fill="#000000"/>
											 </g>
										</svg>
									</span>
								</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Datepicker-->
                                <input type="text" class="form-control form-control-solid payment_start_date ps-12"
                                       placeholder="تاريخ بدء سداد"
                                       name="payment_start_date[]"/>
                                <!--end::Datepicker-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <div class="row col-md-2 fv-row pt-5" id="installment-` + i_installment + `">
                            <button type="button"
                                    class="btn btn-icon btn-bg-secondary btn-active-color-primary btn-sm w-25 h-50 mt-12"
                                    onclick="add_installment('installment-` + i_installment + `');">
                                <span class="indicator-label">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="24px" height="24px"
                                             viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/>
                                                <rect fill="#000000" opacity="0.3"
                                                      transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                      x="4"
                                                      y="11" width="16" height="2" rx="1"/>
                                            </g>
                                        </svg>
                                    </span>
                                </span>
                                <span class="indicator-progress">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path
                                                d="M19.5,10.5 L21,10.5 C21.8284271,10.5 22.5,11.1715729 22.5,12 C22.5,12.8284271 21.8284271,13.5 21,13.5 L19.5,13.5 C18.6715729,13.5 18,12.8284271 18,12 C18,11.1715729 18.6715729,10.5 19.5,10.5 Z M16.0606602,5.87132034 L17.1213203,4.81066017 C17.7071068,4.22487373 18.6568542,4.22487373 19.2426407,4.81066017 C19.8284271,5.39644661 19.8284271,6.34619408 19.2426407,6.93198052 L18.1819805,7.99264069 C17.5961941,8.57842712 16.6464466,8.57842712 16.0606602,7.99264069 C15.4748737,7.40685425 15.4748737,6.45710678 16.0606602,5.87132034 Z M16.0606602,18.1819805 C15.4748737,17.5961941 15.4748737,16.6464466 16.0606602,16.0606602 C16.6464466,15.4748737 17.5961941,15.4748737 18.1819805,16.0606602 L19.2426407,17.1213203 C19.8284271,17.7071068 19.8284271,18.6568542 19.2426407,19.2426407 C18.6568542,19.8284271 17.7071068,19.8284271 17.1213203,19.2426407 L16.0606602,18.1819805 Z M3,10.5 L4.5,10.5 C5.32842712,10.5 6,11.1715729 6,12 C6,12.8284271 5.32842712,13.5 4.5,13.5 L3,13.5 C2.17157288,13.5 1.5,12.8284271 1.5,12 C1.5,11.1715729 2.17157288,10.5 3,10.5 Z M12,1.5 C12.8284271,1.5 13.5,2.17157288 13.5,3 L13.5,4.5 C13.5,5.32842712 12.8284271,6 12,6 C11.1715729,6 10.5,5.32842712 10.5,4.5 L10.5,3 C10.5,2.17157288 11.1715729,1.5 12,1.5 Z M12,18 C12.8284271,18 13.5,18.6715729 13.5,19.5 L13.5,21 C13.5,21.8284271 12.8284271,22.5 12,22.5 C11.1715729,22.5 10.5,21.8284271 10.5,21 L10.5,19.5 C10.5,18.6715729 11.1715729,18 12,18 Z M4.81066017,4.81066017 C5.39644661,4.22487373 6.34619408,4.22487373 6.93198052,4.81066017 L7.99264069,5.87132034 C8.57842712,6.45710678 8.57842712,7.40685425 7.99264069,7.99264069 C7.40685425,8.57842712 6.45710678,8.57842712 5.87132034,7.99264069 L4.81066017,6.93198052 C4.22487373,6.34619408 4.22487373,5.39644661 4.81066017,4.81066017 Z M4.81066017,19.2426407 C4.22487373,18.6568542 4.22487373,17.7071068 4.81066017,17.1213203 L5.87132034,16.0606602 C6.45710678,15.4748737 7.40685425,15.4748737 7.99264069,16.0606602 C8.57842712,16.6464466 8.57842712,17.5961941 7.99264069,18.1819805 L6.93198052,19.2426407 C6.34619408,19.8284271 5.39644661,19.8284271 4.81066017,19.2426407 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        </g>
                                    </svg>
                                </span>
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <button type="button"
                                    class="btn btn-icon btn-bg-secondary btn-active-color-primary btn-sm ms-3 w-25 h-50 mt-12 invisible"
                                    onclick="$(this).parent().parent().remove()">
                                <span class="indicator-label">
                                    <span class="svg-icon svg-icon-3 svg-icon-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"/>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"/>
                                                    </g>
                                        </svg>
                                    </span>
                                </span>
                                <span class="indicator-progress">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path
                                                d="M19.5,10.5 L21,10.5 C21.8284271,10.5 22.5,11.1715729 22.5,12 C22.5,12.8284271 21.8284271,13.5 21,13.5 L19.5,13.5 C18.6715729,13.5 18,12.8284271 18,12 C18,11.1715729 18.6715729,10.5 19.5,10.5 Z M16.0606602,5.87132034 L17.1213203,4.81066017 C17.7071068,4.22487373 18.6568542,4.22487373 19.2426407,4.81066017 C19.8284271,5.39644661 19.8284271,6.34619408 19.2426407,6.93198052 L18.1819805,7.99264069 C17.5961941,8.57842712 16.6464466,8.57842712 16.0606602,7.99264069 C15.4748737,7.40685425 15.4748737,6.45710678 16.0606602,5.87132034 Z M16.0606602,18.1819805 C15.4748737,17.5961941 15.4748737,16.6464466 16.0606602,16.0606602 C16.6464466,15.4748737 17.5961941,15.4748737 18.1819805,16.0606602 L19.2426407,17.1213203 C19.8284271,17.7071068 19.8284271,18.6568542 19.2426407,19.2426407 C18.6568542,19.8284271 17.7071068,19.8284271 17.1213203,19.2426407 L16.0606602,18.1819805 Z M3,10.5 L4.5,10.5 C5.32842712,10.5 6,11.1715729 6,12 C6,12.8284271 5.32842712,13.5 4.5,13.5 L3,13.5 C2.17157288,13.5 1.5,12.8284271 1.5,12 C1.5,11.1715729 2.17157288,10.5 3,10.5 Z M12,1.5 C12.8284271,1.5 13.5,2.17157288 13.5,3 L13.5,4.5 C13.5,5.32842712 12.8284271,6 12,6 C11.1715729,6 10.5,5.32842712 10.5,4.5 L10.5,3 C10.5,2.17157288 11.1715729,1.5 12,1.5 Z M12,18 C12.8284271,18 13.5,18.6715729 13.5,19.5 L13.5,21 C13.5,21.8284271 12.8284271,22.5 12,22.5 C11.1715729,22.5 10.5,21.8284271 10.5,21 L10.5,19.5 C10.5,18.6715729 11.1715729,18 12,18 Z M4.81066017,4.81066017 C5.39644661,4.22487373 6.34619408,4.22487373 6.93198052,4.81066017 L7.99264069,5.87132034 C8.57842712,6.45710678 8.57842712,7.40685425 7.99264069,7.99264069 C7.40685425,8.57842712 6.45710678,8.57842712 5.87132034,7.99264069 L4.81066017,6.93198052 C4.22487373,6.34619408 4.22487373,5.39644661 4.81066017,4.81066017 Z M4.81066017,19.2426407 C4.22487373,18.6568542 4.22487373,17.7071068 4.81066017,17.1213203 L5.87132034,16.0606602 C6.45710678,15.4748737 7.40685425,15.4748737 7.99264069,16.0606602 C8.57842712,16.6464466 8.57842712,17.5961941 7.99264069,18.1819805 L6.93198052,19.2426407 C6.34619408,19.8284271 5.39644661,19.8284271 4.81066017,19.2426407 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        </g>
                                    </svg>
                                </span>
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </div>
                    <!--end::Input group-->
            `);
            i_installment++;
            var date = $('.payment_start_date').flatpickr({
                altInput: true,
                altFormat: "d / m / Y",
                dateFormat: "Y/m/d",
                minDate: "today",

            });
        }

        function add_guarantor(id) {
            if (id != null) {
                var del = document.getElementById(id).children[1];
                del.classList.remove('invisible');
                del.classList.remove('ms-3');
                document.getElementById(id).children[0].remove();
            }
            i_guarantors++;
            $('#guarantors').append(`
               <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-3 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">رقم الهوية الكفيل</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid"
                                   placeholder="رقم الهوية الكفيل"
                                   name="id_guarantor"/>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-3 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">إسم الكفيل</span>
                            </label>
                            <!--end::Label-->
                            <input id="value_installment" type="text" class="form-control form-control-solid"
                                   placeholder="إسم الكفيل"
                                   name="name_guarantor" disabled/>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">بنك الكفيل</span>
                            </label>
                            <!--end::Label-->
                            <input id="payment_start_date" type="text" class="form-control form-control-solid"
                                   placeholder="بنك الكفيل"
                                   name="bank_guarantor"/>
                        </div>
                        <!--end::Col-->
                        <div class="row col-md-2 fv-row pt-5" id="guarantors-` + i_guarantors + `">
                            <button type="button"
                                    class="btn btn-icon btn-bg-secondary btn-active-color-primary btn-sm w-25 h-50 mt-12"
                                    onclick="add_guarantor('guarantors-` + i_guarantors + `');">
                                <span class="indicator-label">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="24px" height="24px"
                                             viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/>
                                                <rect fill="#000000" opacity="0.3"
                                                      transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                      x="4"
                                                      y="11" width="16" height="2" rx="1"/>
                                            </g>
                                        </svg>
                                    </span>
                                </span>
                                <span class="indicator-progress">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path
                                                d="M19.5,10.5 L21,10.5 C21.8284271,10.5 22.5,11.1715729 22.5,12 C22.5,12.8284271 21.8284271,13.5 21,13.5 L19.5,13.5 C18.6715729,13.5 18,12.8284271 18,12 C18,11.1715729 18.6715729,10.5 19.5,10.5 Z M16.0606602,5.87132034 L17.1213203,4.81066017 C17.7071068,4.22487373 18.6568542,4.22487373 19.2426407,4.81066017 C19.8284271,5.39644661 19.8284271,6.34619408 19.2426407,6.93198052 L18.1819805,7.99264069 C17.5961941,8.57842712 16.6464466,8.57842712 16.0606602,7.99264069 C15.4748737,7.40685425 15.4748737,6.45710678 16.0606602,5.87132034 Z M16.0606602,18.1819805 C15.4748737,17.5961941 15.4748737,16.6464466 16.0606602,16.0606602 C16.6464466,15.4748737 17.5961941,15.4748737 18.1819805,16.0606602 L19.2426407,17.1213203 C19.8284271,17.7071068 19.8284271,18.6568542 19.2426407,19.2426407 C18.6568542,19.8284271 17.7071068,19.8284271 17.1213203,19.2426407 L16.0606602,18.1819805 Z M3,10.5 L4.5,10.5 C5.32842712,10.5 6,11.1715729 6,12 C6,12.8284271 5.32842712,13.5 4.5,13.5 L3,13.5 C2.17157288,13.5 1.5,12.8284271 1.5,12 C1.5,11.1715729 2.17157288,10.5 3,10.5 Z M12,1.5 C12.8284271,1.5 13.5,2.17157288 13.5,3 L13.5,4.5 C13.5,5.32842712 12.8284271,6 12,6 C11.1715729,6 10.5,5.32842712 10.5,4.5 L10.5,3 C10.5,2.17157288 11.1715729,1.5 12,1.5 Z M12,18 C12.8284271,18 13.5,18.6715729 13.5,19.5 L13.5,21 C13.5,21.8284271 12.8284271,22.5 12,22.5 C11.1715729,22.5 10.5,21.8284271 10.5,21 L10.5,19.5 C10.5,18.6715729 11.1715729,18 12,18 Z M4.81066017,4.81066017 C5.39644661,4.22487373 6.34619408,4.22487373 6.93198052,4.81066017 L7.99264069,5.87132034 C8.57842712,6.45710678 8.57842712,7.40685425 7.99264069,7.99264069 C7.40685425,8.57842712 6.45710678,8.57842712 5.87132034,7.99264069 L4.81066017,6.93198052 C4.22487373,6.34619408 4.22487373,5.39644661 4.81066017,4.81066017 Z M4.81066017,19.2426407 C4.22487373,18.6568542 4.22487373,17.7071068 4.81066017,17.1213203 L5.87132034,16.0606602 C6.45710678,15.4748737 7.40685425,15.4748737 7.99264069,16.0606602 C8.57842712,16.6464466 8.57842712,17.5961941 7.99264069,18.1819805 L6.93198052,19.2426407 C6.34619408,19.8284271 5.39644661,19.8284271 4.81066017,19.2426407 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        </g>
                                    </svg>
                                </span>
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <button type="button"
                                    class="btn btn-icon btn-bg-secondary btn-active-color-primary btn-sm ms-3 w-25 h-50 mt-12 invisible"
                                    onclick="$(this).parent().parent().remove()">
                                <span class="indicator-label">
                                    <span class="svg-icon svg-icon-3 svg-icon-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"/>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"/>
                                                    </g>
                                        </svg>
                                    </span>
                                </span>
                                <span class="indicator-progress">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path
                                                d="M19.5,10.5 L21,10.5 C21.8284271,10.5 22.5,11.1715729 22.5,12 C22.5,12.8284271 21.8284271,13.5 21,13.5 L19.5,13.5 C18.6715729,13.5 18,12.8284271 18,12 C18,11.1715729 18.6715729,10.5 19.5,10.5 Z M16.0606602,5.87132034 L17.1213203,4.81066017 C17.7071068,4.22487373 18.6568542,4.22487373 19.2426407,4.81066017 C19.8284271,5.39644661 19.8284271,6.34619408 19.2426407,6.93198052 L18.1819805,7.99264069 C17.5961941,8.57842712 16.6464466,8.57842712 16.0606602,7.99264069 C15.4748737,7.40685425 15.4748737,6.45710678 16.0606602,5.87132034 Z M16.0606602,18.1819805 C15.4748737,17.5961941 15.4748737,16.6464466 16.0606602,16.0606602 C16.6464466,15.4748737 17.5961941,15.4748737 18.1819805,16.0606602 L19.2426407,17.1213203 C19.8284271,17.7071068 19.8284271,18.6568542 19.2426407,19.2426407 C18.6568542,19.8284271 17.7071068,19.8284271 17.1213203,19.2426407 L16.0606602,18.1819805 Z M3,10.5 L4.5,10.5 C5.32842712,10.5 6,11.1715729 6,12 C6,12.8284271 5.32842712,13.5 4.5,13.5 L3,13.5 C2.17157288,13.5 1.5,12.8284271 1.5,12 C1.5,11.1715729 2.17157288,10.5 3,10.5 Z M12,1.5 C12.8284271,1.5 13.5,2.17157288 13.5,3 L13.5,4.5 C13.5,5.32842712 12.8284271,6 12,6 C11.1715729,6 10.5,5.32842712 10.5,4.5 L10.5,3 C10.5,2.17157288 11.1715729,1.5 12,1.5 Z M12,18 C12.8284271,18 13.5,18.6715729 13.5,19.5 L13.5,21 C13.5,21.8284271 12.8284271,22.5 12,22.5 C11.1715729,22.5 10.5,21.8284271 10.5,21 L10.5,19.5 C10.5,18.6715729 11.1715729,18 12,18 Z M4.81066017,4.81066017 C5.39644661,4.22487373 6.34619408,4.22487373 6.93198052,4.81066017 L7.99264069,5.87132034 C8.57842712,6.45710678 8.57842712,7.40685425 7.99264069,7.99264069 C7.40685425,8.57842712 6.45710678,8.57842712 5.87132034,7.99264069 L4.81066017,6.93198052 C4.22487373,6.34619408 4.22487373,5.39644661 4.81066017,4.81066017 Z M4.81066017,19.2426407 C4.22487373,18.6568542 4.22487373,17.7071068 4.81066017,17.1213203 L5.87132034,16.0606602 C6.45710678,15.4748737 7.40685425,15.4748737 7.99264069,16.0606602 C8.57842712,16.6464466 8.57842712,17.5961941 7.99264069,18.1819805 L6.93198052,19.2426407 C6.34619408,19.8284271 5.39644661,19.8284271 4.81066017,19.2426407 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        </g>
                                    </svg>
                                </span>
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </div>
                    <!--end::Input group-->
            `);
            var name = document.getElementById("guarantors-" + i_guarantors).parentNode.querySelectorAll(".col-md-3")[1].querySelector('input[type="text"]');
            document.getElementById("guarantors-" + i_guarantors).parentNode.querySelectorAll(".col-md-3")[0].querySelector('input[type="text"]').addEventListener("keyup", (function (e) {
                var id_i = $(this).val();
                if (id_i.toString().length == 9) {
                    var url = "{{route('utilization.order.search.id',['id'=>':id'])}}"
                    url = url.replace(':id', id_i);
                    $.ajax({
                        type: 'get',
                        url: url,
                        data: {},
                        cache: false,
                        success: (data) => {
                            var data = JSON.parse(data);
                            if (data != null) {
                                data.forEach((e => {
                                    name.value = e.FNAME_ARB + ' ' + e.SNAME_ARB + ' ' + e.TNAME_ARB + ' ' + e.LNAME_ARB;
                                }));
                            }
                        },
                    })
                }
                if (id_i == "") {
                    $('#' + name.id).val('');
                }

            }));
        }

        add_guarantor();
    </script>
@endpush
