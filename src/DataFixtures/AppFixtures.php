<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    const USERS = [
        [
            'email' => 'jankow@mvlinowskv.pl',
            'name' => 'Jan Kowalski',
            'color_eyes' => 'Zielony',
            'gender' => 'M',
            'job' => 'Kucharz',
            'years' => '30',
        ],
        [
            'email' => 'barbaramly@mvlinowskv.pl',
            'name' => 'Barbara Młynarczyk',
            'color_eyes' => 'Niebieski',
            'gender' => 'K',
            'job' => 'Lekarz',
            'years' => '38',
        ],
        [
            'email' => 'stanislawokul@mvlinowskv.pl',
            'name' => 'Stanisław Okulski',
            'color_eyes' => 'Brązowy',
            'gender' => 'M',
            'job' => 'Stomatolog',
            'years' => '45',
        ],
    ];


    /**
     * @throws \Exception
     */
    public function load(ObjectManager $manager): void
    {
        foreach (self::USERS as $userData){

            $user = new User();
            $user->setEmail($userData['email']);
            $user->setColorEyes($userData['color_eyes']);
            $user->setGender($userData['gender']);
            $user->setJob($userData['job']);
            $user->setName($userData['name']);
            $user->setYearsOld($userData['years']);


            $manager->persist($user);
        }

        $manager->flush();
    }
}