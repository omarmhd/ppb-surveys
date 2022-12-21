<!--begin::Modal - New Target-->
<div class="modal fade" id="addsubdots" tabindex="-1" aria-hidden="true">
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


            <div class="alert alert-danger print-error-msg m-10" style="display:none">
                <ul></ul>
            </div>
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form class="form" method="post" id="sub_dot_form"
                      action="{{route('Dotting.add_sub_dot',['id'=>'6'])}}">
                    <input type="hidden" class="csrf_token" name="_token" value="{{ csrf_token() }}"/>
                @method('put')

                <!--begin::Heading-->
                    <div class="mb-7 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">البنود الفرعية</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-gray-400 fw-bold fs-7">وزارة الأشغال العامة والإسكان
                            <a class="fw-bolder link-primary">قم بإضافة بند فرعي</a>.
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
                                <span class="required">البند فرعي</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="البند فرعي"
                                   name="name"/>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">الدرجة للبند</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid"
                                   placeholder="الدرجة للبند"
                                   name="degree"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <div id="list-role" class="list-sub-dots">
                        <!--begin::Item-->

                        <!--end:Item-->
                        <!--begin::Item-->

                    </div>
                    <!--
                    تحديد نوع الريكوست إن كان من نوع حفظ بيانت النقاط الفرعية
                    -->


                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="submit" id="sub-dot_submit" class="btn btn-primary">
                            <span class="indicator-label">حفظ</span>
                            <span class="indicator-progress">الرجاء الإنتظار...
															<span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <button type="reset" id="sub-dot_cancel" class="btn btn-white me-3">إلغاء</button>
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

            var exampleModal = document.getElementById('addsubdots')
            var main_dot_id = 0;
            exampleModal.addEventListener('show.bs.modal', function (event) {

                // Button that triggered the modal


                var button = event.relatedTarget

                var recipient = button.getAttribute('data-bs-whatever')
                var arrsudotbs = button.getAttribute('data-bs-arrsubdots')
                main_dot_id = button.getAttribute('data-main-dot-id')

                // Extract info from data-bs-* attributes
                let subdot = jQuery.parseJSON(arrsudotbs);

                $.each(subdot, function (key, value) {

                    $(".list-sub-dots").append(`<div class="d-flex align-items-center mb-8">
                            <span class="bullet bullet-vertical h-40px bg-secondary"></span>

                            <a  onclick="delete_sub_dot('` + main_dot_id + `','` + value.id + `');$('#item').parent().remove();"  id="item"  href="javascript:void(0)" class="btn btn-icon  btn-active-color-primary btn-sm me-5">

                                <span class="svg-icon svg-icon-1 ms-2 me-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
																<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"></rect>
																<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1"></rect>
															</g>
														</svg>
													</span>

                            </a>

                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">` + value.name + `</a>
                            </div>

                            <span class="badge badge-secondary fs-8 fw-bolder">` + value.degree + `</span>
                        </div>`);

                });


            });

            exampleModal.addEventListener('hide.bs.modal', function (event) {

                // Button that triggered the modal

                $('.list-sub-dots').empty();

            });

            $('#sub_dot_form').submit(function (e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('.csrf_token').val()
                    }
                });


                let url = "{{route('Dotting.add_sub_dot',['id'=>':id'])}}";


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
                        if (data.error) {

                            $(".print-error-msg").find("ul").html('');
                            $(".print-error-msg").css('display', 'block');

                            $.each(data.error, function (key, value) {
                                $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
                            });
                        } else {
                            $(".print-error-msg").css('display', 'none');
                            toastr.success(data.success)
                            $('.btn-model-pass-data' + main_dot_id).attr('data-bs-arrsubdots', data.arr_sub_dots)

                            let subdot = jQuery.parseJSON(data.arr_sub_dots);
                            $(".list-sub-dots").empty()

                            $.each(subdot, function (key, value) {

                                $(".list-sub-dots").append(`<div class="d-flex align-items-center mb-8">
                            <span class="bullet bullet-vertical h-40px bg-secondary"></span>

                            <a  onclick="delete_sub_dot('` + main_dot_id + `','` + value.id + `');$('#item').remove();"  id="item"  href="javascript:void(0)" class="btn btn-icon  btn-active-color-primary btn-sm me-5">

                                <span class="svg-icon svg-icon-1 ms-2 me-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
																<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"></rect>
																<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1"></rect>
															</g>
														</svg>
													</span>

                            </a>

                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">` + value.name + `</a>
                            </div>

                            <span class="badge badge-secondary fs-8 fw-bolder">` + value.degree + `</span>
                        </div>`);

                            });
                            DataTable_dotting.ajax.reload(null, false)


                        }
                    }
                });
            });


        });

        function delete_sub_dot(id_man, id_sub) {
            console.log(id_man);
            console.log(id_sub);
            let url = "{{route('Dotting.subdot.destroy',['id_main'=>':main','id_sub'=>':sub'])}}";

            url = url.replace(':main', id_man);
            url = url.replace(':sub', id_sub);

            console.log(url)


            $.ajax({
                type: 'get',
                url: url,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    console.log(data.data)

                    toastr.success(data.success)


                }
            });

        }
    </script>
@endpush
