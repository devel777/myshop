<?php
/*
 * Модель для таблицы продукции (products)
 */

function getLastProducts($limit=null){
    $sql = "SELECT *
    FROM products
    ORDER by id DESC";
    if($limit){
        $sql .=" LIMIT {$limit}";
    }
    $rs = mysql_query($sql);

    return createSmartyRsArray($rs);
}