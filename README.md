# GREEK JOUNEY 2.0
C'est une nouvelle version du projet "Greek journey" une app de musculation (journal d'entrainement) dév sous Laravel cette fois-ci. C'est donc une app web destiné à un usage sur mobile.

### Pour les mises en Prod
Pour l'instant on est obligé de faire comme ça parce qu'on peut pas executer des commandes composer/php artisan sur le serveur

Les étapes :

    - Sur le serveur mettre index.phpmaintenance en actif
    
    - Sur le serveur supprimer le contenu du dossier /greekjourney
    
    - En local faire les commandes suivantes dans l'ordre :
    
        - php artisan optimize:clear
        
        - php artisan cache:clear
        
        - php artisan view:clear
        
        - php artisan route:cache
        
    - Uploader tout le contenu du dossier greek_journey_lar dans /greekjourney
    
    - Passer .env_prod en .env et .env en .env_local
    
    - Supprimer tout les fichiers du dossier /greekjourney/public sauf les sous-dossiers
    
        
