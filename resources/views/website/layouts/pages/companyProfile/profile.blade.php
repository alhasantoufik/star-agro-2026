@extends('website.home')
@section('title', 'Company Profile | Star Agro')
@section('content')

    <section id="or-breadcrumbs" class="or-breadcrumbs-section position-relative" data-background="{{ asset('assets/img/bg/bg-page-title.jpg') }}">
        <div class="background_overlay"></div>
        <div class="container">
            <div class="or-breadcrumbs-content text-center">
                <div class="page-title headline"><h1>Company Profile</h1></div>
                <div class="or-breadcrumbs-items ul-li">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="company-profile" class="py-5" style="background: #f9f9f9;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="profile-card bg-white p-5 shadow-sm" style="border-radius: 15px;">
                        
                        {{-- Title --}}
                        <div class="section-title headline text-center mb-4">
                            <h2 style="color: #2c3e50; font-weight: 700;">{{ $profile->title }}</h2>
                            
                            {{-- Sub Title --}}
                            @if($profile->sub_title)
                                <p class="lead text-muted mt-2" style="font-size: 1.2rem;">
                                    {{ $profile->sub_title }}
                                </p>
                            @endif
                        </div>

                        <hr class="my-4" style="border-top: 2px solid #eee;">

                        {{-- Description --}}
                        @if($profile->description)
                            <div class="description-content mb-5" style="line-height: 1.8; color: #444; font-size: 16px;">
                                {!! $profile->description !!}
                            </div>
                        @endif

                        {{-- PDF Viewer --}}
                        @if($profile->file)
                            <div class="pdf-viewer-container mt-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 style="font-weight: 600; color: #2c3e50;">
                                        <i class="fas fa-file-pdf text-danger mr-2"></i> Company Document
                                    </h4>
                                    <a href="{{ asset($profile->file) }}" download class="btn btn-success btn-sm px-4">
                                        <i class="fas fa-download"></i> Download PDF
                                    </a>
                                </div>
                                
                                {{-- Large PDF Embed --}}
                                <div class="embed-responsive" style="height: 800px; border: 1px solid #ddd; border-radius: 8px; overflow: hidden;">
                                    <embed 
                                        src="{{ asset($profile->file) }}#toolbar=0&navpanes=0&scrollbar=0" 
                                        type="application/pdf" 
                                        width="100%" 
                                        height="100%"
                                    />
                                </div>
                                
                                {{-- Mobile Friendly fallback --}}
                                <p class="text-center mt-3 d-md-none">
                                    Having trouble viewing the PDF? <a href="{{ asset($profile->file) }}" target="_blank">Click here to open it</a>.
                                </p>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('css')
<style>
    .profile-card {
        border-bottom: 5px solid #5cb85c; /* Organio theme er green color */
    }
    .description-content img {
        max-width: 100%;
        height: auto;
    }
    /* Mobile response optimization */
    @media (max-width: 768px) {
        .embed-responsive {
            height: 500px !important;
        }
        .profile-card {
            padding: 25px !important;
        }
    }
</style>
@endpush