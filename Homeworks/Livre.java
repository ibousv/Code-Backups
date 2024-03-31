
       	public class Livre{
    // Variables
     private String titre, auteur;
    private int nbPages;
      private double prix = 0;
       private boolean prixFixe = false;
     private  int cpt = 1;

   // Constructeur
      public Livre(String unAuteur, String unTitre) {
        auteur = unAuteur;
        titre = unTitre;
      }
      
         public Livre() {
           auteur = auteur;
          titre = titre;
          nbPages = nbPages;

        }

       public Livre(String unAuteur, String unTitre, int nbPages) {
        auteur = unAuteur;
        titre = unTitre;
        this.nbPages = nbPages;
      }

         public Livre(String unAuteur, String unTitre, int nbPages,double unPrix) {
            auteur = unAuteur;
          titre = unTitre;
           this.nbPages = nbPages;
           prix = unPrix;
           if (prix > 0 ) {
               prixFixe = true ;
           }
      }
      
    // Accesseur
    public String getAuteur() {
     return auteur;
    }

    public String getTitre(){
        return titre;
    }
     
     public int getNbPages(){
        return nbPages;
     }

      public double getPrix(){
         return prix;
      }

   // Modificateur
   void setNbPages(int n) {
     if (n>0) {
         nbPages = n;
     }
     else
        System.out.println("Erreur le nombre de page ne peut être négatif ou nul"); 
        System.exit(0);
   }

     void setAuteur(String  unAuteur) {
      auteur = unAuteur;
   }

    void setTitre(String unTitre){
        titre = unTitre;
    }
    
    void setPrix(double unPrix){
       if (cpt < 2) {
             prix = unPrix; prixFixe = true;
             cpt++;
        }
        else{
            System.out.println("Erreur, le prix ne peut être changé");
             System.exit(0);
        }
      
    }

    void afficheToi(){
        System.out.println(toString());
    }
    
    public String toString(){
      String description;
        if (prixFixe) {
            description = "\n Description du livre : \n -> Auteur = "+getAuteur()+"\n -> Titre = "+titre+"\n -> Nombres de pages = "+nbPages+"\n Prix = fixé à "+prix+"£";
        }
        else{
            description = "\n Description du livre : \n -> Auteur = "+auteur+"\n -> Titre = "+titre+"\n -> Nombres de pages = "+nbPages+"\n Prix = : pas encore fixé";
        }
       
       return description;
    }
}
