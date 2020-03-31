<?php





namespace App\Repository;

    use App\Entity\Article;
    use App\Entity\User;
    use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
    use Doctrine\Common\Persistence\ManagerRegistry;

    /**
     * @method Article|null find($id, $lockMode = null, $lockVersion = null)
     * @method Article|null findOneBy(array $criteria, array $orderBy = null)
     * @method Article[]    findAll()
     * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
     */
class UserRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }


//    /**
//     * @return Article[] Returns an array of Article objects
//     */

  /*  public function findByEmail($value)
    {
        return $this->createQueryBuilder('app_user')
            ->andWhere('app_user.email = :val')
            //->setParameter('val', $value)
            ->setParameter('email', $value)
            ->orderBy('app_user.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }


    public function findOneBySomeField($value): ?Article
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

}