<?php

namespace App\Repository;

use App\Entity\MtgType;
use App\Repository\trait\CommonMethodsRepositoryTrait;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MtgType|null find($id, $lockMode = null, $lockVersion = null)
 * @method MtgType|null findOneBy(array $criteria, array $orderBy = null)
 * @method MtgType[]    findAll()
 * @method MtgType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MtgTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MtgType::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(MtgType $entity, bool $flush = true): void
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
    public function remove(MtgType $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    use CommonMethodsRepositoryTrait;

    // /**
    //  * @return MtgType[] Returns an array of MtgType objects
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
    public function findOneBySomeField($value): ?MtgType
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
