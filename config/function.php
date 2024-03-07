<?php
    session_start();

    require 'config.php';

    function validate($inpugData){
        global $conn;
        return mysqli_real_escape_string($conn, $inpugData);
    }

    function redirect($url, $status){
        $_SESSION['status']= $status;
        header('Location: '. $url); 
        exit(0); 
    }

    function alertMessage(){
        if(isset($_SESSION['status'])){
            echo   '<div class="alert alert-success">
            <h3>'.$_SESSION['status'].'</h3>
            </div>';
            unset($_SESSION['status']);
        }
    }

    function checkParamId($paramType){
        if(isset($_GET[$paramType])){
            if($_GET[$paramType] !=null){
                return $_GET[$paramType];
            }else{
                return 'No id Found';
            }
           
        }else{
            return 'No id given';
        }
    }

    function getById($tableName, $id){
        global $conn;
        $table = validate($tableName);
        $id = validate($id);

        $query = "SELECT * FROM  $table WHERE id='{$id}' LIMIT 1";
        
        $result = mysqli_query($conn,$query);
    }

    function getAll($tableName)
    {
        global $conn;
        $table = validate($tableName);

        $query =  "SELECT * FROM $tableName ";
        $result =  mysqli_query($conn, $query);
        return $result;

        if($result){
            if(mysqli_num_rows($result)==1){
                $row = mysqli_fetch_array( $result, MYSQLI_ASSOC );
                $response =[
                    'status' => 200,
                    'message'=>'Data Retrieved Successfully',
                    'data'=> $row
                ];
                return $response;
            }else{
                $response =[
                    'status' => 404,
                    'message'=>'Not Data Found'
                ];
                return $response;
            }
        }else{
            $response =[
                'status' => 500,
                'message'=>'Something Went Wrong'
            ];
            return $response;
        }
    }

    function deleteQuery($tableName,$id){
        global $conn;
        $table = validate($tableName);
        $id = validate($id);
        $query = "DELETE FROM $table WHERE id='$id' LIMIT 1";
        $result = mysqli_query($conn,$query);
        return $result;
    }

?>