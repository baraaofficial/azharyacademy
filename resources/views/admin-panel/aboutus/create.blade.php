@extends('admin-panel.layouts.app')
@inject('model','App\Models\AboutUs')

@section('title')
   -  انشاء حول الأكاديمية

@endsection

@section('css')
    {{--start Uploade Files --}}
    <script src="{{asset('admin-panel/global_assets/js/demo_pages/uploader_bootstrap.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/uploaders/fileinput/fileinput.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js')}}"></script>
    {{--end Uploade Files --}}

    <script src="{{asset('admin-panel/global_assets/js/demo_pages/form_layouts.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>


    <script src="{{asset('admin-panel/global_assets/js/plugins/editors/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/demo_pages/editor_ckeditor_default.js')}}"></script>

@endsection
@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">لوحة التحكم</span> - حول الأكاديمية</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>


            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{url('/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                        <a href="{{url('/dashboard/about')}}" class="breadcrumb-item"><i class="icon-stack2 mr-2"></i>الجميع</a>
                        <span class="breadcrumb-item active">انشاء حول الأكاديمية</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>


            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            @include('admin-panel.partials.validation-errors')

            {!! Form::model($model,[
                'action'  => 'Admin\AboutUsController@store',
                'method'  =>'post',


            ]) !!}

            @include('admin-panel.aboutus.form')

            <button type="submit" class="btn btn-primary ml-3">انشاء <i class="icon-paperplane ml-2"></i></button>

            {!! Form::close() !!}

        </div>
        <!-- /content area -->





@endsection
