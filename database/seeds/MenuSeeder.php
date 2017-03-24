<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Permission;
use App\Models\Menu;
use App\Models\Route;
use App\Models\Role;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ////////////////////////////////////
        // Create menu: root
        $menuRoot = Menu::create([
//            'id'            => 0,                   // Hard-coded
            'name'          => 'root',
            'label'         => 'Root',
            'position'      => 0,
            'icon'          => 'fa fa-folder',      // No point setting this as root is not visible.
            'separator'     => false,
            'url'           => null,                // No URL, root is not rendered or visible.
            'enabled'       => true,                // Must be enabled or sub-menus will not be available.
//            'parent_id'     => 0,                   // Parent of itself.
            'route_id'      => null,                // No route, root cannot be reached.
            'permission_id' => null,  // Must be visible to all, for all sub-menus to be visible.
        ]);
        // Force root parent to itself.
        $menuRoot->parent_id = $menuRoot->id;
        $menuRoot->save();
        // Create Home menu
        $menuHome = Menu::create([
            'name'          => 'home',
            'label'         => 'Home',
            'position'      => 0,
            'icon'          => 'fa fa-home fa-colour-green',
            'separator'     => false,
            'url'           => '/',
            'enabled'       => true,
            'parent_id'     => $menuRoot->id,       // Parent is root.
            'route_id'      => 1,      // Route to home
            'permission_id' => null,                // Get permission from route.
        ]);
        // Create Dashboard menu
        $menuDashboard = Menu::create([
            'name'          => 'dashboard',
            'label'         => 'Dashboard',
            'position'      => 0,
            'icon'          => 'fa fa-dashboard',
            'separator'     => false,
            'url'           => '/dashboard',
            'enabled'       => true,
            'parent_id'     => $menuHome->id,       // Parent is root.
            'route_id'      => 1,
            'permission_id' => null,                // Get permission from route.
        ]);
        // Create Admin container.
        $menuAdmin = Menu::create([
            'name'          => 'admin',
            'label'         => 'Admin',
            'position'      => 999,                 // Artificially high number to ensure that it is rendered last.
            'icon'          => 'fa fa-cog',
            'separator'     => false,
            'url'           => null,                // No url.
            'enabled'       => true,
            'parent_id'     => $menuRoot->id,       // Parent is root.
            'route_id'      => null,                // No route
            'permission_id' => null,                // Get permission from sub-items. If the user has permission to see/use
            // any sub-items, the admin menu will be rendered, otherwise it will
            // not.
        ]);
        // Create Audit sub-menu
        $menuAudit = Menu::create([
            'name'          => 'audit',
            'label'         => 'Audit',
            'position'      => 0,
            'icon'          => 'fa fa-binoculars',
            'separator'     => false,
            'url'           => null,                // Get URL from route.
            'enabled'       => true,
            'parent_id'     => $menuAdmin->id,      // Parent is admin.
            'route_id'      => 1,
            'permission_id' => null,                // Get permission from route.
        ]);
        // Create Error sub-menu
        $menuError = Menu::create([
            'name'          => 'error',
            'label'         => 'Error',
            'position'      => 1,
            'icon'          => 'fa fa-binoculars',
            'separator'     => false,
            'url'           => null,                // Get URL from route.
            'enabled'       => true,
            'parent_id'     => $menuAdmin->id,      // Parent is admin.
            'route_id'      => 1,
            'permission_id' => null,                // Get permission from route.
        ]);
        // Create Modules sub-menu
        $menuModules = Menu::create([
            'name'          => 'modules',
            'label'         => 'Modules',
            'position'      => 2,
            'icon'          => 'fa fa-puzzle-piece',
            'separator'     => false,
            'url'           => null,                // Get URL from route.
            'enabled'       => true,
            'parent_id'     => $menuAdmin->id,      // Parent is admin.
            'route_id'      => Route::where('name', 'like', "admin.modules.index")->get()->first()->id,
            'permission_id' => null,                // Get permission from route.
        ]);
        // Create Security container.
        $menuSecurity = Menu::create([
            'name'          => 'security',
            'label'         => 'Security',
            'position'      => 3,
            'icon'          => 'fa fa-user-secret fa-colour-red',
            'separator'     => false,
            'url'           => null,                // No url.
            'enabled'       => true,
            'parent_id'     => $menuAdmin->id,      // Parent is admin.
            'route_id'      => null,                // No route
            'permission_id' => null,                // Get permission from sub-items.
        ]);
        // Create Menus sub-menu
        $menuMenus = Menu::create([
            'name'          => 'menus',
            'label'         => 'Menus',
            'position'      => 0,
            'icon'          => 'fa fa-bars',
            'separator'     => false,
            'url'           => null,                // Get URL from route.
            'enabled'       => true,
            'parent_id'     => $menuSecurity->id,   // Parent is security.
            'route_id'      => Route::where('name', 'like', "admin.menus.index")->get()->first()->id,
            'permission_id' => null,                // Get permission from route.
        ]);
        // Create separator
        $menuUsers = Menu::create([
            'name'          => 'menus-users-separator',
            'label'         => '-----',
            'position'      => 1,
            'icon'          => null,
            'separator'     => true,
            'url'           => null,                // Get URL from route.
            'enabled'       => true,
            'parent_id'     => $menuSecurity->id,   // Parent is security.
            'route_id'      => null,
            'permission_id' => null,                // Get permission from route.
        ]);
        // Create Users sub-menu
        $menuUsers = Menu::create([
            'name'          => 'users',
            'label'         => 'Users',
            'position'      => 2,
            'icon'          => 'fa fa-user',
            'separator'     => false,
            'url'           => null,                // Get URL from route.
            'enabled'       => true,
            'parent_id'     => $menuSecurity->id,   // Parent is security.
            'route_id'      => Route::where('name', 'like', "admin.users.index")->get()->first()->id,
            'permission_id' => null,                // Get permission from route.
        ]);
        // Create Roles sub-menu
        $menuRoles = Menu::create([
            'name'          => 'roles',
            'label'         => 'Roles',
            'position'      => 3,
            'icon'          => 'fa fa-users',
            'separator'     => false,
            'url'           => null,                // Get URL from route.
            'enabled'       => true,
            'parent_id'     => $menuSecurity->id,   // Parent is security.
            'route_id'      => Route::where('name', 'like', "admin.roles.index")->get()->first()->id,
            'permission_id' => null,                // Get permission from route.
        ]);
        // Create Permissions sub-menu
        $menuPermissions = Menu::create([
            'name'          => 'permissions',
            'label'         => 'Permissions',
            'position'      => 4,
            'icon'          => 'fa fa-bolt',
            'separator'     => false,
            'url'           => null,                // Get URL from route.
            'enabled'       => true,
            'parent_id'     => $menuSecurity->id,   // Parent is security.
            'route_id'      => Route::where('name', 'like', "admin.permissions.index")->get()->first()->id,
            'permission_id' => null,                // Get permission from route.
        ]);
        // Create Routes sub-menu
        $menuRoutes = Menu::create([
            'name'          => 'routes',
            'label'         => 'Routes',
            'position'      => 5,
            'icon'          => 'fa fa-road',
            'separator'     => false,
            'url'           => null,                // Get URL from route.
            'enabled'       => true,
            'parent_id'     => $menuSecurity->id,   // Parent is security.
            'route_id'      => Route::where('name', 'like', "admin.routes.index")->get()->first()->id,
            'permission_id' => null,                // Get permission from route.
        ]);
        // Create Settings sub-menu
        $menuSettings = Menu::create([
            'name'          => 'setting',
            'label'         => 'Settings',
            'position'      => 4,
            'icon'          => 'fa fa-cogs',
            'separator'     => false,
            'url'           => null,                // Get URL from route.
            'enabled'       => true,
            'parent_id'     => $menuAdmin->id,      // Parent is admin.
            'route_id'      => 1,
            'permission_id' => null,                // Get permission from route.
        ]);

    }
}
