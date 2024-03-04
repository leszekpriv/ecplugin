<?php

namespace App\Repository;

use App\Entity\MojaTablica;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MojaTablica>
 *
 * @method MojaTablica|null find($id, $lockMode = null, $lockVersion = null)
 * @method MojaTablica|null findOneBy(array $criteria, array $orderBy = null)
 * @method MojaTablica[]    findAll()
 * @method MojaTablica[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MojaTablicaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MojaTablica::class);
    }

    //    /**
    //     * @return MojaTablica[] Returns an array of MojaTablica objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('m.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?MojaTablica
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
