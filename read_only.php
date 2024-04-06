<?php
 
/**
 * User Class
 */
class User {
    /**
     * Declare a variable with readonly property.
     * @var $authUserID
     * @access public
     */
    public readonly int $authUserID;
    /**
     * Constructor of the class.
     * @param integer $userID
     * @return void
     */
    public function __construct($userID) {
        /**
         * Change the value of the property as specified.
         * Updating the value of readonly properties are
         * allowed only through the constructor.
         */
        $this->authUserID = $userID;
    }
    /**
     * Update Auth User ID
     * This function tries to update the readonly property (which is not allowed).
     * @method updateAuthUserID()
     * @param integer $userID
     * @author Tara Prasad Routray <someemailaddress@example.com>
     * @access public
     * @return void
     */
    public function updateAuthUserID($userID) {
        /**
         * Change the value of the property as specified.
         * Executing this function will throw the following error;
         * PHP Fatal error:  Uncaught Error: Cannot modify readonly property User::$authUserID
         */
        $this->authUserID = $userID;
    }
}
/**
 * Initialize the class and update the value of the readonly property.
 */
$user = new User(30);
/**
 * Print the readonly property value.
 * This will print 30.
 */
echo $user->authUserID;
/**
 * Call another function inside the class and try to update the class property.
 */
// $user->updateAuthUserID(50);
/**
 * Print the readonly property value.
 */
echo $user->authUserID;
 
?>