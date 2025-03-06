<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->text('description')->nullable();
            $table->date('acquisition_date');
            $table->decimal('acquisition_value', 15, 2);
            $table->decimal('current_value', 15, 2);
            $table->enum('status', ['active', 'maintenance', 'disposed', 'lost', 'reserved'])->default('active');
            $table->foreignId('category_id')->constrained()->onDelete('restrict');
            $table->foreignId('location_id')->constrained()->onDelete('restrict');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->text('notes')->nullable();
            $table->date('warranty_expiration')->nullable();
            $table->string('supplier')->nullable();
            $table->string('invoice_number')->nullable();
            $table->integer('expected_lifetime_years')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
