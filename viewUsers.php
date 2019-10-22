<?php
    include_once 'user.php';
    class viewUsers extends user {
        function showAllUsers() {
            $myUsers = $this->getAllUsers();
            foreach($myUsers as $user) {
                echo '<li>'.$user['imie'];
            }
        }
    }
?>