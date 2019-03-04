<?php

namespace App\Repository;

use App\Entity\BlogContent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class BlogContentRepository
 * @package App\Repository
 */
class BlogContentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BlogContent::class);
    }

    /**
     * @param string $type
     * @return mixed
     */
    public function getAllValid ($type = 'blog')
    {
        if ($type == 'note') {
            $type = 1;
        } else {
            $type = 0;
        }
        return $this->createQueryBuilder('b')
            ->join('b.id_categorie', 'c')->addSelect('c')
            ->where('b.status = :val')
            ->andWhere('b.type = :type')
            ->setParameter('val', true)
            ->setParameter('type', $type)
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
