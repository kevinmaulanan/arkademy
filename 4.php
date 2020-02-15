<?php

    function validateColor($cari_warna)
    {   $color="ABCDE0123456789";
        $banyak = 0;
        $temp_Color = str_split($color, 1);
        $temp_Char = $cari_warna;
        $temp_Char = str_split($temp_Char, 1);

        foreach ($temp_Color as $cek_color) 
        {
            foreach ($temp_Char as $cek_huruf) 
            {
                if ($cek_huruf==$cek_color) 
                {
                    $banyak++;
                }
            }     
        }


        if ( $banyak==6 or $banyak==3) {
            echo "Color Valid : $cari_warna" . "<br>"."Format Hex Code benar!";
        }
        else
        {
            echo "Color InValid : $cari_warna" . "<br>"."Format Hex Code tidak benar!";
        }
    }

    validateColor('A12312');
