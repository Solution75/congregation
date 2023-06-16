<?php

namespace App\DTO;

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
    public ?string $spouseId;
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
    public ?string $fathersId;
    public ?string $fathersName;
    public ?string $fathersPhone;

    public ?bool $isMotherAMember;
    public ?string $mothersId;
    public ?string $mothersName;
    public ?string $mothersPhone;

    public ?bool $isGuardianAMember;
    public ?string $guardiansId;
    public ?string $guardiansName;
    public ?string $guardiansPhone;
    public ?string $guardiansAddress;

    public ?bool $isFamilyMemberAMember;
    public ?string $familyMembersId;
    public ?string $familyMembersName;
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
            $this->firstname => $data['firstname'],
            $this->middlenames => $data['middlenames'] ?? null,
            $this->lastname => $data['lastname'],
            $this->dob => $data['dob'],
            $this->gender => $data['gender'],
            $this->phone => $data['phone'],
            $this->phone2 => $data['phone2'] ?? null,
            $this->firstJoin => $data['firstJoin'] ?? null,
            $this->children => json_encode($data['children']) ?? null,
            $this->maritalStatus => $data['maritalStatus'] ?? null,
            $this->spouse => $data['spouse'] ?? null,
            $this->spouseId => $data['spouseId'] ?? null,
            $this->isSpouseAMember => $data['isSpouseAMember'] ?? null,
            $this->isBaptised => $data['isBaptised'] ?? null,
            $this->churchOfBaptism => $data['churchOfBaptism'] ?? null,
            $this->placeOfBaptism => $data['placeOfBaptism'] ?? null,
            $this->dateOfBaptism => $data['dateOfBaptism'] ?? null,
            $this->streetName => $data['streetName'] ?? null,
            $this->area => $data['area'],
            $this->town => $data['town'],
            $this->country => $data['country'] ?? null,
            $this->placeOfBirth => $data['placeOfBirth'] ?? null,
            $this->hometownName => $data['hometownName'] ?? null,
            $this->hometownLocation => $data['hometownLocation'] ?? null,
            $this->hometownRegion => $data['hometownRegion'] ?? null,
            $this->nationality => $data['nationality'] ?? null,
            $this->isFatherAMember => $data['isFatherAMember'] ?? null,
            $this->fathersId => $data['fathersId'] ?? null,
            $this->fathersName => $data['fathersName'] ?? null,
            $this->fathersPhone => $data['fathersPhone'] ?? null,
            $this->isMotherAMember => $data['isMotherAMember'] ?? null,
            $this->mothersId => $data['mothersId'] ?? null,
            $this->mothersName => $data['mothersName'] ?? null,
            $this->mothersPhone => $data['mothersPhone'] ?? null,
            $this->isGuardianAMember => $data['isGuardianAMember'] ?? null,
            $this->guardiansId => $data['guardiansId'] ?? null,
            $this->guardiansName => $data['guardiansName'] ?? null,
            $this->guardiansPhone => $data['guardiansPhone'] ?? null,
            $this->guardiansAddress => $data['guardiansAddress'] ?? null,
            $this->isFamilyMemberAMember => $data['isFamilyMemberAMember'] ?? null,
            $this->familyMembersId => $data['familyMembersId'] ?? null,
            $this->familyMembersName => $data['familyMembersName'] ?? null,
            $this->familyMembersPhone => $data['familyMembersPhone'] ?? null,
            $this->familyMembersAddress => $data['familyMembersAddress'] ?? null,
            $this->role => $data['role'] ?? null,
            $this->designation => $data['designation'] ?? null,
            $this->isEmailVerified => $data['isEmailVerified'] ?? null,
            $this->emailVerifiedAt => $data['emailVerifiedAt'] ?? null,
            $this->username => $data['username'] ?? null,
            $this->userpass => $data['userpass'] ?? null,
            $this->email => $data['email'] ?? null,
            $this->lastVisit => $data['lastVisit'] ?? null,
            $this->updatedAt => $data['updatedAt'] ?? null,
            $this->firstLogin => $data['firstLogin'] ?? null,
            $this->lastLogin => $data['lastLogin'] ?? null,
            $this->departments => json_encode($data['departments']) ?? null,

            $this->field1 => json_encode($data['field1']) ?? null,
            $this->field2 => $data['field2'] ?? null,
            $this->field3 => json_encode($data['field3']) ?? null,
            $this->field4 => $data['field4'] ?? null,
            $this->field5 => json_encode($data['field5']) ?? null,
            $this->field6 => $data['field6'] ?? null,
            $this->field7 => json_encode($data['field7']) ?? null,
            $this->field8 => $data['field8'] ?? null,
            $this->field9 => json_encode($data['field9']) ?? null,
            $this->field10 => $data['field10'] ?? null,
            $this->field11 => json_encode($data['field11']) ?? null,
            $this->field12 => $data['field12'] ?? null,
        ];
    }
}
