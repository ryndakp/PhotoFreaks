# Projekt zaliczeniowy z przedmiotu: _**Bazy Danych**_

# Temat projektu: Serwis internetowy ,,PhotoFreaks"
## Autor: Patrycja Ryndak
## O projekcie
Aplikacja internetowa ,, PhotoFreaks” jest witryną gdzie użytkownik może dodać zrobione przez siebie zdjęcie. Do dodania zdjęcia potrzebne jest utworzenie konta na stronie. Po zalogowaniu się na swoje konto użytkownik jest w stanie dodawać nowe zdjęcia, ma wgląd w dodane zdjęcia oraz ma opcję usunięcia dodanego zdjęcia. Zdjęcia udane przez użytkownika wyświetlane są na stronie głównej, gdzie może zobaczyć je każdy odwiedzający stronę.
# Specyfikacja projektu
## Wykorzystane technologie:
- HTML5
- CSS 3
- JavaScript
- PHP

## Interfejs witryny:
### Strona główna:
![image](https://user-images.githubusercontent.com/63348363/140932390-a415a4e3-3f73-4830-bc4c-89a5f78bbeb3.png)
### Panel rejestracji i logowania
![image](https://user-images.githubusercontent.com/63348363/140932406-6d75fdbd-4468-4f42-8f9a-3cc48fbfca50.png)
![image](https://user-images.githubusercontent.com/63348363/140932417-fab737d4-08d0-48b6-8736-cd0e73801411.png)
### Panel użytkownika
![image](https://user-images.githubusercontent.com/63348363/140932441-3e374e4f-892e-4d22-a2f5-f48ce4f46b51.png)
![image](https://user-images.githubusercontent.com/63348363/140932527-67dae403-a0b6-4730-b92d-bf2cfabe8a5e.png)

## Uruchamianie aplikacji (krok po kroku)

### Do uruchomienia aplikacji należy pobrać i zainstalować :
•	Oracle XE 18c 
•	Uruchomić maszynę w VirtualBox
•	W wierszu poleceń należy wpisać następujący ciąg komend :
- ssh root@127.0.0.1 -p 2200 -L 1521:127.0.0.1:1521
- /etc/init.d/oracle-xe-18c start
- . oraenv
- # XE
- sqlplus system/haslo@//localhost:1521/XEPDB1

•	Następnie uruchamiamy Xampp i tam startujemy Apache oraz MySql

•	Następnie kopiujemy wszystkie pliki zawarte w folderze WitrynaZdjec i dodajemy go do folderu Xamppa o nazwie ,,htdocs"

•	Pobieramy i uruchamiamy SQL Developer oraz importujemy załączony plik SQL

•	Otwieramy okno przeglądarki i wpisujemy localhost/WitrynaZdjec/index.php

Grafiki wykorzystane do utworzenia serwisu pochodzą ze strony www.pixabay.com i podlegają licencji Pixabay License. Grafiki są darmowe i nie wymagają przypisania autora.
