
let cuadroActual = 1;

const fechaActual = new Date();

const fechaElement = document.getElementById("fecha");

const options = { year: 'numeric', month: 'long', day: 'numeric' };
const fechaFormateada = fechaActual.toLocaleDateString('es-ES', options);

fechaElement.innerText = "La fecha de hoy es: " + fechaFormateada;

const ropa = [
    { tipo: "camiseta", color: "rojo" },
    { tipo: "pantalón", color: "azul" },
    { tipo: "chaqueta", color: "verde" },
];

function filtrarRopa() {
    const tipoSeleccionado = document.getElementById("tipo").value;
    const colorSeleccionado = document.getElementById("color").value;

    const resultados = ropa.filter(prenda => {
        return (prenda.tipo === tipoSeleccionado && prenda.color === colorSeleccionado);
    });

    const resultadosDiv = document.getElementById("resultados");
    resultadosDiv.innerHTML = "";

    if (resultados.length > 0) {
        resultados.forEach(prenda => {
            const elementoResultado = document.createElement("p");
            elementoResultado.textContent = `Tipo: ${prenda.tipo}, Color: ${prenda.color}`;
            resultadosDiv.appendChild(elementoResultado);
        });
    } else {
        resultadosDiv.textContent = "No se encontraron resultados.";
    }
}

function mostrarOtroContenido() {
    cuadroActual++;
    if (cuadroActual === 2) {
        const tabla = document.querySelector('.tabla-Nosotros2');
        tabla.rows[0].cells[0].innerHTML = '<img class="imagen-Nosotros2" src="imagenes/MisionNosotros.png" alt="Imagen 2">';
        tabla.rows[0].cells[1].innerHTML = `
            <p class="TituloChevere">Mision</p>
            <p class="texto-Nosotros2" >"En FASHION, nuestra mision es proporcionar a nuestros clientes una experiencia de compra excepcional y una amplia gama de opciones de moda que se adapten a sus gustos y necesidades. Nos esforzamos por ofrecer prendas de alta calidad que reflejen las ultimas tendencias, pero que tambien tengan para perdurar en el tiempo. Creemos que la moda es una poderosa herramienta para empoderar a las personas y expresar su singularidad. Nos comprometemos a celebrar la diversidad y a ser un destino donde todos puedan sentirse hermosos y seguros  en lo que visten."</p>
            <button class="leaf-btn" onclick="mostrarOtroContenido()">Siguiente:</button>
        `;
    } else if (cuadroActual === 3) {
        const tabla = document.querySelector('.tabla-Nosotros2');
        tabla.rows[0].cells[0].innerHTML = '<img class="imagen-Nosotros2" src="imagenes/historia.png" alt="Imagen 3">';
        tabla.rows[0].cells[1].innerHTML = `
            <p class="TituloChevere">Nuestra Historia</p>
            <p class="texto-Nosotros2" >Desde nuestros humildes comienzos, FASHION ha evolucionado para convertirse en una marca ic&oacute;nica de la industria de la moda. Fundada por un equipo de apasionados amantes de la moda, nuestra historia se ha tejido con hilos de dedicaci&oacute;n y creatividad. Comenzamos con una visi&oacute;n simple: proporcionar a las personas prendas que no solo reflejen las &uacute;ltimas tendencias, sino que tambi&eacute;n cuenten una historia &uacute;nica & personal.</p>
            <button class="leaf-btn" onclick="cerrarOtroContenido()">Siguiente:</button>
        `;
    }
}

function cerrarOtroContenido() {
    cuadroActual = 1;
    const tabla = document.querySelector('.tabla-Nosotros2');
    tabla.rows[0].cells[0].innerHTML = '<img class="imagen-Nosotros2" src="imagenes/NosotrosVision.png" alt="Imagen 1">';
    tabla.rows[0].cells[1].innerHTML = `
        <p class="TituloChevere">Vision</p>
        <p class="texto-Nosotros2" >"En FASHION, aspiramos a ser la elecci&oacute;n de referencia para aquellos que buscan un estilo &uacute;nico y una expresi&oacuten personal a trav&eacute;s de la moda. Nuestra visi&oacute;n es crear un mundo donde la moda se convierte en una forma de arte, donde cada prenda cuenta una historia y donde la diversidad y la autenticidad se celebran a trav&eacute;s de la ropa que vestimos. Buscamos inspirar la confianza, la belleza y la individualidad en cada uno de nuestros clientes, creando un impacto positivo en la forma en que experimentan la moda."</p>
        <button class="leaf-btn" onclick="mostrarOtroContenido()">Siguiente:</button>
    `;
}