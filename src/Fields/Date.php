<?php

namespace Ahuggins\Transformer\Fields;

class Date extends Field
{
    public function make()
    {
        return '<input' . $this->required() . ' class="form-control" type="date" name="' . $this->field->Field . '" placeholder="' . ucfirst($this->field->Field) . '" />';
    }
}
