<?php
/**
 * Created by PhpStorm.
 * User: Programmer
 * Date: 1/8/2019
 * Time: 11:45 AM
 */

class Subscribers
{
    public static function getSubscriber($userId){
        $connect = mysqli_connect('localhost', 'root', '', 'comment_system');

        $sql = "SELECT * FROM subscribers WHERE userId = $userId";

        $query = mysqli_query($connect, $sql);

        if($query){
            if(mysqli_num_rows($query) == 1){
                return mysqli_fetch_object($query);
            }
        }
    }
}