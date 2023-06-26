const homeButton = document.querySelectorAll(".text__page-card--home");

homeButton.forEach((button) => {
    button.addEventListener("click", ()=>{
        window.location.href = "../controllers/index.php";
    } )
})