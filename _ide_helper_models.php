<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\DepositMethod
 *
 * @property int $id
 * @property string $name
 * @property string $image_url
 * @property float $fixed_deposit_fee
 * @property float $percentage_deposit_fee
 * @property int $status 0 => UnActive, 1 => Active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DepositMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepositMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepositMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|DepositMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepositMethod whereFixedDepositFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepositMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepositMethod whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepositMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepositMethod wherePercentageDepositFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepositMethod whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepositMethod whereUpdatedAt($value)
 */
	class DepositMethod extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read \App\Models\UserProfile|null $user_profile
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserProfile
 *
 * @property int $id
 * @property int $user_id
 * @property string $date_of_birth
 * @property string $country
 * @property string $city
 * @property string $address
 * @property string $postal_code
 * @property string $country_code
 * @property string $phone_number
 * @property string|null $avatar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereUserId($value)
 */
	class UserProfile extends \Eloquent {}
}

