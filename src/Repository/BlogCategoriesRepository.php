<?php

namespace App\Repository;

use App\Entity\BlogCategories;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BlogCategories|null find($id, $lockMode = null, $lockVersion = null)
 * @method BlogCategories|null findOneBy(array $criteria, array $orderBy = null)
 * @method BlogCategories[]    findAll()
 * @method BlogCategories[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlogCategoriesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BlogCategories::class);
    }

    public function getArrayCategories () :array
    {
        return $this->createQueryBuilder('c')
            ->getQuery()
            ->getArrayResult();
    }

    // /**
    //  * @return BlogCategories[] Returns an array of BlogCategories objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BlogCategories
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
