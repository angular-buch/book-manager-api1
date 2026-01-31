# BookManager API v1

Dieses Projekt enthält eine HTTP-API für die BookManager-Anwendung aus dem [Angular-Buch](https://angular-buch.com).
Die Schnittstelle bietet CRUD-Operationen für Buchdatensätze an.
Ein öffentlich verfügbarer Server wird unter [api1.angular-buch.com](https://api1.angular-buch.com) gehostet.

## Installation

> :warning: **Du musst dieses Projekt nicht installieren, um die API zu nutzen. Bitte verwende den öffentlichen Server unter [api1.angular-buch.com](https://api1.angular-buch.com).**

Der Ordner `public` muss eine `.env`-Datei mit MySQL-Zugangsdaten enthalten.
Kopiere die Datei `.env.example` nach `.env`.

Abhängigkeiten werden mit Composer verwaltet. Führe im Projektverzeichnis den folgenden Befehl aus, um alle Abhängigkeiten zu installieren:

```bash
composer install
```

## Swagger UI

Das Paket `swagger-ui` wird als Abhängigkeit über `composer` installiert.
Das bereitgestellte Verzeichnis `public/swagger-ui` ist ein Symlink auf das Paket `swagger-ui` im Ordner `vendor`.
Um Swagger UI konfigurieren zu können, ersetzt eine Apache-Rewrite-Regel die vordefinierte Konfiguration durch unsere eigene Version (`public/swagger-initializer.js`).
