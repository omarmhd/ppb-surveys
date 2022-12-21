<!--begin::Modal - New Target-->
<div class="modal fade" id="modal_edit_beneficiaries_building" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div id="close_standers" class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                    <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg"
                                                             width="24px"
                                                             height="24px" viewBox="0 0 24 24" version="1.1">
															<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                                               fill="#000000">
																<rect fill="#000000" x="0" y="7" width="16" height="2"
                                                                      rx="1"/>
																<rect fill="#000000" opacity="0.5"
                                                                      transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                                      x="0" y="7" width="16" height="2" rx="1"/>
															</g>
														</svg>
													</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <!--begin::Heading-->
                <div class="mb-13 mt-5 text-start">
                    <!--begin::Title-->
                    <h1 class="mb-3">الشقق السكنية</h1>
                    <!--end::Title-->
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
                    <div class="col-md-6 fv-row " id="selectNumOrder">
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
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5">رقم الهوية</label>
                        <!--end::Label-->
                        <input id="id_applicant" type="text" class="form-control" placeholder="رقم الهوية" disabled/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5">الإسم مقدم الطلب</label>
                        <!--end::Label-->
                        <input id="name_applicant" type="text" class="form-control" placeholder="الإسم مقدم الطلب"
                               disabled/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5">رقم الجوال</label>
                        <!--end::Label-->
                        <input id="phone_applicant" type="text" class="form-control" placeholder="رقم الجوال" disabled/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5">الحالة الإجتماعية</label>
                        <!--end::Label-->
                        <input id="social_status" type="text" class="form-control" placeholder="الحالة الإجتماعية"
                               disabled/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5">العمل</label>
                        <!--end::Label-->
                        <input id="work_details" type="text" class="form-control" placeholder="العمل"
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
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5">المرضى</label>
                        <!--end::Label-->
                        <input id="patients" type="text" class="form-control" placeholder="0 - المرضى"
                               disabled/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5">المحافظة</label>
                        <!--end::Label-->
                        <input id="name_governorate" type="text" class="form-control" placeholder="المحافظة" disabled/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5">البلدية</label>
                        <!--end::Label-->
                        <input id="municipal" type="text" class="form-control" placeholder="البلدية" disabled/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5">مدينة</label>
                        <!--end::Label-->
                        <input id="city" type="text" class="form-control" placeholder="مدينة"
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
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5">أقرب معلم</label>
                        <!--end::Label-->
                        <input id="landmark_near" type="text" class="form-control" placeholder="أقرب معلم"
                               disabled/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5">الأسر المقيمة في الوحدة</label>
                        <!--end::Label-->
                        <input id="number_families" type="text" class="form-control" placeholder="عدد الأسر المقيمة "
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
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5">إجمالي الأفراد المقيمين في
                            الوحدة</label>
                        <!--end::Label-->
                        <input id="total_people" type="text" class="form-control" placeholder="عدد الأفراد المقيمة"
                               disabled/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
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
                        <input id="value_income" type="text" class="form-control" placeholder="قيمة دخل الأسرة"
                               disabled/>
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
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5">مستفيد من الشؤون الإجتماعية</label>
                        <!--end::Label-->
                        <input id="benefit_affairs" type="text" class="form-control"
                               placeholder="مستفيدة من الشؤون الإجتماعية- قيمة الإستفادة"
                               disabled/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Heading-->
                <div class="mb-13 mt-5 text-start">
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
                    <div class="col-md-6 fv-row " id="selectNumApartment">
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
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5"> كود المشروع</label>
                        <!--end::Label-->
                        <input id="code_project" type="text" class="form-control" placeholder=" كود المشروع" disabled/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5"> الإسم المشروع</label>
                        <!--end::Label-->
                        <input id="name_project" type="text" class="form-control" placeholder=" الإسم المشروع"
                               disabled/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-5">الجهة القائمة على المشروع</label>
                        <!--end::Label-->
                        <input id="sponsor_project" type="text" class="form-control"
                               placeholder="الجهة القائمة على المشروع"
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
                <form id="beneficiaries_form" class="form" action="{{route('BeneficiariesBuilding.store')}}"
                      method="POST"
                      target="beneficiaries_iframe">
                    @csrf
                    <input id="id_apartment" type="hidden" name="id_apartment"/>
                    <input id="id_order" type="hidden" name="id_order"/>

                    <!--begin::Actions-->
                    <div class="text-center mt-20 ms-20">
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
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->
@push('js')
    <script>
        let modal_edit_beneficiaries_building = document.getElementById('modal_edit_beneficiaries_building');
        let num_order = document.getElementById('num_order');
        let num_apartment = document.getElementById('num_apartment');
        modal_edit_beneficiaries_building.addEventListener('show.bs.modal', function (event) {
            var show = event.relatedTarget
            var id_order = show.getAttribute('data-bs-id-order');
            var id_applicant = show.getAttribute('data-bs-id-applicant');
            var name_order = show.getAttribute('data-bs-name-order');
            var name_applicant = show.getAttribute('data-bs-name-applicant');

            var opt = document.createElement('option');
            opt.value = id_order;
            opt.innerHTML = name_order;
            num_order.appendChild(opt);

            var opt = document.createElement('option');
            opt.value = id_applicant;
            opt.innerHTML = name_applicant;
            num_apartment.appendChild(opt);

            $('#num_order').val(id_order);
            $('#num_order').change();
            $('#num_apartment').val(id_applicant);
            $('#num_apartment').change();

        });

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
                            $('#benefit_affairs').val(e.benefit_affairs + " - " + e.payment_affairs);
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
    </script>
@endpush
