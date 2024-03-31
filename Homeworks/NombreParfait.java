 import java.util.Scanner;
 public class NombreParfait{
 	  public static void main(String[] args) {
 	  	  Scanner ib = new Scanner(System.in);
             System.out.print("Saisir le nombre: ");
             int nbre = ib.nextInt();
             int nombre_diviseur=0;
             for (int i=1;i <= nbre/2 ;i++ ) {
             	if (nbre % i == 0) {
             		nombre_diviseur+=i;
              	}
             }
              if (nombre_diviseur==nbre) 
              	System.out.println("Ce nombre est parfait");
              else 
                System.out.println("Ce nombre n'est pas parfait");
 	  }
 }