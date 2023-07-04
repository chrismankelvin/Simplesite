let toogleNavStatus = false;

let toogleNav = function(){
    let getSidebar = document.querySelector(".nav_sidebar");
    let getSidebarUl = document.querySelector(".nav_sidebar ul");
    let getSidebarTitle = document.querySelector(".nav_sidebar span");
    let getSidebarLinks = document.querySelectorAll(".nav_sidebar a");


    if (toogleNavStatus === false){
        getSidebarUl.style.visibility ="visible";
        getSidebar.style.visibility ="visible";
        getSidebar.style.width ="272px";
        getSidebarTitle.style.opacity = "0.5";

         let arrayLength = getSidebarLinks.length;
         for (let i = 0; i < arrayLength; i++){
            getSidebarLinks[i].style.opacity = "1";
         }

         toogleNavStatus = true;

    }
    else if (toogleNavStatus === true){
        getSidebar.style.width ="0.1px";
        getSidebarTitle.style.opacity = "0";
        getSidebar.style.visibility ="hidden";

         let arrayLength = getSidebarLinks.length;
         for (let i = 0; i < arrayLength; i++){
            getSidebarLinks[i].style.opacity = "0";
         }
         getSidebarUl.style.visibility ="hidden";

         toogleNavStatus = false;

    }


}




















