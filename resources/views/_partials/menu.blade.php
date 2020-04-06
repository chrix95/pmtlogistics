<nav id="mainmenu-container">
  <ul id="mainmenu">
    <li>
      <a href="{{ route('welcome') }}">Home</a>
    </li>
    <li><a href="{{ route('about') }}">About Us</a>
      {{-- <ul>
        <li><a href="{{ route('about') }}">Company</a></li>
        <li><a href="people.html">People</a></li>
        <li><a href="history.html">History</a></li>
        <li><a href="testimonials.html">Testimonials</a></li>
        <li><a href="careers.html">Careers</a></li>
      </ul> --}}
    </li>
    <li><a href="#">Services</a>
      <ul>
        <li><a href="{{ route('services') }}">All Services</a></li>
        <li><a href="{{ route('services.template', ['slug' => 'land']) }}">Land Freight</a></li>
        <li><a href="{{ route('services.template', ['slug' => 'air']) }}">Air Freight</a></li>
        <li><a href="{{ route('services.template', ['slug' => 'ocean']) }}">Ocean Freight</a></li>
        <li><a href="{{ route('services.template', ['slug' => 'cargo']) }}">Cargo Freight</a></li>
      </ul>
    </li>
    <li><a href="{{ route('faqs') }}">FAQ</a></li>
    <li><a href="{{ route('contact') }}">Contact</a></li>
  </ul>
</nav>