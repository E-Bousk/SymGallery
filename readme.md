## Environnement de developpement

### Pré-requis

* PHP 7.4
* Composer
* Symfony CLI
* Docker
* Docker-compose

Vérifier les pré-requis (sauf Docker et Docker-compose) avec la commande suivante (CLI Symfony) :

```bash
symfony check:requirements
```

### Lancer l'environnement de développement

```bash
docker-compose up -d
symfony server:start -d
```