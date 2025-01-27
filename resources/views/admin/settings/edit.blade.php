@extends('layouts.admin.admin')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Modifier les paramètres de la page d'accueil</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif




    <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="header_image" class="form-label">Image d'en-tête</label>
            <input type="file" name="header_image" class="form-control">
            @if ($setting->header_image)
                <img src="{{ asset('storage/' . $setting->header_image) }}" alt="Header Image" class="img-fluid mt-3" style="max-width: 200px;">
            @endif
        </div>
        <div class="mb-3">
            <label for="promoteur_message" class="form-label">Message du promoteur</label>
            <textarea name="promoteur_message" class="form-control" rows="4" required>{{ $setting->promoteur_message }}</textarea>
        </div>
    
        <div class="mb-3">
            <label for="flyer_image" class="form-label">Flyer d'annonce</label>
            <input type="file" name="flyer_image" class="form-control">
            @if ($setting->flyer_image)
                <img src="{{ asset('storage/' . $setting->flyer_image) }}" alt="Flyer Image" class="img-fluid mt-3" style="max-width: 200px;">
            @endif
        </div>


        <div class="mb-3">
            <label for="logo_image" class="form-label">Logos Image </label>
            <input type="file" name="logo_image" class="form-control">
            @if ($setting->logo_image)
                <img src="{{ asset('storage/' . $setting->logo_image) }}" alt="logo Image" class="img-fluid mt-3" style="max-width: 200px;">
            @endif
        </div>

        <div class="mb-3">
            <label for="rentree_date" class="form-label">Date de la rentrée</label>
            <input type="date" name="rentree_date" class="form-control" value="{{ $setting->rentree_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
      

</div>





@endsection
