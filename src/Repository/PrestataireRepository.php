<?php

namespace App\Repository;

use App\Entity\Prestataire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Prestataire|null find($id, $lockMode = null, $lockVersion = null)
 * @method Prestataire|null findOneBy(array $criteria, array $orderBy = null)
 * @method Prestataire[]    findAll()
 * @method Prestataire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrestataireRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Prestataire::class);
    }

    public function search(array $criteria)
    {
        $qb = $this->createQueryBuilder('p');

        if (!empty($criteria['cp_entreprise'])) {
            $qb
                ->andWhere('p.cp_entreprise = :cp')
                ->setParameter('cp', $criteria['cp_entreprise']);
        }

        if (!empty($criteria['lieu_prestation'])) {
            $qb
                ->andWhere('p.lieu_prestation LIKE ' . $qb->expr()->literal('%' . $criteria['lieu_prestation'] . '%'))
            ;
        }

        if (!empty($criteria['profession'])) {
            $qb
                ->andWhere('p.profession LIKE ' . $qb->expr()->literal('%' . $criteria['profession'] . '%'))
            ;
        }

        if (!empty($criteria['jour'])) {
            $qb
                ->andWhere('p.jour LIKE ' . $qb->expr()->literal('%' . $criteria['jour'] . '%'))
            ;
        }


        return $qb->getQuery()->getResult();
    }

//    /**
//     * @return Prestataire[] Returns an array of Prestataire objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Prestataire
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
