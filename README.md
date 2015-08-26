CIBlog
==========

[![Build Status](https://status.continuousphp.com/git-hub/fdewinne/phpsummercamp-ci?token=9470d3c3-0366-4e47-93fb-d36d8491e87d)](https://continuousphp.com/git-hub/fdewinne/phpsummercamp-ci)

Una applicazione di esempio per mostrare come configurare una build con Jenkins

workshop ci 2h

- introduzione
- perchè ci?
-- da mesi / settimane a giorni / minuti
-- velocità senza sicurezza come andare in auto senza freni
-- piccoli cambiamenti integrati spesso piuttosto che big bang integration
-- MANTRA: if it hurts do it more often
-- automazione elimina gli errori umani
-- attività ripetibili
-- fattore bus factor mitigato

- i principi base
-- processo, non strumenti
-- overview: script di build, controllo di versione, test, data migrations, ci, feedback
-- ridurre al minimo il tempo tra cambiamento effettuato e sapere se il cambiamento è ok o meno

- tutti usano un sistema di controllo di versione
-- svn vs git/hg
-- gestione dei branch: unico master (feature flag?), feature branch, feature branch + dev branch
-- MANTRA tutti committano almeno una volta al giorno

- esistono test automatici
-- no test no party
-- vuoi andare veloce senza freni?
-- test automatici: unitari, integrazione, funzionali
--
-- ed i test manuali? certo ma...
-- test come documentazione tecnica dei progetti
-- rapporti costi/benefici
-- MANTRA: non si committa una build rotta. si ma sono le 5... beh fatti un feature branch o usa feature flag

- esiste uno script di build
-- incrementale
-- prima produrre un walking skeleton, poi aggiugere
-- non fidarsi deli IDE, creare script di build indipendenti
-- I Build So Consistently
-- tool: bash, xml based (ant, phing), language dependent (rake, make, pake, ...), mvn

- esiste un server di continuous integration
-- MANTRA: no more works on my machine
-- tool: build vs buy, jenkins, go vs travis codeship
-- ogni commit viene buildata
-- polling vs notifiche vs manuale

- migrazione dei dati
-- MANTRA: dati come codice. le modifiche ai dati non sono manuali ma automatizzate
-- il dba fa parte del team
-- ma io non ho accesso al db: beh almeno

- strumenti per analizzare il codice
-- mess detector, analisi statica, crap,
-- documentazione automatica: metadati dal codice + doc (anche questa trattata come codice)
-- doc per api rest: raml, swagger

- feedback
-- chiudere il giro
-- chi ha rotto la build?
-- se la build è rotta la priorità è fixarla

- tips
-- la build è lenta
-- i test sono lenti

what's next?

