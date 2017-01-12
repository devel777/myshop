<?php
/**
 * Модель для таблицы категорий (categories)
 */

function getChildrenForCat($catId){
    $sql = "SELECT *
            FROM categories
            WHERE
            parent_id = '{$catId}'";
    $rs = mysql_query($sql);

    return createSmartyRsArray($rs);
}

function getAllMainCatsWithChildren()
{
    $sql = "SELECT *
            FROM `categories`
            WHERE `parent_id` = 0";

    $rs = mysql_query($sql);

    $smartyRs = array();
    while($row = mysql_fetch_assoc($rs)){

        $rsChildren = getChildrenForCat($row['id']);

        if($rsChildren){

            $row['children'] = $rsChildren;
        }
        $smartyRs[] = $row;
    }
    return $smartyRs;

}
