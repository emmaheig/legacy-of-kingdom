<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import de la façade DB

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('choices')->insert([
            [
                'chapter_id' => 1, // Chapitre 1
                'content' => 'Partir vers la capitale, malgré l’inconnu et la peur',
                'next_chapter_id' => 2, // Renvoie au Chapitre 2
            ],
            [
                'chapter_id' => 1, // Chapitre 1
                'content' => 'Rester et travailler aux champs pour la famille d’accueil ',
                'next_chapter_id' => null, // Pas de chapitre suivant
            ],


            [
                'chapter_id' => 2, // Chapitre 2
                'content' => 'Tenter de négocier avec leur chef pour continuer',
                'next_chapter_id' => 3, // Renvoie au Chapitre 3
            ],
            [
                'chapter_id' => 2, // Chapitre 2
                'content' => 'Fuir dans la forêt voisine, espérant semer les bandits',
                'next_chapter_id' => null, // Pas de chapitre suivant
            ],



            [
                'chapter_id' => 3, // Chapitre 3
                'content' => 'Goûter la soupe de la cuisinière rivale, malgré la méfiance',
                'next_chapter_id' => null, // Pas de chapitre suivant
            ],
            [
                'chapter_id' => 3, // Chapitre 3
                'content' => 'Rester discrète et utiliser tes talents d’observation pour espionner',
                'next_chapter_id' => 4, // Renvoie au Chapitre 4
            ],



            [
                'chapter_id' => 4, // Chapitre 4
                'content' => 'Vendre le secret au marché noir pour t’enrichir',
                'next_chapter_id' => null, // Pas de chapitre suivant
            ],
            [
                'chapter_id' => 4, // Chapitre 4
                'content' => 'Avertir la garde impériale du complot',
                'next_chapter_id' => 5, // Renvoie au Chapitre 5
            ],


            [
                'chapter_id' => 5, // Chapitre 5
                'content' => 'Accepter et étudier les traités',
                'next_chapter_id' => 6, // Renvoie au Chapitre 6
            ],
            [
                'chapter_id' => 5, // Chapitre 5
                'content' => 'Refuser et rejoindre l’armée en tant que stratège novice',
                'next_chapter_id' => 7, // Renvoie au chapitre 7
            ],


            [
                'chapter_id' => 6, // Chapitre 6
                'content' => 'Proposer un plan diplomatique discret au chancelier',
                'next_chapter_id' => 8, // Renvoie au Chapitre 8
            ],
            [
                'chapter_id' => 6, // Chapitre 6
                'content' => 'Publier un manifeste appelant à l’unité des peuples',
                'next_chapter_id' => null, // Pas de chapitre suivant
            ],


            [
                'chapter_id' => 7, // Chapitre 7
                'content' => 'Observer silencieusement et suivre la voie de la loyauté',
                'next_chapter_id' => 9, // Renvoie au Chapitre 9
            ],
            [
                'chapter_id' => 7, // Chapitre 7
                'content' => 'T’allier à un officier corrompu pour grimper les grades',
                'next_chapter_id' => null, // Pas de chapitre suivant
            ],


            [
                'chapter_id' => 8, // Chapitre 8
                'content' => 'Présenter tes idées directement à l’empereur, en personne',
                'next_chapter_id' => null, // Pas de chapitre suivant
            ],
            [
                'chapter_id' => 8, // Chapitre 8
                'content' => 'Allouer discrètement des fonds pour reconstruire les villages ruinés',
                'next_chapter_id' => 10, // Renvoie au Chapitre 10
            ],



            [
                'chapter_id' => 9, // Chapitre 9
                'content' => 'Privilégier la discrétion et apprendre en observant',
                'next_chapter_id' => null, // Pas de chapitre suivant
            ],
            [
                'chapter_id' => 9, // Chapitre 9
                'content' => 'Proposer une stratégie audacieuse pour écraser l’ennemi',
                'next_chapter_id' => 11, // Renvoie au Chapitre 11
            ],


            [
                'chapter_id' => 10, // Chapitre 10
                'content' => 'Te laisser corrompre par les rentes et le luxe',
                'next_chapter_id' => null, // Pas de chapitre suivant
            ],
            [
                'chapter_id' => 10, // Chapitre 10
                'content' => 'Détourner des fonds pour bâtir hôpitaux et écoles',
                'next_chapter_id' => 12, // Renvoie au Chapitre 12
            ],


            [
                'chapter_id' => 11, // Chapitre 11
                'content' => 'Préférer la tranquillité de la bibliothèque impériale',
                'next_chapter_id' => null, // Pas de chapitre suivant
            ],
            [
                'chapter_id' => 11, // Chapitre 11
                'content' => 'Accepter le titre et endosser la responsabilité militaire',
                'next_chapter_id' => 13, // Renvoie au Chapitre 13
            ],


            [
                'chapter_id' => 12, // Chapitre 12
                'content' => 'Fonder une armée de civils loyaux pour sécuriser la paix',
                'next_chapter_id' => 14, // Renvoie au Chapitre 14
            ],
            [
                'chapter_id' => 12, // Chapitre 12
                'content' => 'Te retirer et mener une vie simple parmi les tiens',
                'next_chapter_id' => null, // Pas de chapitre suivant
            ],



            [
                'chapter_id' => 13, // Chapitre 13
                'content' => 'Tisser des alliances militaires avec les seigneurs provinciaux',
                'next_chapter_id' => 15, // Renvoie au Chapitre 15
            ],
            [
                'chapter_id' => 13, // Chapitre 13
                'content' => 'Orchestrer un coup d’État pour couper court aux intrigues',
                'next_chapter_id' => null, // Pas de chapitre suivant
            ],


            [
                'chapter_id' => 14, // Chapitre 14
                'content' => 'Usurper l’autorité et proclamer l’Empire unifié',
                'next_chapter_id' => null, // Pas de chapitre suivant
            ],
            [
                'chapter_id' => 14, // Chapitre 14
                'content' => 'Proposer une co-dirigeance fragile mais équitable',
                'next_chapter_id' => 16, // Renvoie au Chapitre 16
            ],


            [
                'chapter_id' => 15, // Chapitre 15
                'content' => 'Jouer ton rôle de princesse, persuader le prince de t’écouter',
                'next_chapter_id' => 17, // Renvoie au Chapitre 17
            ],
            [
                'chapter_id' => 15, // Chapitre 15
                'content' => 'Refuser et déclencher les hostilités',
                'next_chapter_id' => null, // Pas de chapitre suivant
            ],


            [
                'chapter_id' => 16, // Chapitre 16
                'content' => 'Laisser chaque royaume suivre son propre chemin',
                'next_chapter_id' => null, // Pas de chapitre suivant
            ],
            [
                'chapter_id' => 16, // Chapitre 16
                'content' => 'Proposer un Protectorat d’union éternelle',
                'next_chapter_id' => 18, // Renvoie au Chapitre 18
            ],



            [
                'chapter_id' => 17, // Chapitre 17
                'content' => 'Manigancer dans l’ombre pour obtenir plus',
                'next_chapter_id' => null, // Pas de chapitre suivant
            ],
            [
                'chapter_id' => 17, // Chapitre 17
                'content' => 'Gouverner avec compassion et équité',
                'next_chapter_id' => 19, // Renvoie au Chapitre 19
            ],


            [
                'chapter_id' => 18, // Chapitre 18
                'content' => 'Lancer des campagnes de conquêtes éclair',
                'next_chapter_id' => null, // Pas de chapitre suivant
            ],
            [
                'chapter_id' => 18, // Chapitre 18
                'content' => 'Rédiger une constitution durable',
                'next_chapter_id' => 19, // Renvoie au Chapitre 19
            ],



            [
                'chapter_id' => 19, // Chapitre 19
                'content' => 'Dissoudre l’ancien ordre et tout rebâtir',
                'next_chapter_id' => null, // Pas de chapitre suivant
            ],
            [
                'chapter_id' => 19, // Chapitre 19
                'content' => 'Sceller l’unité dans une cérémonie de paix',
                'next_chapter_id' => 20, // Renvoie au Chapitre 20
            ],


            [
                'chapter_id' => 20, // Chapitre 20
                'content' => 'Veux-tu recommencer l’histoire ?',
                'next_chapter_id' => 1, // Renvoie au Chapitre 1
            ],

        ]);
    }
}

