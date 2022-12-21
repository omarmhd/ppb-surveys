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
    <li class="breadcrumb-item text-white">تحميل ملف</li>
    <!--end::Item-->
@endsection
@push('css')
    <style>
        .card {
            margin-top: 100px;
        }

        .btn-upload {
            padding: 10px 20px;
            margin-left: 10px;
        }

        .upload-input-group {
            margin-bottom: 10px;
        }

        .input-group > .custom-select:not(:last-child), .input-group > .form-control:not(:last-child) {
            height: 45px;
        }
    </style>


@endpush
@section('content')

    <div class="card">
        <!--begin::Card Body-->
        <div class="card-body fs-6 p-10 p-lg-15">
            <!--begin::Section-->
            <div class="pb-10">
                <!--begin::Heading-->
                <h1 class="anchor fw-bolder mb-5" id="overview">
                    <a href="#overview"></a>رفع ملفات </h1>


                <!--end::Heading-->
                <!--begin::Block-->
                <div class="py-5">

                    <div class="row">
                        <div class="col-md-4">
                            @include('modals.uploadFiles')


                        </div>


                    </div>


                </div>


            </div>

            <!--end::Block-->
        </div>

    </div>





@endsection
