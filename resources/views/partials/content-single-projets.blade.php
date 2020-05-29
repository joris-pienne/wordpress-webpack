<?php
/**
 * Template Name: Projects-Single
 */
?>

@section('content')

<div class="header">
  <h1>{!!$title!!}</h1>


  <div class="return">
    <a href="{{get_permalink( get_page_by_title( 'projets' ))}}">Page projets</a>
    <img src="@asset('images/arrows/arrow-view-project.png')" alt="fleche-retour">
  </div>

</div>

<section>
  <div class="wrap">
    <iframe width="500" height="275" src="{!!$linkyt!!}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="descri">
      {!!$para!!}
    </div>
  </div>
</section>

@endsection
