<?php

require './classes/Page.php';

class Kontakt extends Page{
  protected function GetContent() {
    echo "Ovo je moj kontakt";
  }

  protected function PageRequiresAuthenticUser() {
    return false;
  }

}
$page= new Kontakt();
$page->Display("Kontakt podaci");

