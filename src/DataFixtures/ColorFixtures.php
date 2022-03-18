<?php

namespace App\DataFixtures;

use App\Entity\MtgColor;
use App\Repository\MtgColorRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ColorFixtures extends Fixture
{

    public function __construct(
        private MtgColorRepository $mtgColorRepository
    ) {
    }

    public function load(ObjectManager $manager): void
    {

        $colors = [
            [
                "code" => "W",
                "name" => "White"
            ],
            [
                "code" => "U",
                "name" => "Blue"
            ],
            [
                "code" => "B",
                "name" => "Black"
            ],
            [
                "code" => "R",
                "name" => "Red"
            ],
            [
                "code" => "G",
                "name" => "Green"
            ],

        ];

        foreach ($colors as $key => $color) {
            $colorNew = new MtgColor();
            $colorNew->setCode($color["code"])->setName($color["name"]);
            $this->mtgColorRepository->add($colorNew);
        }

        $manager->flush();
    }
}
