//
//Created by ibrahima
//
import java.awt.Point;

public class Bip{
//	final static double N = 20;

	 public static void main(String[] args) {
	 	 Point p = new Point();

	 	 int x = 0, y = 0;
	 	 double position_courante=0;
	 	 while(position_courante <= N){
         p.translate(x,y);
         position_courante = Math.sqrt(Math.pow(x,2) + Math.pow(y,2));
           System.out.println("d : "+ position_courante);
         x++;
         y++;
         } 
	 }
}