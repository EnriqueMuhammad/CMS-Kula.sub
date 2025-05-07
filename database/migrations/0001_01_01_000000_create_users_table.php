<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['admin', 'writer'])->default('writer');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->string('status')->default(true);
            $table->string('profile_picture')->nullable();
            $table->string('bio')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('social_links')->nullable();
            $table->string('preferences')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_device')->nullable();
            $table->string('last_login_browser')->nullable();
            $table->string('last_login_os')->nullable();
            $table->string('last_login_location')->nullable();
            $table->string('last_login_country')->nullable();
            $table->string('last_login_city')->nullable();
            $table->string('last_login_region')->nullable();
            $table->string('last_login_postal_code')->nullable();
            $table->string('last_login_latitude')->nullable();
            $table->string('last_login_longitude')->nullable();
            $table->string('last_login_timezone')->nullable();
            $table->string('last_login_device_type')->nullable();
            $table->string('last_login_device_name')->nullable();
            $table->string('last_login_device_model')->nullable();
            $table->string('last_login_device_brand')->nullable();
            $table->string('last_login_device_os')->nullable();
            $table->string('last_login_device_os_version')->nullable();
            $table->string('last_login_device_browser')->nullable();
            $table->string('last_login_device_browser_version')->nullable();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
