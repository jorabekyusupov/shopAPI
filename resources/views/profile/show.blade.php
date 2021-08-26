@extends('layouts.dash')
@section('content')

 <div class="row mt-sm-4">
  <div class="col-12 col-md-12 col-lg-4">
   <div class="card author-box">
    <div class="card-body">
     <div class="author-box-center">
      <img alt="image" src="{{ asset('storage/profile-photos').'/'.Auth::user()->image }}" class="rounded-circle author-box-picture">
      <div class="clearfix"></div>
      <div class="author-box-name">
       <a href="#">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</a>
      </div>
      <div class="author-box-job">Web Developer</div>
     </div>
     <div class="text-center">
      <div class="author-box-description">
       <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptatum alias molestias
        minus quod dignissimos.
       </p>
      </div>
      <div class="mt-3 mb-2">
       <div class="text-small font-weight-bold">Follow {{ auth()->user()->name }} On</div>
      </div>
      <a href="#" class="mr-1 btn btn-social-icon btn-facebook">
       <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#" class="mr-1 btn btn-social-icon btn-twitter">
       <i class="fab fa-twitter"></i>
      </a>
      <a href="#" class="mr-1 btn btn-social-icon btn-github">
       <i class="fab fa-github"></i>
      </a>
      <a href="#" class="mr-1 btn btn-social-icon btn-instagram">
       <i class="fab fa-instagram"></i>
      </a>
      <div class="w-100 d-sm-none"></div>
     </div>
    </div>
   </div>
   <div class="card">
    <div class="card-header">
     <h4>Personal Details</h4>
    </div>
    <div class="card-body">
     <div class="py-4">
      <p class="clearfix">
       <span class="float-left">
        Birthday
       </span>
       <span class="float-right text-muted">
        {{ auth()->user()->birthday }}
       </span>
      </p>
      <p class="clearfix">
       <span class="float-left">
        Phone
       </span>
       <span class="float-right text-muted">
        {{ auth()->user()->phone }}
       </span>
      </p>
      <p class="clearfix">
       <span class="float-left">
        Mail
       </span>
       <span class="float-right text-muted">
        test@example.com
       </span>
      </p>
      <p class="clearfix">
       <span class="float-left">
        Facebook
       </span>
       <span class="float-right text-muted">
        <a href="#">John Deo</a>
       </span>
      </p>
      <p class="clearfix">
       <span class="float-left">
        Twitter
       </span>
       <span class="float-right text-muted">
        <a href="#">@johndeo</a>
       </span>
      </p>
     </div>
    </div>
   </div>
   <div class="card">
    <div class="card-header">
     <h4>Skills</h4>
    </div>
    <div class="card-body">
     <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
      <li class="media">
       <div class="media-body">
        <div class="media-title">Java</div>
       </div>
       <div class="media-progressbar p-t-10">
        <div class="progress" data-height="6">
         <div class="progress-bar bg-primary" data-width="70%"></div>
        </div>
       </div>
      </li>
      <li class="media">
       <div class="media-body">
        <div class="media-title">Web Design</div>
       </div>
       <div class="media-progressbar p-t-10">
        <div class="progress" data-height="6">
         <div class="progress-bar bg-warning" data-width="80%"></div>
        </div>
       </div>
      </li>
      <li class="media">
       <div class="media-body">
        <div class="media-title">Photoshop</div>
       </div>
       <div class="media-progressbar p-t-10">
        <div class="progress" data-height="6">
         <div class="progress-bar bg-green" data-width="48%"></div>
        </div>
       </div>
      </li>
     </ul>
    </div>
   </div>
  </div>
  <div class="col-12 col-md-12 col-lg-8">
   <div class="card">
    <div class="padding-20">
     <ul class="nav nav-tabs" id="myTab2" role="tablist">
      <li class="nav-item">
       <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab" aria-selected="true">About</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Setting</a>
      </li>
     </ul>
     <div class="tab-content tab-bordered" id="myTab3Content">
      <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
       <div class="row">
        <div class="col-md-3 col-6 b-r">
         <strong>Full Name</strong>
         <br>
         <p class="text-muted">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</p>
        </div>
        <div class="col-md-3 col-6 b-r">
         <strong>Mobile</strong>
         <br>
         <p class="text-muted">{{ auth()->user()->phone }}</p>
        </div>
        <div class="col-md-3 col-6 b-r">
         <strong>Email</strong>
         <br>
         <p class="text-muted">{{ auth()->user()->email }}</p>
        </div>
        <div class="col-md-3 col-6">
         <strong>Location</strong>
         <br>
         <p class="text-muted">{{ auth()->user()->address }}</p>
        </div>
       </div>
       <p class="m-t-30">Completed my graduation in Arts from the well known and
        renowned institution
        of India – SARDAR PATEL ARTS COLLEGE, BARODA in 2000-01, which was
        affiliated
        to M.S. University. I ranker in University exams from the same
        university
        from 1996-01.</p>
       <p>Worked as Professor and Head of the department at Sarda Collage, Rajkot,
        Gujarat
        from 2003-2015 </p>
       <p>Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem
        Ipsum has been the industry's standard dummy text ever since the 1500s,
        when
        an unknown printer took a galley of type and scrambled it to make a
        type
        specimen book. It has survived not only five centuries, but also the
        leap
        into electronic typesetting, remaining essentially unchanged.</p>
       <div class="section-title">Education</div>
       <ul>
        <li>B.A.,Gujarat University, Ahmedabad,India.</li>
        <li>M.A.,Gujarat University, Ahmedabad, India.</li>
        <li>P.H.D., Shaurashtra University, Rajkot</li>
       </ul>
       <div class="section-title">Experience</div>
       <ul>
        <li>One year experience as Jr. Professor from April-2009 to march-2010
         at B.
         J. Arts College, Ahmedabad.</li>
        <li>Three year experience as Jr. Professor at V.S. Arts &amp; Commerse
         Collage
         from April - 2008 to April - 2011.</li>
        <li>Lorem Ipsum is simply dummy text of the printing and typesetting
         industry.
        </li>
        <li>Lorem Ipsum is simply dummy text of the printing and typesetting
         industry.
        </li>
        <li>Lorem Ipsum is simply dummy text of the printing and typesetting
         industry.
        </li>
        <li>Lorem Ipsum is simply dummy text of the printing and typesetting
         industry.
        </li>
       </ul>
      </div>
      <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
        <livewire:show>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
@endsection
