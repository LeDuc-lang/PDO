# **Gestion de personnages et classes**

## **Concept**

On veut créer un système de gestion des **personnages** et **classes** d’un jeu de type RPG.

- Chaque **classe** peut avoir plusieurs **personnages** (relation one-to-many).
- Chaque **personnage** appartient à une seule **classe**.
- Les personnages ont des stats aléatoires à la création :
    - **PV** : aléatoire entre 50 et 100
    - **ATK** : aléatoire entre 1 et 10
    - **XP** : initialisé à 0

## **Objectifs**

1. **CRUD classes**
    - Ajouter, modifier, supprimer et lister les classes
    - Exemple : “Guerrier”, “Archer”, “Magicien”
2. **CRUD personnages**
    - Ajouter, modifier, supprimer et lister les personnages
    - Lors de la création d’un personnage :
        - Sélection de la classe
        - PV et ATK générés aléatoirement
        - XP initialisé à 0
3. **Bonus**
    - Créer un moteur de recherche permettant de filtrer les personnages par pseudo et classe

    