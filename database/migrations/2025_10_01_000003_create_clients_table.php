<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(){
        Schema::create('clients', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('logo')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        DB::table('clients')->insert([
            ['name'=>'ICICI Bank','notes'=>'Banking client','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Lipton','notes'=>'FMCG client','created_at'=>now(),'updated_at'=>now()]
        ]);
    }
    public function down(){ Schema::dropIfExists('clients'); }
};
