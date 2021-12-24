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

    function delete($id)
    {
        $DB = Database::newInstance();
        $id = (int)$id;
        $query = "delete from categories where id = '$id' limit 1";
        $DB->write($query);
    }

    function get_all()
    {
        $DB = Database::newInstance();
        return $DB->read("select * from categories order by id desc");
    }

    function make_table($cats)
    {
        $result ="";

        if(is_array($cats)) {
            foreach ($cats as $cat_row) {
                //se a condição for true é disabled ,se não Enabled
                $color = $cat_row->disabled ? "#C7AD6F" : "#5bc0de";
                $cat_row->disabled = $cat_row->disabled ? "Disabled" : "Enabled";
                $args = $cat_row->id.",'".$cat_row->disabled."'";
            

                $result .= "<tr>";

                $result .= '
                    <td><a href="basic_table.html#">'.$cat_row->category.'</a></td>
                    <td><span onclick="disable_row('.$args.')" class="label label-info label-mini" style="cursor:pointer;background-color:'.$color.';">' . $cat_row->disabled . '</span></td>
                    <td>..

                        <button onclick="edit_row('.$cat_row->id.')" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                        <button onclick="delete_row('.$cat_row->id.')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                    </td>
                    
                    ';

                $result .= "</tr>";
            }
        }
        return $result;
    }
}
