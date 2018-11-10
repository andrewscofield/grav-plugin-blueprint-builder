<?php

namespace BlueprintBuilder;

class BlueprintFields {

  protected $fields;
  protected $title;
  protected $extends;
  protected $rules;

  /**
   * Magic method for returning a field class based on a method of this class (e.g. BlueprintFields->addText() would return a new instance of TextField)
   * 
   * It will also store that 
   *
   * @return $field: An instance of the {$name} class
   */

  public function __call($name, $arguments)
  {
    $prefix = substr($name, 0, 3);
    $parameter = substr($name, 3);

    if ($prefix === 'add') 
    {
        $field_class = __NAMESPACE__.'\\'.$parameter . 'Field';
        if(class_exists($field_class)){

          $field = new $field_class($arguments);
          $fields[] = &$field;
          
          return $field;
        }
        else
        {
          return false;
        }
    }

    return false;
  }


}