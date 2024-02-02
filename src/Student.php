<?php

namespace Gsaudx\Architecture;

/**
 * A class which has an identifier and represents a model from our system 
 * is called an `ENTITY`
 */
class Student 
{
  private Cpf $cpf;
  private string $name;
  private Email $email; //As the email has a bunch of validation rules, it'll be an Email class type
  private array $telephones;

  public function addTelephone(string $ddd, string $telephoneNumber) 
  {
    $this->telephones[] = new Telephone($ddd, $telephoneNumber);
  }
}
