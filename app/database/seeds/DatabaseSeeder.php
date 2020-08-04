<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('NightclubTableSeeder');
        $this->call('ConsumablesTableSeeder');
	}

}

class NightclubTableSeeder extends Seeder {

	public function run()
    {
        DB::table('nightclubs')->delete();

        Nightclub::create(array(
        		'name' => 'Manifesto Rockbar',
        		'address' => 'Rua Iguatemi, 36 - Itaim Bibi, São Paulo - SP',
        		'entrance' => 20,
        		'ratioMF' => 0.30
        ));
        Nightclub::create(array(
        		'name' => 'Woods Bar',
        		'address' => 'R. Quatá, 1016 - Itaim Bibi',
        		'entrance' => 60,
        		'ratioMF' => 0.70
        ));

    }
}

class ConsumablesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('drinks')->delete();
        DB::table('musics')->delete();
        DB::table('publics')->delete();

        Drink::create(array('name' => 'Cerveja'));
        Drink::create(array('name' => 'Vodka'));
        Drink::create(array('name' => 'Caipirinha'));

        Music::create(array('name' => 'Rock Alternativo'));
        Music::create(array('name' => 'Rock Progressivo'));
        Music::create(array('name' => 'Sertanejo'));
        Music::create(array('name' => 'Samba'));

        PublicStyle::create(array('name' => 'Alternativo'));
        PublicStyle::create(array('name' => 'Alta sociedade'));
        PublicStyle::create(array('name' => 'Universitário'));
    }
}
