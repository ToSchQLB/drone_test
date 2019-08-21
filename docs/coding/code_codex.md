Code Codex
==========
Dieses Dokument beschreibt wie in diesem Projekt der Code aussehen soll

Primäre Vorschriften
--------------------
- [Yii 2 Core Framework Code Style](https://github.com/yiisoft/yii2/blob/master/docs/internals/core-code-style.md)
- [Yii 2 View Code Style](https://github.com/yiisoft/yii2/blob/master/docs/internals/view-code-style.md)

PHPDoc
------
- PHPDoc sind stets auf einen aktuellen Stand zuhalten. 
    - d.h. Migrationen ziehen in der Regel ebenfalls Änderungen am PHPDoc nach sich
- alle Methoden mit Rückgabewert sind zwingend mit PHPDoc zu versehen
- sonstigen Methoden sollten nach Möglichkeit auch über eine Beschreibung und Parameterspezifikation verfügen
- Views müssen über eine Beschreibung aller Parameter verfügen
    - Tipp: Views über die Codervervollständingung in phpStorm generieren lassen
    
Git-Commit
----------
- [Git Conventional Commits](https://www.conventionalcommits.org/en/v1.0.0-beta.4/#summary)
- mit jedem Commit werden in phpStorm foldene Aktionen durchgeführt
    - Reformat Code
    - Rearrange Code
    - Optimize Imports
    
Methoden und Funktionen
-----------------------
- erfüllen nur eine Funktion
    - sonst in mehrere Methoden/Funktionen aufsplitten
- haben ausdrucksstarke, domainenspezifische Namen
- sollten in der Regel nich länger als 20 Zeilen sein
    - je kleiner umso besser
- sollten keine größeren Einrückungstiefen als 1 oder 2 haben

Dopplungen
----------
liegen Dopplungen im Code vor, läuft wahrscheinlich etwas falsch und es sollte geprüft werden, ob etwas in eine Funktion/Methode ausgelagert werden könnte

Kommentare
----------

Tests
-----

