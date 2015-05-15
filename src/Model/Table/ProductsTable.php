<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProductsTable extends Table
{
	public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('product_code', 'A username is required');
    }

}