var nimi = "";

var punktid = 0;
var paev = new Date();
var kuupaev = paev.getTime();

function lisaPunkt() {
    punktid++;
    console.log("Lisasin punkti");
    document.getElementById("tekst").innerHTML = "Punkte hetkel: " + punktid;
};

function startTimer() {
    nimi = prompt("Sisesta oma nimi");
    nimi = puhasta(nimi);
    document.getElementById("postnimi").value = nimi;
    document.getElementById("nupp").style.visibility = "visible";
    document.getElementById("nupp0").style.visibility = "hidden";
    setTimeout(function() {
        var element = document.getElementById("nupp");
        element.outerHTML = "";
        delete element;
        document.getElementById("tekst").innerHTML = "Said punkte: " + punktid;
        document.getElementById("nupp2").style.visibility = "visible";
    }, 10000);
};

function clearContents(element) {
  element.value = '';
};

function salvesta() {
    var data = {
        mn: nimi,
        p: punktid,
        kp: kuupaev
    };
    document.getElementById("nupp2").style.visibility = "hidden";
    document.getElementById("kommentaariVorm").style.visibility = "visible";
    $.post("../php/saadaPunktid.php", data);

};

function n2itaKomm() {
    document.getElementById("nupp3").style.visibility = "hidden";
    document.getElementById("kommentaarid").style.visibility = "visible";
};

function puhasta(algne) {
  return algne.replace(/[|&;$%@"<>()+,]/g, "");
};

function textFromHtmlString( arbitraryHtmlString ) {
    const temp = document.createElement('div');
    temp.innerHTML = arbitraryHtmlString;
    return temp.innerText;
};