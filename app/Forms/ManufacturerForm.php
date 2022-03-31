<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class ManufacturerForm extends Form
{
    public function buildForm()
    {
      $this->
      add('name', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Name'
      ])
      ->add('support_email', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Support Email'
      ])
      ->add('support_phone', Field::NUMBER, [
        'rules' => 'required',
        'label' => 'Support Phone',
      ])
      ->add('sales_email', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Sales Email',
      ])
      ->add('sales_phone', Field::NUMBER, [
        'rules' => 'required',
        'label' => 'Sales Phone Number',
      ])

      ->add('submit', 'submit', [
        'label' => 'Submit'
      ]);
    }
}
