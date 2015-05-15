<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;
class ProductsController extends AppController
{
	 public function index()
    {
    	// Now an instance of ArticlesTable.
		$categorys = TableRegistry::get('Categorys');
		$category = $categorys
		->find()
    	->select(['id', 'type'])
    	->order(['created' => 'DESC']);
		$this->set('category', $category);
		$products = $this->Products->find('all');
        $this->set(compact('articles'));
        $this->set('products', $products);
    }
    public function add()
    {
        $product = $this->Products->newEntity();
        $error = $this->Products->newEntity($this->request->data());
        if ($error->errors()) {
    		// Do work to show error messages.
    		$this->Flash->error(__('Your type is empty!'));
    		return $this->redirect(['action' => 'index']);
		}else{
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->data);
            if ($this->Products->save($product)) {
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
		$product = $this->Products
		->find()
    	->where(['id'=>$_GET['id']])
    	->first();
		$this->set('product', $product);
		$this->set('refer', $this->referer());
    }
}
?>