<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ModuleWidget extends CWidget {
    public $title;
    public function run() {
        $module = Module::model()->findByAttributes(array('title'=>$this->title));
        echo $module->content;
    }

}

