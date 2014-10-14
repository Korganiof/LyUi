<?php
/**
* Created by PhpStorm.
* User: User
* Date: 14.10.2014
* Time: 10:01
*/

class AccountController extends BaseController{



public function get_index(){
return "fff";
}

public function action_login(){
echo 'tässä kirjaudutaan sisälle';
}

public function action_logout(){
echo 'Täältä kirjaudutaan ulos';
}
    public function get_name($name){
        echo $name;
    }

} 