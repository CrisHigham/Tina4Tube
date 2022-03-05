<?php

class SuperHeroHelper
{
    public function getSuperHero($superHeroId)
    {
        // Get from the database
        $superHero = (new database())->selectSuperHero($superHeroId);

        return $superHero;
    }
}