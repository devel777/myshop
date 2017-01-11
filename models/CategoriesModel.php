<?php
/**
 * Модель для таблицы категорий (categories)
 */

function getAllMainCatsWithChildren() {

    $sql = "SELECT *
            FROM `categories`
            WHERE `parent_id` = 0";
    $rs = db()->query($sql);

    while($row = $rs->fetch_assoc()) echo 'id = ' . $row['name'] . '<br />';

    return $rs;
}