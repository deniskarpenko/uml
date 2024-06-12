<?php
declare(strict_types=1);

namespace Deniskarpenko\Uml\Http\Controllers;



use Deniskarpenko\Uml\Http\Requests\UmlRequest;

class UmlController extends Controller
{
    public function uml_diagram(UmlRequest $request): string
    {
        return "!!!!!!";
    }
}
