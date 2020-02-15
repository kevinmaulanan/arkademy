<?php

    function CekHuruf($kata,$cari_huruf)
    {
        $banyak_huruf = 0;
        $lower_kata = strtolower($kata);
        $lower_huruf = strtolower($cari_huruf);
        $tempChar = str_split($lower_kata, 1);

        foreach ($tempChar as $huruf) 
        {
            if ($huruf == $lower_huruf) 
            {
                $banyak_huruf++;
            }
        }

        if($banyak_huruf==0)
        {
            echo "Not Found";
        }
        
        else
        {
        echo "Hasil dari kata '$kata' adalah $banyak_huruf";
        }
    }

    CekHuruf('Arka','a');
