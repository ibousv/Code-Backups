import java.awt.Point;
import java.util.Scanner;
public class Robot{
	String nom;
  private Point position ;
	int vitesse;
     int niveau = 100;
//Constructeur
 public Robot(String myrobot){
     nom = myrobot;
     position = new Point();// équivaut à x=0 et y=0
     vitesse = 0;
 }
           /* DEPLACEMENT */
   //Lorsque le premier argument de la méthode translate 
   // est vitesse c'est x qui se déplace tandisque y reste sur l'origine du repère  
  //Lorsque le deuxième argument de la méthode translate
  // est vitesse c'est y qui se déplace tandisque x reste sur l'origine du repère        
 public void allerALest(){
    position.translate(vitesse,0);
    niveau--;
 }

  public void allerALouest(){
    position.translate(-vitesse,0);
    niveau--;
 }

  public void allerAuNord(){
    position.translate(0,vitesse);
    niveau--;
 }

  public void allerAuSud(){
    position.translate(0,-vitesse);
    niveau--;
 }

 public void accelerer(){
    if (vitesse<10) {
         vitesse++;
    }
 }

 public void decelerer(){
     if (vitesse>0) 
          vitesse--;  
 }

 public void stop(){
 	vitesse = 0;
    System.out.println("Arret , position : "+position);
 }
 
 public Point getPosition(){
   return position;
 }

  public void sePresenter(){
 	System.out.println("Le nom du robot:"+ nom +", position actuelle:"+ position);
 }

  public void setNiveau(int n){
        niveau = n;
    }

  public int getNiveau(){
    if (niveau == 0){
        stop();
    }
   return niveau;
 }

 public void sePromener(){
    double mouvement = Math.random();
       vitesse += (int)mouvement;
       int choix=0;
       Scanner sc = new Scanner(System.in);
       System.out.println("--------------------------");
       System.out.println("~ 1-Presenter le robot   ~");
       System.out.println("~ 2-Accelerer            ~");
       System.out.println("~ 3-Decelerer            ~");
       System.out.println("~ 4-Aller a l Est        ~");
       System.out.println("~ 5-Aller a l OuEst      ~");
       System.out.println("~ 6-Aller au Nord        ~");
       System.out.println("~ 7-Aller au Sud         ~");
       System.out.println("~ 8-Arreter le robot     ~");
       System.out.println("~ 9-Afficher la position ~");
       System.out.println("~ 10-Mettre le plein     ~");
       System.out.println("~ 11-Voir le carburant   ~");
       System.out.println("--------------------------");
       System.out.print(" Veuillez choisir un numero: ");
        choix = sc.nextInt();
        switch(choix){
            case 1:sePresenter();sePromener();break;
            case 2: accelerer();sePromener();break;
            case 3: decelerer();sePromener();break;
            case 4: allerALest();sePromener();break;
            case 5:allerALouest();sePromener();break;
            case 6:allerAuNord();sePromener();break;
            case 7:allerAuSud();sePromener();break;
            case 8:stop();sePromener();break;
            case 9:System.out.println(getPosition());sePromener();break;
            case 10:setNiveau(100);sePromener();break;
            case 11:System.out.println(getNiveau());sePromener();break;
            default : return;
        }

  }

}