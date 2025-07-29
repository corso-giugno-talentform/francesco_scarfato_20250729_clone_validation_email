# ############################################################################
# git adhttps://github.com/corso-giugno-talentform/francesco_scarfato_20250729_clone_validation_email
# ############################################################################

Testiamo il clone di un progetto da github, ricreiamo le librerie mancati,
generiamo un nuovo .env e rifacciamo setup delle variabili di ambiente.
Quindi in sequenza lanciamo i seguenti comandi:

git clone git@github.com:NomeCognome/progetto.git  cd progetto


Successivamente, installiamo le dipendenze necessarie:
composer install
npm install

Creiamo e configuriamo l’ambiente di sviluppo:
cp .env.example .env

php artisan key:generate

Creiamo il database e lancia le migrazioni:
touch database/database.sqlite

php artisan migrate

Infine, lanciamo il server locale con:
php artisan serve
npm run dev

Oppure

composer run dev

Per verificare che sia tutto correttamente funzionante

# ############################################################################
# Esercizio
# ############################################################################

Andiamo su EmailTrap e creiamo un account per la sandbox in maniera tale da catturare tutte le email invece di inviarle agli indirizzi reali.

https://mailtrap.io/

A questo punto generiamo due classi per inviare le email tramite la piattaforma Laravel, una per comunicare con l'utente e una per informare l'admin che ha ricevuto della posta.

Aggiornare il metodo send() del nostro controller princiale e inviamo anche le relative email con:

Mail::to($request->email)->send(new SendMail($data));
Mail::to('foo@gmail.com')->send(new SendAdminMail($data));

Creiamo anche due templates in cui inserire anche i dati che abbiamo recuperato dalla form contattaci.

Verificare che nella nostra sandbox di EmailTrap ritroviamo le email come da specifiche.