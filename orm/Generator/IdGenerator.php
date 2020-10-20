<?php 

namespace orm\Generator;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Id\AbstractIdGenerator;
use Ramsey\Uuid\Uuid;
use ORM\Entity\CharacterMagie;

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

        $tableName = $em->getClassMetadata($classFullName)->getTableName();

        $connection = $em->getConnection();
        $rows = $connection->fetchAll("SELECT * FROM $tableName WHERE id = '$uuid'");


        // $queryBuilder = $em->createQueryBuilder();

        //     $queryBuilder->select('u')
        //         ->from(CharacterMagie::class, 'u')
        //         ->where('u.id = :id');
        //          $query = $queryBuilder->getQuery();
        //          $resultat = $query->execute([ "id" => $uuid ]);

        // if (null !== $em->getRepository($classFullName)->findOneBy(['id' => $uuid]) && $em->getRepository($classFullName)->findOneBy([$resultat => $uuid])) {
        if(count($rows) != 0){
            $uuid = $this->generate($em, $entity);
        }

        return $uuid;
    }
}