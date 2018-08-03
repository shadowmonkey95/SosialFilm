<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTableFbLogin extends Migration
{
    public function up()
    {
        if (Schema::hasColumn('users', 'facebook_id')) {
        } else {
            Schema::table('users', function ($table) {
                $table->string('facebook_id')->unique();
            });
        }
    }

    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('facebook_id');
        });
    }
}
