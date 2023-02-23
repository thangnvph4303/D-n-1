<?php

    function insert_size($size_name){
        $sql = "INSERT into size(size_name) values('$size_name')";
        pdo_execute($sql);
    }
    function loadall_size(){
        $sql = "SELECT*FROM size order by id_size desc";
        $listsize = pdo_query($sql);
        return $listsize;
    }
    function delete_size($id_size){
        $sql = "DELETE FROM size where id_size=".$id_size;
        pdo_execute($sql);
    }
    function loadone_size($id_size){
        $sql = "SELECT * from size where id_size=".$id_size;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_size($id_size,$size_name){
        $sql = "UPDATE size set size_name = '".$size_name."' where id_size =". $id_size;
        pdo_execute($sql);
    }
?>