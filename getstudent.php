<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    $conn = mysqli_connect("localhost","root","","wdl");
    if(isset($_POST["id"]))
    {
        if($conn)
        {
            $sql = "select * from ajax where id = ".$_POST["id"]."";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    $stud_name = array(
                        "id"=>$row["id"],
                        "name"=>$row["name"],
                        "rollno"=>$row["rollno"],
                        "marks"=>$row["marks"]
                    );
                    echo json_encode($stud_name);
                }
            }
        }
    }
    else
    {
        if($conn)
        {
            $sql = "select * from ajax";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0)
            {
                $students = array();
                $students["student"] = array();
                while($row = mysqli_fetch_assoc($result))
                {
                    $stud_name = array(
                        "id"=>$row["id"],
                        "name"=>$row["name"]
                    );
                    array_push($students["student"],$stud_name);
                }
                echo json_encode($students);
            }
        }
    } 
    
?>