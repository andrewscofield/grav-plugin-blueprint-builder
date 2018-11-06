<?php

namespace BlueprintBuilder;

class BlueprintFields {

  protected $fields;

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
        $field = new $field_class($arguments);
        $fields[] = &$field;

        return $field;
    }

    return null;
  }


}