<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;

class CategorysController extends AppController
{
	 public function index()
    {
		$categorys = $this->Categorys->find('all');
        $this->set(compact('articles'));
        $this->set('categorys', $categorys);
    }
    public function add()
    {
        $category = $this->Categorys->newEntity();
        $error = $this->Categorys->newEntity($this->request->data());
        if ($error->errors()) {
    		// Do work to show error messages.
    		$this->Flash->error(__('Your type is empty!'));
    		return $this->redirect(['action' => 'index']);
		}else{
        if ($this->request->is('post')) {
            $category = $this->Categorys->patchEntity($category, $this->request->data);
            if ($this->Categorys->save($category)) {
                $this->Flash->success(__('The category has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add the category.'));
        }
        $this->set('category', $category);
        }
    }
    
     public function edit()
    {
    	if( $this->request->is('ajax') ) {
    	$category = $this->Categorys->newEntity();
            $category = $this->Categorys->patchEntity($category, $this->request->data);
            if ($this->Categorys->save($category)) {
                $this->Flash->success(__('The category has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add the category.'));
        }
        $this->set('category', $category);
    }
    
    public function delete()
    {
    	if( $this->request->is('ajax') ) {
    	$id=$this->request->data;
    	$entity = $this->Categorys->get($id['id']);
		if($this->Categorys->delete($entity)){
                $this->Flash->success(__('The category has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add the category.'));
        }
        $this->set('category', $category);
    }
}
?>