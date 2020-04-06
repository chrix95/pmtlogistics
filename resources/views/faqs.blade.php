@extends('layouts.app')
@section('pageTitle', 'Frequently Asked Questions')
@section('content')
  <!-- subheader begin -->
  <section id="subheader" class="page-about no-bottom" data-stellar-background-ratio="0.5">
    <div class="inner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Frequently Asked Questions</h1>
            <div class="crumb">
              <div class="deco">
                <ul>
                  <li><a href="{{ route('welcome') }}">Home</a></li>
                  <li>Frequently Asked Questions</li>
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

                <div class="faq">
                    <span class="btn-expand"></span>
                    <div class="inner">
                        <i class="icon-search"></i>
                        <h4>What services do freight forwarders provide and how can I find one?</h4>
                    </div>

                    <div class="hide-content">
                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                        auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
                        nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a
                        odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in
                        elit.
                    </div>
                </div>

                <div class="faq">
                    <span class="btn-expand"></span>
                    <div class="inner">
                        <i class="icon-search"></i>
                        <h4>Do I need an export license when making a private shipment?</h4>
                    </div>

                    <div class="hide-content">
                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                        auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
                        nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a
                        odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in
                        elit.
                    </div>
                </div>

                <div class="faq">
                    <span class="btn-expand"></span>
                    <div class="inner">
                        <i class="icon-search"></i>
                        <h4>What can I do to prevent delays and ensure a smooth process of the shipment?</h4>
                    </div>

                    <div class="hide-content">
                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                        auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
                        nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a
                        odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in
                        elit.
                    </div>
                </div>

                <div class="faq">
                    <span class="btn-expand"></span>
                    <div class="inner">
                        <i class="icon-search"></i>
                        <h4>Any advice for a first time shipper?</h4>
                    </div>

                    <div class="hide-content">
                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                        auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
                        nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a
                        odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in
                        elit.
                    </div>
                </div>

                <div class="faq">
                    <span class="btn-expand"></span>
                    <div class="inner">
                        <i class="icon-search"></i>
                        <h4>Can you ship my vehicle internationally?</h4>
                    </div>

                    <div class="hide-content">
                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                        auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
                        nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a
                        odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in
                        elit.
                    </div>
                </div>

                <div class="faq">
                    <span class="btn-expand"></span>
                    <div class="inner">
                        <i class="icon-search"></i>
                        <h4>Do you have warehouse where I can drop off the cargo?</h4>
                    </div>

                    <div class="hide-content">
                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                        auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
                        nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a
                        odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in
                        elit.
                    </div>
                </div>

                <div class="faq">
                    <span class="btn-expand"></span>
                    <div class="inner">
                        <i class="icon-search"></i>
                        <h4>What’s the best way to save money on air freight?</h4>
                    </div>

                    <div class="hide-content">
                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                        auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
                        nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a
                        odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in
                        elit.
                    </div>
                </div>

                <div class="faq">
                    <span class="btn-expand"></span>
                    <div class="inner">
                        <i class="icon-search"></i>
                        <h4>Are there types of cargo that cannot be shipped via air freight?</h4>
                    </div>

                    <div class="hide-content">
                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                        auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
                        nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a
                        odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in
                        elit.
                    </div>
                </div>


            </div>
        </div>
    </div>
  </div>
  <!-- content close -->
@endsection