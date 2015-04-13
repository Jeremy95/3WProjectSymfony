<?php
namespace Store\BackendBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class ProductRepository
 * @package Store\BackendBundle\Repository
 */
class ProductRepository extends EntityRepository
{

    /**
     * Get All product of an user
     * @param null $user
     * @return array
     */
    public function getProductsByUser($user = null)
    {
        $query = $this->getEntityManager()
            ->createQuery(
            "
            SELECT p
            FROM StoreBackendBundle:Product p
            WHERE p.jeweler = :user"
            )
            ->setParameter('user', $user);

        return $query->getResult();
    }

}