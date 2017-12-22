<?php

namespace Ahuggins\Transformer\Services;

use File;

class FormMaker
{   
    protected $formPath;
    protected $table;
    protected $fieldMaker;

    public function __construct(FieldMaker $fieldMaker) {
        $this->fieldMaker = $fieldMaker;
    }

    public function makeForm($table, $fields)
    {
        $this->table = $table;

        $this->openForm();

        $this->addFields($fields);

        $this->addSubmitButton();

        $this->closeForm();
    }

    protected function openForm()
    {
        $views = resource_path('views/forms/' . $this->table);

        $form = $views . '/' . 'form.blade.php';

        $this->formPath = $form;

        if (! File::exists($views)) {
            File::makeDirectory($views, 0775, true);
        }

        File::put($this->formPath, '<form method="_POST" action="">
    {{ csrf_field() }}');
    }


    protected function addFields($fields)
    {
        $fields->each(function ($field) {
            $this->addFieldToForm($field);
        });
    }

    protected function addFieldToForm($field)
    {
        File::append($this->formPath, '
    <div class="form-group">
        ' . $this->fieldMaker->makeField($field) . '
    </div>');
    }

    protected function addSubmitButton()
    {
        File::append($this->formPath, '
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>');
    }

    protected function closeForm()
    {
        File::append($this->formPath, '
</form>');
    }
}
