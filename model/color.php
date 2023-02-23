<?php
    function insert_color($color_name){
        $sql = "INSERT into color(color_name) values('$color_name')";
        pdo_execute($sql);
    }
    function loadall_color(){
        $sql = "SELECT*FROM color order by id_color desc";
        $listcolor = pdo_query($sql);
        return $listcolor;
    }
    function delete_color($id_color){
        $sql = "DELETE FROM color where id_color=".$id_color;
        pdo_execute($sql);
    }
    function loadone_color($id_color){
        $sql = "SELECT * from color where id_color=".$id_color;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_color($id_color,$color_name){
        $sql = "UPDATE color set color_name = '".$color_name."' where id_color =". $id_color;
        pdo_execute($sql);
    }
?>