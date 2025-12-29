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
        Schema::create('check_ins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained('events')->onDelete('cascade');//constrains(event_id=events(id))//ondelete('cascade')->if event is deleted all related data will be deleted
            $table->string('attendee_mail');
                   
            
            $table->boolean('check_in')->default(true);
            $table->timestamps();

            $table->unique(['event_id', 'attendee_mail']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_ins');
    }
};
