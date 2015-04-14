<?php
namespace Store\BackendBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class ProductRepository
 * @package Store\BackendBundle\Repository
 */
class CmsRepository extends EntityRepository
{

    /**
     * Get All product of an user
     * @param null $user
     * @return array
     */
    public function getCmsByUser($user = null)
    {
        $query = $this->getEntityManager()
            ->createQuery(
            "
            SELECT c
            FROM StoreBackendBundle:Cms c
            WHERE c.jeweler = :user"
            )
            ->setParameter('user', $user);

        return $query->getResult();
    }

    /**
     * @param null $user
     * @return mixed
     */
    public function getCountByUser($user = null)
    {
        $query = $this->getEntityManager()
            ->createQuery(
                "
                SELECT COUNT(c) AS nb
                FROM StoreBackendBundle:Cms c
                WHERE c.jeweler = :user"
            )
            ->setParameter('user', $user);

        return $query->getOneOrNullResult();

    }



}