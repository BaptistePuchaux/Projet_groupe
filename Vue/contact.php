<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact</title>

        <link href="../styles/bootstrap.min.css" rel="stylesheet">
        <link href="../styles/formulaire.css" rel="stylesheet" media="screen" type="text/css" />
			
    </head>
    <body>
       <div class="container1">
  <h1>Formulaire de contact</h1>
  <form action="/action_page.php">
      
    <label for="fname">Nom & prénom</label>
    <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom">

    <label for="sujet">Sujet</label>
    <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">

    <label for="emailAddress">Email</label>
    <input id="emailAddress" type="email" name="email" placeholder="Votre email">


    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="Votre message" style="height:150px"></textarea>

        <center>
                  
            <input type="reset" value="Réinitialiser"> 
            <input type="submit" value="Envoyer"> 
        </center>
     
  </form>
</div>
</form>
 
    </body>
</html>