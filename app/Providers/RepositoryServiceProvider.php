<?php

namespace App\Providers;

use App\Interfaces\IBase;
use App\Interfaces\IPermission;
use App\Interfaces\IRole;
use App\Interfaces\ITransaction;
use App\Repositories\BaseRepository;
use App\Repositories\PermissionRepository;
use App\Repositories\RoleRepository;
use App\Repositories\TransactionRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * repositories
     *
     * @var array
     */
    // protected $models = [
    //     'Base',
    //     'Transaction',
    //     'Role',
    // ];
    protected $repositories = [
        IBase::class => BaseRepository::class,
        ITransaction::class => TransactionRepository::class,
        IRole::class => RoleRepository::class,
        IPermission::class => PermissionRepository::class,
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
        foreach ($this->repositories as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }

        // foreach ($this->models as $idx => $model) {
        //     $this->app->bind("App\Interfaces\I{$model}", "App\Repositories\{$model}Repository");
        // }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
