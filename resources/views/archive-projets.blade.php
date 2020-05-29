<?php
/**
 * Template Name: Projects
 */
?>

@extends('layouts.app')

@section('content')

  <div class="header">
    <h1>Toutes mes réalisations</h1>


    <div class="return">
      <a href="{{get_permalink( get_page_by_title( 'home page' ))}}">Page principale</a>
      <img src="@asset('images/arrows/arrow-view-project.png')" alt="fleche-retour">
    </div>

  </div>

  <section>
    <div class="wrap">
      <div class="projects">
        @foreach($post_projs as $proj)

            <div class="project">
              <div class="imgDisplayed">{!!get_the_post_thumbnail($proj->ID,"large",array("class"=>"menu__item-img"))!!}</div>

              <div class="overlay">
                <div class="little-wrap">
                  <p>{{$proj->post_title}}</p>
                  <p>- Caractéristique</p>
                  <p>- Caractéristique</p>
                  <p>- Caractéristique</p>

                  <div class="view-project">
                    <a class="menu__item-link" href="{{get_permalink($proj->ID)}}">Voir le projet</a>
                    <img src="@asset('images/arrows/arrow-view-project.png')" alt="fleche-regarder-projet">
                  </div>
                </div>
              </div>
            </div>

          @endforeach
      </div>
    </div>
  </section>




@endsection
