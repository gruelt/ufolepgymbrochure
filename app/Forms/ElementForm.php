<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ElementForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('num', 'text')
            ->add('famille_id', 'number')
            ->add('nom', 'text')
            ->add('image', 'file')
            ->add('difficulte', 'text')
            ->add('envol', 'checkbox')
            ->add('accro', 'checkbox')
            ->add('BI', 'checkbox')
            ->add('BS', 'checkbox')
            ->add('Enregistrer','submit');
    }
}
