document.addEventListener("DOMContentLoaded", ()=>{
   console.log('asd');
   fetch('/src/private/api/calls/product-apis/getProducts.php')
   .then(response => response.json())
   .then(data => {
      for (let i = 0; i < 3; i++) {
         const product_container = document.createElement("div");
         // Containers
         const container = document.createElement("ul");
         const fa_database_c = document.createElement("li");
         const fa_envelope_c = document.createElement("li");
         const fa_hard_drive_c = document.createElement("li");
         const fa_infinity_c = document.createElement("li");
         const features_c = document.createElement("li");
         const fa_check1_c = document.createElement("li");
         const fa_check2_c = document.createElement("li");
         const fa_check3_c = document.createElement("li");
         const fa_check4_c = document.createElement("li");
         const fa_check5_c = document.createElement("li");
         const fa_check6_c = document.createElement("li");
         const order_button_c = document.createElement("li");
         // Content within
         const fa_database = document.createElement("i");
         const fa_envelope = document.createElement("i");
         const fa_hard_drive = document.createElement("i");
         const fa_infinity = document.createElement("i");
         const features = document.createElement("h1");
         const fa_check1 = document.createElement("i");
         const fa_check2 = document.createElement("i");
         const fa_check3 = document.createElement("i");
         const fa_check4 = document.createElement("i");
         const fa_check5 = document.createElement("i");
         const fa_check6 = document.createElement("i");
         const order_button = document.createElement("button");

         const classes = [
            "fa-database",
            "fa-envelope",
            "fa-hard-drive",
            "fa-infinity",
         ]

         const listitemTitles = [
            fa_database,
            fa_envelope,
            fa_hard_drive,
            fa_infinity,
            features_c,
            fa_check1,
            fa_check2,
            fa_check3,
            fa_check4,
            fa_check5,
            fa_check6,
            order_button
         ];
         const checks = [
            fa_check1,
            fa_check2,
            fa_check3,
            fa_check4,  
            fa_check5,
            fa_check6
         ]
         const listItems = [
            fa_database_c,
            fa_envelope_c,
            fa_hard_drive_c,
            fa_infinity_c,
            features,
            fa_check1_c,
            fa_check2_c,
            fa_check3_c,
            fa_check4_c,
            fa_check5_c,
            fa_check6_c,
            order_button_c
         ];

         // Add classes
         container.classList.add("dropdown-list");
         features.classList.add("IF");
         listitemTitles.forEach(item => {
            if (item != features)
            item.classList.add("fa-solid");
         });

         // Append children
         for (let i = 0; i < listItems.length; i++) {
            listItems[i].appendChild(listitemTitles[i]);
         }
         for (let k = 0; k < listItems.length; k++) {
            if(!classes[k]){listItems[k].classList.add("fa-check")}
            else {
               listItems[k].classList.add(classes[k]);
            }
            
         }
         container.append(...listItems);
         product_container.appendChild(container);
         $(".products").append(product_container);

         const specs = data[i]["PRODUCT_SPECIFICATIONS"].split(", ");
         const topLoader = [fa_database_c, fa_envelope_c, fa_hard_drive_c, fa_hard_drive_c, ...checks];
         for (let j = 0; j < specs.length && j < topLoader.length; j++) {
         if (specs[j])
            topLoader[j].textContent = specs[j];
         }         
         features.textContent="Inbegrepen features";
         order_button.textContent = "Bestellen";
      }
   })
   .catch(error => console.log(error));
});

// Add JavaScript to toggle the full-page navigation menu with a smooth transition
const navMenuBtn = document.querySelector('.nav-menu-btn');
const fullPageNav = document.querySelector('.full-page-nav');
const closeBtn = document.querySelector('.close-btn');

navMenuBtn.addEventListener('click', function () {
   fullPageNav.style.display = 'flex';
   setTimeout(function () {
      fullPageNav.style.opacity = 1;
      fullPageNav.style.transform = 'scale(1)';
   }, 10);
});

closeBtn.addEventListener('click', function () {
   fullPageNav.style.opacity = 0;
   fullPageNav.style.transform = 'scale(0.7)';
   setTimeout(function () {
      fullPageNav.style.display = 'none';
   }, 300); // Match the transition duration in CSS
});
