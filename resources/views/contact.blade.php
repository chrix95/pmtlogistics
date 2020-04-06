@extends('layouts.app')
@section('pageTitle', 'Contact')
@section('content')
  <!-- subheader begin -->
  <section id="subheader" class="page-about no-bottom" data-stellar-background-ratio="0.5">
    <div class="inner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Contact us</h1>
            <div class="crumb">
              <div class="deco">
                <ul>
                  <li><a href="{{ route('welcome') }}">Home</a></li>
                  <li>Contact us</li>
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
        <div class="row no-gutter">
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.9507702274586!2d7.438484914326666!3d9.068249690870957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0b2af11d5def%3A0x91af883262f6ffd3!2sPeace%20Mass%20Transport!5e0!3m2!1sen!2sng!4v1584362240606!5m2!1sen!2sng" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

            <div class="col-md-6">
                <div id="contact-form-wrapper">
                    <div class="contact_form_holder">
                        <form id="contact" class="row" name="form1" method="post" action="#">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your name" />

                            <div id="error_email" class="error">Please check your email</div>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Your email" />

                            <div id="error_message" class="error">Please check your message</div>
                            <textarea cols="10" rows="10" name="message" id="message" class="form-control" placeholder="Your message"></textarea>

                            <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                            <div id="mail_failed" class="error">Error, email not sent</div>

                            <p id="btnsubmit">
                                <input type="submit" id="send" value="Send" class="btn btn-custom" />
                            </p>



                        </form>
                    </div>
                </div>
            </div>


        </div>

        <div class="divider-line"></div>

        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".8s">Our Branch
                </h2>
                <div class="small-border wow flipInY" data-wow-delay=".8s" data-wow-duration=".8s"></div>
            </div>

            <div class="col-md-3">
                <h3>ABUJA FCT</h3>
                39 Ajose Adeogun Street,<br>
                Utako, Fct, Abuja<br>
                <strong>Tel:</strong> (234) 805 509 1829<br>
                <strong>Email:</strong> abuja@pmt.com<br>
                <div class="divider-single"></div>

                <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="btn-border popup-gmaps">View Location</a>
            </div>

            <div class="col-md-3">
                <h3>ENUGU</h3>
                Opposite Garki Market, <br>
                Enugu<br>
                <strong>Tel:</strong> (234) 705 579 4026<br>
                <strong>Email:</strong> enugu@pmt.com<br>

                <div class="divider-single"></div>

                <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="btn-border popup-gmaps">View Location</a>
            </div>

            <div class="col-md-3">
                <h3>LAGOS</h3>
                Flyover Bridge, Ketu Road,<br>
                Beside Biode Garage, Ojota<br>
                <strong>Tel:</strong> (234) 815 046 1820<br>
                <strong>Email:</strong> lagos@pmt.com<br>

                <div class="divider-single"></div>

                <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="btn-border popup-gmaps">View Location</a>
            </div>

            <div class="col-md-3">
                <h3>MINNA</h3>
                David Mark Road, Opposite INEC<br>
                Office, Minna, Niger<br>
                <strong>Tel:</strong> (234) 805 669 7027<br>
                <strong>Email:</strong> minna@pmt.com<br>

                <div class="divider-single"></div>

                <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="btn-border popup-gmaps">View Location</a>
            </div>


        </div>


    </div>
    </div>
  <!-- content close -->
@endsection