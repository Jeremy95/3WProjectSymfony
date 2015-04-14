<?php
namespace Store\BackendBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class OrdersRepository
 * @package Store\BackendBundle\Repository
 */
class OrdersRepository extends EntityRepository
{

    public function getCountByUser($user = null)
    {
        $query = $this->getEntityManager()
            ->createQuery(
                "
                SELECT COUNT(o) AS nb
                FROM StoreBackendBundle:Orders o
                WHERE o.jeweler = :user"
            )
            ->setParameter('user', $user);

        return $query->getOneOrNullResult();
    }

    public function getOrderByUser($user = null)
    {
        $query = $this->getEntityManager()
            ->createQuery(
                "
                SELECT o
                FROM StoreBackendBundle:Orders o
                WHERE o.jeweler = :user"
            )
            ->setMaxResults(5)
            ->setParameter("user", $user);

        return $query->getResult();
    }

    public function getTotalOrder($user = null)
    {
        $query = $this->getEntityManager()
            ->createQuery(
            "
            SELECT SUM(o.total) AS total
            FROM StoreBackendBundle:Orders o
            WHERE o.jeweler = :user"
            )
            ->setParameter('user', $user);

        return $query->getOneOrNullResult();
    }

} 