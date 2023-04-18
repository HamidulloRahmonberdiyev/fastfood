<?php

namespace app\models;

use myshop\App;

class Breadcrumbs{

    public static function getBreadcrumbs($category_id, $name = ''){
        $cats = App::$app->getProperty('cats');
        $breadcrumbs_array = self::getParts($cats, $category_id);
        if($breadcrumbs_array){
            $breadcrumbs = "<i></i>";
            foreach($breadcrumbs_array as $alias => $title){
                $breadcrumbs .= "<h1><a href='" . PATH . "/category/{$alias}'>{$title}</a></h1>";
            }
        }
        if($name){
            $breadcrumbs .= "<li>$name</li>";
        }
        return $breadcrumbs;
    }

    public static function getParts($cats, $id){
        if(!$id) return false;
        $breadcrumbs = [];
        foreach($cats as $k => $v){
            if(isset($cats[$id])){
                $breadcrumbs[$cats[$id]['alias']] = $cats[$id]['title'];
                $id = $cats[$id]['parent_id'];
            }else break;
        }
        return array_reverse($breadcrumbs, true);
    }

}