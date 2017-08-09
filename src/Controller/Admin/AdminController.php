<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Admin Controller
 *
 */
class AdminController extends AppController {

    public $helpers = ['Functions'];

    public function beforeRender(Event $event) {
        //parent::beforeFilter($event);
        $this->viewBuilder()->layout('admin');
    }

}
