<?php

namespace Ahuggins\Transformer\Fields;

class Text extends Field
{    
    public function make()
    {
        return '<input' . $this->required() . ' class="form-control" type="text" name="' . $this->field->Field . '" placeholder="' . ucfirst($this->field->Field) . '" />';
    }
}
