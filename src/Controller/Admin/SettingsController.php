<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Settings Controller
 *
 *
 * @method \App\Model\Entity\Setting[] paginate($object = null, array $settings = [])
 */
class SettingsController extends AdminController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index($id = null) {
        $setting = $this->Settings->newEntity();
        if ($id) {
            $setting = $this->Settings->get($id, [
                'contain' => []
            ]);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            $setting = $this->Settings->patchEntity($setting, $this->request->getData());
            if ($this->Settings->save($setting)) {
                $this->Flash->success(__('The setting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('setting'));
        $this->set('_serialize', ['setting', 'tittle']);
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->set('setting_active', 'class="active"');
    }

}
