<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(){
        Schema::create('teams', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('role')->nullable();
            $table->text('bio')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        DB::table('teams')->insert([
            ['name'=>'Vipul Rodrigues','role'=>'Founder','bio'=>'Founder with three decades of expertise in luxury goods.','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Scott Rodrigues','role'=>'Co-Founder','bio'=>'Luxury automotive specialist.','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Nixon Daniel','role'=>'Technology Head','bio'=>'Leads web & digital solutions.','created_at'=>now(),'updated_at'=>now()]
        ]);
    }
    public function down(){ Schema::dropIfExists('teams'); }
};
