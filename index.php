<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18.03.2022</title>
</head>

<body>

    <h1>Exercice 1</h1>
    <p>Soit la phrase « Notre formation DL commence aujourd'hui ».
        Ecrire un algorithme perAmettant de compter le nombre de caractères contenus dans cette phrase
        (espaces inclus).
    </p>
    <h2>La phrase « Notre formation DL commence aujourd'hui » contient
        <?php
        $exo1 = "Notre formation DL commence aujourd'hui";
        echo strlen($exo1) ?> caractères. </h2>

    <h1>Exercice 2</h1>
    <p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots
        contenus dans celle-ci.
    </p>
    <h2>La phrase « Notre formation DL commence aujourd’hui » contient <?php echo str_word_count($exo1) ?> mots.</h2>

    <h1>Exercice 3</h1>
    <p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot
        « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.
    </p>
    <?php
    $exo3 = "Notre formation DL commence aujourd'hui";
    $exo3 = str_replace("aujourd'hui", "demain", $exo3);
    ?>
    <h2><?= $exo1 ?><br><?= $exo3 ?></h2>

    <h1>Exercice 4</h1>
    <p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>
    <h2><?php

        $exo4 = "Engage le jeu que je le gagne";
        $exo4 = strtolower($exo4);
        $exo4 = str_replace(' ', '', $exo4);
        $exo_4 = strrev($exo4); // inverse la chaine de caractere

        if ($exo4 === $exo_4) {
            echo 'c\'est un Palindrome';
        } else {
            echo 'Ce n\'est pas un Palindrome';
        } ?></h2>

    <h1>Exercice 5</h1>
    <p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
        Attention, la valeur générée devra être arrondie à 2 décimales.
    </p>
    <?php $valeur = 100;
    $conversion = 100 / 6.55957; ?>
    <h2>Montant en franc : <?php echo $valeur ?> <br>
        <?php echo $valeur ?> francs = <?php echo number_format($conversion, 2) ?> euros.</h2>

    <h1>Exercice 6</h1>
    <p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
        d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)

    </p>
    <?php
    $prixUnit_article = 9.99;
    $quantite = 5;
    $prix_quantite = $prixUnit_article * $quantite;

    $calcul = $prix_quantite * 20 / 100;
    $resultat_exo6 = $prix_quantite + $calcul;
    ?>
    <h2>Prix unitaire de l'article : <?php echo $prixUnit_article ?><br>
        Quantité : <?php echo $quantite ?><br>
        Taux de TVA : 0.2<br>
        Le montant de la facture à régler est : <?php echo $resultat_exo6 ?></h2>

    <h1>Exercice 7</h1>
    <p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
        Poussin : entre 6 et 7 ans
        Pupille : entre 8 et 9 ans
        Minime : entre 10 et 11 ans
        Cadet : à partir de 12 ans
        Si la catégorie n’est pas gérée, merci de le préciser.
    </p>
    <h2>L'enfant qui à 10 ans appartient à la catégorie
        <?php

        $categorie = 10;

        if ($categorie >= 12) {
            echo 'Cadet';
        } elseif ($categorie >= 10) {
            echo 'Minime';
        } elseif ($categorie >= 8) {
            echo 'Pupille';
        } elseif ($categorie >= 6) {
            echo 'Poussin';
        } else {
            echo 'pas de catégorie, veuillez grandir';
        }

        ?>
    </h2>

    <h1>Exercice 8</h1>
    <p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre.
        Remarque : proposer 2 solutions avec 2 types de boucles.
    </p>
    <h2>
        <?php

        $nombre = 8;
        $prod = 1;
        for ($i = 0; $i <= 10; $i++) {
            $prod = $nombre * $i;
            echo $nombre . ' x ' . $i . ' = ' . $prod . '<br>';
        }

        ?>
        <br>
        <?php

        $nombre = 5;
        $prod = 1;
        $i = 0;
        while ($i <= 10) {
            $prod = $nombre * $i;
            echo $nombre . ' x ' . $i . ' = ' . $prod . '<br>';
            $i++;
        }


        ?>
    </h2>

    <h1>Exercice 9</h1>
    <p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
        Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
        plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).

    </p>
    <?php
    $age = 32;
    $sexe = ['F', 'H'];
    ?>

    <h2>Age : <?php echo $age ?> <br>
        Sexe : <?php echo $sexe[0] ?><br>
        Imposable : <?php
                    if (($sexe == "F" && $age >= 18 && $age <= 35) || ($sexe == "H" && $age >= 20)) {
                        echo 'Imposable';
                    } else {
                        echo 'Non imposable';
                    }
                    ?> <br></h2>

    <h1>Exercice 10</h1>
    <p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
        affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
        1 €.

    </p>
    <h2>

        <?php

        $montant_payer = 152;
        $montant_verse = 200;
        $reste = $montant_verse - $montant_payer;

        $reste4 = intdiv($reste, 10);
        $reste = $reste - 10 * $reste4;

        $reste5 = intdiv($reste, 5);
        $reste = $reste - 5 * $reste5;

        $reste2 = intdiv($reste, 2);
        $reste = $reste - 2 * $reste2;

        $reste1 = intdiv($reste, 1);
        $reste = $reste - 1 * $reste1;

        echo $reste4; ?> billets de 10
        <?= $reste5; ?> billet de 5
        <?= $reste2; ?> piece de 2
        <?= $reste1; ?> piece de 1


    </h2>

    <h1>Exercice 11</h1>
    <p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
        tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
        d’afficher le nombre de marques de voitures présentes dans le tableau.
        Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
    </p>
    <h2><?php
        $voitures = ['peugeot', 'renault', 'bmw', 'mercedes'];
        foreach ($voitures as $voiture) {
            echo $voiture . '<br>';
        }


        $count = count($voitures); ?>
        Il y à <?php echo $count ?> marques de voitures dans le tableau.<h2>

            <?php
            $berline = ["ferrari", "bmw", "audi", "mercedes"];
            // Tri du tableau 
            sort($berline);
            print_r($berline);
            ?>


            <h1>Exercice 12</h1>
            <p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
                (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
                respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
                Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG
            </p>
            <h2>
                <?php
                $prenoms = [
                    'Mickael' => 'FRA',
                    'Virgile' => 'ESP',
                    'Marie-Claire' => 'ENG'
                ];
                foreach ($prenoms as $cle => $valeur) {
                    if ($valeur === 'FRA') {
                        echo "Salut $cle" . '<br>';
                    } elseif ($valeur === 'ESP') {
                        echo "Hola $cle" . '<br>';
                    } elseif ($valeur === 'ENG') {
                        echo "Hello $cle" . '<br>';
                    }
                }

                // trier par ordre alphabétique ?
                ?>
            </h2>

            <h1>Exercice 13</h1>
            <p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
                coefficient). Elle devra être affichée avec 2 décimales.
            </p>
            <h2> Note de l'élève :
                <?php
                $notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
                foreach ($notes as $note) {
                    echo "$note \n";
                }

                $moyenne = array_sum($notes) / count($notes);
                ?>
                <br>Sa moyenne générale est donc de : <?php echo number_format($moyenne, 2) ?>
            </h2>

            <h1>Exercice 14</h1>
            <p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
            </p>
            <h2>
                <?php
                $today = date('21-05-2018');
                $birth = date('17-01-1985');
                $calcul = date_diff(date_create($birth), date_create($today));
                echo 'Age de la personne : ' . $calcul->format('%y ans %m mois %d jours');
                ?>
            </h2>

            <h1>Exercice 15</h1>
            <p>Créer une classe Personne (nom, prénom et date de naissance).<br>
                Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br>
                $p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;<br>
                $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;<br>

            </p>
            <h2>
                <?php

                class Personne
                {
                    private $nom;
                    private $prenom;
                    private $dateDeNaissance;

                    function __construct($nom, $prenom, $dateDeNaissance)
                    {
                        $this->nom = $nom;
                        $this->prenom = $prenom;
                        $this->dateDeNaissance = $dateDeNaissance;
                    }
                    public function get_nom(): string
                    {
                        return $this->nom;
                    }
                    public function set_nom(string $nom): self
                    {
                        $this->nom = $nom;
                        return $this;
                    }
                    function get_prenom()
                    {
                        return $this->prenom;
                    }
                    public function set_prenom(string $prenom): self
                    {
                        $this->prenom = $prenom;
                        return $this;
                    }
                    function get_dateDeNaissance()
                    {
                        return $this->dateDeNaissance;
                    }
                    public function set_dateDeNaissance(string $dateDeNaissance): self
                    {
                        $this->dateDeNaissance = $dateDeNaissance;
                        return $this;
                    }
                    public function getAge()
                    {
                        $age = $this->dateDeNaissance;
                        $aujourdhui = date("Y-m-d");
                        $diff = date_diff(date_create($this->dateDeNaissance), date_create($aujourdhui));
                        return $diff->format('%y');
                    }
                    public function setAge(string $Age)
                    {
                        $this->Age = $Age;
                        return $this;
                    }
                    public function __toString()
                    {
                        return $this->nom . " " . $this->prenom . " a " . $this->getAge() . " ans<br>";
                    }
                }


                $p1 = new Personne("DUPONT", "Michel", "1980-02-19");
                echo $p1;
                $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
                echo $p2; ?>

            </h2>


</body>

</html>