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
}
