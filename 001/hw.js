console.log('Tikrinu');

/*
#1
1. Programiškai ridenkite du žaidimo kauliukus- sugeneruokite du atsitiktinius skaičius nuo 1 iki 6 Jeigu kauliukų suma didesnė nei 8 jūs laimėjote, priešingu atveju pralošėte. Išveskite atsakymą, kuriame būtų abiejų kauliukų reikšmės ir išvada laimėjote ar pralošėte.
*/

function getRandom(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1) + min);
}

const dice1 = (getRandom(1, 6));
const dice2 = (getRandom(1, 6));

console.log (dice1, dice2);

if (dice1 + dice2 >= 8) {
    console.log ('Laimejau!');
} else {
    console.log ('Pralosiau...')
}

// Alternatyvus sprendimas:

if (getRandom(1, 6) + getRandom(1, 6) >= 8) {
    console.log ('Laimeeeeejau!');
} else {
    console.log ('Praaaaalosiau...')
}

/*
2. Gyveno du katinukai, Pilkis ir Murklys. Jų svoriai kilogramais buvo atsitiktiniai dydžiai nuo 3 iki 6. Parašyti programą, kuri išvestų katinukų svorius ir apskaičiuotų, kuris katinukas yra lengvesnis. Atsakymas turi būti katinukų vardai su jų svoriais ir lengvesnio katinuko vardas. Jeigu katinukai sveria vienodai, vietoj katinuko vardo parašykite, kad “katinukų svoriai vienodi”.
*/

const Pilkis = (getRandom(3, 6));
const Murklys = (getRandom(3, 6));

console.log (Pilkis, Murklys);

if (Pilkis < Murklys) {
    console.log (
        'Pilkis' + '=' + Pilkis +';' + 
        ' Murklys' + '=' + Murklys +';' +        
        ' Lengvesnis Pilkis')
} else if (Pilkis > Murklys) {
    console.log (
        'Pilkis' + '=' + Pilkis +';' + 
        ' Murklys' + '=' + Murklys +';' +        
        ' Lengvesnis Murklys')
} else {
    console.log ('Katinukų svoriai vienodi');
}

/*
3. Nojus pasiruošė potvyniui ir nusipirko dvi valtis. Vienoje telpa 15 katinukų, kitoje 15 karvių (katinukus galima sodinti tik į katinukų valtis, o karves tik į karvių, maišyti negalima) Prasidėjus liūčiai pas Nojų atėjo atsitiktinis skaičius nuo 0 iki 30 katinukų ir toks pats atsitiktinis skaičius karvių. Išveskite atėjusių katinukų ir karvių skaičių ir ar Nojus galės juos sutalpinti į valtis. Jeigu netelpa tik katinukai arba tik karvės vistiek išveskite “Netelpa”. Kas konkrečiai netelpa išvedinėti nereikia. “Telpa” išveskite tik tuo atveju jeigu ir katinukai ir karvės telpa.
*/

const katinukai = (getRandom(1, 30));
const karves = (getRandom(1, 30));

console.log (katinukai, karves);

if (katinukai <= 15 && karves <=15 && katinukai + karves <=30) {
    console.log('Telpa');
} else {
    console.log('Netelpa');
}

/*
4. Antanas nusipirko naują butą ir pinigų jam liko nedaug. Dabar jis niekaip negali apsispręsti ką pirmiausiai pirkti: televizorių, skalbimo mašiną ar šaldytuvą. Todėl nusprendžia ridenti kauliuką (atsitiktinis skaičius nuo 1 iki 6) ir jeigu iškris 1 arba 5 pirkti televizorių, jeigu 3 arba 4 pirkti skalbimo mašiną ir jeigu 2 arba 6 - šaldytuvą. Padėkite Antanui apsispręsti. Ridenkite kauliuką ir parašykite atsakymą kokį daiktą jam pirkti.
*/

const pirkti = (getRandom(1, 6));

console.log(pirkti);

if (pirkti === 1 || pirkti === 5) {
    console.log ('televizorių');
} else if (pirkti === 3 || pirkti === 4) {
    console.log ('skalbyklę');
} else {
    console.log ('šaldytuvą');
}

/*
(BOSO lygis) Sugeneruokite tris atsitiktinius skaičius nuo 1 iki 7. Skaičius atspausdinkite nuo mažiausio iki didžiausio. Pavyzdžiui: sugeneravus 4, 2, 4 juos reikia atspausdinti tokia tvarka: 2 4 4;
*/

const boss1 = (getRandom(1, 7));
const boss2 = (getRandom(1, 7));
const boss3 = (getRandom(1, 7));

console.log(boss1, boss2, boss3);

const bossAll = [];

bossAll.push(boss1, boss2, boss3);

bossAsc = bossAll.sort();

console.log(bossAsc);

/*
#2
1. Vyksta automobilių žiedinės lenktynės. Automobiliui Nr. 55 liko nuvažiuoti 10 ratų. Suprogramuokite for ciklą, kuris imituotų 10 ratų automobilio važiavimą ir kiekviename cikle pateiktų (atspausdintų) kiek ratų dar liko automobiliui nuvažiuoti. Paskutinis skaičius turėtų būti 1. Visas rezultatas turėtų būti toks:  10 9 8 7 6 5 4 3 2 1 (skaičiai gali būti atspausdinti stulpeliu).
*/

for (let r = 10; r >= 1; r--) {
    console.log(r);
}
console.log('------');

/*
2. Vyksta automobilių žiedinės lenktynės. Automobiliui Nr. 55 liko nuvažiuoti 10 ratų. Kiekvieną ratą automobilis važiuoja skirtingu nuo 120 iki 220 km/h greičiu. Suprogramuokite for ciklą, kuris imituotų 10 ratų automobilio važiavimą, rand() funkcija generuokite atsitiktinį automobilio greitį o visiems ciklams pasibaigus pateikite bendrą visų 10 ratų vidutinį greitį.
*/
speed = (getRandom(120, 220));

for (let s = 0; s < 10; s++) {
    
}
console.log('------');