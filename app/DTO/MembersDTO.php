<?php

namespace App\DTO;

use function MongoDB\BSON\toJSON;

class MembersDTO
{
    public ?string $firstname;
    public ?string $middlenames;
    public ?string $lastname;
    public ?string $dob;
    public ?string $gender;
    public ?string $phone;
    public ?string $phone2;
    public ?string $firstJoin;
    public ?string $children;
    public ?string $maritalStatus;

    public ?string $spouse;
    public ?int $spouseId;
    public ?bool $isSpouseAMember;

    public ?bool $isBaptised;
    public ?string $churchOfBaptism;
    public ?string $placeOfBaptism;
    public ?string $dateOfBaptism;

    public ?string $streetName;
    public ?string $area;
    public ?string $town;
    public ?string $country;

    public ?string $placeOfBirth;
    public ?string $hometownName;
    public ?string $hometownLocation;
    public ?string $hometownRegion;
    public ?string $nationality;

    public ?bool $isFatherAMember;
    public ?int $fathersId;
    public ?string $fathersName;
    public ?string $fathersPhone;

    public ?bool $isMotherAMember;
    public ?int $mothersId;
    public ?string $mothersName;
    public ?string $mothersPhone;

    public ?bool $isGuardianAMember;
    public ?int $guardiansId;
    public ?string $guardiansName;
    public ?string $guardiansPhone;
    public ?string $guardiansAddress;

    public ?bool $isFamilyMemberAMember;
    public ?int $familyMembersId;
    public ?string $familyMemberName;
    public ?string $familyMembersPhone;
    public ?string $familyMembersAddress;

    public ?string $role;
    public ?string $designation;
    public ?bool $isEmailVerified;
    public ?string $emailVerifiedAt;
    public ?string $username;
    public ?string $userpass;
    public ?string $email;
    public ?string $lastVisit;
    public ?string $updatedAt;
    public ?string $firstLogin;
    public ?string $lastLogin;
    public ?string $departments;

    public ?string $field1;
    public ?string $field2;
    public ?string $field3;
    public ?string $field4;
    public ?string $field5;
    public ?string $field6;
    public ?string $field7;
    public ?string $field8;
    public ?string $field9;
    public ?string $field10;
    public ?string $field11;
    public ?string $field12;

    public function mapData(array $data)
    {
        return [
            'firstname' => $data['firstname'],
            'middlenames' => $data['middlenames'] ?? null,
            'lastname' => $data['lastname'],
            'dob' => $data['dob'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'phone2' => $data['phone2'] ?? null,
            'firstJoin' => $data['firstJoin'] ?? null,
            'children' => json_encode($data['children']) ?? null,
            'maritalStatus' => $data['maritalStatus'] ?? null,
            'spouse' => $data['spouse'] ?? null,
            'spouseId' => $data['spouseId'] ?? null,
            'isSpouseAMember' => $data['isSpouseAMember'] ?? null,
            'isBaptised' => $data['isBaptised'] ?? null,
            'churchOfBaptism' => $data['churchOfBaptism'] ?? null,
            'placeOfBaptism' => $data['placeOfBaptism'] ?? null,
            'dateOfBaptism' => $data['dateOfBaptism'] ?? null,
            'streetName' => $data['streetName'] ?? null,
            'area' => $data['area'],
            'town' => $data['town'],
            'country' => $data['country'] ?? null,
            'placeOfBirth' => $data['placeOfBirth'] ?? null,
            'hometownName' => $data['hometownName'] ?? null,
            'hometownLocation' => $data['hometownLocation'] ?? null,
            'hometownRegion' => $data['hometownRegion'] ?? null,
            'nationality' => $data['nationality'] ?? null,
            'isFatherAMember' => $data['isFatherAMember'] ?? null,
            'fathersId' => $data['fathersId'] ?? null,
            'fathersName' => $data['fathersName'] ?? null,
            'fathersPhone' => $data['fathersPhone'] ?? null,
            'isMotherAMember' => $data['isMotherAMember'] ?? null,
            'mothersId' => $data['mothersId'] ?? null,
            'mothersName' => $data['mothersName'] ?? null,
            'mothersPhone' => $data['mothersPhone'] ?? null,
            'isGuardianAMember' => $data['isGuardianAMember'] ?? null,
            'guardiansId' => $data['guardiansId'] ?? null,
            'guardiansName' => $data['guardiansName'] ?? null,
            'guardiansPhone' => $data['guardiansPhone'] ?? null,
            'guardiansAddress' => $data['guardiansAddress'] ?? null,
            'isFamilyMemberAMember' => $data['isFamilyMemberAMember'] ?? null,
            'familyMembersId' => $data['familyMembersId'] ?? null,
            'familyMembersName' => $data['familyMembersName'] ?? null,
            'familyMembersPhone' => $data['familyMembersPhone'] ?? null,
            'familyMembersAddress' => $data['familyMembersAddress'] ?? null,
            'role' => $data['role'] ?? null,
            'designation' => $data['designation'] ?? null,
            'isEmailVerified' => $data['isEmailVerified'] ?? null,
            'emailVerifiedAt' => $data['emailVerifiedAt'] ?? null,
            'username' => $data['username'] ?? null,
            'userpass' => $data['userpass'] ?? null,
            'email' => $data['email'] ?? null,
            'lastVisit' => $data['lastVisit'] ?? null,
            'updatedAt' => $data['updatedAt'] ?? null,
            'firstLogin' => $data['firstLogin'] ?? null,
            'lastLogin' => $data['lastLogin'] ?? null,
            'departments' => json_encode($data['departments']) ?? null,

            'field1' => json_encode($data['field1']) ?? null,
            'field2' => $data['field2'] ?? null,
            'field3' => json_encode($data['field3']) ?? null,
            'field4' => $data['field4'] ?? null,
            'field5' => json_encode($data['field5']) ?? null,
            'field6' => $data['field6'] ?? null,
            'field7' => json_encode($data['field7']) ?? null,
            'field8' => $data['field8'] ?? null,
            'field9' => json_encode($data['field9']) ?? null,
            'field10' => $data['field10'] ?? null,
            'field11' => json_encode($data['field11']) ?? null,
            'field12' => $data['field12'] ?? null,
        ];
    }
}
