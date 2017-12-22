<?php

namespace Ahuggins\Transformer\Fields;

class Checkbox extends Field
{
    public function make()
    {
        return '<input type="checkbox" name="' . $this->field->Field . '" /> ' . ucfirst($this->field->Field);
    }
}
