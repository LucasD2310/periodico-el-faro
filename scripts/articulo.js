//document.body.onload = addElement;

const titulo = document.getElementById('title');
const categoria = document.getElementById('category');
const articulo = document.getElementById('article');

let container = document.createElement('article');
container.style.cssText = 'width:30%;background-color:white;font-family:"Playfair Display";padding: 10px 20px 10px 20px;box-sizing:border-box;';

article_form.addEventListener("submit", e => {
    alert(`titulo: ${titulo.value}\ncategoria: ${categoria.value}\narticulo: ${articulo.value}`)
    container.append(`<div class="titulo-noticia">${value}=${titulo}</div>`);
    container.append(`<div class="categoria-noticia">${value}=${categoria}</div>`);
    container.append(`<div class="texto-noticia">${value}=${articulo}</div>`);
})


/*form.addEventListener("submit", e=> {
    let container = document.createElement('article');

    let title = document.createElement('div');
    title.style.cssText = 'font-style:bold;font-size:20px;text-align:justify';
    title.innerHTML = titulo.value;
    container.appendChild(title);

    let category = document.createElement('div');
    category.style.cssText = 'font-style:italic;font-size:15px;margin-bottom:10px;';
    category.innerHTML = categoria.value;
    container.appendChild(category);

    let article = document.createElement('div');
    article.style.cssText = 'font-style:normal;font-size:13px;text-align:justify;';
    article.innerHTML = articulo.value;
    container.appendChild(article);

    let currentArticle = document.getElementsId('noticia')
    document.body.insertBefore(container, currentArticle);
})*/

/*$(document).ready(function() {
    const titulo = document.getElementById('title');
    const categoria = document.getElementById('category');
    const articulo = document.getElementById('article');

    const container = document.createElement('article');
    container.style.cssText = 'width:30%;background-color:white;font-family:"Playfair Display";padding: 10px 20px 10px 20px;box-sizing:border-box;';

    $('#btn_submit').click(function() {
        $(container).append(`<div class="titulo-noticia"></div> ${value}=${titulo}`);
        $(container).append(`<div class="categoria-noticia"></div> ${value}=${categoria}`);
        $(container).append(`<div class="texto-noticia"></div> ${value}=${articulo}`);

        $('#main').before(container);
    });
});*/

// Obtiene los valores de los textbox al dar click en el boton "Enviar"
/*var divValue, values = '';

function GetTextValue() {

    $(divValue).empty();
    $(divValue).remove(); values = '';

    $('.input').each(function() {
        divValue = $(document.createElement('div')).css({
            padding:'5px', width:'200px'
        });
        values += this.value + '<br />'
    });

    $(divValue).append('<p><b>Tus valores añadidos</b></p>' + values);
    $('body').append(divValue);

}*/

