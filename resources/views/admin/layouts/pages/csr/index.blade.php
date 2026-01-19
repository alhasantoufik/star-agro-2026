@extends('admin.layouts.app')
@section('title')
    CSR
@endsection
@push('styles')
    <style>
        .form-group .form-control {
            padding-left: 10px;
        }
    </style>
@endpush

@section('admin_content')
<div class="container-fluid">
    <!-- Horizontal Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
            <div class="card">
                <div class="header">
                    <h2 class="text-uppercase"> CSR Data Update</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                role="button" aria-haspopup="true" aria-expanded="false"> <i
                                    class="zmdi zmdi-more-vert"></i> </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <form class="form-horizontal" action="{{ route('csr.update') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-lg-12 col-md-12 col-sm-8 col-xs-7 mb-3">
                            <label for="banner_title"><b>CSR Title</b></label>
                            <div class="form-group">
                                <div class="" style="border: 1px solid #ccc">
                                    <input type="text" id="banner_title" name="title" class="form-control"
                                        placeholder="Enter website title "
                                        value="{{ $banner->title }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-8 col-xs-7 mb-3">
                            <label for="banner_subtitle"><b>Sub Title</b></label>
                            <div class="form-group">
                                <div class="mb-2" style="border: 1px solid #ccc">
                                    <input type="text" class="form-control" name="sub_title" id="banner_subtitle" value="{{ $banner->sub_title }}" placeholder="Enter sub title" />
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-8 col-xs-7 mb-3">
                            <label for="banner_description"><b>Short Description</b></label>
                            <div class="form-group">
                                <div class="" style="border: 1px solid #ccc">
                                    <textarea type="text" id="banner_description" name="description" class="form-control" rows="4">{!! $banner->description !!}</textarea>
                                </div>
                            </div>
                        </div>

                       

                      


                        <div class="col-lg-12 col-md-12 col-sm-8 col-xs-7 mb-3">
                            <label for="customFile"><b> Image ( 1920 x 640 ) (Size: max 250kb)</b></label>
                            <div class="form-group">
                                <div class="mb-2" style="border: 1px solid #ccc">
                                    <input type="file" class="form-control" id="customFile" / name="image">
                                </div>
                                <img src="{{ asset($banner->image) }}" alt="" width="40">
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12 col-sm-8 col-xs-7">
                            <button type="submit"
                                class="btn btn-raised btn-primary m-t-15 waves-effect">UPDATE</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>


    </div>
    <!-- #END# Horizontal Layout -->
</div>
@endsection
