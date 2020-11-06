<?php 
require('template.php'); 
require('nav-categories.php');
 ?>
 <div class="offset-md-2 col-md-8 offset-md-2">
    <div class="container">
        <h1 class="text-center">Table des loots</h1>
        <br>
        <h2 class="border border-dark rounded bg-under-title">Loots normaux</h2>
        <br><br>
        <h3 class="text-center">

    <?php
         $array = [
            1 => '100 crédits',
            2 => '200 crédits',
            3 => '300 crédits',
            4 => '500 crédits',
            5 => '800 crédits',
            6 => '1000 crédits',
            7 => '1200 crédits',
            8 => '1500 crédits',
            9 => '1800 crédits',
            10 => '2000 crédits',
            11 => '2300 crédits',
            12 => '2600 crédits',
            13 => '3000 crédits',
            14 => '3500 crédits',
            15 => '4000 crédits',
            16 => '4500 crédits',
            17 => '5000 crédits',
            18 => '500 crédits',
            19 => '500 crédits',
            20 => 'Plan d\'arme x1',
            21 => 'Plan d\'arme x1',
            22 => 'Plan d\'arme x1',
            23 => '1000 crédits',
            24 => 'Plan d\'armure x1',
            25 => 'Plan d\'armure x1',
            26 => 'Plan d\'armure x1',
            27 => 'Plan d\'armure x1',
            28 => '300 crédits',
            29 => 'Plan de magie ancienne x1',
            30 => 'Plan de magie ancienne x1',
            31 => '300 crédits',
            32 => 'Plan de technologie ancienne x1',
            33 => 'Plan de technologie ancienne x1',
            34 => '200 crédits',
            35 => 'Partie de grimoire ancien x1',
            36 => '200 crédits',
            37 => 'Améliorateur génétique x1',
            38 => 'Améliorateur génétique x1',
            39 => 'Arme blanche à deux mains simple',
            40 => 'Arme blanche à deux mains simple',
            41 => 'Arme blanche à deux mains simple',
            42 => 'Arme blanche à deux mains simple',
            43 => 'Arme blanche à deux mains simple',
            44 => 'Arme blanche à deux mains simple',
            45 => 'Arme blanche simple',
            46 => 'Arme blanche simple',
            47 => 'Arme blanche simple',
            48 => 'Arme blanche simple',
            49 => 'Arme blanche simple',
            50 => 'Arme blanche simple',
            51 => 'Gourde d\'eau pour un jour',
            52 => 'Gourde d\'eau pour trois jours',
            53 => 'Gourde d\'eau pour sept jours',
            54 => 'Gourde d\'eau pour un jour',
            55 => 'Gourde d\'eau pour trois jours',
            56 => 'Gourde d\'eau pour sept jours',
            57 => 'Ration pour un jour',
            58 => 'Ration pour trois jours',
            59 => 'Ration pour sept jours',
            60 => 'Ration pour un jour',
            61 => 'Ration pour trois jours',
            62 => 'Ration pour sept jours',
            63 => 'Collier de lévitation 3 tours',
            64 => 'Bague d\'invocation de monstre simple',
            65 => 'Bague d\'invocation d\'animaux simple',
            66 => 'Lentille de lecture de pensée x3/jours',
            67 => 'Boucle d\'oreille du mentaliste +10% Mentale',
        ];
        echo "Vous avez trouvé:" ." ". $array[rand(1, 67)];
        ?>
    </h3>
