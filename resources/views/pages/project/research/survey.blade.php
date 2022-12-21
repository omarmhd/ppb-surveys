@extends('layouts.app_admin')
@section('sub_title','عرض الطلبات')
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
    <li class="breadcrumb-item text-muted">إدارة طلبات الإنتفاع</li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-white">البحث الميداني</li>
    <!--end::Item-->
@endsection
@section('content')
    <form class="row g-3">

        <div class="card">
            <!--begin::Card Body-->
            <div class="card-body fs-6 p-10 p-lg-15">
                <!--begin::Section-->
                <div class="pb-10">
                    <!--begin::Heading-->
                    <h1 class="anchor fw-bolder mb-5" id="overview">
                        <a href="#overview"></a>تقرير بحث اجتماعي وفني</h1>
                    <!--end::Heading-->
                    <!--begin::Block-->
                    <div class="py-5">

                        <div class="row">
                            <div class="col-md-5">
                                <label for="" class="form-label">اسم المواطن </label>
                                <input type="text" class="form-control" id="ssss">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">رقم هوية
                                    المواطن </label>
                                <input type="password" class="form-control" id="s">
                            </div>

                        </div>


                        <div class="row mt-5">
                            <div class="col-md-5">
                                <label for="" class="form-label">اسم الزوجة </label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">رقم هوية
                                    الزوجة </label>
                                <input type="password" class="form-control" id="">
                            </div>

                        </div>

                        <div class="row mt-5">
                            <div class="col-md-5">
                                <label for="" class="form-label">اسم الزوجة </label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">رقم هوية
                                    الزوجة </label>
                                <input type="password" class="form-control" id="">
                            </div>

                        </div>


                        <div class="row mt-5">
                            <div class="col-md-4">
                                <label for="" class="form-label">الحالة الاجتماعية </label>
                                <select class="form-select">
                                    <option>أرمل</option>
                                    <option> مطلق</option>
                                    <option> متزوج</option>


                                </select>


                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">السكن </label>
                                <select class="form-select">
                                    <option>لاجىء</option>
                                    <option> مواطن</option>


                                </select>
                            </div>

                            <div class="col-md-2">
                                <label class="form-label">عدد أفراد الأسرة </label>
                                <input type="number" class="form-control" min="0" id="ss">

                            </div>

                            <div class="col-md-2">
                                <label class="form-label">عدد الطلاب الجامعين </label>
                                <input type="number" min="0" class="form-control" id="s">

                            </div>
                        </div>


                        <div class="row mt-5">


                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">رقم الجوال </label>
                                <input type="password" class="form-control" id="inputPassword4">
                            </div>
                            <div class="col-md-7">
                                <label for="" class="form-label">العنوان المفصل </label>
                                <textarea class="form-control" placeholder=" غزة تل الهوا شارع 8 "
                                          id="floatingTextarea2" rows="2" cols="3"
                                          style="height: 100px"></textarea>


                            </div>


                        </div>
                        <div class="row mt-10">


                            <div class="col-4">
                                <legend class="col-form-label col-sm-9 pt-0 mb-2 ">هل الوحدة السكنية
                                    على أرض ملك المواطن
                                </legend>
                                <br>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                           name="flexRadioDefault" id="">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        نعم

                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                           name="flexRadioDefault" id="">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        لا
                                    </label>
                                </div>

                            </div>
                            <div class="col-5">
                                <label for="" class="form-label"> نوع ملكية الأرض </label>
                                <input type="password" class="form-control" id="">
                            </div>

                            <div class="col-2">
                                <label for="" class="form-label"> دعم بالوثائق القانونية </label>
                                <input type="file" name="file[]" class="form-control" id="">
                            </div>


                        </div>
                        <div class="row mt-10">


                            <div class="col-4">
                                <legend class="col-form-label col-sm-9 pt-0 mb-2 ">هل الوحدة السكنية قابلة للترميم
                                </legend>
                                <br>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                           name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        نعم

                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                           name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        لا
                                    </label>
                                </div>

                            </div>
                            <div class="col-8">
                                <label for="" class="form-label"> حدد السبب </label>
                                <input type="password" class="form-control" id="">
                            </div>


                        </div>
                        <div class="row mt-10">


                            <div class="col-4">
                                <legend class="col-form-label col-sm-9 pt-0 mb-2 ">هل المواطن لديه مسكن بديل ملائم
                                </legend>
                                <br>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                           name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        نعم

                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                           name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        لا
                                    </label>
                                </div>

                            </div>
                            <div class="col-8">
                                <label for="" class="form-label"> حدد البديل </label>
                                <input type="password" class="form-control" id="">
                            </div>


                        </div>


                    </div>
                    <!--end::Block-->
                </div>
            </div>
        </div>

        <div class="card">
            <!--begin::Card Body-->
            <div class="card-body fs-6 p-10 p-lg-15">
                <!--begin::Section-->
                <div class="pb-10">
                    <!--begin::Heading-->
                    <h1 class="anchor fw-bolder mb-5" id="overview">
                        <a href="#overview"></a>احتياج المستفيد من المشروع </h1>
                    <!--end::Heading-->
                    <!--begin::Block-->
                    <div class="py-5">

                        <div class="row">
                            <div class="col-md-12 ">
                                <table
                                    class="table table-bordered table-row-gray-300 align-middle gs-0 gy-3 border-1 text-center mb-2">
                                    <thead class="text-center">
                                    <tr>
                                        <th scope="col" class="w-20">#</th>
                                        <th scope="col" class="w-20">احتياج المستفيد من المشروع</th>
                                        <th scope="col" class="w-20"> الملاحظات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>يحتاج وحدة سكنية</td>
                                        <td><input type="text" class="form-control" id=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>يحتاج إلى بناء</td>
                                        <td><input type="text" class="form-control" id=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>يحتاج هدم وإعادة بناء المنزل</td>
                                        <td><input type="text" class="form-control" id=""></td>
                                    </tr>


                                    <tr>
                                        <th scope="row">4</th>
                                        <td>يحتاج إلى تشطيب (شقةعظم)</td>
                                        <td><input type="text" class="form-control" id=""></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">5</th>

                                        <td>يحتاج إلى ترميم</td>
                                        <td><input type="text" class="form-control" id=""></td>
                                    </tr>
                                    </tbody>

                                </table>
                            </div>

                        </div>


                    </div>

                    <!--end::Block-->
                </div>

            </div>
        </div>

        <div class="card">
            <!--begin::Card Body-->
            <div class="card-body fs-6 p-10 p-lg-15">
                <!--begin::Section-->
                <div class="pb-10">
                    <!--begin::Heading-->
                    <h1 class="anchor fw-bolder mb-5" id="overview">
                        <a href="#overview"></a>احتياج المستفيد من المشروع </h1>
                    <!--end::Heading-->
                    <!--begin::Block-->
                    <div class="py-5">

                        <div class="row">
                            <div class="col-md-12">
                                <table
                                    class="table table-bordered table-row-gray-300 align-middle gs-0 gy-3 border-1 text-center">

                                    <thead class="text-center">


                                    <thead>


                                    <tr>
                                        <th scope="col" class="w-10">#</th>
                                        <th scope="col" colspan="2" class="w-30">بنود حرجة</th>
                                        <th scope="col" class="w-50"> الملاحظات</th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td scope="col" class="w-10">1
                                        </th>

                                        <td class="sorting_1">السلامة الإنشائية</td>
                                        <td>الوضع الإنشائي للوحدة السكنية غير مستقر ويتوقع حدوث انهيارات فيه</td>
                                        <td><input name="device_model_sn" type="text" class="form-control"/></td>
                                    </tr>
                                    <tr>
                                        <td scope="col" class="w-10">2
                                        </th>

                                        <td rowspan="2" class="sorting_1"> خدمات الوحدة السكنية</td>
                                        <td>لا يتوفر في الوحدة السكنية حمام أو دورة مياه</td>
                                        <td><input name="device_model_sn" type="text" class="form-control"/></td>

                                    </tr>
                                    <tr>
                                        <td scope="col" class="w-10"></td>


                                        <td>لا يتوفر في الوحدة السكنية مطبخ</td>
                                        <td><input name="device_model_sn" type="text" class="form-control"/></td>
                                    </tr>
                                    <tr>
                                        <td scope="col" class="w-10">3</td>

                                        <td> يحتاج إلى ترميم</td>
                                        <td>المنزل بحاجة إلى تدخل للترميم</td>
                                        <td><input name="device_processor_sn" type="text" class="form-control"/></td>
                                    </tr>

                                    <tr>
                                        <td scope="col" class="w-10">4</td>

                                        <td rowspan="2"> الحوائط والسقف</td>
                                        <td>لا يوجد سقف للمطبخ أو حمام الوحدة السكنية إضافة لغرفة و الممرات الرئيسية
                                        </td>
                                        <td><input name="device_processor_sn" type="text" class="form-control"/></td>
                                    </tr>

                                    <tr>
                                        <td scope="col" class="w-10"></td>

                                        <td>لايوجد أرضية صلبة اسمنية ملائمة لمطبخ أو حمام الوحدة السكنية إضافة لغرفة
                                            والممرات الرئيسية
                                        </td>
                                        <td><input name="device_model_sn" type="text" class="form-control"/></td>
                                    </tr>

                                    <tr>
                                        <td scope="col" class="w-10">5</td>

                                        <td rowspan="3"> الشبكات</td>
                                        <td>لا يتوفر تصريف للصروف للوحدة السكنية</td>
                                        <td><input name="device_processor_sn" type="text" class="form-control"/></td>
                                    </tr>

                                    <tr>
                                        <td scope="col" class="w-10"></td>

                                        <td>لا يتوفر شبكة كهرباء آمنة في الوحدة السكنية</td>
                                        <td><input name="device_model_sn" type="text" class="form-control"/></td>
                                    </tr>
                                    <tr>
                                        <td scope="col" class="w-10"></td>

                                        <td>لا يتوفر مصدر مياه للوحدة السكنية</td>
                                        <td><input name="device_model_sn" type="text" class="form-control"/></td>
                                    </tr>


                                    <tr>
                                        <td scope="col" class="w-10">6</td>

                                        <td rowspan="3"> الوصول للوحدة السكنية</td>
                                        <td>الوحدة السكنية غير محاطة بطريقة آمنة ولا يوجد مدخل محكمة واضحة المعالم
                                            للوحدة السكنية
                                        </td>
                                        <td><input name="device_processor_sn" type="text" class="form-control"/></td>
                                    </tr>

                                    <tr>
                                        <td scope="col" class="w-10"></td>

                                        <td> لا يمكن لذوي الاعاقة إن وجد في الوحدة السكنية الدخول والخروج له واستخدام
                                            خدماته بسهولة
                                        </td>
                                        <td><input name="device_model_sn" type="text" class="form-control"/></td>
                                    </tr>
                                    <tr>
                                        <td scope="col" class="w-10"></td>

                                        <td>لا يتوفر طريقة آمن للوصول للمسكن</td>
                                        <td><input name="device_model_sn" type="text" class="form-control"/></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>


                    </div>

                    <!--end::Block-->
                </div>

            </div>
        </div>

        <div class="card">
            <!--begin::Card Body-->
            <div class="card-body fs-6 p-10 p-lg-15">
                <!--begin::Section-->
                <div class="pb-10">
                    <!--begin::Heading-->
                    <h1 class="anchor fw-bolder mb-5" id="overview">
                        <a href="#overview"></a>المعايير </h1>
                    <!--end::Heading-->
                    <!--begin::Block-->
                    <div class="py-2">

                        <div class="row">
                            <div class="col-md-12">
                                <table
                                    class="table table-bordered table-row-gray-300 align-middle gs-0 gy-3 border-1 table-hover">
                                    <thead class="text-center">


                                    <tr>
                                        <th scope="col" class="w-10">#</th>
                                        <th scope="col" class="w-10">المعايير الصحية والإجتماعية</th>
                                        <th scope="col" class="w-10"> التوزيع</th>
                                        <th scope="col" class="w-70" style="width: 40%">وصف الملخص</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td scope="col" class="w-10">1

                                        <td class="">إعاقة أو مرض مزمن</td>
                                        <td>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                       value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">رب الأسرة</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">الزوجة</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">أحد
                                                    الأبناء</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">ثلاث أفراد فأكثر
                                                    وليس منهم الأب
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                       value="option2">
                                                <label>عدد 2 من الأبناء أو ابن وزوجة
                                                    ورب الأسرة سليم </label>

                                            </div>

                                        </td>
                                        <td><textarea class="form-control" id="exampleFormControlTextarea1"
                                                      rows="6"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="col" class="w-10">2
                                        </th>

                                        <td class="sorting_1"> نصيب الفرد الواحد من دخل الأسرة</td>
                                        <td>الدخل</td>
                                        <td><textarea class="form-control" id="exampleFormControlTextarea1"
                                                      rows="1"></textarea></td>

                                    </tr>

                                    <tr>
                                        <td scope="col" class="w-10">2

                                        <td class="sorting_1"> عدد الأسر المقيمة في المسكن الواحد</td>
                                        <td>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox1"
                                                       value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">أسرة
                                                    واحدة </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">أسرتين</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2"> ثلاثة
                                                    فأكثر</label>
                                            </div>

                                        </td>
                                        <td><textarea class="form-control" id="exampleFormControlTextarea1"
                                                      rows="2"></textarea></td>

                                    </tr>

                                    <tr>
                                        <td scope="col" class="w-10">2

                                        <td class="sorting_1">وجود طلاب جامعة لدي الأسرة</td>
                                        <td>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox1"
                                                       value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">لا يوجد </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">يوجد طالب
                                                    واحد </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2"> يوجد عدد 2 طلاب
                                                    جامعة</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2"> يوجد عدد 3 فأكثر
                                                    طلاب جامعة</label>
                                            </div>
                                        </td>
                                        <td><textarea class="form-control" id="exampleFormControlTextarea1"
                                                      rows="2"></textarea></td>

                                    </tr>

                                    <tr>
                                        <td scope="col" class="w-10">2

                                        <td class="sorting_1">درجة الهشاشة إعالة</td>
                                        <td>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox1"
                                                       value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">الأرملة ربة الأسرة
                                                    ولا تعمل </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">الأرملة ربة الأسرة
                                                    و تعمل </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2"> المطلقة ربة
                                                    الأسرة ولا تعمل </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">المطلقة ربة الأسرة
                                                    وتعمل </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">منفصلة عن زوجها
                                                    ومعيلة ولا تعمل (مهجورة ) </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">منفصلة عن زوجها
                                                    ومعيلة و تعمل (مهجورة ) </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">عمر رب الأسرة أكبر
                                                    من 60 و لا يعمل </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">عمر رب الأسرة أكبر
                                                    من 60 ويعمل </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">المتزوج من
                                                    اثنتين </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">متزوج ولا يعمل أو
                                                    يعمل منقطع </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">الأعزب المعيل
                                                    الأسرة (يعمل) </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">الأعزب المعيل
                                                    الأسرة ( لا يعمل) </label>
                                            </div>
                                        </td>
                                        <td><textarea class="form-control" id="exampleFormControlTextarea1"
                                                      rows="12"></textarea></td>

                                    </tr>


                                    <tr>
                                        <td scope="col" class="w-10">6

                                        <td class="sorting_1">نسبة الأفراد المقيمين في الوحدة السكنية</td>
                                        <td>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox1"
                                                       value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">أكثر من
                                                    10 </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">من 8-10 </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">من 5-7</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">من 3-4</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">عدد 2</label>
                                            </div>
                                        </td>
                                        <td><textarea class="form-control" id="exampleFormControlTextarea1"
                                                      rows="2"></textarea></td>

                                    </tr>

                                    <tr>
                                        <td scope="col" class="w-10">7

                                        <td class="sorting_1">نسبة الأفراد أكبر من 8 سنوات عدا رب وربة الأسرة</td>
                                        <td>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox1"
                                                       value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">أقل من
                                                    25% </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">من25-50%</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">بين 50-75%</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">أكثر من
                                                    75%</label>
                                            </div>

                                        </td>
                                        <td><textarea class="form-control" id="exampleFormControlTextarea1"
                                                      rows="2"></textarea></td>

                                    </tr>


                                    <tr>
                                        <td scope="col" class="w-10">8

                                        <td class="sorting_1">عدد البنات فوق سن 12 سنة</td>
                                        <td>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox1"
                                                       value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">لا يوجد </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">أقل من 3
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">أكثر من 3</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                                       value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">أكثر من
                                                    75%</label>
                                            </div>

                                        </td>
                                        <td><textarea class="form-control" id="exampleFormControlTextarea1"
                                                      rows="2"></textarea></td>

                                    </tr>
                                    <tr>
                                        <td scope="col" class="w-10">9

                                        <td class="sorting_1">حالة الأثاث</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6"><label>يوجد لدي المواطن أثاث كالسرر والفرشات وخلافه
                                                        : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label" for="inlineCheckbox1"> بحالة
                                                            جيدة</label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">متوسط
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">سيئة</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا
                                                            يوجد</label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-6"><label> أثاث المواطن متوفر به خزانات : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label" for="inlineCheckbox1"> بحالة
                                                            جيدة</label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">متوسط
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">سيئة</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا
                                                            يوجد</label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-6"><label> أثاث المواطن متوفر به خزانات : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label" for="inlineCheckbox1"> بحالة
                                                            جيدة</label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">متوسط
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">سيئة</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا
                                                            يوجد</label>
                                                    </div>


                                                </div>


                                            </div>

                                        </td>
                                        <td><textarea class="form-control" id="exampleFormControlTextarea1"
                                                      rows="2"></textarea></td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <table
                                    class="table table-bordered table-row-gray-300 align-middle gs-0 gy-3 border-1 table-hover">
                                    <thead class="text-center">


                                    <tr>
                                        <th scope="col" class="w-10">#</th>
                                        <th scope="col" class="w-10">المعايير الصحية والإجتماعية</th>
                                        <th scope="col" class="w-10"> التوزيع</th>
                                        <th scope="col" class="w-70" style="width: 40%">وصف الملخص</th>

                                    </tr>
                                    </thead>


                                    <tbody>

                                    <tr>
                                        <td scope="col" class="w-10">1

                                        <td class="sorting_1">سقف وحوائط سكنية</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-12"><label>هل سقف الوحدة السكنية باطون (سقف مفرغ )
                                                        : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">نعم </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">جزئي
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا</label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label> حاجة السقف للصيانة: </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label" for="inlineCheckbox1">لا
                                                            يحتاج </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">متوسط
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">كبيرة </label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label> حاجة حوائط الوحدة السكنية للصيانة : </label>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label" for="inlineCheckbox1">لا
                                                            يحتاج </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">متوسطة
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">كبيرة</label>
                                                    </div>


                                                </div>


                                            </div>

                                        </td>
                                        <td><textarea class="form-control" id="exampleFormControlTextarea1"
                                                      rows="2"></textarea></td>

                                    </tr>
                                    <tr>
                                        <td scope="col" class="w-10">2

                                        <td class="sorting_1">أرضية وتشطيب الوحدة السكنية</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-12"><label>قصارة داخلية : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">يوجد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">جزئي
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا</label>
                                                    </div>


                                                </div>


                                            </div>

                                            <div class="row">
                                                <div class="col-12"><label>بلاط المطبخ (أرضية + حوائط) : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">يوجد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">جزئي
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا</label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label>بلاط الحمام (أرضية حوائط ) : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">يوجد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">جزئي
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا</label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label>بلاط باقي الوحدة السكنية : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">يوجد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">جزئي
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا</label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label>وجود شبابيك ملائمة في الوحدة السكنية
                                                        : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">جيد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">متوسط
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">سىء</label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label> وجود أبواب ملائمة في الوحدة السكنية عدا باب
                                                        المدخل : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">جيد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">متوسط
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">سىء </label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label> باب منزل رئيسي : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">يوجد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا يوجد
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">كبيرة</label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label> دهان الوحدة السكنية : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">يوجد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا يوجد
                                                        </label>
                                                    </div>


                                                </div>


                                            </div>

                                        </td>
                                        <td><textarea class="form-control" id="exampleFormControlTextarea1"
                                                      rows="2"></textarea></td>

                                    </tr>

                                    <tr>
                                        <td scope="col" class="w-10">3

                                        <td class="sorting_1">خدمات الوحدة السكنية</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-12"><label>قصارة داخلية : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">يوجد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا
                                                            يوجد </label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label>شبكة تصريف مجاري للوحدة : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">يوجد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا
                                                            يوجد </label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label>كرسي الحمام : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">يوجد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا
                                                            يوجد </label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label>باب الحمام : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">يوجد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا
                                                            يوجد </label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label>متوفر مغسلة للحمام : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">يوجد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا
                                                            يوجد </label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label>توفر دش للحمام : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">يوجد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا
                                                            يوجد </label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label>تنك 1 كوب على الأقل : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">يوجد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا
                                                            يوجد </label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label>الحمام منفصل تماما عن المطبخ : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">يوجد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا
                                                            يوجد </label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label>مجلى (خزانة) في المطبخ مع حوض (1.20م كحد أدنى
                                                        ) : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">يوجد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">سىء</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا
                                                            يوجد </label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label>سخان المياه : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">يوجد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا
                                                            يوجد </label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label>الحاجة لتأهيل الخدمات لتناسب ذوي الاحتياجات
                                                        وكبار السن : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">يوجد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا
                                                            يوجد </label>
                                                    </div>


                                                </div>


                                            </div>


                                        </td>
                                        <td><textarea class="form-control" id="exampleFormControlTextarea1"
                                                      rows="2"></textarea></td>

                                    </tr>

                                    <tr>
                                        <td scope="col" class="w-10">4

                                        <td class="sorting_1">مساحة الوحدة السكنية</td>
                                        <td>

                                            <div class="row">
                                                <div class="col-12"><label>عدد الأفراد في غرف النوم عدا غرفة الأب والأم
                                                        : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label" for="inlineCheckbox1">شخصين أو
                                                            أقل </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">من 3-4
                                                            أشخاص </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">أكثر من
                                                            4 </label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label>مساحة المطبخ (حد أدني 3 م^2) : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">يوجد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا
                                                            يوجد </label>
                                                    </div>


                                                </div>


                                            </div>

                                        </td>
                                        <td><textarea class="form-control" id="exampleFormControlTextarea1"
                                                      rows="2"></textarea></td>

                                    </tr>
                                    <tr>
                                        <td scope="col" class="w-10">5

                                        <td class="sorting_1">شبكة الكهرباء</td>
                                        <td>

                                            <div class="row">
                                                <div class="col-12"><label>عدد الأفراد في غرف النوم عدا غرفة الأب والأم
                                                        : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label" for="inlineCheckbox1">شخصين أو
                                                            أقل </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">من 3-4
                                                            أشخاص </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">أكثر من
                                                            4 </label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label>شبكة تأسيسات كهرباء (أسود) : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">يوجد </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">سيئة </label>
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا
                                                            يوجد </label>
                                                    </div>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label>شبكة تأسيسات كهرباء (أبيض) : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">جيدة </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">سيئة</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا
                                                            يوجد </label>
                                                    </div>


                                                </div>


                                            </div>

                                            <div class="row">
                                                <div class="col-12"><label>طبلون كهرباء حسب المواصفات الفنية : </label>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">جيدة </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">سيئة</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">لا
                                                            يوجد </label>
                                                    </div>


                                                </div>


                                            </div>
                                        </td>
                                        <td><textarea class="form-control" id="exampleFormControlTextarea1"
                                                      rows="2"></textarea></td>

                                    </tr>

                                    <tr>
                                        <td scope="col" class="w-10">5

                                        <td class="sorting_1"> التهوية والإضءة في الطبيعة (5% من مساحة المرفق كحد
                                            أدني)
                                        </td>
                                        <td>

                                            <div class="row">
                                                <div class="col-12"><label>تهوية وضوء النهار في المطبخ : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">ممتاز </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">جيد </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">متوسط </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">سىء </label>
                                                    </div>

                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label>تهوية وضوء النهار في الحمام : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">ممتاز </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">جيد </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">متوسط </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">سىء </label>
                                                    </div>

                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label>تهوية وضوء النهار في الوحدة السكنية
                                                        : </label></div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">ممتاز </label>
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox1" value="option1">
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">جيد </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">متوسط </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                               id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox2">سىء </label>
                                                    </div>

                                                </div>


                                            </div>

                                        </td>
                                        <td><textarea class="form-control" id="exampleFormControlTextarea1"
                                                      rows="2"></textarea></td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>


                    </div>

                    <!--end::Block-->
                </div>

            </div>
        </div>
    </form>

@endsection
