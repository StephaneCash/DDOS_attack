$(document).ready(function () {

    let start = $('#div1').find('#start');
    let stop = $('#div1').find('#stop');
    let host = $('#div1').find('#host');
    let time = $('#div1').find('#time');

    let res = $("#div1").find("#res");

    var av = time.val();
    let a = av;

    start.click(function () {
        console.log('host : ', av)
        console.log(time.val())

        res.html("Attention vous risquez d'être attaqué").css('color', 'red')
        for (let i = 0; i < av.length; i++) {
            console.log(av)

        }
    });

    stop.click(function () {

    })


    const attajck = () => {
        for (let i = 0; i < a.length; i++) {
            console.log(i)
            res.html(i)
        }
    }
})