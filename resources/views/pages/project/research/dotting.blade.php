@extends('layouts.app_admin')
@section('sub_title','التنقيط')
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
    <li class="breadcrumb-item text-muted">إدارة البحث الإجتماعي</li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-white">بنود التنقيط</li>
    <!--end::Item-->
@endsection
@push('css')
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.rtl.css')}}" rel="stylesheet"
          type="text/css"/>
@endpush
@section('content')
    @include('modals.add_sub_dotting')
    @include('modals.edit_dotting')
    @include('modals.export_modal')

    <!--begin::Form Widget 13-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body py-1">
            <iframe id="dotting_iframe" name="dotting_iframe" src=""
                    class="invisible d-none visually-hidden"></iframe>
            <!--begin:Form-->
            <form id="dotting_form" class="form" action="{{route('Dotting.store')}}" method="POST"
                  target="dotting_iframe">
            @csrf
            <!--begin::Heading-->
                <div class="mt-10 text-start mb-15 fs-6">
                    <!--begin::Title-->
                    <h1 class="mb-5">بنود التنقيط</h1>
                    <!--end::Title-->
                </div>
                <!--end::Heading-->
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="d-flex col-md-4  flex-column fv-row">
                        <!--begin::Label-->
                        <label for="name_dotting" class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">البند الرئيسي</span>
                        </label>
                        <!--end::Label-->
                        <input id="name_dotting" type="text" class="form-control form-control-solid"
                               placeholder="البند الرئيسي" name="name_dotting" required/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="d-flex  col-md-2 flex-column fv-row">
                        <!--begin::Label-->
                        <label for="degree_dotting" class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">الدرجة العظمى للبند</span>
                        </label>
                        <!--end::Label-->
                        <input id="degree_dotting" type="text" class="form-control form-control-solid"
                               placeholder="الدرجة العظمى للبند"
                               name="degree_dotting" required/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="d-flex  col-md-6 flex-column fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">طريقة العرض</span>
                        </label>
                        <!--end::Label-->
                        <div class="d-flex align-items-center mb-5 mt-2">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5 ms-5">
                                <input class="form-check-input h-20px w-20px" type="radio" name="method_show"
                                       value="1" id="method_show_1"/>
                                <span class="form-check-label fw-bold">متعدد</span>
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-5 ms-5">
                                <input class="form-check-input h-20px w-20px" type="radio" name="method_show"
                                       value="0" id="method_show_2"/>
                                <span class="form-check-label fw-bold">منفرد</span>
                            </label>
                            <!--end::Checkbox-->
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-end mt-5">
                    <button type="submit" id="dotting_submit" class="btn btn-primary">
                        <span class="indicator-label">حفظ</span>
                        <span class="indicator-progress">الرجاء الإنتظار
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                    </button>
                    <button type="reset" id="dotting_cancel" class="btn btn-white me-3">تنظيف الحقول
                    </button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end:Form-->


        </div>
        <!--begin::Body-->
    </div>
    <!--end::Form Widget 13-->

    <!--begin::Tables Widget 13-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
													<svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
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
                    <input type="text" data-table-filter="search" class="form-control form-control-solid w-250px ps-15"
                           placeholder="بحث"/>
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-table-toolbar="base">
                    <!--begin::Export-->
                    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                            data-bs-target="#export_modal">
                        <!--begin::Svg Icon | path: icons/duotone/Files/Export.svg-->
                        <span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path
                                                                d="M17,8 C16.4477153,8 16,7.55228475 16,7 C16,6.44771525 16.4477153,6 17,6 L18,6 C20.209139,6 22,7.790861 22,10 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,9.99305689 C2,7.7839179 3.790861,5.99305689 6,5.99305689 L7.00000482,5.99305689 C7.55228957,5.99305689 8.00000482,6.44077214 8.00000482,6.99305689 C8.00000482,7.54534164 7.55228957,7.99305689 7.00000482,7.99305689 L6,7.99305689 C4.8954305,7.99305689 4,8.88848739 4,9.99305689 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,10 C20,8.8954305 19.1045695,8 18,8 L17,8 Z"
                                                                fill="#000000" fill-rule="nonzero" opacity="0.3"/>
															<rect fill="#000000" opacity="0.3"
                                                                  transform="translate(12.000000, 8.000000) scale(1, -1) rotate(-180.000000) translate(-12.000000, -8.000000)"
                                                                  x="11" y="2" width="2" height="12" rx="1"/>
															<path
                                                                d="M12,2.58578644 L14.2928932,0.292893219 C14.6834175,-0.0976310729 15.3165825,-0.0976310729 15.7071068,0.292893219 C16.0976311,0.683417511 16.0976311,1.31658249 15.7071068,1.70710678 L12.7071068,4.70710678 C12.3165825,5.09763107 11.6834175,5.09763107 11.2928932,4.70710678 L8.29289322,1.70710678 C7.90236893,1.31658249 7.90236893,0.683417511 8.29289322,0.292893219 C8.68341751,-0.0976310729 9.31658249,-0.0976310729 9.70710678,0.292893219 L12,2.58578644 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(12.000000, 2.500000) scale(1, -1) translate(-12.000000, -2.500000)"/>
														</g>
													</svg>
												</span>
                        <!--end::Svg Icon-->تصدير
                    </button>
                    <!--end::Export-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-table-toolbar="selected">
                    <div class="fw-bolder me-5">
                        <span class="me-2" data-table-select="selected_count"></span>
                    </div>
                    <button type="button" class="btn btn-danger" data-table-select="delete_selected">احذف المحدد
                    </button>
                </div>
                <!--end::Group actions-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table id="table_dotting"
                       class="table table-bordered table-hover table-row-gray-300 align-middle gs-0 gy-3 border-1 text-center fs-7">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bolder  bg-secondary text-muted ">
                        <th class="w-10px">
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" data-check="true"
                                       data-check-target="#table_dotting .form-check-input" value="1"/>
                            </div>
                        </th>
                        <th class="w-50px">رقم</th>
                        <th class="min-w-70px">البند</th>
                        <th class="w-150px ">الدرجة العظمى للبند</th>
                        <th class="w-150px">البنود الفرعية</th>
                        <th class="w-150px text-start"></th>
                    </tr>
                    </thead>
                    <!--end::Table head-->

                </table>
                <!--end::Table-->
            </div>
        </div>
    </div>
    <!--end::Tables Widget 13-->
