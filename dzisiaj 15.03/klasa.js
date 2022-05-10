class samochod{
    constructor(marka,model,cena,rocznik,spalanie){
         this.marka=marka;
         this.model=model;
         this.cena=cena;
         this.rocznik=rocznik;
         this.spalanie=spalanie;
    }

    wiek(){
        const data= new Date();
        const rok = data.getFullYear();
        return 'Wiek samochodu wynosi: '+(rok-this.rocznik)+' lat';


    }
    koszt(){
        const paliwo= 7.5;
        return "Koszt przejechania 100km to: "+(this.spalanie*paliwo)+" zl";
    }
}