//------------Declaracion de Variables------------
let $titulo = document.getElementById('titulo');
let $duracion = document.getElementById('duracion');
let $volumen = document.getElementById('volumen');
let $video = document.getElementById('video');
let $bPlayPause = document.getElementById('play-pause')
let $irA = document.getElementById('irA')
let $cambioVol = document.getElementById('cambioVol')
let $instante = document.getElementById('instante')
let $nuevoVol = document.getElementById('nuevoVol')
let cont = 0
//-------------Eventos--------------
$video.addEventListener('timeupdate', () => {
    $duracion.textContent = Math.round($video.currentTime) + "s"
    $volumen.textContent = $video.volume
})
$video.addEventListener('ended', () => {
    contador(cont)
    playVideo()
    $titulo.textContent = 'Nº de reproducciones :' + cont
})

//Boton de play y pause al hacer click
$bPlayPause.addEventListener('click', reproducion)
//
$irA.addEventListener('click', tiempo)
$cambioVol.addEventListener('click', cambiaVolumen)

//--------------Funciones-------------
//Funcion que fija el tiempo
function tiempo() {

    if ($instante.value <= 10) {
        $video.currentTime = $instante.value
    } else {
        //Control de errores
        try {
            throw $instante.value>10
            
        }
        catch (error) {
            $titulo.textContent='El tiempo tiene que ser menor a 10s'
        }
        
    }}
        //Funcion que cambia el volumen
        function cambiaVolumen() {
            $video.volume = $nuevoVol.value
        }
        //Funcion que aumenta  segun elnuemro de reproducciones
        function contador() {
            cont++;
        }

        //Funcion que mira el estado del video

        function reproducion() {
            if ($video.paused) {
                playVideo()

            } else {
                pauseVideo()
            }
        }

        //Funcion que da play
        function playVideo() {
            $video.play()
            $titulo.textContent = 'play'
        }

        //Funcion que pausa  el video 
        function pauseVideo() {
            $video.pause()
            $titulo.textContent = 'pause'
        }