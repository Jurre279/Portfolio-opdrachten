
$(document).ready(()=>{
  fetch(`../api/calls/user-apis/getUser.php`)
  .then(response => response.json())
  .then(data => {
      data.forEach(obj => {
        // Product naar user veranderen in naamgeving
          const container= document.createElement("div");
          const userid= document.createElement("div");
          const username =document.createElement("div");
          const useremail= document.createElement("div");
          const usertype= document.createElement("div"); 
          const editProduct = document.createElement("button"); 
          const deleteProduct = document.createElement("button"); 

          userid.textContent = obj["ID_USER"];
          username.textContent = obj["USER_USERNAME"];
          useremail.textContent = obj["USER_EMAIL"];
          usertype.textContent = obj["USER_TYPE"];
          editProduct.textContent = "Bewerken";
          editProduct.classList.add("button-edit");
          deleteProduct.classList.add("button-delete");
          deleteProduct.textContent = "Verwijderen";

          // User ID in container
          container.id = "iduser-"+obj["ID_USER"];

          container.append(userid,username,useremail,usertype,editProduct,deleteProduct);
          container.classList.add("user");
          $("div.container").append(container);
      });
  })
  .catch(error => console.log(error));
  setTimeout(() => {
      
      $(".button-edit").each(function() {
        $(this).on("click", function() {
          const element = $(this).parent();
          const idUser = element.attr("id");
          console.log(idUser);
          // Link aanpassen afhankelijk van ID
          window.location.replace(`https://${window.location.hostname}/src/private/admin-panel/edit-user.php?id=${idUser.replace("iduser-", "")}`);
        });
      });

      $(".button-delete").each(function() {
        const button = $(this);
        button.on("click", function() {
          const element = button.closest(".user");
          const idUser = element.attr("id");
          fetch(`../api/calls/user-apis/deleteUser.php?id=${idUser.replace("iduser-", "")}`)
            .then(response => response.json())
            .then(function() {

              element.remove();
              
              console.log("User successfully deleted");
            })
            .catch(function(error) {
              console.error("Error deleting user:", error);
            });
          });
      });
  }, 100);
});