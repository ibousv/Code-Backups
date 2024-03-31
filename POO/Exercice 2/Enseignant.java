public class Enseignant extends Personne{
    int nbHeuresCours;
    boolean grincheux;

    /**Constructeurs Enseignant
     * @param age
     * @param nom
     * @param nbHeuresCours
     * @param grincheux
     */
    public Enseignant(int age, String nom, int nbHeuresCours, boolean grincheux) {
        super(age, nom);
        this.nbHeuresCours = nbHeuresCours;
        this.grincheux = grincheux;
    }

    
}
