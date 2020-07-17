<?php

namespace App\Repository;

use App\Entity\TfdFilaAtendimento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TfdFilaAtendimento|null find($id, $lockMode = null, $lockVersion = null)
 * @method TfdFilaAtendimento|null findOneBy(array $criteria, array $orderBy = null)
 * @method TfdFilaAtendimento[]    findAll()
 * @method TfdFilaAtendimento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TfdFilaAtendimentoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TfdFilaAtendimento::class);
    }

    // /**
    //  * @return TfdFilaAtendimento[] Returns an array of TfdFilaAtendimento objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TfdFilaAtendimento
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
