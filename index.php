<?php
/**
 * Name: index.php
 * Created by : ERayfield
 * Created On: 07/12/2016 at 3:47 PM
 *
 * This takes a 3rd party (unknown) to communicate with lightspeed pos and our system
 * @copywrite
 */


//when the lightspeed sends a response, can we tell it is happening on the port? and can we get the data?

//monitor port
$host = 'hostNameHere.com';
$port= array(21, 25, 80, 81, 110, 443, 3306);//there are 2 port numbers to monitor
//$e = NULL;
//if (false === socket_select($r, $w, $e, 0)) {
//    echo "socket_select() failed, reason: " .
//        socket_strerror(socket_last_error()) . "\n";
//}
$connection = fsockopen($host, $port);

    if (is_resource($connection))
    {
        echo '<h2>' . $host . ':' . $port . ' ' . '(' . getservbyport($port, 'tcp') . ') is open.</h2>' . "\n";

        fclose($connection);
    }

    else
    {
        echo '<h2>' . $host . ':' . $port . ' is not responding.</h2>' . "\n";
    }