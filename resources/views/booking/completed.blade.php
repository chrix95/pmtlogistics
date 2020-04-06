@extends('layouts.app')
@section('content')
  <div class="wrap">
    <div class="row">
      <div class="three-fourth">
        <form class="box readonly">
          <h3>Passenger details</h3>
          <div class="f-row">
            <div class="one-fourth">Name and surname</div>
            <div class="three-fourth">John Doe</div>
          </div>
          <div class="f-row">
            <div class="one-fourth">Mobile number</div>
            <div class="three-fourth">00386 30 555 555</div>
          </div>
          <div class="f-row">
            <div class="one-fourth">Email address</div>
            <div class="three-fourth">john.doe@email.com</div>
          </div>
          <div class="f-row">
            <div class="one-fourth">Street address</div>
            <div class="three-fourth">1036 Awesome Lane</div>
          </div>
          <div class="f-row">
            <div class="one-fourth">Zip code</div>
            <div class="three-fourth">21462</div>
          </div>
          <div class="f-row">
            <div class="one-fourth">City</div>
            <div class="three-fourth">Transferville</div>
          </div>
          <div class="f-row">
            <div class="one-fourth">Country</div>
            <div class="three-fourth">Drivingland</div>
          </div>
          
          <h3>Departure Transfer details</h3>
          <div class="f-row">
            <div class="one-fourth">Date</div>
            <div class="three-fourth">28.08.2014 10:00</div>
          </div>
          <div class="f-row">
            <div class="one-fourth">From</div>
            <div class="three-fourth">London bus station</div>
          </div>
          <div class="f-row">
            <div class="one-fourth">To</div>
            <div class="three-fourth">London airport</div>
          </div>
          <div class="f-row">
            <div class="one-fourth">Vehicle</div>
            <div class="three-fourth">Private shuttle</div>
          </div>
          <div class="f-row">
            <div class="one-fourth">Extras</div>
            <div class="three-fourth">2 pieces of baggage up to 15kg</div>
          </div>
          
          <h3>Return Transfer details</h3>
          <div class="f-row">
            <div class="one-fourth">Date</div>
            <div class="three-fourth">02.09.2014 17:00</div>
          </div>
          <div class="f-row">
            <div class="one-fourth">From</div>
            <div class="three-fourth">London airport</div>
          </div>
          <div class="f-row">
            <div class="one-fourth">To</div>
            <div class="three-fourth">London bus station</div>
          </div>
          <div class="f-row">
            <div class="one-fourth">Vehicle</div>
            <div class="three-fourth">Private shuttle</div>
          </div>
          <div class="f-row">
            <div class="one-fourth">Extras</div>
            <div class="three-fourth">2 pieces of baggage up to 15kg</div>
          </div>
          
          <h3>TOTAL: 840,00 USD</h3>
        </form>
      </div>
      
      <!--- Sidebar -->
      <aside class="one-fourth sidebar right">
        <!-- Widget -->
        <div class="widget">
          <h4>Need help booking?</h4>
          <div class="textwidget">
            <p>Call our customer services team on the number below to speak to one of our advisors who will help you with all of your needs.</p>
            <p class="contact-data"><span class="icon icon-themeenergy_call black"></span> +1 555 555 555</p>
          </div>
        </div>
        <!-- //Widget -->
        
        <!-- Widget -->
        <div class="widget">
          <h4>Advertisment</h4>
          <a href="#"><img src="images/uploads/advertisment.jpg" alt="" /></a>
        </div>
        <!-- //Widget -->
      </aside>
      <!--- //Sidebar -->
    </div>
  </div>
@endsection