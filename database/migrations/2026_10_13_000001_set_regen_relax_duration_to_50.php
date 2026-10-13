<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('services')->where('slug', 'regen-relax')->update(['duration' => 50]);
    }

    public function down(): void
    {
        DB::table('services')->where('slug', 'regen-relax')->update(['duration' => 60]);
    }
};
