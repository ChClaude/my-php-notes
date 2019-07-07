<?php
//    echo date('d'); // Day
//    echo date('m'); // Month
//    echo date('Y'); // Year
//    echo date('l'); // Day of the week

//    echo  date('Y/m/d');
//    echo  date('d-m-Y');

//    echo date('h'); // Hour
//    echo date('i'); // Min
//    echo date('m'); // Sec
//    echo date(a); // AM or PM

    // Set time Zone
//    date_default_timezone_set("America/Los_Angeles");

//    echo date('h:i:s a');

    /*
     * Unix timestamp is a long integer containing the number of
     * second between the Unix Epoch (January 1 1970 00:00:00 GMT)
     * and the time specified
     */
    $timestamp = mktime(10, 14, 54, 9, 10, 1981);

//    echo $timestamp; // this returns a unix timestamp
//    echo date('l m/d/Y h:i:s a', $timestamp);

    $timestamp2 = strtotime("7:00pm March 22 2016");
//    echo date('l m/d/Y h:i:s a', $timestamp2);

    $timestamp3 = strtotime('tomorrow'); // you can do (yesterday, next Sunday, +2 Months) as well. for more look at the docs
    echo date('l m/d/Y h:i:s a', $timestamp3); // returns the following date


