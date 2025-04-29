<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import de la façade DB

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chapters')->insert([
            [
                'title' => 'Chapitre 1 - La Fillette du Village -',
                'content' => 'Au petit matin, Mei se glisse hors de sa paillotte pour puiser l’eau du puits communal : l’odeur de la terre humide lui rappelle chaque matin sa condition d’orpheline. Autour d’elle, les rizières ondulent sous la brise et, au loin, les tambours de guerre grondent, préfigurant l’arrivée des troupes. Les anciens murmurent que la guerre ravage déjà les provinces voisines et que personne n’est à l’abri. Mei serre son sac de toile : elle sait que rester ici, c’est peut-être sceller son destin.',
            ],

            [
                'title' => 'Chapitre 2 -  Route périlleuse -',
                'content' => 'Sur la grand-route cabossée, Mei avance, attirée par l’éclat des tours de la cité impériale à l’horizon. Chaque charrette de marchand, chaque sentinelle lui rappelle qu’elle entre dans un monde où la survie se paie en sueur et en larmes. Le vent porte l’écho de chants de soldats et le cliquetis des armures, signe qu’elle n’est pas seule. Son cœur bat la chamade : un groupe de pillards bloque le chemin.',
            ],

            [
                'title' => 'Chapitre 3 -  Au service d’une caravane -',
                'content' => 'Le chef de la caravane, un homme à la barbe grisonnante, t’accueille comme servante : tu porteras l’eau, prépareras le feu et veilleras au bon ordre durant le voyage. Le soir, autour du feu, tu écoutes les récits d’horizons lointains : palais de jade, rizières infinies, et secrets impériaux. Tu sens déjà monter en toi une ambition sourde : apprendre, évoluer, peut-être un jour changer le cours de l’histoire.',
            ],

            [
                'title' => 'Chapitre 4 -  Sous l’aile d’un mandarin -',
                'content' => 'Tu arrives dans la demeure d’un haut fonctionnaire ; sa fille, Mei-ling, prend ta main et t’offre un logis. Dans la bibliothèque poussiéreuse, tu découvres des parchemins antiques décrivant la géopolitique des royaumes divisés. Chaque mot te nourrit d’une curiosité nouvelle : ici, l’écrit est le pouvoir. Mais tu apprends aussi qu’une conspiration se trame contre l’empereur.',
            ],

            [
                'title' => 'Chapitre 5 -  Audience à la cour -',
                'content' => 'La salle d’audience de la Cité Interdite te fascine : colonnes de marbre, soies chatoyantes, gardes immobiles. Le chancelier, courtois, t’écoute et reconnait ton talent pour déchiffrer les anciens textes. Il te propose un poste d’archiviste, avec logement au palais : une chance unique d’apprendre et d’influencer la politique.',
            ],

            [
                'title' => 'Chapitre 6 -  Les arcanes des textes -',
                'content' => 'Chaque matin, tu manipules des rouleaux en soie et tu traduis des traités de diplomatie. Tu découvres la trame des alliances et les failles des cités voisines. Ton esprit s’ouvre à la sagesse des grands philosophes : tu sens que la plume a plus de poids que l’épée.',
            ],

            [
                'title' => 'Chapitre 7 - Les tambours du camp -',
                'content' => 'Enfiler le tablier de cuisinière militaire te plonge dans l’effervescence des camps : campements, ordres hurlés, guerriers affamés. Tu surprends des conversations stratégiques et l’histoire se raconte aussi dans la braise des foyers de campagne.',
            ],

            [
                'title' => 'Chapitre 8 - L’art de la diplomatie -',
                'content' => 'Ton plan, fruit de longues recherches, convainc les ministres : on t’accorde le titre de maréchal civil. Tu t’installes dans un pavillon du palais, consciente du poids de tes décisions sur des millions de vies.',
            ],

            [
                'title' => 'Chapitre 9 - Le Prix du Courage -',
                'content' => 'Lors d’une réunion de guerre, tu sauves un général grièvement blessé en improvisant un garrot avec ta robe. Il te regarde avec gratitude : un lien de confiance indéfectible vient de naître.',
            ],

            [
                'title' => 'Chapitre 10 - Le Manoir de Jade -',
                'content' => 'Installée comme conseillère civile, tu vis dans un manoir où l’on t’offre mets raffinés et soieries. Bientôt, une voix intérieure te presse de ne pas oublier tes racines : le peuple souffre encore.',
            ],

            [
                'title' => 'Chapitre 11 - Victoire au crépuscule -',
                'content' => 'Grâce à ta stratégie, les troupes ennemies sont encerclées au crépuscule : un succès retentissant. L’empereur, ébloui, t’invite à porter l’armure de strategraphe suprême.',
            ],

            [
                'title' => 'Chapitre 12 - Les Cœurs Reconstruits -',
                'content' => 'Les hôpitaux se dressent, les écoles ouvrent leurs portes : tes actions redonnent espoir aux survivants. Bientôt, des paysans te considèrent comme leur protectrice.',
            ],

            [
                'title' => 'Chapitre 13 - Garde Céleste -',
                'content' => 'Nommée maréchal de la Garde Céleste, tu portes l’armure la plus pure, symbole d’une loyauté sans faille. Tu veilles à la sécurité de la capitale et deviens la protectrice du souverain.',
            ],

            [
                'title' => 'Chapitre 14 - Conseil des Cinq Royaumes -',
                'content' => 'Réunie dans la salle de jade, la délégation des cinq seigneurs écoute ton plaidoyer pour la paix. Les regards se croisent, certains empreints de méfiance, d’autres d’espoir.',
            ],

            [
                'title' => 'Chapitre 15 - Mariage d’Alliance -',
                'content' => 'Pour cimenter la paix, tu es contrainte d’épouser le prince du royaume du Levant. Sous la tente nuptiale, le pouvoir t’apparaît sous les oripeaux du sacrifice.',
            ],

            [
                'title' => 'Chapitre 16 - Paix éphémère -',
                'content' => 'Le pacte de co-dirigeance résiste quelques lunes, puis s’effrite avec la mort de l’empereur. Les seigneurs s’effraient de perdre leurs privilèges.',
            ],

            [
                'title' => 'Chapitre 17 - Impératrice de Cœur -',
                'content' => 'Mariée au prince, tu deviens co-Impératrice : ton sourire apaise les peuples, ta voix choisit la clémence. On t’appelle « la bienveillante ».',
            ],

            [
                'title' => 'Chapitre 18 - Protectorat des Justes -',
                'content' => 'Nommée régente, tu fais promulguer un code civil qui garantit droits et devoirs à chaque sujet. La paix s’installe, fragile mais réelle.',
            ],

            [
                'title' => 'Chapitre 19 - L’Héritière de l’Empire -',
                'content' => 'Grâce à ta sagesse et ton charisme, les seigneurs t’élisent Impératrice. Ton sceptre réunit enfin les cinq royaumes en une seule bannière.',
            ],

            [
                'title' => 'Chapitre 20 - L’Âge d’Or Retrouvé -',
                'content' => 'Sous ta couronne de jade, l’Empire renaît : les routes s’animent, les écoles fourmillent, les pagodes chantent la prospérité. Des poètes composent des odes à ton règne, et Mei, partie de rien, devient légende. --- FIN GLORIEUSE ---',
            ],
        ]);
    }
}
