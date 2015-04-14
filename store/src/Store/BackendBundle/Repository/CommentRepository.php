<?php

namespace Store\BackendBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CommentRepository extends EntityRepository {

    /**
     * @param null $user
     * @return array
     */
    public function getCommentByUser($user = null)
    {
        $query = $this->getEntityManager()
            ->createQuery(
            "SELECT c
            FROM StoreBackendBundle:Comment c
            WHERE c.user = :user"
            )
            ->setParameter('user', $user);

        return $query->getResult();
    }

    public function getCountByUser($user = null)
    {
        $query = $this->getEntityManager()
            ->createQuery(
                "
                SELECT COUNT(c) AS nb
                FROM StoreBackendBundle:Comment c
                JOIN c.product p
                WHERE p.jeweler = :user"
            )
            ->setParameter('user', $user);

        return $query->getOneOrNullResult();
    }

} 