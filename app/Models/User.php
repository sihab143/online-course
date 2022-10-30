<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    private static $user;
    private static $Extension;
    private static $name;
    private static $imageName;
    private static $imageUrl;
    private static $directory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public static function getImageUrl($image)
    {
        self::$Extension = $image->getClientOriginalExtension();

        self::$name = Str::random('10');

        self::$imageName = self::$name.'.'.self::$Extension;

        self::$directory = 'user-images/';
        $image->move(self::$directory, self::$imageName);

        self::$imageUrl = self::$directory.self::$imageName;

        return self::$imageUrl;
    }
    public static function newUser($request)
    {
        self::$user = new User();
        self::$user->name = $request->name;
        self::$user->email = $request->email;
        self::$user->password = bcrypt($request->password);
        self::$user->image = self::getImageUrl($request->file('image'));
        self::$user->save();
    }

    public static function updateUser($request, $id)
    {
        self::$user = User::find($id);

        if($request->file('image'))
        {
            if(file_exists(self::$user->image))
            {
                unlink(self::$user->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else
        {
            self::$imageUrl = self::$user->image;
        }

        self::$user->name = $request->name;
        self::$user->email = $request->email;
        self::$user->password = bcrypt($request->password);
        self::$user->image = self::$imageUrl;
        self::$user->save();
    }

    public static function deleteUser($id)
    {
        self::$user = User::find($id);

        if(file_exists(self::$user->image))
        {
            unlink(self::$user->image);
        }
        self::$user->delete();
    }
}
