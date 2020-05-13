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
    
    



    <?php

    // check if the repeater field has rows of data
    if( have_rows('realizacja') ):
       // loop through the rows of data
        while ( have_rows('realizacja') ) : the_row(); 
            // display a sub field value
            the_sub_field('tytul_realizacji');
            the_sub_field('zdjecie');
            the_sub_field('opis');
        endwhile;
    else :
        // no rows found
    endif;
    ?>


</div>

</div>

  <div class="mb-5">
  @include('partials.customers')
  </div>


<div class="container mb-5 realization-box">


<?php
$args = array(
    'post_type'      => 'naszerealizacje',
    'order'          => 'ASC',
    'orderby'        => 'menu_order',
    'posts_per_page' => -1,
 );
$parent = new WP_Query( $args );
if ( $parent->have_posts() ) : ?>
    <div class="row">
        <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
      <div class="col-3 single">
        <!-- <img src="<?php echo Get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid"> -->
         <!-- <div class="photo" style='background: url( "<?php echo get_the_post_thumbnail_url(); ?>" )'></div> -->




<?php
if (get_field('galeria_zdjec')[0]["url"]) {
 echo '<a href='.get_field('galeria_zdjec')[0]["url"].' data-lightbox="example-'.get_the_ID().'">';
} ?>
        <div class="photo" style='background: url( "<?php echo get_the_post_thumbnail_url(); ?>" )'></div>

<?php
if (get_field('galeria_zdjec')[0]["url"]) {
 echo '</a>';
} ?>



        <?php 
$images = get_field('galeria_zdjec');
$size = 'full';

  if( $images ): ?>
        <?php foreach( $images as $image ): ?>


@if ( $image["ID"] == get_field('galeria_zdjec')[0]["id"] )
@else

           <a href="<?php echo wp_get_attachment_image_url( $image['ID'], 'full'); ?>" data-lightbox="example-<?php echo get_the_ID(); ?>"></a>

@endif
           
  <?php endforeach; ?>        
<?php endif; ?>


        <div class="content">
          <div class="title"><?php the_title(); ?></div>
          <div class="desc"><?php echo get_excerpt(); ?></div>
        </div>
      </div>



        <?php endwhile; ?>
    </div>
<?php endif; ?>
</div>
  @endwhile



@endsection
 