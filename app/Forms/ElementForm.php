<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ElementForm extends Form
{


    public function buildForm()
    {

            $familles = $this->getData('familles')->toArray();
            $selected_famille_id = null;
            if(isset($this->getModel()->famille_id))
            {
                $selected_famille_id = $this->getModel()->famille_id;
            }

        $this->add('image', 'file')
            ->add('num', 'text')
            ->add('id','hidden')
            ->add('famille_id',
                'select',
                [
                    'choices' => $familles,
                    'selected' => $selected_famille_id
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
