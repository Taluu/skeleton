<?php
namespace App\Controller;

use Omnipay\Stripe\Gateway;
use Symfony\Component\HttpFoundation\Response;

final class Foo
{
    /** @var Gateway */
    private $gateway;

    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function __invoke(): Response
    {
        return new Response(null, 204);
    }
}
