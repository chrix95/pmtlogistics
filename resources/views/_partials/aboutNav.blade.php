<ul class="side-nav">
  <li @if (active('about')) class="active" @endif><a href="{{ route('about') }}">Company</a></li>
  <li @if (active('testimonial')) class="active" @endif><a href="{{ route('testimonial') }}">Testimonials</a></li>
  <li @if (active('faqs')) class="active" @endif><a href="{{ route('faqs') }}">FAQ</a></li>
</ul>