<?php

function getData(PDO $dbh){
    $sql = "SELECT * FROM liste.liste;";
    foreach ($dbh->query($sql) as $row){
        $data = $row['data'];
        $data = trim($data);
        if($data != ""){
            $item = new Liste($row['id'], $row['data']);
            echo $item->display();
        }
    }
}

function setData(PDO $dbh, $data){
    $sql = "INSERT INTO liste.liste ( data ) VALUES (:data)";
    try{
        $prepare = $dbh->prepare($sql);
        $prepare->bindParam(':data', $data);
        $prepare->execute();
    }catch (PDOException $e){
        die($e->getMessage());
    }
}

function deleteData(PDO $dbh, $id){
    $sql = "DELETE FROM liste.liste WHERE id=:id";
    try{
        $prepare = $dbh->prepare($sql);
        $prepare->bindParam(':id', $id);
        $prepare->execute();
    }catch (PDOException $e){
        die($e->getMessage());
    }
}
?>