const $form = $("#edit-product");
$form.on("submit",(e)=>{
    e.preventDefault();
    fetch(`/src/private/api/calls/product-apis/editProduct.php?${$form.serialize()}`)
    .then(response => response.json())
    .then(data => {
        console.log("Product succesvol bewerkt");
    })
    .catch(error => console.log(error));
});