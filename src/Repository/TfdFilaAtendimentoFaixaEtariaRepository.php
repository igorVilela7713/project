<?php

namespace App\Repository;

use App\Entity\TfdFilaAtendimentoFaixaEtaria;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TfdFilaAtendimentoFaixaEtaria|null find($id, $lockMode = null, $lockVersion = null)
 * @method TfdFilaAtendimentoFaixaEtaria|null findOneBy(array $criteria, array $orderBy = null)
 * @method TfdFilaAtendimentoFaixaEtaria[]    findAll()
 * @method TfdFilaAtendimentoFaixaEtaria[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TfdFilaAtendimentoFaixaEtariaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TfdFilaAtendimentoFaixaEtaria::class);
    }

    // /**
    //  * @return TfdFilaAtendimentoFaixaEtaria[] Returns an array of TfdFilaAtendimentoFaixaEtaria objects
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
    public function findOneBySomeField($value): ?TfdFilaAtendimentoFaixaEtaria
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
