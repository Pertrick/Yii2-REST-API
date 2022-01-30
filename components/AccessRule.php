<?php

namespace app\components;
use app\models\User;


class AccessRule extends \yii\filters\AccessRule 
{
    /**
     * @inheritdoc
     */
    protected function matchRole($user)
    {
        if (empty($this->roles)) {
                 return true;
        }
       
        $isGuest = $user->getIsGuest();
        
            foreach ($this->roles as $role) {
                    switch($role) {
                            case '?':
                            return ($isGuest) ? true : false;
                            case User::ROLE_USER:
                            return (!$isGuest) ? true : false;
                            case $user->identity->role: // Check if the user is logged in, and the roles match
                                return (!$isGuest) ? true : false;
                        default: return false;
                        }
                }
                 return false;
    }
}
