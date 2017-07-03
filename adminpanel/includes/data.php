<?php
    include('connection.php');
    include('templates.php');

if($_REQUEST["mode"]=="sorting"){
    $orderlist = explode(',', $_POST['order']);
    $CategoryID= $_POST["category"];
    foreach ($orderlist as $k=>$order) {
        $sql="update fieldmapping set DisplayOrder='$k' where FieldMappingID=".$order;
        mysql_query($sql);
    }   
}

if($_REQUEST["mode"]=="permissions"){
    echo fnGetPermissions($_REQUEST["UserID"]);
}

if($_REQUEST["mode"]=="log"){
    echo fnGetLogs($_REQUEST["LogID"]);
}

if($_REQUEST["mode"]=="career")
{
        $sql ="SELECT date(`UploadedTime`) as Name, count(*)as val FROM `career` group by  date(`UploadedTime`)";
        $result = mysql_query($sql);

        $array = array();

    while ( $row = mysql_fetch_assoc( $result ) ) 
    {
        array_push(
            $array,
            array(
                'label' => $row['Name'],
                'value' => $row['val']
            )
        );
    }

    echo json_encode($array);
}


?>