<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"><!-- définit au navigateur le jeu de caractère utilisé pour éviter les @&% dans les mots -->
    <title>Formulaire pour ajouter un client</title> <!-- titre de la page web -->
    <link rel="stylesheet" href="css/index.css"> <!-- créer un lien vers la feuille de style: intro.css se trouvant dans le fichier css -->
</head>
<body>
<form action=list_client.php method="GET">
    <label>Prénom : </label>
    <input type="text"
           name="first_name"
           id ="f_name"
           placeholder ="Votre prénom ici"
    />

    <label for="lname">Nom : </label>
    <input type="text"
           name="last_name"
           id ="l_name"
           placeholder="Votre nom ici"
    />

    <label>E-mail </label>
    <input type="email"
           name="email"
           placeholder="email@gmail.com"
    />

    <label>Sexe : </label>
    <input type="radio"
           name="sex"
           value="male"
    />Masculin :

    <input type="radio"
           name="sex"
           value="female"
    />Féminin :

    <input type="radio"
           name="sex"
           value="other"
    /> Autre :

    <label>Catégorie d’âge : </label> <select name="age">
        <option value="moins de 18 ans">- de 18 ans</option>
        <option value="entre 18 et 40 ans">18 à 40 ans</option>
        <option value="entre 41 et 60 ans">+ d 40 ans</option>
    </select>
    <input type="reset" value="Effacer" />
    <input type="submit" value="Soumettre" /> </form>
</body>
</html>