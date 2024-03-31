public class Etudiant extends Personne{
    int noteMoyenne;
    boolean faineant;

    /**Constructeur Etudiant
     * @param age
     * @param nom
     * @param noteMoyenne
     * @param faineant
     *
     */
    public Etudiant(int age, String nom, int noteMoyenne, boolean faineant) {
        super(age, nom);
        this.noteMoyenne = noteMoyenne;
        this.faineant = faineant;
    }

    
}
