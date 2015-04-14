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

    /**
     * compte le nb de prod pr un bijoutier
     * @param null $user
     * @return array
     */
    public function getCountByUser($user = null)
    {
        $query = $this->getEntityManager()
            ->createQuery(
            "
            SELECT COUNT(p) AS nb
            FROM StoreBackendBundle:Product p
            WHERE p.jeweler = :user"
            )
            ->setParameter('user', $user);

        return $query->getOneOrNullResult();

    }


    public function getProductActif()
    {
        $query = $this->getEntityManager()
            ->createQuery(
            "
            SELECT p
            FROM StoreBackendBundle:Product p
            WHERE p.active = 1"
            );

        return $query->getResult();
    }

    public function getProductInactif()
    {

        $query = $this->getEntityManager()
            ->createQuery(
            "
            SELECT p
            FROM StoreBackendBundle:Product p
            WHERE p.active = 0"
            );

        return $query->getResult();
    }

    public function getProductCover()
    {

        $query = $this->getEntityManager()
            ->createQuery(
                "
                SELECT p
                FROM StoreBackendBundle:Product p
                WHERE p.cover = 1"
            );

        return $query->getResult();
    }

    public function isHaveStock()
    {
        $query = $this->getEntityManager()
            ->createQuery(
            "
            SELECT p
            FROM StoreBackendBundle:Product p
            WHERE p.quantity = 0"
            );

        return $query->getResult();


    }


}