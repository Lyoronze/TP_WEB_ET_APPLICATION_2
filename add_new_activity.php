<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"><!-- définit au navigateur le jeu de caractère utilisé pour éviter les @&% dans les mots -->
    <title>Formulaire pour ajouter une activité</title> <!-- titre de la page web -->
    <link rel="stylesheet" href="css/intro.css"> <!-- créer un lien vers la feuille de style: intro.css se trouvant dans le fichier css -->
</head>
<body>
<form action=serverformulaire.php method="GET">
    <label>Nom de l'activité : </label>
    <input type="text" name="name_activity" id ="n_act" placeholder ="Nom de l'activité"/>
    <label>Description : </label>
    <textarea rows="8" cols="50" name="description"></textarea>
    <label>Saison : </label> <select name="season">
        <option value="summer">ETE</option>
        <option value="fall">AUTOMNE</option>
        <option value="winter">HIVER</option>
        <option value="spring">PRINTEMPS</option>
    </select>
    <input type="reset" value="Effacer" />
    <input type="submit" value="Soumettre" /> </form>
</body>
</html>