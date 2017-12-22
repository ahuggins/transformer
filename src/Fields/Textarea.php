<?php

namespace Ahuggins\Transformer\Fields;

class Textarea extends Field
{
    public function make()
    {
        return '<textarea' . $this->required() . ' class="form-control" name="' . $this->field->Field . '" placeholder="' . ucfirst($this->field->Field) . '" rows="6"></textarea>';   
    }
}
