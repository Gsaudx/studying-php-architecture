<?php

namespace Gsaudx\Architecture;

use Stringable; //Obly us to make class implements Stringable, consequently making us define __toString() method

/**
 * A class which has **NOT** an identifier and represents a model from our system 
 * is called an `VALUE OBJECT`
 */
class Email implements Stringable
{
  private string $endereco;

  public function __construct(string $endereco) 
  {
    if (filter_var($endereco, FILTER_VALIDATE_EMAIL) === false) {
      throw new \InvalidArgumentException('Invalid e-mail address');
    }
    $this->endereco = $endereco;
  }

  /**
   * @return string $endereco | Allows to control object behavior when represented as a string
   * For example, if we run `echo $Email` (with the object instantiated), the method __toString() will be called implicitly
   */
  public function __toString(): string
  {
    return $this->endereco;
  }
}