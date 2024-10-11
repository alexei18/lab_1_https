## Lucrare de laborator nr. 2. Cereri HTTP și șablonizare în Laravel

Am create o aplicatie pentru gestionarea sarcinilor "To-Do App", utilizand principiile de baza ale lucrului cu cererile HTTP in Laravel si sablonizarea folosind Blade.

## Intrebari de control

1. Ce este un controller de resurse în Laravel și ce rute creează?

   - In Laravel, un controller de resurse este un tip special de controller care facilitează crearea unei structuri standardizate pentru operatiile de tip CRUD. Se va crea cate o ruta pentru fiecare metoda: index, create, store, show, edit, update, destroy.

2. Explicați diferența între crearea manuală a rutelor și utilizarea unui controller de resurse.

   - Fiecare metodă are avantaje și dezavantaje, iar alegerea depinde de complexitatea aplicației și de preferințele de dezvoltare.
     - Crearea manuala, ideal pentru cazuri in care unele rute necesita functionalitati specifice, cum ar fi diferite prefixe sau URL-uri neconventionale.
     - Toate rutele CRUD sunt create automat cu o structura si URL-uri standardizate.

3. Ce avantaje oferă utilizarea componentelor anonime Blade?

   - Componentele anonime Blade in Laravel ofera modularitate și reutilizare usoara, separand logica de prezentare si imbunatatind consistenta interfetei. Cu `@props`, componentele devin personalizabile, eliminand codul duplicat și facilitand intretinerea.

4. Ce metode de cereri HTTP sunt folosite pentru a executa operațiunile CRUD?

   - `Create`: Foloseste metoda `POST` pentru a crea o noua resursa in server.
   - `Read`: Foloseste metoda `GET` pentru a citi sau accesa o resursa existenta.
   - `Update`: Foloseste metodele `PUT` sau `PATCH` pentru a actualiza o resursă existenta.
   - `Delete`: Foloseste metoda `DELETE` pentru a sterge o resursa.
