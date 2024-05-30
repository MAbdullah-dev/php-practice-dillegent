<?php
class Auth
{
    public function handle()
    {
        if (!$_SESSION['user'] ?? false) {
            header("Location: /dilgent-tecnogies-internee/laracast/");
            exit;
        }
    }
}
?>
