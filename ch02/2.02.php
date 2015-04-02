<DOCTYPE html>
<html>
    <head> 
        <title> Exercice 2 Chapitre </title>
    </head>

    <body>
        <form action="2.02_post.php" method="post">
            <p> Login </p>
            <label for="login"></label>
            <input type="text" id="nom"/>
            
            <p> Mot de passe </p>
            <input type ="password" name="Mot de passe">
            
            <p> Majeur </p>
            <select> 
                    <option value="1"> Oui </options>
                    <option value="0"> Non </option>
            </select>
            
            <p> Type </p>
            <input type="radio" name="1" value="Femme"> Femme 
            <input type="radio" name="1" value="Homme"> Homme 
            
            <p> Options </p>
            <input type="checkbox" name="2" value="Lettre de nouvelle"> Lettre de nouvelle
            <input type="checkbox" name="2" value="Membre de soutien"> Membre de soutien

            <br>
            <br>

            <input type="submit" name="Envoie !">
        </form>
        
    </body>
</html>
 
 
 
 
 
