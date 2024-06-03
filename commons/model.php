<?php

// CRUD -> Create/Read(Danh sách/Chi tiết)/Update/Delete
if (!function_exists('get_str_keys')) {
    function get_str_keys($data)
    {
        $keys = array_keys($data);

        $keysTenTen = array_map(function ($key) {
            return "`$key`";
        }, $keys);

        return implode(',', $keysTenTen);
    }
}

if (!function_exists('get_virtual_params')) {
    function get_virtual_params($data)
    {
        $keys = array_keys($data);

        $tmp = [];
        foreach ($keys as $key) {
            $tmp[] = ":$key";
        }

        return implode(',', $tmp);
    }
}

if (!function_exists('get_set_params')) {
    function get_set_params($data)
    {
        $keys = array_keys($data);

        $tmp = [];
        foreach ($keys as $key) {
            $tmp[] = "`$key` = :$key";
        }

        return implode(',', $tmp);
    }
}

if (!function_exists('insert')) {
    function insert($tableName, $data = [])
    {
        try {
            $strKeys = get_str_keys($data);
            $virtualParams = get_virtual_params($data);

            $sql = "INSERT INTO $tableName($strKeys) VALUES ($virtualParams)";

            $DATA = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $DATA->bindParam(":$fieldName", $value);
            }

            $DATA->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('insert_get_last_id')) {
    function insert_get_last_id($tableName, $data = [])
    {
        try {
            $strKeys = get_str_keys($data);
            $virtualParams = get_virtual_params($data);

            $sql = "INSERT INTO $tableName($strKeys) VALUES ($virtualParams)";

            $DATA = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $DATA->bindParam(":$fieldName", $value);
            }

            $DATA->execute();

            return $GLOBALS['conn']->lastInsertId();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('listAll')) {
    function listAll($tableName)
    {
        try {
            $sql = "SELECT * FROM $tableName ORDER BY id DESC";

            $DATA = $GLOBALS['conn']->prepare($sql);

            $DATA->execute();

            return $DATA->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('showOne')) {
    function showOne($tableName, $id)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE id = :id LIMIT 1";

            $DATA = $GLOBALS['conn']->prepare($sql);

            $DATA->bindParam(":id", $id);

            $DATA->execute();

            return $DATA->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('update')) {
    function update($tableName, $id, $data = [])
    {
        try {
            $setParams = get_set_params($data);

            $sql = "UPDATE $tableName SET $setParams WHERE id = :id";

            $DATA = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $DATA->bindParam(":$fieldName", $value);
            }

            $DATA->bindParam(":id", $id);

            $DATA->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('delete2')) {
    function delete2($tableName, $id)
    {
        try {
            $sql = "DELETE FROM $tableName WHERE id = :id";

            $DATA = $GLOBALS['conn']->prepare($sql);

            $DATA->bindParam(":id", $id);

            $DATA->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('checkUniqueName')) {
    // Nếu không trùng thì trả về True
    // Nếu trùng thì trả về False
    function checkUniqueName($tableName, $name)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE name = :name LIMIT 1";

            $DATA = $GLOBALS['conn']->prepare($sql);

            $DATA->bindParam(":name", $name);

            $DATA->execute();

            $data = $DATA->fetch();

            return empty($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// if (!function_exists('checkUniqueNameForUpdate')) {
//     // Nếu không trùng thì trả về True
//     // Nếu trùng thì trả về False
//     function checkUniqueNameForUpdate($tableName, $id, $name)
//     {
//         try {
//             $sql = "SELECT * FROM $tableName WHERE name = :name AND id <> :id LIMIT 1";

//             $DATA = $GLOBALS['conn']->prepare($sql);

//             $DATA->bindParam(":name", $name);
//             $DATA->bindParam(":id", $id);

//             $DATA->execute();

//             $data = $DATA->fetch();

//             return empty($data) ? true : false;
//         } catch (\Exception $e) {
//             debug($e);
//         }
//     }
// }

// if (!function_exists('showProducts')) {
//     function showProducts($tableName)
//     {
//         try {
//             $sql = "SELECT * FROM `products` INNER JOIN `catalogues` ON `products`.`catalogue_id` = `catalogues`.`id`";

//             $DATA = $GLOBALS['conn']->prepare($sql);

//             $DATA->execute();

//             return $DATA->fetchAll();
//         } catch (\Exception $e) {
//             debug($e);
//         }
//     }
// }