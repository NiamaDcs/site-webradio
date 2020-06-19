<?php

namespace App\Repository;

use App\Entity\ListSignals;
use App\Entity\Signalements;
use App\Entity\UserSearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder as ORMQueryBuilder;

/**
 * @method Signalements|null find($id, $lockMode = null, $lockVersion = null)
 * @method Signalements|null findOneBy(array $criteria, array $orderBy = null)
 * @method Signalements[]    findAll()
 * @method Signalements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SignalementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Signalements::class);
    }

    /*public function findAllVisibleQuery(UserSearch $search): Query
    {
        $query = $this->findVisibleQuery();

        if($search->getChannels()) {
            $query = $query
                ->andWhere('s.nomChaine = :nomChaine')
                ->setParameter(':nomChaine', $search->getChannels());
        }

        return $query->setMaxResults(4)
                ->getQuery();
    }*/
    
    /**
     * @return Users[]
     */
    public function findLastest() :array
    {
        return $this->findVisibleQuery()
        ->setMaxResults(4)
        ->getQuery()
        ->getResult()
        ;
    }

    private function findVisibleQuery() :ORMQueryBuilder
    {
        return $this->createQueryBuilder('s');       
    }

    public function channelName(): ORMQueryBuilder {
        return $this->createQueryBuilder('s')
                    ->select('s.nomChaine');  
    }
}
