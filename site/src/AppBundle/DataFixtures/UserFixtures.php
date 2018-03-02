<?php
/**
 * Created by PhpStorm.
 * User: MansourPC
 * Date: 02/03/2018
 * Time: 14:45
 */

namespace AppBundle\DataFixtures;


use AppBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user
            ->setEmail('admin@symflix.fr')
            ->setPassword(' $2y$13$ay.uUn0h2RaVuRspyuLWue2dW2R96.fvC9/Qw/H8URkfnhKWxamp2')
            ->setUsername('admin')
            ->setName('admin')
            ->setRole('ROLE_ADMIN')
            ;

        $manager->persist($user);

        $user1 = new User();
        $user1
            ->setEmail('user@symflix.fr')
            ->setPassword(' $2y$13$ay.uUn0h2RaVuRspyuLWue2dW2R96.fvC9/Qw/H8URkfnhKWxamp2')
            ->setUsername('user')
            ->setName('user')
            ->setRole('ROLE_USER')
        ;

        $manager->persist($user1);

        $manager->flush();



    }

}