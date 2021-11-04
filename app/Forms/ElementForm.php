<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ElementForm extends Form
{
    public function buildForm()
    {
        $this->add('image', 'file')
            ->add('num', 'text')
            ->add('id','hidden')
            ->add('famille_id', 'number')
            ->add('nom', 'text')

            ->add('difficulte', 'text')
            ->add('envol', 'checkbox')
            ->add('accro', 'checkbox')
            ->add('BI', 'checkbox')
            ->add('BS', 'checkbox');





       $this->add('Enregistrer','submit');
    }
}
