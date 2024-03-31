 import java.util.Scanner;

 public class NombreAmie{
 	 public static void main(String[] args) {
 	 	 Scanner ib = new Scanner(System.in);
 	 	  System.out.print("Saisir le premier nombre: ");
 	 	 int N1= ib.nextInt();
 	 	 System.out.print("Saisir le deuxieme nombre: ");
 	 	 int N2= ib.nextInt();
 	 	   int sommediv1=0;
 	 	   int sommediv2=0;

 	 	    for (int i=1 ;i<N1 ;i++ ) {//i<N1/2
 	 	    	if (N1 % i == 0) {
 	 	    		sommediv1=sommediv1+i;
 	 	    	}
 	 	    }

 	 	      for (int i=1 ;i<N2 ;i++ ) {//i<N2/2
 	 	    	if (N2 % i == 0) {
 	 	    		sommediv2=sommediv2+i;
 	 	    	}
 	 	    }

 	 	      if (sommediv1==N2 && sommediv2==N1) 
 	 	      	 System.out.println(N1+" et "+N2+" sont des nombres amies.");
 	 	      else 
 	 	      	System.out.println(N1+" et "+N2+" ne sont pas des nombres amies.");
                 
 	 }
 }