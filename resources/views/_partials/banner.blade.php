@if(Request::is('/'))
    <header>
@else
    <header class="overlay">
@endif
    <div class="container">
        <span id="menu-btn"></span>

        <div class="row">
            <div class="col-md-3">

                <!-- logo begin -->
                <div id="logo">
                    <div class="inner">
                        <a href="{{ route('welcome') }}">
                            <img src="{{ asset('ui/img/logo.png') }}" width="150px" class="logo-1">
                            <img src="{{ asset('ui/img/logo-2.png') }}" width="150px" class="logo-2">
                        </a>

                    </div>
                </div>
                <!-- logo close -->

            </div>

            <div class="col-md-9">

                <!-- mainmenu begin -->
                @include('_partials.menu')
                <!-- mainmenu close -->

                <!-- search -->
                {{-- <div class="search text-right">
                    <input type="text" name="search" id="search" placeholder="search">
                </div> --}}
                <!-- social icons close -->

            </div>
        </div>
    </div>
</header>