<?php


    function BiodataJson()
    {
        $Biodata = array
        (
            "name" => "Kevin Maulana Nasrullah",
            "age" => 19,
            "address" => "Jl. Pintu Ledeng Kp Sukarapih RT 02 RW 08 Ciomas Bogor",
            "hobbies" => array("Bermain Game", "Belajar Hal yang Baru"),
            "is_married" => false,
            "list_school" => array("name" => "SMK Negeri 3 Bogor", "year_in" => 2014, "year_out" => 2017, "major" => "Teknik Komputer Jaringan"),
            "skills" => array("skill_name" => "Jaringan", "level" => "Beginner"),
            "interest_in_coding" => true,
        );
        return $Json = json_encode($Biodata, JSON_PRETTY_PRINT);
    }

    echo BiodataJson();
?>