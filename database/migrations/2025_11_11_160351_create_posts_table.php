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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body')->nullable();
            $table->dateTime('published_at')->nullable();
            $table->boolean('is_published')->default(true);
            $table->foreignId('user_id')
                ->index()
                ->constrained('users');
            $table->foreignId('category_id')
                ->index()
                ->nullable()
                ->constrained('categories');
            $table->timestamps();
            $table->softDeletes();

            $table->index(['is_published', 'published_at']); // для выборки опубликованных
            $table->index(['user_id', 'created_at']); // для ленты пользователя
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
