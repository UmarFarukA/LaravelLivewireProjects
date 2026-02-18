<?php

use App\Models\ApplicationForm;
use App\Models\Programme;
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
        Schema::create('available_programmes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ApplicationForm::class, 'application_form_id')
                ->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Programme::class, 'programme_id')
                ->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('app_start_date');
            $table->date('app_close_date');
            $table->string('academic_session');
            $table->string('application_fee');
            $table->tinyInteger('opend_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('available_programmes');
    }
};
