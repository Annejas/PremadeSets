<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Template {    
    public function action_index() {        
        $this->template->content = new View("index");
        $this->template->title = "LOL API";
    }

}