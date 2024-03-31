 import java.util.Scanner;
 public class NombrePremier{
 	  public static void main(String[] args) {
 	  	  Scanner ib = new Scanner(System.in);
             System.out.print("Saisir le nombre: ");
             int nbre = ib.nextInt();
             int nombre_diviseur=0;
             for (int i=1;i <= nbre ;i++ ) {
             	if (nbre % i == 0) {
             		nombre_diviseur++;
              	}
             }
              if (nombre_diviseur==2) 
              	System.out.println("Ce nombre est premier");
              else 
                System.out.println("Ce nombre n'est pas premier");
 	  }
 }