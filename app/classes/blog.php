<?php

class Blog {

    public static function Categories()
    {
        global $db;
        $query = $db->from('categories')
            ->select('categories.*, COUNT(post_id) as total')
            ->join('posts', 'FIND_IN_SET(category_id, post_categories)')
            ->orderby('category_order', 'ASC')
            ->groupby('category_id')
            ->all();
        return $query;
    }

    public static function findPost($post_url)
    {
        global $db;
        return $db->from('posts')
            ->select('posts.*, GROUP_CONCAT(category_name SEPARATOR ", ") as category_name, GROUP_CONCAT(category_url SEPARATOR ", ") as category_url, GROUP_CONCAT(category_id SEPARATOR ", ") as category_id')
            ->join('categories', 'find_in_set(category_id, post_categories)','left')
            ->where('post_url', $post_url)
            ->where('post_status', 1)
            ->first();
    }

    public static function findPostById($post_id)
    {
        global $db;
        return $db->from('posts')
            ->where('post_id', $post_id)
            ->where('post_status', 1)
            ->first();
    }

    public static function findPostByCategory($category_id)
    {
        global $db;
        return $db->from('posts')
            ->where('post_categories', $category_id)
            ->orderby('post_date','DESC')
            ->where('post_status', 1)
            ->all();
    }

    public static function findCategory($category_url)
    {
        global $db;
        return $db->from('categories')
            ->where('category_url', $category_url)
            ->first();
    }

}
