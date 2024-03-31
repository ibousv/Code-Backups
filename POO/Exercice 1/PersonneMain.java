public class PersonneMain {

    /**
     * @param Personne comme constructeur
     */
    public static void main(String[] args){
            Personne p1 = new Personne(20,"ibrahima");
            Personne p2 = new Personne();
            Personne p3 = new Personne(p2);

            // p1.diviserPardeux();
            // p1.afficher();
            // p2.afficher();
    }
}