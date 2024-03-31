public class ProfEleveMain{
    /**
     * Méthode main
     */
    public static void main(String[] args) {
        Personne p = new Personne(45, "Nimbus");
        Enseignant en = new Enseignant(45, "Nimbus", 45, true);
        Etudiant et = new Etudiant(20, "Soupaloigonycrouton", 2, true);
        // p.afficher();
        // en.afficher();
        // et.afficher();
        
        
        
         Personne[] tableau =  {  new Enseignant(36, "Mr Dia", 10, false),
                                new Enseignant(40, "MR Faye", 10, true),
                                new Etudiant(20, "Babacar", 2, true),
                                new Etudiant(22, "OUsseynou", 13, false),
                                new Etudiant(19, "Ismaïla", 17, true)
                            };
        
        for (Personne i : tableau) {
            i.afficher();
            if (i instanceof Enseignant) {
                System.out.println(i.getNom()+" est un enseignant.");
            }else{
                System.out.println(i.getNom()+" est un etudiant.");
            }
        }
    }
}
