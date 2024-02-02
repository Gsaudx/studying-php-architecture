<?php

namespace Gsaudx\Architecture;

class Telephone
{
  private string $ddd;
  private string $number;

  public function __construct(string $ddd, string $telephoneNumber) 
  {
    $this->ddd = $ddd;
    $this->number = $telephoneNumber;
  }
}