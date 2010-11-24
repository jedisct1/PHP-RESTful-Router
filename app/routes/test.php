<?php

require_once '../lib/bootstrap.inc.php';

Route::map_connect(array('controller' => 'test',
                         'path' => '',
                         'method' => 'GET',
                         'action' => 'index'));
Route::run();
