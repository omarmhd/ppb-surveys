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
    <li class="breadcrumb-item text-muted">النظام</li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">المستخدمين</li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-white">صلاحيات المستخدم</li>
    <!--end::Item-->
@endsection
@push('css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
@endpush
@section('content')
    <form class="row g-3">

        <div class="card">
            <!--begin::Card Body-->
            <div class="card-body fs-6 p-10 p-lg-15">
                <!--begin::Section-->
                <div class="pb-10">
                    <!--begin::Heading-->
                    <h1 class="anchor fw-bolder mb-5" id="overview">
                        <a href="#overview"></a>إضافة صلاحيات</h1>

                    <h3>صلاحيات المستخدم / عمر الحداد </h3>

                    <!--end::Heading-->
                    <!--begin::Block-->
                    <div class="py-5">

                        <div class="row">
                            <div class="col-md-4">
                                <label for="user_type" class="form-label"> نوع المستخدم </label>
                                <select name="user_type" id="user_type" class="form-select">
                                    <option value="فعال">فعال</option>
                                    <option value="غير فعال">غير فعال</option>

                                </select>

                            </div>


                        </div>

                        <div class="row my-5">

                            <div class="col-6">


                                <div class="form-check px-5 py-3 " style="background: #FBF1FA">

                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        صلاحيات البحث
                                    </label>
                                </div>
                                <div class="form-check px-5 my-2 ">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                           checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        اضافة
                                    </label>
                                </div>
                                <div class="form-check px-5 my-2 ">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                           checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        تعديل
                                    </label>
                                </div>
                                <div class="form-check px-5 my-2 ">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                           checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        حذف
                                    </label>
                                </div>
                                <div class="form-check px-5 my-2 ">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                           checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        اضافة
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">


                                <div class="form-check px-5 py-3" style="background: #FBF1FA">

                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        صلاحيات البحث
                                    </label>
                                </div>
                                <div class="form-check px-5 my-2 ">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                           checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        اضافة
                                    </label>
                                </div>
                                <div class="form-check px-5 my-2 ">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                           checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        تعديل
                                    </label>
                                </div>
                                <div class="form-check px-5 my-2 ">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                           checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        حذف
                                    </label>
                                </div>
                                <div class="form-check px-5 my-2 ">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                           checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        اضافة
                                    </label>
                                </div>
                            </div>


                        </div>


                    </div>


                </div>

                <!--end::Block-->
            </div>

        </div>


    </form>

@endsection
