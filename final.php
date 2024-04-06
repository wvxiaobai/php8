<?php
 
/**
 * UserRole Class
 * 来源公众号：码农编程进阶笔记
 */
class UserRole {
    /**
     * Declare a final class constant with a value.
     */
    final public const ADMIN = '1';

    public function getAdmin(){
       // echo ADMIN;
    }

}
 
/**
 * User Class extending the UserRole Class
 */
class User extends UserRole {
    /**
     * Declare another constant with the same name
     * as of the parent class to override the value.
     * 
     * Note: Overriding the value will throw the following error:
     * PHP Fatal error:  User::ADMIN cannot override final constant UserRole::ADMIN
     */
    // public const ADMIN = '2';
}
 

$user = new UserRole();

echo $user::ADMIN;
//echo $user->getAdmin();
?>