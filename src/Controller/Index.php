<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Index
{
    public function __invoke(): Response
    {
        return new Response(
            '<html><body><h1>To Do DDD</h1></body></html>'
        );
    }
}
