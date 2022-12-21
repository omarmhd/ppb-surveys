@extends('layouts.app_admin')
@section('sub_title','إضافة المشاريع')
@section('toolbar.title','لوحة التحكم')
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
    <li class="breadcrumb-item text-muted">إدارة المشاريع</li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-white">إضافة مشروع</li>
    <!--end::Item-->
@endsection
@section('content')
    @include('modals.add_standards')
    <!--begin::Form Widget 13-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body py-1">
            <iframe id="project_iframe" name="project_iframe" src="" class="invisible d-none visually-hidden"></iframe>

            <!--begin:Form-->
            <form id="project_form" class="form" action="{{route('Project.store')}}" method="POST"
                  target="project_iframe">
            @csrf
            <!--begin::Heading-->
                <div class="mb-13 mt-5 text-start">
                    <!--begin::Title-->
                    <h1 class="mb-3">إضافة مشروع</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-gray-400 fw-bold fs-7">وزارة الأشغال العامة والإسكان
                        <a class="fw-bolder link-primary">إضافة مشروع</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">كود المشروع</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="كود المشروع"
                               id="code" name="code"/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">الإسم المشروع</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="الإسم المشروع"
                               id="name" name="name"/>
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
                            <span class="required">الجهة القائمة على المشروع</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid"
                               placeholder="الجهة القائمة على المشروع"
                               id="sponsor" name="sponsor"/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="fs-6 fw-bold mb-2">تاريخ الإعلان عن المشروع</label>
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
                            <input class="form-control form-control-solid ps-12" placeholder="حدد تاريخ من"
                                   id="date_publish" name="date_publish"/>
                            <!--end::Datepicker-->
                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <!--begin::Col-->
                    <div class="d-flex  col-md-6 flex-column fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">نوع المشروع</span>
                        </label>
                        <!--end::Label-->
                        <div class="d-flex align-items-center mb-5 mt-2">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5 ms-5">
                                <input class="form-check-input h-20px w-20px" type="radio" name="type_project"
                                       value="free" id="type_project_1"/>
                                <span class="form-check-label fw-bold">مجاني</span>
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5 ms-5">
                                <input class="form-check-input h-20px w-20px" type="radio" name="type_project"
                                       value="pay" id="type_project_2"/>
                                <span class="form-check-label fw-bold">مدفوع</span>
                            </label>
                            <!--end::Checkbox-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <div class="col-md-3 fv-row" id="selectGovernorate">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                            <span class="required">المحافظة</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="المحافظة التي سيقام المشروع فيها"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Select-->
                        <select id="Governorate" name="Governorate" data-control="select2"
                                data-dropdown-parent="#selectGovernorate"
                                data-placeholder="إختار المحافظة ..." class="form-select form-select-solid"
                                onchange="changeGovernorate()">

                        </select>
                        <!--end::Select-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-3 fv-row" id="selectCity">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                            <span class="required">المدينة</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="المدينة التي سيقام المشروع فيها"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Select-->
                        <select id="city" name="City" data-control="select2" data-dropdown-parent="#selectCity"
                                data-placeholder="إختار المدينة ..." class="form-select form-select-solid">
                        </select>
                        <!--end::Select-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <div class="row g-9 mb-8 ">
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-3">
                            <span class="required">المعايير</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="قم بإختيار معايير المشروع من القائمة المتوفرة"></i>
                        </label>
                        <!--end::Label-->
                        <ul id="list_stander" class="list-group pe-0  selector-item-standard"
                            style="border: 1px solid #EFF2F5">
                            <li class="list-group-item d-flex justify-content-between align-items-start m-1">
                                <div class="ms-2 me-auto mt-1 fs-6 fw-bold">
                                    إضافة معيار
                                </div>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_standards">
                                    <span class="svg-icon svg-icon-1">
                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Plus.svg-->
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/>
                                                <rect fill="#000000" opacity="0.3"
                                                      transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                      x="4"
                                                      y="11" width="16" height="2" rx="1"/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="fs-5 fw-bold mb-2">العنوان</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <textarea class="form-control form-control-solid" rows="3" placeholder="العنوان المشروع"
                                  name="address"></textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--begin::Actions-->
                <div class="text-center">
                    <button type="submit" id="project_submit" class="btn btn-primary">
                        <span class="indicator-label">إضافة مشروع</span>
                        <span class="indicator-progress">الرجاء الإنتظار...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <button type="reset" id="project_cancel" class="btn btn-white me-3">إلغاء</button>
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

        $('[name="date_publish"]').flatpickr({enableTime: 0, dateFormat: "Y-m-d"});
        let project_submit = document.getElementById("project_submit");
        let project_cancel = document.getElementById("project_cancel");
        let project_form = document.getElementById('project_form');
        let project_iframe = document.getElementById('project_iframe');
        let modal_standards_form = document.getElementById('kt_modal_standards_form');
        let governorate = document.getElementById("Governorate");
        let city = document.getElementById("city");
        let standers = [];
        project_iframe.onload = function () {
            const iframeDocument = project_iframe.contentWindow.document;
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
        project_iframe.src = '{{route('Project.store')}}';
        window.frames[0].stop();
        var validate = FormValidation.formValidation(project_form, {
            fields: {
                code: {
                    validators: {
                        notEmpty: {message: "قم بإدخال كود المشروع"},
                        stringLength: {
                            max: 8,
                            message: 'يجب ان يحتوي الترميز 8 حرف كحد أقصى'
                        },
                        regexp: {
                            regexp: /[A-Z0-9]+/i,
                            message: "يجب ان تحتوي التسمية على حروف إنجليزية وأرقام"
                        },
                    }
                },
                name: {
                    validators: {
                        notEmpty: {message: "قم بإدخال إسم المشروع"},
                        regexp: {
                            regexp: /^[A-Za-zء-ي]+/i,
                            message: "يجب ان تحتوي التسمية على حروف"
                        },
                    }
                },
                sponsor: {
                    validators: {
                        notEmpty: {message: "قم بإدخال الجهة القائمة على المشروع"},
                        regexp: {
                            regexp: /^[A-Za-zء-ي]+/i,
                            message: "يجب ان تحتوي التسمية على حروف"
                        },
                    }
                },
                date_publish: {
                    validators: {
                        notEmpty: {message: "قم بإدخال تاريخ الإعلان"},
                        date: {
                            format: 'YYYY-MM-DD',
                            message: 'تنسيق التاريخ غير صحيح',
                        }
                    }
                },
                type_project: {validators: {notEmpty: {message: "قم بإختيار نوع المشروع"}}},
                /* standard: {
                     selector: '.selector-item-standard',
                     validators: {
                         callback: {
                             message: "قم بإضافة معيار واحد على الاقل",
                             callback: function (input) {
                                 if ($('#list_stander').filter(function () {
                                     return $(this).children("li").length > 1
                                 }).length) {
                                     validate.updateFieldStatus('standard', 'Valid', 'callback');
                                     return true;
                                 }
                                 return false;
                             }
                         }
                     }
                 },*/
                Governorate: {validators: {notEmpty: {message: "قم بإختيار المحافظة"}}},
                City: {validators: {notEmpty: {message: "قم بإخيار المدينة"}}},
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger,
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: ".fv-row",
                    eleInvalidClass: "",
                    eleValidClass: ""
                })
            }
        });
        project_submit.addEventListener("click", function (t) {
            t.preventDefault();
            validate.validate().then(function (e) {
                "Valid" === e ? (project_submit.setAttribute("data-kt-indicator", "on"), project_submit.disabled = true, project_form.submit(), project_form.reset(), setTimeout(function () {
                        project_submit.removeAttribute("data-kt-indicator"),
                            project_submit.disabled = false, clearStander() , $('#Governorate').val(''), $('#Governorate').change();
                        toastr.success("تم إرسال الطلب وجاري معالجته في السيرفر")
                    }, time_interval)
                ) : Swal.fire({
                    text: "نأسف تأكد من صحة بعض المدخلات",
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "حسنا",
                    customClass: {confirmButton: "btn btn-primary"}
                });
            })
        });
        let modal_standards = document.getElementById('kt_modal_standards');
        modal_standards.addEventListener('hidden.bs.modal', function (event) {
            clearStander();
            let dotings = modal_standards.querySelectorAll('input[name="dotting[]"]');
            dotings.forEach((dot => {
                if (dot.checked && !standers.includes(dot.value)) {
                    var values = {
                        'id': dot.value,
                        'name': dot.getAttribute('data-bs-name'),
                        'degree': dot.getAttribute('data-bs-degree')
                    };
                    $('#list_stander').append(`
                 <li class="list-group-item d-flex justify-content-between align-items-start m-1 border-1"
                    id="item-` + dot.value + `">
                    <div class="ms-2 me-auto mt-1 fs-6 fw-bold">
                        ` + dot.getAttribute('data-bs-name') + `
                    </div>
                    <a href="javascript:void(0);" onclick="removeItem('#item-` + dot.value + `','` + dot.value + `')">
                                        <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px"
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
                    </a>
                    <input type='hidden' id="Standards_` + dot.value + `" name='Standards[]' value='` + JSON.stringify(values) + `'/>
                </li>
            `);
                    standers.push(dot.value);
                }
            }));
        });
        modal_standards.addEventListener('show.bs.modal', function (event) {
            let dotings = modal_standards.querySelectorAll('input[name="dotting[]"]');
            dotings.forEach((dot => {
                document.getElementById('dot-' + dot.value).removeAttribute('checked');
            }));
            modal_standards_form.reset();
            standers.forEach((e => {
                document.getElementById('dot-' + e).setAttribute('checked', true);
            }));
        });

        function removeItem(id, value) {
            $(id).remove();
            standers.splice(standers.indexOf(value), 1)
        }

        project_cancel.addEventListener("click", function () {
            clearStander();
            $('#Governorate').val("");
            $('#Governorate').change();
            $('#city').val("");
        });

        function changeGovernorate() {
            city.disabled = true;
            let url = "{{route('project.city',['governorate'=>':governorate'])}}";
            url = url.replace(':governorate', ($('#Governorate').val() != "") ? $('#Governorate').val() : "0");
            $.ajax({
                type: 'get',
                url: url,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    $('#city option').remove();
                    var opt = document.createElement('option');
                    opt.value = "";
                    opt.innerHTML = "إختار المدينة ...";
                    city.appendChild(opt);
                    data.forEach((e => {
                        var opt = document.createElement('option');
                        opt.value = e;
                        opt.innerHTML = e;
                        city.appendChild(opt);
                    }));
                    city.disabled = false;
                }
            });
        }

        function clearStander() {
            let stander = document.querySelectorAll('input[name="Standards[]"]');
            stander.forEach((node => {
                removeItem("#" + node.parentElement.id, node.id.substring(10));
            }));
        }

        $.ajax({
            type: 'get',
            url: "{{route('project.governorate')}}",
            contentType: false,
            processData: false,
            success: (data) => {
                var opt = document.createElement('option');
                opt.value = "";
                opt.innerHTML = "إختار المحافظة ...";
                governorate.appendChild(opt);
                data.forEach((e => {
                    var opt = document.createElement('option');
                    opt.value = e;
                    opt.innerHTML = e;
                    governorate.appendChild(opt);
                }));
            }
        });

    </script>
@endpush
