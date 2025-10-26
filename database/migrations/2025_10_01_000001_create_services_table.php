<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(){
        Schema::create('services', function(Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('summary')->nullable();
            $table->text('content')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        DB::table('services')->insert([
            ['title'=>'Exhibition Stalls','summary'=>'Eye-catching, modular stalls','content'=>'Custom exhibition stall design and fabrication.','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Outdoor Advertising','summary'=>'Billboards, vehicle wraps','content'=>'High-impact outdoor advertising solutions.','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Offset Printing','summary'=>'High quality prints','content'=>'Brochures, flyers and catalogs production.','created_at'=>now(),'updated_at'=>now()]
        ]);
    }
    public function down(){ Schema::dropIfExists('services'); }
};
