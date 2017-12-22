<?php

namespace Ahuggins\Transformer\Fields;

abstract class Field
{
    protected $field;

    function __construct($field)
    {
        $this->field = $field;
    }
    
    public function required()
    {
        if ($this->field->Null == 'NO') {
            return ' required';
        }
    }
}
