<footer>
  <div class="container">
<div class="row">

  <div class="col-3">
  <div class="title">LumexLED</div>
<nav class="menu-footer content">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </nav>
  </div>

<div class="col-3">
<div class="title">Kontakt</div>
<div class="content"><?php the_field('contact', 'option'); ?></div>
</div>

<div class="col-5 offset-1">
<div class="title">Informacje</div>
<div class="content mb-3"><?php the_field('about', 'option'); ?></div>

<?php 
$link = get_field('polityka', 'option');
if( $link ): ?>
    <a class="text-white" href="{{$link['url']}}">Polityka prywatności</a>
<?php endif; ?>



</div>
  </div>
</footer>
<div class="copyright">
  <div class="container">
©  2015 - 2019 LumexLED
</div>
</div>