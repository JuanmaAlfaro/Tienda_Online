var slider = $('#slider');
var anterior = $('#btn-prev');
var siguiente= $('#btn-next');

//mover la ultima imagen a la primera pocision
$('#slider section:last').insertBefore('#slider section:first');

//mostrar la primera imagen con un margen de -100%
slider.css('margin-left','-'+100+'%');

function moverDerecha(){
    slider.animate({marginLeft:'-'+200+'%'},1000,
    function(){
        $('#slider section:first').insertAfter('#slider section:last');
        slider.css('margin-left','-'+100+'%');
    });
}

function moverIzquierda(){
    slider.animate({marginLeft:0},1000,
    function(){
        $('#slider section:last').insertBefore('#slider section:first');
        slider.css('margin-left','-'+100+'%');
    });
}

siguiente.on('click', function () {
    moverDerecha();
});

anterior.on('click', function () {
    moverIzquierda();
});

function play(){
    intervalo = setInterval(function(){
        moverDerecha();
    },15000);
}

play();