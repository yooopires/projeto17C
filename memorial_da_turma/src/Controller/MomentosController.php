<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Momentos Controller
 *
 * @property \App\Model\Table\MomentosTable $Momentos
 * @method \App\Model\Entity\Momento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MomentosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $momentos = $this->paginate($this->Momentos);

        $this->set(compact('momentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Momento id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $momento = $this->Momentos->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('momento'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $momento = $this->Momentos->newEmptyEntity();
        if ($this->request->is('post')) {
            $momento = $this->Momentos->patchEntity($momento, $this->request->getData());
            if ($this->Momentos->save($momento)) {
                $this->Flash->success(__('The momento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The momento could not be saved. Please, try again.'));
        }
        $this->set(compact('momento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Momento id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $momento = $this->Momentos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $momento = $this->Momentos->patchEntity($momento, $this->request->getData());
            if ($this->Momentos->save($momento)) {
                $this->Flash->success(__('The momento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The momento could not be saved. Please, try again.'));
        }
        $this->set(compact('momento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Momento id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $momento = $this->Momentos->get($id);
        if ($this->Momentos->delete($momento)) {
            $this->Flash->success(__('The momento has been deleted.'));
        } else {
            $this->Flash->error(__('The momento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
