<?php
if(!function_exists('admin_url')) {
    function admin_url($url = null)
    {
        return url('admin/' . $url);
    }
}

if(!function_exists('active_link')){
    function active_link($links){
        $url='';
        foreach ($links as $link){
            $url=$url.$link.'/';
        }
        if($url==\Request::path().'/' or $url==\Request::path()){
            return 'active';
        }

    }
}
if(!function_exists('active_select')){
    function active_select($id_item,$id_value){
        if($id_item==$id_value){
            return 'selected';
        }

    }
}
if(!function_exists('show_title')){
    function show_title($title){
        if(strlen($title)>25){
            return str_limit($title, $limit = 25, $end = '...');
        }
        return $title;

    }
}


