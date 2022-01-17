$(document).ready(function() {

    // let $scroll = ($(".down_left_side").height() + $(".up_left_side").height() - ($(".hobby").height() + $(".header").height() * 2 + 220)) / 2;

    // $(".professional_experience_scroll").css("height", $scroll)
    // $(window).resize(function() {


    //     $scroll = ($(".down_left_side").height() + $(".up_left_side").height() - ($(".hobby").height() + $(".header").height() * 2 + 220)) / 2;

    //     console.log($scroll)
    //     $(".professional_experience_scroll").css("height", $scroll)
    // })



    //effet sur le boutton plus 

    $("menu > .trigger").click((e) => {
        e.currentTarget.parentElement.classList.toggle("open")
    })

    let elems = document.querySelectorAll('.chips');
    let options = {
        placeholder: 'yo@gmail.com ',
        secondaryPlaceholder: '+Email',
        data: [],
        limit: Infinity,
        onChipAdd: (data) => {

        },
        minLeingth: 1
    };

    let instances = M.Chips.init(elems, options);


    $(".send_mail").click((e) => {
        let recipients = instances[0].chipsData
        let object = $(".object_mail").val();

        $.ajax({
                method: "POST",
                url: "../app/sendMail.php",
                data: {
                    "recipients": recipients,
                    "object": object
                },
                beforeSend: function(xhr) {
                    $(".load_none").addClass("load_page");
                    // alert('bonjour');
                }
            })
            .done(function(data) {
                $(".load_none").removeClass("load_page")
                console.log(data)
                if (data.includes("Invalid address"))
                    verifyData("alert-danger", "Adresse email invalide")
                else if (data.includes("Message has been sent"))
                    verifyData("alert-success", "Votre email a ete envoyer avec succes !")
                else if (data.includes("Failed to connect to server"))
                    verifyData("alert-danger", "Erreur de conexion au server ! Verifier votre connexion")
                else if (data.includes("Undefined array key"))
                    verifyData("alert-danger", "Veuillez entrer au moins une adresse email")
                else verifyData("alert-danger" , "Une erreur est survenu lors de l'envoi du mail")
            });


    });

    function verifyData(alert, message) {
        $(".alert_smtp").addClass(alert).html(message)
        $(".alert_smtp").addClass("alert_send_mail ").fadeIn({
            "duration": 1000,
            "queue": true,
            "complete": function() {
                window.setTimeout(() => {
                    $(".alert_smtp").slideUp(700)
                }, 3000)

            }
        })
        if (alert != "alert-danger")
            $(".alert_smtp").removeClass("alert-danger")
        else
            $(".alert_smtp").removeClass("alert-success")
        $(".chips").focus()

    }


    // Click pour le l'edition 
    $(".btn_edit").click((e) => {

        $.ajax({
                method: "POST",
                url: "../app/verify_connexion.php",
                data: {},
            })
            .done(function(data) {
                // verify si l'utilisateur est connecter ou pas 
                if (data == "connecter") {
                    //ajoute la class editable si c'est le cas 
                    $(".container").toggleClass("editable")
                    $("#editable_btn").addClass("editable_btn")
                } else if (data == "non connecter") {
                    // Soumet une alert de demande d'authentification dans le cas contraire 
                    swal({
                        title: "Erreur de session",
                        text: "Veuillez vous authentifier afin de proceder a la modification de vos informations",
                        icon: "error",
                        buttons: {
                            cancel: {
                                text: "Annuler",
                                value: null,
                                visible: true,
                                closeModal: true,
                                className: "btn-danger",
                            },
                            confirm: {
                                text: "Continuer",
                                value: true,
                                visible: true,
                                closeModal: true,
                                className: "btn-primary",
                            }
                        },
                    }).then((isConfirm) => {
                        if (isConfirm) {
                            var evt = document.createEvent("MouseEvents");
                            evt.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
                            document.getElementById("identify").dispatchEvent(evt);
                        }
                    })
                }
            });
    })

    $("#submit_identify").click((e) => {
        let username = $(".user_name").val()
        let password = $(".password").val()
        $.ajax({
                method: "POST",
                url: "../app/verify_connexion.php",
                data: {
                    username,
                    password
                },
            })
            .done(function(data) {

            })

    })

    $(".cancelable_btn").click((e) => {
        $(".container").toggleClass("editable")
        $("#editable_btn").removeClass("editable_btn")
    })

    // ajout du sortable sur la partie edition

    $('.btn_download').click((e)=>{
        e.preventDefault()
        $(".menu").removeClass("open")
        ExportPdf()
    })

    function ExportPdf(){
        kendo.drawing
            .drawDOM("#myCanvas")
            .then(function(group) {
                // Render the result as a PDF file
                return kendo.drawing.exportPDF(group, {
                    paperSize: "auto",
                    margin: { left: "1cm", top: "1cm", right: "1cm", bottom: "1cm" }
                });
            })
            .done(function(data) {
                // Save the PDF file
                console.log(typeof data)
                kendo.saveAs({
                    dataURI: data,
                    fileName: "document.pdf",
                    proxyURL: "https://demos.telerik.com/kendo-ui/service/export"
                });
            });
    }

});



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