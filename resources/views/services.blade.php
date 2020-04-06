@extends('layouts.app')
@section('pageTitle', 'Services')
@section('content')
  <!-- subheader begin -->
  <section id="subheader" class="page-service no-bottom" data-stellar-background-ratio="0.5">
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Services</h1>
                    <div class="crumb">
                        <div class="deco">
                            <ul>
                                <li><a href="{{ route('welcome') }}">Home</a></li>
                                <li>Services</li>
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
  <div id="content" class="no-padding">

      <section id="explore-5" class="side-bg">
          <div class="col-md-6 col-md-offset-6 pull-right image-container">
              <div class="background-image"></div>
          </div>

          <div class="container">
              <div class="row">
                  <div class="col-md-5">
                      <div class="inner-padding">
                          <div class="row">

                              <div class="col-md-6 wow fadeIn" data-wow-delay=".2s">
                                  <div class="box-icon-small">
                                      <i class="fa fa-truck"></i>
                                      <div class="text">
                                          <h3>Land<br>
                                              Freight</h3>
                                          <p>Aenean sollicitudin, lorem quis bibendum.</p>
                                          <a href="{{ route('services.template', ['slug' => 'land']) }}" class="btn-arrow"><span
                                                  class="line"></span><span class="url">View Details</span></a>
                                      </div>
                                  </div>
                              </div>

                              <div class="divider-single"></div>

                              <div class="col-md-6 wow fadeIn" data-wow-delay=".2s">
                                  <div class="box-icon-small">
                                      <i class="fa fa-ship"></i>
                                      <div class="text">
                                          <h3>Ocean<br>
                                              Freight</h3>
                                          <p>Aenean sollicitudin, lorem quis bibendum.</p>
                                          <a href="{{ route('services.template', ['slug' => 'ocean']) }}" class="btn-arrow"><span
                                                  class="line"></span><span class="url">View Details</span></a>
                                      </div>
                                  </div>
                              </div>

                              <div class="divider-single"></div>

                              <div class="col-md-6 wow fadeIn" data-wow-delay=".4s">
                                  <div class="box-icon-small">
                                      <i class="fa fa-plane"></i>
                                      <div class="text">
                                          <h3>Air<br>
                                              Freight</h3>
                                          <p>Aenean sollicitudin, lorem quis bibendum.</p>
                                          <a href="{{ route('services.template', ['slug' => 'air']) }}" class="btn-arrow"><span
                                                  class="line"></span><span class="url">View Details</span></a>
                                      </div>
                                  </div>
                              </div>

                              <div class="divider-single"></div>

                              <div class="col-md-6 wow fadeIn" data-wow-delay=".6s">
                                  <div class="box-icon-small">
                                      <i class="fa fa-truck"></i>
                                      <div class="text">
                                          <h3>Cargo<br>
                                              Express</h3>
                                          <p>Aenean sollicitudin, lorem quis bibendum.</p>
                                          <a href="{{ route('services.template', ['slug' => 'cargo']) }}" class="btn-arrow"><span
                                                  class="line"></span><span class="url">View Details</span></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>

                  <div class="col-md-5 col-md-offset-2 text-center light-text">
                      <div class="inner-padding">
                          <h2 class="id-color">Gocargo Commitment</h2>
                          <div class="tiny-border center"></div>
                          <div class="divider-single"></div>
                          <p class="lead big">
                              <i>We are commited to be the leading logistic solutions provider to our customer. We
                                  continually improving & implementing a quality management
                                  to achieve it</i>
                          </p>
                          <div class="divider-single"></div>
                          <img src="img/signature.png" alt="">
                          <div class="divider-single"></div>
                          <strong>John Rukman</strong>, Vice President<br>
                          Gocargo Inc
                      </div>
                  </div>
              </div>
          </div>

          <div class="clearfix"></div>
      </section>

      <section id="section-counter" class="light-text" data-stellar-background-ratio="0.5">
          <div class="container">

              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <div class="row">
                          <div class="col-md-3">
                              <div class="counter">
                                  <div class="num">
                                      150
                                      <div class="tiny-border"></div>
                                  </div>
                                  <div class="text">Countries<br>
                                      Worldwide</div>
                              </div>
                          </div>

                          <div class="col-md-3">
                              <div class="counter">
                                  <div class="num">
                                      25
                                      <div class="tiny-border"></div>
                                  </div>
                                  <div class="text">Years<br>
                                      Experience</div>
                              </div>
                          </div>

                          <div class="col-md-3">
                              <div class="counter">
                                  <div class="num">
                                      770
                                      <div class="tiny-border"></div>
                                  </div>
                                  <div class="text">Packages<br>
                                      a Day</div>
                              </div>
                          </div>

                          <div class="col-md-3">
                              <div class="counter">
                                  <div class="num">
                                      5.5k
                                      <div class="tiny-border"></div>
                                  </div>
                                  <div class="text">Satisfied<br>
                                      Customers</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </section>

  </div>
  <!-- content close -->
@endsection