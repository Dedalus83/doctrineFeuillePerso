<?php 

namespace orm\Generator;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Id\AbstractIdGenerator;
use Ramsey\Uuid\Uuid;

/**
 * {@inheritdoc}
 */
class IdGenerator extends AbstractIdGenerator
{
    /**
     * {@inheritdoc}
     */
    public function generate(EntityManager $em, $entity)
    {
        $uuid = Uuid::uuid4()->getHex();

        $classFullName = get_class($entity);
        $classFullNameArr = explode("\\", $classFullName);
        $lastIndex = count($classFullNameArr) - 1;
        $className = $classFullNameArr[$lastIndex];

        $uuid = $className . "/" . $uuid;

        

        if (null !== $em->getRepository($classFullName)->findOneBy(['id' => $uuid])) {
            $uuid = $this->generate($em, $entity);
        }

        return $uuid;
    }
}