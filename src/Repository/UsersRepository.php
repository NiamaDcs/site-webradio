<?php

namespace App\Repository;

use App\Entity\Users;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder as ORMQueryBuilder;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Users::class);
    }

    /*public function findAllVisibleQuery( $search): Query
    {
        $query = $this->findVisibleQuery();

        if($search->getUsername()){
            $query = $query
                ->andWhere('u.username = :username')
                ->setParameter(':username', $search->getUsername());
        }

        if($search->getChannels()) {
            $query = $query
                ->andWhere('u.channels = :channels')
                ->setParameter(':channels', $search->getChannels());
        }

        return $query->setMaxResults(4)
                ->getQuery();
    }*/

    /**
     * @return User[]
     */
    public function findLastest() :array
    {
        return $this->findVisibleQuery()
        ->setMaxResults(4)
        ->getQuery()
        ->getResult()
        ;
    }

    public function findTheUser($token) 
    {
        return $this->findVisibleQuery()
        ->andWhere('u.oauthAccessToken = :token')
        ->setParameter(':token', $token)
        ->getQuery()
        ->getResult();

    }

    /*public function findUserByMail(User $email) 
    {    
        return $this->findVisibleQuery()
        ->andWhere('u.email = :email')
        ->setParameter(':email', $email)
        ->getQuery()
        ->getResult();

    }*/

    public function findUserById($id) 
    {    
        return $this->findVisibleQuery()
        ->andWhere('u.id = :id')
        ->setParameter(':id', $id)
        ->getQuery()
        ->getResult();

    }

    private function findVisibleQuery() :ORMQueryBuilder
    {
        return $this->createQueryBuilder('u');       
    }
}   
