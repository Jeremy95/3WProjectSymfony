<?php
namespace Store\BackendBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class ProductRepository
 * @package Store\BackendBundle\Repository
 */
class CategoryRepository extends EntityRepository
{

    /**
     * Get All product of an user
     * @param null $user
     * @return array
     */
    public function getCategoriesByUser($user = null)
    {
        $query = $this->getEntityManager()
            ->createQuery(
            "
            SELECT c
            FROM StoreBackendBundle:Category c
            WHERE c.jeweler = :user"
            )
            ->setParameter('user', $user);

        return $query->getResult();
    }

}