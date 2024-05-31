<?php
// return[
//     '/dilgent-tecnogies-internee/laracast/'=>'controller/index.php',
//     '/dilgent-tecnogies-internee/laracast/about'=>'./controller/about.php',
//     '/dilgent-tecnogies-internee/laracast/contact'=>'controller/contact.php',
//     '/dilgent-tecnogies-internee/laracast/notes'=>'controller/notes/notes.php',
//     '/dilgent-tecnogies-internee/laracast/note'=>'controller/notes/note.php',
//     '/dilgent-tecnogies-internee/laracast/create/note'=>'./controller/notes/create.php'
// ];


$routers->get('/dilgent-tecnogies-internee/laracast/','controller/index.php');

$routers->get('/dilgent-tecnogies-internee/laracast/about','./controller/about.php');

$routers->get('/dilgent-tecnogies-internee/laracast/contact','controller/contact.php');

$routers->get('/dilgent-tecnogies-internee/laracast/notes','controller/notes/notes.php')->only('auth');

$routers->get('/dilgent-tecnogies-internee/laracast/note','controller/notes/note.php');

$routers->patch('/dilgent-tecnogies-internee/laracast/note','controller/notes/update.php');

$routers->get('/dilgent-tecnogies-internee/laracast/note/edit','controller/notes/edit.php');

$routers->delete('/dilgent-tecnogies-internee/laracast/note', 'controller/notes/destroy.php');

$routers->get('/dilgent-tecnogies-internee/laracast/create/note','controller/notes/create.php');

$routers->post('/dilgent-tecnogies-internee/laracast/notes','controller/notes/store.php');

// $routers->post('/dilgent-tecnogies-internee/laracast/notes','controller/notes/store.php');
    
$routers->get('/dilgent-tecnogies-internee/laracast/register','controller/registration/create.php')->only('guest');

$routers->post('/dilgent-tecnogies-internee/laracast/register','controller/registration/store.php')->only('guest');

$routers->get('/dilgent-tecnogies-internee/laracast/login','controller/session/create.php')->only('guest');

$routers->post('/dilgent-tecnogies-internee/laracast/session','controller/session/store.php')->only('guest');

$routers->delete('/dilgent-tecnogies-internee/laracast/session','controller/session/destroy.php');


