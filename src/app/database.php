<?php

class database
{
    public function selectSuperHero($id)
    {
        $superHeroes = [1 => ["firstName" => "Clark",
                                "lastName" => "Kent",
                                "aka" => "Superman"
                        ],
                        2 => ["firstName" => "Peter",
                            "lastName" => "Parker",
                            "aka" => "Spiderman"
                        ],
                        3 => ["firstName" => "Lois",
                            "lastName" => "Lane",
                            "aka" => "none"
                        ]
                        ];

        return $superHeroes[$id];
    }
}