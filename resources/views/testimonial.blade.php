@extends('layouts.app')
@section('pageTitle', 'Testimonials')
@section('content')
  <!-- subheader begin -->
  <section id="subheader" class="page-about no-bottom" data-stellar-background-ratio="0.5">
    <div class="inner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Testimonials</h1>
            <div class="crumb">
              <div class="deco">
                <ul>
                  <li><a href="{{ route('welcome') }}">Home</a></li>
                  <li><a href="{{ route('about') }}">About us</a></li>
                  <li>Testimonials</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- subheader close -->
  <div class="clearfix"></div>
  <!-- content begin -->
  <div id="content">
    <div class="container">
        <div class="row">
            @include('_partials.aboutSideNav')

            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="testi-box-1">
                            <blockquote>
                                Gocargo people professional and courteous attitude, expert knowledge and patience handling our specific issues are very important to our customer.

                            </blockquote>
                            <div class="arrow-down"></div>
                            <div class="testi-by">
                                <img src="{{ asset('ui/img/about/testimonials/testimonial-1.jpg') }}" class="img-circle" alt="">
                                <span class="name"><strong>Jane Salima</strong>, General Manager<br>
                                    Nexus Motors</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="testi-box-1">
                            <blockquote>
                                Your representatives have very helpful attitude and their attention to detail help us to move our work smoothly without any delay...good job guys.


                            </blockquote>
                            <div class="arrow-down"></div>
                            <div class="testi-by">
                                <img src="{{ asset('ui/img/about/testimonials/testimonial-2.jpg') }}" class="img-circle" alt="">
                                <span class="name"><strong>Dave Smith</strong>, Sales Manager<br>
                                    Jepara Furniture</span>
                            </div>
                        </div>
                    </div>

                    <div class="divider-single"></div>

                    <div class="col-md-6">
                        <div class="testi-box-1">
                            <blockquote>
                                I'm really impressed by the professionalism that the Gocargo relocation. Now we stay with our new studio at Metro city thanks Gocargo.

                            </blockquote>
                            <div class="arrow-down"></div>
                            <div class="testi-by">
                                <img src="{{ asset('ui/img/about/testimonials/testimonial-3.jpg') }}" class="img-circle" alt="">
                                <span class="name"><strong>Mike Martien</strong>, Web Designer<br>
                                    Bamskies Studio</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="testi-box-1">
                            <blockquote>
                                Thank you very much awesome jobs, I will recommend everybody to use your company because you know excellent your job and you are professionals.

                            </blockquote>
                            <div class="arrow-down"></div>
                            <div class="testi-by">
                                <img src="{{ asset('ui/img/about/testimonials/testimonial-4.jpg') }}" class="img-circle" alt="">
                                <span class="name"><strong>Steve Powers</strong>, Producer<br>
                                    Alisa Entertainment</span>
                            </div>
                        </div>
                    </div>

                    <div class="divider-single"></div>
                    <div class="col-md-6">
                        <div class="testi-box-1">
                            <blockquote>
                                Your staff is very, very friendly and helpful. I will recommend your service to all my friends back in the Greenland. Keep up the good work.

                            </blockquote>
                            <div class="arrow-down"></div>
                            <div class="testi-by">
                                <img src="{{ asset('ui/img/about/testimonials/testimonial-5.jpg') }}" class="img-circle" alt="">
                                <span class="name"><strong>Natalia Romanaf</strong>, Wedding Planner<br>
                                    R & R</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="testi-box-1">
                            <blockquote>
                                Thanks you so much am all smiles right now they really did deliver the stuff. I will have no problems recommending you to any friends.

                            </blockquote>
                            <div class="arrow-down"></div>
                            <div class="testi-by">
                                <img src="{{ asset('ui/img/about/testimonials/testimonial-6.jpg') }}" class="img-circle" alt="">
                                <span class="name"><strong>Erin Chang</strong>, Curator<br>
                                    Trinil Museum</span>
                            </div>
                        </div>
                    </div>

                    <div class="divider-single"></div>

                    <div class="col-md-6">
                        <div class="testi-box-1">
                            <blockquote>
                                Your representatives have very helpful attitude and their attention to detail help us to move our work smoothly without any delay...good job guys.


                            </blockquote>
                            <div class="arrow-down"></div>
                            <div class="testi-by">
                                <img src="{{ asset('ui/img/about/testimonials/testimonial-7.jpg') }}" class="img-circle" alt="">
                                <span class="name"><strong>Dave Smith</strong>, Sales Manager<br>
                                    Jepara Furniture</span>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="testi-box-1">
                            <blockquote>
                                I'm really impressed by the professionalism that the Gocargo relocation. Now we stay with our new studio at Metro city thanks Gocargo.

                            </blockquote>
                            <div class="arrow-down"></div>
                            <div class="testi-by">
                                <img src="{{ asset('ui/img/about/testimonials/testimonial-8.jpg') }}" class="img-circle" alt="">
                                <span class="name"><strong>Mike Martien</strong>, Web Designer<br>
                                    Bamskies Studio</span>
                            </div>
                        </div>
                    </div>



                    <div class="divider-single"></div>

                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- content close -->
@endsection