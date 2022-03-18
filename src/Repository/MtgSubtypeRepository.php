<?php

namespace App\Repository;

use App\Entity\MtgSubtype;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MtgSubtype|null find($id, $lockMode = null, $lockVersion = null)
 * @method MtgSubtype|null findOneBy(array $criteria, array $orderBy = null)
 * @method MtgSubtype[]    findAll()
 * @method MtgSubtype[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MtgSubtypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MtgSubtype::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(MtgSubtype $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(MtgSubtype $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return MtgSubtype[] Returns an array of MtgSubtype objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MtgSubtype
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
