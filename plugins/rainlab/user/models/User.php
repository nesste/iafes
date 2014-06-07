<?php namespace RainLab\User\Models;

use October\Rain\Auth\Models\User as UserBase;
use RainLab\User\Models\Financial as FinancialBase;
use RainLab\User\Models\Information as InformationBase;
use RainLab\User\Models\Assembly as AssemblyBase;

class User extends UserBase
{
    /**
     * @var string The database table used by the model.
     */
    protected $table = 'users';

    /**
     * Validation rules
     */
    public $rules = [
        'email' => 'required|between:3,64|email|unique:users',
        'password' => 'required:create|between:2,32|confirmed',
        'password_confirmation' => 'required_with:password|between:2,32'
    ];

    /**
     * @var array Relations
     */
    public $belongsToMany = [
        // 'groups' => ['RainLab\User\Models\Group', 'table' => 'users_groups']
    ];

    public $belongsTo = [
    	'country' => ['RainLab\User\Models\Country', 'table' => 'rainlab_user_countries'],
        'state' => ['RainLab\User\Models\State', 'table' => 'rainlab_user_states'],
        'university' => ['RainLab\User\Models\University', 'table' => 'rainlab_user_universities'],
        'position' => ['RainLab\User\Models\Position', 'table' => 'rainlab_user_positions']
    ];


    public $attachOne = [
        'avatar' => ['System\Models\File']
    ];

    /**
     * @var array The attributes that are mass assignable.
     */
    protected $fillable = ['name', 'email', 'password', 'password_confirmation','address'];

    /**
     * Purge attributes from data set.
     */
    protected $purgeable = ['password_confirmation'];

    protected static $loginAttribute = 'email';


    public function afterDelete()
    {
        $id = $this->id;
        InformationBase::where('user_id','=', $id)->delete();
        FinancialBase::where('user_id','=', $id)->delete();
        AssemblyBase::where('user_id','=', $id)->delete();
    }

    /**
     * Gets a code for when the user is persisted to a cookie or session which identifies the user.
     * @return string
     */
    public function getPersistCode()
    {
        if (!$this->persist_code)
            return parent::getPersistCode();

        return $this->persist_code;
    }

    /**
     * Returns the public image file path to this user's avatar.
     */
    public function getAvatarThumb($size = 25, $default = null)
    {
        if ($this->avatar)
            return $this->avatar->getThumb($size, $size);
        else
            return '//www.gravatar.com/avatar/' . md5(strtolower(trim($this->email))) . '?s='.$size.'&d='.urlencode($default);
    }


}
