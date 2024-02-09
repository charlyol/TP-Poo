<?php

namespace form;

class Form
{
    private $dataForm;
    public $surround = 'p';

    public function __construc($dataForm)
    {
        $this->dataForm = $dataForm;
    }

    private function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }
    public function input($name)
    {
        return $this->surround('<input type="text" name="' . $name . '">');
    }

    public function submit()
    {
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}

;
