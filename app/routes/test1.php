<?php

require_once '../lib/bootstrap.inc.php';

Route::map_connect(array('controller' => 'test1',
                         'path' => '',
                         'method' => 'GET',
                         'action' => 'index'));

Route::map_connect(array('controller' => 'test1',
                         'path' => 'items/:id',
                         'method' => 'GET',
                         'action' => 'show_item'));

Route::map_connect(array('controller' => 'test1',
                         'path' => 'blogs/:blog_id/archives/:year',
                         'method' => 'GET',
                         'action' => 'show_blog_yearly_archives'));

Route::run();
