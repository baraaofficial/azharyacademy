@extends('admin-panel.layouts.app')

@section('title')
    -  جميع الصفوف الدراسية

@endsection
@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">لوحة التحكم</span> - الصفوف الدراسية</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="{{route('class.create')}}" class="btn btn-link btn-float text-default"><i class="icon-import text-primary"></i><span>انشاء صف دراسي جديد</span></a>
                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{url('/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                        <span class="breadcrumb-item active">الصفوف الدراسيه</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>


            </div>
        </div>
        <!-- /page header -->
        @if(session('message') ?? '' )
            <div class="alert alert-success alert-styled-left alert-arrow-left alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                {{session('message') ?? ''}}
            </div>
        @elseif(session('delete') ?? '' )
            <div class="alert alert-danger alert-styled-left alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                {{session('delete') ?? ''}}
            </div>
        @endif

        <!-- Content area -->
        <div class="content">

            <!-- Basic responsive configuration -->
            @if(count($class))

            <div class="card">


                <table class="table datatable-responsive">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>الصف الدراسي</th>
                        <th>التاريخ</th>
                        <th class="text-center">أجراءات</th>
                    </tr>
                    </thead>
                    @foreach($class as $row)
                    <tbody>
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->updated_at->isoFormat('Do MMMM YYYY', 'MMMM YYYY')}}</td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu">
                                        <a href="{{route('class.edit',$row->id)}}" class="dropdown-item"><i class="icon-pencil7"></i>تعديل</a>
                                        {!! Form::open([
                                             'action' => ['Admin\ClassController@destroy',$row->id],

                                             'method' => 'delete'

                                        ]) !!}

                                        <button class="dropdown-item"><i class="icon-x"></i> حذف</button>

                                        {!! Form::close() !!}

                                        <a href="#" class="dropdown-item"><i class="icon-eye"></i> شاهد</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    </tbody>
                    @endforeach
                </table>
            </div>
            <!-- /basic responsive configuration -->

            @else
                <div class="alert alert-danger alert-styled-left alert-dismissible">
                    هذا النموذج فارغ عليك بإنشاء الصفوف الدراسية أولاً
                </div>
            @endif



        </div>
        <!-- /content area -->





@endsection
