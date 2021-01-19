class Slider {
    constructor(tabImages, sliderImageId, timer) {
        this.tabImages = tabImages;
        this.tagImageId = document.getElementById(sliderImageId);
        this.timerId = document.getElementById(timer);
        this.nextId = document.getElementById("circleRight");
        this.nextId.style.cursor = "pointer";
        this.precId = document.getElementById("circleLeft");
        this.precId.style.cursor = "pointer";


        this.intervalId = null;
        this.demarre = false; // Etat du chronomètre : démarré (true) ou arrêté (false)
        this.compteur = 0;

        // gestionnaires d'événements
        this.nextId.addEventListener('click', () => this.next()); //() =>  === .bind automatique
        //.bind(valeur) permet de créer une fonction où this a la valeur voulue
        this.precId.addEventListener('click', () => this.prec());
        document.addEventListener('keydown', (event) => this.pad(event));
        this.playPause();
        
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

    //function precedent
    prec() {
        this.compteur--;
        if (this.compteur === -1) {
            this.compteur = this.tabImages.length-1;
        }

        this.tagImageId.src = this.tabImages[this.compteur];
        // this.tagTexteId.textContent = this.tabTextes[this.compteur];
        clearInterval(this.intervalId);// Arrêt du slide auto

        if (this.demarre) {
            this.intervalId = setInterval( () => this.next(), 5000);//permet de démarrer la lecture auto
        } 
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

    // fonction clavier
    pad(event) {
        switch(event.keyCode) {
            case 37: //gauche
                this.prec();
                break;
            case 39: //droit
                this.next();
                break;
        }
    }
    
}