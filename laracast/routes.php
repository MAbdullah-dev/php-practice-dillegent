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

$routers->get('/dilgent-tecnogies-internee/laracast/notes','controller/notes/notes.php');

$routers->get('/dilgent-tecnogies-internee/laracast/note','controller/notes/note.php');

$routers->get('/dilgent-tecnogies-internee/laracast/create/note','./controller/notes/create.php');

$routers->delete('/dilgent-tecnogies-internee/laracast/create/note','./controller/notes/destroy.php');