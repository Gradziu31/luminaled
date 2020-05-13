{{--
  Template Name: Realizacje
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="container">

<div class="mb-5">
<div class="heading mt-2 mb-4">
  <h2>Realizacje</h2>
</div>
    @include('partials.content-page')
</div>

</div>

  <div class="mb-5">
  @include('partials.customers')
  </div>


<div class="container mb-5 realization-box">






  <?php if( have_rows('realizacja') ): ?>
  <div class="row">
    <?php while ( have_rows('realizacja') ) : the_row();  ?>
<div class="col-3 single">
  <?php $obrazek = get_sub_field('photos_realizacja'); ?>
  <div class="photo" style='background: url("<?php echo $obrazek['url']; ?>")'></div>
  <div class="content">
    <div class="title">{{the_sub_field('tytul_realizacji')}}</div>
    <div class="desc">{{the_sub_field('opis')}}</div>
  </div>
  
  
  
</div>
    <?php endwhile; ?>
  </div>
          <?php else : ?>
  <?php endif; ?>
 
@endwhile


</div>



@endsection
 