<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Work;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Work::create([
            'name' => 'Sam',
            'label' => "en=Branding|fr=Marque",
            'preview' => 'sam.png',
            'slug' => 'sam',
            'category' => "en=Branding Web development|fr=Développement Web marque",
            'client' => null,
            'year' => '2023',
            'description' => "en=The goal of this project was to create my own identity A web developer portfolio, and shows the skills that I have, the enthusiasm, desire, and the ability to complete technical challenges. I'm here to impress and standout from dozen of developer arround the world in the hiring process.|fr=Le but de ce projet était de créer ma propre identité. Un portfolio de développeur web, et montre les compétences que je possède, l'enthousiasme, l'envie et la capacité à relever des défis techniques. Je suis là pour impressionner et me démarquer des dizaines de développeurs à travers le monde dans le processus de recrutement."
        ]);
        Work::create([
            'name' => 'Lenergia',
            'label' => 'en=solar panels services|fr=services de panneaux solaires',
            'preview' => 'lenergia.png',
            'slug' => 'lenergia',
            'category' => 'en=Solar panel services website|fr=Site Web de services de panneaux solaires',
            'client' => 'Urban Call Center',
            'year' => '2023',
            'description' => 'en=Lenergia is a website that offers services such as installing solar panels photovoltaic, Thermal, hybrids and more..The main goal is to estimate the word budget and offers the best service based on clients budget.|fr=Lenergia est un site Web qui propose des services tels que l\'installation de panneaux solaires photovoltaïques, thermiques, hybrides et plus encore. L\'objectif principal est d\'estimer le budget mot et d\'offrir le meilleur service en fonction du budget du client.'
        ]);
        Work::create([
            'name' => 'Prixa',
            'label' => 'en=Annonce Website|fr=Site Web d\'annonce',
            'preview' => 'prixa.png',
            'slug' => 'prixa',
            'category' => 'en=Annonce Website for users to sell there own products online|fr=Site Web permettant aux utilisateurs de vendre leurs propres produits en ligne',
            'client' => 'Alt Code',
            'year' => '2022',
            'description' => 'en=Annonce application created in Inertia with vue3, This app offers the possibility to list your used or new item for sale, and then people can just visit the listing and call the seller by phone number or whatsapp or even visiting the owner\'s shops.|fr=Application d\'annonce créée dans Inertia avec vue3, cette application offre la possibilité de mettre en vente votre article d\'occasion ou neuf, puis les gens peuvent simplement visiter l\'annonce et appeler le vendeur par numéro de téléphone ou WhatsApp ou même visiter les boutiques du propriétaire.'
        ]);
        Work::create([
            'name' => 'Pharmagarde',
            'label' => 'en=find nearest pharmacy|fr=trouver la pharmacie la plus proche',
            'preview' => 'pharmagarde.png',
            'slug' => 'pharmagarde',
            'category' => 'en=Find nearest pharmacy that is open at a time|fr=Trouver la pharmacie la plus proche et ouverte à la fois',
            'client' => 'Alt Code',
            'year' => '2022',
            'description' => 'en=Pharmagarde an application that helps find out which Pharmacy is open at a certain time and list the nearest first.|fr=Pharmagarde une application qui permet de savoir quelle Pharmacie est ouverte à une certaine heure et de lister la plus proche en premier.'
        ]);
        Work::create([
            'name' => 'Formy',
            'label' => 'en=Showcase Website|fr=Site vitrine',
            'preview' => 'formy.png',
            'slug' => 'formy',
            'category' => 'en=Showcase Website|fr=Site vitrine',
            'client' => 'Formy Design',
            'year' => '2021',
            'description' => 'en=Formy is a Portfolio static website for a certain person that has been designed with only javascript and css.|fr=Formy est un site Web statique Portfolio destiné à une certaine personne et conçu uniquement avec Javascript et CSS.'
        ]);
    }
}
