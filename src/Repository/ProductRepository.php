<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    /**
     * @return array<string>
     */
    public function findForInputParse(): array
    {
        $query = $this->createQueryBuilder('pro')
            ->select('pro.name as product', 'cat.position as position')
            ->innerJoin('pro.category', 'cat')
            ->getQuery();

        $return = [];

        foreach ($query->getResult() as $result) {
            $return[$result['product']] = $result['position'];
        }

        return $return;
    }
}
