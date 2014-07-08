<?php

namespace sql\users;

function fetchByCredentials($username, $password) {
    /*
    $q = "SELECT *
          FROM users
          WHERE ...";

    ...
    */

    //mock database result
    return array(array('id' => 19,
        'username' => 'frankie',
        'first_name' => 'Frank',
        'last_name' => 'Costanza')
    );
}

?>
