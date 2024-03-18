<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MembrosTurma Controller
 *
 * @property \App\Model\Table\MembrosTurmaTable $MembrosTurma
 * @method \App\Model\Entity\MembrosTurma[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MembrosTurmaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $membrosTurma = $this->paginate($this->MembrosTurma);

        $this->set(compact('membrosTurma'));
    }

    /**
     * View method
     *
     * @param string|null $id Membros Turma id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $membrosTurma = $this->MembrosTurma->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('membrosTurma'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $membrosTurma = $this->MembrosTurma->newEmptyEntity();
        if ($this->request->is('post')) {
            $membrosTurma = $this->MembrosTurma->patchEntity($membrosTurma, $this->request->getData());
            if ($this->MembrosTurma->save($membrosTurma)) {
                $this->Flash->success(__('The membros turma has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The membros turma could not be saved. Please, try again.'));
        }
        $users = $this->MembrosTurma->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('membrosTurma', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Membros Turma id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $membrosTurma = $this->MembrosTurma->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $membrosTurma = $this->MembrosTurma->patchEntity($membrosTurma, $this->request->getData());
            if ($this->MembrosTurma->save($membrosTurma)) {
                $this->Flash->success(__('The membros turma has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The membros turma could not be saved. Please, try again.'));
        }
        $users = $this->MembrosTurma->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('membrosTurma', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Membros Turma id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $membrosTurma = $this->MembrosTurma->get($id);
        if ($this->MembrosTurma->delete($membrosTurma)) {
            $this->Flash->success(__('The membros turma has been deleted.'));
        } else {
            $this->Flash->error(__('The membros turma could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
