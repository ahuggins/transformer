<?php

namespace Ahuggins\Transformer\Fields;

class Email extends Field
{
    public function make()
    {
        return '<input' . $this->required() . ' class="form-control" type="email" name="' . $this->field->Field . '" placeholder="' . ucfirst($this->field->Field) . '" />';
    }
}
