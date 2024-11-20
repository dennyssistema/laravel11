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
        Schema::table('courses', function(Blueprint $table){
            //After = depois da coluna name criar a coluna price. Valor padrão 0
            $table->float('price')->after('name')->default(0);
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function(Blueprint $table){
            $table->dropColumn('price');
        });        
    }
};
