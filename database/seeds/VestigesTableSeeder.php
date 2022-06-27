<?php

use App\Vestige;
use App\Category;
use Illuminate\Database\Seeder;

class VestigesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vestige::create([
            'name' => 'Fenetres 3 styles / epoques',
            'slug' => 'fenetres-epoques',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a facilisis mi. Duis massa sapien, tempor vel accumsan vitae, euismod in sapien.',
            'price' => 6,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a facilisis mi. Duis massa sapien, tempor vel accumsan vitae, euismod in sapien. Proin luctus nec arcu non viverra. Curabitur sed varius ligula, in placerat velit. Aliquam iaculis a ex eget sollicitudin. Nam quis tristique quam. Phasellus blandit velit eget enim ultrices, id porttitor magna sollicitudin. Curabitur ligula dolor, hendrerit non auctor et, facilisis ut nisi. Nullam et accumsan ex, ac lobortis nisl. Aenean fermentum sem vitae malesuada facilisis. Morbi lorem est, gravida quis augue id, aliquet volutpat enim.',
            'category_id' => Category::all()->random()->id
       
        ]);

        Vestige::create([
            'name' => 'Roca  / Arc',
            'slug' => 'roca-arc',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a facilisis mi. Duis massa sapien, tempor vel accumsan vitae, euismod in sapien.',
            'price' => 6,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a facilisis mi. Duis massa sapien, tempor vel accumsan vitae, euismod in sapien. Proin luctus nec arcu non viverra. Curabitur sed varius ligula, in placerat velit. Aliquam iaculis a ex eget sollicitudin. Nam quis tristique quam. Phasellus blandit velit eget enim ultrices, id porttitor magna sollicitudin. Curabitur ligula dolor, hendrerit non auctor et, facilisis ut nisi. Nullam et accumsan ex, ac lobortis nisl. Aenean fermentum sem vitae malesuada facilisis. Morbi lorem est, gravida quis augue id, aliquet volutpat enim.',
            'category_id' => Category::all()->random()->id
       
        ]);

        Vestige::create([
            'name' => 'Place / Brandille',
            'slug' => 'place-brandille',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a facilisis mi. Duis massa sapien, tempor vel accumsan vitae, euismod in sapien.',
            'price' => 6,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a facilisis mi. Duis massa sapien, tempor vel accumsan vitae, euismod in sapien. Proin luctus nec arcu non viverra. Curabitur sed varius ligula, in placerat velit. Aliquam iaculis a ex eget sollicitudin. Nam quis tristique quam. Phasellus blandit velit eget enim ultrices, id porttitor magna sollicitudin. Curabitur ligula dolor, hendrerit non auctor et, facilisis ut nisi. Nullam et accumsan ex, ac lobortis nisl. Aenean fermentum sem vitae malesuada facilisis. Morbi lorem est, gravida quis augue id, aliquet volutpat enim.',
            'category_id' => Category::all()->random()->id
       
        ]);

        Vestige::create([
            'name' => 'Baies / Facade',
            'slug' => 'facade-balainvilliers',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a facilisis mi. Duis massa sapien, tempor vel accumsan vitae, euismod in sapien.',
            'price' => 6,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a facilisis mi. Duis massa sapien, tempor vel accumsan vitae, euismod in sapien. Proin luctus nec arcu non viverra. Curabitur sed varius ligula, in placerat velit. Aliquam iaculis a ex eget sollicitudin. Nam quis tristique quam. Phasellus blandit velit eget enim ultrices, id porttitor magna sollicitudin. Curabitur ligula dolor, hendrerit non auctor et, facilisis ut nisi. Nullam et accumsan ex, ac lobortis nisl. Aenean fermentum sem vitae malesuada facilisis. Morbi lorem est, gravida quis augue id, aliquet volutpat enim.',
            'category_id' => Category::all()->random()->id
       
        ]);

        Vestige::create([
            'name' => 'Baies / Roucher',
            'slug' => 'rue-roucher',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a facilisis mi. Duis massa sapien, tempor vel accumsan vitae, euismod in sapien.',
            'price' => 6,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a facilisis mi. Duis massa sapien, tempor vel accumsan vitae, euismod in sapien. Proin luctus nec arcu non viverra. Curabitur sed varius ligula, in placerat velit. Aliquam iaculis a ex eget sollicitudin. Nam quis tristique quam. Phasellus blandit velit eget enim ultrices, id porttitor magna sollicitudin. Curabitur ligula dolor, hendrerit non auctor et, facilisis ut nisi. Nullam et accumsan ex, ac lobortis nisl. Aenean fermentum sem vitae malesuada facilisis. Morbi lorem est, gravida quis augue id, aliquet volutpat enim.',
            'category_id' => Category::all()->random()->id
       
        ]);

        Vestige::create([
            'name' => 'Maison / medievale entiere',
            'slug' => 'maison-médiévale',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a facilisis mi. Duis massa sapien, tempor vel accumsan vitae, euismod in sapien.',
            'price' => 6,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a facilisis mi. Duis massa sapien, tempor vel accumsan vitae, euismod in sapien. Proin luctus nec arcu non viverra. Curabitur sed varius ligula, in placerat velit. Aliquam iaculis a ex eget sollicitudin. Nam quis tristique quam. Phasellus blandit velit eget enim ultrices, id porttitor magna sollicitudin. Curabitur ligula dolor, hendrerit non auctor et, facilisis ut nisi. Nullam et accumsan ex, ac lobortis nisl. Aenean fermentum sem vitae malesuada facilisis. Morbi lorem est, gravida quis augue id, aliquet volutpat enim.',
            'category_id' => Category::all()->random()->id
       
        ]);

        Vestige::create([
            'name' => 'Pila / St Gely',
            'slug' => 'pila-gély',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a facilisis mi. Duis massa sapien, tempor vel accumsan vitae, euismod in sapien.',
            'price' => 6,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a facilisis mi. Duis massa sapien, tempor vel accumsan vitae, euismod in sapien. Proin luctus nec arcu non viverra. Curabitur sed varius ligula, in placerat velit. Aliquam iaculis a ex eget sollicitudin. Nam quis tristique quam. Phasellus blandit velit eget enim ultrices, id porttitor magna sollicitudin. Curabitur ligula dolor, hendrerit non auctor et, facilisis ut nisi. Nullam et accumsan ex, ac lobortis nisl. Aenean fermentum sem vitae malesuada facilisis. Morbi lorem est, gravida quis augue id, aliquet volutpat enim.',
            'category_id' => Category::all()->random()->id
       
        ]);

        Vestige::create([
            'name' => 'Voute / Mtp',
            'slug' => 'voutes-ogives',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a facilisis mi. Duis massa sapien, tempor vel accumsan vitae, euismod in sapien.',
            'price' => 6,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a facilisis mi. Duis massa sapien, tempor vel accumsan vitae, euismod in sapien. Proin luctus nec arcu non viverra. Curabitur sed varius ligula, in placerat velit. Aliquam iaculis a ex eget sollicitudin. Nam quis tristique quam. Phasellus blandit velit eget enim ultrices, id porttitor magna sollicitudin. Curabitur ligula dolor, hendrerit non auctor et, facilisis ut nisi. Nullam et accumsan ex, ac lobortis nisl. Aenean fermentum sem vitae malesuada facilisis. Morbi lorem est, gravida quis augue id, aliquet volutpat enim.',
            'category_id' => Category::all()->random()->id
       
        ]); 
    }
}
