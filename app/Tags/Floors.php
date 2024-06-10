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
    $floors = [
      -1 => 'HG',
      0 =>'EG',
      1 => '1. OG',
      2 => '2. OG',
      3 => 'DG' ];
    return $floors[$this->params->get('floor')];
  }
}
