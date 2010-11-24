<?php

require_once '../lib/bootstrap.inc.php';

Route::map_connect(array('controller' => 'test2',
                         'path' => '/things/:id',
                         'method' => 'GET',
                         'action' => 'show'));

Route::map_connect(array('controller' => 'test2',
                         'path' => '/things/:id',
                         'method' => 'DELETE',
                         'action' => 'delete'));

Route::map_connect(array('controller' => 'test2',
                         'path' => '/things/:id',
                         'method' => 'DELETE',
                         'action' => 'update'));

Route::map_connect(array('controller' => 'test2',
                         'path' => '/things',
                         'method' => 'POST',
                         'action' => 'create'));

Route::run();
