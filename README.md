<ol>
    <li style="padding-top: 10px;">Installation laravel:</li>
        <p>tapez cette commande dans le terminal:</p>
            <label style="background-color: gray;
            padding: 8px 20px 8px 20px;
            color: white;
            border:turquoise 1px;">composer global require laravel/installer </label>
    <li style="padding-top: 10px;">Creation projet laravel</li>
        <p>tapez cette commande dans le terminal:</p>
            <label style="background-color: gray;
            padding: 8px 20px 8px 20px;
            color: white;
            border:turquoise 1px;">Laravel new tp2</label>
    <li style="padding-top: 10px;">création migration base de données :</li>
	    <p>tapez cette commande dans le terminal:</p>
            <label style="background-color: gray;
            padding: 8px 20px 8px 20px;
            color: white;
            border:turquoise 1px;">php artisan make:migration create_produits_table  --create=produits</label>
    
        <p>Pour éviter de rencontrer des erreurs, vous devez spécifier la longueur de chaîne par défaut avant d'exécuter votre migration.Ouvrez le fichier app / Providers / AppServiceProvider.php et ajoutez Schema :: defaultstringLength (191)</p>
	    <p>puis tapez la commande</p>
            <label style="background-color: gray;
            padding: 8px 20px 8px 20px;
            color: white;
            border:turquoise 1px;">php artisan:migrate</label>
            <p>Cela ajoutera les champs à notre table de base de données.</p>
</ol>
