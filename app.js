let menuOpen = document.querySelector(".menu_open");

let menuClose = document.querySelector(".menu_close")

let navBar = document.querySelector("#navBar")

// let divider = document.querySelector(".divider")

let inputSearch = document.querySelector(".search")

let closeIcon = document.querySelector(".close_icon")

let iconNavBar = document.querySelector(".icon_nav_bar")

// let search = document.querySelector(".")

menuOpen.addEventListener("click", () => {

    // if (navBar.getAttribute("class", "nav_bar")) {
    navBar.removeAttribute("class", "navBar")
    navBar.setAttribute("class", "wrap_nav_bar")
        // inputSearch.style.display = "block"
    iconNavBar.style.display = "flex"
        // iconNavBar.style.width = "70px"
    menuOpen.style.display = "none"
    navBar.style.right = "5%"

    // menuClose.style.display = "none"
    // closeIcon.style.display = "block"
    // } else if (navBar.getAttribute("class", "wrap_nav_bar")) {
    // navBar.removeAttribute("class", "wrap_nav_bar")
    // navBar.setAttribute("class", "nav_bar")
    inputSearch.style.display = "block"

    // menuClose.style.display = "block"
    // menuOpen.style.display = ""
    // croixClose.style.display = "none"

    // }

})

closeIcon.addEventListener("click", () => {

    navBar.removeAttribute("class", "wrap_nav_bar")
    navBar.setAttribute("class", "nav_bar")
    inputSearch.style.display = "none"
    navBar.style.right = "unset"
        // menuClose.style.display = "block"
        // menuOpen.style.display = ""
        // closeIcon.style.display = "none"
    iconNavBar.style.display = "none"
    menuOpen.style.display = "block"


})