<?php

class Controller
{
    
    /* 
     * /test2.php/show/4269.json
     * /test2.php/show/4269.jsonp?jsonp=_JSONP_callback_name
     * /test2.php/show/4269.igb
     * /test2.php/show/4269.phpser
     */
    
    static function show($id) {
        return array('id' => $id,
                     'foo' => 'bar');
    }

    // Ditto with the DELETE verb
    
    static function delete($id) {
        return array('return_code' => 1,
                     'error_message' => '');
    }
    
    // Ditto with the PUT verb    
    
    static function update($id) {
        return array('return_code' => 1,
                     'error_message' => '');
    }

    // Ditto with the POST verb
    
    static function create() {
        return array('return_code' => 1,
                     'new_item' => array('id' => 42,
                                         'foo' => 'bar'));
    }
}
