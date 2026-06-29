<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('discount_codes', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->integer('percent');
            $table->boolean('used')->default(false);
            $table->string('used_by_email')->nullable();
            $table->timestamp('expires_at');
            $table->timestamps();
        });

        Schema::table('reservations', function (Blueprint $table) {
            $table->string('discount_code')->nullable()->after('note');
            $table->integer('discount_percent')->default(0)->after('discount_code');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('discount_codes');
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropColumn(['discount_code', 'discount_percent']);
        });
    }
};
