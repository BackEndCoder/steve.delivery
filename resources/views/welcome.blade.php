@extends('layouts.app')


@section('content')

      <h1 class="mt-5">Steve Delivery</h1>
      <p class="lead">I am a self employed <b>Bicycle Messenger</b> working in <b>Central London</b>. You can <a href="/hire-me">hire me</a> for bookings. The companies below have prevoiusly used my service :-</p>
    <div class="row center" style="height: 250px;
    line-height: 250px; max-height: 250px;">
        <div class="col-3">
            <span class="helper"></span>
            <img class="img-fluid" src="/images/eats.jpg" />
        </div>
        <div class="col-3">
            <span class="helper"></span>
            <img class="img-fluid" src="/images/roo.png" />
        </div>
        <div class="col-3">
            <span class="helper"></span>
            <img class="img-fluid" src="/images/gophr.jpg" />
        </div>
        <div class="col-3">
            <span class="helper"></span>
            <img class="img-fluid" src="/images/stuart.png" />
        </div>
    </div>

@endsection
