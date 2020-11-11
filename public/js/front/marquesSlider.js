class marquesSlider{
    constructor(tabImages, marquesSliderImageId, timerMarques)
    {
        this.tabImages = tabImages;
        this.tabImageId = document.getElementById(marquesSliderImageId);
        this.timerId = document.getElementById(timerMarques);

        this.intervalId = null;
        this.demarre = false;
        // this.compteur = 0;

        this.playPause();
    }

    // fonction Play/pause

    playPause() {
        if (!this.demarre) {
            // Démarre le chronomètre : appelle suivant toutes les 5secondes
            this.intervalId = setInterval( () => this.next(), 5000);//permet de démarrer la lecture auto
            //.bind(valeur) permet de créer une fonction où this a la valeur voulue
        }else {
            clearInterval(this.intervalId);// Arrêt du slide auto
        }
        // Inverse la valeur de l'état du chrono
        this.demarre = !this.demarre;
    }
}