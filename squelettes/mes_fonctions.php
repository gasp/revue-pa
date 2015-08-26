<?php

function filtre_paypal_url($v, $prefix, $price){
  return 'https://www.paypal.com/cgi-bin/webscr?business='
    .'administration@revue-pa.com'
    .'&cmd=_xclick&currency_code=EUR'
    .'&amount='.$price
    .'&item_name='.rawurlencode(translitteration($prefix.' '.$v));
}
