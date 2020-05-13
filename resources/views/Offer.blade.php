{{--
  Template Name: Oferta
--}}

@extends('layouts.app')

@section('content')
<div class="container">
@while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
</div>
<span><?php the_field('info-oferta'); ?></span>
<div class="container section_one">
  <div class="row">
  <?php if( have_rows('kafelka4', 'option') ): ?>
  <?php while ( have_rows('kafelka4', 'option') ) : the_row();
          $title = get_sub_field('title');
          $link = get_sub_field('link');
          $photo = get_sub_field('grafika_do_oferty');?> 
    
    <div class="col-6 mb-4">

    <a href="<?php echo $link; ?>">
      <div class="box">
        <div class="title"><?php echo $title; ?></div>
        <img src="<?php echo $photo; ?>" alt="" class="img-fluid">
      </div>
    </a>

    
    </div>
          <?php  endwhile;
  else :
endif;
?>
<div class="col-12">
  <?php the_field('dodatkowy_opis'); ?>
</div>
    </div>
  </div>



@endsection
 