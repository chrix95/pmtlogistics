@extends('layouts.app')
@section('pageTitle', 'About us')
@section('content')
  <!-- subheader begin -->
  <section id="subheader" class="page-about no-bottom" data-stellar-background-ratio="0.5">
    <div class="inner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Company</h1>
            <div class="crumb">
              <div class="deco">
                <ul>
                  <li><a href="{{ route('welcome') }}">Home</a></li>
                  <li><a href="{{ route('about') }}">About us</a></li>
                  <li>Company</li>
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
          <h2>Company Profile</h2>
          <div class="divider-deco"><span></span></div>
          <img src="{{ asset('ui/img/about/company/small-14.jpg') }}" alt="" class="pull-right">
            <p>
              <strong>
                <i>
                  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                  sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet
                  mauris. Morbi accumsan ipsum velit. Nam nec tellus
                </i>
              </strong>
            </p>
            <p>
              Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
              nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
              ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat
              consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia
              nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna
            </p>
            <p>
              Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
              nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
              ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat
              consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia
              nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus
              condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum
              fermentum nunc.
            </p>

            <div class="divider-single"></div>
            <h2>Founder &amp; Directors</h2>
            <div class="divider-deco"><span></span></div>

            <div class="owl-custom-nav">
              <a class="btn-next"></a>
              <a class="btn-prev"></a>
            </div>

            <ul class="single-carousel-arrow-nav">
              <li>
                <div class="inner">
                  <img src="{{ asset('ui/img/about/company/director-1.jpg') }}" alt="" class="pull-left">
                  <div class="text">
                    <span class="name">John Rukman</span>
                    <span class="position">Founder &amp; Vince President</span>
                    <p>
                      Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                      nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
                      a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio
                      tincidunt auctor a ornare odio. Sed non mauris vitae
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>

              <li>
                <div class="inner">
                  <img src="{{ asset('ui/img/about/company/team-2.jpg') }}" alt="" class="pull-left">
                  <div class="text">
                    <span class="name">John Rukman</span>
                    <span class="position">Founder &amp; Vince President</span>
                    <p>
                      Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                      nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
                      a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio
                      tincidunt auctor a ornare odio. Sed non mauris vitae
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>

              <li>
                <div class="inner">
                  <img src="{{ asset('ui/img/about/company/team-3.jpg') }}" alt="" class="pull-left">
                  <div class="text">
                    <span class="name">John Rukman</span>
                    <span class="position">Founder &amp; Vince President</span>
                    <p>
                      Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                      nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
                      a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio
                      tincidunt auctor a ornare odio. Sed non mauris vitae
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>
            </ul>

            <div class="divider-double"></div>
            <div class="row">
              <div class="col-md-6">
                <h2>Mission &amp; Vision</h2>
                <div class="divider-deco"><span></span></div>
                <h4>Mission</h4>
                Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
                sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi

                <h4>Vision</h4>
                Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
                sem nibh id elit.
              </div>

              <div class="col-md-6">
                <h2>Quality Policy</h2>
                <div class="divider-deco"><span></span></div>
                Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
                sem nibh id elit. Duis sed odio

                <ul class="icon-list arrow">
                  <li>Aenean sollicitudin, lorem quis bibendum auctor, nisi</li>
                  <li>Duis sed odio sit amet nibh vulputate cursus a sit </li>
                  <li>Class aptent taciti sociosqu ad litora torquent per </li>
                  <li>Sed non mauris vitae erat consequat auctor eu in elit</li>
                  <li>Proin gravida nibh vel velit auctor aliquet. Aenean </li>
                  <li>Class aptent taciti sociosqu ad litora torquent per </li>
                </ul>
              </div>

              <div class="divider-single"></div>

              <div class="col-md-6">
                <h2>Our Objective</h2>
                <div class="divider-deco"><span></span></div>
                <ul class="icon-list arrow">
                  <li>Aenean sollicitudin, lorem quis bibendum auctor, nisi</li>
                  <li>Duis sed odio sit amet nibh vulputate cursus a sit </li>
                  <li>Class aptent taciti sociosqu ad litora torquent per </li>
                  <li>Sed non mauris vitae erat consequat auctor eu in elit</li>
                  <li>Proin gravida nibh vel velit auctor aliquet. Aenean </li>
                  <li>Class aptent taciti sociosqu ad litora torquent per </li>
                </ul>
              </div>

              <div class="col-md-6">
                <h2>Our Values</h2>
                <div class="divider-deco"><span></span></div>
                <p>
                  Benean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                  sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet
                  mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio
                </p>
                <p>
                  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                  sagittis sem nibh id elit. Duis sed odio
                </p>
              </div>
            </div>

            <div class="divider-single"></div>

          <div class="box-padding-30 bg-1 light-text">
            <div class="inner-padding">
              <h2 class="id-color">Gocargo Commitment</h2>
              <div class="tiny-border"></div>
              <p class="lead big">
                <i>
                  We are commited to be the leading logistic solutions provider to our customer. We
                  continually improving & implementing a quality management
                  to achieve it
                </i>
              </p>
              <img src="{{ asset('ui/img/signature.png') }}" alt="">
              <div class="divider-single"></div>
              <strong>John Rukman</strong>, Vice President<br>
                Gocargo Inc
              <br>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- content close -->
@endsection