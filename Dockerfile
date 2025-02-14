# Verwende das PHP-CLI-Image
FROM php:8.2-cli

# Setze das Arbeitsverzeichnis auf /app
WORKDIR /app

# Installiere die benötigten Systempakete
RUN apt-get update && apt-get install -y libcurl4-openssl-dev pkg-config && rm -rf /var/lib/apt/lists/*

# Installiere die PHP-CURL Erweiterung
RUN docker-php-ext-install curl

# Kopiere den gesamten Code ins Image
COPY . .

# Mache das Skript ausführbar
RUN chmod +x update.php

# Halte den Container offen mit einer interaktiven Shell
CMD while true; do php update.php; sleep 300; done