<?php

      function findHighestProfit($array){
      $count=0;
      $max = 0;
	$nilai=$array;
      $awal=count($nilai)-1; //5
      for($i=$awal; $i>0; $i--) //i=4 , i=3
      {
            $angka_awal=$nilai[$i];//5 
            for($d=0; $d<$i; $d++)
            {
                  $hasil = $angka_awal-$nilai[$d]; //5-10, 5-2....m
                  if ($hasil>$max){
                        $max=$hasil;
                  }
            }    
      }
      echo "Output : $max";
}

findHighestProfit(array(10,2,11,20,3,5));

?>