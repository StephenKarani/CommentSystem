<?php
class Subscribers {
    public static function getSubscriber($userId){
        $sql = "SELECT * FROM SUBSCRIBERS WHERE userId = $userId";
        $query = mysql_query($sql);
        if($query){
            if(mysql_num_rows($query) == 1){
                return mysql_fetch_object($query);
            }
        }
        return null;
    }
}