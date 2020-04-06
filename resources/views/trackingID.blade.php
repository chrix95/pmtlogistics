@extends('layouts.app')
@section('pageTitle', 'Tracking Reference')
@section('content')
  <!-- subheader begin -->
  <section id="subheader" class="page-about no-bottom" data-stellar-background-ratio="0.5">
    <div class="inner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Tracking Reference</h1>
            <div class="crumb">
              <div class="deco">
                <ul>
                  <li><a href="{{ route('welcome') }}">Home</a></li>
                  <li>Tracking Ref</li>
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
  <div id="content" style="padding: 0px">
    <!-- section begin -->
    <section id="section-tracking-result" class="light-text no-margin" style="display: block">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="divider-double"></div>
                    <div class="text-center">
                        <h3><span class="grey">Tracking Ref:</span> {{ strtoupper($trackingRef) }}</h3>
                    </div>
                    <div class="divider-double"></div>
                    @if ($status)
                        <div class="wrapper-line padding40 rounded10">
                            <ul class="progress">
                                <li><a href="#">Accepted</a></li>
                                <li class="beforeactive"><a href="#">Order Processing</a></li>
                                <li class="active"><a href="#">Shipment Pending</a></li>
                                <li><a href="#">Estimated Delivery</a></li>
                            </ul>
                            <div class="divider-double"></div>
                            <ul class="timeline custom-tl">
                                {{-- <li class="timeline-inverted">
                                    <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                        March 03, 2020
                                        <span>20:07 pm</span>
                                    </div>
                                    <div class="timeline-badge success"><i class="fa fa-check-square-o wow zoomIn"></i></div>
                                    <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                        <div class="timeline-body">
                                            The shipment has been successfully delivered
                                            <span class="location">Baker Street, UK 
                                                <a
                                                    href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                                    class="popup-gmaps">
                                                    view on map
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </li> --}}

                                {{-- <li class="timeline-inverted">
                                    <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                        March 03, 2020
                                        <span>20:07 pm</span>
                                    </div>
                                    <div class="timeline-badge warning"><i class="fa fa-warning wow zoomIn"></i>
                                    </div>
                                    <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                        <div class="timeline-body">
                                            The shipment could not be delivered
                                            <span class="location">Baker Street, UK <a
                                                    href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                                    class="popup-gmaps">view on map</a></span>
                                        </div>
                                    </div>
                                </li> --}}

                                <li class="timeline-inverted">
                                    <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                        March 03, 2020
                                        <span>20:07 pm</span>
                                    </div>
                                    <div class="timeline-badge"><i class="fa fa-plane wow zoomIn"></i></div>
                                    <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                        <div class="timeline-body">
                                            The shipment has arrived in destination country
                                            <span class="location">Baker Street, UK <a
                                                    href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                                    class="popup-gmaps">view on map</a></span>
                                        </div>
                                    </div>
                                </li>

                                <li class="timeline-inverted">
                                    <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                        March 02, 2020
                                        <span>18:05 pm</span>
                                    </div>
                                    <div class="timeline-badge"><i class="fa fa-plane wow zoomIn"></i></div>
                                    <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                        <div class="timeline-body">
                                            The shipment is being transformed to destination country
                                            <span class="location">Baker Street, UK <a
                                                    href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                                    class="popup-gmaps">view on map</a></span>
                                        </div>
                                    </div>
                                </li>

                                <li class="timeline-inverted">
                                    <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                        March 01, 2020
                                        <span>10:08 pm</span>
                                    </div>
                                    <div class="timeline-badge"><i class="fa fa-truck wow zoomIn"></i></div>
                                    <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                        <div class="timeline-body">
                                            The international shipment has been processed
                                            <span class="location">Dispatch Location, ABUJA <a
                                                    href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                                    class="popup-gmaps">view on map</a></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="alert alert-success" role="alert">
                            <h1 class="alert-heading"><strong>Oops!</strong></h1>
                            <p>Seems lik we don't have any parcel with that tracking number. We offer all kind of package delivery and nationwide delivery.</p>
                            <p class="mb-0">Feel free to re-enter your tracking reference if you are sure.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->
  </div>
  <!-- content close -->
@endsection