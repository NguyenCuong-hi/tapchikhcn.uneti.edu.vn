<?php

namespace App;

use Database\DataBase;

class SearchController
{

    public function index()
    {

        // Category type = 1
        $db = new DataBase();
        $setting = $db->select('SELECT * FROM websetting')->fetch();

        $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 4;
        $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
        $off_set = ($current_page - 1) * $item_per_page;

        $query = 'SELECT posts.* , categories.name as cat_name, categories.code_name as code_name
                     FROM posts 
                     INNER JOIN categories ON posts.cat_id = categories.id
                     INNER JOIN file ON posts.id = file.id_post
                     WHERE (1=1) ';
        $params = [];
        $keywords = null;
        if (isset($_GET['keyword'])) {
            $keywords = $_GET['keyword'];
            $query .= ' AND (posts.title LIKE ? OR file.name LIKE ?)';
            $params[] = '%' . $keywords . '%';
            $params[] = '%' . $keywords . '%';
        }

        $query .= ' ORDER BY posts.created_at DESC LIMIT ' . $item_per_page . ' OFFSET ' . $off_set . ' ';
        $data = $db->select($query, $params);

        $query_count = ' SELECT COUNT(*) AS total_count FROM posts 
                     INNER JOIN categories ON posts.cat_id = categories.id 
                     INNER JOIN file ON posts.id = file.id_post WHERE (1=1) ';
        $params_count = [];

        if (isset($_GET['keyword'])) {
            $keywords = $_GET['keyword'];
            $query .= ' AND (posts.title LIKE ? OR file.name LIKE ?)';
            $params[] = '%' . $keywords . '%';
            $params[] = '%' . $keywords . '%';
        }


        $result = $db->select($query_count, $params_count);

//        Todo Xu ly phan trang
        $row = $result->fetch();
        $total_count = $row['total_count'];

        $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 4;
        $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
        $off_set = ($current_page - 1) * $item_per_page;

        $totalRecords = $row['total_count'];
        $totalPages = ceil($totalRecords / $item_per_page);

        require_once(BASE_PATH . '/template/app/khoahoc_congnghe.php');
    }


}