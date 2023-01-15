@extends('layouts.app_admin')




@section('content')


    <!--begin::Form Widget 13-->
    <div class="card">
        <h3 class="text-center py-2">{{$survey->survey->title}}  ({{$survey->survey->description}} )</h3>
        <!--begin::Body-->
        <div class="card-body py-1">
            <!--begin:Form-->
            <!--begin::Heading-->
            <div class="mb-13 mt-5 text-start">
                <!--begin::Title-->
                <h3 class="mb-3">   تقيم الموظف :<span  class="text-muted fs-2 text-decoration-underline" style="color:red">{{$survey->employee->full_name}}</span> </h3>
                <h3 class="mb-3">   المسؤول المقيم :<span  class="text-muted fs-2 text-decoration-underline" style="color:red">{{$survey->evaluator->full_name}}</span> </h3>

                <!--end::Title-->
                <!--begin::Description-->
{{--                <div class="text-gray-400 fw-bold fs-5">--}}
{{--                    <a href="{{route('activated-surveys.index')}}" class="fw-bolder link-primary">نماذج التقيم الأخرى</a>.--}}
{{--                </div>--}}
                <!--end::Description-->
            </div>
            <form id="form1" class="form" method="POST" action="javascript:void(0)">
                @method('put')
                @csrf
                <div class="row g-9 mb-8">
                        <div class="col-md-12 fv-row">
                        <div class="table-responsive">

                    <!--begin::Table-->
                    <table id="table_id" border="1"
                           class="table  table-bordered  table-striped table-hover table-row-gray-300 align-middle gs-0 gy-3 border-1 text-center fs-7">
                        <!--begin::Table head-->
                        <thead>
                        <tr class="fw-bolder  bg-secondary text-muted " >

                            <th class="min-w-100px text-center align-middle" rowspan="2">المجال</th>
                            <th class="min-w-10px text-center align-middle" rowspan="2">م</th>
                            <th class="min-w-200px text-center align-middle" rowspan="2">العنصر</th>

                            <th colspan="5">
                                الدرجة
                            </th>

                        </tr>

                        <tr>

                            @foreach($points as $point)
                                <th class="min-w-20px text-center fs-3">{{$point->score}}</th>
                            @endforeach

                        </tr>





                        </thead>


                        <tbody>






                        @foreach($sections as $key=>$section)
                            <tr>
                                    <td rowspan="{{$section->results->count()}}">
                                        {{$section->section->title}}




                                    </td>




                          @foreach($section->results as $key=>$result)



                             @if($key>0)

                                 <tr>


                             @endif
                               <td>{{$key+1}} </td>
                                <td>{{$result->question_title}} </td>

                               @if($survey->status='1' ||$survey->status='3')
                                         @foreach($points as $point)

                                             <td><input type="radio" class="form-check-input radio-sm calc"  {{$point->score==$result->score?"checked":""}}  name="results[{{$result->id}}]" value="{{$point->score}}"></td>

                                         @endforeach

                                     @else
                                     @foreach($points as $point)

                                         <td><input type="radio" class="form-check-input radio-sm calc"  name="results[{{$result->id}}]" value="{{$point->score}}"></td>

                                     @endforeach
                                   @endif


                                 </tr>



                          @endforeach





              @endforeach




                        </tbody>





                        <!--end::Table head-->
                    </table>
                    <!--end::Table-->
                </div>
                    </div>
                    <h4> درجة التقيم هي :  <span class="score text-danger">0</span></h4>

                    <div class="col-md-12 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class=""> الملاحظات إن وجدت</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                               title="تظهر هذه الملاحظات للموظف كتغذية راجعة "></i>
                        </label>
                        <!--end::Label-->
                        <textarea id=""  class="form-control form-control-solid" name="evaluator_notes" rows="5" cols="11"
                               placeholder="تظهر هذه الملاحظات كتغذية راجعة للموظف"
                                  name="title"/></textarea>

                    </div>
                </div>




                <div class="text-center mt-20 ms-20 mb-20">
                    <button type="submit" id="user_submit" class="btn btn-primary">
                        <span class="indicator-label"><i class="fa fa-save"></i> تسليم </span>
                        <span class="indicator-progress">الرجاء الإنتظار...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <a href="{{route('activated-surveys.index')}}" class="btn btn-secondary"> <i class="fa fa-"></i>عودة</a>
{{--                    <button type="reset" id="user_cancel" class="btn btn-white me-3">إلغاء</button>--}}
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
        function calcscore(){
            var score = 0;
            $(".calc:checked").each(function(){
                score+=parseInt($(this).val(),10);
            });
            $(".score").text(score)
            $("input[name=sum]").val(score)
        }
        $().ready(function(){
            $(".calc").change(function(){
                calcscore()

            });
        });
    </script>


    @include("parts.sweetCreate", ['route' => route('evaluation.update',['activated_survey'=>$survey]),'method'=>'put'])

