<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Viagens Controller
 *
 * @property \App\Model\Table\ViagensTable $Viagens
 * @method \App\Model\Entity\Viagen[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ViagensController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $viagens = $this->paginate($this->Viagens);

        $this->set(compact('viagens'));
    }

    /**
     * View method
     *
     * @param string|null $id Viagen id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $viagen = $this->Viagens->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('viagen'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $viagen = $this->Viagens->newEmptyEntity();
        if ($this->request->is('post')) {
            $viagen = $this->Viagens->patchEntity($viagen, $this->request->getData());
            if ($this->Viagens->save($viagen)) {
                $this->Flash->success(__('The viagen has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The viagen could not be saved. Please, try again.'));
        }
        $this->set(compact('viagen'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Viagen id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $viagen = $this->Viagens->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $viagen = $this->Viagens->patchEntity($viagen, $this->request->getData());
            if ($this->Viagens->save($viagen)) {
                $this->Flash->success(__('The viagen has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The viagen could not be saved. Please, try again.'));
        }
        $this->set(compact('viagen'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Viagen id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $viagen = $this->Viagens->get($id);
        if ($this->Viagens->delete($viagen)) {
            $this->Flash->success(__('The viagen has been deleted.'));
        } else {
            $this->Flash->error(__('The viagen could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
