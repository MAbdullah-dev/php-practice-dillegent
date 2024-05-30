<?php

class Auth
{
    public function handle()
    {
        if (!$_SESSION['user'] ?? false) {
            header("location: /dilgent-tecnogies-internee/laracast/ ");
            exit;
        } 
    }
}
