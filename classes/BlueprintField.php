<?php

namespace BlueprintBuilder;

use BlueprintBuilder\BlueprintHelper;

class BlueprintField {

  public $type;
  public $value;

  // This is the yaml key used when rendering this field
  public $key;

  /**
   * The key is auto-generated (in many cases) using a label or title. 
   * If this property is set to true, we will append the 'header.' to the field key.
   * This can be adjusted on a per-field bases, but in general it seems that certain kinds of fields will want to it to be true
   */
  public $header_key;

  // Common attribute
  public $attributes = [
    'autocomplete',
    'autofocus',
    'classes',
    'default',
    'description',
    'disabled',
    'field_classes',
    'help',
    'id',
    'label',
    'markdown',
    'name',
    'outerclasses',
    'novalidate',
    'placeholder',
    'readonly',
    'size',
    'sublabel',
    'style',
    'title',
    'toggleable',
    'validate',
    'wrapper_classes',
  ];


  public function __construct($label) {
    $this->key = BlueprintHelper::slugify($label);
  }

}