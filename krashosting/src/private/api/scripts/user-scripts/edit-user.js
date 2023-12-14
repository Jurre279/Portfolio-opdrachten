const $form = $("#edit-user");
$form.on("submit",(e)=>{
    console.log("asd");
    e.preventDefault();
    fetch(`/src/private/api/calls/user-apis/editUser.php?${$form.serialize()}`)
    .then(response => response.json())
    .then(data => {
        console.log("User succesvol bewerkt");
    })
    .catch(error => console.log(error));
});