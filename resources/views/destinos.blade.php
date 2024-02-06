<html>

<head>
    <style>
        .container {
            display: flex;
            gap: 1rem;
            padding: 1rem;
            width: 100%;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 1rem;
            padding: 1rem;
            transition: transform 0.3s ease;
            width: 47.5%;
            margin: 15px;
        }

        .card:hover {
            transform: scale(1.025);
            border-color: black;
        }

        .details {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
        }

        .card:hover .details {
            max-height: 100vh;
        }

        h2 {
            font-size: 35px;
        }

        p {
            font-size: 25px;
            
        }

        button {
            border: 1px solid rgba(0, 0, 0, .9);
            border-radius: 7px;
            transform: scale(2);
            margin-left: 40px;
            margin-bottom: 15px;
            background-color: #ffffff;
            transition: background 1s ease, transform 1s ease;
        }

        button:hover {
            background-color: #ff0040;
            transform: scale(2.15);
            cursor: pointer;
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
                    <strong><p>Descripción:</strong> Conocida por su eficiencia y su rica historia, Alemania ofrece una variedad de
                    experiencias, desde explorar castillos antiguos y degustar cervezas locales hasta recorrer vibrantes
                    ciudades modernas como Berlín y Múnich.</p>
                    <strong><p>Duración:</strong> 7 días</p>
                    <strong><p>Mejor época:</strong> Mayo - Septiembre</p>
            <strong><p>Atracciones:</strong> Berlín, Múnich, Castillo de Neuschwanstein</p>
            </div>
        </div>
        <div class="card">
            <img src="https://cdn.icon-icons.com/icons2/238/PNG/256/Argentina_26455.png" alt="Imagen de Argentina">
            <h2>Argentina</h2>
            <button onclick="this.nextElementSibling.style.display='block'">View Detail</button>
            <div class="details" style="display: none;">
            <strong><p>Descripción:</strong> Argentina es conocida por su apasionante cultura del tango, su sabrosa carne de res y su
                    amor por el fútbol. El país cuenta con una variedad de paisajes, desde las cataratas del Iguazú en
                    el norte hasta los glaciares de la Patagonia en el sur.</p>
                <strong><p>Duración:</strong> 14 días</p>
                <strong><p>Mejor época:</strong> Octubre - Abril</p>
                <strong><p>Atracciones:</strong> Buenos Aires, Cataratas del Iguazú, Glaciar Perito Moreno</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <img src="https://www.talesofawanderer.com/blog/wp-content/plugins/post-country/Flags/ESPANA.gif"
                alt="Imagen de España">
            <h2>España</h2>
            <button onclick="this.nextElementSibling.style.display='block'">View Detail</button>
            <div class="details" style="display: none;">
            <strong><p>Descripción:</strong> Famosa por su diversidad cultural y geográfica, España ofrece todo, desde playas
                    soleadas y montañas escarpadas hasta vibrantes ciudades y festivales coloridos. Las ciudades más
                    populares incluyen Barcelona, conocida por su arquitectura modernista, y Madrid, la capital, famosa
                    por su vida nocturna y sus museos de arte de clase mundial.</p>
                <strong><p>Duración:</strong> 10 días</p>
                <strong><p>Mejor época:</strong> Abril - Junio</p>
                <strong><p>Atracciones:</strong> Barcelona, Madrid, Sevilla</p>
            </div>
        </div>
        <div class="card">
            <img src="https://cdn.icon-icons.com/icons2/230/PNG/256/Japan_JP_JPN_392_Flag3_26066.png"
                alt="Imagen de Japón">
            <h2>Japón</h2>
            <button onclick="this.nextElementSibling.style.display='block'">View Detail</button>
            <div class="details" style="display: none;">
                <strong><p>Descripción:</strong> Japón es conocido por su rica cultura y tecnología avanzada. Desde los templos
                    históricos y los hermosos cerezos en flor hasta los rascacielos modernos y la electrónica de
                    vanguardia, Japón ofrece una mezcla única de lo antiguo y lo nuevo.</p>
                <strong><p>Duración:</strong> 14 días</p>
                <strong><p>Mejor época:</strong> Marzo - Mayo</p>
                <strong><p>Atracciones:</strong> Tokio, Kioto, Hiroshima</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <img src="https://www.thecommerce.es/WebRoot/StoreES3/Shops/ec4701/5263/F032/6D5D/ED65/0276/AC10/1416/8E58/Peru_m.png"
                alt="Imagen de Perú">
            <h2>Perú</h2>
            <button onclick="this.nextElementSibling.style.display='block'">View Detail</button>
            <div class="details" style="display: none;">
                <strong><p>Descripción:</strong> Conocido por su rica historia y cultura, Perú es famoso por sus sitios arqueológicos,
                    incluyendo Machu Picchu, una antigua ciudad inca en la Cordillera de los Andes. La capital, Lima,
                    alberga el Museo Larco, que alberga una colección de arte precolombino.</p>
                <strong><p>Duración:</strong> 7 días</p>
                <strong><p>Mejor época:</strong> Mayo - Septiembre</p>
                <strong><p>Atracciones:</strong> Machu Picchu, Cusco, Lago Titicaca</p>
            </div>
        </div>
        <div class="card">
            <img src="https://www.mochilerosviajeros.com/wp-content/uploads/2019/09/BANDERA-URUGUAY.png"
                alt="Imagen de Uruguay">
            <h2>Uruguay</h2>
            <button onclick="this.nextElementSibling.style.display='block'">View Detail</button>
            <div class="details" style="display: none;">
                <strong><p>Descripción:</strong> A menudo eclipsado por sus vecinos más grandes, Argentina y Brasil, Uruguay es un
                    destino turístico en crecimiento conocido por su tranquila costa, su animada capital, Montevideo, y
                    su próspera escena vinícola.</p>
                <strong><p>Duración:</strong> 5 días</p>
                <strong><p>Mejor época:</strong> Diciembre - Marzo</p>
                <strong><p>Atracciones:</strong> Montevideo, Punta del Este, Colonia del Sacramento</p>
            </div>
        </div>
    </div>
</body>

</html>