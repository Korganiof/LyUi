<?php
/**
* Created by PhpStorm.
* User: User
* Date: 14.10.2014
* Time: 10:01
*/

class Account_Controller extends Base_Controller {

public function action_index(){
echo 'Tämä on profiilisivu';
}

public function action_login(){
echo 'tässä kirjaudutaan sisälle';
}

public function action_logout(){
echo 'Täältä kirjaudutaan ulos';
}

} 