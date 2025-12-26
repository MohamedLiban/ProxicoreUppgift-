Md

# Proxicore – kör lokalt

Detta är en liten kundmodul byggd med Laravel och Livewire.

## Så här kör du projektet lokalt

### 1. Klona repo

```bash
git clone https://github.com/MohamedLiban/ProxicoreUppgift-.git
cd ProxicoreUppgift-
git checkout main    # eller Produktion om du vill
2. Installera PHP‑beroenden

Bash

composer install
php artisan key:generate
3. Skapa .env och ställ in SQLite

Bash

cp .env.example .env   # om .env inte finns
Öppna .env och ändra databasen till:


Env

DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
Skapa databasen:


Bash

mkdir -p database
touch database/database.sqlite
Kör migreringar:


Bash

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
