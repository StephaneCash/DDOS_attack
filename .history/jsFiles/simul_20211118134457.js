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

    let stop_ddos = document.querySelector('.stop');

    let etat = 2;

    valider.addEventListener('click', function () {

        var statutValueSelected = "";
        statutValueSelected = select.value;
        console.log(statutValueSelected);

        if (statutValueSelected === "ddos") {
            ddos.style.display = "block";
            cross.style.display = "none";
            stop_ddos.style.display = "block";
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

    stop_ddos.addEventListener('click', function () {
        etat = 1;
        console.log("Etat " + etat)

        btn1.innerText = ("Forcer l'attaque.");
        
        if (etat === 1) {
            btn1.addEventListener('click', ((e) => {
                e.preventDefault();
                divC.classList.add("attaque");
                divC.style.fontSize = "18px";
                divC.innerHTML = "Attaque DDOS empechée <i class='fa fa-lock'></i>";
                console.log('Attaque empechee')

            }))
        }
    })

     if (etat === 0) {
        btn1.addEventListener('click', ((e) => {
            let i = 0;
            e.preventDefault();
            btn1.innerText = ("Attaque Lancée.");
            res.style.color = "red";
            time();

        }))
    }

    const userMessages = [];

    const userMessageForm = document.querySelector('form');
    const userMessagesList = document.querySelector('.ul');

    console.log(userMessagesList)

    function renderMessages() {
        let messageItems = '';
        for (const message of userMessages) {
            let messageImage = message.image;
            let messageText = message.text;
            console.log(messageImage, messageText)
            messageItems = `
            ${messageItems}
      <p class="message-item">
        <div class="message-image">
          <img src="${message.image}" alt="${message.text}"> 
        </div>
        <div>
            <i class="fa fa-bug"> </i> ${message.text}
        </div>
      </p>
    `;
        }

        userMessagesList.innerHTML = messageItems;
    }

    function formSubmitHandler(event) {
        event.preventDefault();
        const userMessageInput = event.target.querySelector('textarea');
        const messageImageInput = event.target.querySelector('input');
        const userMessage = userMessageInput.value;
        const imageUrl = messageImageInput.value;

        if (
            !userMessage ||
            !imageUrl ||
            userMessage.trim().length === 0 ||
            imageUrl.trim().length === 0
        ) {
            alert('Insérer du text et une image svp.');
            return;
        }

        userMessages.push({
            text: userMessage,
            image: imageUrl,
        });
        userMessagesList.style.display = "block";

        userMessageInput.value = '';
        messageImageInput.value = '';

        renderMessages();
    }

    userMessageForm.addEventListener('submit', formSubmitHandler);


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

                    }, 500);
                    i = i + 1;

                    console.log("hhh")
                }

            }

        }, 1000)
    }

}