<?php

// function renderCopyright () {
//   //.....
// }

// add_shortcode('copyright', 'renderCopyright');

add_shortcode('copyright', function () {
  return "© Eko krūzes " . date("Y");
});

add_shortcode('example', function ($attr) {
  if (isset($attr['number']) && is_string($attr['number'])) {
    return "<h1>Example #{$attr['number']}</h1>";
  }
  return "<h1>Example</h1>";
});

