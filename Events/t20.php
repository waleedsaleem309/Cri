<?php
$T20 = '{ 
"events": [ 
{
    "Name": "PSL 7",
    "Url": "https://bighra.tk/Events/psl.json",
    "ImageUrl": "https://assets.crik.live/Events/psl.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "PSL 7",
    "endDate": "2022-2-27",
    "endTime": "12:00"
    },
{
    "Name": "T20  World Cup",
    "Url": "https://bighra.tk/Channels.json",
    "ImageUrl": "https://assets.crik.live/Events/t20.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "T20 World Cup",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    }

    ],
    "title": "T20 World Cup"
    }';
   $T20_1 = '[' . $T20 . ']';
               file_put_contents('t20.json', $T20_1);

?>