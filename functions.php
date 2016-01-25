<?php
//抜粋文字を５０に
function my_length($length){
  return 50;
}
add_filter('exerpt_mblength', 'my_length');

//省略文字を ... にする
function my_more($more){
  return '...';
}
add_filter('excerpt_more','my_more');
