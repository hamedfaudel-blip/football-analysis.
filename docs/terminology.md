# Terminologie Git et GitHub

1. **Dépôt (Repository)** : Espace de stockage contenant tous les fichiers du projet et l'historique des modifications.
   * *Exemple :* Le dossier `football-analysis` contenant tout notre code PHP.

2. **Commit** : Enregistrement d'une modification à un instant T (un "snapshot").
   * *Exemple :* Le commit "Ajouter template de configuration" qui a sauvegardé nos fichiers `.env`.

3. **Branche (Branch)** : Une ligne de développement parallèle isolée du code principal.
   * *Exemple :* `feature/premier-league-analysis` utilisée pour travailler sur l'analyse de la ligue anglaise sans casser le code principal.

4. **Merge (Fusion)** : Action de réunir le travail d'une branche dans une autre (souvent vers `main`).
   * *Exemple :* Intégrer les scripts de la Premier League dans la branche principale une fois terminés.

5. **Pull Request (PR)** : Demande de fusion de code permettant la relecture par les pairs avant intégration.
   * *Exemple :* Demander à un collègue de vérifier `src/premier_league_login.php` avant de l'accepter.

6. **README.md** : Fichier principal de documentation présentant le projet.
   * *Exemple :* Le fichier à la racine expliquant comment installer le projet PHP.

7. **.gitignore** : Fichier listant les éléments que Git doit ignorer (ne pas envoyer sur GitHub).
   * *Exemple :* Ignorer `config/credentials.env` pour ne pas divulguer les mots de passe de la BDD.

8. **Repository Visibility** : Définit qui peut voir le projet (Public ou Privé).
   * *Exemple :* Public pour que l'enseignant puisse corriger le TP.

9. **PAT (Personal Access Token)** : Clé de sécurité remplaçant le mot de passe pour les actions automatisées ou en ligne de commande.
   * *Exemple :* Utilisé pour pousser du code depuis VS Code vers GitHub.

10. **Protection de branche** : Règles empêchant la suppression ou le push direct sur des branches critiques.
    * *Exemple :* Interdire de modifier `main` sans passer par une Pull Request approuvée.
