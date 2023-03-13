@include('partials.header')
@extends('layouts.master')
@include('layouts.css')
@section('title', 'Page Title')


@section("content")
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Galerie</h2>
                <p>Voici quelques photos de nos événements passés</p>
            </div>
            @foreach($fichiers as $fichier)
                <div class="m-1"><a href="{{asset("storage/".$fichier)}}" class="gallery-lightbox"><img src="{{asset("storage/".$fichier)}}" class="img-fluid" alt=""></a></div>
            @endforeach
        </div>


@endsection

@include('partials.footer')
