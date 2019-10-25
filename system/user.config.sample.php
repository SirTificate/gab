<?php
/*
    *** USER SETTINGS ***
    1. Make a copy of this file
    2. Modify it
    3. Rename it to user.config.php
    4. Remove this stupid comment
*/

/*
    *** SERVER SETTINGS ***
    default: http://localhost:3000

    This should point to your running Gekko server.

    This variable can either be one server e.g:
    $server = 'http://myserver.com:3000'
    -OR- multiple, see 'Advanced'
*/

$server = 'http://localhost:3000';


/*
    *** DATABASE SETTINGS ***
    default: sqlite

    If you want to use another db engine set
    it here. Using MySQL is more stable then
    SQLite so if you plan to do massive runs
    with over 10k+ results or plan to do heavy
    multithreading do switch to MySQL.

    Choices are 'sqlite' --OR-- 'server,user,pass'
    Example for mysql: '127.0.0.1:3306,TommieHansenIsTheBest,MySuperPassword'
*/

$db_engine = 'sqlite';


/*
    *** TIMEOUT SETTINGS ***
    default: 600 (10 minutes)

    NOTE: If you run strategies that take over this
    time GAB will start returning 'false' (null).
    If running fast_cgi etc you'll also have to
    check your default max connection time (default = 60 (1 minute))
    for your server.
    NOTE: If you run with more threads then your CPU can handle
    it will begin to stack up and thus it will take longer time
    per run. Check your CPU-usage and modify threads accordingly.
*/


define('SERVER_TIMEOUT', 600); // seconds, 600 = 10 minutes


/*
    *** ORIGIN SETTINGS ***
    default: false

    Creates subdomains for all requests via ajax to post.php @ UI
    to increase max concurrent threads and circumvent max allowed by browser.

    NOTE: This requires
    1. That the server you're running GAB on accepts wildcard subdomains
    2. That you can set http header via PHP: header('Access-Control-Allow-Origin: *');
*/

$allow_origin = false;


/*
    *** PAPER TRADER SETTINGS ***
    default: no values/not set

    Change Paper Trader settings.
    Only use if you have a really good reason since setting this
    too low could introduce some major overfitting of data (google it).

    NOTE: If you run test(s) and then change this no new dataset will
    be created that reflects this. Use wisely.

    Copy-paste this array into your config and change as you see fit:

    $paperTrader = [
        'feeMaker' => 0.25,
        'feeTaker' => 0.25,
        'feeUsing' => 'maker',
        'slippage' => 0.05,
        'asset' => 1,
        'currency' => 100,
    ];

*/



/*
    *** ADVANCED SETTINGS ***
    Do not do this if you don't know what you're doing

    *** SERVER ARRAY ***
    $server = ['http://localhost:3000', 'http://secondary.com:3000', 'http://tertiary.com:3000'];

    1. GAB will use first as reference for datasets and strategies
    2. GAB will make the assumption that you are not an idiot
    3. You will need to make sure your other servers are in sync (read: have the same datasets, exakt same strategies etc etc)

    If not #3 you will recieve a lot of 'null' responses since the Gekko instances will just return
    different sort of errors. How you sync your servers is up to you, but a simple recommendation
    is to use a GIT repo or anything that makes it easy to have a centralized repo for this stuff.

    If not 100% in sync (datasets, strategies, TOML-files for strategies etc) the other servers might
    return a lot of 500-errors (meaning Internal Server Error).
*/

/*
    YES -- You can remove all these comments and just have this in your user.config.php
    $server = 'http://localhost:3000';
    define('SERVER_TIMEOUT', 900);
    $allow_origin = false;
    $db_engine = 'sqlite'
*/
