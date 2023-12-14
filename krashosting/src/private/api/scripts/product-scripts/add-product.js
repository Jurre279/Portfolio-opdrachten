const $form = $("#add-product");
const $submit = $("#submit-button");

$submit.on("click", (e)=>{
    e.preventDefault();
    fetch(`../api/calls/product-apis/addproduct.php?${$form.serialize()}`)
    .then(response => response.json())
    .then(data => {
        if (data.success) $("#message").css("display","block");
        document.querySelector("#add-product").reset();
    })
    .catch(error => console.log(error));
});