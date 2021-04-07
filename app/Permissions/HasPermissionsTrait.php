<?php

namespace App\Permissions;

use App\Models\Permission;
use App\Models\Role;

trait HasPermissionsTrait
{
    // Добавляет выбранные права пользователю
    // В метод можно передать хоть сколько прав
    public function givePermissionsTo(...$permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        dd($permissions);
        if ($permissions === null) {
            return $this;
        }
        $this->permissions()->saveMany($permissions);
        return $this;
    }
    // Удалет выбранные права пользователю
    // В метод можно передать хоть сколько прав
    public function withdrawPermissionsTo(...$permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
        return $this;
    }
    // Изменяет все виды прав пользователя на новый массив
    // В метод можно передать хоть сколько прав
    public function refreshPermissions(...$permissions)
    {
        $this->permissions()->detach();
        return $this->givePermissionsTo($permissions);
    }
    // Возвращает true если у текущей роли пользователя есть право, или у пользователя есть право
    // Иначе возвращает false
    public function hasPermissionTo($permission)
    {
        return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission);
    }
    // Возвращает true если у текущей роли пользователя есть право
    // Иначе возвращает false
    public function hasPermissionThroughRole($permission)
    {

        foreach ($permission->roles as $role) {
            if ($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }
    // Возвращает true если у пользователя есть роль
    // Иначе возвращает false
    public function hasRole(...$roles)
    {

        foreach ($roles as $role) {
            if ($this->roles->contains('slug', $role)) {
                return true;
            }
        }
        return false;
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'users_roles');
    }
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'users_permissions');
    }

    protected function hasPermission($permission)
    {
        return (bool) $this->permissions->where('slug', $permission->slug)->count();
    }

    protected function getAllPermissions(array $permissions)
    {
        return Permission::whereIn('slug', $permissions)->get();
    }
}
