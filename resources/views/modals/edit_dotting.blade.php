<!--begin::Modal - New Target-->
<div class="modal fade" id="edit_dots" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
                <form id="dot_form_update" class="form" action="{{route('Dotting.update',['Dotting'=>'4'])}}"
                      method="post">
                @csrf
                @method('put')
                <!--begin::Heading-->
                    <div class="mb-7 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">البنود الرئيسية</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-gray-400 fw-bold fs-7">وزارة الأشغال العامة والإسكان
                            <a class="fw-bolder link-primary">تعديل البنود</a>.
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
                                <span class="required">البند</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid main-dot" placeholder="البند"
                                   name="name_dotting"/>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">الدرجة للبند</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid main-degree"
                                   placeholder="الدرجة للبند"
                                   name="degree_dotting"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <div id="list-role" class="list-sub-dots">
                        <!--begin::Item-->


                        <!--end:Item-->
                        <!--begin::Item-->

                        <!--end:Item-->
                    </div>

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="submit" id="edit_doting_submit" class="btn btn-primary">
                            <span class="indicator-label">حفظ</span>
                            <span class="indicator-progress">الرجاء الإنتظار...
															<span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <button type="reset" id="edit_doting_cancel" class="btn btn-white me-3">إلغاء</button>
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
        $(function () {

            var edit_dots = document.getElementById('edit_dots')
            var main_dot_id = 0;
            edit_dots.addEventListener('show.bs.modal', function (event) {

                // Button that triggered the modal


                var button = event.relatedTarget

                var recipient = button.getAttribute('data-bs-whatever')
                var arrsudotbs = button.getAttribute('data-bs-arrsubdots')
                var main_dot = button.getAttribute('data-bs-main-dot')
                var degree_dot = button.getAttribute('data-bs-degree-dot')

                main_dot_id = button.getAttribute('data-main-dot-id')

                var modal = $(this)


                // Extract info from data-bs-* attributes
                modal.find('.modal-body .main-degree').val(degree_dot)
                modal.find('.modal-body .main-dot').val(main_dot)
                let subdot = jQuery.parseJSON(arrsudotbs);
                var counter = 0;
                $.each(subdot, function (key, value) {

                    $(".list-sub-dots").append(`  <div class="d-flex align-items-center mb-8" >
                            <!--begin::Bullet-->
                            <span class="bullet bullet-vertical h-40px bg-secondary"></span>
                            <!--end::Bullet-->
                            <a href="#" class="btn btn-icon  btn-active-color-primary btn-sm me-5"
                               data-bs-toggle="modal" data-bs-target="#kt_modal_add_sub_role">
                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                <span class="svg-icon svg-icon-1 ms-2 me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         width="24px"
                                         height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                               fill="#000000">
                                                <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"/>
                                                <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                                              x="0" y="7" width="16" height="2" rx="1"/>
                                            </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>

                            <!--begin::Description-->
                            <div class="col-md-6 fv-row">
                                    <input type="text" class="form-control" placeholder="البند الفرعي"
                                           name="name[` + counter + `]"  value="` + value.name + ` "/>
                            </div>
                            <!--end::Description-->
                            <div class="col-md-2 fv-row  ms-20 ">
                                 <input type="text" class="form-control text-center" placeholder="درجة النقاط" value="` + value.degree + `"
                                        name="degree[` + counter + `]"/>
                            </div>
                         <input type="hidden" name="id[` + counter + `]" value="` + value.id + `"


                        </div>`);
                    counter++;

                });

            });

            edit_dots.addEventListener('hide.bs.modal', function (event) {

                // Button that triggered the modal

                $('.list-sub-dots').empty();

            });

            $('#dot_form_update').submit(function (e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('.csrf_token').val()
                    }
                });


                let url = "{{route('Dotting.update',['Dotting'=>':id'])}}";

                url = url.replace(':id', main_dot_id);

                let formData = new FormData(this);

                $.ajax({
                    type: 'post',
                    url: url,
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {

                        toastr.success(data.success)
                        $('.btn-model-pass-data' + main_dot_id).attr('data-bs-arrsubdots', data.arr_sub_dots);

                    }
                });

                DataTable_dotting.ajax.reload(null, false)


            });


            function delete_sub_dot(id_man, id_sub) {
                console.log(id_man);
                console.log(id_sub);
                let url = "{{route('Dotting.subdot.destroy',['id_main'=>':main','id_sub'=>':sub'])}}";

                url = url.replace(':main', id_man);
                url = url.replace(':sub', id_sub);


                $.ajax({
                    type: 'get',
                    url: url,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        console.log(data.data)

                        toastr.success(data.data)


                    }
                });

            }

        });
    </script>
@endpush
