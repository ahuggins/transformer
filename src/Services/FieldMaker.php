<?php

namespace Ahuggins\Transformer\Services;

class FieldMaker
{    
    public function makeField($field)
    {
        $type = 'Ahuggins\Transformer\Fields\\' . $this->getType($field);
        return (new $type($field))->make();
    }

    protected function getType($field)
    {
        if (str_contains($field->Field, 'email')) {
            return 'Email';
        } elseif (str_contains($field->Type, 'varchar')) {
            return 'Text';
        } elseif (str_contains($field->Type, 'text')) {
            return 'Textarea';
        } elseif (str_contains($field->Type, 'enum')) {
            return 'Select';
        } elseif (str_contains($field->Type, 'date')) {
            return 'Date';
        } elseif (str_contains($field->Type, 'tinyint(1)')) {
            return 'Checkbox';
        }
        return 'Text';
    }
}
