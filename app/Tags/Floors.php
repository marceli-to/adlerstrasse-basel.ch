<?php
namespace App\Tags;
use Statamic\Tags\Tags;

class Floors extends Tags
{
  public function index()
  {
  }

  public function get()
  {
    $floors = ['EG','1. OG', '2. OG', 'DG' ];
    return $floors[$this->params->get('floor')];
  }
}
