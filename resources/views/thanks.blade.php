@extends('layouts.app')

@section("layoutawal")
<div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
    <div class="box" id="thankyou">
        <div class="icon">
            <h1>😁</h1>
        </div>
        <h4 class="title">You are done. Data has been successfully inserted. <i class="ion-ios-checkmark" style="color: green;"></i></h4>
        <p class="description">Thank you <b> {{ $nama }}</b> for filling our form. Hope we can see again in the future
        </p>
    </div>
</div>
<div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
    <img class="imagelayout" src="{{ asset('img/find.png') }}" rel="stylesheet">
</div>

@endsection