<?php

namespace Application\Form;

use Laminas\Form\Form;

class AlbumForm extends Form
{
    public function __construct($options = null)
    {
        // we want to ignore the name passed
        parent::__construct($options['table_name']);
        $this->setAttribute('method', 'post');
        foreach ($options['column_defs'] as $key => $value) {
            $this->add($value);
        }
        // $this->add(array(
        //     'name' => 'id',
        //     'attributes' => array(
        //         'type'  => 'hidden',
        //     ),
        // ));
        // $this->add(array(
        //     'name' => 'artist',
        //     'attributes' => array(
        //         'type'  => 'text',
        //     ),
        //     'options' => array(
        //         'label' => 'Artist',
        //     ),
        // ));
        // $this->add(array(
        //     'name' => 'title',
        //     'attributes' => array(
        //         'type'  => 'text',
        //     ),
        //     'options' => array(
        //         'label' => 'Title',
        //     ),
        // ));
        // $this->add(array(
        //     'name' => 'submit',
        //     'attributes' => array(
        //         'type'  => 'submit',
        //         'value' => 'Go',
        //         'id' => 'submitbutton',
        //     ),
        // ));
    }
}