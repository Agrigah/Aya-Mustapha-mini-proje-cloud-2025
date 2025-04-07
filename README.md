# 🚗 Application de Gestion de Location de Voitures

## 🎯 Objectif de l'application

Le but de ce projet est de développer une application web de **gestion de location de voitures**. Elle permet à des utilisateurs de consulter les voitures disponibles, de faire des réservations et aux administrateurs de gérer l’ensemble du parc automobile. Ce projet a été développé avec **Laravel** (PHP), une base de données **MySQL**, et peut être déployé dans un environnement conteneurisé via **Docker**.

---

## 🛠️ Technologies utilisées

- **PHP 8+**
- **Laravel 10**
- **MySQL**
- **Docker / Docker Compose**
- **HTML / CSS / Blade**
- **Git / GitHub**

---

## 🚧 Fonctionnalités

- 🔐 Authentification utilisateur (inscription, connexion)
- 🚗 Consultation des voitures disponibles (accessible sans connexion)
- 📋 Emprunt et retour de véhicules (utilisateur connecté)
- 🛠️ Gestion complète du parc automobile (admin seulement)
- 👥 Liste des personnes ayant loué des voitures
- 🔑 Admin : `admin@gmail.com` / `admin`

---

## 📦 Installation Locale

### 1. Cloner le projet

```bash
git clone https://github.com/Aya-Mustapha/mini-proje-cloud-2025/location-voiture.git
cd location-voiture


### 1. Installation



composer install
```

### 2. Configuration de la base de données

```bash
php artisan migrate
```

### 3. Création de l'administrateur

```bash
php artisan db:seed --class=AdminSeeder
```

L'administrateur a pour email : admin@gmail.com et mot de passe : admin

### 4. Création des voitures par défaut

```bash
php artisan db:seed --class=CarsSeeder
```

### 5. Lancement de l'application

```bash
php artisan serve
```
Visitez [http://localhost:8000] dans votre navigateur pour accéder à l'application.

```
###5.   Build image Docker
	docker build -t location-voiture-app .

###6.  Démarrer avec Docker Compose	
  docker-compose up -d


👥 Équipe
Aya Agrigah 

Musthapha Aarabe 

Université Mundiapolis – Licence en Développement Logiciel

🙏 Remerciements
Merci à notre encadrant et à l’établissement Mundiapolis pour leur accompagnement et leur soutien tout au long du projet.

