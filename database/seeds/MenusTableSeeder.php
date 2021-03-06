<?php

use Illuminate\Database\Seeder;

use App\Models\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*菜单*/
        $menu = new Menu;
        $menu->name = "菜单管理";
        $menu->parent_id = 0;
        $menu->slug = "admin.menus.manage";
        $menu->description = "显示菜单管理";
        $menu->url = "menu";
        $menu->save();

        $menulist = new Menu;
        $menulist->name = "菜单列表";
        $menulist->parent_id = $menu->id;
        $menulist->slug = "admin.menus.list";
        $menulist->description = "显示菜单列表";
        $menulist->url = "menu/show";
        $menulist->save();

        /*角色*/
        $role = new Menu;
        $role->name = "角色管理";
        $role->parent_id = 0;
        $role->slug = "admin.roles.manage";
        $role->description = "显示角色管理";
        $role->url = "role";
        $role->save();

        $rolelist = new Menu;
        $rolelist->name = "角色列表";
        $rolelist->parent_id = $role->id;
        $rolelist->slug = "admin.roles.list";
        $rolelist->description = "显示角色列表";
        $rolelist->url = "role/show";
        $rolelist->save();

        /*权限*/
        $permission = new Menu; 
        $permission->name = "权限管理";
        $permission->parent_id = 0;
        $permission->slug = "admin.permissions.manage";
        $permission->description = "显示权限管理";
        $permission->url = "permission";
        $permission->save();

        $permissionlist = new Menu;
        $permissionlist->name = "权限列表";
        $permissionlist->parent_id = $permission->id;
        $permissionlist->slug = "admin.permissions.list";
        $permissionlist->description = "显示权限列表";
        $permissionlist->url = "permission/show";
        $permissionlist->save();

        /*用户*/
        $user = new Menu;
        $user->name = "用户管理";
        $user->parent_id = 0;
        $user->slug = "admin.users.manage";
        $user->description = "显示用户管理";
        $user->url = "user";
        $user->save();

        $userlist = new Menu;
        $userlist->name = "用户列表";
        $userlist->parent_id = $user->id;
        $userlist->slug = "admin.users.list";
        $userlist->description = "显示用户列表";
        $userlist->url = "user/show";
        $userlist->save();

        /*个人首页*/
        $adminPage = new Menu;
        $adminPage->name = "用户首页";
        $adminPage->parent_id = 0;
        $adminPage->slug = "admin.page.show";
        $adminPage->description = "显示用户个人后台首页";
        $adminPage->url = "admin/index";
        $adminPage->save();

        /*日志管理*/
        $logManage = new Menu;
        $logManage->name = "日志管理";
        $logManage->parent_id = 0;
        $logManage->slug = "admin.logs.manage";
        $logManage->description = "显示日志管理列表";
        $logManage->url = "log";
        $logManage->save();

        $logOverall = new Menu;
        $logOverall->name = "日志总览";
        $logOverall->parent_id = $logManage->id;
        $logOverall->slug = "admin.logs.all";
        $logOverall->description = "显示日志总览";
        $logOverall->url = "log/log-viewer";
        $logOverall->save();

        $logList = new Menu;
        $logList->name = "日志列表";
        $logList->parent_id = $logManage->id;
        $logList->slug = "admin.logs.list";
        $logList->description = "显示日志列表";
        $logList->url = "log/log-viewer/logs";
        $logList->save();
    }
}
