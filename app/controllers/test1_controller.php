<?php

class Controller
{
    /* /test1.php/index.html */
    
    static function index() {
        return 'Test 1';
    }
    
    /* /test1.php/items/4269.html */
    
    static function show_item($id) {
        return htmlspecialchars('Item #' . $id);
    }
    
    /* /test1.php/blogs/42/archives/2010.html */

    static function show_blog_yearly_archives() {
        $blog_id = (string) params('blog_id');
        $year = (int) params('year_id');
        
        return 'Archives';
    }        
}
