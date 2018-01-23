<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ExampleController
{
    public function index(Request $request)
    {
        return new JsonResponse(
            (array)$request->request->all()
        );
    }
}