<?php

print("Masīvu piemērs");


/* Masīva piemērs */
{
  $masivs = [
    2,
    4,
    "text",
    function () {return 5;}
  ];

  print($masivs[0]);


  $masivs[0] = "divi";
  print($masivs[0]);

}
