<?php


namespace Store\BackendBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CommentRepository extends EntityRepository {


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

} 