# 🌟 BlogPress

BlogPress est une plateforme de blog moderne développée en PHP et MySQL, avec des fonctionnalités d'analyse pour suivre les performances des articles. Ce projet vise à offrir aux utilisateurs une expérience de publication enrichie tout en permettant aux auteurs de suivre l'impact de leurs contenus grâce à des statistiques visuelles intégrées avec Chart.js.

## 🚀 Fonctionnalités principales

### 🔐 Système d'authentification
- ✅ Inscription des utilisateurs
- 🔑 Connexion/Déconnexion
- 🛡️ Gestion des rôles (auteur/visiteur)
- 🚨 Protection des routes sensibles

### 🏠 Page d'accueil
- 📈 Liste des articles triés par popularité
- 👀 Affichage du nombre de vues et de commentaires
- 📊 Visualisation des données avec Chart.js (graphique des articles les plus populaires)

### 📝 Page d'article
- 💬 Système de commentaires
- 🔢 Compteur de vues
- ❤️ Bouton "like" interactif
- ⏳ Indicateur de temps de lecture

### 📊 Dashboard auteur
- 📊 Statistiques des articles (vues, commentaires, likes)
- 🛠️ Gestion des articles (CRUD)
- 📈 Visualisation des données avec Chart.js (évolution des vues dans le temps)

## 🧩 User Stories

### 👥 En tant que visiteur :
- 👀 Voir les articles les plus populaires
- 💬 Commenter les articles
- 📊 Voir les statistiques basiques d'un article

### ✍️ En tant qu'auteur :
- 📝 Créer, modifier et supprimer mes articles
- 📊 Voir les statistiques de mes articles
- 🛠️ Gérer les commentaires sur mes articles
- 📈 Visualiser la performance de mes articles via des graphiques

### 💻 En tant que développeur :
- 🔢 Implémenter un système de comptage de vues
- 🔐 Gérer l'authentification des utilisateurs
- 📊 Implémenter un système de statistiques simple
- 📈 Intégrer Chart.js pour la visualisation des données
- 🔒 Assurer la sécurité des données
- 🖋️ Concevoir les diagrammes ERD et Use Case

## 🗂️ Structure de la Base de Données

### 📌 Diagramme ERD
Inclure un diagramme décrivant les relations entre les tables (ex. utilisateurs, articles, commentaires, statistiques).

### 🗃️ Tables principales
- **Utilisateurs** : Gestion des auteurs et visiteurs
- **Articles** : Stockage des articles de blog
- **Commentaires** : Gestion des commentaires des utilisateurs
- **Statistiques** : Données sur les vues, likes, etc.

## 🛠️ Technologies utilisées
- **Backend** : PHP
- **Base de données** : MySQL
- **Frontend** : HTML, CSS, JavaScript
- **Bibliothèque graphique** : Chart.js

## ⚙️ Installation

1. 📥 Clonez le dépôt :
   ```bash
   git clone https://github.com/votre-utilisateur/blogpress.git
   ```
2. 📂 Accédez au dossier du projet :
   ```bash
   cd blogpress
   ```
3. 🛠️ Configurez votre environnement :
   - Créez une base de données MySQL.
   - Importez le fichier `database.sql`.
   - Configurez les paramètres de connexion à la base de données dans `config.php`.
4. 🚀 Lancez le serveur local :
   ```bash
   php -S localhost:8000
   ```
5. 🌐 Accédez à l'application dans votre navigateur à l'adresse `http://localhost:8000`.

## 🗓️ Planning de développement

### 🗓️ Jour 1 : Configuration et Conception
- 🖋️ Création des diagrammes (ERD et Use Case)
- ⚙️ Configuration de l'environnement

### 🗓️ Jour 2 : Authentification
### 🗓️ Jour 3 : Gestion des Articles
### 🗓️ Jour 4 : Système de Commentaires
### 🗓️ Jour 5 : Système Analytics
### 🗓️ Jour 6 : Intégration Chart.js
### 🗓️ Jour 7 : Tests et Finalisation

## 🤝 Contribution
Les contributions sont les bienvenues ! Veuillez soumettre une *pull request* ou ouvrir une *issue* pour discuter des modifications que vous souhaitez apporter.

## 📜 Licence
Ce projet est sous licence MIT. Veuillez consulter le fichier `LICENSE` pour plus de détails.
