<?php
require_once MODELS_DIR . 'Subscribers.php';

class Comments {
    public static function getComments(){
        $output = array();
        $sql = "SELECT * FROM COMMENTS ORDER BY COMMENT_ID ASC";
        $query = mysql_query($sql);
        if($query){
            if(mysql_num_rows($query) > 0){
                while($row = mysql_fetch_object($query)){
                    $output[] = $row;
                }
            }
        }
        return $output;
    }

    public static function insert($comment, $userId){
        //Insert Data
        $sql = "INSERT INTO COMMENTS VALUES ('', '$comment', '$userId')";
        $query = mysql_query($sql);

        if($query){
            $insert_id = mysql_insert_id();
            //Return a stdClass Object From the database
            $std = new stdClass();
            $std->comment_id = $insert_id;
            $std->comment = $comment;
            $std->userId = (int)$userId;

            return $std;
        }

        return null;
    }

    public static function update($data){

    }

    public static function delete($commentId){
        $sql = "DELETE FROM COMMENTS WHERE comment_id = $commentId";
        $query = mysql_query($sql);
        if($query){
            return true;
        }
        return false;
    }
}