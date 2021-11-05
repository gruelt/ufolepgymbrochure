<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ElementForm extends Form
{


    public function buildForm()
    {
            //dd($this->getModel()->famille_id);
            $familles = $this->getData('familles')->toArray();

        $this->add('image', 'file')
            ->add('num', 'text')
            ->add('id','hidden')
            ->add('famille_id',
                'select',
                [
                    'choices' => $familles,
                    'selected' => $this->getModel()->famille_id
                ]
            )
            ->add('nom', 'text')

            ->add('difficulte', 'text')
            ->add('envol', 'checkbox')
            ->add('accro', 'checkbox')
            ->add('BI', 'checkbox')
            ->add('BS', 'checkbox');





       $this->add('Enregistrer','submit');
    }



}
