<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

use Illuminate\Support\Facades\Auth;

final readonly class MeQuery
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        return Auth::user();
    }
}
