<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Créer quatre voitures par défaut
        DB::table('cars')->insert([
                [
                    'brand' => 'Toyota',
                    'model' => 'Camry',
                    'year' => 2022,
                    'registration_number' => 'ABC123',
                    'images' => 'assets/v1.webp',
                    'availability' => 1,
                    'description' => 'Cette voiture est une berline élégante et performante. Avec son design moderne et ses caractéristiques avancées, elle offre une expérience de conduite exceptionnelle.',
                ],
                [
                    'brand' => 'Honda',
                    'model' => 'Accord',
                    'year' => 2021,
                    'registration_number' => 'XYZ456',
                    'images' => 'assets/v2.jpg',
                    'availability' => 1,
                    'description' => 'Cette voiture est une berline élégante et performante. Avec son design moderne et ses caractéristiques avancées, elle offre une expérience de conduite exceptionnelle.',
                ],
                [
                    'brand' => 'Ford',
                    'model' => 'Mustang',
                    'year' => 2023,
                    'registration_number' => 'DEF789',
                    'images' => 'assets/v3.jpg',
                    'availability' => 1,
                    'description' => 'Cette voiture est une berline élégante et performante. Avec son design moderne et ses caractéristiques avancées, elle offre une expérience de conduite exceptionnelle.',
                ],
                [
                    'brand' => 'Chevrolet',
                    'model' => 'Camaro',
                    'year' => 2022,
                    'registration_number' => 'GHI012',
                    'images' => 'assets/v4.jpg',
                    'availability' => 1,
                    'description' => 'Cette voiture est une berline élégante et performante. Avec son design moderne et ses caractéristiques avancées, elle offre une expérience de conduite exceptionnelle.',
                ],
                [
                    'brand' => 'Tesla',
                    'model' => 'Model 3',
                    'year' => 2022,
                    'registration_number' => 'JKL345',
                    'images' => 'assets/v5.jpg',
                    'availability' => 1,
                    'description' => 'Cette voiture est une berline élégante et performante. Avec son design moderne et ses caractéristiques avancées, elle offre une expérience de conduite exceptionnelle.',
                ],          
                [
                    'brand' => 'Toyota',
                    'model' => 'Corolla',
                    'year' => 2021,
                    'registration_number' => 'MNO678',
                    'images' => 'assets/v6.jpg',
                    'availability' => 1,
                    'description' => 'Une voiture compacte et fiable, idéale pour la conduite en ville et les longs trajets grâce à son efficacité énergétique.',
                ],
                
                [
                    'brand' => 'BMW',
                    'model' => 'X5',
                    'year' => 2020,
                    'registration_number' => 'PQR910',
                    'images' => 'assets/v7.jpg',
                    'availability' => 0,
                    'description' => 'Un SUV haut de gamme offrant confort, espace et performances exceptionnelles, parfait pour les familles et les aventuriers.',
                ],
                
                [
                    'brand' => 'Mercedes-Benz',
                    'model' => 'C-Class',
                    'year' => 2023,
                    'registration_number' => 'STU112',
                    'images' => 'assets/v8.jpg',
                    'availability' => 1,
                    'description' => 'Une berline de luxe avec des technologies innovantes et un intérieur raffiné, idéale pour ceux qui recherchent l\'élégance et le confort.',
                ],
                
                [
                    'brand' => 'Ford',
                    'model' => 'Mustang',
                    'year' => 2022,
                    'registration_number' => 'VWX234',
                    'images' => 'assets/v9.jpg',
                    'availability' => 1,
                    'description' => 'Une voiture de sport emblématique avec des performances puissantes et un style audacieux, parfaite pour les amateurs de sensations fortes.',
                ],
                
                [
                    'brand' => 'Honda',
                    'model' => 'Civic',
                    'year' => 2019,
                    'registration_number' => 'YZ1234',
                    'images' => 'assets/v10.jpg',
                    'availability' => 0,
                    'description' => 'Une voiture compacte fiable et économique, avec un intérieur spacieux et des fonctionnalités modernes pour un confort optimal.',
                ],
                
        ]);
    }
}
