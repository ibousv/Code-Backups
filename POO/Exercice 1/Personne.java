public class Personne {

        private int age;
        private String nom;
       // private double[] comptes; attribut supprimé
        /**
         * @param age
         * @param nom
         * Constructeur exhaustif
         */
        public Personne(int age,String nom){
            this.age = age;
            this.nom = nom;

            /* --Une autre solution proposée--
             * Appel de la fonction nbreCompte() qui crée
             * et renvoie un tableau de type double
            */
           // this.comptes = nbreCompte();

          /*  int n=0;
           Scanner nc = new Scanner(System.in);
           System.out.println("Combien de comptes possédez vous?");
       
           n = nc.nextInt();
           comptes = new double[n];

           Scanner mc = new Scanner(System.in);
           System.out.println("Veuillez saisir les soldes:");
           for (int i = 0; i < comptes.length; i++) {
               System.out.print("Solde "+i+":");
               comptes[i] = mc.nextDouble();
               
           }*/
           

        }

        /**
         *Constructeur par défaut sans paramètres
         */
        public Personne(){
            this(30, "Asterix");
        }


        /**
         * @param p comme personne
         *Constructeur de recopie
         */
        public Personne(Personne p){
            age = p.age;
            nom = p.nom;
        }


          /*
        double[] nbreCompte(){
            
            int n=0;
            Scanner nc = new Scanner(System.in);
            System.out.println("Combien de comptes possédez vous?");
        
            n = nc.nextInt();
            double[] tab = new double[n];

            Scanner mc = new Scanner(System.in);
            System.out.println("Veuillez saisir les soldes:");
            for (int i = 0; i < tab.length; i++) {
                tab[i] = mc.nextDouble();
                
            }

            return tab;
        }
        */


        /**
         *Méthode afficher
         *Permet l'affichage des informations d'une personne
         */
        void afficher(){
            System.out.println(" nom: "+nom+"\n"+
                                "Age :" +age+"\n"
                               // +"Les différents soldes:"
                                );

            // for (double d : comptes) {
            //     System.out.println(d+" ");
            // }
        }
        

        /**
         *Méthode diviserParDeux
         *Permet de diviser le solde par 2
         */
        
        // void diviserPardeux(){
        //     for (int i = 0; i < comptes.length; i++) {
        //         comptes[i] /= 2;
                
        //     }
        }

}
