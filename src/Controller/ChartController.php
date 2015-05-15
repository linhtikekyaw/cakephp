<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;
class ChartController extends AppController
{
	 public function index()
    {
    	// Now an instance of ArticlesTable.
    	/*
		$categorys = TableRegistry::get('Categorys');
		$category = $categorys
		->find()
    	->select(['id', 'type'])
    	->order(['created' => 'DESC']);
		$this->set('category', $category);
		$products = $this->Chart->find('all');
        $this->set(compact('articles'));
        $this->set('products', $products);
        */
    }
    public function add()
    {
        $product = $this->Chart->newEntity();
        $error = $this->Chart->newEntity($this->request->data());
        if ($error->errors()) {
    		// Do work to show error messages.
    		$this->Flash->error(__('Your type is empty!'));
    		return $this->redirect(['action' => 'index']);
		}else{
        if ($this->request->is('post')) {
            $product = $this->Chart->patchEntity($product, $this->request->data);
            if ($this->Chart->save($product)) {
                $this->Flash->success(__('The product has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add the product.'));
        }
        $this->set('product', $product);
        }
    }
    
     public function edit()
    {
    	$categorys = TableRegistry::get('Categorys');
		$category = $categorys
		->find()
    	->select(['id', 'type'])
    	->order(['created' => 'DESC']);
		$this->set('category', $category);
        // Now an instance of ArticlesTable.
		$product = $this->Chart
		->find()
    	->where(['id'=>$_GET['id']])
    	->first();
		$this->set('product', $product);
		$this->set('refer', $this->referer());
    }
}
?>