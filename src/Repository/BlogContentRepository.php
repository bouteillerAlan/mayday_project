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
            ->join('b.id_categorie', 'c')->addSelect('c')
            ->where('b.status = :val')
            ->setParameter('val', true)
            ->orderBy('b.id', 'DESC')
            ->getQuery()
            ->getResult();

    }

    /**
     * @param $id
     * @return mixed
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getOneValid ($id)
    {
        return $this->createQueryBuilder('b')
            ->join('b.id_categorie', 'c')->addSelect('c')
            ->where('b.status = :val')
            ->andWhere('b.id = :id')
            ->setParameter('val', true)
            ->setParameter('id', $id)
            ->orderBy('b.id', 'DESC')
            ->getQuery()
            ->getOneOrNullResult();

    }

}
