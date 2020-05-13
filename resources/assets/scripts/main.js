/* eslint-disable */
// import external dependencies
import 'jquery';

// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

import Swiper from 'swiper/dist/js/swiper.min';
import lightbox2 from 'lightbox2/dist/js/lightbox';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

var swiper = new Swiper('.swiper-container', {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var swiper_company = new Swiper('.swiper-container_one', {
  slidesPerView: 6,
  spaceBetween: 15,
  loop: true,
  autoplay: {
    delay: 3000,
  },
});

var comments = new Swiper('.swiper-comments', {
  slidesPerView: 1,
  spaceBetween: 30,
  calculateHeight:true,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.comment-next',
    prevEl: '.comment-prev',
  },
});