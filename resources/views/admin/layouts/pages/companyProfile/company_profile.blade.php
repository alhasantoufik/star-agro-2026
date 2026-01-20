@extends('admin.layouts.app')
@section('title', 'Update Company Profile')

@section('admin_content')

{{-- Custom Style for Borders --}}
<style>
    .form-control {
        border: 1px solid #ced4da !important; /* Default border color */
        border-radius: 4px;
        padding: 10px;
        transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .form-control:focus {
        border-color: #ffb100 !important; /* Update button color er sathe match kore */
        box-shadow: 0 0 5px rgba(255, 177, 0, 0.25) !important;
        outline: 0 none;
    }

    .form-group label {
        margin-bottom: 8px;
        color: #333;
    }
    
    .card {
        border: 1px solid #e3e3e3;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    }
</style>

<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
            <div class="card">
                <div class="card-header bg-light">
                    <h4 style="display: inline-block; margin: 0;">Update Company Profile</h4>
                </div>

                <div class="body p-4">
                    <form action="{{ route('company_profile.update', $profile->id) }}" 
                          method="POST" 
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row clearfix">
                            {{-- Title --}}
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label><b>Title</b></label>
                                    <input type="text" name="title" class="form-control" 
                                           value="{{ old('title', $profile->title) }}" 
                                           placeholder="Enter title">
                                </div>
                            </div>

                            {{-- Sub Title --}}
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label><b>Sub Title</b></label>
                                    <textarea name="sub_title" class="form-control" rows="3" 
                                              placeholder="Enter sub title">{{ old('sub_title', $profile->sub_title) }}</textarea>
                                </div>
                            </div>

                            {{-- Page Content --}}
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label><b>Page Content</b></label>
                                    <div style="border: 1px solid #ced4da;"> {{-- CKEditor er charpashe border --}}
                                        <textarea id="ckeditor" name="description">{!! old('description', $profile->description) !!}</textarea>
                                    </div>
                                </div>
                            </div>

                            {{-- File Upload --}}
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label><b>Upload File</b></label>
                                    <input type="file" name="file" class="form-control">
                                    @if($profile->file)
                                        <small class="d-block mt-2">
                                            Current file: 
                                            <a href="{{ asset($profile->file) }}" target="_blank" class="text-primary">
                                                <i class="fa fa-eye"></i> View File
                                            </a>
                                        </small>
                                    @endif
                                </div>
                            </div>

                            {{-- Is Active --}}
                            <div class="col-md-12">
                                <div class="form-check mb-4">
                                    <input type="checkbox" name="is_active" id="is_active" value="1" 
                                           {{ $profile->is_active ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_active">
                                        <b>Active Status</b>
                                    </label>
                                </div>
                            </div>

                            {{-- Submit --}}
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-warning text-white px-4 py-2 mt-2 shadow-sm" 
                                        style="font-weight: 600; border-radius: 5px;">
                                    <i class="fa fa-save"></i> UPDATE PROFILE
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="{{ asset('backend/assets/plugins/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages/forms/editors.js') }}"></script>
@endpush