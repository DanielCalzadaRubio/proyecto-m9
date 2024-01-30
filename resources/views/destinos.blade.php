<!DOCTYPE html>
<html>

<head>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 2fr));
            gap: 1rem;
            padding: 1rem;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 1rem;
            padding: 1rem;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .details {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
        }

        .card:hover .details {
            max-height: 100vh;
        }

        @media screen and (max-width: 600px) {
            .container {
                grid-template-columns: repeat(auto-fill, minmax(100%, 1fr));
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <img src="https://www.thecommerce.es/WebRoot/StoreES3/Shops/ec4701/5261/B51A/A397/4D21/544E/AC10/1415/A288/Germany_m.png"
                alt="Imagen de Alemania">
            <h2>Alemania</h2>
            <button onclick="this.nextElementSibling.style.display='block'">View Detail</button>
            <div class="details" style="display: none;">
                <p>Descripción: Conocida por su eficiencia y su rica historia, Alemania ofrece una variedad de
                    experiencias, desde explorar castillos antiguos y degustar cervezas locales hasta recorrer vibrantes
                    ciudades modernas como Berlín y Múnich.</p>
                <p>Duración: 7 días</p>
                <p>Mejor época: Mayo - Septiembre</p>
                <p>Atracciones: Berlín, Múnich, Castillo de Neuschwanstein</p>
            </div>
        </div>
        <div class="card">
            <img src="https://cdn.icon-icons.com/icons2/238/PNG/256/Argentina_26455.png" alt="Imagen de Argentina">
            <h2>Argentina</h2>
            <button onclick="this.nextElementSibling.style.display='block'">View Detail</button>
            <div class="details" style="display: none;">
                <p>Descripción: Argentina es conocida por su apasionante cultura del tango, su sabrosa carne de res y su
                    amor por el fútbol. El país cuenta con una variedad de paisajes, desde las cataratas del Iguazú en
                    el norte hasta los glaciares de la Patagonia en el sur.</p>
                <p>Duración: 14 días</p>
                <p>Mejor época: Octubre - Abril</p>
                <p>Atracciones: Buenos Aires, Cataratas del Iguazú, Glaciar Perito Moreno</p>
            </div>
        </div>
        <div class="card">
            <img src="https://www.talesofawanderer.com/blog/wp-content/plugins/post-country/Flags/ESPANA.gif"
                alt="Imagen de España">
            <h2>España</h2>
            <button onclick="this.nextElementSibling.style.display='block'">View Detail</button>
            <div class="details" style="display: none;">
                <p>Descripción: Famosa por su diversidad cultural y geográfica, España ofrece todo, desde playas
                    soleadas y montañas escarpadas hasta vibrantes ciudades y festivales coloridos. Las ciudades más
                    populares incluyen Barcelona, conocida por su arquitectura modernista, y Madrid, la capital, famosa
                    por su vida nocturna y sus museos de arte de clase mundial.</p>
                <p>Duración: 10 días</p>
                <p>Mejor época: Abril - Junio</p>
                <p>Atracciones: Barcelona, Madrid, Sevilla</p>
            </div>
        </div>
        <div class="card">
            <img src="https://cdn.icon-icons.com/icons2/230/PNG/256/Japan_JP_JPN_392_Flag3_26066.png"
                alt="Imagen de Japón">
            <h2>Japón</h2>
            <button onclick="this.nextElementSibling.style.display='block'">View Detail</button>
            <div class="details" style="display: none;">
                <p>Descripción: Japón es conocido por su rica cultura y tecnología avanzada. Desde los templos
                    históricos y los hermosos cerezos en flor hasta los rascacielos modernos y la electrónica de
                    vanguardia, Japón ofrece una mezcla única de lo antiguo y lo nuevo.</p>
                <p>Duración: 14 días</p>
                <p>Mejor época: Marzo - Mayo</p>
                <p>Atracciones: Tokio, Kioto, Hiroshima</p>
            </div>
        </div>
        <div class="card">
            <img src="https://www.thecommerce.es/WebRoot/StoreES3/Shops/ec4701/5263/F032/6D5D/ED65/0276/AC10/1416/8E58/Peru_m.png"
                alt="Imagen de Perú">
            <h2>Perú</h2>
            <button onclick="this.nextElementSibling.style.display='block'">View Detail</button>
            <div class="details" style="display: none;">
                <p>Descripción: Conocido por su rica historia y cultura, Perú es famoso por sus sitios arqueológicos,
                    incluyendo Machu Picchu, una antigua ciudad inca en la Cordillera de los Andes. La capital, Lima,
                    alberga el Museo Larco, que alberga una colección de arte precolombino.</p>
                <p>Duración: 7 días</p>
                <p>Mejor época: Mayo - Septiembre</p>
                <p>Atracciones: Machu Picchu, Cusco, Lago Titicaca</p>
            </div>
        </div>
        <div class="card">
            <img src="https://www.mochilerosviajeros.com/wp-content/uploads/2019/09/BANDERA-URUGUAY.png"
                alt="Imagen de Uruguay">
            <h2>Uruguay</h2>
            <button onclick="this.nextElementSibling.style.display='block'">View Detail</button>
            <div class="details" style="display: none;">
                <p>Descripción: A menudo eclipsado por sus vecinos más grandes, Argentina y Brasil, Uruguay es un
                    destino turístico en crecimiento conocido por su tranquila costa, su animada capital, Montevideo, y
                    su próspera escena vinícola.</p>
                <p>Duración: 5 días</p>
                <p>Mejor época: Diciembre - Marzo</p>
                <p>Atracciones: Montevideo, Punta del Este, Colonia del Sacramento</p>
            </div>
        </div>
    </div>
</body>

</html>