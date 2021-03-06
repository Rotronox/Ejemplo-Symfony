<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Dependencia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class DependenciaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dependencia::class);
    }

    public function findAllOrdenadas()
    {
        return $this->createQueryBuilder('d')
            ->select('d')
            ->orderBy('d.descripcion')
            ->getQuery()
            ->getResult();
    }
}
