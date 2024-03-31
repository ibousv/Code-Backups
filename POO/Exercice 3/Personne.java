public class Personne {

        private int age;
        private String nom;
        
        //Getteur pour avoir le nom d'une personne
        public String getNom() {
            return nom;
        }

        /** Constructeur exhaustif
         * @param age
         * @param nom
         */
        public Personne(int age,String nom){
            this.age = age;
            this.nom = nom;

        }

        /**Constructeur par défaut sans paramètres
         *
         */
        public Personne(){
            this(30, "Asterix");
        }


        /**Constructeur de recopie
         * @param p comme personne
         *
         */
        public Personne(Personne p){
            age = p.age;
            nom = p.nom;
        }


        

        /**Méthode afficher
         *
         *Permet l'affichage des informations d'une personne
         */
        void afficher(){
            System.out.println("Nom :"+nom+"\n"+"Age :" +age);
        }

        /**Méthode afficher --overloading
         * @param compact
         */
        void afficher(boolean compact){
            if (compact) {
                System.out.println("["+nom+","+" "+age+"]");
            } else {
                afficher();
            }
        }
        
}