</div>
<br><br>
    <div class="container">
    <h2 class="border border-dark rounded bg-under-title">Loots supérieurs</h2>
    <br><br>
    <h3 class="text-center">

    <?php
    $array2 = [
        1 => '1000 crédits',
        2 => '2000 crédits',
        3 => '3000 crédits',
        4 => '5000 crédits',
        5 => '8000 crédits',
        6 => '10000 crédits',
        7 => '12000 crédits',
        8 => '15000 crédits',
        9 => '18000 crédits',
        10 => '20000 crédits',
        11 => '23000 crédits',
        12 => '26000 crédits',
        13 => '30000 crédits',
        14 => '35000 crédits',
        15 => '40000 crédits',
        16 => '45000 crédits',
        17 => '50000 crédits',
        18 => '5000 crédits',
        19 => '5000 crédits',
        20 => 'Plan d\'arme x2',
        21 => 'Plan d\'arme x2',
        22 => 'Plan d\'arme x2',
        23 => '10000 crédits',
        24 => 'Plan d\'armure x2',
        25 => 'Plan d\'armure x2',
        26 => 'Plan d\'armure x2',
        27 => 'Plan d\'armure x2',
        28 => '3000 crédits',
        29 => 'Plan de magie ancienne x2',
        30 => 'Plan de magie ancienne x2',
        31 => '3000 crédits',
        32 => 'Plan de technologie ancienne x2',
        33 => 'Plan de technologie ancienne x2',
        34 => '2000 crédits',
        35 => 'Partie de grimoire ancien x2',
        36 => '2000 crédits',
        37 => 'Améliorateur génétique x2',
        38 => 'Améliorateur génétique x2',
        39 => 'Arme blanche à deux mains supérieure',
        40 => 'Arme blanche à deux mains supérieure',
        41 => 'AArme blanche à deux mains supérieure',
        42 => 'Arme blanche à deux mains supérieure',
        43 => 'Arme blanche à deux mains supérieure',
        44 => 'Cape d\'invisibilité 3 tours',
        45 => 'Arme blanche une main supérieure',
        46 => 'Arme blanche une main supérieure',
        47 => 'Arme blanche une main supérieure',
        48 => 'Arme blanche une main supérieure',
        49 => 'AArme blanche une main supérieure',
        50 => 'Arme blanche une main supérieure',
        51 => 'Gant de force +1000',
        52 => 'Boucle d\oreille de vitalité +10 000',
        53 => 'Fragment de gemme violet x1',
        54 => 'Fragment de gemme rouge x1',
        55 => 'Fragment de gemme jaune x1',
        56 => 'Gourde d\'eau pour 1 mois',
        57 => 'Fragment de gemme bleu x1',
        58 => 'Fragment de gemme verte x1',
        59 => 'Fragment de gemme noire x1',
        60 => 'Fragment de gemme blanche x1',
        61 => 'Bottes d\endurance +10%',
        62 => 'Ration pour un mois',
        63 => 'Collier de renvoi de magie x3',
        64 => 'Bague d\'invocation de monstres supérieurs',
        65 => 'Bague d\'invocation d\'animaux supérieurs',
        66 => 'Lentille de scan supérieure x3',
        67 => 'Couronne de contrôle mental 10%',
    ];
    echo "Vous avez trouvé:" ." ". $array2[rand(1, 67)];
    ?>
    </h3>
</div>
<br><br>
            
<div class="container">
    <h2 class="border border-dark rounded bg-under-title">Loots légendaires</h2>
    <br><br>
    <h3 class="text-center">

    <?php
    $array3 = [
        1 => '10000 crédits',
        2 => '10000 crédits',
        3 => '10000 crédits',
        4 => '10000 crédits',
        5 => '10000 crédits',
        6 => '25000 crédits',
        7 => '25000 crédits',
        8 => '25000 crédits',
        9 => '25000 crédits',
        10 => '25000 crédits',
        11 => '25000 crédits',
        12 => '25000 crédits',
        13 => '50000 crédits',
        14 => '50000 crédits',
        15 => '50000 crédits',
        16 => '50000 crédits',
        17 => '50000 crédits',
        18 => '50000 crédits',
        19 => '50000 crédits',
        20 => 'Plan d\'arme x3',
        21 => 'Plan d\'arme x3',
        22 => 'Plan d\'arme x3',
        23 => '100 000 crédits',
        24 => 'Plan d\'armure x3',
        25 => 'Plan d\'armure x3',
        26 => 'Plan d\'armure x3',
        27 => 'Plan d\'armure x3',
        28 => '100 000 crédits',
        29 => 'Plan de magie ancienne x3',
        30 => 'Plan de magie ancienne x3',
        31 => '100 000 crédits',
        32 => 'Plan de technologie ancienne x3',
        33 => 'Plan de technologie ancienne x3',
        34 => '100 000 crédits',
        35 => 'Partie de grimoire ancien x3',
        36 => '100 000 crédits',
        37 => 'Améliorateur génétique complet',
        38 => 'Améliorateur génétique complet',
        39 => 'Arme blanche a deux mains spirituelle',
        40 => 'Fragment de gemme violet x2',
        41 => 'Fragment de gemme rouge x2',
        42 => 'Fragment de gemme jaune x2',
        43 => 'Fragment de gemme bleu x2',
        44 => 'Fragment de gemme verte x2',
        45 => 'Arme blanche une main spirituelle',
        46 => 'Fragment de gemme noire x2',
        47 => 'Fragment de gemme blanche x2',
        48 => 'Partie d\'armure sipirituelle x1',
        49 => 'Partie d\'armure sipirituelle x1',
        50 => 'Partie d\'armure sipirituelle x1',
        51 => 'Partie d\'armure sipirituelle x1',
        52 => 'Partie d\'armure sipirituelle x1',
        53 => 'Bague de voyage dimensionnel x3 par jour',
        54 => 'Sabre laser',
        55 => 'Manuel d\'Historia (unique)',
        56 => 'Pierre de Voeux',
        57 => 'Miroir de vision',
        58 => 'Fragment d\'Element x1',
        59 => 'Holocron (sith ou jedi au choix)',   
    ];
    echo "Vous avez trouvé:" ." ". $array3[rand(1, 59)];
    ?>
    </h3>
    <a href="table-loot.php"><input class="btn btn-primary btn-lg" type="button" value="Nouveau tirage"></a>
    </div>
</div>