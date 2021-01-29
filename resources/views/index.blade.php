@extends('layouts.template')

@section('content')
<header id="main_page_landingpage">
</header>
<section id="main_page">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="img_id">
                            <img id="me_v2" src="/images/me_img.png" style="width: 180px; height:200px">
                        </div>
                        <hr>
                        <div class="name_and_profession text-center">
                            <h5>Brian Kentley Ong</h5>
                            <p>Web Developer</p>
                        </div>
                        <div class="github_and_linked text-center">
                            <ul class="list-inline list-unstyled">
                                <li class="list-inline-item">
                                    <a href="https://github.com/keantlee"><img src="/images/icons/github-sign.png"></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.linkedin.com/in/brian-kentley-ong-90b4a3146/"><img src="/images/icons/linkedin.png" alt=""></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card" style="height: 650px">
                    <div class="card-header card-header-color">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#about-v2">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#skills-v2">Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#project-v2">Project</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#contact-v2">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active container" id="about-v2">@include('components_v2.info_details_v2')</div>
                            <div class="tab-pane container" id="skills-v2">@include('components_v2.skills_v2')</div>
                            <div class="tab-pane container" id="project-v2">@include('components_v2.project_v2')</div>
                            <div class="tab-pane container" id="contact-v2">@include('components_v2.contact_v2')</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection