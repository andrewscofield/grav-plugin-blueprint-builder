<?php

namespace BlueprintBuilder\Field;

use BlueprintBuilder\BlueprintField;

class TextField extends BlueprintField 
{
  public function __construct($title){
    parent::__construct($title);

    $this->type = 'text';
  }
}