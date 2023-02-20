@extends('layouts.master')
@include('partials.header')
@section("content")

    <!-- ======= Supporters Section ======= -->

        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Nos partenaires</h2>
            </div>
            @foreach($niveaux as $niveau)
                @if($niveau->partenaires->count() > 0)
                    <h3>{{$niveau->nom}}</h3>
                    <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
                        @foreach($niveau->partenaires as $partenaire)
                            <div class="col-lg-3 col-md-4 col-xs-6">
                                <a target="_blank" href="{{$partenaire->lien}}">
                                    <div class="supporter-logo">
                                        <img src="{{asset($partenaire->imagePath)}}" class="img-fluid" alt="{{$partenaire->nom}}">
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif

            @endforeach

        </div>

@include('partials.footer')