@endpush

{{--@push('js')--}}
{{--    <script>--}}
{{--        let user_submit = document.getElementById("user_submit");--}}
{{--        let user_cancel = document.getElementById("user_cancel");--}}
{{--        let user_form = document.getElementById('user_form');--}}
{{--        let user_iframe = document.getElementById('user_iframe');--}}
{{--        user_iframe.onload = function () {--}}
{{--            const iframeDocument = user_iframe.contentWindow.document;--}}
{{--            if (iframeDocument.getElementById('type') != null) {--}}
{{--                if (iframeDocument.getElementById('type').value == "success") {--}}
{{--                    toastr.success(iframeDocument.getElementById('massage').innerText)--}}
{{--                } else {--}}
{{--                    toastr.error(iframeDocument.getElementById('massage').innerText)--}}
{{--                }--}}
{{--            } else {--}}
{{--                toastr.error((iframeDocument.querySelector('.solution-title') != null) ? iframeDocument.querySelector('.solution-title').innerText : (iframeDocument.querySelector('.ui-exception-class > span:last-child') != null) ? iframeDocument.querySelector('.ui-exception-class > span:last-child').innerText : "لا توجد إستجابة من السيرفر", 'حصل خطأ في السيرفر');--}}
{{--            }--}}
{{--        };--}}
{{--        user_iframe.src = '{{route('User.store')}}';--}}
{{--        window.frames[0].stop();--}}
{{--        var validate = FormValidation.formValidation(user_form, {--}}
{{--            fields: {--}}
{{--                id_number: {--}}
{{--                    validators: {--}}
{{--                        notEmpty: {message: "يجب تعبئة حقل رقم الهوية"},--}}
{{--                        regexp: {--}}
{{--                            regexp: /[0-9]{9}/i,--}}
{{--                            message: "يجب ان يتم تعبئة رقم الهوية بشكل صحيح"--}}
{{--                        },--}}
{{--                    }--}}
{{--                },--}}
{{--                name: {--}}
{{--                    validators: {--}}
{{--                        notEmpty: {message: "قم بإدخال الإسم مستخدم "},--}}
{{--                        regexp: {--}}
{{--                            regexp: /^[A-Za-zء-ي]+ [A-Za-zء-ي]+ [A-Za-zء-ي]+ [A-Za-zء-ي]+/i,--}}
{{--                            message: "يجب ان تحتوي التسمية على الإسم الرباعي"--}}
{{--                        },--}}
{{--                    }--}}
{{--                },--}}
{{--                id_job: {--}}
{{--                    validators: {--}}
{{--                        regexp: {--}}
{{--                            regexp: /[0-9]+/i,--}}
{{--                            message: "يجب أن يحتوي الرقم الوظيفي على أرقام"--}}
{{--                        },--}}
{{--                    }--}}
{{--                },--}}
{{--                name_job: {--}}
{{--                    validators: {--}}
{{--                        notEmpty: {message: "يجب تعبئة حقل المسمى الوظيفي"},--}}
{{--                        regexp: {--}}
{{--                            regexp: /^[A-Za-zء-ي]+/i,--}}
{{--                            message: "يجب ان تحتوي التسمية على حروف"--}}
{{--                        },--}}
{{--                    }--}}
{{--                },--}}
{{--                email: {--}}
{{--                    validators: {--}}
{{--                        notEmpty: {message: "يجب تعبئة حقل البريد الإلكتروني"},--}}
{{--                        emailAddress: {--}}
{{--                            message: 'تأكد من كتابة البريد بشكل صحيح'--}}
{{--                        }--}}
{{--                    }--}}
{{--                },--}}
{{--                mobile: {--}}
{{--                    validators: {--}}
{{--                        notEmpty: {message: "يجب تعبئة حقل الرقم الجوال"},--}}
{{--                        regexp: {--}}
{{--                            regexp: /[0-9]{3}-[0-9]{2}-[0-9]{7}/i,--}}
{{--                            message: "يجب ان يكن تنسيق الرقم على هذا النحو *******-**-***"--}}
{{--                        },--}}
{{--                    }--}}
{{--                },--}}
{{--                password: {--}}
{{--                    validators: {--}}
{{--                        notEmpty: {message: "يجب تعبئة حقل كلمة السر"},--}}
{{--                        stringLength: {--}}
{{--                            min: 8,--}}
{{--                            message: 'يجب ان يحتوي كلمة السر 8 حرف كحد أقل'--}}
{{--                        },--}}
{{--                        regexp: {--}}
{{--                            regexp: /[A-Z0-9]+/i,--}}
{{--                            message: "يجب ان تحتوي كلمة السر على حروف إنجليزية وأرقام"--}}
{{--                        },--}}
{{--                    }--}}
{{--                },--}}

{{--            },--}}
{{--            plugins: {--}}
{{--                trigger: new FormValidation.plugins.Trigger,--}}
{{--                bootstrap: new FormValidation.plugins.Bootstrap5({--}}
{{--                    rowSelector: ".fv-row",--}}
{{--                    eleInvalidClass: "",--}}
{{--                    eleValidClass: ""--}}
{{--                }),--}}
{{--            }--}}
{{--        });--}}
{{--        user_submit.addEventListener("click", function (t) {--}}
{{--            t.preventDefault();--}}
{{--            validate.validate().then(function (e) {--}}
{{--                "Valid" === e ? (user_submit.setAttribute("data-kt-indicator", "on"), user_submit.disabled = true, user_form.submit(), user_form.reset(), setTimeout(function () {--}}
{{--                    user_submit.removeAttribute("data-kt-indicator"),--}}
{{--                        user_submit.disabled = false;--}}
{{--                    const iframeDocument = user_iframe.contentWindow.document;--}}
{{--                    toastr.success("تم إرسال الطلب وجاري معالجته في السيرفر")--}}
{{--                }, time_interval)) : Swal.fire({--}}
{{--                    text: "نأسف تأكد من صحة بعض المدخلات",--}}
{{--                    icon: "error",--}}
{{--                    buttonsStyling: !1,--}}
{{--                    confirmButtonText: "حسنا",--}}
{{--                    customClass: {confirmButton: "btn btn-primary"}--}}
{{--                });--}}
{{--            })--}}
{{--        });--}}
{{--        $('#id_number').on('keyup', function (e) {--}}
{{--            var id = $(this).val();--}}
{{--            if (id.toString().length == 9) {--}}
{{--                var url = "{{route('utilization.order.search.id',['id'=>':id'])}}"--}}
{{--                url = url.replace(':id', id);--}}
{{--                $.ajax({--}}
{{--                    type: 'get',--}}
{{--                    url: url,--}}
{{--                    data: {},--}}
{{--                    cache: false,--}}
{{--                    success: (data) => {--}}
{{--                       JSON.parse(data).forEach((e => {--}}
{{--                           $('#name').val(e.FNAME_ARB + ' '+ e.SNAME_ARB+ ' '+ e.TNAME_ARB+ ' '+ e.LNAME_ARB);--}}
{{--                       }));--}}
{{--                    },--}}
{{--                })--}}
{{--            }--}}
{{--            if (id == "") {--}}
{{--                $('#user_form').trigger("reset");--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}
{{--@endpush--}}
