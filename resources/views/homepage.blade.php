{{--
  Template Name: Strona główna
--}}

@extends('layouts.app')

@section('content')


<div class="container mb-5">
  @if(count(get_field('Slide')) == 1)
    <div class="swiper-wrapper">
      <?php if( have_rows('Slide') ): ?>
        <?php while ( have_rows('Slide') ) : the_row(); $image = get_sub_field('obrazek'); ?>
        <div class="swiper-slide">
                  <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
        <?php  endwhile;
      else : endif; ?>
    </div>
    @else 
    <div class="swiper-container">
      <div class="swiper-wrapper">
    <?php if( have_rows('Slide') ): ?>
    <?php while ( have_rows('Slide') ) : the_row(); $image = get_sub_field('obrazek'); ?>
    <div class="swiper-slide">
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
    <?php  endwhile;
  else : endif; ?>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    @endif
  </div>
  </div>
</div>








<div class="mt-1 mb-5">
<div class="heading">
  <h1>Przemysłowe <span>oświetlenie led</span></h1>
</div>

<div class="container section_one">
  <div class="row">
  <?php if( have_rows('kafelka4', 'option') ): ?>
  <?php while ( have_rows('kafelka4', 'option') ) : the_row();
          $title = get_sub_field('title');
          $link = get_sub_field('link');
          $photo = get_sub_field('photo');?> 
    
    <div class="col-3">

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
    </div>
  </div>
</div>



<div class="mb-5">
<div class="heading">
  <h2>obszary <span>działalności</span></h2>
</div>

<div class="section_two">
<div class="container">
  <?php echo get_field('opis'); ?>
</div>

  <div class="container">
  <div class="row text-center pt-4">
  <?php if( have_rows('kafelka2') ): ?>
  <?php while ( have_rows('kafelka2') ) : the_row();
          $ikona = get_sub_field('ikona');
          $desc = get_sub_field('desc');?> 
    
    <div class="col single-box">

      <div class="box">
        <img src="<?php echo $ikona; ?>" alt="" class="img-fluid">
      </div>
      <div class="title">
      <?php echo $desc; ?>
      </div>

    </div>
          <?php  endwhile; endif;?>
    </div>
  </div>
</div>
</div>












<div class="mb-5">
<div class="heading">
  <h2>nasze <span>realizacje</span></h2>
</div>


  <div class="section_tree">
        
        <div class="swiper-slide">
        <div class="container">
          <div class="d-flex justify-content-between realization">
              <div class="content d-flex flex-column justify-content-between">
              <span>
                <div class="title"><?php the_field('tytul', 'option'); ?></div>
              <?php the_field('opis', 'option'); ?>
              </span>
                <a href="<?php the_field('link', 'option')['url']; ?>" class="text-center d-block mx-auto pt-2"><div class="more button"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Zobacz wszystkie <i class="fa fa-angle-double-left" aria-hidden="true"></i></div></a>
              </div>
              <?php $grafika = get_field('grafika', 'option'); ?>
            <div class="thumb" style='background: url( "<?php echo esc_url($grafika['url']); ?>" )'></div>
          </div>
        </div>
         </div>
  </div>
</div>







<div class="mb-5">
<div class="heading">
  <h2>Referencje</h2>
</div>

<?php if( have_rows('opinie_klientow', 'option') ): ?>

<div class="reviews section_four">
<div class="container py-4 position-relative">
  <div class="swiper-comments">
  <div class="swiper-wrapper">

        <?php while( have_rows('opinie_klientow', 'option') ): the_row(); 
        $avatar = get_sub_field('avatar');
        $desc = get_sub_field('komentarz');
      ?>
        <div class="swiper-slide mw-100">
          <div class="row">
          <div class="col-3 d-flex justify-content-center align-items-center">
            <div class="avatar"><img src="<?php echo $avatar; ?>" alt=""></div>
          </div>
          <div class="col-9 d-flex justify-content-start align-items-center">
          <div class="comment__desc"><?php echo $desc; ?></div>
          </div>
          </div>
        </div>

        <?php endwhile; ?>

</div>
</div>

<div class="content-slide">
<div class="swiper-pagination"></div>
<div class="pagination">
      <div class="comment-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
      <div class="comment-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
  </div>
</div>

</div>
</div>
</div>
<?php endif; ?>
</div>



<div class="mb-5">
<div class="heading">
  <h2>poznaj <span>nas</span></h2>
</div>

<div class="container">
@while(have_posts()) @php the_post() @endphp
  @include('partials.content-page')
@endwhile
</div>
</div>













@endsection