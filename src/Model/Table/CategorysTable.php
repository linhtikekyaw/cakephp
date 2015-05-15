<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CategorysTable extends Table
{
	public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('type', 'A username is required');
    }

}