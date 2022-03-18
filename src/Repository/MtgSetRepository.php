<?php

namespace App\Repository;

use App\Entity\MtgSet;
use App\Repository\trait\CommonMethodsRepositoryTrait;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MtgSet|null find($id, $lockMode = null, $lockVersion = null)
 * @method MtgSet|null findOneBy(array $criteria, array $orderBy = null)
 * @method MtgSet[]    findAll()
 * @method MtgSet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MtgSetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MtgSet::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(MtgSet $entity, bool $flush = true): void
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
    public function remove(MtgSet $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    use CommonMethodsRepositoryTrait;

    // /**
    //  * @return MtgSet[] Returns an array of MtgSet objects
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
    public function findOneBySomeField($value): ?MtgSet
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
