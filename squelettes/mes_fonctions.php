<?php

function filtre_paypal_url($v, $prefix, $price){
  // $v = preg_replace('/[^\w\s]/', " ", $v);
  $v = substr($v , 0, 30);
  return 'https://www.paypal.com/cgi-bin/webscr?business='
    .'administration@revue-pa.com'
    .'&cmd=_cart&currency_code=EUR&add=1'
    .'&amount='.$price
    .'&item_name='.rawurlencode(translitteration($prefix.' '.$v));
}
