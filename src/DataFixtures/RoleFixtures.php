<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Role;


class RoleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $tabRoles = [
            'admin',
            'membre',
            'VIP',
        ];
        
        foreach($tabRoles as $nom){
            $role = new Role();
            $role->setRole($nom);
            
            $manager->persist($role);
        }
        
        
        $manager->flush();
    }
}
