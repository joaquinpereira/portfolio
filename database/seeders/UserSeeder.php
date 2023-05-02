<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'email'=>'pereira.joaquin@gmail.com',
            'name'=>'Joaquin Pereira',
            'full_name'=>'Joaquin Adan Pereira Seijas',
            'about_short' => "<p>Soy un desarrollador con más de 9 años de experiencia, me considero una persona muy responsable, honesto, respetuoso, amigable, creativo, innovador, organizado y siempre muy dispuesto al trabajo duro aportando mis conocimientos.</p>
            <p>Me apasiona aprender y conocer cosas nuevas del desarrollo de software y me encanta participar en proyectos ambiciosos y complejos porque considero que son la mejor forma de consolidar el conocimiento a parte de la satisfacción de participar en el desarrollo de un producto.</p>",
            'about_long' => "<p>Nací en la hermosa ciudad de Mérida de los Andes de Venezuela, mi país pese a su caótica situación económica y política, es una hermosa nación con innumerables y variados paisajes naturales y con un pueblo muy solidario y alegre.<br><br>Desde mi infancia, me apasione por el mundo de la tecnología, dedicando largas horas a vídeos juegos y a explorar diferentes programas en mi computadora.<br><br>En la universidad al estudiar Bioánalis, compre una calculadora casio que contaba con un modulo de basic para programar pequeñas rutinas, dicha característica me ensimismo a tal punto que todas las formulas que veía en cálculo y estadística las programaba, pasaba muchas horas programando en basic hasta que un amigo estudiante de ingeniería me invito a asistir a una clase de programación en lenguaje C como oyente, lo que vi en esa clase me marco al punto que solo pensaba en programación y esto me llevo a la determinación de decidir a dedicar mi vida profesional a la informática.<br><br>Siendo estudiante de informática conocí personas destacadas en la programación y participe junto a compañeros de estudios en las olimpiadas Venezolana de informática, en la que obtuve lugares destacados en dichas competencias como Subcampeón y Campeón en programación en distintos años.<br><br>Al graduarme tuve la fortuna trabajar en el Centro Nacional de Tecnologías de la Información de la que obtuve una valiosa experiencia profesional y personal. Luego decidí dedicarme a trabajar en modo remoto y esto me ha permitido acumular una gran cantidad de experiencia, trabajando y conociendo a empresas y personas increíbles y maravillosas de todo el mundo.</p>",
            'telf' => '+584241343268',
            'avatar' => 't8jT2KpqrgBve4H2oEY0BNITv25oZW-metaYXZhdGFyNC5wbmc=-.png',
            'profession' => 'FullStack',
            'address' => 'Urbanización Los Samanes de Lecumberry, Calle D, Casa d-32 Del Tuy Edo.Miranda, Venezuela',
            'zip_code' => '1211',
        ]);

        $role = Role::create(['name' => 'Admin']);
        $user->assignRole($role);
    }
}
