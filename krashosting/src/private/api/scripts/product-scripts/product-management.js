
$(document).ready(()=>{
    fetch(`../api/calls/product-apis/getProducts.php`)
    .then(response => response.json())
    .then(data => {
        data.forEach(obj => {
            const container= document.createElement("div");
            const titleContainer =document.createElement("div");
            const descriptionContainer= document.createElement("div");
            const priceContainer= document.createElement("div");
            const specificationsContainer= document.createElement("div"); 
            const editProduct = document.createElement("button"); 
            const deleteProduct = document.createElement("button"); 

            titleContainer.textContent = obj["PRODUCT_NAME"];
            descriptionContainer.textContent = obj["PRODUCT_DESCRIPTION"];
            priceContainer.textContent = obj["PRODUCT_PRICE"];
            specificationsContainer.textContent = obj["PRODUCT_SPECIFICATIONS"];
            editProduct.textContent = "Bewerken";
            editProduct.classList.add("button-edit");
            deleteProduct.classList.add("button-delete");
            deleteProduct.textContent = "Verwijderen";

            container.id = "idProduct-"+obj["ID_PRODUCT"];

            container.append(titleContainer,descriptionContainer,priceContainer,specificationsContainer,editProduct,deleteProduct);
            container.classList.add("product");
            $("div.container").append(container);
        });
    })
    .catch(error => console.log(error));
    setTimeout(() => {
        
        $(".button-edit").each(function() {
          $(this).on("click", function() {
            const element = $(this).parent();
            const idProd = element.attr("id");
            window.location.href = `edit-product.php?id=${idProd.replace("idProduct-", "")}`;
          });
        })


      $(".button-delete").each(function() {
        const button = $(this);
        button.on("click", function() {
          const element = button.closest(".product");
          const idProd = element.attr("id");
          fetch(`../api/calls/product-apis/deleteProduct.php?id=${idProd.replace("idProduct-", "")}`)
            .then(response => response.json())
            .then(function() {
              console.log("Product successfully deleted");
              element.remove();
            })
            .catch(function(error) {
              console.error("Error deleting product:", error);
            });
        });
      });
    }, 100);
});