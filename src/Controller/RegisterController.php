<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;
class RegisterController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->deny('add');
    }

     public function index()
     {
        //$this->set('users', $this->Register->find('all'));
    }
	public function get_product()
    {
    	$categorys = TableRegistry::get('Products');
		$category = $categorys
		->find()
    	->where(['product_code'=>$_GET['product_code']])
    	->first();
    	$data['result'] = $category;
    	print json_encode($data);
    	exit;
	}
    public function view($id)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid user'));
        }

        $user = $this->Register->get($id);
        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->Register->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Register->patchEntity($user, $this->request->data);
            if ($this->Register->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
        $this->set('user', $user);
    }
public function login()
{
    if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
            $this->Auth->setUser($user);
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error(__('Invalid username or password, try again'));
    }
}

public function logout()
{
    return $this->redirect($this->Auth->logout());
}

}
?>