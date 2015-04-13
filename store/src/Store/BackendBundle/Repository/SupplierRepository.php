<?php
namespace Store\BackendBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class ProductRepository
 * @package Store\BackendBundle\Repository
 */
class SupplierRepository extends EntityRepository
{

    /**
     * Get All product of an user
     * @param null $user
     * @return array
     */
    public function getSuppliersByUser($user = null)
    {
        $query = $this->getEntityManager()
            ->createQuery(
            "SELECT s
            FROM StoreBackendBundle:Supplier s
            JOIN s.product p
            WHERE p.jeweler = :user
            GROUP BY p.jeweler"
            )
            ->setParameter('user', $user);

        return $query->getResult();
    }


}