# Projet Réservations – Laravel 12

##Description
Application web développée avec **Laravel 12** dans le cadre du projet *Roadmap Mapping*.  
Elle permet la gestion de spectacles, lieux, artistes, représentations, réservations et utilisateurs.

Le projet met l’accent sur la **modélisation de la base de données**, les **relations Eloquent** et la structuration MVC.

---

##Fonctionnalités
- Gestion des artistes, types, rôles, prix et localités
- Gestion des lieux de spectacle et des spectacles
- Gestion des représentations (dates, lieux, spectacles)
- Système de réservations lié aux utilisateurs
- Relations Eloquent :
  - OneToMany / ManyToOne
  - ManyToMany
- Seeders avec données de test réalistes
- Affichage via templates Blade
- Authentification et rôles (admin, member, etc.)

---

## 🛠️ Technologies utilisées
- PHP 8.x
- Laravel 12
- MySQL
- Blade
- Eloquent ORM

---

##Installation
```bash
git clone <repo>
cd reservations
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
