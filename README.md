# simple-converter
Wizja projektu:
W firmie zatrudniamy osoby na różnych umowach, chcę móc przeliczyć kwoty brutto które wypłacam pracownikom na kwoty netto które otrzymują do ręki. Posiadam rozpiskę w postaci pliku CSV (w załączniku) Chciałbym dostać podobny plik z dwoma polami, Imieniem i nazwiskiem, oraz kwotą na ręke.

Pierwsza iteracja:
Chcę żeby na podstawie pliku "pracownicy.csv"
program zwrócił mi plik "kwoty_na_reke.csv " z odpowiednimi wyliczeniami.

-------
kolumny w pliku wejściowym - pracownicy.csv
Imię, nazwisko, wiek, rodzaj umowy, kwota brutto w zł
----
kolumny w pliku wyjściowym - kwoty_na_reke.csv
Imię i nazwisko, kwota do ręki w zł

Dodatkowo dla uproszczenia możemy założyć że kwoty będziemy wyliczać w taki sposób:
Przy B2B -  jest to skala liniowa 19%  z vatem 23%, pomijamy zus.
Przy umowie zlecenie - 50% koszty uzyskania przychodów, bez chorobowego
Umowa o prace już normalnie.

Aplikację uruchamiamy poleceniem php run.php w terminalu
