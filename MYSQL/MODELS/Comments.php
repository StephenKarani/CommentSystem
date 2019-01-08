<?php
/**
 * Created by PhpStorm.
 * User: Programmer
 * Date: 1/8/2019
 * Time: 11:46 AM
 */
require_once MODELS_DIR . 'Subscribers.php';

class Comments
{
    public static function getComments(){
        $output = array();
        $connect = mysqli_connect('localhost', 'root', '', 'comment_system');
        $sql = "SELECT * FROM comments ORDER BY commentId DESC";
        $query = mysqli_query($connect, $sql);
        if($query){
            if(mysqli_num_rows($query)){
                while ($row = mysqli_fetch_object($query)){
                    $output[] = $row;
                }
            }
        }

        return $output;
    }

    public static function insert($comment_text, $userId){
        $connect = mysqli_connect('localhost', 'root', '', 'comment_system');
        $comment_text = addslashes($comment_text);

        //Insert data into the database
        $sql = "INSERT INTO comments VALUES ('',  '$userId', '$comment_text')";
        $query = mysqli_query($connect, $sql);

        if($query){
            $insert_id = mysqli_insert_id($connect);

            $std = new stdClass();
            $std->comment_id = $insert_id;
            $std->comment = $comment_text;
            $std->userId = (int)$userId;

            return $std;
        }

        return null;
    }

    public static function update($data){}

    public static function delete($commentId){
        $connect = mysqli_connect('localhost', 'root', '', 'comment_system');
        $sql = "DELETE FROM comments WHERE commentId = $commentId";
        $query = mysqli_query($connect, $sql);
        if($query){
            return true;
        }

        return null;
    }
}