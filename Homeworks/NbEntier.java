//
//Created by ibrahima
//
public class NbEntier{
	int val;
    
    public NbEntier(){
         val = 0;
    }

    public NbEntier(int val){
         this.val = val;
    }

    public int setValue(int newVal){
    	int var = val;//var -> variable temporaire
    	val = newVal;
    	return var;//var contient l'ancienne valeur 
    }

    public int getValue(){
    	return val;
    }

    /*METHODE D'ACCES  */
   public setxxx(){

    }

   public  getxxx(){
   
    }
   

    public String toString(){

    }
}