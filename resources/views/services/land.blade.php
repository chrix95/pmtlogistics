@extends('layouts.app')
@section('pageTitle', 'Land Freight')
@section('content')
  <!-- subheader begin -->
  <section id="subheader" class="page-service no-bottom" data-stellar-background-ratio="0.5">
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Land Freight</h1>
                    <div class="crumb">
                        <div class="deco">
                            <ul>
                                <li><a href="{{{ route('welcome') }}}">Home</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li>Land Freight</li>
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
              <div class="col-md-4">
                  <div class="widget">
                    <ul class="side-nav">
                      <li><a href="{{ route('services') }}">All Services</a></li>
                      <li class="active"><a href="{{ route('services.template', ['slug' => 'land']) }}">Land Freight</a></li>
                      <li><a href="{{ route('services.template', ['slug' => 'ocean']) }}">Ocean Freight</a></li>
                      <li><a href="{{ route('services.template', ['slug' => 'air']) }}">Air Freight</a></li>
                      <li><a href="{{ route('services.template', ['slug' => 'cargo']) }}">Cargo Freight</a></li>
                    </ul>
                  </div>

                  <div class="widget">
                      <img src="{{ asset('ui/img/misc/pic%20(10).jpg') }}" alt="" class="pull-left">
                      <h4>Download Brochure</h4>
                      Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                      <br>
                      <a href="#" class="btn-arrow"><span class="line"></span><span
                              class="url">Download</span></a>
                  </div>

                  <div class="widget">
                      <div class="simple-form">
                          <div class="l-col">
                              <input name="track-id" id="track" type="text" class="form-control"
                                  placeholder="insert your package id">
                          </div>
                          <div class="r-col">
                              <input name="track-submit" id="track-submit" class="form btn btn-custom"
                                  type="submit" onclick="validateTracker()" value="Track">
                          </div>
                      </div>
                  </div>



              </div>

              <div class="col-md-8">
                  <h2>Services Details</h2>
                  <div class="divider-deco"><span></span></div>
                  <img src="{{ asset('ui/img/services/ocean-freight/width-1.jpg') }}" class="pull-right" alt="">
                  <p><strong><i>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                              sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet
                              mauris. Morbi accumsan ipsum velit. Nam nec tellus</i></strong></p>
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

                  <div class="row">
                      <div class="col-md-3">
                          <img src="{{ asset('ui/img/services/ocean-freight/small-1.jpg') }}" alt=""
                              class="img-resonsive img-fullwidth">
                      </div>
                      <div class="col-md-3">
                          <img src="{{ asset('ui/img/services/ocean-freight/small-2.jpg') }}" alt=""
                              class="img-resonsive img-fullwidth">
                      </div>
                      <div class="col-md-3">
                          <img src="{{ asset('ui/img/services/ocean-freight/small-3.jpg') }}" alt=""
                              class="img-resonsive img-fullwidth">
                      </div>
                      <div class="col-md-3">
                          <img src="{{ asset('ui/img/services/ocean-freight/small-4.jpg') }}" alt=""
                              class="img-resonsive img-fullwidth">
                      </div>
                      <div class="clearfix"></div>
                  </div>

                  <div class="divider-single"></div>


                  <h2>Industry Services</h2>
                  <div class="divider-deco"><span></span></div>
                  <div class="row">
                      <div class="col-md-6">
                          <h4>General Forwarding</h4>
                          <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                              sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate </p>
                      </div>

                      <div class="col-md-6">
                          <h4>Project Forwarding</h4>
                          <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                              sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate </p>
                      </div>

                      <div class="col-md-6">
                          <h4>Export Packing</h4>
                          <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                              sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate </p>
                      </div>

                      <div class="col-md-6">
                          <h4>Contract Management</h4>
                          <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                              sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate </p>
                      </div>

                      <div class="col-md-6">
                          <h4>Break Bulk Management</h4>
                          <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                              sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate </p>
                      </div>

                      <div class="col-md-6">
                          <h4>General Forwarding</h4>
                          <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                              sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate </p>
                      </div>
                  </div>



              </div>
          </div>
      </div>
  </div>
  <!-- content close -->
@endsection
@section('javascript')
    <script>
        function validateTracker() {
            var track = $("#track").val();
            if (track == '') {
                alert('Enter a valid tracking reference');
            } else {
                window.location.replace('/tracking/'+ track);
            }
        }
    </script>    
@endsection