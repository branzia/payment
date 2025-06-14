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
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->string('code');              // 'paypal', 'stripe', 'cod'
            $table->string('title');             // 'PayPal Express', 'Credit Card'
            $table->boolean('is_active')->default(true);
            $table->json('config')->nullable(); // Public key, secret, sandbox flag, etc.            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_methods');
    }
};
