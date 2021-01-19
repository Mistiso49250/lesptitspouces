class marquesSlider{
    constructor(tabImages, marquesSliderImageId, timerMarques)
    {
        this.tabImages = tabImages;
        this.tagImageId = document.getElementById(marquesSliderImageId);
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

    //function suivant
    next() {
        this.compteur++;
        if (this.compteur === this.tabImages.length) {
            this.compteur = 0;
        }
        this.tagImageId.src = this.tabImages[this.compteur];
        // this.tagTexteId.textContent = this.tabTextes[this.compteur];
        
        clearInterval(this.intervalId);// Arrêt du slide auto

        if (this.demarre) {
            this.intervalId = setInterval( () => this.next(), 5000);//permet de démarrer la lecture auto
        }
    }
}