@extends('layouts.admin')




@section('content')
    


@php
    $settings = App\Models\Setting::first();
@endphp

<header>
    <img src="{{ asset('storage/' . $settings->header_image) }}" alt="Header" class="img-fluid">
</header>

<section>
    <h2>Message du Promoteur</h2>
    <p>{{ $settings->promoteur_message }}</p>
</section>

<section>
    <h2>Flyer</h2>
    <img src="{{ asset('storage/' . $settings->flyer_image) }}" alt="Flyer" class="img-fluid">
</section>

<section>
    <h2>Date de la rentrée</h2>
    <p>{{ \Carbon\Carbon::parse($settings->rentree_date)->format('d/m/Y') }}</p>
</section>



@endsection