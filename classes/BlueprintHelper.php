<?php

namespace BlueprintBuilder;

class BlueprintHelper {

  public static function slugify($string){
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
  }


}