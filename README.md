# 🏯 Legacy of Kingdoms

## Table des matières
- [Principe général](#principe-général)  
- [Structure narrative](#structure-narrative)  
- [Variables suivies](#variables-suivies)  
- [Architecture technique](#architecture-technique)  
  - [Back-end (Laravel API)](#back-end-laravel-api)  
  - [Front-end (Vue.js)](#front-end-vuejs)  
- [Fonctionnalités](#fonctionnalités)  
- [Installation](#installation)  
  - [Prérequis](#prérequis)  
  - [Back-end](#back-end)  
  - [Front-end](#front-end)  
- [Lancer l’application](#lancer-lapplication)  
- [Documentation de l’API](#documentation-de-lapi)  
- [Git & Workflow](#git--workflow)  
- [Contribution](#contribution)  
- [Licence](#licence)  

---

## 🧩 Principe général
**Legacy of Kingdoms** est une fiction interactive multi-plateforme (Laravel + Vue.js).  
Vous incarnez Mei, orpheline dans une Chine impériale en guerre. Chaque chapitre propose des choix à fort enjeu : prospérer, trahir, combattre… ou périr (Game Over). Vos décisions façonnent votre destinée : impétrante paysanne ou grande Impératrice réunificatrice.

---

## 📚 Structure narrative
L’histoire se divise en **20 chapitres**, chacun offrant :
- **Texte narratif** : immersion dans l’intrigue et le contexte historique  
- **Choix à conséquences** : alliances, intrigues, batailles, ou fins tragiques 
- **Branches multiples** : succès, échecs et Game Over  

---

## 🔢 Variables suivies
| Variable     | Impact                                                      |
|--------------|-------------------------------------------------------------|
| `réputation` | Influence ton rang à la cour et le soutien des seigneurs    |
| `richesse`   | Permet d’acheter faveurs, armes ou ressources stratégiques  |
| `influence`  | Débloque des alliances diplomatiques et militaires          |
| `sagesse`    | Améliore tes chances lors des choix politiques ou philosophiques |
| `courage`    | Nécessaire pour les batailles et les duels décisifs         |

---

## ⚙️ Architecture technique

### Back-end (Laravel API)
- **Routes** préfixées `/api/v1` (register, login, logout, user).  
- **Modèles Eloquent** :
  - `User` (Sanctum + HasApiTokens)  
  - `Chapter` (contenu, titre)  
  - `Choice` (texte, chapitre_source, chapitre_destination, effets sur les variables)  
- **Sanctum** pour l’authentification SPA (cookies & CSRF).

### Front-end (Vue.js + Vite)
- **Composants** :  
  - `Register.vue` / `Login.vue`  
  - `App.vue` (gestion de l’état global, déconnexion, lancement du récit)  
  - `Chapter.vue` (affiche texte + choix dynamiques)  
  - `Logout.vue` (page de déconnexion)  
- **Axios** avec `withCredentials: true` et appel préalable à `/sanctum/csrf-cookie`.  
- **State** local : utilisateur connecté + chapitre en cours.

---

## 🚀 Fonctionnalités
- **Inscription / Connexion** via API Laravel + Sanctum  
- **Navigation interactive** : 20 chapitres, branchements multiples  
- **Game Over** possible à presque chaque décision  
- **Déconnexion & page dédiée**  

---

## 🛠️ Installation

### Prérequis
- PHP 8.1+  
- Composer  
- Node.js & npm  
- Base de données (SQLite, MySQL ou PostgreSQL)

### Back-end
1. Cloner le dépôt et passer dans le dossier backEnd :

   ```bash
   git clone https://github.com/emmaheig/legacy-of-kingdoms.git
   cd legacy-of-kingdoms/backEnd

2. Installez les dépendances PHP avec Composer :
 
    ```bash
    composer install
    ```
 
3. Configurez votre `.env` :
 
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
 
4. Configurez la base de données dans le fichier `.env` (voir Variables d’environnement ci-dessus).
 
5. Exécutez les migrations pour créer les tables nécessaires :
 
    ```bash
    php artisan migrate
    ```
 
## front-end (Vue.js)
 
 
1. Installez les dépendances npm :
 
    ```bash
    npm install
    ```

2. Compile le front-end en mode production et place les assets :
 
    ```bash
    npm run build
    ```

 
3. Compile le front-end en mode production et place les assets :
 
    ```bash
    composer run dev
    ```


▶️ Lancer l’application
Back-end : http://localhost:8000

Front-end : http://localhost:5173

Accédez à http://localhost:5173 pour jouer.

📖 Documentation de l’API
| Méthode | Route                      | Description                                                      |
|--------:|----------------------------|------------------------------------------------------------------|
| POST    | `/api/v1/register`         | Crée un nouveau compte utilisateur                               |
| POST    | `/api/v1/login`            | Authentifie l’utilisateur et retourne un token d’accès           |
| POST    | `/api/v1/logout`           | Révoque le token courant (déconnexion)                           |
| GET     | `/api/v1/user`             | Récupère les informations de l’utilisateur connecté              |
| GET     | `/api/v1/chapters`         | Récupère la liste de tous les chapitres                          |
| GET     | `/api/v1/choices/{id}`     | Récupère les choix disponibles pour le chapitre d’ID `{id}`      |
| POST    | `/api/v1/choices/{id}`     | Soumet un choix (ID `{id}`) et applique ses effets sur les stats |



🤝 Contribution
Les contributions sont les bienvenues !

Ouvrez une issue pour rapporter un bug ou proposer une amélioration.

Soumettez une pull request détaillant vos changements.
