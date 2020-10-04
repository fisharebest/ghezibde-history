<?php

/**
 * Example module.
 */

declare(strict_types=1);

namespace Ghezibde;

use Fisharebest\Webtrees\Module\AbstractModule;
use Fisharebest\Webtrees\Module\ModuleCustomInterface;
use Fisharebest\Webtrees\Module\ModuleCustomTrait;
use Fisharebest\Webtrees\Module\ModuleHistoricEventsInterface;
use Fisharebest\Webtrees\Module\ModuleHistoricEventsTrait;
use Illuminate\Support\Collection;

return new class extends AbstractModule implements ModuleCustomInterface, ModuleHistoricEventsInterface {
    use ModuleCustomTrait;
    use ModuleHistoricEventsTrait;

    /**
     * How should this module be identified in the control panel, etc.?
     *
     * @return string
     */
    public function title(): string
    {
        return 'Ghezibde history';
    }

    /**
     * A sentence describing what this module does.
     *
     * @return string
     */
    public function description(): string
    {
        return 'Historic events for Ghezibde';
    }

    /**
     * The person or organisation who created this module.
     *
     * @return string
     */
    public function customModuleAuthorName(): string
    {
        return 'Greg Roach';
    }

    /**
     * All events provided by this module.
     *
     * @return Collection
     */
    public function historicEventsAll(): Collection
    {
        return new Collection([
            #Flandre
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 18 MAY 1302\n2 NOTE Les «Mâtines de Bruges» : Les Flamands se révoltent contre l'occupant français et massacrent les soldats de la garnison de Bruges.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1602\n2 NOTE Tremblement de terre en Belgique et aux Pays-Bas",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1605-1665\n2 NOTE Règne de Philippe IV.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE BET 1607 AND 1608\n2 NOTE Hiver très rigoureux",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1613\n2 Invasion de sauterelles en Belgique",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE BET 1617 AND 1618\n2 NOTE La peste à Anvers, Enghien, Lille, Douai (7000 victimes)",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1637-1638\n2 NOTE Pestes rélatées à Hazebrouck et à Hondeghem, elles sont caractérisées par le développement de bubons et d'anthrax; il s'agirait d'un typhus d'Orient; mortalité effrayante.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1640\n2 NOTE Capitulation d'Arras après un siège qui dura du 13 Juin au 9 Août.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1645-1646\n2 NOTE Épidemie de peste dans la région d'Hazebrouck.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1658\n2 NOTE Bataille des Dunes, Révolte d'Hesdin contre la domination française.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 28 AUG 1665\n2 NOTE Capitulation de Lille.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1678\n2 NOTE Traité de Nimègue.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1697\n2 NOTE Traité de Ryswick.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1708\n2 NOTE Prise de Lille par les Anglo-Hollandais.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1709\n2 NOTE Terrible hiver 1709 : L'année 1709 vit la conjonction de tous les fléaux: un hiver rigoureux, l'invasion des Hollandais, l'exode des habitants, les épidémies, une inondation artificielle provoquée pour la défense, l'extrème cherté des grains ... . Voici un témoignage: «la nuit du 5 et 6 janvier 1709, il commença un hiver qu'on appelra jusque la fin du monde le gros hiver. Il a commencé après cinq ou six jours de grosses pluies et dura un mois, d'une force incroyable, entremé de dégels qui ne duraient que quelques heures, de neige que le vent chassait dans les endroits les plus bas, de sorte que tous les blés furent généralement gelés, et on n'a point échappé un seul grain de colza ... les plus gros chênes des bois et la plupart des autres arbres se fendaient de part en part, les pruniers, abricotiers, cerisiers moururent, et les autres arbres ou engelés ou demi-gâtés ...»",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 24 JUL 1712\n2 NOTE Victoire de Denain.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1718\n2 NOTE les rivières se desséchent, une seule pluie en 9 mois.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1722\n2 NOTE Épidemie de peste dans la région d'Hazebrouck.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1740\n2 NOTE 3 mois de gelées continues: presque toutes les céréales sont anéanties",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1803\n2 NOTE Viste de Bonaparte à Boulogne, Calais, Dunkerque et Lille",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1804\n2 NOTE Lille est designée Chef-lieu du département du Nord.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1810\n2 NOTE Visite de Napoléon et Marie-Louise.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 24 APR 1814\n2 NOTE Débarquement de Louis XVIII à Calais.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 20 JUN 1815\n2 NOTE La Semaine Sainte. Fuite de louis XVIII vers Gand.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 26 JUN 1815\n2 NOTE Louis XVIII entre à Cambrai.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE BET 1815 AND 1818\n2 NOTE Après la défaite de Napoléon à Waterloo, les troupes Alliées (Royaume-Uni, Russie, Autriche, Prusse, Suède) envahissent la majeure partie de la France. les Britanniques occupent les pays entre la Seine et la frontière belge, déjà mis à sac par les autres armées en 1814. Les Prussiens occupent les terres situées entre la Seine, la Loire et la Bretagne occidentale non encore occupées précédemment. Russes, Saxons, Hessois, Wurtembergeois se répandent entre le Rhin et la Loire tandis que les Autrichiens avancent jusqu'en Ardèche et le Gard. Les Prussiens se livrent à des pillages et à des exactions de tout genre. Des villages entiers sont incendiés. Le nombre de soldats étrangers cantonnés en France passe de 150000 environ deux semaines après Waterloo à plus de 1236000 deux mois plus tard. Le 15 juillet, le gouvernement royaliste prend en charge leur solde et leur entretien, et un mois plus tard une contribution exceptionnelle de 
cent millions est levée sur les propriétaires et patentés, répartie sur les royalistes modérés et les partisans de l'empereur.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1824\n2 NOTE L'usine de Raismes fabrique le fer par la méthode anglaise.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1825\n2 NOTE Frédéric Kuhlmann installe une première grande usine chimique à Loos, près de Lille.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 27 JUL 1830\n2 NOTE Troubles révolutionnaires à Lille.",
            "1 EVEN\n2 TYPE Histoire de Flandre\n2 DATE 1833\n2 NOTE Lamartine élu député de Bergues.",


            #Belgique
            "1 EVEN\n2 TYPE Histoire de Belgique\n2 DATE 1308\n2 NOTE Henri VII de Luxembourg devient empereur germanique (Henri IV).",
            "1 EVEN\n2 TYPE Histoire de Belgique\n2 DATE 1354\n2 NOTE Le comté du Luxembourg est érigé en duché",
            "1 EVEN\n2 TYPE Histoire de Belgique\n2 DATE 1369\n2 NOTE Philippe le Hardi, duc de Bourgogne, épouse Marguerite de Male, fille du comte de Flandre (et plus tard d'Artois).",
            "1 EVEN\n2 TYPE Histoire de Belgique\n2 DATE 1384\n2 NOTE La flandre devient bourguignonne. Philippe le Hardi, duc de Bourgogne obtient le territoire flamand; naissance des Pays-Bas bourguignons.",
            "1 EVEN\n2 TYPE Histoire de Belgique\n2 DATE 1441\n2 NOTE L'unification des 'pays de par-deçà' est complétée par l'acquisition du Luxembourg.",
            "1 EVEN\n2 TYPE Histoire de Belgique\n2 DATE 1468\n2 NOTE Révolte de Liège : Charles le Téméraire détruit la ville et annexe la principauté.",
            "1 EVEN\n2 TYPE Histoire de Belgique\n2 DATE 18 AUG 1477\n2 NOTE Les Pays-Bas et donc la future Belgique reviennent aux Habsbourg suite au mariage de Marie de Bourgogne fille de Charles le Téméraire, avec Maximilien de Habsbourg. Sont amputés des territoires repris par Louis XI.",
            "1 EVEN\n2 TYPE Histoire de Belgique\n2 DATE 6 JAN 1579\n2 NOTE Sous le règne de Philippe II d'Espagne, successeur de Charles Quint, les 17 provinces des Pays-Bas se disloquent; les 10 provinces du Sud, catholiques et qui délimitent à peu près la future Belgique, formeront les «Pays-Bas espagnols». Les autres sept provinces, protestantes, deviendront bientôt les «Provinces Unies».",
            "1 EVEN\n2 TYPE Histoire de Belgique\n2 DATE 1794\n2 NOTE Annexion des Pays-Bas autrichiens et de la principauté de Liège par la France républicaine qui y institue 9 départements.",
            "1 EVEN\n2 TYPE Histoire de Belgique\n2 DATE 1831\n2 NOTE Guerre belgo-hollandaise. Léoplold 1er est roi des Belges.",
            "1 EVEN\n2 TYPE Histoire de Belgique\n2 DATE 1839\n2 NOTE L'indépendance de la Belgique est reconnue par Guillaume 1er.",
            "1 EVEN\n2 TYPE Histoire de Belgique\n2 DATE 1962\n2 NOTE Fixation de la frontière linguistique.",
            "1 EVEN\n2 TYPE Histoire de Belgique\n2 DATE 1963\n2 NOTE Trois langues officielles en Belgique: le neerlandais, le français et l'allemand.",
            "1 EVEN\n2 TYPE Histoire de Belgique\n2 DATE 1993\n2 NOTE La Belgique devient un état fédéral.",

            # Rois de Belgique et comtes de flandre
            "1 EVEN\n2 TYPE Comtes de Flandre\n2 BET 1621 AND 1665\n2 NOTE Philippe IV d'Espagne alias Philippe VI",
            "1 EVEN\n2 TYPE Roi de Belgique\n2 BET 25 FEB 1831 AND 20 JUL 1831\n2 NOTE Baron Érasme-Louis Surlet de Chokier",
            "1 EVEN\n2 TYPE Roi de Belgique\n2 BET 21 JUL 1831 AND 10 DEC 1865\n2 NOTE Léopold Ier",
            "1 EVEN\n2 TYPE Roi de Belgique\n2 BET 17 DEC 1865 AND 17 DEC 1909\n2 NOTE Léopold II",
            "1 EVEN\n2 TYPE Roi de Belgique\n2 BET 17 DEC 1909 AND 17 FEB 1934\n2 NOTE Albert Ier",
            "1 EVEN\n2 TYPE Roi de Belgique\n2 BET 23 FEB 1934 AND 16 JUL 1951\n2 NOTE Léopold III",
            "1 EVEN\n2 TYPE Roi de Belgique\n2 BET 20 DEC 1944 AND 20 JUL 1950\n2 NOTE Charles",
            "1 EVEN\n2 TYPE Roi de Belgique\n2 BET 17 JUL 1951 AND 31 JUL 1993\n2 NOTE Baudouin",
            "1 EVEN\n2 TYPE Roi de Belgique\n2 BET 09 AUG 1993 AND 21 JUL 2013\n2 NOTE Albert II",
            "1 EVEN\n2 TYPE Roi de Belgique\n2 AFT 21 JUL 2013\n2 NOTE Philippe",

            #France
            "1 EVEN\n2 TYPE Histoire de France\n2 DATE 1 SEP 1715\n2 NOTE Mort du roi Louis XIV dit Roi Soleil",
            "1 EVEN\n2 TYPE Histoire de France\n2 DATE 21 NOV 1806\n2 NOTE Napoléon établit le blocus continental",
            "1 EVEN\n2 TYPE Histoire de France\n2 DATE 25 APR 1915\n2 NOTE Débarquement de Gallipoli (Turquie)",
            "1 EVEN\n2 TYPE Histoire de France\n2 DATE BET 1954 AND 1962\n2 NOTE Guerre d'indépendance de l'Algérie",

            # Europe
            "1 EVEN\n2 TYPE Histoire d'Europe\n2 DATE 24 OCT 1648\n2 NOTE Publication des traités de Westphalie. (la france obtient l'Alsace, les Pays-Bas gagnent leur indépendance)",
            "1 EVEN\n2 TYPE Histoire d'Europe\n2 DATE 11 APR 1713\n2 NOTE Fin des négociations à Utrecht (Les Pays-Bas espagnols passent à l'Autriche, du nouveaux duchés et comtés rejoignent la Belgique).",
            "1 EVEN\n2 TYPE Histoire d'Europe\n2 DATE 10 FEB 1763\n2 NOTE Fin de la guerre de trente ans. (la France perd de nombreuses colonies en Amérique du Nord)",
            "1 EVEN\n2 TYPE Histoire d'Europe\n2 DATE 6 NOV 1792\n2 NOTE Bataille de Jemmapes : Dumouriez avec 40000 hommes prend possession des Pays-Bas espagnols pour la France.",
            "1 EVEN\n2 TYPE Histoire d'Europe\n2 DATE 18 MAR 1793\n2 NOTE Bataille de Neerwinden : Défaite de Dumouriez. L'armée française quitte la Belgique mais la france en reprend possession en 1794 au cours de la bataille de Fleurus.",
            "1 EVEN\n2 TYPE Histoire d'Europe\n2 DATE 18 OCT 1797\n2 NOTE Traité de Campio Formio : la Belgique autrichienne devient française",
            "1 EVEN\n2 TYPE Histoire d'Europe\n2 DATE 18 JUN 1815\n2 NOTE Bataille de Waterloo : victoire des troupes britanniques et prussiennes sur les armées de Napoléon Ier à Waterloo près de Bruxelles",
            "1 EVEN\n2 TYPE Histoire d'Europe\n2 DATE 4 NOV 1830\n2 NOTE Indépendance de la Belgique : reconnaissance officielle de l'indépendance de la Belgique vis à vis des Pays-Bas par les grandes puissances (Les pays-bas espagnols et les Provinces-Unies étaient unis depuis 1815).",
            "1 EVEN\n2 TYPE Histoire d'Europe\n2 DATE BET SEP 1939 AND MAY 1945\n2 NOTE Seconde guerre mondiale",
            "1 EVEN\n2 TYPE Histoire d'Europe\n2 DATE 10 MAY 1940\n2 NOTE Hitler envahit la Belgique",
            "1 EVEN\n2 TYPE Histoire de Belgique\n2 DATE 28 MAY 1940\n2 NOTE Léopold III, roi des Belges, est contraint de capituler sans armistice. Enfermé par les Allemands au château de Laeken, il fut totalement écarté de son gouvernement, exilé à Londres.",
            "1 EVEN\n2 TYPE Histoire d'Europe\n2 DATE 17 MAR 1948\n2 NOTE Signature du Traité de Bruxelles qui institue l'UEO (Union de l'Europe occidentale).",
            "1 EVEN\n2 TYPE Histoire d'Europe\n2 DATE 3 FEB 1958\n2 NOTE Création du Benelux entre la Belgique, le Luxembourg et les Pays-Bas qui assure aux trois pays une unité économique et leur permet d'adopter une politique commune sur les plans social et financier.",
        ]);
    }
};
