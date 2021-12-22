<?php

class Category
{
    function create($DATA)
    {
        $DB = Database::getInstance();
        $arr['category'] = ucwords($DATA->data);

        if (!preg_match("/^[a-zA-Z ]+$/", trim($arr['category']))) {
            
            $_SESSION['error'] = "Please enter a valid category name";
        }

        if (!isset($_SESSION['error']) || $_SESSION['error'] == "") {

            $query = "insert into categories (category) values (:category)";
            $check = $DB->write($query, $arr);

            if ($check) {
                return true;
            }
        }
        return false;
    }

    function edit($DATA)
    {
    }

    function delete($DATA)
    {
    }

    function get_all()
    {
        $DB = Database::getInstance();
        return $DB->read("select * from categories order by id desc");
    }
}
