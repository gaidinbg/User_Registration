<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)

    {
        $this-> passwordEncoder=$passwordEncoder;
    }


    public function load(ObjectManager $manager)
    {
            $user = new User();

            $user->setEmail('gaidinbg@abv.bg');
            $user->setName('Petko Ichev');
            $user ->setPassword($this->passwordEncoder->encodePassword($user,'123456'));
            $user->setPhone('0700123456');
            //$user->setRoles('ROLE_ADMIN');

            $manager->persist($user);


        $manager->flush();
    }
}
