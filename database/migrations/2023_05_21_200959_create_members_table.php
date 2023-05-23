<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('firstname');
            $table->string('middlenames')->nullable();
            $table->string('lastname');
            $table->dateTimeTz('dob');
            $table->enum('gender', ['male', 'female']);
            $table->string('phone')->nullable();
            $table->string('phone2')->nullable();
            $table->dateTimeTz('firstJoin')->nullable();
            $table->json('children')->nullable();
            $table->enum('maritalStatus', ['single', 'married', 'divorced', 'widowed'])->default('single');
            //Spouse Information if any
            $table->string('spouse')->nullable();
            $table->string('spouseId')->nullable();
            $table->boolean('isSpouseAMember')->nullable();
            //Baptismal information
            $table->boolean('isBaptised')->nullable();
            $table->string('churchOfBaptism')->nullable();
            $table->string('placeOfBaptism')->nullable();
            $table->dateTimeTz('dateOfBaptism')->nullable();
            // Addresss
            $table->string('streetName')->nullable();
            $table->string('area')->nullable();
            $table->string('town')->nullable();
            $table->string('country')->nullable();
            // Hometown
            $table->string('placeOfBirth')->nullable();
            $table->string('hometownName')->nullable();
            $table->string('hometownLocation')->nullable();
            $table->string('hometownRegion')->nullable();
            $table->string('nationality')->nullable();
                //Father
            $table->boolean('isFatherAMember')->nullable();
            $table->string('fathersId')->nullable();
            $table->string('fathersName')->nullable();
            $table->string('fathersPhone')->nullable();
                //Mother
            $table->boolean('isMotherAMember')->nullable();
            $table->string('mothersId')->nullable();
            $table->string('mothersName')->nullable();
            $table->string('mothersPhone')->nullable();
                //Guardian
            $table->boolean('isGuardianAMember')->nullable();
            $table->string('guardiansId')->nullable();
            $table->string('guardiansName')->nullable();
            $table->string('guardiansPhone')->nullable();
            $table->string('guardiansAddress')->nullable();
                //Family Member
            $table->boolean('isFamilyMemberAMember')->nullable();
            $table->string('familyMembersId')->nullable();
            $table->string('familyMembersName')->nullable();
            $table->string('familyMembersPhone')->nullable();
            $table->string('familyMembersAddress')->nullable();
            //Account information
            $table->string('role')->nullable();
            $table->string('designation')->nullable();
            $table->boolean('isEmailVerified')->default(false)->nullable();
            $table->dateTimeTz('emailVerifiedAt')->nullable();
            $table->string('username')->nullable();
            $table->string('userpass')->nullable();
            $table->string('email')->unique()->nullable();
            $table->dateTimeTz('lastVisit', $precision = 0)->nullable();
            $table->dateTimeTz('createdAt')->default(now());
            $table->dateTimeTz('updatedAt')->nullable();
            $table->dateTimeTz('firstLogin')->nullable();
            $table->dateTimeTz('lastLogin')->nullable();
            $table->json('departments')->nullable();

            //optional frontend fields
            $table->json('field1')->nullable();
            $table->string('field2')->nullable();
            $table->json('field3')->nullable();
            $table->string('field4')->nullable();
            $table->json('field5')->nullable();
            $table->string('field6')->nullable();
            $table->json('field7')->nullable();
            $table->string('field8')->nullable();
            $table->json('field9')->nullable();
            $table->string('field10')->nullable();
            $table->json('field11')->nullable();
            $table->string('field12')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
