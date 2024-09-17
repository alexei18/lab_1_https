# Lucrare de laborator nr. 1: Bazele HTTP

## Descrierea lucrării individuale

În această lucrare am analizat cererile HTTP și răspunsurile generate la accesarea unui formular de autentificare pe un server sandbox. Am realizat două seturi de cereri: una cu date incorecte și una cu date corecte. De asemenea, am creat cereri HTTP GET, POST, PUT și DELETE și am analizat răspunsurile serverului.

## Documentație scurtă a proiectului

### Sarcina nr. 1: Analiza cererilor HTTP

1. **Metoda HTTP utilizată:** `POST`
2. **Anteturi trimise în cerere:**
   - `Content-Type: text/plain;charset=UTF-8`
   - `User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36`
3. **Parametri trimiși în cerere:**
   - `username: admin`
   - `password: password,jdsvf`
4. **Cod de stare returnat de server:** `401 Unauthorized`
5. **Anteturi trimise în răspuns:**
   - `Content-Type: application/x-www-form-urlencoded; charset=UTF-8`

### Repetarea pașilor cu date corecte:

- **Antet schimbat:** `Content-Type: application/json+protobuf`
- **Datele din răspuns:** `[]`

## Exemple de utilizare a proiectului

Pentru a realiza cererile HTTP, am folosit următoarele comenzi în `curl`:

- **Cerere GET:**

  ```bash
  curl -X GET http://sandbox.com -H "User-Agent: [Numele și prenumele]"
  ```

- **Cerere POST:**

  ```bash
  curl -X POST http://sandbox.com/cars \
       -H "User-Agent: Onea Alexei" \
       -d "make=Toyota&model=Corolla&year=2020"
  ```

- **Cerere PUT:**

  ```bash
  curl -X PUT http://sandbox.com/cars/1 \
       -H "User-Agent: Onea Alexei" \
       -H "Content-Type: application/json" \
       -d '{"make": "Toyota", "model": "Corolla", "year": 2021}'
  ```

- **Cerere DELETE:** (personalizat de tine)
  ```bash
  curl -X DELETE http://sandbox.com/cars/1 \
       -H "User-Agent: Onea Alexei"
  ```

## Răspunsuri la întrebările de control

1. **Ce este protocolul HTTP?**  
   HTTP (Hypertext Transfer Protocol) este un protocol de comunicație între un client și un server, utilizat pentru transferul datelor pe web.

2. **Pentru ce folosim antetul User-Agent?**  
   Antetul `User-Agent` este folosit pentru a identifica clientul care face cererea (ex. un browser web sau o aplicație).

3. **Care este diferența dintre metodele PUT și PATCH?**
   - `PUT` înlocuiește întreaga resursă pe server.
   - `PATCH` modifică doar părțile specificate ale resursei existente.
