<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Doctrine\Bundle\MongoDBBundle\DoctrineMongoDBBundle::class => ['all' => true],
    Symfona\Bundle\JsonRequestBundle\JsonRequestBundle::class => ['all' => true],
    Symfona\JsonResponseBundle\JsonResponseBundle::class => ['all' => true],
    Symfona\PaginationBundle\PaginationBundle::class => ['all' => true],
    Symfona\Pagination\Doctrine\MongoDB\AdapterBundle\AdapterBundle::class => ['all' => true],
];
