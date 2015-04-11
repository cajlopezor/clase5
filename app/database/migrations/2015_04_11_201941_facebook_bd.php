<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FacebookBd extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario', function(Blueprint $table)
		{
			$table->increments("id");
                        $table->string("nombre");
                        $table->string("correo");
                        $table->string("password");
                        $table->rememberToken();
                        
		});
                Schema::create('publicacion', function(Blueprint $table)
		{
			$table->increments("id");
                        $table->text("publicacion");
                        $table->boolean("tipo");
                        $table->integer("usuario_id")->unsigned();
                        $table->integer("padre")->unsigned()->nullable();
                        $table->foreign("usuario_id")->references("id")->on("usuario");
                        $table->foreign("padre")->references("id")->on("publicacion");
                        
                        $table->timestamps();
                        
		});
                Schema::create('me_gusta', function(Blueprint $table)
		{
			$table->increments("id");
                        $table->integer("usuario_id")->unsigned();
                        $table->integer("publicacion_id")->unsigned();
                        $table->foreign("usuario_id")->references("id")->on("usuario");
                        $table->foreign("publicacion_id")->references("id")->on("publicacion");
                        
                        $table->timestamps();
		});
                DB::table('usuario')
                        ->insert([
                            'nombre' => 'Carlos',
                            'correo' => 'cajlopezor@gmail.com',
                            'password' => Hash::make('123')
                        ]);


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
              Schema::drop("me_gusta");
              Schema::drop("publicacion");
		Schema::drop("usuario");
                
	}

}
