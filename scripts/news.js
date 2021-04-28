/* var titulo =  document.getElementById("title").value;
var categoria = document.getElementById("category").value;
var cuerpo = document.getElementById("article").value;
alert(titulo);
    alert(categoria);
    alert(cuerpo);
var html =  "<article class='col-xs-12 col-sm-12 col-md-6 col-lg-4'><div class='titulo-noticia'>+titulo+</div><div class='categoria-noticia'>+categoria+</div><div class='texto-noticia'>+cuerpo"
document.getElementById("news").innerhtml = html  */

function myFunction() {
    var titulo =  document.getElementById("title").value;
    var categoria = document.getElementById("category").value;
    var cuerpo = document.getElementById("article").value;
    var html = "<article class='col-xs-12 col-sm-12 col-md-6 col-lg-4' id='news'><div class='titulo-noticia'>+titulo+</div><div class='categoria-noticia'>+categoria+</div><div class='texto-noticia'>+cuerpo";
    alert(html);
    document.getElementById("new").appendChild(html);
}
