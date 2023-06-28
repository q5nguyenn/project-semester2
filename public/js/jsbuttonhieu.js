const buttonOptionView = document.querySelector(".view_list");
const buttonActive = document.querySelector(".button_active");
const buttonFilter = document.querySelector(".option-view__filter");

buttonActive.addEventListener("click", function(event){ 
    event.preventDefault();
    buttonActive.classList.add("active");
    buttonOptionView.classList.remove("active");
    buttonFilter.style.display = "none";

});
buttonOptionView.addEventListener("click", function(event){ 
    event.preventDefault();
    // console.log(1);
    buttonOptionView.classList.add("active");
    buttonActive.classList.remove("active");
    buttonFilter.style.display = "block";
});