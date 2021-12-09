<?php

namespace App\Repository\Interfaces;

use App\Entity\Attribute;
use App\Entity\Security;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @method Attribute|null find($id, $lockMode = null, $lockVersion = null)
 * @method Attribute[]    findById(array $id)
 * @method Attribute[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
interface AttributeRepositoryInterface
{
    public function save(Attribute $attribute): Attribute;

    public function delete(Attribute $attribute): Attribute;

    public function findByNameAndSecurity(Security $security, string $attributeName): ArrayCollection;
}
