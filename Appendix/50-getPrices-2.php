<?php

function getPrices2(array $products) {
  return array_map(function($p) {
    return $p->price;
  }, array_filter(function($p) {
    return $p->stock > 0;
  }));
}
