<?php include_once "./includes/templates/header.php"; ?>
      <div class="inicio-producto">
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="https://img.freepik.com/vector-premium/anuncios-yogur-fresa-leche-mermelada-frutas-salpicando-aire-sobre-fondo-rosa-ilustracion-3d_317810-2524.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="https://png.pngtree.com/background/20210710/original/pngtree-event-promotion-wind-taobao-yogurt-poster-picture-image_1040966.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="https://media.istockphoto.com/photos/yogurt-background-with-almonds-yogurt-texture-top-view-picture-id1124357307?s=2048x2048"
                class="d-block w-100"
                alt="..."
              />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <main>
        <h2 class="subtitulo">Nuestros productos</h2>
        <form class="barra-buscadora">
          <div class="barra">
            <label for="search"></label>
            <input
              type="text"
              id="search"
              name="search"
              placeholder="Que estas buscando?"
            />
          </div>
          <button class="boton" type="submit">Buscar</button>
        </form>
        <div class="contenedor">
          <ul id="product-list" class="product-list">
            <!-- Clasicos -->
            <li
              class="product"
              data-name="yougurt Clasico"
              data-description="220 ml pequeño"
              data-price="10"
            >
              <a href="./producto.php"
                ><img
                  src="http://d2r9epyceweg5n.cloudfront.net/stores/001/151/835/products/77913376060291-2568a8a9c8d1c1858816524061590947-640-0.jpg"
                  alt="Product 1"
              /></a>
              <h3>Yougurt Clasico 220ml</h3>
              <p class="precio">Price: <span>$15</span></p>
            </li>
            <li
              class="product"
              data-name="yougurt Clasico"
              data-description="460 ml mediano"
              data-price="20"
            >
              <a href="./producto.php"
                ><img
                  src="https://www.gloria.com.pe/uploads/products/lacteos/2022092816643925731.jpg"
                  alt="Product 2"
              /></a>
              <h3>Yougurt Clasico 460ml</h3>
              <p class="precio">Price: <span>$25</span></p>
            </li>
            <li
              class="product"
              data-name="yougurt Clasico"
              data-description="1.5 Litros grande"
              data-price="30"
            >
              <a href="./producto.php"
                ><img
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEm_VDQoSFWuUSd3Wnha-8bcnyaXxTUZlXs2x_pEMasO7JRVbJ-vycZDR-S6_HtxmKRT4&usqp=CAU"
                  alt="Product 3"
              /></a>
              <h3>Yougurt Clasico 1.5 L</h3>
              <p class="precio">Price: <span>$40</span></p>
            </li>
            <!-- Griego -->
            <li
              class="product"
              data-name="Yougurt Griego"
              data-description="220 ml pequeño"
              data-price="10"
            >
              <a href="./producto.php"
                ><img
                  src="http://d2r9epyceweg5n.cloudfront.net/stores/001/151/835/products/77913376060291-2568a8a9c8d1c1858816524061590947-640-0.jpg"
                  alt="Product 1"
              /></a>
              <h3>Yougurt Griego 220ml</h3>
              <p class="precio">Price: <span>$15</span></p>
            </li>
            <li
              class="product"
              data-name="Yougurt Griego"
              data-description="460 ml mediano"
              data-price="20"
            >
              <a href="./producto.php"
                ><img
                  src="https://www.gloria.com.pe/uploads/products/lacteos/2022092816643925731.jpg"
                  alt="Product 2"
              /></a>
              <h3>Yougurt Griego 460ml</h3>
              <p class="precio">Price: <span>$25</span></p>
            </li>
            <li
              class="product"
              data-name="Yougurt Griego"
              data-description="1.5 Litros grande"
              data-price="30"
            >
              <a href="./producto.php"
                ><img
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEm_VDQoSFWuUSd3Wnha-8bcnyaXxTUZlXs2x_pEMasO7JRVbJ-vycZDR-S6_HtxmKRT4&usqp=CAU"
                  alt="Product 3"
              /></a>
              <h3>Yougurt Griego 1.5 L</h3>
              <p class="precio">Price: <span>$40</span></p>
            </li>
            <!-- Bebida Lactea -->
            <li
              class="product"
              data-name="Bebida lactea"
              data-description="220 ml pequeño"
              data-price="10"
            >
              <a href="./producto.php"
                ><img
                  src="http://d2r9epyceweg5n.cloudfront.net/stores/001/151/835/products/77913376060291-2568a8a9c8d1c1858816524061590947-640-0.jpg"
                  alt="Product 1"
              /></a>
              <h3>Bebida Lactea 220ml</h3>
              <p class="precio">Price: <span>$15</span></p>
            </li>
            <li
              class="product"
              data-name="Bebida lactea"
              data-description="460 ml mediano"
              data-price="20"
            >
              <a href="./producto.php"
                ><img
                  src="https://www.gloria.com.pe/uploads/products/lacteos/2022092816643925731.jpg"
                  alt="Product 2"
              /></a>
              <h3>Bebida Lactea 460ml</h3>
              <p class="precio">Price: <span>$25</span></p>
            </li>
            <li
              class="product"
              data-name="Bebida lactea"
              data-description="1.5 litros grande"
              data-price="30"
            >
              <a href="./producto.php"
                ><img
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEm_VDQoSFWuUSd3Wnha-8bcnyaXxTUZlXs2x_pEMasO7JRVbJ-vycZDR-S6_HtxmKRT4&usqp=CAU"
                  alt="Product 3"
              /></a>
              <h3>Bebida Lactea 1.5 L</h3>
              <p class="precio">Price: <span>$40</span></p>
            </li>
          </ul>
        </div>
      </main>
      <?php include_once "./includes/templates/footer.php"; ?>