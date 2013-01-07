<!DOCTYPE                     html                 PUBLIC                  "..//W3C//DTD                       XHTML                   1.1//EN"  
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">  
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />  
<meta name="author" content="SIO2" />  
<meta name="keywords" content="Mon Appli Web" />  
<meta name="description" content="Appli Web pour le TP Git" />  
<meta name="date" content="2012-12-22T08:30:45+01:00" />  
  
<title>Mon application Web</title>  
  
<script language=Javascript src="monScript.js"> </script>  
<link rel="stylesheet" href="monCSS.css" />  
    
</head>  
  
<body>  
           <div id="monEntete">  
                      <h2><img src="soleil.png" alt="logo du site" />Mo n application Web  
                                <img src="soleil.png" alt="logo du site" /></h2>  
           </div>  
             
           <div id="maDivMenu">  
                      <ul id="monMenu">  
                                <li><a href="index.php" title="Accueil"   
                                 <?php if (!isset($_GET['page'])) echo "class=\"current\""; ?> >     
                                                        
                                Accueil</a>  
                                 </li>  
                                <li><a href="index.php?page=presentation" title="Présentation"  
                                <?php if (isset($_GET['page']))  
                                                      if ($_GET['page']=="presentation")  
                                                                 echo "class=\"current\""; ?> >  
                                Présentation</a>  
                                </li>  
                                <li><a href="index.php?page=articles" title="Articles"  
                                <?php if (isset($_GET['page']))  
                                           if ($_GET['page']=="articles")  
                                                      echo "class=\"current\""; ?> >  
													  Articles</a>  
                                </li>  
                                <li><a href="index.php?page=tutos" title="Tutos"  
                                <?php if (isset($_GET['page']))  
                                           if ($_GET['page']=="tutos")  
                                                      echo "class=\"current\""; ?> >  
                                Tutos</a>  
                                </li>  
                                <li><a href="index.php?page=forums" title="Forums"  
                                <?php if (isset($_GET['page']))  
                                           if ($_GET['page']=="forums")  
                                                      echo "class=\"current\""; ?> >  
                                Forums</a>  
                                </li>  
                                <li><a href="index.php?page=nous-contacter" title="Nous contacter"  
                                <?php if (isset($_GET['page'])) 
								if ($_GET['page']=="nous-contacter")  
                                                       echo "class=\"current\""; ?> >  
                                 Nous contacter</a>  
                                 </li>  
                      </ul>  
           </div>  
Le fichier index.php devra contenir les lignes suivantes : 

<?php include 'header.php';   
 if (!isset($GET['page']))  
           include 'calculatrice.html';   
 include 'footer.html'; ?>