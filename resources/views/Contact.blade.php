{{--
  Template Name: Kontakt
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="container">

<div class="mb-5">
<div class="heading mt-2 mb-4">
  <h2>Kontakt</h2>
</div>
    @include('partials.content-page')
</div>


<div class="contact-content">
<div class="row mb-5">
<div class="col-xl-4">
  <div class="sidebar">
  <h3 class="mb-2">Adres:</h3>
  <span class="mb-2"><?php the_field('nazwa_firmy'); ?></span>
  <span>NIP: <?php the_field('nip'); ?></span>
  <span class="mb-2">REGON: <?php the_field('regon'); ?></span>
  <span class="mb-2">nr. konta: <?php the_field('nr_konta'); ?></span>
  <h3 class="mb-2">Dane kontaktowe:</h3>
  <span>Biuro obsługi:</span>
  <span><?php the_field('numer_telefonu', 'option'); ?></span>
  <span><?php the_field('email', 'option'); ?></span>
  <span><a href="<?php the_field('link_fb', 'option'); ?>">facebook</a></span>
  </div>
</div>

<div class="col-xl-8">
  <div class="form">
  <?php echo do_shortcode('[contact-form-7 id="33" title="Formularz 1"]') ?>
  </div>
</div>
</div>
</div>

<div class="row mb-4">


  <?php if( have_rows('pracownicy') ): 
    while ( have_rows('pracownicy') ) : the_row();?>
<div class="col-3 d-flex flex-column">
  <b class="mb-1">{{the_sub_field('rola_uzytkownika')}}</b>
  <span class="mb-1">{{the_sub_field('imie_i_nazwisko')}}</span>
  <span class="mb-1">Tel: <a href="tel:{{the_sub_field('numer_kontaktowy')}}">{{the_sub_field('numer_kontaktowy')}}</a></span>
  <span class="mb-1">E-mail: <a href="mailto:{{the_sub_field('adres_email')}}">{{the_sub_field('adres_email')}}</a></span>
</div>
      <?php endwhile;
    else :
    endif;
  ?>


</div>
    </div>

<iframe class="m-0 p-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1270.2058540528878!2d18.837885638311487!3d50.45205762993584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4711298f074d4623%3A0x11b06072dc0771ee!2zVcWCYcWEc2thIDMsIDQyLTYwMCBUYXJub3dza2llIEfDs3J5!5e0!3m2!1spl!2spl!4v1542749390946" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
  @endwhile
@endsection