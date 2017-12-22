<?php

namespace Ahuggins\Transformer\Fields;

class Select extends Field
{
    protected $select;

    public function make()
    {
        $this->select = '<select' . $this->required() . ' name="' . $this->field->Field.'" class="form-control">';

        $this->getOptions();
        
        $this->select .= '</select>';

        return $this->select;
    }

    public function getOptions()
    {
        preg_match_all('/(?<=\')[^,](.*?)(?=\')/', $this->field->Type, $matches);

        foreach ($matches[0] as $option) {
            $this->select .= '<option value="' . $option . '">' . $option . '</option>';
        }
    }
}
