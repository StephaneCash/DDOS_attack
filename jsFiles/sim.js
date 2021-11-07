window.onload = () => {
    let main_content = document.getElementsByTagName('input');

    let button = document.querySelectorAll('div button');

    let res = document.querySelector('div #res');
    let divC = document.querySelector('.divC p');
    let select = document.querySelector("[name=att]");

    let ddos = document.querySelector('.ddos');
    let cross = document.querySelector('.cross');

    let valider = document.querySelector('#valider');
    let iErr = document.querySelector('.i');

    valider.addEventListener('click', function () {

        var statutValueSelected = "";
        statutValueSelected = select.value;
        console.log(statutValueSelected);

        if (statutValueSelected === "ddos") {
            ddos.style.display = "block";
            cross.style.display = "none";
            iErr.innerHTML = "";

        } else if (statutValueSelected === "cross") {
            cross.style.display = "block";
            ddos.style.display = "none";
            iErr.innerHTML = "";
        } else if (statutValueSelected === "--Choisir une attaque--") {
            iErr.innerHTML = "Erreur !! Veuillez sélectionner une attaque.";
        }
    })

    let btn1 = button[0];
    let btn2 = button[1];

    let timer = 11;

    btn1.addEventListener('click', ((e) => {
        let i = 0;
        e.preventDefault();
        btn1.innerText = ("Attaque Lancée.");
        res.style.color = "red";
        time()

    }))

    btn2.addEventListener('click', function (e) {
        e.preventDefault();
        alert("Attaque cross lancée...")
    })

    function time() {
        res.innerHTML = ("Vous serez attaqué dans... 10 seconds")
        let interval = setInterval(function () {

            timer = timer - 1;

            res.innerHTML = ("Vous serez attaqué dans... " + timer + " seconds");

            if (timer < 1) {
                clearInterval(interval);
                res.innerHTML = ("Eh oui vous êtes attaqué !!");
                divC.classList.add("attaque");

                let i = 0;

                while (i < 1) {

                    setInterval(() => {
                        let num = Math.random() * 898889789700000;
                        divC.innerHTML += "Requêts envoyées : " + num + "<br>";

                    }, 200);
                    i = i + 1;

                    console.log("hhh")
                }

            }

        }, 1000)
    }

}