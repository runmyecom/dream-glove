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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->string('status')->default(1);

            $table->string('name');
            $table->string('slug')->nullable()->unique();
            $table->string('mrp');
            $table->longText('description')->nullable();
            $table->string('keyword')->nullable();

            $table->string('thumbnail')->nullable();

            $table->string('bullet_1')->nullable();
            $table->string('bullet_2')->nullable();
            $table->string('bullet_3')->nullable();
            $table->string('bullet_4')->nullable();
            $table->string('bullet_5')->nullable();
            $table->string('bullet_6')->nullable();
            $table->string('category_name')->nullable();
            $table->foreignId('category_id')
                ->nullable()
                ->constrained('categories')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
