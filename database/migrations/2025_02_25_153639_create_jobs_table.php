<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Employer;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Employer::class);
            $table->string('title');
            $table->string('salary');
            $table->string('location');
            $table->string('url');
            $table->string('schedule')->default("full Time");
            $table->boolean('featured')->default(false);
            $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['job_seeker', 'employer'])->default('job_seeker');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
