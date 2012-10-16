Piratenkleider
- Wordpress-Theme f�r Webauftritte der Piratenpartei 
=================================================

Version 2.14 von Wolfgang Wiese (xwolf), 16. Oktober 2012


DOWNLOADS

    Aus dem GIT-Repo (Letzte Arbeitsversion und Betas):
        https://github.com/xwolfde/Piratenkleider	
        https://github.com/zwitschi/Piratenkleider (�sterreich)
    
    Projekt-Website (Releases)
        http://piratenkleider.xwolf.de
    
    
CREDITS & COPYRIGHT

 CC-BY-SA 3.0, http://creativecommons.org/licenses/by-sa/3.0/de/deed.de


AUTOREN / ENTWICKLER

   Wolfgang Wiese (xwolf), http://www.xwolf.de 

   Mit Hilfe von 
     Andre Sendowski, http://www.iphone-notes.de/
     Heiko Philippski, http://www.phindie.de/
     Kerstin Probiesch, http://www.barrierefreie-informationskultur.de
     Fabian M�ller, http://www.feals.de
     Georg Sinn, http://zwitschi.net
     Ralph Hinterleitner, rcs@deixis.at
     Jan Schejbal, http://janschejbal.wordpress.com/


   Quellen f�r Defaultbilder und CI-Materialen (CC-BY 3.0)
      Defaultgrafiken f�r Slider/Seitenbilder: Tobias M. Eckrich
      Weitere Bilder: Piratenwiki mit unterschiedlichen Autoren
      Bildbearbeitung f�r Piratenkleider 2.x: Wolfgang Wiese

   Weitere verwendete Inhalte:
      Social Media Icons: Paul Robert Lloyd, http://paulrobertlloyd.com/2009/06/social_media_icons      
      YAML CSS Framework (Lizensiert unter der Creative Commons Attribution 2.0 License).
      JavaScript Framework jQuery (GNU General Public License (GPL) Version 2)
      jQuery FlexSlider (MIT License)
      Schrift Bebas Neue von Dharmatype (SIL Open Font License 1.1)
      Schrift Droid Sans von Ascender (http://www.droidfonts.com/), Apache License 2.0 http://www.apache.org/licenses/LICENSE-2.0

VORVERSION

Dieses Theme basiert auf die Wordpress-Basisvorlage von Korbinian Polk.  
Das alte Original von korbinian kann auf github gefunden werden: 
 https://github.com/korbinian/Piratenkleider



MEN�S
   Die Seite besteht aus drei verschiedenen Men�s.

    - Hauptnavigation
        Hierin werden alle statischen Seiten des Webauftritts aufgef�hrt, die
        in der Hauptnavigation im oberen Teil der Seite, aber unter dem Logo
        erscheinen.
        Zu beachten ist, da� neben den Seiten des Webauftritts auch die 
        Startseite hinzugef�gt werden muss. Unter der Option Menu�s
        findet sich die Startseite, wenn man bei der Box
          "Listen" auf "Zeige alle" klickt.   
    - Linkmenu
        Hier befinden sich Links zu Werkzeugen oder Arbeitsportalen, wie
        bspw. das Wiki oder das Forum.
        Wenn diese Men� nicht definiert ist, wird es mit den Standardlinks
        besetzt: Wiki, Liquid Feedback, Forum, Flaschenpost
    - Technische Navigation
        In das technsiche Menu kommen (statische) Seiten, die etwas �ber
        den Webauftritt sagen, wie bspw. das Impressum, Kontakt, Credits.
        Das technische Men� kann in der Sidebar "Fu�bereich: Rechte Spalte"
        durch anderen Inhalt �berschrieben werden.

   Die Men�s m�ssen unter Design->Men�s selbst angelegt werden und die
   jeweiligen Seiten den Menus zugeordnet werden.
   Diese selbst angelegten Men�s werden dann unter dem Punkt
    "Anordnung im Theme" den drei genannten Bereichen zugeordnet.
   Bei dem Men�, welches der Hauptnavigation zugeordnet ist, sollte die
   Startseite der Website enthalten sein. Diese wird mittels CSS dann
   in ein H�uschensymbol umgewandelt.
   Sollte kein Menu angelegt und der hauptnavigation zugewiesen werden,
   wird ersatzweise ein Men� ausgehend von den vorhandenen Seiten aufgebaut.



INHALTE

1. Alle Seiten und Artikel sollten Artikel/Seitenbilder haben, da diese
   als Teaser angezeigt werden k�nnen.
2. Welche Artikel im Slider vorgestellt werden, wird in der Slider-
   Kategorie-Einstellung definiert.
3. Besondere Artikel k�nnen auf der Startseite im Slider erscheinen.
   Dies ist ein von selbst wechselndes Artikelbild mit der Verlinkung
   zu einem Artikel. 
   Um dies f�r einen Artikel zu machen, muss der Artikel in der
   f�r den Slider aktivierten Kategorie sein. (Siehe Punkt "Slider" unter den 
    Optionen "Takelage setzen")
   Sollte ein Artikel �ber kein definiertes Artikelbild verf�gen, wird
   das Defaultsliderbilder verwendet.       


BEREICHE/WIDGETS

1. "Sidebar (Rechte Spalte)"
    Dieser Bereich befindet sich rechts vom Inhaltsbereich. Er ist geeignet f�r
    Werbeplakate, Hinweise und �hnliches. Wenn leer, werden als Alternative 
    einige der allgemeinen Standardplakate gezeigt.
2. Sidebar 2 (Rechts unter Plakaten) 
    Dieser Bereich befindet sich rechts vom Inhaltsbereich. Er ist nach den 
    Werbeplakaten positioniert, die �ber die Optionen ein- oder abgeschaltet 
    werden k�nnen.
3. "Startseite: Sliderbereich"
    Hier werden per default die Artikelbilder der 3 Artikel gezeigt, die
    der Kategorie "Slider" zugeordnet sind.
    Wenn das Widget mit einer anderer Funktion gef�llt wird, dann
    entf�llt der Slider.
4. "Startseite: Rechter Aktionlinkbereich"
    Dieser Bereich ist rechts neben dem Slider. Auf der Piraten-Hauptsite
    befinden sich dort 3 Links zu Spendern/Mitmachen und Mitglied werden.
    Dieser 3 Teaserlinks k�nnen �ber die Theme-Option Takelage setzen
    ver�ndert werden. Wird das Widget genommen, wird dessen Inhalt jedoch
    diese �nderungen �berschreiben und der Widgetinhalt angezeigt.
5. "Startseite: Links unten" 
    Dies ist auf der Startseite der Bereich rechts neben der Liste der weiteren
    Artikel.
    Es empfiehlt das Widget mit der Schlagwortliste zu f�llen.
6. "Startseite: Rechts unten" 
    Bereich rechts unterhalb der drei Presseartikel.
    Wenn leer, wird hier eine Schlagwortliste gezeigt.
7. "Fu�bereich: Linke Seite"
   Bereich im Fu�teil unter dem Haupttextbereich. Dieser Bereich eignet sich 
   insbesondere f�r externe Links zu anderen Piratenwebsites auf regionaler oder 
   �beregionaler Ebene. Diese werden dann als Menu mit externen Links definiert 
   und dann als Widget dieser Sidebar zugeordnet. Wenn leer, wird hier nichts 
    angezeigt.
8. "Fu�bereich: Rechte Spalte"
   Rechte Spalte im Fu�bereich. Wenn leer, erscheint hier das technische Menu 
   (siehe Men�s). Wenn auch dieses nicht definiert ist, wird die Blogadresse und 
   dessen RSS-Feedadresse gezeigt


THEME-OPTION "Takelage einstellen"
 
  Unter der Option "Takelage setzen" sind die grundlegenden
  Optionen f�r das Theme einstellbar:
    - Newsletter-Box einschalten/abschalten
    - Social Media Buttons ein/ausschalten         
    - Anzahl der Nachrichten auf der Startseite und dessen Anordnung
      einstellen
    - Slider steuern     
    - Teaserlinks �ndern oder setzen
    - Sticker �ndern oder setzen
    - Webadressen f�r Newsletter, Mitgliederantr�ge und Spenden anpassbar
    - Metatag-Angaben �ndern
    - Optionale Anzeige f�r Seitenbilder steuern
    - Menutyp  f�r die Darstellung der Seiten und Unterseiten in der
      Sidebar steuern.
   Sowie viele mehr...  
 

THEME-OPTION "Segel setzen"
   
   Unter dieser Option lassen sich die Ersatzbilder festlegen, die angezeigt
   werden, wenn  Artikel oder  Seiten kein "Artikelbild" besitzen.
   Werden f�r den Slider keine Vorgaben gemacht, wird per Default die erste 
   Kategorie ("Allgemein") verwendet und Bilder per Zufall ausgegeben.

   Ausserdem k�nnen hier die Werbeposter beim Slider in der rechten Sidebar
   ausgew�hlt und �ber URL-Angaben zus�tzliche definiert werden.
   Werden keine Bilder vorausgew�hlt, werden alle Werbeposter im
   Slider definiert.

   Die Defaultbilder die in der rechten Sidebar als Werbeplakate erscheinen
   liegen im Ordner /plakate/ . 
   Bei einem anderen Gr��e wird das Bild entsprechend durch den Browser
   umskaliert. Dies kann jedoch mit Qualit�tseinbu�en verbunden sein.

   Eine komplette Liste an Werbeplakaten, die von der Piratenpartei eingesetzt
   wird, kann im Wiki unter der Seite http://wiki.piratenpartei.de/Plakate
   gefunden werden.

   Weiterhin k�nnen die Symbolbilder f�r die Metaseiten Suche, Tags, Kategorien,
   Autoren, Archiv und Templateseiten �ber die EIngabe einer eigenen Bild-URL
   ge�ndert werden. 

THEME-OPTION "Captn & Crew"

   Diese Option dient der Eintragung von Kontaktinformationen f�r die
   Templateseiten um das Impressum, die Datenschutzerkl�rung und
   optionalen Formularseiten.
     

THEME-OPTION "Kl�verbaum"

   Diese Option erm�glicht die �nderungen spezieller CSS-Anweisungen im
   Kopfteil der Seite, sowie das Einf�gen eigener CSS-Anweisungen.
   Ausserdem k�nnen hier die bekannten Farbcodes anderer L�nder aktiviert 
   werden.
   So ist es hier bspw. m�glich anstelle der Wellen und dem Schiff
   eine eigene Skyline als Hintergrundgrafik zu w�hlen.
   Diese Optionenseite sollte nun vor erfahrenen Webadmins ge�ndert werden,
   die genau wissen was sie tun.
   
   
THEME OPTION "Kopfzeile"   

   Diese Option dient dazu, das Logo zu �ndern und ein eigenes Logo 
   hochzuladen.
   Wichtiger Hinweis:
   Das Logo ist derzeit festgelegt auf eine Gr��e von 300x130 Pixeln.
   Der Hintergrund sollte  in RGB #eeeeee sein.
   Leider werden alle Bilder die hochgeladen werden in JPG umgewandelt,
   wenn sie es nicht schon sind. Die Qualit�t der Umwandlung ist jedoch
   nicht so gut.
   Aus diesem Grund empfiehlt es sich, das Logo in der passenden
   Gr��e und dem Hintergrund �ber einem eigenen Grafikprogramm 
   vorzubereiten.


THEME EIGENE WIDGETS

    Das Piratenkleider Theme enth�lt zwei Widgets, die f�r die verschiedenen
    Sidebars eingesetzt werden k�nnen:
    1. Widget "Piraten Linkliste"
        Das Widget kann eine vorgegebene Liste von Bereichen oder
        Gliederungen anzeigen. Dies entspricht der Liste die als Default
        im Fu�teil angezeigt werden kann.

    2. Widget "Piraten Newsletter"
        Das Widget kann ein Eingabeformular f�r den Newsletter 
        verwendet werden, zu dem die Adresse unter den Optionen eingegeben
        wurde.

        

UNTERST�TZE PLUGINS
  - Wenn das Plugin "Related Posts by Category" vorhanden und aktiviert ist,
    werden bei der Anzeige eines Artikels weitere Artikel verlinkt, die
    ggf. relevant sein k�nnten.
 - Das Plugin "ICS Calendar" kann verwendet werden um Termin in Widgets
   darzustellen.
   Unter "Einstellungen -> "ICS Calendar" sollte dieses wie folgt 
   konfiguriert werden:

    General Settings:
        URL to ICS File(s):
         zum Beispiel f�r Bayern:
         1. http://events.piratenpartei-bayern.de/events/ical?gid=&gid[]=10&cid=&subgroups=1&start=&end=
         2. http://events.piratenpartei-bayern.de/index.php/events/ical?gid=&gid[]=13&cid=


    Formatting:
        Date Format:  "j.m."
        Time Format:  "G:i"
        Custom Event Format: (Yes)
             %date-time%, %start-date%, %start-time%, %end-date%, %end-time%, 
                %event-title%, %description%, %location%   

   Die Zeitzone sollte auf UTC-Time gestellt werden.     

 -Advanced Custom Fields
  Mit Hilfe des Plugins Advanced Custom Fields k�nnen Seiten und Artikel um 
  zus�tzliche Felder erg�nzt werden.
  Im Theme wird dies bei Seiten (nicht Artikeln) unterst�tzt durch den 
  optionalen Parameter �right_column�. Dieser erlaubt es, zus�tzliche 
  Informationen in der rechte Spalte (der Sidebar) zu erg�nzen.

  Konfiguration von Advanced Custom Fields. Siehe Online Doku.

 - The Events Calendar
   Das Plugin "The Events Calendar" wird oft verwendet um eine
   Terminkalenderansicht zu erm�glichen. Um diese optimal in das Theme
   einzubauen, wurden eigene Templatefiles im Verzeichnis /events/ hinterlegt.

 - Kraehennest Podcaster
   (http://thegeek.de/neues-wordpress-plugin-der-krahennest-podcaster/)
   Dieses Plugin erm�glicht das Einlesen der Kr�hennest Podcasts. Dabei handelt
   es sich um vertonte Meldungen (http://kraehennest.piraten-wagen-mehr-demokratie.de/ )
   Das Plugin erkennt wenn Artikel mit gleichem Titel wie im Podcast 
   vorhanden sind und bindet in diesem Fall das Embedding f�r einen
   Flashplayer ein.
   

EMPFEHLUNGEN F�R WIDGETS
 
1. Terminkalender mit "ICS Calendar":
   Im Widget "Sidebar (Rechte Spalte) " sollte der ICS-Kalender f�r Termine 
   eingetragen werden.
   Darunter folgt eine weitere Text-Widget mit dem Inhalt:
   <a href="http:// ..  link-zur-eventseite ...">Weitere Termine anzeigen</a>

   (Leider verf�gt das ICS Plugin in der aktuellen Version noch  
    �ber keine Einstellung hinsichtlich der Sparche des Links zu 
    dem Kalendersystem oder zu einzelnen Terminen. Daher ist es aus
    Usability-Gr�nden derzeit besser, dies mit einem Textwidget danach
    zu machen.)
   

    

Administrative Hinweise f�r Wordpress Theme-Editoren:

1. Default-Bilder
   Die Auswahl der default-Bilder ist in Arrays in der Datei
   theme-options.php abgelegt. Die Bilder liegen im Verzeichnis /images/  
2. Default-Werbeplakate 
   Die Defaultbilder die in der rechten Sidebar als Werbeplakate erscheinen
   liegen im Ordner /plakate/ . 
3. Bilder in Inhaltsbereich, unter dem Menu
   Bei  Artikeln werden die jeweiligen Thumbnails der Artikelbilder 
   eingeblendet.
   Dabei wird die Standardgr��e f�r die Artikelbilder welche im Blog
   festgelegt ist, verwendet. Bei neu eingerichteten Blogs wird die mittlere
   Bildgr��e verwendet, die in x und y maximal 300 Pixel definieren und
   dann entsprechend umrechnen. 
   Unter Einstellungen-Mediathek sollte daher  die mittlere Gr��e der Bilder 
   auf 740 Pixel Breite und 240 Pixel H�he festgesetzt werden.
   Bei Artikelbilder, die aber auf der Breite eine H�herskalierung bed�rften
   klappt dies nicht so toll. Die Y-Achse wird dann doch gross gemacht.
   Daher sollte man darauf achten, da� nur solche Bilder gew�hlt werden die 
   auch tats�chlich entsprechend Breit sind.
   Am Besten bearbeitet man die Sliderbilder vor.
   Bei der optischen Darstellung des Sliders werden Bilder, die h�her sind als
   240 Pixel nach unten abgeschnitten. 

4. Es k�nnen bis zu drei Sticker im Kopfteil der Webseite plaziert werden.
   Unter der Theme-Optionen "Takelage setzen" kann man den Content
   des Sticker sund die Ziel-Adresse eingeben.
   Als Content kann HTML eingegeben werden um Bilder direkt einzublenden.
   Es kann aber auch nur ein Text als COntent eingegeben werden.
   Hierbei k�nnen �ber CSS-Klassen auch Farben und eine 5 Grad Drehung
   f�r die Texte bestimmt werden.
   Siehe hier zu die FAQ der Dokumentation f�r Beispiele.

    Vorhandene CSS-Klassen f�r Texte:
     cicolor =  setzt die Farbe die jeweils als Grundfarbe des Designs 
                definiert ist. (Default: orange)
     gedreht = Dreht den ganzen Text um 5 Grad
     animate = L�sst den Text bei einem Hover sich drehen und skalieren
     shadow  = Gibt den Text einen Schattenwurf
               (Bei gedrehten Text wird ein Schattenwurf automatisch gesetzt) 

5.  Die Teaserlinks rechts neben dem Bildslider auf der Startseite k�nnen
    individuell �ber die Theme-Option "Takelage setzen" gesetzt
    werden. Auch hier k�nnen bis zu 3 solcher Links eingegeben werden.
    Symbol, Zieladresse, Titel und Untertitel sind
    eingebbar. Titel und Untertitel sollten jedoch nicht l�nger als
    40 Zeichen sein.
    Das Symbol kann aus einer vorgegebenen Liste ausgew�hlt werden.
    
    Die Teaserlinks k�nnen als Option auch als ganzes
    deaktiviert werden indem ein Text-/Link-Widget in der
       "Startseite: Rechter Aktionlinkbereich"
    positioniert wuird.
    

6. Linkicons f�r bestimmte Dokumente werden �ber CSS gesteuert.
   Um dies "abszuschalten", muss in der CSS-Datei style.css lediglich
   das Stylesheet
       @import url(css/basemod_linkicons.css);
   auskommentiert werden.
   Bei besonderen Links die nicht mit einem Icon ausgestattet werden sollen, 
   kann auch die Klasse  .nolinkicon  gesetzt werden.
   Linkicons werden nur f�r den Inhaltsbereich gesetzt.

7. Farbcodes und Sprache der Texte
   Laenderspezifische Farbcodes werden in den Dateien
    /css/colors_tk.css  (f�r T�rkei)
    /css/colors_lu.css (f�r Luxemburg)
    /css/colors_at.css  (f�r �sterreich)
    /css/colors_de.css (f�r Deutschland, jedoch nicht notwendig da Default)
   abgelegt.
   Diese greifen teilweise auf eigene Bilder zu. 
   Diese Bilder sollten in /images/ liegen wenn sie allgemein sind und
   in /images/int/ wenn es um Bilder geht, die l�nderspezifisch sind.

   Hinsichtlich der Sprach�bersetzung von Texten k�nnen eigene Language-Dateien
   in einem Verzeichnis  /laguages/ abgelegt werden. Das Theme ber�cksichtigt
   diese, wenn solche Sprachdateien vorhanden sind.
   Zur Nutzung und Erstellung von Sprachdateien siehe
    http://www.catswhocode.com/blog/how-to-make-a-translatable-wordpress-theme

   Die Sprachdateien werden in der Form
        Sprachcode_Landescode.mo   und
        Sprachcode_Landescode.po
   abgelegt. Beispielsweise
        en_UK.po
        en_UK.mo
   
   Um auf die andere Sprache zu wechseln wird im Backend und Settings die
   Sprache auf die jeweilige Sprache gewechselt, sofern dies durch die
   ortsabh�ngige Version der Wordpress-Installation nicht bereits geschehen ist.
   Ab der Version 2.7 ist  bereits eine britisch englische Sprach�bersetzung
   beigelegt.
   Zur eigenen �bersetzung kann die Datei
      default.po
   mit Hilfe des Editors poedit bearbeitet werden.

8. Schriftfonts
   Da die Standard-BEBAS-Schrift nicht ueberall passt, unterst�tzt das backend 
   ab der Version 2.12 die M�glichkeit den Schriftfont zu aendern auf
   DroidSans oder Standardschrift (Helvetica/Aria/Sans-Serif).
  
9. Es werden teilweise Funktionen verwendet, die mit WP 3.4 "deprecated" sind.
   Da das Theme allerdings noch bei einigen Installationen unter WP 3.4
   eingesetzt wird, wurden diese Funktionen absichtlich noch nicht umgestellt.

10. Mit der Version 2.13 ist eine optionale Fullsize-Sicht pro Seiten und Artikel
   aber auch global f�r die gesamte Website m�glich. Dabei wird die Sidebar
   nach dem Inhaltsbereich positioniert.
   Vgl: hierzu die FAQ: http://piratenkleider.xwolf.de/faq/artikel-und-seiten-mit-voller-inhaltsbreite-sidebar-verschieben/

11. Mit Version 2.13 ist es m�glich mit Hilfe der Takelage-Sonstiges
   Funktion "Disclaimer f�r (Gast-)Artikel" einen Text (HTML) zu definieren
   der mit Hilfe des Custom Fields show-post-disclaimer um den Artikel
   angezeigt werden kann.

12. Ab Version 2.14 k�nnen auf der Startseite Thumbnails f�r in den Artikeln
    vorhandene Bilder anstelle des Datums eingeblendet werden. Hierzu gibt es
    im Backend eine Option: "Thumbnails anstelle Datum" 
    (Takelage einstellen->Startseite)