<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

final class DefaultController
{
    #[Route(methods: ['GET'])]
    public function index(): array
    {
        return ['version' => '1.0.0'];
    }
}
