<?php
function getBiodata()
{
    $data = [
        "name" => "Muhammad Rifky Sulistian",
        "address" => "Jl. Gatot Subroto Km.5 Gang Otomen no.26 Tangerang",
        "hobbies" => "mancing", "baca komik",
        "is_married" => false,
        "school" => [
            "highSchool" => "SMK Yuppentek 2",
            "University" => "Universitas Pamulang"
        ],
        "skill" => "PHP", "MySQL", "Java", "CSS", "HTML"
    ];

    $json = json_encode($data);
    return $json;
}

echo getBiodata();
