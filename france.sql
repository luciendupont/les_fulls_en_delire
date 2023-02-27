drop database if exists france;
create database france;
use france;
 create table region(
  id_region varchar(255),
  name_region varchar(255),
  cap_region varchar(255),
  nbhabit_region int,
  dep_region varchar(255),
  superfi_region int,
  pib_region int,
  pic_region varchar(255)
) ;

insert into region
(id_region,name_region,cap_region,nbhabit_region,dep_region,superfi_region,pib_region,pic_region)
values
(1,"Auvergne-Rhône-Alpes","Lyon",8153233,"01,03,07,15,26,38,42,43,69,73,74,69",711,250,"logos-regions-francaises/logo-auvergne-rhone-alpes.png"),
(2,"Bourgogne- Franche-Comté","Dijon",2785393,"21,25,39,58,70,71,89,90",47784,74,"logos-regions-francaises/logo-bourgogne-franche-comte.png"),
(3,"Bretagne","Rennes",3402932,"22,29,35,56",27208,92,"logos-regions-francaises/logo-bretagne.png"),
(4,"Centre - Val de Loire","Orléans",2564915,"18,28,36,37,41,45",39151,70,"logos-regions-francaises/logo-centre-val-de-loire.png"),
(5,"Corse","Ajaccio",349465,"2A,2b",8680,9,"logos-regions-francaises/logo-corse.png"),
(6,"Grand Est","Strasbourg",5542094,"08,10,51,52,54,55,57,67,68,88",57433,152,"logos-regions-francaises/logo-grand-est.png"),
(7,"Hauts-de-France","Lille",5987172,"02,59,60,62,80",31813,157,"logos-regions-francaises/logo-hauts-de-france.png"),
(8,"Île-de-France","Paris",12395148,"75,77,78,91,92,93,94,95",12011,669,"logos-regions-francaises/logo-ile-de-france.png"),
(9,"Normandie","Rouen",3307286,"14,27,50,61,76",29906,92,"logos-regions-francaises/logo-normandie.png"),
(10,"Nouvelle Aquitaine","Bordeaux",6081985,"16,17,19,23,24,33,40,47,64,79,86,87",84061,164,"logos-regions-francaises/logo-nouvelle-aquitaine.png"),
(11,"Occitanie","Toulouse",6053548,"09,11,12,30,31,32,34,46,48,65,66,81,82",72724,159,"logos-regions-francaises/logo-occitanie.png"),
(12,"Pays de la Loire","Nantes",3873096,"44,49,53,72,85",32082,110,"logos-regions-francaises/logo-pays-de-la-loire.png"),
(13,"Provence-Alpes-Côte d'Azur","Marseille",5131187,"04,05,06,13,83,84",31400,155,"logos-regions-francaises/logo-provence-alpes-cote-d-azur.png"),
(14,"Guadeloupe","Basse terre",375845,"971",1629,9,"logos-regions-francaises/drapeau-guadeloupe.png"),
(15,"Martinique","fort de france",347686,"972",1128,9,"logos-regions-francaises/drapeau-martinique.png"),
(16,"Guyane","cayenne",301099,"973",86504,5,"logos-regions-francaises/drapeau-guyane.png"),
(17,"La réunion","Saint denis",873102,"974",2512,20,"logos-regions-francaises/drapeau-la-reunion.png"),
(18,"Mayotte","Saint pierre",6092,"976",376,3,"logos-regions-francaises/drapeau-mayotte.png");

