<?php
//概要の文字数
  function my_length($length){
    return 20;
  }
  add_filter('excerpt_mblength','my_length');

  //省略記号
  function my_more($more){
    return '...';
  }
add_filter('excerpt_more','my_more');
