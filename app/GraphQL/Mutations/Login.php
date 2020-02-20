<?php

namespace App\GraphQL\Mutations;

use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use Joselfonseca\LighthouseGraphQLPassport\GraphQL\Mutations\BaseAuthResolver as BaseAuthResolver;
use App\User;

class Login extends BaseAuthResolver
{
    /**
     * @param $rootValue
     * @param array $args
     * @param \Nuwave\Lighthouse\Support\Contracts\GraphQLContext|null $context
     * @param \GraphQL\Type\Definition\ResolveInfo $resolveInfo
     * @return array
     * @throws \Exception
     */
    public function resolve($rootValue, array $args, GraphQLContext $context = null, ResolveInfo $resolveInfo)
    {
        $credentials = $this->buildCredentials($args);
        $response =  $this->makeRequest($credentials);
      //  $model = User::class;
      //  error_log($args['data']['username']);
        $user =  User::where('username',"=", $args['data']['username'])->firstOrFail();
        $response['user'] = $user;
        return $response;
    }
    

}
