@extends('website.home')
@section('title', 'Carrer Details | Organio')
@section('content')
<style>
    /* Color Variables */
    :root {
        --primary-color: #62A403;
        --primary-hover: #4d8002;
        --text-dark: #28395a;
        --text-light: #506172;
        --bg-gray: #f4feee;
        /* Light greenish background */
    }

    /* Hero Section */
    .slider-height2 {
        min-height: 50px;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .hero-cap h2 {
        color: #fff;
        font-size: 50px;
        font-weight: 700;
        text-transform: capitalize;
    }

    /* Job Details Main Wrapper */
    .job-post-company {
        background-color: #f9f9f9;
        padding-top: 40px;
    }

    /* Job Card Styling */
    .single-job-items {
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.05);
        border-left: 5px solid var(--primary-color);
    }

    .job-tittle h4 {
        color: var(--text-dark);
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 15px;
        transition: 0.3s;
    }

    .job-tittle ul li {
        display: inline-block;
        margin-right: 25px;
        color: var(--text-light);
        font-size: 15px;
    }

    .job-tittle ul li i {
        color: var(--primary-color);
        margin-right: 8px;
    }

    /* Small Titles */
    .small-section-tittle h4 {
        color: var(--text-dark);
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 10px;
    }

    .small-section-tittle h4::before {
        position: absolute;
        content: "";
        width: 50px;
        height: 2px;
        background: var(--primary-color);
        bottom: 0;
        left: 0;
    }

    /* Job Overview & Company Info Sidebar */
    .post-details3,
    .post-details4 {
        padding: 35px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.05);
        border: 1px solid #ededed;
        margin-bottom: 30px;
    }

    .post-details3 ul li {
        list-style: none;
        display: flex;
        justify-content: space-between;
        padding: 12px 0;
        border-bottom: 1px solid #f0f0f0;
        font-size: 16px;
        color: var(--text-dark);
    }

    .post-details3 ul li:last-child {
        border-bottom: 0;
    }

    .post-details3 ul li span {
        color: var(--text-light);
    }

    /* Apply Button */
    .apply-btn2 .btn {
        background: var(--primary-color);
        width: 100%;
        color: #fff;
        text-transform: uppercase;
        font-weight: 600;
        padding: 18px 20px;
        border-radius: 5px;
        margin-top: 25px;
        transition: 0.4s;
        border: none;
        display: block;
        text-align: center;
    }

    .apply-btn2 .btn:hover {
        background: var(--primary-hover);
        color: #fff;
        box-shadow: 0px 8px 15px rgba(98, 164, 3, 0.3);
    }

    /* Company Info */

    .post-details4 {
        margin-top: 30px;
        /* Eikhane value bariye apni aro niche namate parben */
        padding: 35px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.05);
        border: 1px solid #ededed;
        margin-bottom: 10px;
    }

    .post-details4 span {
        color: var(--primary-color);
        font-weight: 700;
        font-size: 18px;
        display: block;
        margin-bottom: 15px;
    }

    .post-details4 ul li {
        list-style: none;
        margin-bottom: 10px;
        color: var(--text-light);
    }

    .post-details4 ul li span {
        display: inline;
        color: var(--text-dark);
        font-weight: 500;
    }
</style>
<!-- Start of Breadcrumb section
	============================================= -->
<section id="or-breadcrumbs" class="or-breadcrumbs-section position-relative" data-background="{{ asset('assets/img/bg/bg-page-title.jpg') }}">
    <div class="background_overlay"></div>
    <div class="container">
        <div class="or-breadcrumbs-content text-center">
            <div class="page-title headline">
                <h1>Carrer Details</h1>
            </div>
            <div class="or-breadcrumbs-items ul-li">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>Carrer Details</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End of Breadcrumb section
	============================================= -->

<!-- Hero Area Start-->

<!-- Hero Area End -->
<!-- job post company Start -->
<div class="job-post-company pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Left Content -->
            <div class="col-xl-7 col-lg-8">
                <!-- job single -->
                <div class="single-job-items mb-50">
                    <div class="job-items">
                        <div class="company-img company-img-details">
                            <a href="#"><img src="{{ asset('assets/img/logo/logo1.png') }}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="#">
                                <h4>{{ $job->job_title }}</h4>
                            </a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                <li>{{ $job->salary }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- job single End -->

                <div class="job-post-details">
                    <div class="post-details1 mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Job Description</h4>
                        </div>
                        <p>{{ $job->description }}</p>
                    </div>
                    <div class="post-details2  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Required Knowledge, Skills, and Abilities</h4>
                        </div>
                        <p>{{ $job->experience_requirements }}</p>
                    </div>
                    <div class="post-details2  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Education + Experience</h4>
                        </div>
                        <p>{{ $job->educational_requirements }}</p>
                    </div>
                </div>

            </div>
            <!-- Right Content -->
            <div class="col-xl-4 col-lg-4">
                <div class="post-details3  mb-50">
                    <!-- Small Section Tittle -->
                    <div class="small-section-tittle">
                        <h4>Job Overview</h4>
                    </div>
                    <ul>
                        <li>Posted date : <span>{{ $job->created_at }}</span></li>
                        <li>Location : <span>{{ $job->location }}</span></li>
                        <li>Vacancy : <span>02</span></li>
                        <li>Job nature : <span>{{ $job->job_type }}</span></li>
                        <li>Salary : <span>{{ $job->salary }}</span></li>
                        <li>Application date : <span>{{ $job->created_at }}</span></li>
                    </ul>
                    <div class="apply-btn2">
                        <a href="#" class="btn">Apply Now</a>
                    </div>
                    <div class="apply-form" style="display: none; margin-top: 20px;">
                        @if(session('success'))
                        <div style="color: green; margin-bottom: 10px;">{{ session('success') }}</div>
                        @endif
                        <form action="{{ route('job_apply.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="job_id" value="{{ $job->id }}">

                            <div class="mb-3">
                                <input type="text" name="name" placeholder="Your Name" required class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" placeholder="Your Email" required class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="text" name="position" placeholder="Enter Your Position" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="file" name="resume" placeholder="Submit Resume" class="form-control">
                            </div>

                            <div class="mb-3">
                                <textarea name="why_join_us" placeholder="Why Intereseted" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn" style="background: var(--primary-color); color: #fff;">Submit</button>
                        </form>
                    </div>

                </div>
                <!-- <div class="post-details4  mb-50">
                  
                    <div class="small-section-tittle">
                        <h4>Company Information</h4>
                    </div>
                    <span>Colorlib</span>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <ul>
                        <li>Name: <span>Colorlib </span></li>
                        <li>Web : <span> colorlib.com</span></li>
                        <li>Email: <span>carrier.colorlib@gmail.com</span></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- job post company End -->
<script>
    document.querySelector('.apply-btn2 .btn').addEventListener('click', function(e) {
        e.preventDefault();
        const form = document.querySelector('.apply-form');
        form.style.display = form.style.display === 'none' ? 'block' : 'none';
        form.scrollIntoView({ behavior: 'smooth' });
    });
</script>

@endsection