<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'members';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    protected $fillable = [
        'firstname',
        'middlenames',
        'lastname',
        'dob',
        'gender',
        'phone',
        'phone2',
        'firstJoin',
        'children',
        'maritalStatus',

        'spouse',
        'spouseId',
        'isSpouseAMember',

        'isBaptised',
        'churchOfBaptism',
        'placeOfBaptism',
        'dateOfBaptism',

        'streetName',
        'area',
        'town',
        'country',

        'placeOfBirth',
        'hometownName',
        'hometownLocation',
        'hometownRegion',
        'nationality',

        'isFatherAMember',
        'fathersId',
        'fathersName',
        'fathersPhone',

        'isMotherAMember',
        'mothersId',
        'mothersName',
        'mothersPhone',

        'isGuardianAMember',
        'guardiansId',
        'guardiansName',
        'guardiansPhone',
        'guardiansAddress',

        'isFamilyMemberAMember',
        'familyMembersId',
        'familyMemberName',
        'familyMembersPhone',
        'familyMembersAddress',

        'role',
        'designation',
        'isEmailVerified',
        'emailVerifiedAt',
        'username',
        'userpass',
        'email',
        'lastVisit',
        'updatedAt',
        'firstLogin',
        'lastLogin',
        'departments',
    ];

    protected $hidden = [];

    // ...

    /**
     * Create a new member.
     *
     * @param array $data
     * @return Members
     */
    public static function createMember(array $data): Members
    {
        return self::create($data);
    }

}
