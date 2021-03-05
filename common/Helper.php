<?php
// require_once 'Define.php';
function isValidTableName($tableName)
{
    if (in_array($tableName, TABLE_NAME)) {
        return true;
    } else {
        return false;
    }
}

function isValidEntity($entityType)
{
    if (in_array(get_class($entityType), ENTYTI)) {
        return true;
    } else {
        return false;
    }
}
