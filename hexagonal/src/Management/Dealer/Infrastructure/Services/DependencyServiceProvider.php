<?php

namespace Src\Management\Dealer\Infrastructure\Services;

use Src\Shared\Infrastructure\Services\DependencyServiceProvider as ServiceProvider;
class DependencyServiceProvider extends ServiceProvider
{

    public function __construct($app)
    {
        $this->setDependency([
            [
                'useCase' => [
                    \Src\Management\Dealer\Application\Dealers\DealersUseCase::class
                ],
                "contract" => \Src\Management\Dealer\Domain\Contracts\DealerRepositoryContract::class,
                "repository" => \Src\Management\Dealer\Infrastructure\Repositories\Eloquent\DealerRepository::class

            ],
            [
                'useCase' => [
                    \Src\Management\Dealer\Application\Dealers\DealersFilterUseCase::class
                ],
                "contract" => \Src\Management\Dealer\Domain\Contracts\DealerFilterRepositoryContract::class,
                "repository" => \Src\Management\Dealer\Infrastructure\Repositories\Eloquent\DealerFilterRepository::class

            ],
            [
                'useCase' => [
                    \Src\Management\Dealer\Application\Dealers\DealerCreateUseCase::class
                ],
                "contract" => \Src\Management\Dealer\Domain\Contracts\DealerCreateRepositoryContract::class,
                "repository" => \Src\Management\Dealer\Infrastructure\Repositories\Eloquent\DealerCreateRepository::class

            ]
        ]);
        parent::__construct($app);
    }


}