create table lieu (
id_lieu varchar(225),
region_lieu varchar(255),
dep_lieu varchar(255),
name_lieu varchar(255),
pic_lieu varchar (255)
);
insert into lieu
(id_lieu,region_lieu,dep_lieu,name_lieu,pic_lieu)
values
(1,"Auvergne-Rhône-Alpes","haute-savoie","le-mont-blanc","lieu/visiter-france-mont-blanc.jpg.webp"),
(2,"Bourgogne-Franche-Comté","côté-d'or","beaune","lieu/beaune.jpg.webp"),
(3,"Bretagne","finistère","ouessant","lieu/bretagne-ouessant.jpg.webp"),
(4,"Centre-Val-de-Loire","indre-et-loire","le-chateau-d'amboise ","lieu/visiter-france-chateaux-loire.jpg.webp"),
(5,"Corse","corse-du-sud","porto-vecchio","lieu/porto-vecchio.jpg.webp"),
(6,"Grand Est","bas rhin","koenigsbourg","lieu/haut-koenigsbourg.jpg.webp"),
(7,"Hauts de France","somme","baie de somme","lieu/shutterstock_680856493.jpg.webp"),
(8,"Île de France","seine et marne","fontainebleau","lieu/fontainebleau.jpg.webp"),
(9,"Normandie","manche","mont-saint-michel","lieu/visiter-france-mont-saint-michel.jpg.webp"),
(10,"Nouvelle Aquitaine","Dordogne","les grottes de lascaux","lieu/visiter-france-grotte-lascaux.jpg.webp"),
(11,"Occitanie","aude","carcasonne","lieu/visiter-france-cite-carcassonne.jpg.webp"),
(12,"Pays de la loire","vendee","noirmoutier","lieu/noirmoutier.jpg.webp"),
(13,"Provence-Alpes-Côte d'Azur","Alpes de Haute-Provence","allos","lieu/visiter-france-lac-allos.jpg.webp"),
(14,"Guadeloupe","971","la desirade","lieu/la-desirade-guadeloupe-99.jpg"),
(15,"martinique","972","trinité","lieu/caravelle-martinique.jpg.webp"),
(16,"Guyane","973","kourou","lieu/5e6fea830df99_1c5983d0-63fc-4f15-bbb6-ccdaf124f0aa-1313144.webp"),
(17,"la Reunion","974","sainte rose","lieu/ascension-piton-de-la-fournaise.jpg.webp"),
(18,"Mayotte","976","petite-terre","lieu/lac-dziani.jpg.webp");

create table perso(
  id_perso varchar(255),
  region_perso varchar(255),
  name_perso varchar(255),
  pic_perso varchar(255)
);
insert into perso 
(id_perso,region_perso,name_perso,pic_perso)
values
(1,"Auvergne-Rhône-Alpes","stendhal","perso/765804.webp"),
(2,"Bourgogne-Franche-Comté","victor hugo","perso/Victor_Hugo_001.jpg"),
(3,"Bretagne","françois rené de chateaubriand","perso/François-René_de_Chateaubriand.PNG"),
(4,"Centre-Val-de-Loire"," honoré de balzac","perso/1003637-Honoré_de_Balzac.jpg"),
(5,"Corse","napoleon","perso/napoleon-bonaparte-674x1024.png"),
(6,"Grand Est"," paul verlaine ","perso/SCOCLESUQU2LFC3NSYB4QFKFYY.jpg"),
(7,"Hauts  DE France","jean de  la fontaine","perso/1004051-Jean_de_La_Fontaine.jpg"),
(8,"Île de France","voltaire","perso/Atelier_de_Nicolas_de_Largillière,_portrait_de_Voltaire,_détail_(musée_Carnavalet)_-002.jpg"),
(9,"Normandie","maupassant","perso/Maupassant_par_Nadar.jpg"),
(10,"Nouvelle aquitaine","montesqieu","perso/Chateau-de-la-Brede-Montesquieu-e1624344327863.jpg"),
(11,"Occitanie","jean jaures","perso/Jean_Jaurès,_1904,_by_Nadar.jpg"),
(12,"Pays de la Loire","jules verne","perso/Félix_Nadar_1820-1910_portraits_Jules_Verne.jpg"),
(13,"Provence-Alpes-Côte d'Azur","paul cezanne","perso/Paul-Cezanne.jpg");













































)