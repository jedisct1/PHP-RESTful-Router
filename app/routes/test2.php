<?php

require_once '../lib/bootstrap.inc.php';

Route::map_connect(array('controller' => 'test2',
                         'path' => '/items/:id',
                         'method' => 'GET',
                         'action' => 'show'));

Route::map_connect(array('controller' => 'test2',
                         'path' => '/items/:id',
                         'method' => 'DELETE',
                         'action' => 'delete'));

Route::map_connect(array('controller' => 'test2',
                         'path' => '/items/:id',
                         'method' => 'PUT',
                         'action' => 'update'));

Route::map_connect(array('controller' => 'test2',
                         'path' => '/items',
                         'method' => 'POST',
                         'action' => 'create'));

Route::run();
