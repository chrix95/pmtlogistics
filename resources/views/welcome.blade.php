@extends('layouts.app')
@section('content')
    <!-- content begin -->
    <div id="content" class="no-padding">
        <!-- section begin -->
        <section id="section-welcome" class="no-padding autoheight light-text" data-stellar-background-ratio="0.5">
            <div class="center-y">
                <div class="inner text-center">
                    <div class="sub-intro-text"><span>We are commited to be the leading</span></div>
                    <div class="divider-single"></div>
                    <h1><span class="id-color">WORLD CLASS</span></h1>
                    <div class="type-wrap title">
                        <div class="typed-strings">
                            <p>Logistic</p>
                            <p>Freight</p>
                            <p>Brokerage</p>
                        </div>
                        <span class="typed"></span>
                    </div>
                    <div class="divider-double"></div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="section-track" class="no-padding light-text">
            <div class="container">
                <div class="row">
                    {{-- <form action="{{ route('tracking') }}" method="POST">
                        @csrf
                        @method('POST') --}}
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-7 no-padding">
                                <div class="inner">
                                    <h3>Track &amp; Trace</h3>
                                    <span>Already have a Tracking ID? please insert it below</span>
                                </div>
                            </div>
                            <div class="col-md-5 no-padding">
                                    <input class="input-fullwidth" name="track" id="track">
                                </div>
                            </div>
                    </div>
                    <div class="col-md-3">
                        <a type="submit" class="btn-custom btn-fullwidth" onclick="validateTracker()" style="color: #fff">
                            Track it
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="section-tracking-result" class="light-text no-margin">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="divider-double"></div>
                        <div class="text-center">
                            <h3><span class="grey">Product ID:</span> 112345679087328</h3>
                        </div>


                        <div class="divider-double"></div>

                        <div class="wrapper-line padding40 rounded10">


                            <ul class="progress">
                                <li><a href="#">Accepted</a></li>
                                <li class="beforeactive"><a href="#">Order Processing</a></li>
                                <li class="active"><a href="#">Shipment Pending</a></li>
                                <li><a href="#">Estimated Delivery</a></li>
                            </ul>

                            <div class="divider-double"></div>

                            <ul class="timeline custom-tl">

                                <li class="timeline-inverted">
                                    <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                        Nov 03, 2015
                                        <span>20:07 pm</span>
                                    </div>
                                    <div class="timeline-badge success"><i
                                            class="fa fa-check-square-o wow zoomIn"></i></div>
                                    <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                        <div class="timeline-body">
                                            The shipment has been successfully delivered
                                            <span class="location">Baker Street, UK <a
                                                    href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                                    class="popup-gmaps">view on map</a></span>
                                        </div>
                                    </div>
                                </li>

                                <li class="timeline-inverted">
                                    <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                        Nov 03, 2015
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
                                </li>

                                <li class="timeline-inverted">
                                    <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                        Nov 03, 2015
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
                                        Nov 02, 2015
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
                                        Nov 01, 2015
                                        <span>10:08 pm</span>
                                    </div>
                                    <div class="timeline-badge"><i class="fa fa-plane wow zoomIn"></i></div>
                                    <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                        <div class="timeline-body">
                                            The international shipment has been processed
                                            <span class="location">Baker Street, UK <a
                                                    href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                                    class="popup-gmaps">view on map</a></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="explore-3" class="side-bg">
            <div class="col-md-6 col-md-offset-6 pull-right image-container">
                <div class="background-image"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="inner-padding">
                            <h2>Our Services</h2>
                            <p>With more than 30 years of experience in the logistics industry, lorem quis bibendum
                                auctor, nisi elit consequat ipsum, nec sagittis </p>
                            <div class="divider-deco"><span></span></div>

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
                </div>
            </div>

            <div class="clearfix"></div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section class="no-padding">
            <div class="container-fullwidth">
                <div id="bg-box-1" class="one-fourth wow fadeInLeft" data-wow-delay=".4s">
                    <div class="bg-color-fx light-text padding-5 text-center">
                        <h3>Customer<br>
                            Satisfication Tools</h3>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
                            sem</p>
                        <div class="tiny-border"></div>
                    </div>
                </div>

                <div id="bg-box-2" class="one-fourth wow fadeInLeft" data-wow-delay=".2s">
                    <div class="bg-color-fx light-text padding-5 text-center">
                        <h3>Management &amp;<br>
                            Reporting</h3>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
                            sem</p>
                        <div class="tiny-border"></div>
                    </div>
                </div>

                <div id="bg-box-3" class="one-fourth wow fadeInRight" data-wow-delay=".2s">
                    <div class="bg-color-fx light-text padding-5 text-center">
                        <h3>Freight Payment<br>
                            Options</h3>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
                            sem</p>
                        <div class="tiny-border"></div>
                    </div>
                </div>

                <div id="bg-box-4" class="one-fourth wow fadeInRight" data-wow-delay=".4s">
                    <div class="bg-color-fx light-text padding-5 text-center">
                        <h3>Compliance<br>
                            Solutions</h3>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
                            sem</p>
                        <div class="tiny-border"></div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="explore-4" class="side-bg">
            <div class="col-md-6 col-md-offset-6 pull-right image-container">
                <div class="background-image"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-5 wow fadeInLeft">
                        <div class="inner-padding">
                            <h2>People Says</h2>
                            With more than 30 years of experience in the logistics industry, lorem quis bibendum
                            auctor, nisi elit consequat ipsum, nec sagittis
                            <div class="divider-deco"><span></span></div>

                            <div id="testi-carousel-2" class="testi-slider wow fadeIn" data-wow-delay="0s"
                                data-wow-duration="1s">
                                <div class="item">
                                    <blockquote>
                                        Gocargo people professional and courteous attitude, expert knowledge and
                                        patience handling our specific issues are very important to our customer

                                    </blockquote>
                                    <div class="arrow-down"></div>
                                    <div class="testi-by">
                                        <img src="{{ asset('ui/img/about/testimonials/testimonial-1.jpg') }}" class="img-circle"
                                            alt="">
                                        <span class="name"><strong>Jane Salima</strong>, General Manager<br>
                                            Nexus Motors</span>
                                    </div>
                                </div>

                                <div class="item">
                                    <blockquote>
                                        Your representatives have very helpful attitude and their attention to
                                        detail help us to move our work smoothly without any delay...good job guys

                                    </blockquote>
                                    <div class="arrow-down"></div>
                                    <div class="testi-by">
                                        <img src="{{ asset('ui/img/about/testimonials/testimonial-2.jpg') }}" class="img-circle"
                                            alt="">
                                        <span class="name"><strong>Dave Smith</strong>, Sales Manager<br>
                                            Jepara Furniture</span>
                                    </div>
                                </div>

                                <div class="item">
                                    <blockquote>
                                        I'm really impressed by the professionalism that the Gocargo relocation. Now
                                        we stay with our new studio at Metro city thanks Gocargo

                                    </blockquote>
                                    <div class="arrow-down"></div>
                                    <div class="testi-by">
                                        <img src="{{ asset('ui/img/about/testimonials/testimonial-3.jpg') }}" class="img-circle"
                                            alt="">
                                        <span class="name"><strong>Mike Martien</strong>, Web Designer<br>
                                            Bamskies Studio</span>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-5 col-md-offset-2 wow fadeInRight">
                        <div class="inner-padding">
                            <h2>Quick Quote</h2>
                            With more than 30 years of experience in the logistics industry, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
                            <div class="divider-deco"><span></span></div>
                            <get-quote />
                        </div>

                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        {{-- <section id="section-quick-quote">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="row form-transparent">
                            <div class="col-md-12 wow fadeInDown">
                                <div class="text-label bg-color text-center light-text">
                                    <h3>Quick Quote</h3>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- section close -->

        <!-- section begin -->
        <section id="section-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 wow fadeIn" data-wow-delay=".2s">
                        <h2>Company</h2>
                        <div class="divider-deco"><span></span></div>
                        <ul class="accordion style-2">

                            <li>
                                <a class="Active">Company Profile</a>
                                <div class="content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </li>

                            <li>
                                <a class="NoneActive">Mission &amp; Vision</a>
                                <div class="content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </li>

                            <li>
                                <a class="NoneActive">Our Value</a>
                                <div class="content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </li>


                            <li>
                                <a class="NoneActive">Company Profile</a>
                                <div class="content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </li>

                            <li>
                                <a class="NoneActive">Company Profile</a>
                                <div class="content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-4 wow fadeIn" data-wow-delay=".6s">
                        <h2>Recent News</h2>
                        <div class="divider-deco"><span></span></div>
                        <ul class="news-list-date">
                            <li>
                                <div class="date">
                                    <span class="day">19</span>
                                    <span class="month">Aug</span>
                                </div>
                                <div class="text">
                                    <a href="#">
                                        <h4>We Opening New Branch</h4>
                                    </a>
                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem</p>
                                </div>
                            </li>

                            <li>
                                <div class="date">
                                    <span class="day">18</span>
                                    <span class="month">Aug</span>
                                </div>
                                <div class="text">
                                    <a href="#">
                                        <h4>Estimate Shipping Cost</h4>
                                    </a>
                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem</p>
                                </div>
                            </li>

                            <li>
                                <div class="date">
                                    <span class="day">17</span>
                                    <span class="month">Aug</span>
                                </div>
                                <div class="text">
                                    <a href="#">
                                        <h4>Tracking From Mobile Phone</h4>
                                    </a>
                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    {{-- <div class="col-md-4 wow fadeIn" data-wow-delay=".8s">
                        <h2>Careers</h2>
                        <div class="divider-deco"><span></span></div>
                        <ul class="list-thumbnail">
                            <li>
                                <img src="{{ asset('ui/img/about/careers/pic-small-c1.jpg') }}" alt="">
                                <div class="text">
                                    <a href="#">
                                        <h4>Truck Driver</h4>
                                    </a>
                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem</p>
                                </div>
                            </li>

                            <li>
                                <img src="{{ asset('ui/img/about/careers/pic-small-c2.jpg') }}" alt="">
                                <div class="text">
                                    <a href="#">
                                        <h4>Warehouse Officer</h4>
                                    </a>
                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem</p>
                                </div>
                            </li>

                            <li>
                                <img src="{{ asset('ui/img/about/careers/pic-small-c3.jpg') }}" alt="">
                                <div class="text">
                                    <a href="#">
                                        <h4>Sales</h4>
                                    </a>
                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem</p>
                                </div>
                            </li>
                        </ul>
                    </div> --}}

                    <div class="clearfix"></div>

                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="section-counter" class="light-text">
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
                                    <div class="text">
                                        States<br>
                                        in Nigeria
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="counter">
                                    <div class="num">
                                        12
                                        <div class="tiny-border"></div>
                                    </div>
                                    <div class="text">
                                        Years<br>
                                        Experience
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="counter">
                                    <div class="num">
                                        770
                                        <div class="tiny-border"></div>
                                    </div>
                                    <div class="text">
                                        Packages<br>
                                        a Day
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="counter">
                                    <div class="num">
                                        5.5k
                                        <div class="tiny-border"></div>
                                    </div>
                                    <div class="text">
                                        Satisfied<br>
                                        Customers
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- section close -->

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
                window.location.replace('tracking/'+ track);
            }
        }
    </script>    
@endsection