# ESCAPE-GAME

# **Escape Game  - Plongez dans l'univers des nouvelles technologies !**  

## **Introduction**  

Ce projet d'escape game immersif et éducatif, est destiner à initier les jeunes aux nouvelles technologies de manière ludique et interactive. Grâce à un scénario captivant et à l'intégration de plusieurs composants électroniques, les participants découvrent le fonctionnement de systèmes embarqués, la communication sans fil et la logique informatique tout en relevant des défis progressifs.  

L’objectif de cet escape game est de **rendre la technologie accessible et attrayante**, en proposant une expérience concrète qui stimule la curiosité et l’esprit d’analyse. À travers différentes étapes nécessitant l'utilisation de badges RFID, d'une télécommande infrarouge, d'un capteur de température et d'une radio, les joueurs explorent des concepts fondamentaux en électronique et en cybersécurité.  

## **Pourquoi cet escape game ?**  

Nous avons conçu cet escape game avec plusieurs ambitions :  
✅ **Sensibiliser** les plus jeunes aux nouvelles technologies en les rendant amusantes et accessibles.  
✅ **Stimuler la réflexion et la logique** grâce à des énigmes basées sur des technologies concrètes.  
✅ **Favoriser l’apprentissage par la pratique**, en permettant aux participants de manipuler directement des composants électroniques. 
✅ **Donner envie d’explorer plus loin**, que ce soit dans le domaine des systèmes embarqués, de la cybersécurité ou du développement.  

## **À qui s'adresse ce projet ?**  

Ce CTF est idéal pour :  
🎯 Les collégiens et lycéens curieux de découvrir l'univers des nouvelles technologies.  
🎯 Les étudiants en informatique, électronique ou cybersécurité souhaitant une initiation ludique.  
🎯 Toute personne ayant envie de tester ses compétences et de relever un défi technique original !  

En participant à cet escape game, vous plongerez dans un univers où chaque indice compte, chaque énigme vous rapproche de la sortie… et où la **technologie est votre meilleure alliée** ! 🚀  

### Technologies utilisées

#### 1. **Télécommande infrarouge (IR)**
- **Composant :** Récepteur IR relié à la broche D4.
- **Rôle :**
  - Détecter les signaux de la télécommande.
  - Démarrer le jeu lorsque le bouton `#` est pressé.
- **Implémentation :**
  - J'ai analysé les commandes infrarouges pour identifier le code associé au bouton `#`, qui est `74`.

#### 2. **Lecteur de badge RFID**
- **Composants :** Module MFRC522 relié via SPI (broches SS : D10, RST : D9).
- **Rôle :**
  - Scanner les badges RFID et détecter leur UID (identifiant unique).
  - Valider cette étape en affichant l'UID dans le moniteur série.
- **Implémentation :**
  - Une fois un badge scanné, son UID est affiché et validé pour passer à l'étape suivante.

#### 3. **Capteur de température DHT11**
- **Composants :** Capteur DHT11 relié à la broche D2.
- **Rôle :**
  - Mesurer la température ambiante.
  - Valider l'étape si la température atteint un seuil prédéfini (32°C dans ce scénario).
- **Implémentation :**
  - La température est mesurée en temps réel et affichée dans le moniteur série.
  - Une fois le seuil atteint, un code secret (« 967823 ») est affiché pour avancer.

#### 4. **Microcontrôleur Arduino**
- **Modèle utilisé :** Arduino Uno.
- **Rôle :**
  - Gérer l'ensemble des interactions entre les composants.
  - Fournir des retours visuels (via le moniteur série) pour guider les participants.

### Fonctionnement du scénario

#### **Démarrage du jeu**
- Les participants appuient sur le bouton `#` de la télécommande.
- Une adresse IP (« 10.122.4.118/JPO_CTF/secret_gallery/ ») est affichée, redirigeant les participants vers le site web de l'escape game, où ils trouvent une image à analyser.

#### **Scan du badge RFID**
- Les participants doivent localiser le badge RFID dans la salle en s'aidant de l'image et le scanner sur le lecteur de badge RFID.
- Une fois scanné, l'UID du badge s'affiche dans le moniteur série pour valider cette étape et avancer.

#### **Résolution de l'énigme sur le site**
- En entrant le code du badge sur le site, il atterise sur une nouvelle pape web avec avec un code à décrypter "77723444666"
- Dans la salle, il y a une photo représentant un téléphone à touche.
- Les participants décryptent l'indice « Texte multi-tap » pour comprendre que le code forme le mot « radio ».

#### **Utilisation de la radio**
- En allumant la radio (qui a été mis en avance à 101.1MHz), un audio tourne en boucle : « Il fait froid ici ».
- Les participants comprennent qu'ils doivent chauffer le capteur DHT11 pour atteindre 31°C.
- Une fois la température atteinte, un code secret (« 967823 ») s'affiche dans le moniteur série.

#### **Étape finale : Le canal secret**
- En entrant le code « 967823 » sur le site, ils découvrent un canal secret (« 103.6 MHz »).
- En réglant la radio sur cette fréquence, un message final est diffusé :
  - « Bravo à vous, vous avez trouvé toutes les clés pour sortir de la matrice. Donnez le code 302005 aux agents de contrôle et vous pourrez sortir de la matrice ! »

### Points forts du projet
- **Interaction multimodale :** Combinaison de technologies IR, RFID, et capteurs pour une expérience variée et stimulante.
- **Scénario progressif :** Les participants avancent logiquement entre les étapes, avec des retours clairs à chaque validation.
- **Retour utilisateur clair :** Instructions et validations affichées en temps réel sur le moniteur série.

### Améliorations possibles
- **Ajout d'un affichage visuel :** Intégrer un écran LCD ou OLED pour présenter les étapes directement aux participants.
- **Feedback sonore :** Ajouter un buzzer pour signaler les validations ou erreurs.
- **Extensions scénaristiques :** Ajouter des énigmes supplémentaires ou des interactions basées sur des réseaux connectés.

---