@endsection
@push('js')
    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script>

        let DataTable_dotting, table_dotting;
        let dotting_submit = document.getElementById("dotting_submit");
        let dotting_cancel = document.getElementById("dotting_cancel");
        let dotting_form = document.getElementById('dotting_form');
        let dotting_iframe = document.getElementById('dotting_iframe');
        dotting_iframe.onload = function () {
            const iframeDocument = dotting_iframe.contentWindow.document;
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
        dotting_iframe.src = '{{route('Dotting.store')}}';
        window.frames[0].stop();
        var validate = FormValidation.formValidation(dotting_form, {
            fields: {
                name_dotting: {validators: {notEmpty: {message: "البند الرئيسي مطلوب"}}},
                degree_dotting: {
                    validators: {
                        notEmpty: {message: "درجة البند الرئيسي مطلوبة"},
                        numeric: {message: 'القيمة يجب ان تكون رقمية'}
                    }
                },
                method_show: {validators: {notEmpty: {message: "قم بإختيار طريقة عرض البند"}}}
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
        dotting_submit.addEventListener("click", function (t) {
            t.preventDefault();
            validate.validate().then(function (e) {
                "Valid" === e ? (dotting_submit.setAttribute("data-kt-indicator", "on"), dotting_submit.disabled = true, dotting_form.submit(), dotting_form.reset(), setTimeout(function () {
                    dotting_submit.removeAttribute("data-kt-indicator"),
                        dotting_submit.disabled = false;
                    const iframeDocument = dotting_iframe.contentWindow.document;
                    toastr.success("تم إرسال الطلب وجاري معالجته في السيرفر")
                    DataTable_dotting.ajax.reload(null, false)
                }, time_interval)) : Swal.fire({
                    text: "نأسف تأكد من صحة بعض المدخلات",
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "حسنا",
                    customClass: {confirmButton: "btn btn-primary"}
                });
            })
        });
        dotting_cancel.addEventListener("click", function () {
            dotting_form.reset();
            dotting_iframe.addClass('invisible d-none visually-hidden');
        });

        function deleteData(n, name) {
            Swal.fire({
                text: "هل أنت متأكد أنك تريد حذف بند  " + name + " ؟ ",
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
                    text: "لقد حذفت  بند " + name + " !. ",
                    icon: "success",
                    buttonsStyling: !1,
                    confirmButtonText: "حسنا",
                    customClass: {confirmButton: "btn fw-bold btn-primary"}
                }).then((function () {
                    var url = "{{route('dotting.moveToTrash',['id'=>':id'])}}";
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
                    DataTable_dotting.ajax.reload(null, false);
                })) : "cancel" === e.dismiss && Swal.fire({
                    text: " لم يتم حذف  بند " + name,
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "حسنا",
                    customClass: {confirmButton: "btn fw-bold btn-primary"}
                })
            }))
        }

        function timeIframe() {
            setTimeout(function () {
                dotting_iframe.removeClass().addClass('invisible d-none visually-hidden');
            }, 10000);
        }

        function countRows() {
            const t = document.querySelector('[data-table-toolbar="base"]'),
                e = document.querySelector('[data-table-toolbar="selected"]'),
                o = document.querySelector('[data-table-select="selected_count"]'),
                c = table_dotting.querySelectorAll('tbody [type="checkbox"]');
            let r = !1, l = 0;
            c.forEach(t => {
                t.checked && (r = !0 , l++)
            }), r ? (o.innerHTML = "تم تحديد : " + l + " عنصر ", t.classList.add("d-none"), e.classList.remove("d-none")) : (t.classList.remove("d-none"), e.classList.add("d-none"));
        }

        function deleteRow() {
            table_dotting = document.querySelector("#table_dotting");
            const e = table_dotting.querySelectorAll('[type="checkbox"]'),
                o = document.querySelector('[data-table-select="delete_selected"]');
            e.forEach((t => {
                t.addEventListener("click", (function () {
                    setTimeout((function () {
                        countRows();
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
                        var url = "{{route('dotting.moveToTrash',['id'=>':id'])}}";
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
                        DataTable_dotting.ajax.reload(null, false);
                        table_dotting.querySelectorAll('[type="checkbox"]')[0].checked = !1;
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
            initDataTable.ajax = '{{route('dotting.table.show')}}';
            initDataTable.columns = {!!json_encode($dt_info['labels'])!!};
            initDataTable.order = {!!json_encode($dt_info['order'])!!};
            initDataTable.columnDefs = [
                {
                    targets: 0,
                    orderable: false,
                    sortable: false
                },
                {
                    targets: 4,
                    orderable: false
                },
                {
                    targets: 5,
                    orderable: false,
                    sortable: false
                },
            ];
            DataTable_dotting = $('#table_dotting').DataTable(initDataTable);
            DataTable_dotting.on("draw", (function () {
                deleteRow(),
                    countRows();
            })), deleteRow();
            document.querySelector('[data-table-filter="search"]').addEventListener("keyup", (function (e) {
                if (e.keyCode === 13) {
                    DataTable_dotting.search(e.target.value).draw();
                }
            }));
        });
    </script>
@endpush
