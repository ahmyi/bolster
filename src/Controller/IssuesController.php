<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Issues Controller
 *
 * @property \App\Model\Table\IssuesTable $Issues
 */
class IssuesController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add', 'search']);
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index($id=null)
    {
        if (!empty($id)) {
            $issues = $this->Issues->find()->where(['Issues.id'=>$id]);
            if ($issues->isEmpty()) {
                $this->Flash->error('Invalid Issue ID');
            }
        } else {
            $issues = $this->Issues->find('all');
        }
        $issues->contain(['Groups']);
        $this->set(compact('issues', 'id'));
        $this->set('title_for_layout', "Issues");
        $this->set('icon_for_layout', "magic");
    }

    public function search($id=null)
    {
        $issues = $this->Issues->find()->where(['Issues.id'=>$id])->contain(['Groups']);
        if (!empty($id)&&$issues->isEmpty()) {
            $this->Flash->error('Invalid Issue ID');
        }
        $this->set(compact('issues', 'id'));
        $this->set('title_for_layout', "Search Issue");
        $this->set('icon_for_layout', "magic");
    }

    /**
     * View method
     *
     * @param string|null $id Issue id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $issue = $this->Issues->get($id, [
            'contain' => ['Groups', 'Resolves']
        ]);

        $this->set('issue', $issue);
        $this->set('_serialize', ['issue']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $issue = $this->Issues->newEntity();
        if ($this->request->is('post')) {
            $issue = $this->Issues->patchEntity($issue, $this->request->data);
            if ($this->Issues->save($issue)) {
                $this->Flash->success(__('The issue has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The issue could not be saved. Please, try again.'));
            }
        }
        $groups = $this->Issues->Groups->find('list', ['limit' => 200]);
        $this->set(compact('issue', 'groups'));
        $this->set('title_for_layout', 'Create Issue');
    }

    /**
     * Edit method
     *
     * @param string|null $id Issue id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $issue = $this->Issues->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $issue = $this->Issues->patchEntity($issue, $this->request->data);
            if ($this->Issues->save($issue)) {
                $this->Flash->success(__('The issue has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The issue could not be saved. Please, try again.'));
            }
        }
        $groups = $this->Issues->Groups->find('list', ['limit' => 200]);
        $this->set(compact('issue', 'groups'));
        $this->set('_serialize', ['issue']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Issue id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $issue = $this->Issues->get($id);
        if ($this->Issues->delete($issue)) {
            $this->Flash->success(__('The issue has been deleted.'));
        } else {
            $this->Flash->error(__('The issue could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
