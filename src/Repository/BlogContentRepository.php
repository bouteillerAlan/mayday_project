<?php

namespace App\Repository;

use App\Entity\BlogContent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BlogContent|null find($id, $lockMode = null, $lockVersion = null)
 * @method BlogContent|null findOneBy(array $criteria, array $orderBy = null)
 * @method BlogContent[]    findAll()
 * @method BlogContent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlogContentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BlogContent::class);
    }

    /**
     * @return BlogContent[] return an array of BlogContent
     */
    public function getAllValid ()
    {
        return $this->createQueryBuilder('b')
            ->where('b.status = :val')
            ->setParameter('val', true)
            ->orderBy('b.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

}
