<?php

class Guest
{
    public function Guest()
    {
        if (    $_SESSION['user'] ?? false) {
            header("location: /dilgent-tecnogies-internee/laracast");
            exit;
        }   
    }
}