function showModal(category, productId) {
  fetch(
    `/proyectoBolivar/admin/tienda/get-product-details.php?category=${category}&id=${productId}`
  )
    .then((response) => response.json())
    .then((data) => {
      console.log(data);

      if (data.error) {
        alert(data.error);
        return;
      }

      const product = data.data;
      if (!product) {
        alert("Product not found");
        return;
      }

      document.getElementById("modalTitle").textContent = product.titulo;
      document.getElementById("modalEtiqueta").textContent = product.etiqueta;
      document.getElementById("modalTalla").textContent = product.talla;
      document.getElementById("modalColor").textContent = product.color;
      document.getElementById("modalMaterial").textContent = product.material;
      document.getElementById("modalEstado").textContent = product.estado;
      const precio = parseFloat(product.precio);
      if (!isNaN(precio)) {
        document.getElementById(
          "modalPrice"
        ).textContent = `BOB ${precio.toFixed(2)}`;
      } else {
        document.getElementById("modalPrice").textContent = "Not available";
      }
      document.getElementById(
        "modalImage"
      ).src = `/proyectoBolivar/admin/tienda/${category}/imagenes/${product.imagen}`;
      document.getElementById("productModal").classList.remove("hidden");
    })
    .catch((error) => console.error("Error fetching product details:", error));
}

function hideModal() {
  document.getElementById("productModal").classList.add("hidden");
}
