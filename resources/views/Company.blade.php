{{--
  Template Name: O Firmie
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

<div class="container">
<div class="heading mt-2 mb-4">
  <h2>O <span>Firmie</span></h2>
</div>
<div class="section-margin mb-3 d-block">
@include('partials.content-page')
</div>

<div class="my-5">
<div class="heading">
  <h2 class="mt-0">Nasi <span>klienci</span></h2>
</div>

<div class="container">
<div class="row">
<?php if( have_rows('kafelka3', 'option') ): ?>
  <div class="swiper-container_one">
  <div class="swiper-wrapper">
  <?php while ( have_rows('kafelka3', 'option') ) : the_row();
    $grafika = get_sub_field('grafika');
    $link = get_sub_field('link');?>
    <div class="swiper-slide mw-100">
      <a href="<?php echo $link ?>"><img src="<?php echo $grafika ?>" alt=""></a>
    </div>
    <?php endwhile; ?>
  </div>
</div></div>
</div>
</div>
<?php endif; ?>
</div>




</div> <!-- container -->


<div class="my-5">
@include('partials.customers')
</div>

<div class="container my-5">
<div class="heading">
  <h2 class="mt-0">przekonaj się, dlaczego <span>warto nam zaufać</span></h2>
</div>

<p><?php the_field('why'); ?></p>
</div>

  @endwhile
@endsection
 