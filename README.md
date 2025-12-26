Md

# Proxicore – kör lokalt

Detta är en liten kundmodul byggd med Laravel och Livewire.

## Så här kör du projektet lokalt

Md

## Installation – kör lokalt

### 1. Klona repo

```bash
git clone https://github.com/MohamedLiban/ProxicoreUppgift-.git
cd ProxicoreUppgift-
git checkout main    # eller: git checkout Produktion
2. Installera PHP‑beroenden

Bash

composer install
php artisan key:generate
3. Skapa .env och ställ in SQLite
Projektet innehåller ingen .env.example, så skapa .env manuellt i projektroten.

Skapa filen .env och klistra in detta innehåll:


Env

APP_NAME="Proxicore CRM"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

APP_LOCALE=sv
APP_FALLBACK_LOCALE=sv
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite

SESSION_DRIVER=database
SESSION_LIFETIME=120

QUEUE_CONNECTION=database
CACHE_STORE=database

VITE_APP_NAME="${APP_NAME}"
Kör sedan:


Bash

php artisan key:generate
Skapa databasen och kör migreringar:


Bash

mkdir -p database
touch database/database.sqlite
php artisan migrate
4. Installera frontend‑beroenden

Bash

npm install
npm run dev
Låt npm run dev vara igång i en egen terminal.

5. Starta Laravel‑servern
I en ny terminal:


Bash

php artisan serve
Öppna sedan i webbläsaren:

http://127.0.0.1:8000/customers – kundlista

http://127.0.0.1:8000/customers/create – skapa ny kund
