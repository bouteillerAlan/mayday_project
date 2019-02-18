<?php

namespace App\DataFixtures;

use App\Entity\BlogUser;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends Fixture
{


    /**
     * @var UserPasswordEncoderInterface
     */
    private $uei;

    /**
     * UserFixture constructor.
     * @param UserPasswordEncoderInterface $uei
     */
    public function __construct(UserPasswordEncoderInterface $uei)
    {

        $this->uei = $uei;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $user = new BlogUser();
        $user->setUsername('Hadock');
        $user->setPassword($this->uei->encodePassword($user, 'j22a@1555'));
        $manager->persist($user);
        $manager->flush();
    }
}
